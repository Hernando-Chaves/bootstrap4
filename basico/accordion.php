<?php require_once "head.php" ?>
<body>
<div class="container mt-5">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">Accordion</h1>
			</div>
		</div>
		<div class="row">
			<div class="bg-blue col-8 offset-sm-2">
				<div id="servicios">
					<div class="card">
						<div class="card-header bg-success " id="servicio1">
							<h2 class="mb-0 text-center">
								<button class="text-light text-uppercase  btn btn-link" aria-expanded="false" data-toggle="collapse" data-target="#desc1">
									Desarrollo web
								</button>
							</h2>
						</div>
					
						<div id="desc1" class="collapse show" data-parent="#servicios">
							<div class="card-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, dicta neque nihil provident distinctio assumenda cumque voluptates, placeat illum facilis commodi culpa dolore reiciendis ratione maiores deleniti perspiciatis sint natus pariatur quod accusantium eveniet tenetur. Voluptas hic, ea maiores sit vel. Laboriosam praesentium odio quam consectetur ratione obcaecati amet dolor, quaerat iste, aspernatur labore impedit libero unde porro quibusdam nihil, voluptas ducimus fugit ut in! Tenetur saepe consequatur, architecto omnis aut in nulla vitae officiis. Dolor, nisi deserunt voluptate hic quaerat enim provident minus fuga voluptatibus maiores atque eos est.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header bg-success" id="servicio2">
							<h2 class="mb-0 text-center">
								<button class="btn btn-link text-light text-uppercase" data-toggle="collapse" data-target="#desc2">
									Servicio 2
								</button>
							</h2>
						</div>

						<div id="desc2" class="collapse" data-parent="#servicios" >
							<div class="card-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, tempora ratione, quasi repudiandae nostrum inventore excepturi repellendus ad odio harum, recusandae sint eaque nemo numquam dolor enim ducimus error perspiciatis.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php require_once "footer.php" ?>