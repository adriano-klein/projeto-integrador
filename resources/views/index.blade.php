@extends('layouts.master')
@section('content')
	<main>
		<section class="header-video">
			<div id="hero_video">
				<div>
					<h3><strong>Academia Evolution</strong><br>Cursos Online</h3>
				</div>
				<a href="#first_section" class="btn_explore hidden_tablet"><i class="ti-arrow-down"></i></a>
			</div>
			<img src="img/video_fix.png" alt="" class="header-video--media" data-video-src="/video/intro" data-teaser-source="video/intro" data-provider="" data-video-width="1920" data-video-height="960">
			<video autoplay="true" loop="loop" muted id="teaser-video" class="teaser-video"><source src="video/intro.mp4" type="video/mp4"><source src="video/intro.ogv" type="video/ogg"></video>
		</section>
		<!-- /header-video -->

		<ul id="grid_home" class="clearfix">
			<li>
				<a href="cursos" class="img_container">
					<img src="http://via.placeholder.com/600x400/ccc/fff/grid_home_1.jpg" alt="">
					<div class="short_info">
						<h3><strong>Evolution</strong>Cursos</h3>
						<div><span class="btn_1 rounded">Veja mais</span></div>
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
				<h2 class="titulos">Evolution Cursos Populares</h2>
				<p>Confira os cursos mais populares na Evolution.</p>
				<div class="vejacursos">
					<h5><a href="http://localhost:8000/cursos">Veja todos os cursos</a></h5>
				</div>
				{{-- <div class="controlca">
					<div class="prevy"><</div>
					<div class="nexty">></div>
				</div> --}}
			</div>
{{-- ---------------------------------------- --}}
<div id="reccomended" class="owl-carousel owl-theme">
	
	@foreach($cursos as $curso)
	<div class="item">
		<div class="box_grid">
			<figure>
				<a href="{{ $curso->link_produto }}" class="wish_bt"></a>
				<a href="{{ $curso->link_produto }}">
					<div class="preview"><span> {{ $curso->nome }} </span></div><img src=" {{ $curso->url_imagem }} " class="img-fluid" alt=""></a>
				<div class="price">{{'R$'.$curso->valor.'.00'}}</div>

			</figure>
			<div class="wrapper">
				<small> {{$curso->categorias->nome}} </small>  {{--colocar o nome de cada categoria--}}
				<h3> {{$curso->nome}} </h3>
				<p> {{$curso->descricao}} </p>
				<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(145)</small></div>
			</div>
			<ul>
				<li><i class="icon_clock_alt"></i> 1h 30min</li>
				<li><i class="icon_like"></i> 890</li>
				<li><a href="{{ $curso->link_produto }}">Matricular-se</a></li>
			</ul>
		</div>
	</div>
	@endforeach
</div>

{{-- ---------------------------------------- --}}

				
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