<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiretorCurso extends Model
{
    use HasFactory;

    public $table = 'dirige_curso';

    public $timestamps = false;

    protected $fillable = [
        'dirCursoEmail',
        'dirCursoTm',
        'dirCursoNome'
    ];

    public function dirigeEdicao()
    {
        return $this->hasMany(dirigeEdicao::class);
    }


    public function guardarSeNaoExistir()
    {
        $colDeDC = DiretorCurso::where('dirCursoTm',$this->telemovel)->get();

        $existe = $colDeDC->count();

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
                "dirCursoEmail"=>$rowdata[0],
                "dirCursoTm"=>$rowdata[1],
                "dirCursoNome"=>$rowdata[2]
            );

            // Insert to MySQL database
            $diretorCurso = new DiretorCurso();
            $diretorCurso->fill($data);
            $existe = $diretorCurso->guardarSeNaoExistir();
            $importData_arr[$i] = [
                'existe' => $existe,
                'elem' => $diretorCurso
            ];
        }
    }

    public function toHtml()
    {
        return sprintf("<p><span>%s</span><span>%s</span><span>%s</span></p>",
            $this->dirCursoEmail,
            $this->dirCursoTm,
            $this->dirCursoNome);
    }
}
