<?php
include_once ('conexaoBanco.php');

$query = $conectarBanco->query("SELECT * FROM cadastro LIMIT 5");

$result = $query->fetchAll();


if($_POST){
	// session_start();
	$nome = $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	$email = $_POST["email"];
	$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

	$inserirRegistro = $conectarBanco->prepare('insert into cadastro (nome,sobrenome,email,senha)values(:nome,:sobrenome,:email,:senha)');
	$inserirRegistro->bindParam(':nome',$nome, PDO::PARAM_STR);
	$inserirRegistro->bindParam(':sobrenome',$sobrenome, PDO::PARAM_STR);
	$inserirRegistro->bindParam(':email',$email, PDO::PARAM_STR);
	$inserirRegistro->bindParam(':senha',$senha, PDO::PARAM_STR);

 	$inserirRegistro->execute();

	// $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

	// $_SESSION["usuario"] = $nome;
	// $_SESSION["sobrenome"] = $sobrenome;
	// $_SESSION["email"] = $email; 
	// $_SESSION["senha"] = $senhaHash;

	// header("location:login.php");
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
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
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

<body id="register_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href="index.php"><img src="img/logoEvolutionHeader-min.png" width="149" height="60" data-retina="true" alt=""></a>
			</figure>
			<form method="post">
				<div class="form-group">

					<span class="input">
					<input class="input_field" type="text" name="nome">
						<label class="input_label">
						<span class="input__label-content">Nome</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="text" name="sobrenome">
						<label class="input_label">
						<span class="input__label-content">Sobrenome</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="email" name="email">
						<label class="input_label">
						<span class="input__label-content">Email</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" name="senha">
						<label class="input_label">
						<span class="input__label-content">Senha</span>
					</label>
					</span>

					<!-- <span class="input">
					<input class="input_field" type="password" name="senha">
						<label class="input_label">
						<span class="input__label-content">Confirmar Senha</span>
					</label>
					</span> -->
					
					<div id="pass-info" class="clearfix"></div>
				</div>
				<input type="submit" name="" class="btn_1 rounded full-width add_top_30" value="Registre-se na Evolution">
				<!-- <a href="#0" class="btn_1 rounded full-width add_top_30">Registre-se na Evolution</a> -->
				<div class="text-center add_top_10">Ainda não tem uma conta? <strong><a href="login.php">Registre-se</a></strong></div>
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
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/pw_strenght.js"></script>
  
</body>
</html>