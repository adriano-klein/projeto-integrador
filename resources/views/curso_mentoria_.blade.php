@extends('layouts.mastercurso')
@section('content')
	<main>
		<section id="hero_in" class="courses">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Mentoria de Carreira</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="bg_color_1">
			<nav class="secondary_nav sticky_horizontal">
				<div class="container">
					<ul class="clearfix">
						<li><a href="#description" class="active">Detalhes</a></li>
						<li><a href="#lessons">Atividades</a></li>
						<li><a href="#reviews">Avaliações</a></li>
					</ul>
				</div>
			</nav>
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
						
						<section id="description">
							<h2>Descrição</h2>
							<p>O curso de formação em mentoring da <strong>Evolution</strong>  traz metodologia inovadora e ferramentas comportamentais de alta performance que integram aspectos pessoais e profissionais para capacitar os alunos a atuar como mentores. Faça a diferença na jornada de outro profissional e/ou empreendedor: seja um mentor!</p>
							<h5>O que você vai aprender</h5>
							<ul class="list_ok">
								<li>
									<h6>Agilidade, aprendizagem e adaptação organizacional</h6>
								</li>
								<li>
									<h6>Networking</h6>
								</li>
								<li>
									<h6>Retenção do conhecimento tácito, seja ele técnico ou institucional</h6>
								</li>
								<li>
									<h6>Manutenção e melhor aproveitamento de talentos</h6>
								</li>
								<li>
									<h6>Desenvolvimento de lideranças</h6>
								</li>
								<li>
									<h6>Ganho de eficiência nos processos de ascensão funcional e de sucessão</h6>
								</li>
							</ul>
							<hr>

							<p>Na Evolution, você pode estudar Mentoria de Carreira no modelo presencial ou no modelo semipresencial. Ambas as modalidades têm conteúdo idêntico, ou seja você vai adquirir as mesmas habilidades. A diferença principal está na distribuição de tempo entre estudos em sala de aula e na sua casa.</p>

						<section id="lessons">
							<div class="intro_title">
								<h2>Atividades</h2>
								<ul>
									<li>18 atividades</li>
									<li>01:02:10</li>
								</ul>
							</div>
							<div id="accordion_lessons" role="tablist" class="add_bottom_45">
								<div class="card">
									<div class="card-header" role="tab" id="headingOne">
										<h5 class="mb-0">
											<a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="indicator ti-minus"></i> O que é Coaching?</a>
										</h5>
									</div>

									<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Autoconhecimento - Parte I</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Autoconhecimento - Parte II</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Talentos, competências e habilidades</a><span>00:59</span></li>
													<li><a href="#0" class="txt_doc">Exercícios de fixação</a><span>00:59</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->
								<div class="card">
									<div class="card-header" role="tab" id="headingTwo">
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<i class="indicator ti-plus"></i>Imagem e comunicação - Parte I
											</a>
										</h5>
									</div>
									<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Imagem e comunicação - Parte I</a><span>00:59</span></li>
													<li><a href="#0" class="txt_doc">Exercícios de fixação</a><span>00:59</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->
								<div class="card">
									<div class="card-header" role="tab" id="headingThree">
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												<i class="indicator ti-plus"></i>Imagem e comunicação - Parte II
											</a>
										</h5>
									</div>
									<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Imagem e comunicação - Parte II</a><span>00:59</span></li>
													<li><a href="#0" class="txt_doc">Exercícios de fixação</a><span>00:59</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->

								<div class="card">
									<div class="card-header" role="tab" id="headingFourth">
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" href="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
												<i class="indicator ti-plus"></i>Administração do tempo
											</a>
										</h5>
									</div>
									<div id="collapseFourth" class="collapse" role="tabpanel" aria-labelledby="headingFourth" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Administração do tempo</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Valores e visão</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Missão de vida</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Metas</a><span>00:59</span></li>
													<li><a href="#0" class="txt_doc">Exercícios de fixação</a><span>00:59</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->
							</div>
							<!-- /accordion -->
						</section>
						<!-- /section -->
						
						<section id="reviews">
							<h2>Avaliação</h2>
							<div class="reviews-container">
								<div class="row">
									<div class="col-lg-3">
										<div id="review_summary">
											<strong>4.7</strong>
											<div class="rating">
												<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
											</div>
											<small>4 avaliações</small>
										</div>
									</div>
									<div class="col-lg-9">
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>5 estrelas</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>4 estrelas</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>3 estrelas</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>2 estrelas</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>1 estrela</strong></small></div>
										</div>
										<!-- /row -->
									</div>
								</div>
								<!-- /row -->
							</div>

							<hr>

							<div class="reviews-container">

								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="http://via.placeholder.com/150x150/ccc/fff/avatar1.jpg" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
										</div>
										<div class="rev-info">
											Admin – April 03, 2016:
										</div>
										<div class="rev-text">
											<p>
												Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
											</p>
										</div>
									</div>
								</div>
								<!-- /review-box -->
								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="http://via.placeholder.com/150x150/ccc/fff/avatar2.jpg" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											<i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
										</div>
										<div class="rev-info">
											Ahsan – April 01, 2016:
										</div>
										<div class="rev-text">
											<p>
												Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
											</p>
										</div>
									</div>
								</div>
								<!-- /review-box -->
								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="http://via.placeholder.com/150x150/ccc/fff/avatar3.jpg" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											<i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
										</div>
										<div class="rev-info">
											Sara – March 31, 2016:
										</div>
										<div class="rev-text">
											<p>
												Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
											</p>
										</div>
									</div>
								</div>
								<!-- /review-box -->
							</div>
							<!-- /review-container -->
						</section>
						<!-- /section -->
					</div>
					<!-- /col -->
					
					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail">
							<figure>
								<a href="https://www.youtube.com/watch?v=m4PiYmflgYI" class="video"><i class="arrow_triangle-right"></i><img src="img/cursoProgramacao.jpg" alt="" class="img-fluid"><span>Assistir apresentação do curso</span></a>
							</figure>
							<div class="price">
								{{$valorDesconto.',00'}} <span class="original_price"><em> {{$produtos->valor.',00'}} </em><?php echo (($valorDesconto/$produtos->valor)-1)*-100 . '%' . ' ' . 'desconto'?> </span>
							</div>
							<form method="POST" action= "carrinho/adicionar">
								{{ csrf_field() }}
								<input type="hidden" name="id" value="5">
								<button class="btn_1 full-width">Comprar</button>
							</form>
							<a href="#0" class="btn_1 full-width outline"><i class="icon_heart"></i> Adicionar a minha lista de desejos</a>
							<div id="list_feat">
								<h3>O que está incluso</h3>
								<ul>
									<li><i class="icon_mobile"></i>Acesso 24/7</li>
									<li><i class="icon_archive_alt"></i>Atividades extras</li>
									<li><i class="icon_chat_alt"></i>Chat com o tutor</li>
									<li><i class="icon_document_alt"></i>Certificado de conclusão</li>
								</ul>
							</div>
						</div>
					</aside>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
	</div>
	<!-- page -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>
@endsection