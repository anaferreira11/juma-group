<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Auralux - Produtos de Skincare de Luxo">  
    <title>Auralux | Produtos de Skincare</title>  
    <link rel="stylesheet" href="../css/produto.css">
    <style>
        
    </style>
</head>
<body>
    <header>
        <h1>Auralux</h1>
        <p>Skincare de Luxo para uma Pele Radiante</p>  
        <div>
            <a href="..\html\carrinho.html">🛒</a>  
        </div>
    </header>

    <section>
        <h2>Transforme sua Pele com Auralux</h2>
    </section>

    <section>
        <h2>Nossos Produtos</h2>
        <div class="products">
            <?php
          
            $con = new mysqli("localhost", "root", "", "auralux");

            
            if ($con->connect_error) {
                die("Falha na conexão: " . $con->connect_error);
            }

            $res = $con->query("SELECT * FROM produtos ORDER BY nome");

           
            while ($linha = $res->fetch_object()) {
                echo "<div class='product'>";
                echo "<img src='https://m.media-amazon.com/images/I/41LtiyDcE9L.__AC_SY445_SX342_QL70_ML2_.jpg' />";
                echo "<h3>" . $linha->nome . "</h3>";
                echo "<p>Preço: R$ " . number_format($linha->preco, 2, ',', '.') . "</p>";
                echo "<input type='number' value='1' min='1' aria-label='Quantidade'>";
                echo "<a href='../html/carrinho.html'>";
                echo "<button type='button'>COMPRAR</button>";
                echo "</a>";
                echo "</div>";
            }

           
            $con->close();
            ?>
        </div> 
</body>
</html>
