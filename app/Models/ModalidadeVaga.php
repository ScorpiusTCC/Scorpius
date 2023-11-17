<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModalidadeVaga extends Model
{
    protected $table = 'modalidades_vaga';
    
    protected $fillable = [
        'tipo'
    ];

    public function vaga()
    {
        return $this->hasMany(Vaga::class, 'id_modalidade');
    }
}
