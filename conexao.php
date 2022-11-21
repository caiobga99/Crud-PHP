<?php

$porta = "localhost";
$nomeDoBanco = "teste1";
$usuarioBanco = "root";
$senhaBanco = "";

$conexao = new PDO("mysql:host=$porta;
dbname=$nomeDoBanco", $usuarioBanco,
$senhaBanco);

?>