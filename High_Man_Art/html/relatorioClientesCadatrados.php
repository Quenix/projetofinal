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

        <title> Clientes Cadastrados </title>
        <meta charset="utf-8">

    </head>
    <body>
      
      <h1> Clientes Cadastrados </h1>

        <table>
            <tr>                
                <th>nome</th>
                <th>e-mail</th>
            </tr>
                <?php
                    $conexao = mysqli_connect('localhost','root','','highman');
                    
                    $query = "SELECT * FROM cliente ";
                    $resultado = mysqli_query($conexao, $query);
                    $res = mysqli_fetch_all($resultado);
                    $max = sizeof($res);

                    for($i=0; $i<$max; $i++){

                        echo "<tr>
                        <td>".$res[$i][1]."</td>
                        <td>".$res[$i][3]." </td>
                            </tr>";
                    }
                ?>

        </table>
        <a href="login.php">

                <button>Voltar</button>

        </a>
    </body>
</html> 