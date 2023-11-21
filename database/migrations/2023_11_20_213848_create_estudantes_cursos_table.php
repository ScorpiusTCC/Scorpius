<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudantesCursosTable extends Migration
{
    public function up()
    {
        Schema::create('estudantes_cursos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_estudante')->constrained('estudantes');
            $table->foreignId('id_curso')->constrained('cursos');
            $table->foreignId('id_periodo')->constrained('periodos');
            $table->integer('ano_inicio');
            $table->integer('ano_fim');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estudantes_cursos');
    }
}
