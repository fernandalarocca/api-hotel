<?php

namespace App\Actions\Room;

use App\Http\Resources\RoomResource;
use App\Models\Room;

class CreateRoomAction
{
    public function execute(array $data): RoomResource
    {
        $room = Room::make($data);
        $room->save();
        return RoomResource::make($room);
    }
}
