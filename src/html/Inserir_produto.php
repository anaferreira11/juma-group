<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auralux - Inserir Produto</title>
    <link rel="stylesheet" href="../css/Inserir_produto.css">




</head>
<body>
    <div class="container">
        <h1>Inserir Produto</h1>
        <form action="../php/produto/salvar.php" method="post">
            <div class="form-group">
                <label for="nome">Nome do Produto </label>
                <input type="text" id="nome" name="nome" required>
                
            </div>
            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="text" id="preco" name="preco" required>
            </div>
       <br>
       <label for="categoria">Categoria</label>
       <br>
       
            <div class="campo">
                <select name="categoria">

                <?php


                    $con = new mysqli ("localhost","root", "", "auralux");

                    $res = $con-> query("select * from categorias");
                    while($linha= $res -> fetch_object()){

                        $id = $linha->id;
                        $nome = $linha->nome;

                        echo "<option value='$id'>$nome</option>";

                    }
                    $con -> close();
                ?>

                </select>
            </div><br>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" id="descricao" name="descricao" required>
            </div>

            <div class="form-group">
            <br>
                <button type="submit">Adicionar Produto</button>
            </div>
        </form>


    </div>
    
</body>
</html>