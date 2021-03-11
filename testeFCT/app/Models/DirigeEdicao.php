<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dirigeEdicao extends Model
{
    protected $fillable = [
        'anoLetivoInicial',
        'anoLetivoFinal'
    ];

    use HasFactory;
}
