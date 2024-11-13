<?php
$id = $_POST["id"];
$nome = $_POST["nome"];
$email= $_POST["email"];
$senha= $_POST["senha"];

$con = new mysqli ("localhost","root","", "auralux");
 $con-> query("update auralux.clientes set nome= '$nome' , email= '$email', senha= '$senha'  where id=$id");
 $con->close();

?>
<br>
<div class="container">
        <h1>Produto Alterado!</h1>
            <div class="form-group">
            <a href="listarusuario.php">Voltar</a>
            </a>            </div>
       </form>
<link rel="stylesheet" href="../../css/excluir_categoria.css">