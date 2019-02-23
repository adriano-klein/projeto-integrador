@extends('layouts.mastercurso')
@section('content')
	<main>
		<section id="hero_in" class="courses">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Programação</h1>
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
							<p>No Curso de Desenvolvimento Web Full Stack você aprende a criar sites e sistemas web. Nossos professores especialistas ensinam você do zero, por isso, não é necessário ter conhecimento prévio de linguagem de programação.
							Ao longo do curso, você conhecerá as linguagens, metodologias e as tecnologias mais atuais em uso no mercado. Aprenderá Laravel, HTML, PHP e tudo o que for necessário para dominar o Front End e o Back End de um site ou sistema web. Saberá também concretizar projetos do princípio ao fim, desenvolvendo programação orientada a objetos.
							Em até 5 meses de curso, você será um desenvolvedor web full stack, profissional muito valorizado por ser versátil e ter a visão de todo o projeto de um site. Conte também com nosso apoio de mentoria que ajuda você a atingir seus objetivos profissionais, seja numa carreira em uma grande empresa, ou como freelancer ou como empreendedor na sua própria startup.</p>
							<h5>O que você vai aprender</h5>
							<ul class="list_ok">
								<li>
									<h6>HTML + CSS</h6>
									<p>Estrutura geral, boas práticas<br>
									Classes, ids, seletores, herança e superposição <br>
									Posicionamentos, alturas, responsividade <br>
									Estrutura e padrão de uso <br>
									Elementos semânticos (cont. textual / multimídia) <br>
									Media Queries, Introdução a SASS.</p>
								</li>
								<li>
									<h6>Trabalho colaborativo</h6>
									<p>GIT <br>
									Metodologias Ágeis e SCRUM</p>
								</li>
								<li>
									<h6>PHP</h6>
									<p>
									Sintaxe, variável e estruturas de controle. <br>
									Funções, includes de arquivos escopes. <br>
									Sessões, cookies e headers. <br>
									Manipulação de erros e debug. <br>
									Gerenciamento de arquivos JSON. </P>
									</p>
								</li>
								<li>
									<h6>BANCO DE DADOS</h6>
									<p>
									Sintaxe, variável e estruturas de controle.Modelo de dados.<br>
									Introdução a bases de dados relacionais. <br>
									Structured Query Language (SQL) básico.<br>
									Interação php: PDO. <br>
									SQL extendido: joins, groups, limits, keys e indexes.</P>
								</li>
								<li>
									<h6>PHP ORIENTADO A OBJETOS</h6>
									<p>
									Modelo de dados.<br>
									Estrutura, construtor, destrutor, propriedades e métodos.<br>
									Alcances, segurança, herança, extensão e reusabilidade.<br>
									Interfaces e métodos estáticos. <br>
									Classes abstratas. <br>
									Design Patterns </P>
									</p>
								</li>
								<li>
									<h6>LARAVEL</h6>
									<p>
									Princípios básicos, estrutura de um projeto. <br>
									Manipulação avançada de composer e artisan. <br>
									Routing, middleware, controladores. <br>
									Request/ Response, views, templates. <br>
									ORM, autenticação e sessão. <br> 
									Gerenciamento de coleções. <br>
									Manutenção das bases de dados mediante Migrations e Seeders. <br>
									</P>
								</li>
								<li>
									<h6>AJAX</h6>
									<p>
									Aceso ao DOM, seletores, adicionar/apagar, edição. <br>
									Objetos, variáveis, scopes, etc. <br>
									Gerenciamento estendido: storage, forms, embeds, etc. <br>
									Requisições por AJAX. </p>	
								</li>

								<li>
									<h6>REACT</h6>
									<p> Introdução ao REACT</p>	
								</li>
							</ul>
							<hr>

							<p>Na Evolution, você pode estudar Desenvolvimento Web Full Stack no modelo presencial ou no modelo semipresencial. Ambas as modalidades têm conteúdo idêntico, ou seja você vai adquirir as mesmas habilidades. A diferença principal está na distribuição de tempo entre estudos em sala de aula e na sua casa.</p>

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
											<a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="indicator ti-minus"></i> HTML + CSS</a>
										</h5>
									</div>

									<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=wi9jZJZYSIY" class="video">Estrutura geral, boas práticas.</a><span>14:17</span></li>
													<li><a href="https://www.youtube.com/watch?v=C6gZd3vCN1c" class="video">Classes, ids, seletores, herança e superposição.</a><span>05:41</span></li>
													<li><a href="https://www.youtube.com/watch?v=aBNd31PhvEM" class="video">Posicionamentos, alturas, responsividade.</a><span>12:50</span></li>
													<!-- <li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Estrutura e padrão de uso.</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Elementos semânticos (cont. textual / multimídia).</a><span>00:59</span></li>
													<li><a href="#0" class="txt_doc">Exercícios de fixação</a><span>00:59</span></li> -->
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
												<i class="indicator ti-plus"></i>Trabalho colaborativo
											</a>
										</h5>
									</div>
									<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">GIT</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Metodologias Ágeis e SCRUM</a><span>00:59</span></li>
													<!-- <li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">History</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Healthcare Science</a><span>00:59</span></li>
													<li><a href="#0" class="txt_doc">Audiology</a><span>00:59</span></li> -->
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
												<i class="indicator ti-plus"></i>PHP
											</a>
										</h5>
									</div>
									<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Sintaxe, variável e estruturas de controle</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Funções, includes de arquivos escopes</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Sessões, cookies e headers</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Manipulação de erros e debug</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Gerenciamento de arquivos JSON.</a><span>00:59</span></li>
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
												<i class="indicator ti-plus"></i>Banco de Dados
											</a>
										</h5>
									</div>
									<div id="collapseFourth" class="collapse" role="tabpanel" aria-labelledby="headingFourth" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Sintaxe, variável e estruturas de controle.Modelo de dados</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Introdução a bases de dados relacionais</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Structured Query Language (SQL) básico</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Interação php: PDO</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">SQL extendido: joins, groups, limits, keys e indexes</a><span>00:59</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->
								<div class="card">
									<div class="card-header" role="tab" id="headingFive">
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
												<i class="indicator ti-plus"></i>PHP Orientado a Objetos
											</a>
										</h5>
									</div>
									<div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Modelo de dados</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Estrutura, construtor, destrutor, propriedades e métodos</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Alcances, segurança, herança, extensão e reusabilidade</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Interfaces e métodos estáticos</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Classes abstratas</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Design Patterns</a><span>00:59</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->
								<div class="card">
									<div class="card-header" role="tab" id="headingSix">
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
												<i class="indicator ti-plus"></i>Laravel
											</a>
										</h5>
									</div>
									<div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Princípios básicos, estrutura de um projeto</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Manipulação avançada de composer e artisan</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Routing, middleware, controladores</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Request/ Response, views, templates</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">ORM, autenticação e sessão</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Gerenciamento de coleções</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Manutenção das bases de dados mediante Migrations e Seeders</a><span>00:59</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->
								<div class="card">
									<div class="card-header" role="tab" id="headingSeven">
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
												<i class="indicator ti-plus"></i>AJAX
											</a>
										</h5>
									</div>
									<div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Aceso ao DOM, seletores, adicionar/apagar, edição</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Objetos, variáveis, scopes, etc.</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Gerenciamento estendido: storage, forms, embeds, etc.</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Requisições por AJAX</a><span>00:59</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->

								<!-- /section -->
						<div class="card">
									<div class="card-header" role="tab" id="headingEight">
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
												<i class="indicator ti-plus"></i>REACT
											</a>
										</h5>
									</div>
									<div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Introdução ao REACT</a><span>00:59</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->

							</div>
							<!-- /accordion -->
						</section>
						
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
								R$29<span class="original_price"><em>R$49</em>60% Desconto</span>
							</div>
							<a href="/carrinho" class="btn_1 full-width">Comprar</a>
							<a href="/carrinho" class="btn_1 full-width outline"><i class="icon_heart"></i> Adicionar a minha lista de desejos</a>
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
@endsection