<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserEmpresa extends Model
{
    protected $table = 'user_empresa';
    
    protected $fillable = [
        'id_user', 
        'id_empresa'
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