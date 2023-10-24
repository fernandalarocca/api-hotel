<?php

namespace App\Http\Controllers;

use App\Actions\Guest\CreateGuestAction;
use App\Actions\Guest\UpdatedGuestAction;
use App\Http\Requests\GuestRequest;
use App\Http\Resources\GuestResource;
use App\Models\Guest;

class GuestController extends Controller
{
    public function list()
    {
        $perpage = request()->query('limit', 5);
        $guests = Guest::query()->paginate($perpage);
        return GuestResource::collection($guests);
    }

    public function show(Guest $guest)
    {
        return GuestResource::make($guest);
    }

    public function create(GuestRequest $request)
    {
        $data = $request->validated();
        $guest = (new CreateGuestAction())->execute($data);
        return GuestResource::make($guest);
    }

    public function update(GuestRequest $request, Guest $guest)
    {
        $data = $request->validated();
        $guest = (new UpdatedGuestAction())->execute($data, $guest);
        return GuestResource::make($guest);
    }

    public function delete(Guest $guest)
    {
        $guest->delete();
        return $guest;
    }
}
