<?php
// ROUTES


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

// USER ROUTES
// ( '/', [a,b]) where a = class, b = actual page
Route::get('/', [UserController::class, "showCorrectHomepage"]);
// takes 2 args, the path and func/method
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

// BLOG ROUTES
Route::get('/create-post', [PostController::class, 'showCreateForm']);
// POST when created post
Route::post('/create-post', [PostController::class, 'storeNewPost']);

Route::get('/post/{post}', [PostController::class, 'viewSinglePost']); 
// viewSinglePost has the same name on the PostController
