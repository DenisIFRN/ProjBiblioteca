@extends('visual.visualPaginas')

@section('subtitle', 'Login')

@section('content')
	<br><br><br><br><br><br>
	<center>
		<form method="POST" action="{{ route('registro.store') }}">
			@csrf

			<div class="form-group row">
	            <label class="col-md-4 col-form-label text-md-right">Nome</label>
				<input type="text" name="nome" required autofocus>
			</div>

			<div class="form-group row">
	            <label class="col-md-4 col-form-label text-md-right">Matricula</label>
				<input type="text" name="matricula" required autofocus>
			</div>

			<div class="form-group row">
	            <label class="col-md-4 col-form-label text-md-right">E-Mail</label>
				<input type="email" name="email" required autofocus>
			</div>

			<div class="form-group row">
	            <label class="col-md-4 col-form-label text-md-right">Senha</label>
				<input type="password" name="password" required autofocus>
			</div>
			<br>
			<input class="btn btn-primary" type="submit"></input>
		</form>
	</center>
	<br><br>
@endsection