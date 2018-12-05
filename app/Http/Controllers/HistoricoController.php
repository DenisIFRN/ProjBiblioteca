<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Historico;
use App\User;
use App\Livro;

class HistoricoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historicos = Historico::get();

        $usuarios = Historico::leftJoin('users', 'historicos.id_usuario', '=', 'users.id')
            ->selectRaw('nome')
            ->orderBy('historicos.id')
            ->get();

        $livros = Historico::leftJoin('livros', 'historicos.id_livro', '=', 'livros.id')
            ->selectRaw('nome')
            ->orderBy('historicos.id')
            ->get();

        $i = 0;
        return view('paginas.historico.mostrar', ['historicos' => $historicos, 'usuarios' => $usuarios, 'livros' => $livros, 'i' => $i]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
