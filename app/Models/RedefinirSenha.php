<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RedefinirSenha extends Model
{
    protected $table = 'redefinir_senha';
    
    protected $fillable = [
        'id_user', 
        'token',
        'usado',
        'created_at',
        'expires_at'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }
}
