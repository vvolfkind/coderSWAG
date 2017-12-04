@extends('layouts.moldePage')

@section('contenido')
		<!-- About -->
		<section id="about" class="about">
			<div class="container text-center">
				<h2>Conocemos el fanatismo por la programación</h2>
				<p class="p" style=" color:#326B8E">Diseñamos pensando en vos.</p>
			</div>
			<!-- /.container -->
		</section>

		<!-- Services -->
		<section id="services"> 
			<div style="background-color:white" , class="container">
				<div class="row text-center">
					<div class="col-lg-10 mx-auto">
						<h2>Nuestro servicio</h2>
						<hr class="small">
						<div class="row">
							<div class="col-md-4 col-sm-8">
								<div class="service-item">
									<img src="img/idea.png">
									<h4>
										<strong>Personalizado</strong>
									</h4>
									<p>Modelos únicos pensados para cada persona.</p>

								</div>
							</div>
							<div class="col-md-4 col-sm-8">
								<div class="service-item">
								<img src="img/money.png">
									<h4>
										<strong>Accesible</strong>
									</h4>
									<p>El mejor precio, siempre.</p>

								</div>
							</div>
							<div class="col-md-4 col-sm-8">
								<div class="service-item">
								 <img src="img/deliver.png">
									<h4>
										<strong>Rápido</strong>
									</h4>
									<p>Sabemos lo importante que es el tiempo.</p>
								 
								</div>
							</div>
						</div>
						<!-- /.row (nested) -->
					</div>
					<!-- /.col-lg-10 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>

		<!-- Callout -->
		<aside class="callout">
			<div class="text-vertical-center">
				<h1 >Diseñamos con pasión</h1>
			</div>
		</aside>

		<!-- Portfolio -->
		<div class="card-columns">
	<div class="card">
	
		<div class="card-block">
			<h4 class="card-title">   Algunos de nuestros productos </h4>
			<p class="card-text"> DESCRIPCION</p>
		</div>
	</div>
	<div class="card p-3">
		<blockquote class="card-block card-blockquote">
			<p>DESCRIPCION</p>
			<footer>
				<small class="text-muted">
				 CoderSWAG <cite title="Source Title"></cite>
				</small>
			</footer>
		</blockquote>
	</div>
	<div class="card">
		<img class="card-img-top img-fluid" src="..." alt="Card image cap">
		<div class="card-block">
			<h4 class="card-title">Producto</h4>
			<p class="card-text">DESCRIPCION</p>
			<p class="card-text"><small class="text-muted"></small></p>
		</div>
	</div>
	<div class="card card-inverse card-primary p-3 text-center">
		<blockquote class="card-blockquote">
			<p>DESCRIPCION</p>
			<footer>
				<small>
				 CoderSWAG <cite title="Source Title"></cite>
				</small>
			</footer>
		</blockquote>
	</div>
	<div class="card text-center">
		<div class="card-block">
			<h4 class="card-title">Producto</h4>
			<p class="card-text">DESCRIPCION.</p>
			<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		</div>
	</div>
	<div class="card">
		<img class="card-img img-fluid" src="..." alt="Card image">
	</div>
	<div class="card p-3 text-right">
		<blockquote class="card-blockquote">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			<footer>
				<small class="text-muted">
				 CoderSWAG <cite title="Source Title"></cite>
				</small>
			</footer>
		</blockquote>
	</div>
	<div class="card">
		<div class="card-block">
			<h4 class="card-title">Producto</h4>
			<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
			<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		</div>
	</div>
</div>
						<!-- /.row (nested) -->
					 
					 <!-- /.container -->
		</section>

		<!-- Call to Action -->
		<aside class="call-to-action bg-primary text-white aside1">
			<div class="container text-center">
				<h3>¿Todavía no tenes tu cuenta? CREALA YA!.</h3>
				<a href="#" class="btn btn-lg btn-light">Registrarme!</a>
		</aside>
@endsection