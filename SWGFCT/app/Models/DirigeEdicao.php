<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirigeEdicao extends Model
{
    use HasFactory;

    public $table = 'dirige_edicao';

    public $timestamps = false;

    protected $fillable = [
        'anoLetivoInicial',
        'anoLetivoFinal',
        'dirCurso_id',
        'aluno_id',
        'curso_id'
    ];

    public function diretorCurso()
    {
        return $this->belongsTo(diretorCurso::class,'dirCurso_id');
    }

    public function curso()
    {
        return $this->belongsTo(curso::class,'curso_id');
    }

    public function aluno()
    {
        return $this->belongsTo(aluno::class,'aluno_id');
    }


    public function guardarSeNaoExistir()
    {
        $colDeDE = DirigeEdicao::where('dirCursoTm',$this->telemovel)->get();

        $existe = $colDeDE->count();

        if(!$existe){
            $this->save();
        }

        return $existe;
    }

    public function import($rowdata, &$importData_arr, $i)
    {
        $num = count($rowdata);

        if ($num == 5) {
            $data = array(
                "anoLetivoInicial"=>$rowdata[0],
                "anoLetivoFinal"=>$rowdata[1],
                "dirCurso_id"=>$rowdata[2],
                "aluno_id"=>$rowdata[3],
                "curso_id"=>$rowdata[4]
            );

            // Insert to MySQL database
            $dirigeEdicao = new DirigeEdicao();
            $dirigeEdicao->fill($data);
            $existe = $dirigeEdicao->guardarSeNaoExistir();
            $importData_arr[$i] = [
                'existe' => $existe,
                'elem' => $dirigeEdicao
            ];
        }
    }

    public function toHtml()
    {
        return sprintf("<p><span>%s</span><span>%s</span><span>%s</span><span>%s</span><span>%s</span></p>",
            $this->anoLetivoInicial,
            $this->anoLetivoFinal,
            $this->dirCurso_id,
            $this->aluno_id,
            $this->curso_id);
    }
}
