<?php

namespace App\Http\Requests\Contracts;

use App\Models\Contract;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'property_id'         => 'required|unique:contracts|exists:properties,id',
            'contractor_type'     => [
                'required',
                Rule::in(array_keys(Contract::CONTRACTOR_TYPES)),
            ],
            'contractor_document' => $this->defineContractDocumentRule(),
            'contractor_email'    => 'required|email|max:150',
            'contractor_name'     => 'required|max:255',
        ];
    }

    /**
     * @return string
     */
    private function defineContractDocumentRule()
    {
        $contractorType = $this->input('contractor_type');

        if ($contractorType === 'person') {
            return 'cpf';
        }

        if ($contractorType === 'company') {
            return 'cnpj';
        }

        return 'required';
    }
}
