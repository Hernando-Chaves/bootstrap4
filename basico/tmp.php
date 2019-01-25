<?php require_once "head.php" ?>
<style>
	.custom-file-input:lang(en)~.custom-file-label::after
	{
		content:"Buscar...";
		background-color: #FF0080;
		color: #ffffff;
	}
</style>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">Practicas</h1>
			</div>
		</div>
	</div>
	
	<div class="container mt-5">
		<div class="row">
			<div class="col-6 offset-md-3">
				<div id="nosotros">
					<div class="card ">
						<div class="card-header">
							<h2 class="mb-0">
								<button class="btn btn-link" data-target="#nosotros1" data-toggle="collapse">
									Question Uno
								</button>
							</h2>
						</div>
						<div id="nosotros1" class="collapse open">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod perferendis eius accusantium voluptatum, quisquam facere porro minima ab! Id voluptate, veritatis amet itaque culpa iste vitae sit doloremque delectus sequi alias voluptates recusandae, corrupti ad impedit et quo nisi repudiandae doloribus eaque dicta voluptatem nesciunt placeat quasi mollitia! Voluptatem, temporibus. At odio, porro nam.
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<h2 class="mb-0">
								<button class="btn btn-link" data-target="#us1" data-toggle="collapse" >Pregunta 11</button>
							</h2>
						</div>
						<div id="us1" class="collapse show">
							<div class="card-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum corporis sequi nihil expedita numquam, consequatur molestiae neque incidunt maiores ratione, praesentium iste, similique perspiciatis tempore dolores sint possimus dolorum atque, quas aliquid quae! Laborum?
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- FIN ACCORDION -->
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-4 offset-md-4">
				<button class="btn btn-outline-dark btn-sm btn-block" data-toggle="modal" data-target="#modalbb">Modal</button>
			</div>
			<div id="modalbb" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h3>Formulario</h3>
							<button class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum perferendis, nulla, pariatur saepe quas blanditiis omnis nobis nam explicabo illum. Veniam possimus, doloremque nemo eius eligendi incidunt molestiae! Rem accusantium, vitae eveniet alias deserunt eos sint illum expedita, eligendi. Molestiae eligendi labore ratione ipsa, sapiente beatae esse cumque perferendis facilis tempore commodi atque temporibus repellat vel.
						</div>
						<div class="modal-footer">
							<div class="input-group">
								<div class="input-group-prepend float-right">
									<button class="btn btn-outline-danger">Cancelar</button>
									<button class="btn btn-outline-primary">Editar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- FIN MODAL -->
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-prepend">
						<div class="input-group-text">@</div>
					</div>
					<input type="text" class="form-control">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-prepend">
						<button class="btn btn-success">Botón</button>
					</div>
					<select class="custom-select">
						<option value="">Opción 1</option>
						<option value="">Opción 2</option>
						<option value="">Opción 3</option>
						<option value="">Opción 4</option>
					</select>
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input">
						<label for="" class="custom-file-label">Escoge un archivo</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<input type="radio" >
						</div>
					</div>
					<input type="text" class="form-control">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<input type="text" class="form-control">
					<div class="input-group-append">
						<div class="input-group-text">
							<input type="checkbox">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">$</span>
						<span class="input-group-text">00</span>
					</div>
					<input type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-4">
				<div class="input-goup">
					<div class="custom-file">
						<input type="file" class="custom-file-input">
						<label for="" class="custom-file-label">Selecciona un archivo</label>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<a href="" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown">Acciones</a>
					<div class="dropdown-menu">
						<a href="" class="dropdown-item">Opcion 1</a>
						<a href="" class="dropdown-item">Opcion 2</a>
						<a href="" class="dropdown-item">Opcion 3</a>
					</div>
					<input type="text" class="form-control">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-prepend">
						<button class="btn btn-warning">Seleccione</button>
					</div>
					<select name="" id="" class="custom-select">
						<option value="">Opciones 1</option>
						<option value="">Opciones 2</option>
						<option value="">Opciones 3</option>
						<option value="">Opciones 4</option>
						<option value="">Opciones 5</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-prepend">
						<button class="btn btn-outline-info">Actions</button>
						<button class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
						<div class="dropdown-menu">
							<a href="www.bogotawebcompany.com" class="dropdown-item">Opciones 1</a>
							<a href="" class="dropdown-item">Opciones 2</a>
							<a href="" class="dropdown-item">Opciones 3</a>
						</div>
					</div>
					<input type="text" class="form-control">
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-prepend">
						<button class="btn btn-danger">Cancelar</button>
						<button class="btn btn-success">Editar</button>
						<button class="btn btn-danger">Cancelar</button>
						<button class="btn btn-success">Editar</button>
						<button class="btn btn-success">Editar</button>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<?php require_once "footer.php" ?>