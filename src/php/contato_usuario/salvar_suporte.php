<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$observacao = $_POST["observacao"];

$con = new mysqli("localhost", "root", "", "auralux");
$con->query("insert into suporte(nome,email,observacao) values ('$nome','$email','$observacao')");
$con->close();

?>

<br>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte ao Cliente</title>
</head>
<body>
    <div class="container">
        <h1>Observação enviada com Sucesso!</h1>
        <p>Obrigado por entrar em contato. Nossa equipe de suporte entrará em contato em breve.</p>
        <a href="index.php">Voltar para a página inicial</a>
    </div>

</body>
</html>
