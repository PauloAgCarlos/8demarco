<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
   
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estudante_id')->unsigned();
            $table->integer('disciplina_id')->unsigned();
            $table->string('descricao');
            $table->string('disciplinas');
            $table->integer('valor');

            $table->foreign('estudante_id')->references('id')->on('estudantes')->onDelete('cascade');
            $table->foreign('disciplina_id')->references('id')->on('disciplinas')->onDelete('cascade');

            $table->string('criadoPor')->nullable();
            $table->string('editadoPor');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
