@extends("adminpanel")
@section('editsection')
	<div style="margin-top: 100px; margin-left: 100px;" class=""></div>
	<div>
		<form class="col-md-5" action="/users/{{$user->email}}" method="post">
			<h3>Editando usuario {{$user->email}}</h3>
			{{ csrf_field() }}
			{{ method_field('patch') }}
			<div class="form-group">
				<label for="name">Nombre</label>
				<input type="text" name="name" id="name" value="{{$user->name}}" class="form-control">
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
				<label for="email">Direccion de E-Mail</label>
				<input type="text" name="email" id="email" value="{{$user->email}}" class="form-control">
				@if ($errors->has('email'))
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->get('email') as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
			</div>
			<div class="form-group">
				<button type="submit" name="button" class="btn btn-primary">Editar</button>
			</div>
		</form>
		<form class="col-md-5" action="/users/{{$user->email}}" method="post">
				{{ csrf_field() }}
				{{ method_field('delete') }}
				<input type="hidden" name="cost" id="cost" value="{{$user->id}}" class="form-control">
				<button type="submit" class="btn btn-danger">Eliminar usuario</button>
			</div>
		</form>
	</div>


@endsection