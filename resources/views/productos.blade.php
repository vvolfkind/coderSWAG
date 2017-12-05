@extends("layouts.moldePage")

@section('contenido')
		<style type="text/css">
			.header{ 
				display: none;
			 }
		</style>

			<div class="container">
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
						<a href="index" style="font-size: 20px;">Volver al inicio</a>

						<div class="spacer"></div>

						<div class="spacer"></div>

					</div>
					<!-- /.col-lg-10 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>


			<div class="spacer"></div>

@endsection