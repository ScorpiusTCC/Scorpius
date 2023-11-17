<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciasTable extends Migration
{
    public function up()
    {
        Schema::create('experiencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_estudante')->constrained('estudantes');
            $table->foreignId('id_modalidade')->constrained('modalidades_vaga');
            $table->string('empregador')->nullable();
            $table->string('descricao')->nullable();
            $table->string('tempo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('experiencias');
    }
}
