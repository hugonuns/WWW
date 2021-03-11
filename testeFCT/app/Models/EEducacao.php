<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eEducacao extends Model
{
    protected $fillable = [
        'nome',
        'telemovel'
    ];
    use HasFactory;
}
