<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'direccion',
        'telefono',
        'curso_id'
    ];
}
