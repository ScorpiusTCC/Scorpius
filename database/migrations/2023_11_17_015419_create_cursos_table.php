<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_escola')->constrained('escolas');
            $table->foreignId('id_periodo')->constrained('periodos');
            $table->string('nome');
            $table->integer('ano_inicio');
            $table->integer('ano_fim');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
