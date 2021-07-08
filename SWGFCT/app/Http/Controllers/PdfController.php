<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use PDF;
use Auth;
use Dompdf\Dompdf;

class PdfController extends Controller
{
    public function gerarProtocoloFormacaoPdf(){
        if(! Auth::user()->isAn('aluno')){
            return abort(404);
        }
        else{
            $dados = Aluno::with(['user','ee','dirigeEdicao.curso','dirigeEdicao.diretorCurso',
                'fct.empresa','fct.orientador'])->where('u_id','=',Auth::user()->id)->get();

            $pdf = PDF::loadView('ProtocoloFormacaoPdf',compact('dados'));

            return $pdf->setPaper('a4')->stream('pdfTeste.pdf');
        }
    }

    public function gerarProtocoloParceriaPdf(){
        if(! Auth::user()->isAn('aluno')){
            return abort(404);
        }
        else{
            $dados = Aluno::with(['user','ee','dirigeEdicao.curso','dirigeEdicao.diretorCurso','fct.empresa','fct.orientador'])->where('u_id','=',Auth::user()->id)->get();

            $pdf = PDF::loadView('ProtocoloParceriaPdf',compact('dados'));

            return ($pdf->setPaper('a4')->stream('pdfTeste.pdf'));
        }
    }

    public function gerarProtocoloTrabalhoIndividualPdf(){
        if(! Auth::user()->isAn('aluno')){
            return abort(404);
        }
        else{
            $dados = Aluno::with(['user','ee','dirigeEdicao.curso','dirigeEdicao.diretorCurso','fct.empresa','fct.orientador'])->where('u_id','=',Auth::user()->id)->get();

            $pdf = PDF::loadView('ProtocoloTrabalhoIndividualPdf',compact('dados'));

            return ($pdf->setPaper('a4')->stream('pdfTeste.pdf'));
        }
    }
}
