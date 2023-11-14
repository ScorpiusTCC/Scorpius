<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEmpresaTable extends Migration
{
    public function up()
    {
        Schema::create('user_empresa', function (Blueprint $table) {
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_empresa')->constrained('empresas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_empresa');
    }
}

