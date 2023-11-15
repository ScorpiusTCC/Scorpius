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
            $table->string('nome');
            $table->date('data_de_nascimento');
            $table->char('cpf', 11)->nullable();
            $table->integer('ano_cursado')->nullable();
            $table->text('sobre')->nullable();
            $table->text('habilidades')->nullable();
            $table->text('experiencias')->nullable();
            $table->string('endereco')->nullable();
            $table->foreignId('id_contato')->constrained('contato_empresa');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estudantes');
    }
}