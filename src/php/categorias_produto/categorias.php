
<?php
$con = new mysqli ("localhost","root","", "auralux");
$nome = $_POST["nome"];

$con-> query("insert into auralux.categorias (nome) values ('$nome')");
    


$con ->close();
?> 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">

    <title>Auralux - Categoria do Produto listagem: </title>
    <link rel="stylesheet" href="../css/categoria.css">
</head>
<body>
    <h1>categoria cadastrada!</h1>
    <a href="../categorias_produto/listarcategorias.php">conferir</a>
</body>
