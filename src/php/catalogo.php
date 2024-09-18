<h1>
    Listagem de usuários
</h1>
<?php
$con = new mysqli ("localhost","root", "", "01_bd");
$res = $con-> query("select * from 01_bd.categorias");
echo"<table border =1 >";
echo"<thead>";
echo"<tr>";
echo"<th> id </th>";
echo"<th> nome </th>";
echo"<th> preco </th>";

echo"</tr>";
echo"<thead>";
echo"<tbody>";
while($obj= $res -> fetch_object()){
    $id= $obj->id;
    echo "<tr>";
    echo"<td>";
    echo $obj->id;
    echo"</td>";
    echo"<td>";
    echo $obj->nome;
    echo"</td>";
    echo"<td>";
    echo $obj->preco;
    echo"</td>";
    echo"<td>";
    echo"<tr>";
}
echo"</tbody>";
echo "</table>";
$con ->close();
?>