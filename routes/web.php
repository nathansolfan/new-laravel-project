<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '<h1>Homepage</h1><a href="/about">View the about page</a>';
});

Route::get('/about', function () {
    return '<h1>About Page</h1><a href="/">Back to home</a>';
});
