<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    public $timestamps = false;

    public function emprestimo()
    {
    	return $this->belongsTo(Emprestimo::class, 'id_livro');
    }

    public function historico()
    {
    	return $this->hasMany(Historico::class, 'id_livro');
    }
}
