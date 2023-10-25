<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

// Criando a resource de aluguel
class RentResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'check_in' => $this->check_in,
            'check_out' => $this->check_out,
            'guest' => GuestResource::make($this->guest),
            'room' => RoomResource::make($this->room),
            'created_at' => $this->created_at->format('d/m/Y H:i'),
            'updated_at' => $this->updated_at->format('d/m/Y H:i')
        ];
    }
}
