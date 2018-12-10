@extends('visual.visualPaginas')

@section('subtitle', 'Livros')

@section('content')
	<br><br><br><br>
	@foreach ($livros as $livro)
		Id: {{ $livro->id }} <br>
		Nome: {{ $livro->nome }} <br>
		Autor: {{ $livro->autor }}<br>
		Gênero: {{ $livro->genero }} <br>
		Editora: {{ $livro->editora }} <br>
		Situação: {{ $livro->situacao }} <br>
		Data Lançamento: {{ $livro->dataLancamento }}
		<br><br>
	@endforeach

	<a class="btn btn-primary" href="{{ url('/') }}">Voltar</a>
	<br><br>
@endsection