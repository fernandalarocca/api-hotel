<?php

namespace App\Http\Controllers;

use App\Actions\Rent\CreateRentAction;
use App\Http\Requests\RentRequest;
use App\Http\Resources\RentResource;
use App\Models\Rent;

class RentController extends Controller
{
    public function list()
    {
        $perpage = request()->query('limit', 5);
        $rents = Rent::query()->paginate($perpage);
        return RentResource::collection($rents);
    }

    public function show(Rent $rent)
    {
        return RentResource::make($rent);
    }

    public function create(RentRequest $request)
    {
        $data = $request->validated();
        $rent = (new CreateRentAction())->execute($data);
        return RentResource::make($rent);
    }

    public function update(RentRequest $request, Rent $rent)
    {
        $data = $request->validated();
        $rent->update($data);
        return RentResource::make($rent);
    }

    public function delete(Rent $rent)
    {
        $rent->delete();
        return $rent;
    }
}
