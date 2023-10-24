<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestRequest extends FormRequest
{
    public function rules()
    {
        return [
            'cpf' => ['required', 'string', 'min:10', 'max:255'],
            'name' => ['required', 'string', 'min:10', 'max:255'],
            'age' => ['required', 'integer'],
            'gender' => ['required', 'string', 'min:5', 'max:255']
        ];
    }
}
