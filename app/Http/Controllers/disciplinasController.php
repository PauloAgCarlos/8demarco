<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\disciplinas;
use Illuminate\Support\Facades\Auth;
class disciplinasController extends Controller
{
    
    public function index()
    {
        //
        if (Auth::check()) {

             return 'as disciplinas estarão listadas aqui';
         }
        return redirect('/login');
        
    }

      
    public function create()
    {
        //
        if (Auth::check()) {

             return view('conteudos.disciplinas.app_registar_disciplinas');
         }
        return redirect('/login');
        
    }

    
    public function store(Request $request)
    {
        //

         $disciplina = new disciplinas();
        $disciplina->nome = $request->tNomeCadeira;
        $disciplina->classe = $request->tTemposPorSemana;
        $disciplina->notas = $request->tTemposPorSemana;
         
 
        $disciplina->save();
        return redirect('/disciplinas');
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

     
    public function destroy($id)
    {
        //
    }
}
