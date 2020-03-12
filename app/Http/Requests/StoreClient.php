<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClient extends FormRequest
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
            'firstName' => 'required|min:2|max:60',
            'lastName' => 'required|min:2|max:60',
            'middleName' => 'min:2|max:60',
            'phone' => 'min:7|max:20',
            'email' => 'email:rfc,dns',
            'personal' => 'bool|required'
        ];
    }

    public function messages()
    {
        return [
            'personal.required' => 'Необходимо подтвердить согласие на обработку Персональных Данных.'
        ];
    }


}
