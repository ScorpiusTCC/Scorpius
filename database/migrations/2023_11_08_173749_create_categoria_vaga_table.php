<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
class CreateCategoriaVagaTable extends Migration
{
    public function up()
    {
        Schema::create('categoria_vaga', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('nm_img');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categoria_vaga');
    }
}
