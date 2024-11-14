<?php
$nome = $_POST["nome"];
$senha = md5($_POST["senha"]);
$email = $_POST["Email"];
$con = new mysqli("localhost", "root", "", "auralux");
$con->query("insert into clientes(nome,email,senha) values ('$nome','$email','$senha')");
$con->close();

?>
<br>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auralux -Usuario Cadastrado</title>
    <link rel="stylesheet" href="../../css/excluir_categoria.css">

</head>
    
<body>
    <div class="container">
        <h1>Usuario Cadastrado!</h1>
            <div class="form-group">
            </a>            </div>
            <a href="listarusuario.php">Listagem de usuário</a>
       </form>


    </div>
</body>
</html>


