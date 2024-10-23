<?php
include("conexao.php");

if (isset($_POST["submit"])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $con->prepare("INSERT INTO auralux.clientes (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha);

    if ($stmt->execute()) {
        echo "Cliente cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar cliente: " . $stmt->error;
    }

    $stmt->close();
}

$con->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="../../php/listarusuario.php">
</head>
<body>
    <h2>Cadastro de Cliente</h2>
    <form method="POST" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br>

        <input type="submit" name="submit" value="Cadastrar">
    </form>
    <br>
    <a href="cadastro.html">Cadastrar Novo Cliente</a>

</body>
</html>
