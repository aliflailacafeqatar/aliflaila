<?php

namespace App\Http\Controllers;

use App\Models\MenuCategory;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Fetch active categories along with their active food items
        $categories = MenuCategory::with(['foodItems' => function ($query) {
            $query->where('is_active', true);
        }])->where('is_active', true)->get();

        return view('frontend.menu', compact('categories'));
    }
}