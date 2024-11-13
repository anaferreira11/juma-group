<head>
<link rel="stylesheet" href="../../css/listagem.css"> 
</head>
<body>

    <div>
        <table class="tabela">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $con = new mysqli("localhost", "root", "", "auralux");

                    $dad = $con->query("SELECT * FROM clientes order by nome");

                    while ($linha = $dad->fetch_object()){
                        echo "<tr>\n";
                        echo "<td>" . $linha->nome . "</td>\n";
                        echo "<td>" . $linha->email . "</td>\n";
                        echo "<td>\n";
                        echo "<a href='editarusuario.php?id=$linha->id'>Editar</a>";
                        echo "<a href='excluirusuario.php?id=$linha->id'>Excluir</a>";
                        echo "</td>\n";
                        echo "</tr>\n";
                    }

                    $con->close();
                ?>
            </tbody>
        </table>
    </div> 
</body>

