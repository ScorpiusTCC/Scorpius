<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversa extends Model
{
    protected $table = 'conversas';

    public function mensagens()
    {
        return $this->hasMany(Mensagem::class, 'id_conversa');
    }

    public function participantes()
    {
        return $this->hasMany(ParticipanteConversa::class, 'id_conversa');
    }
}
