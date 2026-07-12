<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home.welcome'); 
});

// Menu Page
Route::get('/menu', function () {
    return view('home.menu');
});

// Reservation Page
Route::get('/bookatable', function () {
    return view('home.bookatable');
});

// Blog Page
Route::get('/blog', function () {
    return view('home.blog');
});

// About Us Page 
Route::get('/aboutus', function () {
    return view('home.aboutus');
});

// Gallery Page
Route::get('/gallery', function () {
    return view('home.gallery');
});

// Contact Us Page
Route::get('/contactus', function () {
    return view('home.contactus');
});

// Thank You Page (Triggered when the user clicks 'Continue' on the booking page)
Route::get('/thankyou', function () {
    return view('home.thankyou');
});