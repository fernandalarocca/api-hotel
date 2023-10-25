<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

// Criando a resource de hóspede
class GuestResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'cpf' => $this->cpf,
            'name' => $this->name,
            'age' => $this->age,
            'gender' => $this->gender,
            'created_at' => $this->created_at->format('d/m/Y H:i'),
            'updated_at' => $this->updated_at->format('d/m/Y H:i')
        ];
    }
}
