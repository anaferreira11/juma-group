<?php
 $nome = $_POST["nome"];
 $preco = $_POST["preco"];

$con = new mysqli ("localhost","root","", "auralux");

$con->query("insert into produtos(nome,preco) values ('$nome','$preco')");

$con ->close();
?> 

<h1> Configurar Produtos<h1>
<a href="listagem.php">
<button type="button">OK</button>