<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'precio',
        'body',
        'cant_subs'
    ];
    public function users()
    {
        return $this->belongsToMany(User::class, 'plan_to_user')
                    ->withPivot('cant_suscripciones')
                    ->withTimestamps();
    }
}
