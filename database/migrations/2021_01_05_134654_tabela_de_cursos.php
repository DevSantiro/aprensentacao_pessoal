<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaDeCursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function(Blueprint $table){
            $table->increments('id'); # ok
            $table->string('nome_curso'); # ok
            $table->text('descricao'); # ok
            $table->text('certificado'); # ok
            $table->string('plataforma'); # ok 
            $table->string('area_curso'); # ok
            $table->date('dt_conclusao'); # ok
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');        
    }
}
