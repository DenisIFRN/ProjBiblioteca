<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'type', 'matricula', 'email', 'password',
    ];

    public $timestamps = false;

    public $remember_token = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    public function emprestimo()
    {
        return $this->hasMany(Emprestimo::class, 'id_usuario');
    }

    public function historico()
    {
        return $this->hasMany(Historico::class, 'id_usuario');
    }
}
