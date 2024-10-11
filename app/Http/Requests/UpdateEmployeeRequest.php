<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'departement_id' => 'required|integer',
            'first_name'=>'required|string',
            'last_name'=>'required|string',
            'email'=>'required|',
            'phone'=>'required',
            'montant_journalier'=>'required|min:2'   
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Le mail requis',
         
            'phone.required' => 'Le numero de telephone est requis',
            

           


        ];
    }
}
