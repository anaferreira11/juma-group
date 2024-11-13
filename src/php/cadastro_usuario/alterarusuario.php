<?php
$id = $_POST["id"];
$nome = $_POST["nome"];
$email= $_POST["email"];
$email= $_POST["senha"];

include("conexao.php");
 $con-> query("update auralux.cliente set nome= '$nome' , email= '$email', senha= '$senha' , where id=$id");
 echo "Alterado com sucesso!";
 $con->close();

?>
<br>
<a href="inserirusuario.php">Voltar</a>