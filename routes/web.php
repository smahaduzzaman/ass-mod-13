<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/assignment', function () {
    return "Hello World";
});

Route::get('/blade', function () {
    return view('congrats');
});





