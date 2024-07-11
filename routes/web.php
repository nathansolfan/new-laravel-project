<?php
// ROUTES


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

// USER ROUTES
// ( '/', [a,b]) where a = class, b = actual page
// nr30 - / labels login if user needs to login using ->name()
// USER ROUTES
Route::get('/', [UserController::class, "showCorrectHomepage"])->name('login');
Route::post('/register', [UserController::class, 'register'])->middleware('guest');
Route::post('/login', [UserController::class, 'login'])->middleware('guest');
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// BLOG ROUTES
// nr30 - add ->middleware('auth) - 1 example like 'guest'
Route::get('/create-post', [PostController::class, 'showCreateForm'])->middleware('auth');


// POST when created post
Route::post('/create-post', [PostController::class, 'storeNewPost'])->middleware('auth');
Route::get('/post/{post}', [PostController::class, 'viewSinglePost']);
// viewSinglePost has the same name on the PostController
