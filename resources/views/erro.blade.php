@extends('visual.visualPaginas')

@section('subtitle', 'Erro')

@section('content')
	<br><br><br><br>
	<center>
		<h1>Erro</h1>
		<h3>Email ou senha incorretos</h3>

		<a class="btn btn-primary" href="{{ url('/') }}">Tentar novamente</a>

		<a class="btn btn-primary" href="{{ route('registro.index') }}">Registrar-se</a>
	</center>
	<br><br>

@endsection