@extends('visual.visualPaginas')

@section('subtitle', 'Inicio')

@section('content')
	<header class="masthead">
	    <div class="container">
	      <div class="row">
	        <div class="col-md-12">
	          <h1>Página Principal</h1> <br>
	        </div>

		    <div class="container">
			    <div class="row justify-content-center">
			        <div class="col-md-8">
			            <div class="card">
			                <ul class="navbar-nav">
			                	<li>
					        		<a class="nav-link" href="{{ route('user.index') }}"><h4>Minhas informações</h4></a>
					        	</li>

					        	<li>
					        		<a class="nav-link" href="{{ route('livro.index') }}"><h4>Consultar Livros</h4></a>
					        	</li>

					        	<li>
					        		<a class="nav-link" href="{{ route('historico.index') }}"><h4>Consultar Histórico</h4></a>
					        	</li>
					    	</ul>
			            </div>
			        </div>
			    </div>
			</div>

			<br><br><br><br><br><br><br><br><br>
			
			@if(Auth::user()->type === 'funcionario')
				<div class="container">
				    <div class="row justify-content-center">
				        <div class="col-md-8">
				            <div class="card">
				                
							        <ul class="navbar-nav">
							        	<li>
						        			<a class="nav-link" href="{{route('user.index') }}"><h4>Consultar Usuários</h4></a>
						        		</li>
							        	<li>
							        		<a class="nav-link" href="{{ route('emprestimo.create') }}"><h4>Cadastrar Emprestimo</h4></a>
							        	</li>

							        	<li>
							        		<a class="nav-link" href="{{ route('emprestimo.index') }}"><h4>Consultar Emprestimos</h4></a>
							        	</li>

							        	<li>
							        		<a class="nav-link" href="{{ route('livro.create') }}"><h4>Cadastrar Livros</h4></a>
							        	</li>
							        </ul>
						       	
				            </div>
				        </div>
				    </div>
				</div>
			@endif
	       

	      </div>
	    </div>
	</header>
	<section id="about">
		<div class="container">
			<h1>Sobre o Sistema</h1>
		    <div class="row">
		    	<div class="col-md-12">
		    	</div>
		    </div>
		</div>
	</section>

	<section id="about-app">
	    <div class="container">
	      <h1>Sobre o Aplicativo</h1>
	      <div class="row">
	        <div class="col-md-12">

	        </div>
	      </div>
	    </div>
 	</section>

	  <section id="functionalities">
	    <div class="container">
	      <h1>Funcionalidades</h1>
	      <div class="row">
	        <div class="col-md-12">

	        </div>
	      </div>
	    </div>
	  </section>
  @endsection