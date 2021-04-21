<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Dompdf\Dompdf;
class pdfController extends Controller
{
    public function gerarPdf(){


        $pdf = PDF::loadView('pdf');

        return ($pdf->setPaper('a4')->stream('pdfTeste.pdf'));


    }
    //
}
