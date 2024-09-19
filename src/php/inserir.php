
<h1>
    Cadastrar usuarios

</h1>

<?php
include("conexao.php");
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$tel = $_POST["telefone"];
$con-> query("insert into clientes (nome,senha,telefone) values ('$nome','$senha','$tel')");
    


$con ->close();
?>
