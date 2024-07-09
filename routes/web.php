<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

// ( '/', [a,b]) where a = class, b = actual page
Route::get('/', [ExampleController::class, "homepage"]);

Route::get('/about', [ExampleController::class, "aboutPage"]);
