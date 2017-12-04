@extends("layouts.moldePage")

@section('contenido')
  <!-- About -->
    <section id="about" class="about">
      <div class="container text-center">
        <h2>Conocemos el fanatismo por la programación</h2>
        <p class="p" style=" color:#326B8E">Diseñamos pensando en vos.</p>
      </div>
      <!-- /.container -->
    </section>

    <!-- Services -->
    <section id="services" 
    "> 
      <div style="background-color:white" , class="container">
        <div class="row text-center">
          <div class="col-lg-10 mx-auto">
            <h2 class="pro"><strong>Nuestros productos</strong></h2>
            <hr class="small">
            <div class="row">
              <div class="col-md-4 col-sm-8">
                <div class="service-item">
                  <img src="img/remera.png" style="height:220px">
                  <h4>
                    <strong>Remeras</strong>
                  </h4>
                  
                 
                </div>
              </div>
              <div class="col-md-4 col-sm-8">
                <div class="service-item">
                <img src="img/buzo.jpg"  style="height:220px">
                  <h4>
                    <strong>Buzos</strong>
                  </h4>
                  
                 
                </div>
              </div>
              <div class="col-md-4 col-sm-8">
                <div class="service-item">
                 <img src="img/musculosa.jpg" style="height:220px">
                  <h4>
                    <strong>Musculosas</strong>
                  </h4>
                  
                 
                </div>
              </div>
            </div>
            <!-- /.row (nested) -->
          </div>
          <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>





    <!-- Call to Action -->
    <aside class="call-to-action  text-white">
      <div class="container text-center">
        <h3><strong>¿Qué esperas?</strong></h3>
        <h3><strong> Busca tu diseño personalizado.</strong></h3>
        <h3><strong> !COMPRA YA!.</strong></h3>
        <br>

        <a href="buzos" class="btn btn-lg btn-light">¡VER TODOS!</a>
    </aside>
@endsection