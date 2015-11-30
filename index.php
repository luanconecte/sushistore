<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sushi Store #japa #japan #japanese</title>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="./bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>

	<header id="topo">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="#" class="logo">
						<img src="./assets/images/logo.png" alt="Sushi Store">
					</a>
				</div><!-- .col-md-3 -->

				<div class="col-md-9">
					<nav id="categorias">
						<ul class="clearfix">
							<li>
								<a href="#">
									<img src="./assets/images/categorias/narugo.png" alt="narugo">
									<span>narugo</span>
								</a>

								<div class="submenu">
									<ul class="clearfix">
										<?php for ($item=1; $item <= 15; $item++) : ?>
										<li><a herf="">Item: <?= $item ?></a></li>
										<?php endfor; ?>
									</ul>
								</div><!-- .submenu -->
							</li>

							<li>
								<a href="#">
									<img src="./assets/images/categorias/tago.png" alt="tago">
									<span>tago</span>
								</a>

								<div class="submenu">
									<ul class="clearfix">
										<?php for ($item=1; $item <= 15; $item++) : ?>
										<li><a herf="">Item: <?= $item ?></a></li>
										<?php endfor; ?>
									</ul>
								</div><!-- .submenu -->
							</li>

							<li>
								<a href="#">
									<img src="./assets/images/categorias/ika.png" alt="ika">
									<span>ika</span>
								</a>
	
								<div class="submenu">
									<ul class="clearfix">
										<?php for ($item=1; $item <= 15; $item++) : ?>
										<li><a herf="">Item: <?= $item ?></a></li>
										<?php endfor; ?>
									</ul>
								</div><!-- .submenu -->
							</li>

							<li>
								<a href="#">
									<img src="./assets/images/categorias/ebi.png" alt="ebi">
									<span>ebi</span>
								</a>

								<div class="submenu">
									<ul class="clearfix">
										<?php for ($item=1; $item <= 15; $item++) : ?>
										<li><a herf="">Item: <?= $item ?></a></li>
										<?php endfor; ?>
									</ul>
								</div><!-- .submenu -->
							</li>

							<li>
								<a href="#">
									<img src="./assets/images/categorias/sayori.png" alt="sayori">
									<span>sayori</span>
								</a>
	
								<div class="submenu">
									<ul class="clearfix">
										<?php for ($item=1; $item <= 15; $item++) : ?>
										<li><a herf="">Item: <?= $item ?></a></li>
										<?php endfor; ?>
									</ul>
								</div><!-- .submenu -->
							</li>

							<li>
								<a href="#">
									<img src="./assets/images/categorias/isi-ebi.png" alt="isi-ebi">
									<span>isi-ebi</span>
								</a>

								<div class="submenu">
									<ul class="clearfix">
										<?php for ($item=1; $item <= 15; $item++) : ?>
										<li><a herf="">Item: <?= $item ?></a></li>
										<?php endfor; ?>
									</ul>
								</div><!-- .submenu -->
							</li>

							<li>
								<a href="#">
									<img src="./assets/images/categorias/medai.png" alt="medai">
									<span>medai</span>
								</a>

								<div class="submenu">
									<ul class="clearfix">
										<?php for ($item=1; $item <= 15; $item++) : ?>
										<li><a herf="">Item: <?= $item ?></a></li>
										<?php endfor; ?>
									</ul>
								</div><!-- .submenu -->
							</li>

							<li>
								<a href="#">
									<img src="./assets/images/categorias/hamachi.png" alt="hamachi">
									<span>hamachi</span>
								</a>

								<div class="submenu">
									<ul class="clearfix">
										<?php for ($item=1; $item <= 15; $item++) : ?>
										<li><a herf="">Item: <?= $item ?></a></li>
										<?php endfor; ?>
									</ul>
								</div><!-- .submenu -->
							</li>

							<li>
								<a href="#">
									<img src="./assets/images/categorias/roe.png" alt="roe">
									<span>roe</span>
								</a>

								<div class="submenu">
									<ul class="clearfix">
										<?php for ($item=1; $item <= 15; $item++) : ?>
										<li><a herf="">Item: <?= $item ?></a></li>
										<?php endfor; ?>
									</ul>
								</div><!-- .submenu -->
							</li>
						</ul>
					</nav><!-- #categorias -->
				</div><!-- .col-md-9 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- #topo -->

	<section id="search">
		<div class="container">
			<div class="content">
		
		<form>
			<input type="search" placeholder="digite aqui o que você procura...">
			<button type="submit">
				<span class="glyphicon glyphicon-search"></span>
			</button>
		</form>

			</div><!-- .content -->
		</div><!-- .container -->
	</section><!-- #search -->

	<div class="container">

	<div id="carousel" class="carousel slide" data-ride="carousel">

		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="./assets/images/vitrines/01.png" alt="...">
			</div>

			<div class="item">
				<img src="./assets/images/vitrines/01.png" alt="...">
			</div>

			<div class="item">
				<img src="./assets/images/vitrines/01.png" alt="...">
			</div>

			<div class="item">
				<img src="./assets/images/vitrines/01.png" alt="...">
			</div>
		</div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Anterior</span>
	  </a>
	  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Próxima</span>
	  </a>
	</div><!-- #carousel -->


	<h1 class="titulo">Produtos em destaque</h1>

	<div class="row">
		<?php for ($produto=1; $produto <= 6; $produto++) : ?> 
			<div class="col-md-4 col-sm-6">
				<article class="produto">
					<picture>
						<img src="./assets/images/produto.png" alt="Cheese Sushi">
					</picture>

					<div class="descricao">
						<h1>Cheese Sushi</h1>
						<span class="categoria">produto organico</span>

						<div class="preco">
							<span class="moeda">R$</span> 37,00
						</div>
					</div>
				</article><!-- .produto -->
			</div><!-- .col-md-4 .col-sm-6 -->
		<?php endfor; ?>
	</div><!-- .row -->

	</div><!-- .container -->

	<footer id="rodape">
		<div class="container">
			<a href="" class="logo">
				<img src="./assets/images/logo_rodape.png" alt="Sushi Store">
			</a>
		</div><!-- .container -->
	</footer><!-- #rodape -->

	<script type="text/javascript" src="./bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./assets/js/scripts.js"></script>

</body>
</html>