<?php
$id = $_POST["id"];
$nome = $_POST["nome"];
$preco= $_POST["preco"];

$con = new mysqli ("localhost","root", "", "auralux");  
 $con-> query("update auralux.produtos set nome='$nome' , preco='$preco' where id=$id");
 echo "Alterado com sucesso!";
 $con->close();

?>
<br>
<a href="listagem.php">Voltar</a>