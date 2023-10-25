<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

// Criando a resource de quarto
class RoomResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'number' => $this->number,
            'capacity' => $this->capacity,
            'description' => $this->description,
            'wifi' => $this->wifi,
            'created_at' => $this->created_at->format('d/m/Y H:i'),
            'updated_at' => $this->updated_at->format('d/m/Y H:i')
        ];
    }
}
