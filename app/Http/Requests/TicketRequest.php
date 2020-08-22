<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
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
            'name'=> 'required|min:3|max:255',
            'price'=> 'required|max:255'
        ];
        return $rules;
    }

    public function messages()
    {
        return [
            'required' => 'Заповніть назву',
            'min' => 'Мінімальна кількість символів: 3',
            'max' => 'Максимальна кількість символів: 255'
        ];
    }
}
