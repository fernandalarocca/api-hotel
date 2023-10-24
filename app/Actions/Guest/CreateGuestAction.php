<?php

namespace App\Actions\Guest;

use App\Http\Resources\GuestResource;
use App\Models\Guest;

class CreateGuestAction
{
    public function execute(array $data): GuestResource
    {
        $guest = Guest::make($data);
        $guest->save();
        return GuestResource::make($guest);
    }
}
