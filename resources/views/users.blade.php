@extends("adminpanel")
@section('sectionadmin')

<div style="margin-top: 100px;">
	<article class="usergrid">
		<div class="row text">
			<div class="col-md-4">
				<ul>
					<li>
						<h4>NOMBRE COMPLETO</h4>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul>
					<li>
						<h4>EMAIL</h4>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul>
					<li>
						<h4>FECHA REGISTRO</h4>
					</li>
				</ul>
			</div>
		</div>
	</article>
				<hr>
	@foreach ($users as $user)
	<article class="usergrid">
		<div class="row">
			<div class="col-md-4">
				<ul>
					<li>
						{{$user->name}}
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul>
					<li>
						<a href="users/{{$user->email}}/edituser"> {{$user->email}}</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul>
					<li>
						{{$user->created_at}}
					</li>
				</ul>
			</div>
		</div>
	</article>
	@endforeach
</div>

@endsection