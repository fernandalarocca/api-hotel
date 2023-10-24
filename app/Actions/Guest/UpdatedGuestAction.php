<?php

namespace App\Actions\Guest;

use App\Http\Resources\GuestResource;
use App\Models\Guest;

class UpdatedGuestAction
{
    public function execute(array $data, Guest $guest): GuestResource
    {
        $guest->update($data);
        return GuestResource::make($guest);
    }
}
