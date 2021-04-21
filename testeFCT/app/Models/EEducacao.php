<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EEducacao extends Model
{
    use HasFactory;

    public $table = 'e_educacao';

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'telemovel'
    ];

    public function aluno()
    {
        return $this->hasMany(aluno::class);
    }


    public function guardarSeNaoExistir()
    {
        $colDeEE = EEducacao::where('telemovel',$this->telemovel)->get();

        $existe = $colDeEE->count();

        if(!$existe){
            $this->save();
        }

        return $existe;
    }

    public function import($rowdata, &$importData_arr, $i)
    {
        $num = count($rowdata);

        if ($num == 2) {
            $data = array(
                "nome" => $rowdata[0],
                "telemovel" => $rowdata[1]
            );

            // Insert to MySQL database
            $eEducacao = new EEducacao();
            $eEducacao->fill($data);
            $existe = $eEducacao->guardarSeNaoExistir();
            $importData_arr[$i] = [
                'existe' => $existe,
                'elem' => $eEducacao
            ];
        }
    }

    public function toHtml()
    {
        return sprintf("<p><span>%s</span><span>%s</span></p>",
            $this->nome,
            $this->telemovel);
    }
}
