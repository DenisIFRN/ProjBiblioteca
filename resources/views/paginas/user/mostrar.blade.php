<!DOCTYPE html>
<html>
<head>
	<title>Usuários</title>
</head>
<body>
	@foreach ($usuarios as $usuario)
		Id: {{ $usuario->id }} <br>
		Nome: {{ $usuario->nome }} <br>
		Tipo: {{ $usuario->type }} <br>
		Matrícula: {{ $usuario->matricula }} <br>
		E-Mail: {{ $usuario->email }}
		<br><br>
	@endforeach

	<a href="{{ url('/') }}">Voltar</a>
</body>
</html>