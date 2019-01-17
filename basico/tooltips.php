<?php require_once "head.php" ?>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">Tooltips</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<div class="card-body text-light">
					<img src="https://is5-ssl.mzstatic.com/image/thumb/Purple118/v4/71/fb/b2/71fbb2e2-3346-b517-9ee5-6125288606de/source/256x256bb.jpg" alt="" class="img-fluid card-img">
					<div class="card-body bg-success">
						<h3 class="card-title">Titulo Uno</h3>
						<div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis totam numquam officia omnis nulla quos corporis, quidem vel optio minima.</div>
						<button class=" mt-2 btn btn-btn-sm btn-block btn-outline-light" data-toggle="tooltip" title="Información Acualizada " data-html="true">Ver más</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="jquery.js"></script>
	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip({
				trigger : "hover",
				placement : "top"
			});
		});
	</script>
	
<?php require_once "footer.php" ?>