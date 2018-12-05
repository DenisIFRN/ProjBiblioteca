<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Emprestimo</title>
</head>
<body>
	<form method="POST" action="{{ route('emprestimo.store') }}">
		@csrf

		<div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Dias Alocado</label>
			<input type="int" name="dias" required autofocus>
		</div>

		<div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Situação</label>
			<input type="text" name="situacao" required autofocus>
		</div>

		<div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Data Emprestimo</label>
			<input type="date" name="dtEmprestimo" required autofocus>
		</div>

		<div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Data Devolução</label>
			<input type="date" name="dtDevolucao" required autofocus>
		</div>

		<div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Id Usuário</label>
			<input type="int" name="idUsuario" required autofocus>
		</div>

		<div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Id Livro</label>
			<input type="int" name="idLivro" required autofocus>
		</div>
		<br>
		<input type="submit"></input>
	</form>
	<a href="{{ url('/') }}">Voltar</a>
</body>
</html>