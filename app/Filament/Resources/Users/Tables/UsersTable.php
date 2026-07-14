<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Combines Name & Email into one clean column with an icon
                TextColumn::make('name')
                    ->label('User Info')
                    ->searchable(['name', 'email']) 
                    ->sortable()
                    ->weight('bold')
                    ->description(fn ($record) => $record->email)
                    ->icon('heroicon-m-user-circle')
                    ->iconColor('primary'),

                // Displays roles using colored badges
                TextColumn::make('role')
                    ->label('Account Role')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'admin' => 'danger',
                        'employee' => 'warning',
                        'client' => 'success',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => ucfirst($state)),

                // Turns the timestamp into a beautiful Verified/Unverified badge
                TextColumn::make('email_verified_at')
                    ->label('Status')
                    ->badge()
                    ->color(fn ($state) => $state ? 'success' : 'danger')
                    ->formatStateUsing(fn ($state) => $state ? 'Verified' : 'Unverified')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),

                TextColumn::make('created_at')
                    ->label('Joined Date')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                // Multi-select dropdown to quickly find specific roles
                SelectFilter::make('role')
                    ->label('Filter by Role')
                    ->options([
                        'admin' => 'Admin',
                        'employee' => 'Employee',
                        'client' => 'Client',
                    ])
                    ->multiple(),

                // Toggle between Verified, Unverified, or All users
                TernaryFilter::make('email_verified_at')
                    ->label('Verification Status')
                    ->nullable()
                    ->placeholder('All Users')
                    ->trueLabel('Verified Users')
                    ->falseLabel('Unverified Users'),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc') // Shows newest users first
            ->striped() // Adds alternating row colors for better readability
            ->emptyStateHeading('No users found')
            ->emptyStateDescription('Start by adding a new user to see them here.');
    }
}