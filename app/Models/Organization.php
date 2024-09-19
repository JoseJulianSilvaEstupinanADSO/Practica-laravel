<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'direccion',
        'telefono'
    ];
    public function curso()
    {
        return $this->belongsToMany(Curso::class, 'organizacion_to_curso')
                    ->withTimestamps();
    }
}

