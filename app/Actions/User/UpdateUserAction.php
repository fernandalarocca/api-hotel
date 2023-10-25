<?php

namespace App\Actions\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UpdateUserAction
{
    //Ação para editar um usuário
    public function execute(array $data, User $user): User
    {
        if ($password = data_get($data, 'password')){
            $data['password'] = Hash::make($password);
        }

        $user->update($data);
        return $user;
    }
}
