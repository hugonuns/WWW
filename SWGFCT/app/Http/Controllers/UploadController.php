<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\DiretorCurso;
use App\Models\DirigeEdicao;
use App\Models\Curso;
use App\Models\EEducacao;
use App\Models\Empresa;
use App\Models\Fct;
use App\Models\Orientador;
use App\Models\Visita;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UploadController extends Controller
{
    public function index(){
        if(! Auth::user()->isAn('admin')){
            return abort(404);
        }

        $tableArray = $this->tableName();
        return view('pagAdmin', [
            'tableArray' => $tableArray,
            'importData_arr'=>[],
        ]);
    }

    public function tableName(){
        return array(
            "ee" => "Encarregado de Educação",
            "aluno" => "Aluno",
            "curso" => "Curso",
            "diretorCurso" => "Diretor Curso",
            "dirigeEdicao" => "Dirige Edição",
            "orientador" => "Orientador",
            "empresa" => "Empresa",
            "visita" => "Visita",
            "fct" => "Fct",
            "user" => "User"
        );
    }

    public function uploadFile(Request $request){
        $para = $request->input('para');
        $tableArray= $this->tableName();

        if ($request->input('submit') != null ){

            $file = $request->file('file');

            // File Details
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize();
            $mimeType = $file->getMimeType();

            // Valid File Extensions
            $valid_extension = array("csv");

            // 2MB in Bytes
            $maxFileSize = 2*1024*1024;

            // Check file extension
            if(in_array(strtolower($extension),$valid_extension)){

                // Check file size
                if($fileSize <= $maxFileSize){

                    // File upload location
                    $location = 'uploads';

                    // Upload file
                    $file->move($location,$filename);

                    // Import CSV to Database
                    $filepath = public_path($location."/".$filename);

                    // Reading file
                    $file = fopen($filepath,"r");

                    $importData_arr = array();
                    $i = 0;

                    while (($rowdata = fgetcsv($file, 1000, ",")) !== FALSE) {

                        // Skip first row (Remove below comment if you want to skip the first row)
                        /*if($i == 0){
                           $i++;
                           continue;
                        }*/

                        $this->importEntidade($rowdata, $importData_arr, $i,$para);
                        $i++;
                    }
                    fclose($file);

                    Session::flash('message','Import Successful.');
                }else{
                    Session::flash('message','File too large. File must be less than 2MB.');
                }
            }else{
                Session::flash('message','Invalid File Extension.');
            }
        }

        $entidadeAction=$para;

        return view('pagAdmin', [
            'tableArray' => $tableArray,
            'entidadeAction' => $entidadeAction,
            'importData_arr'=>$importData_arr,
        ]);
    }

    /**
     * @param array $rowdata
     * @param array $importData_arr
     * @param int $i
     * @param string $para
     */
    protected function importEntidade($rowdata, &$importData_arr, $i, $para)
    {
        switch ($para){
            case 'ee':
                $ee = new EEducacao();
                $ee->import($rowdata,$importData_arr,$i);
                break;
            case 'aluno':
                $a = new Aluno();
                $a->import($rowdata,$importData_arr,$i);
                break;
            case 'curso':
                $c = new Curso();
                $c->import($rowdata,$importData_arr,$i);
                break;
            case 'diretorCurso':
                $dC = new DiretorCurso();
                $dC->import($rowdata,$importData_arr,$i);
                break;
            case 'dirigeEdicao':
                $dE = new DirigeEdicao();
                $dE->import($rowdata,$importData_arr,$i);
                break;
            case 'orientador':
                $o = new Orientador();
                $o->import($rowdata,$importData_arr,$i);
                break;
            case 'empresa':
                $e = new Empresa();
                $e->import($rowdata,$importData_arr,$i);
                break;
            case 'visita':
                $v = new Visita();
                $v->import($rowdata,$importData_arr,$i);
                break;
            case 'fct':
                $fct = new Fct();
                $fct->import($rowdata,$importData_arr,$i);
                break;
            case 'user':
                $u = new User();
                $u->import($rowdata,$importData_arr,$i);
                break;
        }
    }
}
