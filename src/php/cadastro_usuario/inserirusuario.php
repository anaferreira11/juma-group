<?php
$nome = $_POST["nome"];
$senha = md5($_POST["senha"]);
$email = $_POST["Email"];
$con = new mysqli("localhost", "root", "", "auralux");
$con->query("insert into clientes(nome,email,senha) values ('$nome','$email','$senha')");
$con->close();

?>

<h1>ok</h1>
<a href="listarusuario.php">Listagem de usuário</a>