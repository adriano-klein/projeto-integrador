@extends('layouts.master')
@section('content')
	<main>
		<section class="header-video">
			<div id="hero_video">
				<div>
					<h3><strong>Academia Evolution</strong><br>Cursos Online</h3>
					<!-- <p>Eam fastidii erroribus corrumpit cu, in quo epicuri recusabo, <strong>est vocent eleifend</strong> inimicus at.</p> -->
				</div>
				<a href="#first_section" class="btn_explore hidden_tablet"><i class="ti-arrow-down"></i></a>
			</div>
			<img src="img/video_fix.png" alt="" class="header-video--media" data-video-src="/video/intro" data-teaser-source="video/intro" data-provider="" data-video-width="1920" data-video-height="960">
			<video autoplay="true" loop="loop" muted id="teaser-video" class="teaser-video"><source src="video/intro.mp4" type="video/mp4"><source src="video/intro.ogv" type="video/ogg"></video>
		</section>
		<!-- /header-video -->

		<ul id="grid_home" class="clearfix">
			<li>
				<a href="#0" class="img_container">
					<img src="http://via.placeholder.com/600x400/ccc/fff/grid_home_1.jpg" alt="">
					<div class="short_info">
						<h3><strong>Evolution</strong>Cursos</h3>
						<div><span class="btn_1 rounded">Read more</span></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#0" class="img_container">
					<img src="http://via.placeholder.com/600x400/ccc/fff/grid_home_1.jpg" alt="">
					<div class="short_info">
						<h3><strong>Comunidade</strong>Estudantes</h3>
						<div><span class="btn_1 rounded">Read more</span></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#0" class="img_container">
					<img src="http://via.placeholder.com/600x400/ccc/fff/grid_home_1.jpg" alt="">
					<div class="short_info">
						<h3><strong>Admission</strong>Apply</h3>
						<div><span class="btn_1 rounded">Submit</span></div>
					</div>
				</a>
			</li>
			<li>
				<a href="#0" class="img_container">
					<img src="http://via.placeholder.com/600x400/ccc/fff/grid_home_1.jpg" alt="">
					<div class="short_info">
						<h3><strong>Admission</strong>Apply</h3>
						<div><span class="btn_1 rounded">Submit</span></div>
					</div>
				</a>
			</li>
		</ul>
		<!--/grid_home -->

		<div class="container-fluid margin_120_0" id="first_section">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Evolution Cursos Populares</h2>
				<p>Confira os cursos mais populares na Evolution.</p>
			</div>
			<div id="reccomended" class="owl-carousel owl-theme">
				<div class="item">
					<div class="box_grid">
						<figure>
							<a href="#" class="wish_bt"></a>
							<a href="curso_programacao">
								<div class="preview"><span>Visualizar curso</span></div><img src="img/programer.jpg" class="img-fluid" alt=""></a>
							<div class="price">$39</div>

						</figure>
						<div class="wrapper">
							<small>Categoria</small>
							<h3>Programação</h3>
							<p>Aprenda html, jsp, tomcat, postgresql e criar sistemas completos desde o login até os cadastros, consultas e relatórios.</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="curso_programacao">Matricular-se</a></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="curso_data_science"><img src="img/datascientist.jpg" class="img-fluid" alt=""></a>
							<div class="price">$45</div>
							<div class="preview"><span>Visualizar curso</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Data Science</h3>
							<p>Aprenda as técnicas que o mundo real exige e torne-se um profissional competitivo na área de Inteligência Artificial!</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i></i> <small>(300)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="curso_data_science">Matricular-se</a></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="curso_mentoria"><img src="img/mentoria_carreira.jpg" class="img-fluid" alt=""></a>
							<div class="price">$54</div>
							<div class="preview"><span>Visualizar curso</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Mentoria de Carreira</h3>
							<p>Um programa individual, rápido e personalizado para quem busca acelerar a carreira, corrigir desvios e sabotadores comportamentais e conquistar excelentes</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="curso_mentoria">Matricular-se</a></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="curso_redes"><img src="img/redes.jpg" class="img-fluid" alt=""></a>
							<div class="price">$27</div>
							<div class="preview"><span>Visualizar curso</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Redes de Computadores</h3>
							<p>Redes de Computadores, Protocolos TCP/IP Aplicados à Comunicações Via Satélite, Multicast e Segurança Telecom</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="curso_redes">Matricular-se</a></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="curso_mobile"><img src="img/mobile.jpg" class="img-fluid" alt=""></a>
							<div class="price">$35</div>
							<div class="preview"><span>Visualizar curso</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Desenvolvimento mobile</h3>
							<p>Curso completo de desenvolvimento Android; Crie na prática apps como: Instagram, Flappy Bird, WhatsApp e muito mais.</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="curso_mobile">Matricular-se</a></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="curso_marketing"><img src="img/marketing.jpg" class="img-fluid" alt=""></a>
							<div class="price">$54</div>
							<div class="preview"><span>Visualizar curso</span></div>
						</figure>
						<div class="wrapper">
							<small>Category</small>
							<h3>Marketing Digital</h3>
							<p>SEO, Google Ads, Facebook e Instagram Ads, LinkedIn Ads, Email Marketing e Análise. O máximo sobre Marketing Digital!</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="curso_marketing">Matricular-se</a></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
			</div>
			<!-- /carousel -->
			
			<!-- /container -->
			<hr>
		</div>
		<!-- /container -->

		<div class="container margin_30_95">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Evolution Categoria de Cursos</h2>
				<p>Conheça nossos Cursos</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="img/programer_one.jpg" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>15 Programas</small>
								<h3>Programação</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="img/datascience1.jpg" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programas</small>
								<h3>Data Science</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="img/marketing_digital.jpg" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programas</small>
								<h3>Marketing Digital</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		<div class="call_section">
			<div class="container clearfix">
				<div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
					<div class="block-reveal">
						<div class="block-vertical"></div>
						<div class="box_1">
							<h3>Faça parte da nossa comunidade</h3>
							<p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
							<a href="#0" class="btn_1 rounded">Leia mais</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/call_section-->
	</main>
	<!-- /main -->
	
	
	</div>
	<!-- page -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/video_header.js"></script>
	<script>
		HeaderVideo.init({
			container: $('.header-video'),
			header: $('.header-video--media'),
			videoTrigger: $("#video-trigger"),
			autoPlayVideo: true
		});
	</script>
@endsection