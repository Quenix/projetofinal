<?php 
    session_start();
    if(!isset($_SESSION['usuario'])){

        header("Location: adm.php");
        exit();
    };
    $usuario = $_SESSION['usuario'];
?>
<html>

    <head>
        <title>Deletar Cadastro </title>
        <meta charset='utf-8'>
    </head>
    <body>
        <form action="deletarCliente.php" method="POST" id="atualizar">
                <?php

                    $conexao = mysqli_connect('localhost','root','','highman');
                        
                    $query = "SELECT * FROM cliente where cliente <> ''";

                    $res = mysqli_query($conexao, $query);

                    $resultado = mysqli_fetch_all($res);

                ?>
                <select class="cli" name="cliente" form="deletar" required="true">
                        <option disabled selected value></option>
                            <?php

                            $max = sizeof($resultado);
                            
                            for($i=0; $i<=$max-1;$i++){

                                echo "<option value=".$resultado[$i][0].">".$resultado[$i][1]."</option>";

                            }
                            ?>
                </select>
                <input class="btn-cadfunc" type="submit" value="Atualizar Status">
        </form>
    </body>
</html>
