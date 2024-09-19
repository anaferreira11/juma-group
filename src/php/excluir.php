<?php
$id = $_GET["id"];
include("conexao.php");
$res = $con-> query("delete  from auralux.categorias where id = $id");

$con -> close();
echo "Excluido com sucesso!";
?>
<br>

<a href="catalogo.php">Voltar</a>