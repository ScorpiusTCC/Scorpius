<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudanteCurso extends Model
{
    use HasFactory;

    protected $table = 'estudantes_cursos';

    protected $fillable = [
        'id_estudante', 
        'id_curso', 
        'id_periodo',
        'ano_inicio', 
        'ano_fim' 
    ];

    public function estudante()
    {
        return $this->belongsTo(Estudante::class, 'id_estudante');
    }
    
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }
}
