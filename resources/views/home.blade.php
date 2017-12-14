<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
		<title>Coder's SWAG!</title>

		<!-- Bootstrap Core CSS -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Custom Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/styles.css" rel="stylesheet">
</head>

<body>
		<div clas="container-fluid">
			<div class="row">
				<!-- Header -->
			<header class="header" id="top">
				<div class="banner text col-md-offset-2 col-md-4">
					<a href="/index"><img data-tilt class="mainlogo img-responsive" src="img/logo.png"></a>
				</div>
			<section >
				<div class="col-sm-12 text-center">
								@if (session('status'))
									<div class="alert alert-success">
										{{ session('status') }}
									</div>
								@endif

							<p class="pp">¡Bienvenido!</p> 
							@if (auth()->user()->is_admin == 1)
							<p><a style="color: white;"href="{{route('adminpanel')}}">PANEL DE ADMINISTRACION</a></p>
							@else
							<p class="text-center"><a href="/productos" class="link">!EMPEZA A COMPRAR!</a></p>
							@endif

						</div>
			</section>
			</header>
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
					<a class="js-scroll-trigger" href="index"><img src="img/logo.png"></a>
				</li>
				<div class="spacer"></div>
				
	@if (auth()->check())

				<li>
					<a class="js-scroll-trigger" href="index">HOME</a>
				</li>
				<li>
					<a href="{{ route('logout')}}"
					onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">LOGOUT</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
						</form>
				</li>
				<li>
					<a class="js-scroll-trigger" href="/productos"
					 onclick=$( "#menu-close").click();>PRODUCTOS</a>
				</li>
				@if (auth()->user()->is_admin == 1)
				<li>
					<a href="{{route('adminpanel')}}">PANEL DE ADMINISTRACION</a>
				</li>
				@endif
	@else
				<li>
					<a class="js-scroll-trigger" href="/productos"
					 onclick=$( "#menu-close").click();>PRODUCTOS</a>
				</li>
				<li>
					<a class="js-scroll-trigger" href="{{route('register')}}">REGISTRARME</a>
				</li>
				<li>
					<a class="js-scroll-trigger" href="{{ route('login') }}">INICIAR SESION</a>
				</li>
				
	@endif
			</ul>
		</nav>

		<footer class="footer col-md-12">
				<img class="footerback" src="img/footerlogos.png">
				<div class="row footer-icons">
					<section class="col-md-6 mailto">
						<a href="mailto:info@codersswag.com"><i class="fa fa-envelope-o fa-fw"></i>info@codersswag.com</a>
					</section>
					<section class="col-md-6 text-right social">
						<ul class="">
							<li class="">
								<a href="https://www.facebook.com"><i class="fa fa-facebook fa-fw fa-5x"></i></a>
							</li>
							<li class="">
								<a href="https://www.twitter.com"><i class="fa fa-twitter fa-fw fa-5x"></i></a>
							</li>
							<li class="">
								<a href="https://www.instagram.com"><i class="fa fa-instagram fa-fw fa-5x"></i></a>
							</li>
						</ul>
					</section>
				</div>
			</footer>
	</div>
	</div>

		<!-- Bootstrap core JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>

		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- Custom scripts for this template -->
		<script src="js/stylish-portfolio.js"></script>
		<script type="text/javascript" scr="scroll.js"></script>
</body>

</html>





