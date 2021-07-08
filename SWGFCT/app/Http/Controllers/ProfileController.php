<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Orientador;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->isAn('admin')){
            return abort(404);
        }
        elseif(Auth::user()->isAn('aluno')){
            $alunos = Aluno::all();

            return view('profile', compact('alunos'));
        }
        else{
            $orientadores = Orientador::all();

            return view('profile', compact('orientadores'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if(Auth::user()->isAn('aluno')){
            $alunos = Aluno::all();

            return view('editProfile', compact('alunos'));
        }
        else{
            $orientadores = Orientador::all();

            return view('editProfile', compact('orientadores'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $profile)
    {
        if(Auth::user()->isAn('aluno')){
            $novoALuno = $request->all();
            $aluno = Aluno::where('id',$profile)->first();
            $aluno->update($novoALuno);

            return redirect()->route('profile.index')
                ->with('success', 'Aluno editado com sucesso');
        }
        elseif(Auth::user()->isAn('prof')){
            $novoOrientador = $request->all();
            $prof = Orientador::where('id',$profile)->first();
            $prof->update($novoOrientador);

            return redirect()->route('profile.index')
                ->with('success', 'Orientador editado com sucesso');
        }
    }

}
