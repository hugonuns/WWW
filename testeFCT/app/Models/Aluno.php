<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'address',
        'telemovel',
        'localidade',
        'residencia',
        'nacionalidade',
        'naturalidade',
        'codigoPostal',
        'cc',
        'ccValidade',
        'dataNascimento'
    ];
}
