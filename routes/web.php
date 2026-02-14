<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/career', function () {
    return view('page.career');
});

Route::get('/contact-us', function () {
    return view('page.contact-us');
});
