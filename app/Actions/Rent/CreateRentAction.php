<?php

namespace App\Actions\Rent;

use App\Models\Rent;

class CreateRentAction
{
    public function execute(array $data): Rent
    {
        return app(Rent::class)->create($data);
    }
}
