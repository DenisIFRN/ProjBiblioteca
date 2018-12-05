<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlePagina extends Controller {
	
	public function getHome() {
		return view('paginas.home');
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

?>