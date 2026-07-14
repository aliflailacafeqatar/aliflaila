<?php

use Illuminate\Support\Facades\Route;
use App\Models\MenuCategory;
use App\Models\FoodItem;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\InvoiceController; // Added InvoiceController

// Home Page
Route::get('/', function () {
    return view('home.welcome'); 
});

// Menu Page
Route::get('/menu', function () {
    $categories = MenuCategory::with(['foodItems' => function($query) {
        $query->where('is_active', true);
    }])->where('is_active', true)->get();

    return view('home.menu', compact('categories'));
});

// Reservation Page (View the Form)
Route::get('/bookatable', function () {
    $foodItems = FoodItem::where('is_active', true)->get();
    return view('home.bookatable', compact('foodItems'));
});

// Handle Reservation Form Submission
Route::post('/bookatable/submit', [ReservationController::class, 'store'])->name('bookatable.submit');

// --- NEW INVOICE ROUTE ---
Route::get('/reservations/{reservation}/invoice', [InvoiceController::class, 'generate'])->name('reservation.invoice');

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

// Thank You Page
Route::get('/thankyou', function () {
    return view('home.thankyou');
});