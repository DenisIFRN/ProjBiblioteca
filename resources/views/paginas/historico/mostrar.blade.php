<!DOCTYPE html>
<html>
<head>
	<title>Historicos</title>
</head>
<body>

	@foreach ($historicos as $historico)
		Nome Usuario: {{ $usuarios[$i]->nome }} <br>
		Nome Livro: {{ $livros[$i]->nome }} <br>
		Data Emprestimo: {{ $historico->dataEmprestimo }} <br>
		Data Devolução: {{ $historico->dataDevolucao, $i++}} <br>
		<br><br>
	@endforeach

	<a href="{{ url('/') }}">Voltar</a>
</body>
</html>