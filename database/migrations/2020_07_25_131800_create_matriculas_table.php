<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\estudantes;
use App\turmas;
use App\users;

class CreateMatriculasTable extends Migration
{
    
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estudante_id')->unsigned();
            $table->string('nomeEstudante');
            // $table->integer('turma_id')->unsigned();
            // $table->integer('usuario_id')->unsigned();
            $table->string('foto')->default('foto');
            $table->string('anoLectivo');  
            // $table->string('periodo')->default('laboral');   
            $table->string('turno')->default('manha');  
            $table->string('classe')->default('1ª Classe');  
            // $table->string('Sala')->default('1ª Classe');  
            $table->string('numeroEstudante');


            $table->foreign('estudante_id')->references('id')->on('estudantes')->onDelete('cascade');
            // $table->foreign('turma_id')->references('id')->on('turmas');
            // $table->foreign('usuario_id')->references('id')->on('users')->nullable();

            $table->string('criadoPor')->nullable();
            $table->string('editadoPor');

            $table->timestamps();
        });
    }

    //     public function up()
    // {
    //     Schema::create('avaliacao_funcao_registros', function (Blueprint $table) {
    //         $table->increments('id');
            // $table->integer('empresa_id')->unsigned();
    //         $table->foreign('empresa_id')->references('id')->on('empresas');
    //         $table->integer('avaliacao_registro_item_id')->unsigned();
    //         $table->foreign('avaliacao_registro_item_id')->references('id')->on('avaliacao_registro_items');
    //         $table->integer('funcao_id')->unsigned();
    //         $table->foreign('funcao_id')->references('id')->on('funcaos');
    //         $table->dateTime('data_registro');
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriculas');
    }
}
