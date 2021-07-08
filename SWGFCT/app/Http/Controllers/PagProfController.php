<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Orientador;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagProfController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(! Auth::user()->isAn('prof')){
            return abort(404);
        }

        $alunos = Aluno::all();
        $orientadores = Orientador::all();
        return view('pagProf', ['orientadores' => $orientadores, 'alunos' => $alunos]);
    }
}
