
@extends("layouts.MoldePage")

@section('contenido')
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

	<div class="productsgrid row">
		@foreach ($miscs as $misc)
		<article class="products text-center col-md-4">
			<img src="/storage/{{$misc->fotopath}}">
			<h3>${{$misc->cost}}</h3>
			<button type="button" class="btn btn-info">COMPRAR</button>
		</article>
		@endforeach
	</div>

	<div class="spacer"></div>
	<div class="spacer"></div>
	<div class="text text-center"><a href="productos">VOLVER</a></div>
	<div class="spacer"></div>
	<div class="spacer"></div>
@endsection
