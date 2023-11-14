<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatoEstudanteTable extends Migration
{
    public function up()
    {
        Schema::create('contato_estudante', function (Blueprint $table) {
            $table->id();
            $table->string('celular', 20);
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contato_estudante');
    }
}