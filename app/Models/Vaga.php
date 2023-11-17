<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $table = 'vagas';
    
    protected $fillable = [
        'id_empresa', 
        'id_modalidade',
        'id_status',
        'titulo', 
        'descricao', 
        'salario', 
        'data_expiracao'
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }

    public function modalidade()
    {
        return $this->belongsTo(ModalidadeVaga::class, 'id_modalidade');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'id_status');
    }

    public function categoria_vaga()
    {
        return $this->belongsTo(TipoVaga::class, 'id_categoria_vaga');
    }

    public function candidaturas()
    {
        return $this->hasMany(Candidatura::class, 'id_vaga');
    }
}
