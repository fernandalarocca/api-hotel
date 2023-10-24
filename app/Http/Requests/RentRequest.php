<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'check_in' => ['required', 'date'],
            'check_out' => ['required', 'date'],
            'guest_id' => ['required', 'integer', 'exists:guests,id'],
            'room_id' => ['required', 'integer', 'exists:rooms,id']
        ];
    }
}
