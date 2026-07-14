<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MenuCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_active',
        'image',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'meta_robots',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'meta_keywords' => 'array',
    ];

    public function foodItems(): HasMany
    {
        return $this->hasMany(FoodItem::class, 'menu_category_id');
    }
}