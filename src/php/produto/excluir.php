<?php
$id = $_GET["id"];
$con = new mysqli ("localhost","root","", "auralux");
$con-> query("delete from produtos where id=$id");
$con->close();  
?>
<br>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Auralux -Produto listagem: </title>
    <link rel="stylesheet" href="../../css/excluirproduto.css">
</head>
<body>
    <div class="container">
        <h1>Produto excluido com Sucesso!</h1>
            <div class="form-group">
            <a href="listagem.php">
                <button type="button">Listar Novamente</button>
            </a>            </div>
       </form>
    
      


    </div>
    
</body>
</html>
