@extends("adminpanel")
@section('sectionadmin')
<div class="spacer"></div>
<div class="spacer"></div>
<div class="spacer"></div>
<div class="spacer"></div>
<div class="spacer"></div>


<div class="col-md-8 col-md-offset-2">

<form action="/productos" method="post" enctype="multipart/form-data">

	{{csrf_field()}}
	<div class="">
		<h4 class="text text-center">TODOS LOS CAMPOS SON OBLIGATORIOS</h4>
		<form>
			<label for="">Nombre del producto</label>
			<input type="text" class="form-control" id="" aria-describedby="" name="name">

			<label for="">Precio</label>
			<input class="form-control" id="" name="cost">

			<label for="">Categoria</label>
			<input class="form-control" id="" name="category_id">

			<label for="fotoPath">Imagen</label>
			<input type="file" name="fotoPath" id="fotoPath" class="form-control">
				@if ($errors->has('fotoPath'))
							<div class="alert alert-danger">
								<ul>
								@foreach ($errors->get('fotoPath') as $error)
									<li>{{ $error }}</li>
								@endforeach
								</ul>
							</div>
				@endif

				<div class="spacer"></div>

				<div class="text-center">
					<button type="submit" class="btn btn-primary">Subir</button>
				</div>
			</div>
		</form>
	</div>
@endsection