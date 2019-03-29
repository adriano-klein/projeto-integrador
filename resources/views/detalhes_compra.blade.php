@extends('layouts.masterdetalhecompra')
@section('content')

<main>
		<section id="hero_in" class="cart_section">
			<div class="wrapper">
				<div class="container">
					<div class="bs-wizard clearfix">
						<div class="bs-wizard-step">
							<div class="text-center bs-wizard-stepnum">Seu carrinho</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="cart-1.html" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step">
							<div class="text-center bs-wizard-stepnum">Pagamento</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="cart-2.html" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">Pronto!</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>
					</div>
					<!-- End bs-wizard -->
					<div id="confirm">
						<h2 class="texto_validation">Sua ordem foi concluída</h2>
						<h3 class="texto_validation">Confira o resumo do seu pedido</h3>
					</div>
				</div>
			</div>
		</section>
		<section>
		<div class="box-cursos">
					@forelse($cursosAp as $curso)

					@foreach ($curso->pedido_produtos as $pedido_produto)

					<div class="curso_ap_box">
					<h4>{{ $pedido_produto->produto->nome }}</h4>
					<p>{{ $pedido_produto->produto->descricao }}</p>
					<button class="btn">Acesse as aulas agora</button>
					</div>
					@endforeach

					@empty
					<div>Ops.. houve um erro :(</div>
					@endforelse
					</div> 
		</section>
		<!--/hero_in-->
	</main>
	<!--/main-->
    @endsection