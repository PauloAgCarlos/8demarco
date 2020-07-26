<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\matriculas;

class matriculasController extends Controller
{
    
    public function index()
    {
        return 'matrículas';
    }

    
    public function create()
    {
        //
        return view('conteudos.matriculas.app_registar_matriculas');
    }

   
    public function store(Request $request)
    {
        //
        $matricula = new matriculas();
        $matricula->aluno = $request->tNomeMatricula;
        $matricula->foto = $request->tFotoMatricula;
        $matricula->dataNascimento = $request->tDataNascimentoMatricula;
        $matricula->numeroBilhete = $request->tNumeroBiMatricula;
        $matricula->periodo = $request->tPeriodo;
        $matricula->turno = $request->tTurno;
        $matricula->classe = $request->tClasse;
        $matricula->numeroEstudante = $request->tNumeroSGA;

        $matricula->save();

        return 'Aluno Matriculado';
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
