<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Auralux - Produto Listagem</title>
    <link rel="stylesheet" href="../../css/listagem.css"> 
</head>  
<body>

        <h1 class="options-header">Listagem de Produtos</h1>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $con = new mysqli("localhost", "root", "", "auralux");

                    $res = $con->query("Select produtos.*,categorias.nome as nome_categoria 
                    from produtos inner join categorias on produtos.categoria = categorias.id");

                    while ($linha = $res->fetch_object()) {
                        echo "<tr>";
                        echo "<td>". $linha->nome . "</td>";
                        echo "<td>". $linha->preco. "</td>";
                        echo "<td>". $linha->nome_categoria .  "</td>";
                        echo "<td>";
                        echo "<a href='editar.php?id=$linha->id'> editar </a>";
                        echo "<a href='excluir.php?id=$linha->id'> excluir </a>";
                        echo "</td>";
                        echo "</tr>";
                    }

                    $con->close();
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
