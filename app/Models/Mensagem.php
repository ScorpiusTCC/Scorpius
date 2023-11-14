<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $table = 'mensagens';

    protected $fillable = [
        'id_conversa', 
        'id_user', 
        'texto'
    ];

    public function conversa()
    {
        return $this->belongsTo(Conversa::class, 'id_conversa');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
