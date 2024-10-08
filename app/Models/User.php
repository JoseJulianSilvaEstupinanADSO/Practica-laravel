<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'documento',
        'name',
        'email',
        'password',
        'telefono',
        'username'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function plan()
    {
        return $this->belongsToMany(Plan::class, 'plan_to_user')
                    ->withPivot('cant_suscripciones')
                    ->withTimestamps();
    }
    public function subs()
    {
        return $this->belongsToMany(Subscripcion::class, 'subscripcion_to_user');
    }
}

