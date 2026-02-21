<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VisionGalleryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BrandController;
use App\Models\Team;
use App\Models\VisionGallery;
use App\Models\Testimonial;

Route::get('/', function () {
    $teams = Team::all();
    $testimonials = Testimonial::latest()->get();
    return view('page.home', compact('teams', 'testimonials'));
});

Route::get('/about-us', function () {
    $visions = VisionGallery::latest()->get(); 
    return view('page.about-us', compact('visions'));
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

// Route::get('/loginn', function () {
//     return view('page.loginn');
// });

Route::get('/portfolio', function () {
    return view('page.portfolio');
});

Route::get('/service', function () {
    return view('page.service');
});

// Frontend Routes
Route::get('/team', function () {
    $teams = Team::all();
    return view('page.team', compact('teams'));
});

// Admin Panel Routes with Security



Route::middleware(['auth'])->prefix('admin')->group(function () {
    // Eikhane 'team' namer resource route define kora holo
    Route::resource('team', TeamController::class);
     Route::resource('vision', VisionGalleryController::class);
      Route::resource('testimonial', TestimonialController::class);
       Route::resource('brand', BrandController::class);
});