<?php
$usuario=$_POST["nome"];
$senha=$_POST["senha"];

require_once('conexao.php');

$query=$conexao->prepare("INSERT INTO usuario(nome, senha) VALUES(?,?)");
$query->bindParam(1,$usuario);
$query->bindParam(2,$senha);
$query->execute();


header('location:index.php');
?>