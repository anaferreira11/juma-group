<?php
$id = $_GET["id"];
$con = new mysqli ("localhost","root", "", "auralux");
$res = $con-> query("delete  from auralux.categorias where id = $id");

$con -> close();
?>
<br>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Auralux - Categoria do Produto listagem: </title>
    <link rel="stylesheet" href="../../css/excluir_categoria.css">
</head>
<body>
    <div class="container">
        <h1>Categoria excluida!</h1>
            <div class="form-group">
            <a href="listarcategorias.php">
                <button type="button">Listar Novamente</button>
            </a>            </div>
       </form>
    
      


    </div>
    
</body>
</html>
