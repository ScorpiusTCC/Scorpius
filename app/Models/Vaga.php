<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $table = 'vagas';
    
    protected $fillable = [
        'id_empresa', 
        'titulo', 
        'descricao', 
        'vl_salario', 
        'data_expiracao'
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }

    public function candidaturas()
    {
        return $this->hasMany(Candidatura::class, 'id_vaga');
    }
}
