<?php
    session_start();

    if(empty($_POST) or (empty($_POST['nome']) or (empty($_POST['nome'])))){
        echo "erro algo de errado";
    }
    $con = new mysqli ("localhost","root", "", "auralux");

    $senha = md5($_POST["senha"]);
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    

    $res = $con->query("SELECT * FROM clientes where nome =  '$nome' and email = '$email' and senha = '$senha'");
    $linha1 = $res->fetch_object();
 

    $qtd = $res->num_rows;
    if($qtd > 0){
        $_SESSION["usuario"] = $nome;
        $_SESSION["nome"] = $linha1->nome;
        print "<script>location.href='../html/deu_certo.html';</script>";
    }else{
        echo "\tUsuario ou senha invalidos!";
    
    }
    
?>
