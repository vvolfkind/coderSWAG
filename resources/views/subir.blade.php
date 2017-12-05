@extends("layouts.moldePage")

@section('contenido')
<style>
	.header {
		display: none;
	}
</style>

<div class="row" style="margin-top: 50px; margin-bottom: 100px;">
	<h2> Panel de agregado de productos</h2>
	<p>Ingresar los datos correspondientes</p>
</div>

<div class="row" style="margin-bottom: 200px">
	<div class="col-md-6 col-md-offset-3">
		<form>
			<div class="form-group">
				<label for="">Nombre del producto</label>
				<input type="email" class="form-control" id="" aria-describedby="" name="name">
			</div>
			<div class="form-group">
				<label for="">Categoria</label> <br>
				<input type="radio" name="" value="shirts" checked> Remeras
				<input type="radio" name="" value="hoodies"> Buzos
				<input type="radio" name="" value="tanktops"> Musculosas
				<input type="radio" name="" value="stickers"> Stickers
				<input type="radio" name="" value="pins"> Pins
			</div>
			<div class="form-group col-md-6">
				<label for="">Precio</label>
				<input type="password" class="form-control" id="" name="cost">
			</div>
			<div class="form-group">
				<label for="">Foto</label>
				<input type="file" class="form-control-file" id="">
			</div>
		</form>
	</div>
</div>


@endsection