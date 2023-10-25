<?php

namespace App\Actions\Rent;

use App\Models\Rent;

class CreateRentAction
{
    //Ação para criar um aluguel
    public function execute(array $data): Rent
    {
        return app(Rent::class)->create($data);
    }
}
