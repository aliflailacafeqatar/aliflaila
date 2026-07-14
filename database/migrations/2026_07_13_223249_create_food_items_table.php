<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('food_items', function (Blueprint $table) {
            $table->id();
            
            // Links the food item to the menu category
            $table->foreignId('menu_category_id')->constrained('menu_categories')->cascadeOnDelete();
            
            // Basic Details
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('price'); // String type to allow formats like "30 / 40 QR"
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_active')->default(true);
            
            // SEO Settings
            $table->string('meta_title', 60)->nullable();
            $table->string('meta_description', 160)->nullable();
            $table->json('meta_keywords')->nullable(); 
            $table->string('meta_robots')->default('index, follow');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('food_items');
    }
};