<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orientador extends Model
{
    use HasFactory;

    public $table = 'orientador';

    public $timestamps = false;

    protected $fillable = [
        'orientNome',
        'orientEmail',
        'orientTm'
    ];

    public function fct()
    {
        return $this->hasMany(fct::class);
    }


    public function guardarSeNaoExistir()
    {
        $colDeO = Orientador::where('orientTm',$this->telemovel)->get();

        $existe = $colDeO->count();

        if(!$existe){
            $this->save();
        }

        return $existe;
    }

    public function import($rowdata, &$importData_arr, $i)
    {
        $num = count($rowdata);

        if ($num == 3) {
            $data = array(
                "orientNome"=>$rowdata[0],
                "orientEmail"=>$rowdata[1],
                "orientTm"=>$rowdata[2]
            );

            // Insert to MySQL database
            $orientador = new Orientador();
            $orientador->fill($data);
            $existe = $orientador->guardarSeNaoExistir();
            $importData_arr[$i] = [
                'existe' => $existe,
                'elem' => $orientador
            ];
        }
    }

    public function toHtml()
    {
        return sprintf("<p><span>%s</span><span>%s</span><span>%s</span></p>",
            $this->orientNome,
            $this->orientEmail,
            $this->orientTm);
    }
}
