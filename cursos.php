<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>ACADEMIA EVOLUTION</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
	
	<div id="page">
		
	<?php
		include "header.php";
	?>
	<!-- /header -->
	
	<main>
		<section id="hero_in" class="courses">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Cursos Online</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->
		<div class="filters_listing sticky_horizontal">
			<div class="container">
				<ul class="clearfix">
					<li>
						<div class="switch-field">
							<input type="radio" id="all" name="listing_filter" value="all" checked>
							<label for="all">All</label>
							<input type="radio" id="popular" name="listing_filter" value="popular">
							<label for="popular">Popular</label>
							<input type="radio" id="latest" name="listing_filter" value="latest">
							<label for="latest">Latest</label>
						</div>
					</li>
					<li>
						<div class="layout_view">
							<a href="#0" class="active"><i class="icon-th"></i></a>
							<a href="courses-list.html"><i class="icon-th-list"></i></a>
						</div>
					</li>
					<li>
						<select name="orderby" class="selectbox">
							<option value="category">Category</option>
							<option value="category 2">Literature</option>
							<option value="category 3">Architecture</option>
							<option value="category 4">Economy</option>
							</select>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->

		<div class="container margin_60_35">
			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="box_grid wow">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="curso_data_science.php" class="wish_bt"></a>
							<a href="curso_data_science.php"><img src="img/datascience1.jpg" class="img-fluid" alt=""></a>
							<div class="price">R$2000</div>
							<div class="preview"><span>Preview course</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Data Science</h3>
							<p>Aprenda as técnicas que o mundo real exige e torne-se um profissional competitivo na área de Inteligência Artificial!</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="course-detail.php">Matricular-se</a></li>
						</ul>
					</div>
				</div>
				<!-- /box_grid -->
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="box_grid wow">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="#0" class="wish_bt"></a>
							<a href="course-detail.php"><img src="img/marketing_digital.jpg" class="img-fluid" alt=""></a>
							<div class="price">$45</div>
							<div class="preview"><span>Visualizar curso</span></div>
							<a href="curso_marketing.php" class="wish_bt"></a>
							<a href="curso_marketing.php"><img src="img/marketing_digital.jpg" class="img-fluid" alt=""></a>
							<div class="price">R$780</div>
							<div class="preview"><span>Preview course</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Marketing Digital</h3>
							<p>SEO, Google Ads, Facebook e Instagram Ads, LinkedIn Ads, Email Marketing e Análise. O máximo sobre Marketing Digital!</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="course-detail.php">Matricular-se</a></li>
						</ul>
					</div>
				</div>
				<!-- /box_grid -->
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="box_grid wow">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="#0" class="wish_bt"></a>
							<a href="curso_programacao.php"><img src="img/programer.jpg" class="img-fluid" alt=""></a>
							<div class="price">R$29</div>
							<div class="preview"><span>Visualizar curso</span></div>
							<a href="curso_programacao.php" class="wish_bt"></a>
							<a href="curso_programacao.php"><img src="img/programer.jpg" class="img-fluid" alt=""></a>
							<div class="price">R$980</div>
							<div class="preview"><span>Preview course</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Programação</h3>
							<p>Aprenda html, jsp, tomcat, postgresql e criar sistemas completos desde o login até os cadastros, consultas e relatórios.</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="course-detail.php">Matricular-se</a></li>
						</ul>
					</div>
				</div>
				<!-- /box_grid -->
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="box_grid wow">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="#0" class="wish_bt"></a>
							<a href="course-detail.php"><img src="img/redes.jpg" class="img-fluid" alt=""></a>
							<div class="price">$60</div>
							<div class="preview"><span>Visualizar curso</span></div>
							<a href="curso_redes.php" class="wish_bt"></a>
							<a href="curso_redes.php"><img src="img/redes.jpg" class="img-fluid" alt=""></a>
							<div class="price">R$780</div>
							<div class="preview"><span>Preview course</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Redes de Computadores</h3>
							<p>Redes de Computadores, Protocolos TCP/IP Aplicados à Comunicações Via Satélite, Multicast e Segurança Telecom</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(1450)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="course-detail.php">Matricular-se</a></li>
						</ul>
					</div>
				</div>
				<!-- /box_grid -->
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="box_grid wow">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="#0" class="wish_bt"></a>
							<a href="course-detail.php"><img src="img/mentoria_carreira.jpg" class="img-fluid" alt=""></a>
							<div class="price">$45</div>
							<div class="preview"><span>Visualizar curso</span></div>
							<a href="curso_mentoria.php" class="wish_bt"></a>
							<a href="curso_mentoria.php"><img src="img/mentoria_carreira.jpg" class="img-fluid" alt=""></a>
							<div class="price">R$950</div>
							<div class="preview"><span>Preview course</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Mentoria de Carreira</h3>
							<p>Um programa individual, rápido e personalizado para quem busca acelerar a carreira, corrigir desvios e sabotadores comportamentais e conquistar excelentes</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(245)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="course-detail.php">Matricular-se</a></li>
						</ul>
					</div>
				</div>
				<!-- /box_grid -->
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="box_grid wow">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="#0" class="wish_bt"></a>
							<a href="course-detail.html"><img src="img/mobile.jpg" class="img-fluid" alt=""></a>
							<div class="price">$39</div>
							<div class="preview"><span>Visualizar curso</span></div>
							<a href="curso_mobile.php" class="wish_bt"></a>
							<a href="curso_mobile.php"><img src="img/mobile.jpg" class="img-fluid" alt=""></a>
							<div class="price">R$1200</div>
							<div class="preview"><span>Preview course</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Desenvolvimento mobile</h3>
							<p>Curso completo de desenvolvimento Android; Crie na prática apps como: Instagram, Flappy Bird, WhatsApp e muito mais.</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(1205)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="course-detail.php">Matricular-se</a></li>
						</ul>
					</div>
					<!-- /box_grid -->
				</div>
			</div>
			<!-- /row -->
			<!-- <p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Veja mais</a></p> -->
		</div>
		
	</main>
	<!--/main-->
	
	<?php
		include "footer.php";
	?>
	<!--/footer-->

	
	</div>
	<!-- page -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>
  
</body>
</html>