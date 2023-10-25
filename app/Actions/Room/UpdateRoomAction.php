<?php

namespace App\Actions\Room;

use App\Http\Resources\RoomResource;
use App\Models\Room;

class UpdateRoomAction
{
    //Ação para editar um quarto
    public function execute(array $data, Room $room): RoomResource
    {
        $room->update($data);
        return RoomResource::make($room);
    }
}
