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
    <meta name="description" content="Auralux - Produtos de Skincare de Luxo">  
    <title>Auralux | Produtos de Skincare</title>  
    <link rel="stylesheet" href="../../css/descricao.css">
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

        <div class="products">
            <?php 
                echo "<img src='https://m.media-amazon.com/images/I/41LtiyDcE9L.__AC_SY445_SX342_QL70_ML2_.jpg' />";       
                echo "<div class='product'>";
                echo "<h1>" ."Descubra a beleza que realça sua essência: produtos de cosmésticos feitos para cuidar de você com amor e qualidade! ". "</h1>";
                echo "<h2>" .$nome. "</h2>";
                echo "<p>Preço: R$ " . number_format($preco, 2, ',', '.') . "</p>";
                echo "<h4>"."Descrição:"."</h4>";
                echo "<h5>" .$descricao. "</h5>";
                echo "<a href='#'>";
                echo "<button type='button'>Comprar</button>";
                echo "</a>\n";
                echo "<a href='#'>";
                echo "<button type='button'>Adicionar ao carrinho</button>";
                echo "</a>";
                echo "</div>";

           
            ?>
        </div> 
    </section>
</body>
</html>