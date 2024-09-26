<?php      
  
    $con = new mysqli("localhost", "root", "", "auralux");

    if ($con->connect_error) { //tela de erro
        die("Falha na conexão: " . $con->connect_error);
    }

 
    $res = $con->query("SELECT * FROM auralux.categorias");//referente ao select do banco de dados

    
    $categorias = [];
    while ($obj = $res->fetch_object()) {
        $categorias[] = $obj;
    }

    
    $con->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Auralux - Categoria do Produto Listagem</title>
    <link rel="stylesheet" href="../../css/listagem.css">
</head>  
<body>

    <div class="container">
        <h1 class="options-header">Listagem de Categorias</h1>
       
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Exibindo os resultados
                    foreach ($categorias as $obj) {
                        $id = $obj->id;
                        echo "<tr>";
                        echo "<td>" . $obj->nome . "</td>";
                        echo "<td>
                                <a href='excluir_categoria.php?id=$id'>Excluir</a> |
                                <a href='editar_categoria.php?id=$id'>Editar</a>
                              </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
