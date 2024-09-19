<h1>
    Cadastrar usuarios

</h1>

<?php
include("conexao.php");
$nome = $_POST["nome"];
$email = $_POST["Email"];
$senha = md5( $_POST["senha"]);
$con-> query("insert into auralux.clientes (nome,email, senha) values ('$nome','$email','$senha')");
    


$con ->close();
?>