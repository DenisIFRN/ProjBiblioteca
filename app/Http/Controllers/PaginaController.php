<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class PaginaController extends Controller
{

    public function __construct()
    {
        $this->middleware ('auth');
    }
    
    public function getHome() {
        $users = User::get();
        return view('paginas.home', ['users' => $users]);
    }

    public function getSobre() {
        return view('paginas.sobre');
    }

    public function getContato() {
        return view('paginas.contato');
    }

    public function getCadastro() {
        return view('paginas.cadastroLivro');
    }

    public function postSalvar() {
        return view('paginas.salvar');
    }
}