<?php
 $nome = $_POST["nome"];
 $preco = $_POST["preco"];
 $categoria = $_POST["categoria"];

$con = new mysqli ("localhost","root","", "auralux");

$con->query("insert into produtos(nome,preco,categoria) values ('$nome','$preco','$categoria')");

$con ->close();
?>

<h1> Configurar Produtos<h1>
<a href="listagem.php">
<button type="button">OK</button>
<link rel="stylesheet" href="../../../html/salvarproduto.html">
