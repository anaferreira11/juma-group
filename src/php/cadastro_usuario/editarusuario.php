<meta charset="UTF-8">


<?php
$id =$_GET["id"];
$con = new mysqli("localhost", "root", "", "auralux");
$res = $con-> query("select * from clientes where id=$id");
if($obj= $res->fetch_object()){
    $nome=$obj->nome;
    $email=$obj->email;
    $senha=$obj->senha;
}
$con -> close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auralux -    Editar Usuarios</title>
    <link rel="stylesheet" href="../../css/cadastro.css">




</head>
<body>
    <div class="container">
        <h1>Editar usuario</h1>
        <form action="alterarusuario.php" method="post">
            <div class="form-group">
            <label >
           
            <input type="hidden" name="id" value="<?=$id?>">
        </label>
        <br>
                <label for="name">Nome do usuario </label>
                <input type="text" id="nome" name="nome" value="<?=$nome?>" required>           
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email"  value="<?=$email?>"required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" value="<?=$senha?>" required>
                </div>
            
            <div class="form-group">
                <button type="submit">Salvar Alterações</button>
            </div>
       </form>
    
      


    </div>
    
</body>
</html>