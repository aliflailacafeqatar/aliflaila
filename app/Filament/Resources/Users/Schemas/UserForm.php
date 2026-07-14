<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Hash;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2) // Keeps the form balanced in 2 columns automatically
            ->components([
                
                TextInput::make('name')
                    ->label('Full Name')
                    ->placeholder('e.g. John Doe')
                    ->required()
                    ->maxLength(255)
                    ->prefixIcon('heroicon-m-user'),
    
                TextInput::make('email')
                    ->label('Email Address')
                    ->placeholder('e.g. john@example.com')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255)
                    ->prefixIcon('heroicon-m-envelope'),
                    
                Select::make('role')
                    ->label('Account Role')
                    ->options([
                        'admin' => 'Admin',
                        'employee' => 'Employee',
                        'client' => 'Client',
                    ])
                    ->required()
                    ->default('client')
                    ->native(false) // Keeps the beautiful custom dropdown
                    ->prefixIcon('heroicon-m-briefcase'),
    
                TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->revealable()
                    ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                    ->dehydrated(fn ($state) => filled($state))
                    ->required(fn (string $context): bool => $context === 'create')
                    ->helperText(fn (string $context): string => $context === 'edit' ? 'Leave blank to keep current password.' : '')
                    ->maxLength(255)
                    ->prefixIcon('heroicon-m-key'),
                    
            ]);
    }
}