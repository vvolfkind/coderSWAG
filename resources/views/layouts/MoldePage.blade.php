<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
		<title>CoderSWAG</title>

		<!-- Bootstrap Core CSS -->
		<!-- Latest compiled and minified CSS -->
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Custom Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/styles.css" rel="stylesheet">
</head>

<body>
		<!-- Navigation -->
		<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle">
			<i class="fa fa-bars"></i>
		</a>
		<nav id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle">
					<i class="fa fa-times"></i>
				</a>
				<li class="sidebar-brand">
					<a class="js-scroll-trigger" href="index">CoderSWAG</a>
				</li>
				<li>
					<a class="js-scroll-trigger" href="#about">Sobre Nosotros</a>
				</li>
				<li>
					<a class="js-scroll-trigger" href="{{route('register')}}">Registrarme</a>
				</li>
				<li>
					<a class="js-scroll-trigger" href="{{ route('login') }}">Iniciar Sesion</a>
				</li>
				<li>
					<a class="js-scroll-trigger" href="/productos"
					 onclick=$( "#menu-close").click();>PRODUCTOS</a>
				</li>
			</ul>
		</nav>

		<!-- Header -->
		<header class="header" id="top">
			<div class="row col-md-12">
				<div class="banner text text-center">
					<div>
						<img class="mainlogo" src="img/logo.png">
					</div>
					<div>
						@yield("forms")
					</div>
				</div>
			</div>
		</header>

		

		<section class="container">
		@yield("contenido")
		</section>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mx-auto text-center">
						<h4 style="color: white;">
							<strong>CoderSWAG</strong>
						</h4>
						<p style="color:#63AC79;">Tienda Online
							<br>Envio a todos los paises</p>
						<ul style="color:#63AC79;" class="list-unstyled">
							<li class="foot">
								<i  class="fa fa-phone fa-fw"></i>
								Contactos</li>
							<li>
								<i class="fa fa-envelope-o fa-fw"></i>
								<a style="color:white"; href="mailto:info@codersswag.com">info@codersswag.com</a>
							</li>
						</ul>
						<br>
						<ul style="color:#63AC79;" class="list-inline">
							<li class="list-inline-item">
								<a  style="color:#707b76" href="#">
									<i class="fa fa-facebook fa-fw fa-3x"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i  style="color:#707b76" class="fa fa-twitter fa-fw fa-3x"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a  style="color:#707b76"  style="color:#707b76" href="#">
									<i class="fa fa-instagram fa-fw fa-3x"></i>
								</a>
							</li>
						</ul>
						<hr class="small">
						<p class="text-muted">CoderSWAG! 2017</p>
					</div>
				</div>
			</div>
			<a id="to-top" href="#top" class="btn btn-dark btn-lg js-scroll-trigger">
				<i class="fa fa-chevron-up fa-fw fa-1x"></i>
			</a>
		</footer>

		<!-- Bootstrap core JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- Custom scripts for this template -->
		<script src="js/stylish-portfolio.js"></script>
		<script type="text/javascript" scr="scroll.js"></script>
</body>

</html>
