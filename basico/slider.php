<?php require_once "head.php" ?>
<body>
	<div class="container-fluid mt-5 px-0">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">Carousel o Slider</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div id="slider" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="img/slide4.jpg" alt="" class="img-fluid d-block h-80">
						</div>
						<div class="carousel-item">
							<img src="img/slide3.jpg" alt="" class="img-fluid d-block">
						</div>
						<div class="carousel-item">
							<img src="img/slide2.jpg" alt="" class="img-fluid d-block">
						</div>
						<div class="carousel-item">
							<img src="img/slide1.jpg" alt="" class="img-fluid d-block">
						</div>
					</div>
					<ol class="carousel-indicators">
						<li data-target="#slider" data-slide-to="0" class="active"></li>
						<li data-target="#slider" data-slide-to="1"></li>
						<li data-target="#slider" data-slide-to="2"></li>
						<li data-target="#slider" data-slide-to="3"></li>
					</ol>
					<a href="#slider" class="carousel-control-prev" data-slide="prev" role="button">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a href="#slider" class="carousel-control-next" data-slide="next" role="button">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-12">
				<div id="slider2" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="img/slide1.jpg" alt="" class="img-fluid d-block">
							<div class="carousel-caption d-none d-md-block">
								<h4>Titulo de prueba 1</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi sequi repellendus explicabo voluptatem qui adipisci, expedita veritatis impedit debitis.</p>
								<div class="col-4 offset-sm-4">
									<a href="" class="btn btn-sm btn-primary btn-block">Ver Más</a>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<img src="img/slide2.jpg" alt="" class="img-fluid d-block">
						</div>
						<div class="carousel-item">
							<img src="img/slide4.jpg" alt="" class="img-fluid d-block">
						</div><div class="carousel-item">
							<img src="img/slide3.jpg" alt="" class="img-fluid d-block">
						</div>
					</div>
					<ol class="carousel-indicators">
						<li class="active" data-target="#slider2" data-slide-to="0"></li>
						<li data-target="#slider2" data-slide-to="1"></li>
						<li data-target="#slider2" data-slide-to="2"></li>
						<li data-target="#slider2" data-slide-to="3"></li>
					</ol>
					<a href="#slider2" class="carousel-control-prev" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a href="#slider2" class="carousel-control-next" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-12">
				<div id="slider3" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="img/slide3.jpg" alt="" class="ig-fluid d-block">
							<div class="carousel-caption">
								<h3>Titulo de prueba</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque unde, suscipit laudantium perferendis culpa adipisci neque quis, non facere laboriosam.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="img/slide4.jpg" alt="" class="ig-fluid d-block">
							<div class="carousel-caption">
								<h3>Titulo de prueba</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores enim iste, commodi voluptatum. Esse laboriosam ratione dolores asperiores quibusdam cumque.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="img/slide2.jpg" alt="" class="ig-fluid d-block">
							<div class="carousel-caption">
								<h3>Titulo de prueba</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil provident quibusdam tempore dolore nesciunt quasi atque ad exercitationem iusto sit.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="img/slide1.jpg" alt="" class="ig-fluid d-block">
							<div class="carousel-caption">
								<h3>Titulo de prueba</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora laudantium, nulla delectus repudiandae non accusamus vel quidem, architecto necessitatibus cum.</p>
							</div>
						</div>
					</div>
					<ol class="carousel-indicators">
						<li class="active" data-target="#slider3" data-slide-to="0"></li>
						<li data-target="#slider3" data-slide-to="1"></li>
						<li data-target="#slider3" data-slide-to="2"></li>
						<li data-target="#slider3" data-slide-to="3"></li>
					</ol>
					<a href="#slider3" class="carousel-control-prev" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a href="#slider3" class="carousel-control-next" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
<?php require_once "footer.php" ?>