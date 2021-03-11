<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orientador extends Model
{
    protected $fillable = [
        'orientNome',
        'orientEmail',
        'orientadorTm'
    ];
    use HasFactory;
}
