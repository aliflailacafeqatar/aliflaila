<?php

namespace App\Filament\Resources\Reservations\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\Model;

class ReservationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('last_name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->searchable(),
                TextColumn::make('phone')
                    ->searchable(),
                TextColumn::make('date')
                    ->date()
                    ->sortable(),
                TextColumn::make('arrival_time')
                    ->label('Time'),
                TextColumn::make('guests')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('seating_preference')
                    ->label('Seating'),
            ])
            ->filters([
                // Add any necessary filters here
            ])
            ->actions([
                Action::make('print_invoice')
                    ->label('PDF Invoice')
                    ->icon('heroicon-o-printer')
                    ->color('info')
                    ->url(fn (Model $record) => route('reservation.invoice', $record))
                    ->openUrlInNewTab(),
                    
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}