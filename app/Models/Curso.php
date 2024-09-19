<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'doc_instructor',
        'title',
        'body',
        'status'
    ];

    protected $hidden = [
        'doc_instructor'
    ];

    public function organization()
    {
        return $this->belongsToMany(Organization::class, 'organizacion_to_curso')
                    ->withTimestamps();
    }
}
