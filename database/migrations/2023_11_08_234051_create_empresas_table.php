<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_representante')->constrained('representantes_empresas');
            $table->char('cnpj', 18)->unique();
            $table->string('nm_fantasia');
            $table->string('razao_social');
            $table->text('descricao')->nullable();
            $table->string('endereco');
            $table->string('cep');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
