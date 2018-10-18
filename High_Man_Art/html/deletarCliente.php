<?php 
    session_start();
    if(!isset($_SESSION['usuario'])){

        header("Location: adm.php");
        exit();
    };
    $usuario = $_SESSION['usuario'];
    $cliente = $_POST['cliente'];







?>
