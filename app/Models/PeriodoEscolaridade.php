<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodoEscolaridade extends Model
{
    use HasFactory;

    protected $table = 'periodos_estudo';
    
    protected $fillable = [
        'nome'
    ];

    public function escolaridade()
    {
        return $this->hasMany(Escolaridade::class, 'id_periodo');
    }
}
