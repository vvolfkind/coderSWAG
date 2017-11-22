@extends('masterlayout')
@section('content')
<div>
	<ul>
		@foreach ($products as $product)
		<li>{{$product->name}}</li>
		@endforeach
	</ul>
</div>
@endsection