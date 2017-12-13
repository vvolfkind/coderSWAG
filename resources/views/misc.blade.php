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
		<img data-tilt src="logos/cosashead.png">
	</div>
		<div class="productsgrid">
	@foreach ($miscs as $misc)
		<hr>
			<article class="products">
				<div class="row">
					<div>
						<img src="/storage/{{$misc->fotopath}}">
						<h3>$150</h3>
						<button type="button" class="btn btn-info">COMPRAR</button>
					</div>
				</div>
			</article>
	@endforeach
	</div>
		<div class="text text-center"><a href="productos">VOLVER</a></div>
	<div class="spacer"></div>
	<div class="spacer"></div>


@endsection