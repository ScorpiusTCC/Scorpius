<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = [
        'nome', 
        'email', 
        'senha',
        'remember_token',
        'verificado_at'
    ];

    public function estudante()
    {
        return $this->hasOne(UsuarioEstudante::class, 'id_user');
    }

    public function empresa()
    {
        return $this->hasOne(UsuarioEmpresa::class, 'id_user');
    }

    public function mensagens()
    {
        return $this->hasMany(Mensagem::class, 'id_user');
    }

    public function participacoes()
    {
        return $this->hasMany(ParticipanteConversa::class, 'id_user');
    }
}
