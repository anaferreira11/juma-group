<meta charset="UTF-8">


<?php
$id =$_GET["id"];
$con = new mysqli ("localhost","root", "", "auralux");
$res = $con-> query("select * from auralux.categorias where id=$id");
if($obj= $res->fetch_object()){
    $nome=$obj->nome;
   
}
$con -> close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auralux - Inserir Categoria</title>
    <link rel="stylesheet" href="../../css/categoria.css">




</head>
<body>
    <div class="container">
        <h1>Inserir Categoria</h1>
        <form action="alterar-produto.php" method="post">
            <div class="form-group">
            <label >
           
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        </label>
        <br>
                <label for="name">Categoria do Produto </label>
                <input type="text" id="name" name="nome" value="<?php echo $nome; ?>" required>           
            </div>
            <div class="form-group">
                <button type="submit">OK</button>
            </div>
       </form>
    
      


    </div>
    
</body>
</html>