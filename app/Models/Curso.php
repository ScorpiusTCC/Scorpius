<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';

    public function estudante_curso()
    {
        return $this->hasMany(estudanteCurso::class, 'id_curso');
    }

    public function escola_curso()
    {
        return $this->hasMany(escolaCurso::class, 'id_curso');
    }
}
