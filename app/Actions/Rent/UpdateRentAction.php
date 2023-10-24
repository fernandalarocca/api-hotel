<?php

namespace App\Actions\Rent;

use App\Http\Resources\RentResource;
use App\Models\Rent;

class UpdateRentAction
{
    public function execute(array $data, Rent $loan): RentResource
    {
        $loan->update($data);
        return RentResource::make($loan);
    }
}
