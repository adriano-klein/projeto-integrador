@extends('layouts.mastercarrinho')
@section('content')
<main>


		<section id="hero_in" class="cart_section">
			<div class="wrapper">
				<div class="container">
					<div class="bs-wizard clearfix">
						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">Seu Carrinho</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">Pagamento</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">Pronto!</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>
					</div>
					<!-- End bs-wizard -->
				</div>
			</div>
		</section>
		<!--/hero_in-->
		
		<div class="bg_color_1">
			<div class="container margin_60_35">
				
				@if(Session::has('mensagem-sucesso'))
				<div class="alert alert-success">
					<strong> {{ Session::get('mensagem-sucesso') }} </strong>
				</div>
				@endif

				@if(Session::has('mensagem-falha'))
				<div class="alert alert-warning">
					<strong> {{ Session::get('mensagem-falha') }} </strong>
				</div>
				@endif

				@forelse ($pedidos as $pedido)
				<h3>Pedido numero: {{ $pedido->id }} </h3>
				<div class="row">
					<div class="col-lg-8">
						<div class="box_cart">
								
						<table class="table table-striped cart-list">
							<thead>
								<tr>
									<th>Qtd</th>
									<th>Produto</th>
									<th>Valor Unit</th>
									<th>Desconto</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								@php
									$total_pedido = 0;
								@endphp
								@foreach ($pedido->pedido_produtos as $pedido_produto)	
								<tr>
									<td>
										<span> {{ $pedido_produto->qtd }} </span>
									</td>
									<td>
										<span> {{ $pedido_produto->produto->nome }} </span>
									</td>
									<td>
										<strong> R$ {{ number_format($pedido_produto->produto->valor, 2, ',', '.') }} </strong>
									</td>
									<td>
										<strong> {{ number_format($pedido_produto->descontos,2,',','.') }} </strong> 
									</td>
									@php
										$total_produto = $pedido_produto->valores - $pedido_produto->descontos; 
										$total_pedido += $total_produto;
									@endphp
									<td> R$ {{ number_format($total_produto, 2,',','.') }} </td>

									<td class="options" style="width:5%; text-align:center;">
										<a href="#" onclick="carrinhoRemoverProduto( {{ $pedido->id }}, {{ $pedido_produto->produto_id }}, 0)"><i class="icon-trash"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<div class="cart-options clearfix">
							<div class="float-left">
								<div class="apply-coupon">
									<div class="form-group">
										<input type="text" name="coupon-code" value="" placeholder="Insira o seu cupom" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn_1 outline">Validar Cupom</button>
									</div>
								</div>
							</div>
							<div class="float-right fix_mobile">
								<button type="button" class="btn_1 outline">Atuaizar carrinho</button>
							</div>
						</div>
						<!-- /cart-options -->
					</div>
					</div>
					
					<!-- /col -->
					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail">
							<div id="total_cart">
								Total <span class="float-right"> {{ number_format($total_pedido, 2,',','.') }}</span>
							</div>
							<div class="add_bottom_30">Lorem ipsum dolor sit amet, sed vide <strong>moderatius</strong> ad. Ex eius soleat sanctus pro, enim conceptam in quo, <a href="#0">brute convenire</a> appellantur an mei.</div>
							<a href="cart-2.html" class="btn_1 full-width">Finalizar compra</a>
							<a href="/cursos" class="btn_1 full-width outline"><i class="icon-right"></i> Continue compando</a>
						</div>
					</aside>
				</div>
				@empty
					<h5>Não existem pedidos no seu carrinho</h5>
				@endforelse
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->

	<form id="form-remover-produto" method="POST" action="carrinho/remover">
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
			<input type="hidden" name="pedido_id">
			<input type="hidden" name="produto_id">
			<input type="hidden" name="item">
		</form>
		<form id="form-adicionar-produto" method="POST" action="carrinho/adicionar">
			{{ csrf_field() }}
			<input type="hidden" name="id">
		</form>

	@push('scripts')
    	<script type="text/javascript" src="/js/carrinho.js"></script>
	@endpush

@endsection