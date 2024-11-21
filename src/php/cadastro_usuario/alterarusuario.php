<?php
$id = $_POST["id"];
$nome = $_POST["nome"];
$email= $_POST["email"];


$con = new mysqli ("localhost","root","", "auralux");
 $con-> query("update auralux.clientes set nome= '$nome' , email= '$email' where id='$id' ");
 $con->close();

?>
<br>
<div class="container">
        <h1>Usuario  Alterado!</h1>
            <div class="form-group">
            <a href="listarusuario.php">Voltar</a>
            </a>            </div>
       </form>
<link rel="stylesheet" href="../../css/excluir_categoria.css">