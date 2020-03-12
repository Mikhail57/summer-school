<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
            'phone' => 'required|min:7|max:20',
            'email' => 'email:rfc,dns',
            'personal' => 'bool|accepted'
        ];
    }

    public function attributes()
    {
        return [
            'personal' => 'Согласие на обработку Персональных Данных',
            'firstName' => 'Имя',
            'lastName' => 'Фамилия',
            'middleName' => 'Отчество',
            'phone' => 'Номер телефона',
            'email' => 'Электронная почта',
        ];
    }


}
