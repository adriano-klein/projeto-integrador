@extends('layouts.masterregister')
@section('content')

<div id="login">
		<aside>
			<figure>
				<a href="index"><img src="img/logoEvolutionHeader-min.png" width="149" height="60" data-retina="true" alt=""></a>
			</figure>
			<form id="myform" method="POST" action="{{ route('register') }}">
			@csrf
				<div class="form-group">
					<span class="input">
					<input id="name" type="text" class="input_field{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
						<label class="input_label">
						<span class="input__label-content">Nome</span>
					</label>
					@if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                     @endif
					</span>

					<!-- <span class="input">
					<input class="input_field" type="text" name="sobrenome" required>
						<label class="input_label">
						<span class="input__label-content">Sobrenome</span>
					</label>
					</span> -->

					<span class="input">
					<input id="email" type="email" class="input_field{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
					<label class="input_label">
						<span class="input__label-content">Email</span>
					</label>
					<div>
					@if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
					</div>
					</span>
					<span class="input">
					<input id="password" type="password" class="input_field{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
					<label class="input_label">
						<span class="input__label-content">Senha</span>
					</label>
					<div>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
					</span>
					<span class="input">
					<input id="password-confirm" type="password" class="input_field" name="password_confirmation" required>
						<label class="input_label">
						<span class="input__label-content">Repita sua senha</span>
					</label>
					</span>
					<!-- <span id="message"></span><br>
					<span id="alert_register"><span>
						<script>																			
							var check = function() {
								if (document.getElementById('password_insert').value ==
									document.getElementById('confirm_password').value) {
									document.getElementById('message').innerHTML = 'Senhas conferem';
									document.getElementById('message').style.color = 'green';
								} else {
									document.getElementById('message').style.color = 'red';
									document.getElementById('message').innerHTML = 'Senhas não conferem!';
								}
								}
						</script>
						<script>
							let password = document.getElementById('password_insert')
							let confirmPassword = document.getElementById('confirm_password')

							myform.addEventListener('submit', function(e){
								e.preventDefault();

								if (password.value == confirmPassword.value) {
									document.getElementById('message').style.color = 'green';
									document.getElementById('exampleModal').style.display = 'block';
									setTimeout(function(){
										myform.submit()
									}, 3000);
									
								}
								else {
									document.getElementById('alert_register').innerHTML = 'Por favor, confira sua senha';
									
								}
							})
						</script> -->
					
					<!-- <div style="background-color: rgba(0,0,0, 0.6);" class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="padding-right: 16px; display: none;">
						<div style="margin-top: 300px;" class="modal-dialog" role="document">
							<div class="modal-content">
							<div style="display: flex; flex-direction: column;" class="modal-header">
								<h3 class="modal-title" id="exampleModalLabel">Cadastro efetuado!</h3>
								<i class="fas fa-spinner fa-spin fa-5x"></i>
								<h4>Redirecionando para o Login em instantes</h4>
							</div>
							<div class="modal-footer">
							</div>
							</div>
						</div>
					</div> -->

					<!-- <span class="input">
					<input class="input_field" type="password" name="senha">
						<label class="input_label">
						<span class="input__label-content">Confirmar Senha</span>
					</label>
					</span> -->
					
					<div id="pass-info" class="clearfix"></div>
				</div>
				<button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                </button>
				<!-- <input type="submit" name="registro_efetuado" class="btn_1 rounded full-width add_top_30" value="Registre-se na Evolution"> -->
				<!-- <a href="login.php" class="btn_1 rounded full-width add_top_30">Registrar-se na Evolution</a> -->
				<div class="text-center add_top_10">Já possui uma conta? <strong><a href="login">Faça o seu login</a></strong></div>
			</form>
			<div class="copy">© <?php echo date("Y"); ?> Evolution</div>
		</aside>
	</div>
	@endsection