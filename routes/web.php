<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('template');
});
Route::get('/landing-page', function () {
    return view('landing-page');
});

