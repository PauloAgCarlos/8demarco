<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\professores;

class professoresController extends Controller
{
  
    public function index()
    {
        //
        $professores = professores::all();
       return view('conteudos.professores.app_listar_professores', compact('professores'));
    }

    
    public function create()
    {
        //
        return view('conteudos.professores.app_registar_professores');
    }

    
    public function store(Request $request)
    {
        //
         $professor = new professores();
        $professor->nome = $request->tNomeCompletoprofessor;
        $professor->foto = $request->tFotoProfessor;
        $professor->numeroAgente = $request->tAgente;
        $professor->dataNascimento = $request->tDataNascimento;
        $professor->localNascimento = $request->tLocalNascimentoProfessor;
        $professor->numeroBilhete = $request->tNumeroBI;
        $professor->estadoCivil = $request->tEstadoCivil;
        $professor->sexo = 'Masc';
        $professor->morada = $request->tCidadeMoraprofessor;
        $professor->nivelAcademico = $request->tNivelAcademico;
        $professor->bairro = $request->tBairroProfessor;
        $professor->funcao = $request->tFuncaoSGA;

        $professor->save();
        return 'professor salvo com sucesso';
    }

    
    public function show($id)
    {
        //
         return view('conteudos.professores.app_visualizar_professor');
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
