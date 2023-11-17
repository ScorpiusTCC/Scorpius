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
        'id_user'
    ];

    
    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function vagas()
    {
        return $this->hasMany(Vaga::class, 'id_empresa');
    }

    public function usuario_empresa()
    {
        return $this->hasMany(UsuarioEmpresa::class, 'id_empresa');
    }
}
