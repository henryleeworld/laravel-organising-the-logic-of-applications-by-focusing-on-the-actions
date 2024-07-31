<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('users/password/', [UsersController::class, 'updatePassword']);
