<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<link rel="stylesheet" type="text/css" href="/css/dashboard/dashboard.css">
	<link rel="stylesheet" href="{{ asset('js/datepicker/css/bootstrap-datepicker.min.css') }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="{{ asset('vendor/leantony/modal/modal.min.js') }}"></script>
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ asset('js/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
	 	<header class="mdl-layout__header">
	    	<div class="mdl-layout__header-row">
	      		<div class="mdl-layout-spacer"></div>
	      		
	    	</div>
	  	</header>
	  	<div class="mdl-layout__drawer">
	    	<span class="mdl-layout-title">RH Horas Extras</span>
	    	<nav class="mdl-navigation">
	      		<a class="mdl-navigation__link" href="{{ route('index') }}">Mantenimientos</a>
	      		<a class="mdl-navigation__link" href="">Calculo HE</a>
	      		<a class="mdl-navigation__link" href="">Permisos</a>
	      		<a class="mdl-navigation__link" href="">Reportes</a>
	    	</nav>
	  	</div>
	  	<main class="mdl-layout__content">
	    	<div class="page-content">
	    		@yield('content')
	    	</div>
	  	</main>
	  	<footer class="mdl-mini-footer">
			<div class="mdl-mini-footer__right-section">
		    	<div class="mdl-logo">Informatica 2018 ©</div>
		    	<ul class="mdl-mini-footer__link-list">
		      		<li><a href="#">Help</a></li>
		      		<li><a href="#">Privacy & Terms</a></li>
		    	</ul>
		  	</div>
		</footer>
	</div>
</body>
</html>