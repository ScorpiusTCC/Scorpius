<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVagasTable extends Migration
{
    public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_empresa')->constrained('empresas');
            $table->foreignId('id_modalidade')->constrained('modalidades_vaga');
            $table->foreignId('id_status')->constrained('status');
            $table->string('titulo');
            $table->text('descricao');
            $table->decimal('salario', 10, 2)->nullable();
            $table->date('data_expiracao');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vagas');
    }
}

