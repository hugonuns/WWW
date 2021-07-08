<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fct extends Model
{
    use HasFactory;

    public $table = 'fct';

    public $timestamps = false;

    protected $fillable = [
        'dataInicialFCT',
        'dataFinalFCT',
        'nota',
        'orientador_id',
        'empresa_id',
        'aluno_id',
        'visita_id'
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class,'aluno_id');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class,'empresa_id');
    }

    public function orientador()
    {
        return $this->belongsTo(Orientador::class,'orientador_id');
    }

    public function visita()
    {
        return $this->belongsTo(Visita::class,'visita_id');
    }


    public function guardarSeNaoExistir()
    {
        $colDeFct = Fct::where('aluno_id',$this->aluno_id)->get();

        $existe = $colDeFct->count();

        if(!$existe){
            $this->save();

        }

        return $existe;
    }

    public function import($rowdata, &$importData_arr, $i)
    {
        $num = count($rowdata);

        if ($num == 6) {
            $data = array(
                "dataInicialFCT"=>$rowdata[0],
                "dataFinalFCT"=>$rowdata[1],
                "nota"=>$rowdata[2],
                "orientador_id"=>$rowdata[3],
                "empresa_id"=>$rowdata[4],
                "aluno_id"=>$rowdata[5]
            );

            // Insert to MySQL database
            $fct = new Fct();
            $fct->fill($data);
            $existe = $fct->guardarSeNaoExistir();
            $importData_arr[$i] = [
                'existe' => $existe,
                'elem' => $fct
            ];
        }
    }

    public function toHtml()
    {
        return sprintf("<p><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/></p>",
            $this->dataInicialFCT,
            $this->dataFinalFCT,
            $this->nota,
            $this->orientador_id,
            $this->empresa_id,
            $this->aluno_id
        );
    }
}
