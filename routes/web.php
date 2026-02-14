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

Route::get('/blogs', function () {
    return view('page.blogs');
});

Route::get('/loginn', function () {
    return view('page.loginn');
});

Route::get('/portfolio', function () {
    return view('page.portfolio');
});