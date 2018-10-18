<?php 
    if(isset($_SESSION['usuario'])){

        header("Location: login.php");
        exit();
    };
?>    
<html>
    <head>

        <title> Login </title>
        <meta charset="utf-8">        

    </head>
    <body>

        <div>

            <H1> Login </H1>

                <form method="POST" action="entrar.php">
                        <label>Usuario:</label>
                        <input type="text" name="usuario">

                        <label>Senha:</label>
                        <input type="password" name="senha">

                        <button type="submit">Entrar</button>

                </form>

        </div>

        <?php if(isset($_GET['login'])): ?>

        <div>

            <p> Senha Inválida! </p>

        </div>

        <?php endif ?>

    </body>
</html>