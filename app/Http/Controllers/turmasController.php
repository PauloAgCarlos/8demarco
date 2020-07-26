<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class turmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('conteudos.turmas.app_turmas');
        
    }

     public function ensinoP()
    {
        //
        return view('conteudos.turmas.app_listar_turmas_ensino_primario');
    }

     public function primeiroCiclo()
    {
        //
        return view('conteudos.turmas.app_listar_turmas_primeiro_ciclo');
    }

    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        //
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
        return view('conteudos.turmas.app_visualizar_turma');
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
