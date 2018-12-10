<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emprestimo;
use App\Historico;
use App\User;
use App\Livro;

class EmprestimoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware ('auth');
    }
    
    public function index()
    {
        $emprestimos = Emprestimo::get();

        $usuarios = Emprestimo::leftJoin('users', 'emprestimos.id_usuario', '=', 'users.id')
            ->selectRaw('nome')
            ->orderBy('emprestimos.id')
            ->get();

        $livros = Emprestimo::leftJoin('livros', 'emprestimos.id_livro', '=', 'livros.id')
            ->selectRaw('nome')
            ->orderBy('emprestimos.id')
            ->get();

        $i = 0;
        return view('paginas.emprestimo.mostrar', ['emprestimos' => $emprestimos, 'usuarios' => $usuarios, 'livros' => $livros, 'i' => $i]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paginas.emprestimo.cadEmprestimo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $emprestimo = new Emprestimo;
        $emprestimo->diasAlocado = $request->dias;
        $emprestimo->situacao = $request->situacao;
        $emprestimo->dataEmprestimo = $request->dtEmprestimo;
        $emprestimo->dataDevolucao = $request->dtDevolucao;
        $emprestimo->id_usuario = $request->idUsuario;
        $emprestimo->id_livro = $request->idLivro;

        $emprestimo->save();
        
        return view('paginas.emprestimo.cadEmprestimo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
