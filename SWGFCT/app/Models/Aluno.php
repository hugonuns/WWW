<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    public $table = 'aluno';

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'nProcesso',
        'nAluno',
        'email',
        'address',
        'telemovel',
        'localidade',
        'residencia',
        'nacionalidade',
        'naturalidade',
        'codigoPostal',
        'cc',
        'ccValidade',
        'dataNascimento',
        'ee_id',
        'u_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'u_id');
    }

    public function ee()
    {
        return $this->belongsTo(EEducacao::class,'ee_id');
    }

    public function dirigeEdicao()
    {
        return $this->hasMany(DirigeEdicao::class);
    }

    public function fct()
    {
        return $this->hasMany(Fct::class);
    }


    public function guardarSeNaoExistir()
    {
        $colDeA = Aluno::where('nProcesso',$this->nProcesso)->get();

        $existe = $colDeA->count();

        if(!$existe){
            $this->save();
        }

        return $existe;
    }

    public function import($rowdata, &$importData_arr, $i)
    {
        $num = count($rowdata);
        if($num == 15) {
            $data = array(
                "nome"=>$rowdata[0],
                "nProcesso"=>$rowdata[1],
                "nAluno"=>$rowdata[2],
                "email"=>$rowdata[3],
                "telemovel"=>$rowdata[4],
                "localidade"=>$rowdata[5],
                "residencia"=>$rowdata[6],
                "nacionalidade"=>$rowdata[7],
                "naturalidade"=>$rowdata[8],
                "codigoPostal"=>$rowdata[9],
                "cc"=>$rowdata[10],
                "ccValidade"=>$rowdata[11],
                "dataNascimento"=>$rowdata[12],
                "ee_id"=>$rowdata[13],
                "u_id"=>$rowdata[14]
            );
            // Insert to MySQL database
            $aluno = new Aluno();
            $aluno->fill($data);
            $existe = $aluno->guardarSeNaoExistir();
            $importData_arr[$i] = [
                'existe' => $existe,
                'elem' => $aluno
            ];
        }
    }

    public function toHtml()
    {
        return sprintf("<p><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span><br/><span>%s</span></p>",
            $this->nome,
            $this->nProcesso,
            $this->nAluno,
            $this->email,
            $this->telemovel,
            $this->localidade,
            $this->residencia,
            $this->nacionalidade,
            $this->naturalidade,
            $this->codigoPostal,
            $this->cc,
            $this->ccValidade,
            $this->dataNascimento,
            $this->ee_id,
            $this->u_id
        );
    }
}
