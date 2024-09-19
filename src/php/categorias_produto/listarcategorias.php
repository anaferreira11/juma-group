<h1>
    Listagem de Categorias
</h1>
<?php
$con = new mysqli ("localhost","root", "", "auralux");
$res = $con-> query("select * from auralux.categorias");
echo"<table border =1 >";
echo"<thead>";
echo"<tr>";
echo"<th> id</th>";
echo"<th> nome </th>";
echo"<th colspan='2'> Opções </th>";
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
    echo "<a href='excluirusuario.php?id=$id'> Excluir </a>";
    echo"</td>";
    echo"<td>";
    echo "<a href='editar.php?id=$id'> Editar </a>";
    echo"</td>";


    echo"<td>";
    echo"<tr>";
}
echo"</tbody>";
echo "</table>";
$con ->close();
?>