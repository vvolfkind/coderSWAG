@extends("layouts.MoldePage")

@section('contenido')
		<style type="text/css">
			.header{ 
				display: none;
			 }
		</style>

			<div class="container">
				<div class="row text-center">
					<div class="text-center">
						<h2 class="pro"><strong>NUESTRO SWAG!</strong></h2>
						<div class="spacer"></div>

						<div class="row">
							<div class="col-xs-4">
								<div class="">
									<h4><strong>Remeras</strong></h4>
									<a href="remeras"><img class ="shirtsize" src="catalog/reactblue.png"></a>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="">
									<h4><strong>Buzos</strong></h4>
									<a href="buzos"><img class="shirtsize" src="catalog/angularhoodie.png"></a>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="">
									<h4><strong>Misceláneos</strong></h4>
									<a href="misc"><img src="catalog/archmug.png"></a>
								</div>
							</div>
						</div>
						<div class="spacer"></div>
						<div class="spacer"></div>
						<div class="spacer"></div>
						<a href="index" style="font-size: 20px;">VOLVER</a>
					</div>
					<!-- /.col-lg-10 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>


			<div class="spacer"></div>

@endsection