<?php
require_once('conexao.php');
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$id = $_GET["id"];
//qual é a diferença entre usar a funçao query e usar a função prepary
//o quary é so pra consultar dados e o prepary pra manipular informações
$atualizar = $conexao->prepare("UPDATE usuario SET nome='$usuario',senha='$senha' WHERE id='$id'");
$atualizar->execute();

header("location:index.php");
?>