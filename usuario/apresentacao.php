<?php

// Usado para gerar mensagem de Bem Vindo ao Usuário 
// continuação do cod. no arquivo nav-user.php 

include_once ('../conexaoBanco.php');

session_start();
$emailSession = $_SESSION["email"];

$query = $conectarBanco->prepare("SELECT nome FROM cadastro where email = '$emailSession'");
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

$exibeUser = $usuarios[0]['nome'];


	
?>