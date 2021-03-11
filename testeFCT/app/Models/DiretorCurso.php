<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diretorCurso extends Model
{
    protected $fillable = [
        'dirCursoEmail',
        'dirCursoTm',
        'dirCursoNome'
    ];

    use HasFactory;
}
