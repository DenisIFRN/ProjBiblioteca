@extends('visual.visualPaginas')

@section('subtitle', 'Usuários')

@section('content')
	<br><br><br><br>
	@foreach ($usuarios as $usuario)
		Nome: {{ $usuario->nome }} <br>
		Tipo: {{ $usuario->type }} <br>
		Matrícula: {{ $usuario->matricula }} <br>
		E-Mail: {{ $usuario->email }}
		<br><br>

	@endforeach

	<a class="btn btn-primary" href="{{ url('/') }}">Voltar</a>
	<br><br>

@endsection