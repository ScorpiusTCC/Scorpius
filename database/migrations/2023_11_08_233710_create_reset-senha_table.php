<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResetSenhaTable extends Migration
{
    public function up()
    {
        Schema::create('redefinir_senha', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->string('token');
            $table->boolean('usado');
            $table->timestamp('created_at');
            $table->timestamp('expires_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('redefinir_senha');
    }
}
