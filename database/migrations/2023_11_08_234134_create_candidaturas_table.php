<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidaturasTable extends Migration
{
    public function up()
    {
        Schema::create('candidaturas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_estudante')->constrained('estudantes');
            $table->foreignId('id_vaga')->constrained('vagas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidaturas');
    }
}