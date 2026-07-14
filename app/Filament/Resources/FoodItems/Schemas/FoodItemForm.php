<?php

namespace App\Filament\Resources\FoodItems\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Select;
use Illuminate\Support\Str;

class FoodItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1) // Keeping the safe, flat layout
            ->components([
                
                // --- CATEGORY SELECTION ---
                Select::make('menu_category_id')
                    ->label('Menu Category')
                    ->relationship('category', 'name') // Pulls categories dynamically from the database
                    ->searchable()
                    ->preload()
                    ->required(),

                // --- MAIN DETAILS ---
                TextInput::make('name')
                    ->label('Food Item Name')
                    ->placeholder('e.g. Buffalo Chicken Wings')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, callable $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                TextInput::make('slug')
                    ->label('URL Slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                TextInput::make('price')
                    ->label('Price')
                    ->placeholder('e.g. 25 QR or 30 / 40 QR')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('image')
                    ->label('Food Image')
                    ->image()
                    ->imageEditor()
                    ->directory('food-items')
                    ->maxSize(2048),

                Textarea::make('description')
                    ->label('Description & Ingredients')
                    ->rows(3)
                    ->maxLength(65535),

                Toggle::make('is_active')
                    ->label('Available on Menu')
                    ->default(true),

                // --- SEO SETTINGS ---
                TextInput::make('meta_title')
                    ->label('SEO: Meta Title')
                    ->placeholder('Leave empty to use food item name')
                    ->maxLength(60),

                Textarea::make('meta_description')
                    ->label('SEO: Meta Description')
                    ->placeholder('Write a brief description for Google search results...')
                    ->rows(2)
                    ->maxLength(160),

                TagsInput::make('meta_keywords')
                    ->label('SEO: Focus Keywords')
                    ->placeholder('Type a keyword and press Enter'),

                Select::make('meta_robots')
                    ->label('SEO: Search Engine Indexing')
                    ->options([
                        'index, follow' => 'Index & Follow (Recommended)',
                        'noindex, follow' => 'No-Index, Follow',
                        'noindex, nofollow' => 'Hide from Search Engines',
                    ])
                    ->default('index, follow'),
                    
            ]);
    }
}