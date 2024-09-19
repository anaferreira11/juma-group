<?php
$id = $_GET["id"];
include("conexao.php");
$res = $con-> query("delete  from auralux.produtos where id = $id");


$con -> close();
echo "Excluido com sucesso!";
?>
<br>

<a href="inseir.php">Voltar</a>