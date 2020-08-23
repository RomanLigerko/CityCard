<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserRequest extends FormRequest
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
            'email'=> 'required|email',
            'password'=> 'required|min:6',
        ];
        return $rules;
    }

    public function messages()
    {
        return [
            'min' => 'Мінімальна довжина: 6 символів',
        ];
    }
}
