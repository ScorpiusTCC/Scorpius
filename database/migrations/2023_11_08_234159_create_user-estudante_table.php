<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEstudanteTable extends Migration
{
    public function up()
    {
        Schema::create('user_estudante', function (Blueprint $table) {
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_estudante')->constrained('estudantes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_estudante');
    }
}
