<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentanteEmpresaTable extends Migration
{
    public function up()
    {
        Schema::create('representantes_empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nm_representante');
            $table->string('cpf_representante');
            $table->string('telefone_comercial', 20);
            $table->string('telefone_celular', 20);
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('representantes_empresas');
    }
}
