
<h1>
    Categorias Produtos

</h1>

<?php
$con = new mysqli ("localhost","root","", "auralux");
$nome = $_POST["nome"];

$con-> query("insert into auralux.categorias (nome) values ('$nome')");
    


$con ->close();
?>
