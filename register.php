<?php
include_once ('conexaoBanco.php');
$mensagem = "";


if($_POST){
	// session_start();
	$nome = $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	$email = $_POST["email"];
	$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

	$verificaEmail = $conectarBanco->query("SELECT * FROM cadastro where email = '$email'");


	if ($verificaEmail->rowCount()>0){
		$mensagem =  "Usuário já cadastrado";
	} else {
	$inserirRegistro = $conectarBanco->prepare('insert into cadastro (nome,sobrenome,email,senha)values(:nome,:sobrenome,:email,:senha)');
	$inserirRegistro->bindParam(':nome',$nome, PDO::PARAM_STR);
	$inserirRegistro->bindParam(':sobrenome',$sobrenome, PDO::PARAM_STR);
	$inserirRegistro->bindParam(':email',$email, PDO::PARAM_STR);
	$inserirRegistro->bindParam(':senha',$senha, PDO::PARAM_STR);

	$inserirRegistro->execute();

	header ("location: login.php");
	

	// $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

	// $_SESSION["usuario"] = $nome;
	// $_SESSION["sobrenome"] = $sobrenome;
	// $_SESSION["email"] = $email; 
	// $_SESSION["senha"] = $senhaHash;

	// header("location:login.php");
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
	
	<!-- FONTAWESOME -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

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
			<form id="myform" method="post">
				<div class="form-group">
					<span class="input">
					<input class="input_field" type="text" name="nome" required>
						<label class="input_label">
						<span class="input__label-content">Nome</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="text" name="sobrenome" required>
						<label class="input_label">
						<span class="input__label-content">Sobrenome</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="email" name="email" required>
						<label class="input_label">
						<span class="input__label-content">Email</span>
					</label>
					</span>
					<div>
						<?php if ($mensagem) {
							echo "<p class='alert-danger'> $mensagem </p>";
						}?>
					</div>
					<span class="input">
					<input id="password_insert" class="input_field" type="password" name="senha">
						<label class="input_label">
						<span class="input__label-content">Senha</span>
					</label>
					</span>
					<span class="input">
					<input onkeyup="check()" id="confirm_password" class="input_field" type="password" name="senha2">
						<label class="input_label">
						<span class="input__label-content">Repita sua senha</span>
					</label>
					</span>
					<span id="message"></span><br>
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
						</script>
					
					<div style="background-color: rgba(0,0,0, 0.6);" class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="padding-right: 16px; display: none;">
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
					</div>

					<!-- <span class="input">
					<input class="input_field" type="password" name="senha">
						<label class="input_label">
						<span class="input__label-content">Confirmar Senha</span>
					</label>
					</span> -->
					
					<div id="pass-info" class="clearfix"></div>
				</div>
				<input type="submit" name="registro_efetuado" class="btn_1 rounded full-width add_top_30" value="Registre-se na Evolution">
				<!-- <a href="login.php" class="btn_1 rounded full-width add_top_30">Registrar-se na Evolution</a> -->
				<div class="text-center add_top_10">Já possui uma conta? <strong><a href="login.php">Faça o seu login</a></strong></div>
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