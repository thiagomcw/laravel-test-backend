<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContractResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                  => $this->getKey(),
            'contractor_document' => $this->contractor_document,
            'contractor_email'    => $this->contractor_email,
            'contractor_name'     => $this->contractor_name,
            'property'            => $this->when($request->get('include_property'), function () {
                return new PropertyResource($this->property);
            }),
        ];
    }
}
