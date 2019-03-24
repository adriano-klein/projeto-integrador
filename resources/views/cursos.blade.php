@extends('layouts.mastercurso')
@section('content')
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
							<option value="category">Categoria</option>
							<option value="category 2">Data Science</option>
							<option value="category 3">Marketing</option>
							<option value="category 4">Mentoria</option>
							<option value="category 5">Programação</option>
							</select>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->

		
		<div class="container margin_60_35">
			<div class="row">
				@foreach ($cursos as $curso)
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="box_grid wow">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="{{$curso->link_produto}}" class="wish_bt"></a>
							<a href="{{$curso->link_produto}}"><img src=" {{ $curso->url_imagem }} " class="img-fluid" alt=""></a>
							<div class="price"> {{$curso->valor . '.00'}} </div>
							<div class="preview"><span>Visualizar curso</span></div>
						</figure>
						<div class="wrapper">
							<small>{{$curso->categorias->nome}}</small>
							<h3> {{ $curso->nome }} </h3>
							<p> {{ $curso->descricao }} </p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="{{$curso->link_produto}}">Matricular-se</a></li>
						</ul>
					</div>
				</div>
				@endforeach
			</div>
		</div>
				<!-- /box_grid -->
				{{-- <div class="col-xl-4 col-lg-6 col-md-6">
					<div class="box_grid wow">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="curso_marketing" class="wish_bt"></a>
							<a href="curso_marketing"><img src="img/marketing_digital.jpg" class="img-fluid" alt=""></a>
							<div class="price">R$45</div>
							<div class="preview"><span>Visualizar curso</span></div>
						</figure>
						<div class="wrapper">
							<small>Categoria</small>
							<h3>Marketing Digital</h3>
							<p>SEO, Google Ads, Facebook e Instagram Ads, LinkedIn Ads, Email Marketing e Análise. O máximo sobre Marketing Digital!</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="curso_marketing">Matricular-se</a></li>
						</ul>
					</div>
				</div>
				<!-- /box_grid -->
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="box_grid wow">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="curso_programacao" class="wish_bt"></a>
							<a href="curso_programacao"><img src="img/programer.jpg" class="img-fluid" alt=""></a>
							<div class="price">R$47.20</div>
							<div class="preview"><span>Visualizar curso</span></div>
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
				<!-- /box_grid -->
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="box_grid wow">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="curso_redes.php" class="wish_bt"></a>
							<a href="curso_redes.php"><img src="img/redes.jpg" class="img-fluid" alt=""></a>
							<div class="price">R$60</div>
							<div class="preview"><span>Visualizar curso</span></div>
						</figure>
						<div class="wrapper">
							<small>Categoria</small>
							<h3>Redes de Computadores</h3>
							<p>Redes de Computadores, Protocolos TCP/IP Aplicados à Comunicações Via Satélite, Multicast e Segurança Telecom</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(1450)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="curso_redes.php">Matricular-se</a></li>
						</ul>
					</div>
				</div>
				<!-- /box_grid -->
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="box_grid wow">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="curso_mentoria" class="wish_bt"></a>
							<a href="curso_mentoria"><img src="img/mentoria_carreira.jpg" class="img-fluid" alt=""></a>
							<div class="price">R$45</div>
							<div class="preview"><span>Visualizar curso</span></div>
						</figure>
						<div class="wrapper">
							<small>Categoria</small>
							<h3>Mentoria de Carreira</h3>
							<p>Um programa individual, rápido e personalizado para quem busca acelerar a carreira, corrigir desvios e sabotadores comportamentais e conquistar excelentes</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(245)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="curso_mentoria">Matricular-se</a></li>
						</ul>
					</div>
				</div>
				<!-- /box_grid -->
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="box_grid wow">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="curso_mobile.php" class="wish_bt"></a>
							<a href="curso_mobile"><img src="img/mobile.jpg" class="img-fluid" alt=""></a>
							<div class="price">R$29.00</div>
							<div class="preview"><span>Visualizar curso</span></div>
						</figure>
						<div class="wrapper">
							<small>Categoria</small>
							<h3>Desenvolvimento mobile</h3>
							<p>Curso completo de desenvolvimento Android; Crie na prática apps como: Instagram, Flappy Bird, WhatsApp e muito mais.</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(1205)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="curso_mobile">Matricular-se</a></li>
						</ul>
					</div>
					<!-- /box_grid -->
				</div>
			</div> --}}
			<!-- /row -->
			<!-- <p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Veja mais</a></p> -->
		
	
		
	</main>
	<!--/main-->
    @endsection