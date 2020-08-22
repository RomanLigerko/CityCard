<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    public function rules()
    {
        $rules = [
            'phone_number'=> 'required|numeric|digits:10',
            'card_number'=> 'required|numeric|digits:7',
        ];
        return $rules;
    }

    public function messages()
    {
        return [
            'numeric' => 'Поле мусить містити лише цифри',
        ];
    }
}
