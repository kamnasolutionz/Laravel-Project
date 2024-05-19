<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}
Route::get('/user', [UserController::class, 'index']);