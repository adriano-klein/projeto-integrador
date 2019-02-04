<?php

$dsn = "mysql:host=127.0.0.1; dbname=evolution; charset=utf8mb4;port=8889";
$user = 'root';
$password = 'root';

try {
    $conectarBanco = new PDO ($dsn, $user, $password);
} catch (PDOExcepetion $Excepetion){
    echo $Excepetion->getMessage();
}

?>