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
        'anoLetivoInicial',
        'anoLetivoFinal',
        'nota',
        'orientador_id',
        'empresa_id',
        'aluno_id',
        'visita_id'
    ];

    public function aluno()
    {
        return $this->belongsTo(aluno::class,'aluno_id');
    }

    public function empresa()
    {
        return $this->belongsTo(empresa::class,'empresa_id');
    }

    public function orientador()
    {
        return $this->belongsTo(orientador::class,'orientador_id');
    }

    public function visita()
    {
        return $this->belongsTo(visita::class,'visita_id');
    }


    public function guardarSeNaoExistir()
    {
        $colDeFct = Fct::where('dirCursoTm',$this->telemovel)->get();

        $existe = $colDeFct->count();

        if(!$existe){
            $this->save();
        }

        return $existe;
    }

    public function import($rowdata, &$importData_arr, $i)
    {
        $num = count($rowdata);

        if ($num == 7) {
            $data = array(
                "anoLetivoInicial"=>$rowdata[0],
                "anoLetivoFinal"=>$rowdata[1],
                "nota"=>$rowdata[2],
                "orientador_id"=>$rowdata[3],
                "empresa_id"=>$rowdata[4],
                "aluno_id"=>$rowdata[5],
                "visita_id"=>$rowdata[6]
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
        return sprintf("<p><span>%s</span><span>%s</span><span>%s</span><span>%s</span>
                    <span>%s</span><span>%s</span><span>%s</span></p>",
            $this->anoLetivoInicial,
            $this->anoLetivoFinal,
            $this->nota,
            $this->orientador_id,
            $this->empresa_id,
            $this->aluno_id,
            $this->visita_id);
    }
}
