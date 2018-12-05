<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    public $timestamps = false;

    public function user()
    {
    	return $this->belongsTo(User::class, 'id_usuario');
    }

    public function livro()
    {
    	return $this->hasOne(Livro::class, 'id_livro');
    }
}
