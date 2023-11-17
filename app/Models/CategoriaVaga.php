<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaVaga extends Model
{
    use HasFactory;

    protected $table = 'categoria_vaga';
    
    protected $fillable = [
        'nome',
        'nm_img'
    ];

    public function vaga()
    {
        return $this->hasMany(Vaga::class, 'id_vaga');
    }
}
