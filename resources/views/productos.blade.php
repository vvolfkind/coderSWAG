@extends("layouts.moldePage")

@section('contenido')
		<style type="text/css">
			.header{ 
				display: none;
			 }
		</style>

		<section id="about" class="about">
			<div class="container text-center">
				<h2>Conocemos el fanatismo por la programación</h2>
				<h3 style="color:#326B8E">Diseñamos pensando en vos.</h3>
			</div>

		</section>
		<section id="services" 
		"> 
			<div style="background-color:white" , class="container">
				<div class="row text-center">
					<div class="text-center">
						<h2 class="pro"><strong>Nuestros productos</strong></h2>
						<div class="spacer"></div>

						<div class="row">
							<div class="col-xs-4">
								<div class="">
									<h4><strong>Remeras</strong></h4>
									<img src="catalog/csshtml.jpg">
								</div>
							</div>
							<div class="col-xs-4">
								<div class="">
									<h4><strong>Buzos</strong></h4>
									<img src="catalog/pythonhoodie.png">
								</div>
							</div>
							<div class="col-xs-4">
								<div class="">
								<h4><strong>Musculosas</strong></h4>
								<img style="max-height:180px;" src="catalog/javascripttank.jpg">
								</div>
							</div>
						</div>
						<div class="spacer"></div>
						<div class="row">
							<div class="col-xs-4">
								<div class="">
									<h4><strong>Tazas</strong></h4>
									<img src="catalog/archmug.png">
								</div>
							</div>
							<div class="col-xs-4">
								<div class="">
									<h4><strong>Stickers</strong></h4>
									<img style="max-height:170px;" src="catalog/angularsticker.png">
								</div>
							</div>
							<div class="col-xs-4">
								<div class="">
								<h4><strong>Pins</strong></h4>
								<img src="catalog/gitpin.png">
								</div>
							</div>
						</div>

						<div class="spacer"></div>

						<div class="spacer"></div>

					</div>
					<!-- /.col-lg-10 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>





		<!-- Call to Action -->
		<aside class="call-to-action  text-white">
			<div class="container text-center">
				<h3><strong>¿Qué esperas?</strong></h3>
				<h3><strong> Busca tu diseño personalizado.</strong></h3>
				<h3><strong> !COMPRA YA!.</strong></h3>
				<br>

				<a href="buzos" class="btn btn-lg btn-light">¡VER TODOS!</a>
		</aside>
@endsection