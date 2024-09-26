<?php
$id = $_POST["id"];
$nome = $_POST["nome"];

$con = new mysqli ("localhost","root", "", "auralux");
$con-> query("update auralux.categorias set nome= '$nome' where id=$id");

$con->close();

?>
<br>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">

    <title>Auralux - Categoria do Produto listagem: </title>
    <link rel="stylesheet" href="../css/categoria.css">
    <link rel="stylesheet" href="../../css/alterarcategoria.css">
</head>
<body>
    <div>
    <h1>Categoria Alterada!</h1>
    <a href="../categorias_produto/listarcategorias.php">Conferir</a>
    </div>
</body>