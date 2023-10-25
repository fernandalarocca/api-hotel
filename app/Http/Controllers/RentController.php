<?php

namespace App\Http\Controllers;

use App\Actions\Rent\CreateRentAction;
use App\Http\Requests\RentRequest;
use App\Http\Resources\RentResource;
use App\Models\Rent;

class RentController extends Controller
{
    // Método para listar todos os aluguéis
    public function list()
    {
        $perpage = request()->query('limit', 5);
        $rents = Rent::query()->paginate($perpage);
        return RentResource::collection($rents);
    }

    // Método para listar um único aluguel
    public function show(Rent $rent)
    {
        return RentResource::make($rent);
    }

    // Método para criar um aluguel
    public function create(RentRequest $request)
    {
        $data = $request->validated();
        $rent = (new CreateRentAction())->execute($data);
        return RentResource::make($rent);
    }

    // Método para editar um aluguel
    public function update(RentRequest $request, Rent $rent)
    {
        $data = $request->validated();
        $rent->update($data);
        return RentResource::make($rent);
    }

    // Método para deletar um aluguel
    public function delete(Rent $rent)
    {
        $rent->delete();
        return $rent;
    }
}
