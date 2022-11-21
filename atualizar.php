<?php
require_once('conexao.php');
include_once('./partials/header.php');
$id=$_GET["id"];
?>

<form action="update.php?id=<?=$id?>" method="post">
<label for="usuario">Usuario</label>
<input type="text" id="usuario" name="usuario">
<label for="senha">Nova Senha</label>
<input type="text" id="senha" name="senha">
<button type="submit">Atualizar</button>
</form>
<?php
include_once('./partials/footer.php');
?>