<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// Criando a request de quarto
class RoomRequest extends FormRequest
{
    public function rules()
    {
        return [
            'number' => ['required', 'integer'],
            'capacity' => ['required', 'integer'],
            'description' => ['required', 'string', 'min:10', 'max:255'],
            'wifi' => ['required', 'string', 'min:3', 'max:255']
        ];
    }
}
