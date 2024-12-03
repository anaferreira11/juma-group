<meta charset="UTF-8">

<?php
$id =$_GET["id"];
$con = new mysqli ("localhost","root", "", "auralux");
$res = $con-> query("Select * from produtos where id = '$id'");
if($obj= $res->fetch_object()){
    $id = $obj->id;
    $nome=$obj->nome;
    $preco=$obj->preco;
    $categoria=$obj->categoria;
    $descricao=$obj->descricao;


}
$con -> close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auralux - Editar Produto</title>
    <link rel="stylesheet" href="../../css/categoria.css">
   
 
<body>
    <div class="container">
        <h1>Editar Produto</h1>
        <form action="alterar.php" method="post">
            <div class="form-group">
            <label>
            <input type="hidden" name="id" value="<?=$id?>">
            </label>
        <br>
                <label for="name">Editar Nome do Produto </label>
                <input type="text" id="name" name="nome" value="<?=$nome?>" required>  
                <label for="name">Editar Preço do Produto </label>
                <input type="text" id="preco" name="preco" value="<?=$preco?>" required>
                <label for="categorias">Editar Categoria do Produto </label>
                <select name="categorias" > 
                    <?php
                    $con = new mysqli("localhost", "root", "", "auralux");

                    $res = $con->query("select * from categorias");
                    while ($linha = $res->fetch_object()) {
                        $id = $linha->id;
                        $nome = $linha->nome;
                        if ($id == $categoria){
                            echo "<option value = '$id' selected> $nome </option>";
                        } else {
                             echo "<option value = '$id'> $nome </option>";
                        }
                    }
                    ?>
                </select> 
                <label for="descricao">Editar Descrição do Produto </label>
                <input type="text" id="descricao" name="descricao" value="<?=$descricao?>" required>   
            </div>
            <div class="form-group">

            <a href="listagem.php">
            <button type="submit">OK</button>


            </div>
       </form>
    
      
    

      


    </div>
    
</body>
</html>