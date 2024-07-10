<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExampleController;

// ( '/', [a,b]) where a = class, b = actual page
Route::get('/', [ExampleController::class, "homepage"]);

Route::get('/about', [ExampleController::class, "aboutPage"]);

// takes 2 args, the path and func/method
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
