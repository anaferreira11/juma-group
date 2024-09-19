<?php
$id = $_POST["id"];
$nome = $_POST["nome"];

$con = new mysqli ("localhost","root", "", "auralux");
 $con-> query("update auralux.categorias set nome= '$nome' where id=$id");
 echo "Alterado com sucesso!";
 $con->close();

?>
<br>
<a href="Categorias.php">Voltar</a>