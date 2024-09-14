<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nota',
        'estado',
        'doc_usuario',
        'curso_id'
    ];

    protected $hidden = [
        'doc_usuario',
    ];
}
