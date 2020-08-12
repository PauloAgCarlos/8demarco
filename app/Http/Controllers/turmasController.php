<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\turmas;
use Illuminate\Support\Facades\Auth;
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
          if (Auth::check()) {

             $turmas = turmas::all();
        return view('conteudos.turmas.app_turmas', compact('turmas'));
         }
        return redirect('/login');
        
        
    }

     public function ensinoP()
    {
        //
         if (Auth::check()) {

            return view('conteudos.turmas.app_listar_turmas_ensino_primario');
         }
        return redirect('/login');
        
        
    }

     public function primeiroCiclo()
    {
        //
         if (Auth::check()) {

            return view('conteudos.turmas.app_listar_turmas_primeiro_ciclo');
         }
        return redirect('/login');
        
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
