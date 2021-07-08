<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class PagAlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(! Auth::user()->isAn('aluno')){
            return abort(404);
        }

        return view('pagAluno');
    }
}
