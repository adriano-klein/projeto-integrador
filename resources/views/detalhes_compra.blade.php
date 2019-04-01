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
						<a href="{{url('home')}}"><h3 class="texto_validation">Acesse seu curso</h3></a>
					</div>
				</div>
			</div>
		</section>
		<!--/hero_in-->
	</main>
	<!--/main-->
    @endsection