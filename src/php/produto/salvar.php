<?php
 $nome = $_POST["nome"];
 $preco = $_POST["preco"];
 $categoria = $_POST["categoria"];
 $descricao = $_POST["descricao"];

$con = new mysqli ("localhost","root","", "auralux");
 
$con->query("insert into produtos(nome,preco,descricao,categoria) values ('$nome','$preco','$descricao','$categoria')");

$con ->close();
?>

<br>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/excluir_categoria.css">

</head>
    
<body>
    <div class="container">
        <h1>Configurar Produtos!</h1>
            <div class="form-group">
            </a>            </div>
            <a href="listagem.php">Ok</a>
       </form>


    </div>
</body>
</html>