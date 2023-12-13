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
        'id_categoria',
        'id_periodo',
        'id_bairro',
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
        return $this->belongsTo(Modalidade::class, 'id_modalidade');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'id_status');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    public function periodo()
    {
        return $this->belongsTo(Periodo::class, 'id_periodo');
    }

    public function bairro()
    {
        return $this->belongsTo(Bairro::class, 'id_bairro');
    }

    public function candidaturas()
    {
        return $this->hasMany(Candidatura::class, 'id_vaga');
    }
}
