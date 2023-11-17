<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSexosTable extends Migration
{
    public function up(): void
    {
        Schema::create('sexos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sexos');
    }
}
