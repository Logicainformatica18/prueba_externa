<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () 
{
    Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);
   

    Route::resource('usuarios', App\Http\Controllers\UserController::class);
    Route::post('userCreate', 'UserController@create');
    Route::post('userStore', [App\Http\Controllers\UserController::class, 'store']);
    Route::delete('userDestroy',[App\Http\Controllers\UserController::class, 'destroy']);
    Route::post('userEdit', [App\Http\Controllers\UserController::class, 'edit']);
    Route::put('userUpdate', [App\Http\Controllers\UserController::class, 'update']);
    Route::post('userShow', [App\Http\Controllers\UserController::class, 'show']);
    Route::post('userUpdateProfile', [App\Http\Controllers\UserController::class, 'updateProfile']);

    
});