<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscolasCursosTable extends Migration
{
    public function up()
    {
        Schema::create('escolas_cursos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_escola')->constrained('escolas');
            $table->foreignId('id_curso')->constrained('cursos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('escolas_cursos');
    }
};
