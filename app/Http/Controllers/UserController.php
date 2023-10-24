<?php

namespace App\Http\Controllers;

use App\Actions\User\CreateUserAction;
use App\Actions\User\UpdateUserAction;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;

class UserController extends Controller
{
    public function list()
    {
        $perpage = request()->query('limit', 5);
        $users = User::query()->paginate($perpage);
        return UserResource::collection($users);
    }

    public function show(User $user)
    {
        return UserResource::make($user);
    }

    public function create(UserRequest $request)
    {
        $data = $request->validated();
        $user = (new CreateUserAction())->execute($data);
        return UserResource::make($user);
    }

    public function update(UserRequest $request, User $user)
    {
        $data = $request->validated();
        $user = (new UpdateUserAction())->execute($data, $user);
        return UserResource::make($user);
    }

    public function delete(User $user)
    {
        $user->delete();
        return $user;
    }
}
