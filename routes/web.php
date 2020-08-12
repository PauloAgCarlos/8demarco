<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'appController@index');
Route::get('/registar', 'appController@registar');
Route::get('imagem', 'appController@imagem');

Route::get('/matriculas', 'matriculasController@index');
Route::get('/registar_matriculas', 'matriculasController@create');
Route::get('/visualizar_matricula/{id}', 'matriculasController@show');
Route::post('/salvar_matricula', 'matriculasController@store');

Route::get('/disciplinas', 'disciplinasController@index');
Route::get('/registar_disciplinas', 'disciplinasController@create');
Route::post('/salvar_disciplina', 'disciplinasController@store');

Route::get('/notas', 'notasController@index');
Route::get('/visualizar_notas/{id}', 'estudantesController@notas');
Route::get('/retornar_estudante/{id}', 'notasController@estudante');

Route::get('/horarios', 'turmasController@index');

Route::get('/turmas', 'turmasController@index');
Route::get('/termos', 'termosController@index');
Route::get('/pautas', 'pautasController@index');

Route::get('/estudantes', 'estudantesController@index');
Route::get('/visualizar_estudante/{id}', 'estudantesController@show');
Route::get('/editar_estudante/{id}', 'estudantesController@edit');
Route::get('/confirmar_matricula/{id}', 'estudantesController@confirmar');
Route::post('/actualizar_estudante/{id}', 'estudantesController@update');
Route::get('/registar_estudante', 'estudantesController@create');
Route::get('/pesquisar_estudante', 'estudantesController@pesquisarEstudante');
Route::post('/salvar_estudante', 'estudantesController@store');
Route::get('/eliminar_estudante/{id}', 'estudantesController@destroy');

Route::get('/editar_professor/{id}', 'professoresController@edit');
Route::get('/professores', 'professoresController@index');
Route::get('/visualizar_professor/{id}', 'professoresController@show');
Route::get('/registar_professor', 'professoresController@create');
Route::post('/salvar_professor', 'professoresController@store');

Route::get('/admin', 'adminController@index');
Route::get('/entrar', 'adminController@login');
Route::get('/anuncios', 'anunciosController@index');
Route::get('/cadernetas1', 'cadernetas1Controller@index');
Route::post('/salvar_caderneta', 'cadernetasController@store');
Route::get('/cadernetas1F', 'cadernetas1Controller@cadernetaFinal');
Route::get('/cadernetas2', 'cadernetas2Controller@index');
Route::get('/cadernetas2F', 'cadernetas2Controller@cadernetaFinal');
Route::get('/cadernetas3', 'cadernetas3Controller@index');
Route::get('/cadernetas3F', 'cadernetas3Controller@cadernetaFinal');
Route::get('/cadernetas4', 'cadernetas4Controller@index');
Route::get('/cadernetas4F', 'cadernetas4Controller@cadernetaFinal');
Route::get('/cadernetas5', 'cadernetas5Controller@index');
Route::get('/cadernetas5F', 'cadernetas5Controller@cadernetaFinal');
Route::get('/cadernetas6', 'cadernetas6Controller@index');
Route::get('/cadernetas6F', 'cadernetas6Controller@cadernetaFinal');

Route::get('/certificadosL', 'certificadosLController@index');
Route::get('/certificados9', 'certificados9Controller@index');
Route::get('/declaracoes', 'declaracoesController@index');
Route::get('/criar_mini_pautas', 'miniPautas7Controller@create');
Route::get('/visualizar_publicacao', 'publicacoesController@show');
Route::get('/visualizar_termo', 'termosController@show');

Route::get('/visualizar_turma', 'turmasController@show');
Route::get('/turmas_ensino_primario', 'turmasController@ensinoP');
Route::get('/turmas_primeiro_ciclo', 'turmasController@primeiroCiclo');
Route::get('/turmas', 'turmasController@index');


Route::get('/visualizar_funcao/{id}', 'usuariosController@show');
Route::get('/retornar_funcao/{id}', 'funcoesController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
