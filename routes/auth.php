<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\RegisterUserController;



Route::post('/register', RegisterUserController::class )->middleware('guest');

