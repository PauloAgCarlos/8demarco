<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\matriculas;
use App\estudantes;
use Illuminate\Support\Facades\Auth;
class matriculasController extends Controller
{
    
    public function index()
    {
        if (Auth::check()) {

             return view('conteudos.matriculas.app_matriculas');
         }
        return redirect('/login');
        
    }

    
    public function create()
    {
        //
         if (Auth::check()) {

             return view('conteudos.matriculas.app_registar_matriculas');
         }
        return redirect('/login');
        
    }

   
    public function store(Request $request)
    {
        //
        $usuario = Auth::user();
        $matricula = new matriculas();
        $ano = date("Y"); 

        $matricula->estudante_id = $request->tNumeroSGA;
        $matricula->nomeEstudante = estudantes::find($request->tNumeroSGA)->nome;
        // $matricula->usuario_id = $usuario->id;
        // $matricula->foto = $request->tFotoMatricula;
        // $matricula->dataNascimento = $request->tDataNascimentoMatricula;
        // $matricula->numeroBilhete = $request->tNumeroBiMatricula;
        $matricula->anoLectivo = $ano;
        // $matricula->periodo = $request->tPeriodo;
        $matricula->turno = $request->tTurno;
        $matricula->classe = $request->tClasse;
        $matricula->numeroEstudante = $request->tNumeroSGA;
        $matricula->criadoPor = $usuario->name;
        $matricula->editadoPor = $usuario->name;

        // $matricula->estudantes()->nome='Paulinho';
        // $matricula->estudantes()->save();
        // $matricula->estudantes->update(["matriculado" => 1]);
        // $matricula->estudantes->update(["matriculado" => 1]);
        $matricula->save();

        return redirect('/visualizar_estudante/'.$matricula->estudante_id);
    }

    
    public function show($id)
    {
        //
         $matricula = estudantes::find(1)->nome;
        return $matricula;
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
