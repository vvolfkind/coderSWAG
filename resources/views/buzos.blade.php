@extends("layouts.MoldePage")
@section("contenido")
	<style>
		.header {
			display: none;
		}
	</style>
	<div class="spacer"></div>
	<div class="spacer"></div>
	<div class="spacer"></div>
	<div class="gallerylogo text-center">
		<img data-tilt src="logos/buzoshead.png">
	</div>
	<div class="productsgrid">
	@foreach ($buzos as $buzo)
		<hr>
			<article class="products">
				<div class="row">
					<div>
						<img src="/storage/{{$buzo->fotopath}}">
						<h3>$550</h3>
						<button type="button" class="btn btn-info">COMPRAR</button>
					</div>
				</div>
			</article>
	@endforeach
	</div>

	<div class="spacer"></div>
	<div class="spacer"></div>
	<div class="text text-center"><a href="productos">VOLVER</a></div>
	<div class="spacer"></div>
	<div class="spacer"></div>

@endsection