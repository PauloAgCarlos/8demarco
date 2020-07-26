<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadernetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadernetas', function (Blueprint $table) {
            $table->id();
            $table->string('classe');
            $table->string('numeroSga');
            $table->string('nomeAluno');
            $table->string('trimestre');
            $table->string('semana');
            $table->string('disciplinas');
            $table->string('nota');
            $table->string('informacao');
            
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
        Schema::dropIfExists('cadernetas');
    }
}
