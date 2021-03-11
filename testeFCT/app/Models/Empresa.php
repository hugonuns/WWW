<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    protected $fillable = [
        'empresaNome',
        'empresaProprietario',
        'empresaCP',
        'empresaMorada',
        'empresaCidade',
        'empresaTF',
        'empresaHoraIM',
        'empresaHoraFM',
        'empresaHoraIT',
        'empresaHoraFT',
        'empresaTutorTf',
        'empresaDepartamento',
        'empresaMonitor'
    ];
    use HasFactory;
}
