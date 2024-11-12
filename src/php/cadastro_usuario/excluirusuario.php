<?php
$id = $_GET["id"];
$con = new mysqli("localhost", "root", "", "auralux");
$res = $con-> query("delete  from auralux.clientes where id = $id");
$con -> close();
echo "Excluido com sucesso!";
?>
<br>

<a href="listarusuario.php">Voltar</a>