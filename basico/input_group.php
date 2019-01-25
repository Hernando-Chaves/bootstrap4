<?php require_once "head.php" ?>
<style>
	.custom-file-input:lang(en)~.custom-file-label::after
	{
		content:"Buscar...";
	}
</style>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">Input Group</h1>
			</div>
		</div>
		<div class="row mt-5">
				<div class="col-md-4 ">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">@</span>
						</div>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-md-4">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">$</span>
						</div>
						<input type="text" class="form-control">
						<div class="input-group-append">
							<span class="input-group-text">00</span>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">Text-Area</span>
						</div>
						<textarea name="" id="" cols="30" rows="1" class="form-control"></textarea>
					</div>
				</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-4">
				<div class="input-group">
					<input type="text" class="form-control">
					<div class="input-group-append">
						<span class="input-group-text">Buscar...</span>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<input type="radio">
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
		</div>
		<div class="row mt-5">
			<div class="col-md-6 ">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Nombre y Apellido</span>
					</div>
					<input type="text" class="form-control" >
					<input type="text" class="form-control" >
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-group">
					<input type="text" class="form-control">
					<input type="text" class="form-control">
					<div class="input-group-append">
						<span class="input-group-text">Apellidos</span>
					</div>
				</div>
			</div>
			
		</div>
		<div class="row mt-5">
			<div class="col-md-6">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">$</span>
						<span class="input-group-text">00</span>
					</div>
					<input type="text" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-group">
					<input type="text" class="form-control">
					<div class="input-group-append">
						<span class="input-group-text">$</span>
						<span class="input-group-text">00</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-6">
				<div class="input-group">
					<div class="input-group-prepend">
						<button class="btn btn-outline-primary">Buscar...</button>
					</div>
					<input type="text" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-group">
					<input type="text" class="form-control">
					<div class="input-group-append">
						<a href="" class="btn btn-success">Buscar...</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-4">
				<div class="input-group input-group-sm">
					<input type="text" class="form-control">
					<div class="input-group-append">
						<button class="btn btn-danger">Botón 1</button>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group ">
					<input type="text" class="form-control">
					<div class="input-group-append">
						<a href="" class="btn btn-info">Botón2</a>
					</div>

				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group input-group-lg">
					<input type="text" class="form-control">
					<div class="input-group-append">
						<a href="" class="btn btn-dark">Botón 3</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-6">
				<div class="input-group">
					<div class="input-group-prepend">
						<button class="btn btn-success">Botón 1</button>
						<button class="btn btn-primary">Botón 2</button>
					</div>
					<input type="text" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-group">
					<input type="text" class="form-control">
					<div class="input-group-append">
						<button class="btn btn-outline-primary">Botón 1</button>
						<button class="btn btn-outline-warning">Botón 2</button>
						<button class="btn btn-outline-danger">Botón 3</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5 mb-5">
			<div class="col-md-6">
				<div class="input-group">
					<div class="input-group-prepend">
						<button class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">Dropdown</button>
						<div class="dropdown-menu">
							<a href="" class="dropdown-item">Submenu 1</a>
							<a href="" class="dropdown-item">Submenu 2</a>
							<a href="" class="dropdown-item">Submenu 3</a>
							<a href="" class="dropdown-item">Submenu 4</a>
						</div>
					</div>
					<input type="text" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-group">
					<input type="text" class="form-control">
					<div class="input-group-append">
						<button class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Dropdown</button>
						<div class="dropdown-menu">
							<a href="" class="dropdown-item">Submenu 1</a>
							<a href="" class="dropdown-item">Submenu 2</a>
							<a href="" class="dropdown-item">Submenu 3</a>
							<div class="dropdown-divider"></div>
							<a href="" class="dropdown-item">Submenu 4</a>
							<a href="" class="dropdown-item">Submenu 5</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-6">
				<div class="input-group">
					<!-- <div class="input-group-prepend">
						<span class="input-group-text">Sube una foto</span>
					</div> -->
					<div class="custom-file">
						<input type="file" class="custom-file-input">
						<label for="" class="custom-file-label">Escoge un archivo</label>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Sube una foto</span>
					</div>
					<div class="custom-file">
						<input type="file" class="custom-file-input">
						<label for="" class="custom-file-label">Escoge un archivo</label>
					</div>
				</div>
			</div>
		</div>
		<div class="row my-5">
			<div class="col-md-6">
				<div class="input-group">
					<div class="input-group-prepend">
						<label class="input-group-text">Seleciona un perfil</label>
					</div>
					<select name="" id="" class="custom-select">
						<option>Opción 1</option>
						<option>Opción 2</option>
						<option>Opción 3</option>
						<option>Opción 4</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-group">
					<select name="" id="" class="custom-select">
						<option value="">Opción 1</option>
						<option value="">Opción 2</option>
						<option value="">Opción 3</option>
					</select>
					<div class="input-group-append">
						<label for="" class="input-group-text">Selecciona un perfil</label>
					</div>
				</div>
			</div>
		</div>
		<div class="row my-5">
			<div class="col-md-6">
				<div class="input-group">
					<div class="input-group-prepend">
						<button type="button" class="btn btn-primary">Acciones</button>
						<button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
							<span class="sr-only">Toggle Dropdown </span>
						</button>
						<div class="dropdown-menu">
							<a href="" class="dropdown-item">Opción 1</a>
							<a href="" class="dropdown-item">Opción 2</a>
							<a href="" class="dropdown-item">Opción 3</a>
							<a href="" class="dropdown-item">Opción 4</a>
						</div>
					</div>
					<input type="text" class="form-control">
				</div>
			</div>
			<div class="col-md-6"></div>
		</div>
	</div>
<?php require_once "footer.php" ?>