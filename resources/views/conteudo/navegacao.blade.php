<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="{{ url('/') }}">Biblioteca</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="	false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
		    <ul class="navbar-nav ml-auto">
		    	<li class="nav-item active">
		        	<a class="nav-link" href="{{ url('/') }}">Home
		        		<span class="sr-only">(current)</span>
		        	</a>
		        </li>
		        <li class="nav-item">
		        	<a class="nav-link" href="{{ url('sobre') }}">Sobre</a>
		        </li>
		        <li class="nav-item">
		        	<a class="nav-link" href="{{ url('contato') }}">Contato</a>
		        </li>

		        <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ $infoUsers->nome }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                		document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
		    </ul>
		</div>
	</div>
</nav>