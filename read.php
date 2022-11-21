<?php

require_once('conexao.php');


//query é pra coisas que nao vao ultilizar manipulção, voce so vai ler os dados, so acessar
$leia = $conexao->query('SELECT id, nome FROM usuario');
//enquanto o codigo acima nao ler tudo do banco de dados, a linha ele vai imprimir tudo
//quando tem :: seguidos no php é uma classe statica
//fetch vai puxar todos os objetos
while ($linha = $leia->fetch(PDO::FETCH_OBJ)) {
    echo $linha->id . "<br/>";
    echo $linha->nome . "<br/>";
}
?>