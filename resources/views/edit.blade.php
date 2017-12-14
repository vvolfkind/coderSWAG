@extends("adminpanel")
@section('editsection')
<div style="margin-top: 100px; margin-left: 100px;" class=""></div>

<div class="">
		<form class="col-md-5" action="/indexproductos/{{$product->id}}" method="post">
			<h3>Editando: {{$product->name}}</h3>
			{{ csrf_field() }}
			{{ method_field('patch') }}
			<div class="form-group">
				<label for="name">Nombre</label>
				<input type="text" name="name" id="name" value="{{$product->name}}" class="form-control">
				@if ($errors->has('name'))
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->get('name') as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
			</div>
			<div class="form-group">
				<label for="cost">Costo</label>
				<input type="text" name="cost" id="cost" value="{{$product->cost}}" class="form-control">
				@if ($errors->has('cost'))
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->get('cost') as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
			</div>
			
			<div class="form-group">
				<label>Id</label>
				<select name="category_id">
					@foreach ($categories as $category)
						@if ($category->id == $product->id)
							<option value="{{$category->id}}" selected>{{$category->id}}</option>
						@else
							<option value="{{$category->id}}">{{$category->id}}</option>
						@endif
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<button type="submit" name="button" class="btn btn-primary">Editar</button>
			</div>
		</form>
		<form class="" action="/indexproductos/{{$product->id}}" method="post">
			{{ csrf_field() }}
			{{ method_field('delete') }}
			<input type="hidden" name="cost" id="cost" value="{{$product->id}}" class="form-control">
			<button type="submit" class="btn btn-danger">Borrar Producto</button>
		</form>
	</div>
@endsection