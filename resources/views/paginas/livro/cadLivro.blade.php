@extends('visual.visualPaginas')

@section('subtitle', 'Novo Livro')

@section('content')
	<br><br><br>
	<center>
		<form method="POST" action="{{ route('livro.store') }}">
			@csrf

			<div class="form-group row">
	            <label class="col-md-4 col-form-label text-md-right">Nome</label>
				<input type="text" name="nome" required autofocus>
			</div>

			<div class="form-group row">
	            <label class="col-md-4 col-form-label text-md-right">Autor</label>
				<input type="text" name="autor" required autofocus>
			</div>

			<div class="form-group row">
	            <label class="col-md-4 col-form-label text-md-right">Gênero</label>
				<input type="text" name="genero" required autofocus>
			</div>

			<div class="form-group row">
	            <label class="col-md-4 col-form-label text-md-right">Editora</label>
				<input type="text" name="editora" required autofocus>
			</div>

			<div class="form-group row">
	            <label class="col-md-4 col-form-label text-md-right">Situação</label>
				<input type="text" name="situacao" required autofocus>
			</div>

			<div class="form-group row">
	            <label class="col-md-4 col-form-label text-md-right">Total de Paginas</label>
				<input type="int" name="totPaginas" required autofocus>
			</div>

			<div class="form-group row">
	            <label class="col-md-4 col-form-label text-md-right">Data de Lançamento</label>
				<input type="date" name="dataLancamento" required autofocus>
			</div>
			<br>
			<input class="btn btn-primary" type="submit"></input>
		</form>
	</center>
	<a class="btn btn-primary" href="{{ url('/') }}">Voltar</a> <br><br>
@endsection