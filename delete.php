<?php
require_once('conexao.php');
$id = $_GET["id"];
$deletar = $conexao->prepare("DELETE FROM usuario WHERE id='$id'");
$deletar->execute();

header("location:index.php");
?>