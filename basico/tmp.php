<?php require_once "head.php" ?>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">Practicas</h1>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 px-0">
				<div id="slider" class="carousel slide " data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="img/slide4.jpg" alt="" class="img-fluid d-block">
							<div class="carousel-caption">
								<h3>Titulo</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam sapiente libero quod deleniti dolores rem cupiditate explicabo. Error nemo, possimus.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="img/slide3.jpg" alt="" class="img-fluid d-block">
							<div class="carousel-caption">
								<h3>Titulo 2</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas eos unde iste cum. Quia omnis, repellat ipsum.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="img/slide2.jpg" alt="" class="img-fluid d-block">
							<div class="carousel-caption">
								<h3>Titulo 3</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus adipisci tempore consequatur iure sunt sequi unde ullam, saepe, minima officia!</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="img/slide1.jpg" alt="" class="img-fluid d-block">
							<div class="carousel-caption">
								<h3>Titulo 3</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus non aliquam excepturi eveniet reiciendis pariatur ut nam. Est odio, perferendis.</p>
							</div>
						</div>
					</div>
					<ol class="carousel-indicators">
						<li class="active" data-target="#slider" data-slide-to="0"></li>
						<li data-target="#slider" data-slide-to="1"></li>
						<li data-target="#slider" data-slide-to="2"></li>
						<li data-target="#slider" data-slide-to="3"></li>
					</ol>
					<a href="#slider" class="carousel-control-prev" data-slide="prev">
						<span class="carousel-control-prev-icon" ></span>
					</a>
					<a href="#slider" class="carousel-control-next" data-slide="next">
						<span class="carousel-control-next-icon" ></span>
					</a>
				</div>
			</div>
		</div>
	</div><!-- FIN SLIDER -->
	<div class="container mt-5">
		<div class="row">
			<div class="col-6 offset-md-3">
				<div id="servicios">
					<div class="card">
						<div class="card-header">
							<h2 class="mb-0 d-block">
								<button class="btn btn-link" data-target="#desc1" data-toggle="collapse">
									PreguntaNumber One
								</button>
							</h2>
						</div>
						<div id="desc1" class="collapse show p-4" data-parent="#servicios">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio repellat ut dolorum voluptatum ab itaque aspernatur laudantium nam, sit, labore ad harum iste eius cumque debitis, officiis pariatur quo. Quis nam qui dolor modi hic earum accusantium, delectus inventore quae?</p>
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<h2 class="mb-0 d-block">
								<button class="btn btn-link" data-target="#desc2" data-toggle="collapse">
									Pregunta number Two
								</button>
							</h2>
						</div>
						<div id="desc2" class="collapse p-5" data-parent="#servicios">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam reiciendis, atque. Deserunt illum placeat, molestias autem laboriosam maiores molestiae soluta!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- FIN ACCORDION -->
	<div class="container mt-5">
		<div class="row">
			<div class="col-6 offset-md-3">
				<button class="btn-sm btn-block btn-outline-dark" data-target="#modal" data-toggle="modal">
					Abrir Modal
				</button>
			</div>
			<div class="modal fade" id="modal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h3>Titulo Modal</h3>
							<button class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro facilis, aliquam eius sapiente, fugiat tempore quam molestias commodi deserunt, quod quidem error iusto minus repellat laboriosam maiores doloremque itaque earum. Possimus quam rem aspernatur, assumenda dolorum dolore repellat et quo.
						</div>
						<div class="modal-footer">
							<button class="btn btn-sm btn-danger" data-dismiss="modal">Cancelar</button>
							<button class="btn btn-sm btn-primary">Crear</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- FIN MODAL -->
	<div class="container mt-5">
		<div class="row">
			<div class="col-4">
				<div class="card">
					<img src="img/servicio2.png" alt="" class="img-fluid">
				</div>
				<div class="card-body bg-warning">
					<h3 class="card-title">Titulo Card</h3>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quam rerum possimus recusandae, id exercitationem animi iure tempore nostrum blanditiis!</p>
					<button class="btn-block btn btn-sm btn-success">Ver Más</button>
				</div>
			</div>
			<div class="col-4">
				<div class="card">
					<img src="img/servicio3.png" alt="" class="img-fluid">
				</div>
				<div class="card-body bg-primary">
					<h3 class="card-title">Titulo 2</h3>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi eligendi dignissimos cupiditate, odit architecto blanditiis temporibus. Beatae, sit illo eligendi.</p>
					<button class="btn-block btn btn-sm btn-success">Ver Más</button>
				</div>
			</div>
			<div class="col-4">
				<div class="card"></div>
			</div>
		</div>
	</div><br>
	<br>
	<br>
	<br>
	<br>
<?php require_once "footer.php" ?>