<?php
$id = $_GET["id"];
$con = new mysqli("localhost", "root", "", "auralux");
$res = $con-> query("delete  from auralux.clientes where id = $id");
$con -> close();
?>
<br>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auralux -    Excluir Usuarios</title>
    <link rel="stylesheet" href="../../css/excluir_categoria.css">

</head>
    
<body>
    <div class="container">
        <h1>Usuário excluido!</h1>
            <div class="form-group">
            <a href="listarusuario.php">Voltar</a>
            </a>            </div>
       </form>


    </div>
</body>
</html>
