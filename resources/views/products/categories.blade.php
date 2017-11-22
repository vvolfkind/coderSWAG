@extends('masterlayout')
@section('content')
	<div>
		<ul>
			@foreach ($categories as $category)
			<li>{{$category->name}}</li>
			@endforeach
		</ul>

@endsection