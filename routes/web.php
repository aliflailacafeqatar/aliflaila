<?php

use Illuminate\Support\Facades\Route;
use App\Models\MenuCategory;
use App\Models\FoodItem;

// Home Page
Route::get('/', function () {
    return view('home.welcome'); 
});

// Menu Page
Route::get('/menu', function () {
    // Fetch active categories and their active food items
    $categories = MenuCategory::with(['foodItems' => function($query) {
        $query->where('is_active', true);
    }])->where('is_active', true)->get();

    // Pass the $categories variable to your home.menu view
    return view('home.menu', compact('categories'));
});

// Reservation Page
Route::get('/bookatable', function () {
    // Fetch active food items for the pre-order slider
    $foodItems = FoodItem::where('is_active', true)->get();
    
    return view('home.bookatable', compact('foodItems'));
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