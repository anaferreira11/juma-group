<?php
$id = $_GET["id"];
include("conexao.php");
$res = $con-> query("delete  from auralux.clientes where id = $id");

$con -> close();
echo "Excluido com sucesso!";
?>
<br>

<a href="listarusuario.php">Voltar</a>