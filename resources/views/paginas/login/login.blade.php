@extends('visual.visualPaginas')

@section('subtitle', 'Login')

@section('content')
	<br><br><br><br><br><br>
	<center>
		<form method="POST" action="{{ route('login') }}">
			{{csrf_field()}}
			<label>Email</label>
			<input type="email" name="email" id="email">
			<br>
			<label>Senha</label>
			<input type="password" name="password" id="password">
			<br>
			<button class="btn btn-primary" type="submit">Enviar</button>
		</form>
	</center>
	<br><br>
@endsection