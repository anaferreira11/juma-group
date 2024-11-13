<?php
$id = $_POST["id"];
$nome = $_POST["nome"];
$email= $_POST["email"];
$senha= $_POST["senha"];

$con = new mysqli ("localhost","root","", "auralux");
 $con-> query("update auralux.clientes set nome= '$nome' , email= '$email', senha= '$senha'  where id=$id");
 echo "Alterado com sucesso!";
 $con->close();

?>
<br>
<a href="listarusuario.php">Voltar</a> 