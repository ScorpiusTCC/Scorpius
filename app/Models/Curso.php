<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';

    public function escolas()
    {
        return $this->belongsTo(Escola::class, 'id_escola');
    }

    public function periodo()
    {
        return $this->belongsTo(Periodo::class, 'id_periodo');
    }
}
