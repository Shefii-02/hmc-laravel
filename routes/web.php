<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return  Inertia::render('Home');
});


Route::get('/test', function () {
    return  12346;
});
