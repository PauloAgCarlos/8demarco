<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudantes;
class estudantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estudantes = estudantes::all();
        return view('conteudos.estudantes.app_listar_estudantes', compact('estudantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('conteudos.estudantes.app_registar_estudantes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $estudante = new estudantes();
        $estudante->nome = $request->tNomeCompleto;
        $estudante->dataNascimento = $request->tData;
        $estudante->localNascimento = $request->tLocalNascimento;
        $estudante->numeroBilhete = $request->tNumeroBI;
        $estudante->sexo = $request->tSexo;
        $estudante->morada = $request->tCidadeMora;
        $estudante->bairro = $request->tBairro;
        $estudante->nomeEncarregado = $request->tEn;
        $estudante->relacaoComEncarregado = $request->tRealacao;
        $estudante->numeroEncarregado = $request->tNumeroTelefone;

        $estudante->save();
        return 'aluno salvo com sucesso';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $estudante = estudantes::find($id);
        return $estudante;
        // return view('conteudos.estudantes.app_visualizar_estudante');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
