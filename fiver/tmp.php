<?php require_once "head.php" ?>
<style>
.top_bar
{
	opacity: 0;
	margin-top: -90px;
	border-bottom: 1px solid gray ;
	position: fixed;
	transition: all 0.4s ease;
	background-color: #fff;
	z-index: 1;
}
	.top_bar a.nav-link
	{
		color: #86888B!important;
	}
	.top_bar a.btn-outline-success
	{
		color: #28a745!important;
	}
	.top_bar a.btn-outline-success:hover
	{
		color: #fff!important;
	}
</style>

<!-- TOPBAR -->
<div class="top_bar py-3 container-fluid">
	<div class="row align-items-center ">
		<div class="col-md-1">
			<h1 class="font-weight-bold">fvr</h1>
		</div>
		<div class="col-md-4">
			<div class="input-group">
				<input type="text" class="form-control">
				<div class="input-group-append">
					<button class="btn btn-success btn-sm" >Buscar</button>
				</div>
			</div>
		</div>
		<div class="col-md-6 ml-5  d-flex justify-content-end">
			<nav class="nav">
				<li class="nav-item"><a href="" class="nav-link">Vender en fvr</a></li>
				<li class="nav-item"><a href="" class="nav-link">Vender en fvr</a></li>
				<li class="nav-item"><a href="" class="nav-link btn btn-outline-success btn-sm">Vender en fvr</a></li>
			</nav>
		</div>
	</div>
</div>


<!-- HEADER -->
<div class="container-fluid py-5 header w-100">
	<div class="row  justify-content-center text-center">
		<div class="col-lg-3 offset-lg-1">
			<img src="img/logo.png" alt="" class="img-fluid d-block mx-auto">
		</div>
		<div class="col-lg-5 d-flex justify-content-center">
			<nav class="nav flex-column  flex-md-row">
				<li class="nav-item"><a href="#" class="nav-link">Comienza a vender</a></li>
				<li class="nav-item"><a href="#" class="nav-link">Iniciar Sesión</a></li>
				<li class="nav-item"><a href="#" class="nav-link btn btn-sm btn-outline-light">Aceder</a></li>
			</nav>
		</div>
	</div>
	<div class="row justify-content-center text-light my-5 text-center py-5">
		<div class="col-md-6">
			<h2>No solo sueñes, hazlo</h2>
			<p>Servicios freelance para emprendedores</p>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="¿Que servicios buscas?">
				<div class="input-group-append">
					<button class="btn btn-success">Buscar</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- CATEGORÍAS -->
<section class="container-fluid mt-5 text-center">
	<h2 class="text-capitalize font-weight-bold">explora el marketplace</h2>
	<p>Inspirate para construir tu negocio</p>
	<div class="row justify-content-center mt-5">
		<div class=" col-sm-6 col-md-4 col-lg-3 categoria2 justify-content-center text-center">
			<img src="img/icono_dg.png" alt="" class="img-fluid d-block mx-auto">
			<h3 class="font-weight-bold text-capitalize">diseño Gráfico</h3>
			<p>Logotipos,flyers, tarjetas de presentación</p>
		</div>
		<div class=" col-sm-6 col-md-4 col-lg-3 categoria2 justify-content-center text-center">
			<img src="img/icono_mkt.png" alt="" class="img-fluid d-block mx-auto">
			<h3 class="font-weight-bold text-capitalize">Marketing Digital</h3>
			<p>Campañas, vídeos y sobretodo, ventas!</p>
		</div>
		<div class=" col-sm-6 col-md-4 col-lg-3 categoria2 justify-content-center text-center">
			<img src="img/icono_et.png" alt="" class="img-fluid d-block mx-auto">
			<h3 class="font-weight-bold text-capitalize">Escritura Y Traducciones</h3>
			<p>Resumenes, entradas de blog, traducciones y más</p>
		</div>
		<div class=" col-sm-6 col-md-4 col-lg-3 categoria2 justify-content-center text-center">
			<img src="img/icono_vd.png" alt="" class="img-fluid d-block mx-auto">
			<h3 class="font-weight-bold text-capitalize">Video & Animación</h3>
			<p>Animación de logotipos, comerciales, presentaciones y más</p>
		</div>

		<div class=" col-sm-6 col-md-4 col-lg-3 categoria2 justify-content-center text-center">
			<img src="img/icono_av.png" alt="" class="img-fluid d-block mx-auto">
			<h3 class="font-weight-bold text-capitalize">Música & Audio</h3>
			<p>Canciones, comerciales y mucho más</p>
		</div>
		<div class=" col-sm-6 col-md-4 col-lg-3 categoria2 justify-content-center text-center">
			<img src="img/icono_dev.png" alt="" class="img-fluid d-block mx-auto">
			<h3 class="font-weight-bold text-capitalize">Programación</h3>
			<p>Wordpress, aplicaciones web, tiendas virtuales</p>
		</div>
		<div class=" col-sm-6 col-md-4 col-lg-3 categoria2 justify-content-center text-center">
			<img src="img/icono_negocios.png" alt="" class="img-fluid d-block mx-auto">
			<h3 class="font-weight-bold text-capitalize">Negocios</h3>
			<p>Asistentes virtuales, analisis de mercados, Planes de negocios y más</p>
		</div>
		<div class=" col-sm-6 col-md-4 col-lg-3 categoria2 justify-content-center text-center">
			<img src="img/icono_ev.png" alt="" class="img-fluid d-block mx-auto">
			<h3 class="font-weight-bold text-capitalize">Estilo De Vida</h3>
			<p>Cursos en linea, Mentoria, Consejos, Creación de equipos y más</p>
		</div>
	</div>
