<?php

use Illuminate\Support\Facades\Route;

Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::middleware(['auth:sanctum', 'role:admin'])->prefix('admin')->group(function () {
   Route::get('rooms', [\App\Http\Controllers\RoomController::class, 'list']);
   Route::get('rooms/{room}', [\App\Http\Controllers\RoomController::class, 'show']);
   Route::post('rooms', [\App\Http\Controllers\RoomController::class, 'create']);
   Route::put('rooms/{room}', [\App\Http\Controllers\RoomController::class, 'update']);
   Route::delete('rooms/{room}', [\App\Http\Controllers\RoomController::class, 'delete']);

   Route::get('guests', [\App\Http\Controllers\GuestController::class, 'list']);
   Route::get('guests/{guest}', [\App\Http\Controllers\GuestController::class, 'show']);
   Route::post('guests', [\App\Http\Controllers\GuestController::class, 'create']);
   Route::put('guests/{guest}', [\App\Http\Controllers\GuestController::class, 'update']);
   Route::delete('guests/{guest}', [\App\Http\Controllers\GuestController::class, 'delete']);

   Route::get('rents', [\App\Http\Controllers\RentController::class, 'list']);
   Route::get('rents/{rent}', [\App\Http\Controllers\RentController::class, 'show']);
   Route::post('rents', [\App\Http\Controllers\RentController::class, 'create']);
   Route::put('rents/{rent}', [\App\Http\Controllers\RentController::class, 'update']);
   Route::delete('rents/{rent}', [\App\Http\Controllers\RentController::class, 'delete']);

   Route::get('users', [\App\Http\Controllers\UserController::class, 'list']);
   Route::get('users/{user}', [\App\Http\Controllers\UserController::class, 'show']);
   Route::post('users', [\App\Http\Controllers\UserController::class, 'create']);
   Route::put('users/{user}', [\App\Http\Controllers\UserController::class, 'update']);
   Route::delete('users/{user}', [\App\Http\Controllers\UserController::class, 'delete']);
});
