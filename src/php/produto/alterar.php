<?php
$id = $_POST["id"];
$nome = $_POST["nome"];
$preco= $_POST["preco"];
$categoria=$_POST["categorias"];
$con = new mysqli("localhost", "root", "", "auralux");
$con->query("UPDATE auralux.produtos SET nome='$nome', preco='$preco', categoria=$categoria WHERE id=$id");
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
<<<<<<< HEAD
<div class= "container">
    <h1>Produto Alterado com Sucesso!</h1> 
    <a href="listagem.php">OK</a>
=======
    <div class="container">
        <h1>Produto Alterado!</h1>
        <a href="listagem.php">OK</a>

>>>>>>> b8f1ac3f55025172aae5eff929aa50a1515912ff
    </div>
</body>
</html>
