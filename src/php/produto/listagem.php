<?php      
  
    $con = new mysqli("localhost", "root", "", "auralux");

    if ($con->connect_error) {
        die("Falha na conexão: " . $con->connect_error);
    }

 
    $res = $con->query("SELECT * FROM auralux.produtos");

    
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
    <title>Auralux - Produto Listagem</title>
    <link rel="stylesheet" href="../../css/listagem.css">
</head>  
<body>

    <div class="container">
<h1 class="options-header">Listagem de Produtos</h1>
        
<table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>

                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
        
                    foreach ($categorias as $obj) {
                        $id = $obj->id;
                        echo "<tr>";
                        echo "<td>" . $obj->nome . "</td>";
                        echo "<td>" . $obj->preco . "</td>";

                        echo "<td>
                                <a href='excluir.php?id=$id'>Excluir</a> |
                                <a href='editar.php?id=$id'>Editar</a>
                              </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
