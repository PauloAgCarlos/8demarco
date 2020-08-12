<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasTable extends Migration
{
   
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('ensino');
            $table->string('classe');

            $table->string('criadoPor')->nullable();
            $table->string('editadoPor');

            $table->timestamps();
        });
    }

    

    public function down()
    {
        Schema::dropIfExists('turmas');
    }
}
