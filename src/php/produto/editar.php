<meta charset="UTF-8">


<?php
$id =$_GET["id"];
include("conexao.php");
$res = $con-> query("select * from auralux.produtos where id=$id");
if($obj= $res->fetch_object()){
    $nome=$obj->nome;
    $preco=$obj->preco;
}
$con -> close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auralux - Inserir Produto</title>
    <link rel="stylesheet" href="../css/inserir_produto.css">




</head>
<body>
    <div class="container">
        <h1>Inserir Produto</h1>
        <form action="alterar.php" method="post">
            <div class="form-group">
            <label >
           
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        </label>
        <br>
                <label for="name">Nome do Produto </label>
                <input type="text" id="name" name="nome" value="<?php echo $nome; ?>" required>           
            </div>
            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="preco" id="preco" name="preco"  value="<?php echo $preco; ?>"required>
            </div>
            <div class="form-group">
                <button type="submit">OK</button>
            </div>
       </form>
    
      


    </div>
    
</body>
</html>