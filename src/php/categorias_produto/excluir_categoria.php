<?php
$id = $_GET["id"];
$con = new mysqli ("localhost","root", "", "auralux");
$res = $con-> query("delete  from auralux.categorias where id = $id");


$con -> close();
echo "Excluido com sucesso!";
?>
<br>

<a href="categorias.php">Voltar</a>