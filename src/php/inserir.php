<?php

include("conexao.php");
$nome = $_POST["nome"];
$preco= $_POST["preco"];
$con-> query("insert into categorias (nome, preco ) values ('$nome', '$preco')");


$con-> close();
?>
<br>

<h1>
    Parabéns, o Produto foi inserido!
</h1>
    <a href="catalogo.php">Ver usuários cadastrados</a>