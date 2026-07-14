<?php

namespace App\Filament\Resources\Reservations\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TagsInput;

class ReservationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Personal Details')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('first_name')
                                ->required()
                                ->maxLength(255),
                            TextInput::make('last_name')
                                ->required()
                                ->maxLength(255),
                        ]),
                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        TextInput::make('phone')
                            ->tel()
                            ->required()
                            ->maxLength(20),
                    ]),

                Section::make('Reservation Details')
                    ->schema([
                        Grid::make(2)->schema([
                            DatePicker::make('date')
                                ->required(),
                            TextInput::make('arrival_time')
                                ->required()
                                ->maxLength(255),
                        ]),
                        Grid::make(2)->schema([
                            TextInput::make('guests')
                                ->required()
                                ->maxLength(255),
                            Select::make('seating_preference')
                                ->options([
                                    'No preference' => 'No preference',
                                    'Indoor' => 'Indoor',
                                    'Outdoor Terrace' => 'Outdoor Terrace',
                                ]),
                        ]),
                        TagsInput::make('food_items')
                            ->placeholder('New food item')
                            ->helperText('Press enter to add multiple items'),
                        Textarea::make('special_requests')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}