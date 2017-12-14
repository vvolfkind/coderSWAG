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
		<link href="/css/styles.css" rel="stylesheet">
</head>
<body>
	<main class="fluid-container">
		<div class="navadmin">
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="row">
					<div class="collapse navbar-collapse">
						<ul>
							<li><a href="/index"><img class="img-responsive" src="/img/logo.png"></a></li>
							<li><a href="subir">SUBIR PRODUCTOS</a></li>
							<li><a href="indexproductos">EDITAR PRODUCTOS</a></li>
							<li><a href="users">CONTROL USUARIOS</a></li>
							<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
							</form>
							</li>
							<li style="margin-left: 300px;"><h4 class="text-danger">Logueado desde {{Request::ip()}}</h4></li>
						</ul>
					</div>

				</div>
			</nav>
		</div>
		<div class="adminpanels">
		@yield('sectionadmin')
		@yield('editsection')
		</div>
	</main>
</body>