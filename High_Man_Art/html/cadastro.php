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

        <title> Cadastro de Cliente </title>
        <meta charset="uft-8">

    </head>
    <body>

        <h1>Tela de cadastro de Cliente para acesso ao site </h1>
        

        <form method="post" action="cadastrarCliente.php">

            <label>Cliente:</label>
            <input type="text" name="cliente">

            
            <label>E-mail:</label>
            <input type="text" name="email">

            
            <label>Senha:</label>
            <input type="password" name="senha">

            <button type="submit" action="cadastrarCliente"> Cadastrar </button>
        
        </form>
        <a href="login.php">

                <button>Voltar</button>

        </a>
    </body>
</html>
