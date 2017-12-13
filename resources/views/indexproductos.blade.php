@extends("adminpanel")
@section('sectionadmin')
<div>
@foreach ($productos as $producto)
	<article class="usergrid">
		<div class="row">
			<div class="col-md-4">
				<ul>
					<li>
						<a href="indexproductos/{{$producto->id}}/edit">{{$producto->id}}</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul>
					<li>
						{{$producto->name}}
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul>
					<li>
						{{$producto->created_at}}
					</li>
				</ul>
			</div>
		</div>
	</article>
	@endforeach
</div>

@endsection