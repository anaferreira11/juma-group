<?php
$id = $_POST["id"];
$nome = $_POST["nome"];
$preco= $_POST["preco"];
$categoria=$_POST["categorias"];
$descricao=$_POST["descricao"];
$con = new mysqli("localhost", "root", "", "auralux");
$con->query("UPDATE auralux.produtos SET nome='$nome', preco='$preco', descricao='$descricao', categoria=$categoria WHERE id=$id");
$con->close();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Produto</title>
    <link rel="stylesheet" href="../../css/alterar_produto.css">
</head>

<body>
<div class= "container">
    <h1>Produto Alterado com Sucesso!</h1> 
    <a href="listagem.php">OK</a>
    </div>
</body>
</html>
