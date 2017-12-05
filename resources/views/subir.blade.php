@extends("layouts.moldePage")
@section('contenido')

<style>
    .header {
        display: none;
    }
</style>
<form action="/productos" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
<div class="row" style="margin-top: 50px; margin-bottom: 100px;">
    <h2> Panel de agregado de productos</h2>
    <p>Ingresar los datos correspondientes</p>
</div>
<div class="row" style="margin-bottom: 200px">
    <div class="col-md-6 col-md-offset-3">
        <form>
            <div class="form-group">
                <label for="">Nombre del producto</label>
                <input type="text" class="form-control" id="" aria-describedby="" name="name">
            </div>
            <div class="form-group col-md-6">
                <label for="">Precio</label>
                <input  class="form-control" id="" name="cost">
            </div>
            <div class="form-group col-md-6">
        <label for="">Categoria</label>
        <input  class="form-control" id="" name="category_id">
      </div>
      <div class="form-group">
    <label for="fotoPath">Imagen</label>
    <input type="file" name="fotoPath" id="fotoPath" class="form-control">
    @if ($errors->has('fotoPath'))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get('fotoPath') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Subir
                                </button>

</div>
        </form>
@endsection