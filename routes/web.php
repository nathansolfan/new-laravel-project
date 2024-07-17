<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// User related routes
Route::get('/', [UserController::class, "showCorrectHomepage"])->name('login');
Route::post('/register', [UserController::class, 'register'])->middleware('guest');
Route::post('/login', [UserController::class, 'login'])->middleware('guest');
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth'); // Removed middleware

// Blog post related routes
// Route::get('/create-post', function () {
//     Log::info('Accessing /create-post route');
//     return app()->call('App\Http\Controllers\PostController@showCreateForm');
// })->middleware('guest');


Route::get('/create-post', [PostController::class, 'showCreateForm'])->middleware('mustBeLoggedIn'); // Removed middleware
Route::post('/create-post', [PostController::class, 'storeNewPost'])->middleware('mustBeLoggedIn'); // Removed middleware

// dont have to be named post, it express dinamic {}
Route::get('/post/{post}', [PostController::class, 'viewSinglePost']);

// Profile related routes
Route::get('/profile/{user:username}', [UserController::class, 'profile']);

// LOG Route
Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
