@extends('layouts.masterlogin')
@section('content')
<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href="index"><img src="img/logoEvolutionHeader-min.png" width="149" height="60" data-retina="true" alt=""></a>
			</figure>
			  <form action="{{ route('login') }}" method="POST">
              @csrf
				<div class="access_social">
					<a href="#0" class="social_bt facebook"> Entrar com Facebook</a>
					<a href="#0" class="social_bt google">Entrar com Google</a>
					<a href="#0" class="social_bt linkedin">Entrar com Linkedin</a>
				</div>
				<div class="divider"><span>Ou</span></div>
				<br>
				<div class="form-group">
					<span class="input">
					<input id="email" placeholder="email" type="email" class="input_field{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
						<label class="input_label">
						
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
					<input id="password" placeholder="senha" type="password" class="input_field{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" place required>
						<label class="input_label">
					
					</label>
					<div>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
					</span>
                    @if (Route::has('password.request'))
					<small><a href="{{ route('password.request') }}">Esqueceu a senha?</a></small>
                    @endif
				</div>
                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
				<!-- <input type="submit" name="" class="btn_1 rounded full-width add_top_60" value="Entrar"> -->
				<!-- <a href="#0" class="btn_1 rounded full-width add_top_60">Login to Evolution</a> -->
                <!-- Authentication Links -->
                @if (Route::has('register'))
                    <div class="text-center add_top_10">Novo na Evolution? 
                        <strong><a href="{{ route('register') }}">Registre-se!</a></strong>
                    </div>
                @endif
			</form>
			<div class="copy">© <?php echo date("Y"); ?> Evolution</div>
		</aside>
	</div>

    @endsection