<?php

if($_POST){
	session_start();
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	$validaSenha = password_verify($senha, $_SESSION["senha"]);

	if($validaSenha === true && $_SESSION["email"] === $email){
		header("location:exito.php");
	}else{
		echo "Seu email ou senha estão incorretos! <br> Por favor preencha-os novamente";
	}






}




?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>ACADEMIA EVOLUTION</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body id="login_bg">
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href="index.html"><img src="img/logoEvolutionHeader-min.png" width="149" height="60" data-retina="true" alt=""></a>
			</figure>
			  <form class="" action="login.php" method="post">
				<div class="access_social">
					<a href="#0" class="social_bt facebook">Login with Facebook</a>
					<a href="#0" class="social_bt google">Login with Google</a>
					<a href="#0" class="social_bt linkedin">Login with Linkedin</a>
				</div>
				<div class="divider"><span>Ou</span></div>
				<div class="form-group">
					<!-- <span class="input">
					<input class="input_field" type="email" name="email">
						<label class="input_label">
						<span class="input__label-content">Email</span>
					</label>
					</span> -->
					<span class="input">
					<input class="input_field" type="email" name="email">
						<label class="input_label">
						<span class="input__label-content">Email</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password"  name="senha">
						<label class="input_label">
						<span class="input__label-content">Senha</span>
					</label>
					</span>
					<small><a href="#0">Esqueceu a senha?</a></small>
				</div>
				<input type="submit" name="" class="btn_1 rounded full-width add_top_60" value="Login to Evolution">
				<!-- <a href="#0" class="btn_1 rounded full-width add_top_60">Login to Evolution</a> -->
				<div class="text-center add_top_10">Novo na Evolution? <strong><a href="register.php">Registre-se!</a></strong></div>
			</form>
			<div class="copy">© <?php echo date("Y"); ?> Evolution</div>
		</aside>
	</div>
	<!-- /login -->
		
	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>	
  
</body>
</html>