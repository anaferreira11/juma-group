<<<<<<< HEAD
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
=======
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
>>>>>>> db5de601503669bd8ad6fe3004815ffad17a00fe
