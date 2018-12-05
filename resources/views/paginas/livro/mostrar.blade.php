<!DOCTYPE html>
<html>
<head>
	<title>Livros</title>
</head>
<body>
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

	<a href="{{ url('/') }}">Voltar</a>
</body>
</html>