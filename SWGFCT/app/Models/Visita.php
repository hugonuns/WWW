<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    use HasFactory;

    public $table = 'visita';

    public $timestamps = false;

    protected $fillable = [
        'visitaData',
        'visitaHoraI',
        'visitaHoraF',
        'visitaObs'
    ];

    public function fct()
    {
        return $this->hasMany(Fct::class);
    }


    public function guardarSeNaoExistir()
    {
        $colDeV = Visita::where('cursoNome',$this->telemovel)->get();

        $existe = $colDeV->count();

        if(!$existe){
            $this->save();
        }

        return $existe;
    }

    public function import($rowdata, &$importData_arr, $i)
    {
        $num = count($rowdata);

        if ($num == 4) {
            $data = array(
                "visitaData"=>$rowdata[0],
                "visitaHoraI"=>$rowdata[1],
                "visitaHoraF"=>$rowdata[2],
                "visitaObs"=>$rowdata[3]
            );

            // Insert to MySQL database
            $visita = new Visita();
            $visita->fill($data);
            $existe = $visita->guardarSeNaoExistir();
            $importData_arr[$i] = [
                'existe' => $existe,
                'elem' => $visita
            ];
        }
    }

    public function toHtml()
    {
        return sprintf("<p><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span></p>",
            $this->visitaData,
            $this->visitaHoraI,
            $this->visitaHoraF,
            $this->visitaObs
        );
    }
}
