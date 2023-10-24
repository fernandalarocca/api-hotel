<?php

namespace App\Actions\Room;

use App\Http\Resources\RoomResource;
use App\Models\Room;

class UpdateRoomAction
{
    public function execute(array $data, Room $room): RoomResource
    {
        $room->update($data);
        return RoomResource::make($room);
    }
}
