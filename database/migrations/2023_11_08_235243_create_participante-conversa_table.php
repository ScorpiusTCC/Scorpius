<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipanteConversaTable extends Migration
{
    public function up()
    {
        Schema::create('participantes_conversa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_conversa')->constrained('conversas');
            $table->foreignId('id_user')->constrained('users');
            $table->unique(['id_conversa', 'id_user']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('participantes_conversa');
    }
}
