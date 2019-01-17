<?php require_once "head.php" ?>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">Modal</h1>
			</div>
		</div><div class="row">
			<div class="col-6 offset-sm-3">
				<center>
					<button class="btn btn-sm btn-primary " data-toggle="modal" data-target="#modal">Ventana Modal</button>
				</center>
				<div id="modal" class="modal fade">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h2>Titulo</h2>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis possimus obcaecati recusandae velit fugit esse quibusdam quaerat expedita reprehenderit tempora est, a porro, nesciunt molestias architecto ea, saepe mollitia dolor.


							</div>
							<div class="modal-footer">
								<div class="btn-group btn-group-toggle" data-togle="buttons">
									<label for="" class="btn btn-sm btn-danger" data-dismiss="modal" >
										<input  type="radio">Cancelar
									</label>
									<label for="" class="btn btn-primary btn-sm">
										<input type="radio"> Crear Usuario
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php require_once "footer.php" ?>