</section>


<!-- PRO VIDEO -->
<section class=" video bg-black py-5 mb-5">
	<div class="pro2 container">
		<div class="row align-items-center justify-content-center py-4">
			<div class="col-md-5 text-light text-center text-lg-left">
				<h2 class="font-weight-bold text-capitalize">El nuevo fvr pro</h2>
				<p>Altamente probado. Alto nivel, alta demanda</p>
				<a href="#" class="btn btn-sm btn-outline-light">Leer Más</a>
			</div>
			<div class="col-md-5 img_pro mt-5 mt-lg-0">
				<a href="" data-target="#modalPro" data-toggle="modal">
					<img src="img/fvr_pro.png" alt="" class="img-fluid d-block mx-auto pl-5">
				</a>
			</div>
		</div>
	</div>
</section>
<div id="modalPro" class="modal fade">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="embed-responsive embed-responsive-16by9">
				<video src="video/video.mp4" class="embed-responsive-item" autoplay controls="controls" loop></video>
			</div>
		</div>
	</div>
</div>


<!-- PASOS -->
<section class="pasos2 container text-center mb-5">
	<h2 class="font-weight-bold">Primeros Pasos</h2>
	<p>Sea cual sea tu meta, puede empezar aquí</p>
	<div class="row justify-content-center mt-4 text-center">
		<div class="col-lg-2 col-sm-4 primeros mt-3 mt-lg-0 justify-content-center d-flex">
			<img src="img/servicio1.png" alt="" class="img-fluid d-block img_pasos2">
			<p class="text-light text-left ml-4  ">Construye tu empresa,<br><span class="font-weight-bold">crea un logo</span></p>
		</div>
		<div class="col-lg-2 col-sm-4 primeros mt-3 mt-lg-0 justify-content-center d-flex">
			<img src="img/servicio2.png" alt="" class="img-fluid d-block img_pasos2">
			<p class="text-light text-left ml-4  ">Llega a más clientes con<br><span class="font-weight-bold">con social media</span></p>
		</div>
		<div class="col-lg-2 col-sm-4 primeros mt-3 mt-lg-0 justify-content-center d-flex">
			<img src="img/servicio3.png" alt="" class="img-fluid d-block img_pasos2">
			<p class="text-light text-left ml-4  ">Comparte tu mensaje,<br><span class="font-weight-bold">con un audio</span></p>
		</div>
		<div class="col-lg-2 col-sm-4 primeros mt-3 mt-lg-0 justify-content-center d-flex">
			<img src="img/servicio4.png" alt="" class="img-fluid d-block img_pasos2">
			<p class="text-light text-left ml-4  ">llega a más paises <br><span class="font-weight-bold">con traducciones</span></p>
		</div>
		<div class="col-lg-2 col-sm-4 primeros mt-3 mt-lg-0 justify-content-center d-flex">
			<img src="img/servicio5.png" alt="" class="img-fluid d-block img_pasos2">
			<p class="text-light text-left ml-4  ">Personaliza tu site,<br><span class="font-weight-bold">con wordpress</span></p>
		</div>
	</div>
</section>


