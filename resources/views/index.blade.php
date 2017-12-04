@extends('layouts.moldePage')

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
		<section id="services"> 
			<div style="background-color:white" , class="container">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item-active">
							<img src="catalog/bigdata.jpg">
							<div class="carousel-caption">
							</div>
						</div>

						<div class="item">
							<img src="catalog/cofeeshirt.jpg">
							<div class="carousel-caption">
							</div>
						</div>

						<div class="item">
							<img src="catalog/csshtml.jpg">
							<div class="carousel-caption">
							</div>
						</div>

						<div class="item">
							<img src="catalog/eatsleepcode.jpg">
							<div class="carousel-caption">
							</div>
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
			</div>
		</div>
	</section>


@endsection