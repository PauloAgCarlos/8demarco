<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\professores;
use File;
use Illuminate\Support\Facades\Auth;

class professoresController extends Controller
{
  
    public function index()
    {
          if (Auth::check()) {

        //
        $professores = professores::all();
       return view('conteudos.professores.app_listar_professores', compact('professores'));

       }

       return redirect('/login');
    }

    
    public function create()
    {
        //
          if (Auth::check()) {

            return view('conteudos.professores.app_registar_professores');
         }
        return redirect('/login');
        
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
        $professor->foto = "";


        // Verificando se a foto é válida
        if ($request->foto) {
            $foto = $request->foto;
            $extensaoI =  $foto->getClientOriginalExtension();
            if ($extensaoI!= 'jpg' && $extensaoI!= 'png') {
                return back()->with('erro', 'Erro: foto inválida');
            }


        }
 
         
        // Guardar a imagem na base de dados

         if ($request->foto) {
            File::move($foto, public_path().'/imagens/professores/imag_'.$professor->id.'.'.$extensaoI);
            $professor->foto = '/imagens/professores/imag_'.$professor->id.'.'.$extensaoI;
            $professor->save();
        }


        $professor->save();
        return redirect('/professores');
    }

    
    public function show($id)
    {
        //
         if (Auth::check()) {

             return view('conteudos.professores.app_visualizar_professor', ['professor' => professores::findOrFail($id)]);
         }
        return redirect('/login');
        

    }
 
    public function edit($id)
    {
        //
         if (Auth::check()) {

             $professor =professores::find($id);
        return view('conteudos.professores.app_editar_professor', compact('professor'));
         }
        return redirect('/login');
        
    }
 
    public function update(Request $request, $id)
    {
        //
         if (Auth::check()) {

              
         }
        return redirect('/login');
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
