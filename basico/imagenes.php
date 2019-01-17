<?php require_once "head.php" ?>
<style>
	.img_bordered {
		height: 60px;
		width: 60px;
		background-color: #f2f2f2;
		margin-right: 5px;
	}
</style>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-12">
				<h2 class="text-center mb-4">Manejo de Imagenes</h2>
				<h4 class="text-capitalize">Imagen responsiva</h4>
				<img class="img-fluid " src="https://www.nacel.fr/medias/_cache/produits/289/imagePrincipale/1920_1440/ecole-de-langue-londres-tower-bridge.jpg" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, maiores. Cum voluptate mollitia dignissimos exercitationem porro minima adipisci aliquam, eos reiciendis quos, modi voluptatem eius consequuntur unde dolor facere corrupti quisquam obcaecati laudantium ducimus harum suscipit illo non. Assumenda nam quos vero sequi adipisci ut molestias neque totam reprehenderit ea soluta, eius excepturi ipsa corrupti quae omnis dolore facilis autem voluptas. Esse, at ipsum. Enim ab, voluptatibus iusto aspernatur ut assumenda, cum accusamus ipsa nam, dolore nisi, a autem? Perferendis ratione rem impedit quam aut maiores quos dolor iste veritatis dolorem voluptates cumque, architecto nihil sint repudiandae consequuntur corporis vero ad numquam. Quis sapiente, repellat necessitatibus asperiores harum, quia, expedita laboriosam eius nobis ipsa voluptatibus nihil, mollitia facere impedit deserunt! Nam, similique, alias. Quae eveniet sint magnam eos ut, neque deleniti quasi vitae exercitationem quaerat ipsam assumenda non nostrum quam voluptatum eum distinctio doloribus! Vel, expedita quas ex magni optio labore eligendi reprehenderit! Quos laborum, ducimus, illum voluptatibus sequi recusandae incidunt praesentium sit fugit culpa maxime quae iure odit ipsum, accusamus et quia, consectetur eos cupiditate hic magni. Omnis voluptatem illum repellendus optio quaerat, autem architecto. Consectetur quibusdam, necessitatibus sunt incidunt a laborum, labore, quia, delectus voluptate laudantium repellat iste.</p>
			</div>
			<div class="col-12">
				<h4 class="text-capitalize text-right">float right</h4>
				<img class="float-right img-fluid ml-3 img-thumbnail" src="https://is5-ssl.mzstatic.com/image/thumb/Purple118/v4/71/fb/b2/71fbb2e2-3346-b517-9ee5-6125288606de/source/256x256bb.jpg" alt="">
				<p class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse reprehenderit cupiditate deserunt sunt quae eligendi placeat, explicabo incidunt nemo fugiat iure quaerat quo dolorem unde molestias dolore consequuntur recusandae, eaque distinctio mollitia debitis earum repellendus illo officiis. Mollitia neque sapiente illum dolorem nihil iusto recusandae amet maiores architecto commodi! Sunt.</p>
			</div>

			<div class="col-12">
				<h4 class="text-capitalize">float left</h4>
				<img class="float-left img-fluid img-thumbnail mr-3" src="https://is5-ssl.mzstatic.com/image/thumb/Purple118/v4/71/fb/b2/71fbb2e2-3346-b517-9ee5-6125288606de/source/256x256bb.jpg" alt="">
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse reprehenderit cupiditate deserunt sunt quae eligendi placeat, explicabo incidunt nemo fugiat iure quaerat quo dolorem unde molestias dolore consequuntur recusandae, eaque distinctio mollitia debitis earum repellendus illo officiis. Mollitia neque sapiente illum dolorem nihil iusto recusandae amet maiores architecto commodi! Sunt.</p>
			</div>

			<div class="col-12 text-center">
				<h4 class="text-capitalize">Centrada</h4>
				<img class="img-fluid img-thumbnail mr-3 mx-auto" src="https://is5-ssl.mzstatic.com/image/thumb/Purple118/v4/71/fb/b2/71fbb2e2-3346-b517-9ee5-6125288606de/source/256x256bb.jpg" alt="">
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse reprehenderit cupiditate deserunt sunt quae eligendi placeat, explicabo incidunt nemo fugiat iure quaerat quo dolorem unde molestias dolore consequuntur recusandae, eaque distinctio mollitia debitis earum repellendus illo officiis. Mollitia neque sapiente illum dolorem nihil iusto recusandae amet maiores architecto commodi! Sunt.</p>
			</div>

			<div class="col-12 mt-5">
				<h4 class="text-capitalize rounded-circle">Redondeadas</h4>
				<img class="float-left img-fluid img-thumbnail mr-3" src="https://is5-ssl.mzstatic.com/image/thumb/Purple118/v4/71/fb/b2/71fbb2e2-3346-b517-9ee5-6125288606de/source/256x256bb.jpg" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse reprehenderit cupiditate deserunt sunt quae eligendi placeat, explicabo incidunt nemo fugiat iure quaerat quo dolorem unde molestias dolore consequuntur recusandae, eaque distinctio mollitia debitis earum repellendus illo officiis. Mollitia neque sapiente illum dolorem nihil iusto recusandae amet maiores architecto commodi! Sunt.</p>
			</div>
			<div class="col-12 mt-5 mb-5">
				<h4 class="text-capitalize">borderes</h4>
				<div class="d-flex">
					<div class="img_bordered border"></div>
					<div class="img_bordered border-danger border"></div>
					<div class="img_bordered border border-light"></div>
					<div class="img_bordered border border-info"></div>
					<div class="img_bordered border border-secondary"></div>
					<div class="img_bordered border border-primary"></div>
					<div class="img_bordered border border-warning 0rounded-bottom"></div>
					<div class="img_bordered border border-success rounded-top"></div>
					<div class="img_bordered border border-white rounded"></div>
				</div>
			</div>
		</div>
	</div>
<?php require_once "footer.php" ?>