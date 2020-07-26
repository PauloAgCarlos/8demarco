<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cadernetas;

class cadernetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $caderneta = new cadernetas();

        $caderneta->classe = '1ª Classe';
        $caderneta->numeroSga = $request->tNumeroSGA;
        $caderneta->nomeAluno = $request->tNomeCaderneta;
        $caderneta->trimestre = '1º trimestre';
        $caderneta->semana = $request->tSemana;
        $caderneta->disciplinas = 'disciplinas';
        $caderneta->nota = 'notas';
        $caderneta->informacao = 'informacao';
        

        $caderneta->save();

        return 'caderneta salva com sucesso';
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
