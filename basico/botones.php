<?php require_once "head.php" ?>
<body>
	<div class="container mt-4">
		<div class="row">
			<div class="col-12 mt-4">
				<h1 class="text-center">Botones</h1>
			</div>
		</div>
		
		<div class="row ">
			<div class="col-12 mt-4">
				<h3>colores</h3>
				<button class="btn btn-primary btn-sm">Primary</button>
				<button class="btn btn-success btn-sm">success</button>
				<button class="btn btn-info btn-sm">info</button>
				<button class="btn btn-danger btn-sm">danger</button>
				<button class="btn btn-warning btn-sm">warning</button>
				<button class="btn btn-light btn-sm">light</button>
				<button class="btn btn-dark btn-sm">dark</button>
			</div>
		</div>
		<div class="row ">
			<div class="col-12 mt-4">
				<h3>Tamaños</h3>
				<button class="btn btn-primary btn-sm">Botón Sm</button>
				<button class="btn btn-primary btn-md">Botón md</button>
				<button class="btn btn-primary btn-lg">Botón lm</button>
			</div>
		</div>
		<div class="row ">
			<div class="col-12 mt-4">
				<h3>Outline</h3>
				<button class="btn btn-outline-primary btn-sm">Primary</button>
				<button class="btn btn-outline-success btn-sm">success</button>
				<button class="btn btn-outline-info btn-sm">info</button>
				<button class="btn btn-outline-danger btn-sm">danger</button>
				<button class="btn btn-outline-warning btn-sm">warning</button>
				<button class="btn btn-outline-light btn-sm">light</button>
				<button class="btn btn-outline-dark btn-sm">dark</button>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-12 mt-4">
				<h3>Grupos de botones</h3>
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label for="" class="btn btn-sm btn-primary">
						<input type="radio">Opción 1
					</label>
					<label for="" class="btn btn-success btn-sm">
						<input type="radio">Opción 2
					</label>
				</div>
			</div>
		</div>
	</div>
<?php require_once "footer.php" ?>