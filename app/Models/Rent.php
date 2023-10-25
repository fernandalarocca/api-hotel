<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Criando a model de aluguel
class Rent extends Model
{
    use HasFactory;

    protected $fillable = [
        'check_in',
        'check_out',
        'guest_id',
        'room_id'
    ];

    public function guest()
    {
        return $this->belongsTo(Guest::class, 'guest_id', 'id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }
}
