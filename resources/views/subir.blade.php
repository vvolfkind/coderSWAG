@extends("layouts.moldePage")

@section('contenido')
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">nombre del producto</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Precio</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="cost">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Id</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="id">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Subir archivo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
@endsection