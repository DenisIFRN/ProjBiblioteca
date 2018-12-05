<!DOCTYPE html>
<html>

	@include('conteudo.cabecalho')

	<body>
		
		@include('conteudo.navegacao')

		@yield('content')
		
		@include('conteudo.rodape')
		
		@include('conteudo.scripts')

	</body>
</html>