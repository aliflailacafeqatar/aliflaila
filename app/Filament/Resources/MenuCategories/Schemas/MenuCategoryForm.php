<?php

namespace App\Filament\Resources\MenuCategories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Select;
use Illuminate\Support\Str;

class MenuCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1) // Keeps your safe, clean, single-column layout
            ->components([
                
                // --- MAIN DETAILS ---
                TextInput::make('name')
                    ->label('Category Name')
                    ->placeholder('e.g. Starters, Main Course, Desserts')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, callable $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                TextInput::make('slug')
                    ->label('URL Slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Description')
                    ->rows(3)
                    ->maxLength(65535),

                Toggle::make('is_active')
                    ->label('Active Status')
                    ->default(true),

                // --- SEO SETTINGS ---
                TextInput::make('meta_title')
                    ->label('SEO: Meta Title')
                    ->placeholder('Leave empty to use category name')
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