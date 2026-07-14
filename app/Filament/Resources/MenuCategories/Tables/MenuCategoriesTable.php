<?php

namespace App\Filament\Resources\MenuCategories\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ActionGroup;

class MenuCategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold') // Makes the category name stand out
                    ->color('primary')
                    ->description(fn ($record) => $record->slug), // Displays the slug directly under the name
                
                TextColumn::make('description')
                    ->limit(50) // Truncates long descriptions automatically
                    ->searchable()
                    ->color('gray')
                    ->wrap(),

                ToggleColumn::make('is_active') // Allows instant toggling right from the table
                    ->label('Active Status')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Created On')
                    ->dateTime('M j, Y') // Formats like "Jul 14, 2026"
                    ->sortable()
                    ->badge() // Wraps the date in a nice UI badge
                    ->color('info')
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->filters([
                TernaryFilter::make('is_active')
                    ->label('Status Filter')
                    ->boolean()
                    ->trueLabel('Active Categories Only')
                    ->falseLabel('Inactive Categories Only')
                    ->native(false), // Uses a modern, searchable dropdown instead of browser default
            ])
            ->actions([
                ActionGroup::make([ // Groups actions neatly into an ellipsis menu
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ])
                ->tooltip('Actions')
                ->icon('heroicon-m-ellipsis-horizontal'),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->striped() // Adds zebra striping to rows for better readability
            ->defaultSort('created_at', 'desc') // Shows newest categories first
            ->emptyStateHeading('No Menu Categories Yet')
            ->emptyStateDescription('Create your first food category to get started.')
            ->emptyStateIcon('heroicon-o-queue-list'); // Custom icon when the table is empty
    }
}