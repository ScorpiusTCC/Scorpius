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
            $table->char('cnpj', 14);
            $table->string('nm_fantasia');
            $table->string('razao_social');
            $table->string('nm_site_empresa', 80)->nullable();
            $table->text('descricao')->nullable();
            $table->string('endereco')->nullable();
            $table->foreignId('id_contato')->constrained('contato_empresa');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
