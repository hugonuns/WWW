<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    public $table = 'empresa';

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'proprietario',
        'NIF',
        'CP',
        'morada',
        'cidade',
        'empresaTF',
        'horaIM',
        'horaFM',
        'horaIT',
        'horaFT',
        'tutorTf',
        'departamento',
        'monitor'
    ];

    public function fct()
    {
        return $this->hasMany(Fct::class);
    }


    public function guardarSeNaoExistir()
    {
        $colDeE = Empresa::where('NIF',$this->NIF)->get();

        $existe = $colDeE->count();

        if(!$existe){
            $this->save();
        }

        return $existe;
    }

    public function import($rowdata, &$importData_arr, $i)
    {
        $num = count($rowdata);

        if($num == 14) {
            $data = array(
                "nome"=>$rowdata[0],
                "proprietario"=>$rowdata[1],
                "NIF"=>$rowdata[2],
                "CP"=>$rowdata[3],
                "morada"=>$rowdata[4],
                "cidade"=>$rowdata[5],
                "empresaTF"=>$rowdata[6],
                "horaIM"=>$rowdata[7],
                "horaFM"=>$rowdata[8],
                "horaIT"=>$rowdata[9],
                "horaFT"=>$rowdata[10],
                "tutorTf"=>$rowdata[11],
                "departamento"=>$rowdata[12],
                "monitor"=>$rowdata[13]
            );

            // Insert to MySQL database
            $empresa = new Empresa();
            $empresa->fill($data);
            $existe = $empresa->guardarSeNaoExistir();
            $importData_arr[$i] = [
                'existe' => $existe,
                'elem' => $empresa
            ];
        }
    }

    public function toHtml()
    {
        return sprintf("<p><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span></p>",
            $this->nome,
            $this->proprietario,
            $this->NIF,
            $this->CP,
            $this->morada,
            $this->cidade,
            $this->empresaTF,
            $this->horaIM,
            $this->horaFM,
            $this->horaIT,
            $this->horaFT,
            $this->tutorTf,
            $this->departamento,
            $this->monitor
        );
    }
}
