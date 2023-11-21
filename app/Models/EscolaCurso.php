<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EscolaCurso extends Model
{
    use HasFactory;

    protected $table = 'escolas_cursos';

    protected $fillable = [
        'id_escola', 
        'id_curso'
    ];

    public function escola()
    {
        return $this->belongsTo(Escola::class, 'id_escola');
    }
    
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }
}
