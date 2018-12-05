<!DOCTYPE html>
<html>
<head>
	<title>Emprestimos</title>
</head>
<body>

	@foreach ($emprestimos as $emprestimo)
		Nome Usuario: {{ $usuarios[$i]->nome }} <br>
		Nome Livro: {{ $livros[$i]->nome }} <br>
		Dias Alocado: {{ $emprestimo->diasAlocado }} <br> 
		Situação: {{ $emprestimo->situacao }} <br>
		Data Emprestimo: {{ $emprestimo->dataEmprestimo }} <br>
		Data Devolução: {{ $emprestimo->dataDevolucao, $i++}} <br>
		<br><br>
	@endforeach

	<a href="{{ url('/') }}">Voltar</a>
</body>
</html>