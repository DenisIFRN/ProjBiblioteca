@extends('visual.visualPaginas')

@section('subtitle', 'Emprestimos')

@section('content')
	<br><br><br><br>
	@foreach ($emprestimos as $emprestimo)
		Nome Usuario: {{ $usuarios[$i]->nome }} <br>
		Nome Livro: {{ $livros[$i]->nome }} <br>
		Dias Alocado: {{ $emprestimo->diasAlocado }} <br> 
		Situação: {{ $emprestimo->situacao }} <br>
		Data Emprestimo: {{ $emprestimo->dataEmprestimo }} <br>
		Data Devolução: {{ $emprestimo->dataDevolucao, $i++}} <br>
		<br><br>
	@endforeach

	<a class="btn btn-primary" href="{{ url('/') }}">Voltar</a>
	<br><br>
@endsection