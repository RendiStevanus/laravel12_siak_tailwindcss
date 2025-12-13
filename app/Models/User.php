<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $guarded = [];


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
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->map(fn(string $name) => Str::of($name)->substr(0, 1))
            ->implode('');
    }

    public function program_studi()
    {
        return $this->belongsTo(ProgramStudi::class, 'prodi_id');
    }

    public function badgeColor(string $roleName): string
    {
        return match ($roleName) {
            'super-admin' => 'bg-red-100 text-red-800',
            'admin-prodi' => 'bg-blue-100 text-blue-800',
            'admin'       => 'bg-purple-100 text-purple-800',
            'dosen'       => 'bg-yellow-100 text-yellow-800',
            'mahasiswa'   => 'bg-green-100 text-green-800',
            default       => 'bg-gray-100 text-gray-800',
        };
    }
}
