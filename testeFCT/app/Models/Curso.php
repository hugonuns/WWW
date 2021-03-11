<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'cursoNome',
        'fctHoras10',
        'fctHoras11',
        'fctHoras12'
    ];

    use HasFactory;
}
