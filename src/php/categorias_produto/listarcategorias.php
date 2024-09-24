<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">

    <title>Auralux - Categoria do Produto listagem: </title>
    <link rel="stylesheet" href="../css/categoria.css">




</head>  
<body>
    <table border="1px">
        <thead>
            <tr>
                <th>nome</th>
            </tr>
        </thead>
        <tbody>
            <?php       
                $con = new mysqli ("localhost","root", "", "auralux");
                $res = $con-> query("select * from auralux.categorias");
                while($obj= $res -> fetch_object()){
                    $id= $obj->id;
                    echo "<tr>";
                    echo"<td>";
                    echo $obj->nome;
                    echo"</td>";
                    echo"<td>";
                    echo "<a href='excluir_categoria.php?id=$id'> Excluir </a>";
                    echo"</td>";
                    echo"<td>";
                    echo "<a href='editar_categoria.php?id=$id'> Editar </a>";
                    echo"</td>";
                
                
                    
                    echo"</tr>";
                }
                $con ->close();
            ?>
        </tbody>
    </table>
</body>


