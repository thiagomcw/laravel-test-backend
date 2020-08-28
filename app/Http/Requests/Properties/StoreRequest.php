<?php

namespace App\Http\Requests\Properties;

use Illuminate\Foundation\Http\FormRequest;

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
            'email'        => 'required|email|max:150',
            'street'       => 'required|max:255',
            'number'       => 'required|max:50',
            'complement'   => 'nullable|max:100',
            'neighborhood' => 'required|max:150',
            'city'         => 'required|max:150',
            'state'        => 'required|max:2',
        ];
    }
}
