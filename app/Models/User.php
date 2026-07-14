<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // <-- Added to allow saving admin/employee/client from Filament
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Determine whether the user can access the Filament panel.
     */
    public function canAccessPanel(Panel $panel): bool
    {
        // Keeps your localhost working perfectly without throwing a 403
        if (app()->environment('local')) {
            return true;
        }

        // Fixes the live server 403 error by strictly enforcing roles
        // Restricts sensitive panel access to administrators and employees only, excluding clients
        return in_array($this->role, ['admin', 'employee']);
    }
}