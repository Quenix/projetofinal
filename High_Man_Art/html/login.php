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

        <title> Central administrativa </title>
        <meta charset="uft-8">

    </head>

    <body>
        <div>
            <h1>Bem vindo, <?=$usuario?></h1>

            <a href="cadastro.php">

                <button> Cadastrar Cliente </button>

            </a>
            <p><br></p>
            <a href="relatorioClientesCadatrados.php">

                <button> Relatório de cliente cadastrados </button>

            </a>
            <p><br></p>
            <form method="post" action="logout.php">

                <input type="hidden" value="<?=$nome?>">
                <button type="submit">Logout</button>

            </form>
        </div>
    
    </body>
</html>
