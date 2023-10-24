<?php

namespace App\Http\Controllers;


use App\Actions\Room\CreateRoomAction;
use App\Actions\Room\UpdateRoomAction;
use App\Http\Requests\RoomRequest;
use App\Http\Resources\RoomResource;
use App\Models\Room;

class RoomController extends Controller
{
    public function list()
    {
        $perpage = request()->query('limit', 5);
        $rooms = Room::query()->paginate($perpage);
        return RoomResource::collection($rooms);
    }

    public function show(Room $room)
    {
        return RoomResource::make($room);
    }

    public function create(RoomRequest $request)
    {
        $data = $request->validated();
        $room = (new CreateRoomAction())->execute($data);
        return RoomResource::make($room);
    }

    public function update(RoomRequest $request, Room $room)
    {
        $data = $request->validated();
        $room = (new UpdateRoomAction())->execute($data, $room);
        return RoomResource::make($room);
    }

    public function delete(Room $room)
    {
        $room->delete();
        return $room;
    }
}
