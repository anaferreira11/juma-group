<?php
 $nome = $_POST["nome"];
 $preco = $_POST["preco"];

$con = new mysqli ("localhost","root","", "auralux");

$con->query("insert into produtos(nome,preco) values ('$nome','$preco')");

$con ->close();
?> 

<h1>ok</h1>