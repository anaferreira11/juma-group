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
</head>
<body>
    <h1>categoria alterada!</h1>
    <a href="../categorias_produto/listarcategorias.php">conferir</a>
</body>