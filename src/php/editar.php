<meta charset="UTF-8">


<?php
$id =$_GET["id"];
include("conexao.php");
$res = $con-> query("select * from bd_receita.usuarios where id=$id");
if($obj= $res->fetch_object()){
    $nome=$obj->nome;
    $email=$obj->email;
    $senha=$obj->senha;
}
$con -> close();
?>
