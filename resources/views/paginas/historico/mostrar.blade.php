@extends('visual.visualPaginas')

@section('subtitle', 'Histórico')

@section('content')
	<br><br><br><br>
	@foreach ($historicos as $historico)
		Nome Livro: {{ $livros[$i]->nome }} <br>
		Data Emprestimo: {{ $historico->dataEmprestimo }} <br>
		Data Devolução: {{ $historico->dataDevolucao, $i++}} <br>
		<br><br>
	@endforeach

	<a class="btn btn-primary" href="{{ url('/') }}">Voltar</a>
	<br><br>
@endsection