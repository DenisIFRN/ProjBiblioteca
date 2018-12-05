@extends('visual.visualPaginas')

@section('subtitle', 'Cadastro de livros')

@section('content')
	<center>
		<h1 style="margin-top: 150px"> Cadastro de livros</h1>

		<form method="POST" action="{{ url('salvar')}}">
			{{csrf_field()}}
			<label>Nome do Livro</label>
			<input type="text" name="nome">
			<br>
			<label>Autor</label>
			<input type="text" name="autor">
			<br>
			<label>Gênero</label>
			<input type="text" name="genero">
			<br>
			<label>Total de Paginas</label>
			<input type="text" name="genero">
			<br>
			<button type="submit">enviar</button>

		</form>
	</center>

@endsection