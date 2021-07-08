<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    public $table = 'curso';

    public $timestamps = false;

    protected $fillable = [
        'cursoNome',
        'fctHoras10',
        'fctHoras11',
        'fctHoras12'
    ];

    public function dirigeEdicao()
    {
        return $this->hasMany(DirigeEdicao::class);
    }


    public function guardarSeNaoExistir()
    {
        $colDeC = Curso::where('cursoNome',$this->telemovel)->get();

        $existe = $colDeC->count();

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
                "cursoNome"=>$rowdata[0],
                "fctHoras10"=>$rowdata[1],
                "fctHoras11"=>$rowdata[2],
                "fctHoras12"=>$rowdata[3]
            );

            // Insert to MySQL database
            $curso = new Curso();
            $curso->fill($data);
            $existe = $curso->guardarSeNaoExistir();
            $importData_arr[$i] = [
                'existe' => $existe,
                'elem' => $curso
            ];
        }
    }

    public function toHtml()
    {
        return sprintf("<p><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span></p>",
            $this->cursoNome,
            $this->fctHoras10,
            $this->fctHoras11,
            $this->fctHoras12
        );
    }
}
