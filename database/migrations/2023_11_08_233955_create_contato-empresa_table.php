<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatoEmpresaTable extends Migration
{
    public function up()
    {
        Schema::create('contato_empresa', function (Blueprint $table) {
            $table->id();
            $table->string('nm_representante')->nullable();
            $table->string('telefone_comercial', 20);
            $table->string('telefone_celular', 20);
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contato_empresa');
    }
}
