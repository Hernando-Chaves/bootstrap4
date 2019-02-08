<?php require_once "head.php" ?>
<style>
	.custom-file-input:lang(en)~.custom-file-label::after
	{
		content: "Subir Foto";
		background-color: #00b30c;
		color: #ffffff;
	}
</style>

	<div class="container-fluid ">
		<div class="row">
			<div class="col px-0">
				<div id="slide" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="img/slide1.jpg" alt="" class="img-fluid d-block h-100">
						</div>
						<div class="carousel-item">
							<img src="img/slide2.jpg" alt="" class="img-fluid d-block h-100">
						</div>
						<div class="carousel-item">
							<img src="img/slide3.jpg" alt="" class="img-fluid d-block h-100">
						</div>
					</div>
					<a href="#slide" class="carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
					<a href="#slide" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon"></span></a>
					<ol class="carousel-indicators">
						<li class="active" data-target="#slide" data-slide-to="0"></li>
						<li data-target="#slide" data-slide-to="1"></li>
						<li data-target="#slide" data-slide-to="2"></li>
					</ol>
				</div>
				
			</div>
		</div>
	</div>

	<div class="container mt-5">
		<h3 class="text-center text-capitalize">buscar dominio</h3>
		<div class="row justify-content-center">
			<div class="col-6">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Escribe aquí el nombre del dominio que buscas">
					<div class="input-group-append">
						<button class="btn btn-success">Buscar</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container mt-5">
			<h2 class="text-center">Servicios</h2>
		<div class="row">
			<div class="col-md-4">
				<div class="card text-center text-light">
					<img src="img/servicio5.png" alt="" class="img-fluid d-block">
					<div class="card-body bg-success">
						<h3 class="card-title">Servicio 1</h3>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae perferendis, officiis dignissimos, commodi saepe id?</p>
						<button class="btn btn-block btn-outline-light">Leer más</button>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card text-center text-light">
					<img src="img/servicio3.png" alt="" class="img-fluid d-block">
					<div class="card-body bg-success">
						<h3 class="card-title">Servicio 2</h3>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae perferendis, officiis dignissimos, commodi saepe id?</p>
						<button class="btn btn-block btn-outline-light" data-target="#video" data-toggle="modal">Ver Video</button>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card text-center text-light">
					<img src="img/servicio2.png" alt="" class="img-fluid d-block">
					<div class="card-body bg-success">
						<h3 class="card-title">Servicio 3</h3>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae perferendis, officiis dignissimos, commodi saepe id?</p>
						<button class="btn btn-block btn-outline-light">Leer más</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="bg_image bg-dark py-5 my-5">
		<div class="container">
			<div class="row text-light align-items-center">
				<div class="col-md-6">
					<h3>Have fun every where</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet illo similique eaque minus.</p>
					<button class="btn btn-outline-light btn-sm">Mas Info</button>
				</div>
				<div class="col-md-6">
					<img src="img/fvr_pro.png" alt="" class="img-fluid d-block">
				</div>
			</div>
		</div>
	</div>

	<div class="container mb-5">
		<div class="row">
			<div class="col-md-6">
				<img src="img/blog1.jpg" alt="" class="img-fluid d-block">
			</div>
			<div class="col-md-6">
				<form action="" class="form">
					<h3 class="text-center">Contáctanos</h3>
					<div class="input-group mt-2">
						<div class="input-group-prepend">
								<div class="button btn btn-success">
									<i class="fa fa-user"></i>
								</div>
						</div>
						<input type="text" class="form-control" placeholder="Nombre del usuario">
					</div>
					<div class="input-group mt-2">
						<div class="input-group-prepend">
								<div class="button btn btn-success">
									<i class="fa fa-phone"></i>
								</div>
						</div>
						<input type="text" class="form-control" placeholder="Correo">
					</div>
					<div class="input-group mt-2">
						<div class="input-group-prepend">
								<div class="button btn btn-success">
									<i class="fa fa-lock "></i>
								</div>
						</div>
						<input type="text" class="form-control" placeholder="Contraseña">
					</div>
					<div class="input-group mt-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<button class="btn  btn-success">Perfil</button>
							</div>
							<select name="" id="" class="custom-select">
								<option value="">Opcion 1</option>
								<option value="">Opcion 2</option>
								<option value="">Opcion 3</option>
							</select>
						</div>
					</div>
					<div class="input-group mt-2">
						<div class="custom-file">
							<input type="file" class="custom-file-input">
							<label for="" class="custom-file-label"></label>
						</div>
					</div>
					<div class="input-group mt-2">
						<button type="submit" class="btn btn-success btn-block btn-sm">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php require_once "footer.php" ?>

<div id="video" class="modal fade">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="embed-responsive embed-responsive-16by9">
				<video src="video/video.mp4" class="embed-responsive-item" autoplay controls loop></video>
			</div>
		</div>
	</div>
</div>	