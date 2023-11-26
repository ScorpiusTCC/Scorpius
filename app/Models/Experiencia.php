<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    use HasFactory;

    protected $table = 'experiencias';

    protected $fillable = [
        'id_estudante', 
        'id_modalidade', 
        'empregador', 
        'descricao', 
        'tempo',  
    ];

    public function estudante()
    {
        return $this->belongsTo(Estudante::class, 'id_estudante');
    }
    
    public function modalidade()
    {
        return $this->belongsTo(Modalidade::class, 'id_modalidade');
    }
}
