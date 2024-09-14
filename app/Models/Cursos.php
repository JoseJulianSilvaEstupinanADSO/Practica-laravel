<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'doc_instructor',
        'title',
        'body',
        'status'
    ];

    protected $hidden = [
        'doc_instructor'
    ];
}
