<?php
    if (!isset($_POST['usuario'])){

        header("Location: login.php");
        exit();

    }

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senha = md5($senha);


$conexao = mysqli_connect('localhost','root','','highman');

$query = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'";

$buscar = mysqli_query($conexao, $query);

$dados = mysqli_fetch_assoc($buscar);

if ($dados != null){

    header("Location: login.php"); 
    session_start();
    $_SESSION['usuario'] = $dados['usuario'];
    $_SESSION['senha'] = $dados['senha'];
    exit();


}else{

    header("Location: adm.php?login=0"); 
    exit();


}

 ?>