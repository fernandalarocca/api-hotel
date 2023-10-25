<?php

namespace App\Http\Controllers;

use App\Actions\User\CreateUserAction;
use App\Actions\User\UpdateUserAction;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;

class UserController extends Controller
{
    // Método para listar todos os usuários
    public function list()
    {
        $perpage = request()->query('limit', 5);
        $users = User::query()->paginate($perpage);
        return UserResource::collection($users);
    }

    // Método para listar um único usuário
    public function show(User $user)
    {
        return UserResource::make($user);
    }

    // Método para criar um usuário
    public function create(UserRequest $request)
    {
        $data = $request->validated();
        $user = (new CreateUserAction())->execute($data);
        return UserResource::make($user);
    }

    // Método para editar um usuário
    public function update(UserRequest $request, User $user)
    {
        $data = $request->validated();
        $user = (new UpdateUserAction())->execute($data, $user);
        return UserResource::make($user);
    }

    // Método para deletar um usuário
    public function delete(User $user)
    {
        $user->delete();
        return $user;
    }
}
