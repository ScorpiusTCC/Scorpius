<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContatoEmpresa extends Model
{
    protected $table = 'contato_empresa';
    
    protected $fillable = [
        'telefone_comercial',
        'telefone_celular',
        'email'
    ];

    public function empresa()
    {
        return $this->hasOne(Empresa::class, 'id_contato');
    }
}
