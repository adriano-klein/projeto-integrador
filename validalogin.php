<?php
include_once ('conexaoBanco.php');
$mensagem = "";

if($_POST){
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$verificaUsuario = $conectarBanco->prepare("SELECT senha FROM cadastro where email = '$email'");
	$verificaUsuario->execute();
	$resultado = $verificaUsuario->fetchAll(PDO::FETCH_ASSOC);

	if(password_verify($senha,$resultado[0]['senha'])){
		echo "ok";
		session_start();
		$_SESSION["email"] = $email;
		}else{
		$mensagem = "Nome de usuário ou senha incorretos. Por favor, tente novamente";
		}
		
		$_SESSION["email"] = $email;
}
?>