<!-- TERMINOS -->
<section class=" mt-5 bg-black py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-4 text-center text-light">
				<h3>Tus <b>Términos</b></h3>
				<p>Contrata los servicios que necesitas de acuerdo a tu presupuesto</p>
			</div>
			<div class="col-md-4 text-center text-light">
				<h3>Tus <b>Tiempos</b></h3>
				<p>Encuentra servicios basados en tus necesidades y tus tiempos</p>
			</div>
			<div class="col-md-4 text-center text-light">
				<h3>Tu <b>Seguridad</b></h3>
				<p>Tu pago siempre es seguro, fvr esta hecho de forma, muy segura</p>
			</div>
		</div>
	</div>
</section>


<!-- TESTIMONIAL -->
<section class="bg-gris py-5">
	<div class="container">
		<div id="slider" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active bg-light">
					<div class="row align-items-center">
						<div class="col-md-5 pl-5">
							<h3 class="font-weight-bold">Gran Servicio</h3>
							<blockquote><i>Un servicio muy profesional, rápido a un excelente costo</i></blockquote>
							<p>Andre De Marco, Fundadora De Diseño De Marco</p>
						</div>
						<div class="col-md-7">
							<img src="img/slide1.jpg" alt="" class="img-fluid">
						</div>
					</div>
				</div>
				<div class="carousel-item  bg-light">
					<div class="row align-items-center">
						<div class="col-md-5 pl-5">
							<h3 class="font-weight-bold">Gran Servicio</h3>
							<blockquote><i>Un servicio muy profesional, rápido a un excelente costo</i></blockquote>
							<p>Andre De Marco, Fundadora De Diseño De Marco</p>
						</div>
						<div class="col-md-7">
							<img src="img/slide1.jpg" alt="" class="img-fluid">
						</div>
					</div>
				</div>
				<div class="carousel-item  bg-light">
					<div class="row align-items-center">
						<div class="col-md-5 pl-5">
							<h3 class="font-weight-bold">Gran Servicio</h3>
							<blockquote><i>Un servicio muy profesional, rápido a un excelente costo</i></blockquote>
							<p>Andre De Marco, Fundadora De Diseño De Marco</p>
						</div>
						<div class="col-md-7">
							<img src="img/slide1.jpg" alt="" class="img-fluid">
						</div>
					</div>
				</div>
				<ol class="carousel-indicators">
					<li class="active" data-target="#slider" data-slide-to="0"></li>
					<li  data-target="#slider" data-slide-to="1"></li>
					<li  data-target="#slider" data-slide-to="2"></li>
				</ol>
			</div>
		</div>
	</div>
</section>


<!-- GUIAS -->
<section class="mt-5 container text-center">
	<h2>Guias de Fvr</h2>
	<p>Como usar fvr pra crecer tu negocio</p>
	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<img src="img/blog1.jpg" alt="" class="fluid d-block">
				<div class="card-body text-left">
					<h5 class="card-title font-weight-bold">Como crear un Sitio Web</h5>
					<p class="card-text">Aprende a crear un sitio web con esta guía</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img src="img/blog2.jpg" alt="" class="fluid d-block">
				<div class="card-body text-left">
					<h5 class="card-title font-weight-bold">Como crear un App para tu negocio</h5>
					<p class="card-text">Aprende a crear un App con esta guía</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img src="img/blog3.jpg" alt="" class="fluid d-block">
				<div class="card-body text-left">
					<h5 class="card-title font-weight-bold">Como crear una Marca Fuerte</h5>
					<p class="card-text">Guía con todo lo necesario para difrenciar tu marca de la competencia.</p>
				</div>
			</div>
		</div>
	</div>
	
</section>
<!-- PIE -->
<div class="footer border-top bg-gris mt-5 pt-5 ">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-6 col-md-4 col-lg-2">
				<h5 class="font-weight-bold">Categorías</h5>
				<ul class="list-unstyled ">
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
				</ul>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-2">
				<h5 class="font-weight-bold">Categorías</h5>
				<ul class="list-unstyled ">
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
				</ul>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-2">
				<h5 class="font-weight-bold">Categorías</h5>
				<ul class="list-unstyled ">
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
				</ul>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-2">
				<h5 class="font-weight-bold">Categorías</h5>
				<ul class="list-unstyled ">
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
				</ul>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-2">
				<h5 class="font-weight-bold">Categorías</h5>
				<ul class="list-unstyled ">
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
					<li>Diseño Gráfico</li>
				</ul>
			</div>
		</div>
	</div>
</div>



<?php require_once "footer.php" ?>
