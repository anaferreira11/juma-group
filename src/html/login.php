<?php

    $con = new mysqli ("localhost","root", "", "auralux");

    $dad = $con->query("select * from clientes");

    if($linhaa = $dad->fetch_object()){

        $id = $linhaa->id;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Auralux Cosméticos</title>
    <link rel="stylesheet" href="../css/loginaura.css">


</head>
<body>
    <div class="login-container">
        </a>
        <!-- Logotipo da Auralux -->
        <h1>Bem-vindo à Auralux</h1>
        <form action="../html/loginu.php" method="post">
            <input type="hidden" name="id" value="<?=$id?>" />
            <label for="nome">Nome</label>
            <input type="text" name="nome">
            <br><br>
            <label for="email">Email</label>
            <input type="email" name="email">
            <br><br>
            <label for="senha">Senha</label>
            <input type="password"  name="senha">
            <br><br>
            <button type="submit">Entrar</button>
        </form>
        <div class="fundo_link"> <p>Não tem uma conta? <a href="..\html\cadastro.html">Cadastre-se</a></p></div>
    </div>
</body>
</html>
