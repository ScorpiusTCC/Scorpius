<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscolaridadeTable extends Migration
{
    public function up()
    {
        Schema::create('escolaridade', function (Blueprint $table) {
            $table->id();
            $table->string('instituicao', 80);
            $table->string('curso', 220);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('escolaridade');
    }
}