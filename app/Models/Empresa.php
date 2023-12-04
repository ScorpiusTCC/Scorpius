<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';

    protected $fillable = [
        'cnpj', 
        'nm_fantasia', 
        'razao_social', 
        'nm_site_empresa', 
        'descricao', 
        'endereco',
        'cep',
        'id_user',
        'id_representante'
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function vagas()
    {
        return $this->hasMany(Vaga::class, 'id_empresa');
    }

    public function representante()
    {
        return $this->belongsTo(RepresentanteEmpresa::class, 'id_representante');
    }
}
