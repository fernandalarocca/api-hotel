<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Criando a model de quarto
class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'capacity',
        'description',
        'wifi'
    ];

    public function room()
    {
        return $this->hasMany(Room::class, 'room_id', 'id');
    }
}
