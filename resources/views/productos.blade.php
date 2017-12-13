@extends("layouts.MoldePage")

@section('contenido')
		<style type="text/css">
			.header{ 
				display: none;
			 }
		</style>

			<div class="container-fluid">
				<div class="row text-center">
					<div class="text-center">
						<div class=" text-center">
							<img data-tilt src="logos/nuestroswag.png" class="img-responsive">
						</div>
						<div class="spacer"></div>

						<div class="row col-md-12">
							<div class="col-md-4">
								<div >
									<h4><strong>Remeras</strong></h4>
									<a href="remeras"><img class ="productos img-responsive" src="catalog/reactblue.png" ></a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="">
									<h4><strong>Buzos</strong></h4>
									<a href="buzos"><img class="productos img-responsive" src="catalog/angularhoodie.png"></a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="">
									<h4><strong>Misceláneos</strong></h4>
									<a href="misc"><img class="productos img-responsive" src="catalog/archmug.png"></a>
								</div>
							</div>
						</div>
						<div class="spacer"></div>
						<div class="spacer"></div>
						<div class="spacer"></div>
						<a href="index" style="font-size: 20px;">VOLVER</a>
					</div>
				</div>
			</div>
		</section>

			<div class="spacer"></div>
			<div class="spacer"></div>

@endsection