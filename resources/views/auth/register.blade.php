@extends('layouts.MoldePage')

@section('forms')

				<div class="col-md-3 col-md-offset-6">
					<form class="formsheader" method="POST" action="{{ route('register') }}">
						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="name" class="control-label"></label>

							<div class="">
								<input placeholder="Nombre de Usuario" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

								@if ($errors->has('name'))
									<span class="help-block">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class=" control-label"></label>

							<div class="">
								<input placeholder="Direccion de E-Mail" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

								@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="password" class=" control-label"></label>

							<div class="">
								<input  placeholder="Contraseña" id="password" type="password" class="form-control" name="password" required>

								@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label for="password-confirm" class=" control-label"></label>

							<div class="">
								<input  placeholder="Repetir contraseña" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
								<div style="padding-top: 15px;"></div>
								<button type="submit" class="btn btn-primary col-md-10 col-md-offset-1">
									Registrarme!
								</button>
							</div>
						</div>

						<div class="form-group">
							<div class="">
								
							</div>
						</div>
					</form>
				</div>
			</div>
@endsection
