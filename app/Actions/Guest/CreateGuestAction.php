<?php

namespace App\Actions\Guest;

use App\Http\Resources\GuestResource;
use App\Models\Guest;

class CreateGuestAction
{
    //Ação para criar um hóspede
    public function execute(array $data): GuestResource
    {
        $guest = Guest::make($data);
        $guest->save();
        return GuestResource::make($guest);
    }
}
