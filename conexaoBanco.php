<?php

$dsn = "mysql:host=localhost; dbname=evolution; charset=utf8mb4;";
$user = 'root';
$password = '';

try {
    $conectarBanco = new PDO ($dsn, $user, $password);
} catch (PDOExcepetion $Excepetion){
    echo $Excepetion->getMessage();
}

?>