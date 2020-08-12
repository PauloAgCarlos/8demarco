<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudantes;
use App\matriculas;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Auth;

class estudantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::check()) {
         // The user is logged in...
            //
        // $estudantes = estudantes::all();
        // return view('conteudos.estudantes.app_listar_estudantes', compact('estudantes'));
         
        // $estudantes = DB::select('select * from estudantes where nome = :nome', ['nome' => 'Paulo']);
        // $estudantes = DB::update('update estudantes set matriculado = 0 where nome = ?', ['Paulo']);
        // $estudantes = DB::delete('delete from estudantes where id = 2');
        // $estudantes = DB::statement('drop table estudantes');
        // $estudantes = DB::table('estudantes')->paginate(10);
        // $estudantes = DB::table('estudantes')->simplePaginate(5);
        // $estudantes = estudantes::where('id', '>', 5)->paginate(15);
         $usuario = Auth::user();
         $estudantes = DB::table('estudantes')->get();

        return view('conteudos.estudantes.app_listar_estudantes', ['estudantes' => $estudantes],['usuario' => $usuario]);
        }

        return redirect('/login');

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         if (Auth::check()) {

        return view('conteudos.estudantes.app_registar_estudantes');
         }
        return redirect('/login');
    }

     
    public function store(Request $request)
    {
        //
        $usuario = Auth::user();

        $estudante = new estudantes();
        $estudante->nome = $request->tNomeCompleto;
        $estudante->dataNascimento = $request->tData;
        $estudante->localNascimento = $request->tLocalNascimento;
        $estudante->numeroBilhete = $request->tNumeroBI;
        $estudante->dataEmissaoBilhete = $request->tDataEmissao;
        $estudante->dataExpiracaoBilhete = $request->tDataExpirassao;
        $estudante->sexo = $request->tSexo;;
        $estudante->morada = $request->tCidadeMora;
        $estudante->bairro = $request->tBairro;
        $estudante->nomeEncarregado = $request->tEn;
        $estudante->relacaoComEncarregado = $request->tRealacao;
        $estudante->numeroEncarregado = $request->tNumeroTelefone;
        $estudante->criadoPor = $usuario->name;
        $estudante->editadoPor = $usuario->name;
        $estudante->foto = "";


        // Verificando se a foto é válida
        if ($request->foto) {
            $foto = $request->foto;
            $extensaoI =  $foto->getClientOriginalExtension();
            if ($extensaoI!= 'jpg' && $extensaoI!= 'png') {
                return back()->with('erro', 'Erro: foto inválida');
            }


        }
 
         $estudante->save();
        // Guardar a imagem na base de dados

         if ($request->foto) {
            File::move($foto, public_path().'/imagens/alunos/imag_'.$estudante->id.'.'.$extensaoI);
            $estudante->foto = '/imagens/alunos/imag_'.$estudante->id.'.'.$extensaoI;
            $estudante->save();
        }




        $estudante->save();
        return redirect('/registar_matriculas');
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
         if (Auth::check()) {
             $usuario = Auth::user();
             $matricula = estudantes::find($id)->matricula;
         
        return view('conteudos.estudantes.app_visualizar_estudante', ['estudante' => estudantes::findOrFail($id)],['usuario' => $usuario])->with('matricula', $matricula);
        // return view('conteudos.estudantes.app_visualizar_estudante');
         }

        return redirect('/login');
       
    }

    public function notas($id)
    {
        //

        if (Auth::check()) {

       // $notas = estudantes::find($id)->notas;

       //  foreach ($notas as $nota) {
       //      //
       //      return $nota;
       //  }

        $notas = estudantes::find(2)->notas()->where('id', '2');
         foreach ($notas as $nota) {
            //
            return $nota;
        }

        return redirect('/login');

    }
       
    }

     
    public function edit($id)
    {
        //
        $estudante =estudantes::find($id);
        return view('conteudos.estudantes.app_editar_estudante', compact('estudante'));
    }

     public function confirmar($id)
    {
        //
        $estudante =estudantes::find($id);
        $estudante->matriculado = 1;
        $usuario = Auth::user();
        $matricula = estudantes::find($id)->matricula;
        $estudante->save();
        return view('conteudos.estudantes.app_visualizar_estudante', ['estudante' => estudantes::findOrFail($id)],['usuario' => $usuario],compact('matricula'));
    }

    
    public function update(Request $request, $id)
    {
        //

        //actualizar os dados da música
        $usuario = Auth::user();
        $estudante = estudantes::find($id);
 
        $estudante->nome = $request->tNomeCompleto;
        $estudante->dataNascimento = $request->tData;
        $estudante->localNascimento = $request->tLocalNascimento;
        $estudante->numeroBilhete = $request->tNumeroBI;
        $estudante->sexo = 'Masc';
        $estudante->morada = $request->tCidadeMora;
        $estudante->bairro = $request->tBairro;
        $estudante->nomeEncarregado = $request->tEn;
        $estudante->relacaoComEncarregado = $request->tRealacao;
        $estudante->numeroEncarregado = $request->tNumeroTelefone;
        $estudante->criadoPor = $estudante->criadoPor;
        $estudante->editadoPor = $usuario->name;
        $estudante->foto =  $request->foto;

        // visibilidade da música
         if (isset($request->tSexo)) {
            $estudante->sexo = 1;
        }
        else{
            $estudante->sexo = 0;
        }

        // salvar na bd
        $estudante->save();

        // redirecionar para a página inicial

        return redirect('/estudantes');

    }
     

     
    public function destroy($id)
    {
        //
        $estudante = estudantes::findOrFail($id);
        $estudante->delete();

        return redirect('/estudantes');
    }

    public function pesquisarEstudante(Request $request)
    {


        $pesquisas = estudantes::where('nome','like','%'.$request->texto.'%')->orWhere('id','like','%'.$request->texto.'%')->get();

        // $dados = [];
        // $dados = ['url'] = url('/');
        // $dados['musica'] = musica::where('titulo','like','%'.$request->texto.'%')->orWhere('autor','like','%'.$request->texto.'%')->get();

        return view('conteudos.estudantes.app_resultado_pesquisa', compact('pesquisas'));
    }
}