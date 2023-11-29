<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RepresentanteEmpresa extends Model
{
    protected $table = 'representantes_empresas';
    
    protected $fillable = [
        'nm_representante',
        'cpf_representante',
        'telefone_comercial',
        'telefone_celular',
        'email'
    ];

    public function empresa()
    {
        return $this->hasOne(Empresa::class, 'id_representante');
    }
}
