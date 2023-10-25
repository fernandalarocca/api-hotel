<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Criando a model de hóspede
class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'cpf',
        'name',
        'age',
        'gender'
    ];

    public function guest()
    {
        return $this->hasMany(Guest::class, 'guest_id', 'id');
    }
}
