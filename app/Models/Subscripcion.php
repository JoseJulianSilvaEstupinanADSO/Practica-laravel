<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscripcion extends Model
{
    use HasFactory;

    protected $fillable = [
        'curso_id'
    ];
    public function subs()
    {
        return $this->belongsToMany(User::class, 'subscripcion_to_user');
    }
}
