@extends('layouts.MoldePage')

@section('forms')

	<div class="login">
		<form class="formsheader" method="POST" action="{{ route('login') }}">
		{{ csrf_field() }}

		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			<label for="email" class="control-label"></label>
			<input placeholder="Direccion de E-Mail" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
		</div>

				@if ($errors->has('email'))
				<span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
				@endif


		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			<label for="password" class="control-label"></label>
			<input placeholder="Contraseña" id="password" type="password" class="form-control" name="password" required>
				@if ($errors->has('password'))
				<span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
				@endif
		</div>
		<div class="form-footer text-right">
			<div class="checkbox ">
				<label class="linksvarios"><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme</label>
			</div>
			<button type="submit" class="btn btn-primary">Ingresar!</button>
			<div class="row col-md-9 col-md-offset-2">
				<a class="linksvarios" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
			</div>
		</div>
	</form>
</div>

@endsection
