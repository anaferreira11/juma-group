<?php
$id = $_GET["id"];
$con = new mysqli ("localhost","root", "", "auralux");
$res = $con-> query("delete  from auralux.categorias where id = $id");


$con -> close();

?>
<br>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">

    <title>Auralux - Categoria do Produto listagem: </title>
    <link rel="stylesheet" href="../css/categoria.css">
</head>
<body>
    <h1>categoria excluída!</h1>
    <a href="../categorias_produto/listarcategorias.php">conferir</a>
</body>