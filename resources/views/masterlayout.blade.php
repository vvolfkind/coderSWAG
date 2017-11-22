<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Anton|Oswald|Ubuntu" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/css/master.css">


		<title>Nuska.net</title>
	</head>
	<body>
		<main class="container">
			<!--<div class="row">
				<header class="img-responsive">
					<img src="/img/header.png" alt="hola soy una imagen"></h1>
				</header>
			</div> -->
	<!-- NAVIGATION -->
			<div class="row col-xs-8 col-xs-offset-2">
				<nav>
					<ul class="">
						<li>
							<a href="">Mi Perfil</a>
						</li>
						<li>
							<a href="">Vender</a>
						</li>
						<li>
							<a href="">Inicia Sesion</a>
						</li>
						<li>
							<a href="">Registrate</a>
						</li>
					</ul>

					<ul class="navright">
						<li>
							<a href="">Contacto</a>
						</li>
						<li>
							<a href="">Menu</a>
						</li>
					</ul>
				</nav>
			</div>
	<!-- END NAV -->
			<div class="row">
				<div class="socialsnippet">
					<ul class="socialsnippet">
						<li>
							<a href="#"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div>
		<!-- SECTIONS -->
				<div class="col-xs-8 col-xs-offset-2">
					<section>
						@yield('content')
					</section>
				</div>

				
			</div>

			<div>
				<footer>
					
				</footer>
			</div>

		</main>
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>