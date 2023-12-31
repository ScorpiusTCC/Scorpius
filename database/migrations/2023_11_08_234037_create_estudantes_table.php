<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudantesTable extends Migration
{
    public function up()
    {
        Schema::create('estudantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_contato')->constrained('contato_estudante')->unique();
            $table->foreignId('id_sexo')->constrained('sexos');
            $table->foreignId('id_bairro')->constrained('bairros');
            $table->string('nome');
            $table->string('curriculo')->nullable();
            $table->date('data_nasc');  
            $table->integer('idade');
            $table->char('cpf', 11)->unique();
            $table->text('sobre')->nullable();
            $table->char('cep', 8);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estudantes');
    }
}