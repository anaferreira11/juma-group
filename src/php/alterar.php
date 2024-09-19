<?php
$id = $_POST["id"];
$nome = $_POST["nome"];
$preco= $_POST["preco"];

include("conexao.php");
 $con-> query("update auralux.categorias set nome= '$nome' , preco= '$preco' where id=$id");
 echo "Alterado com sucesso!";
 $con->close();

?>
<br>
<a href="catalogo.php">Voltar</a>