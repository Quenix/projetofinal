<?php
session_start();
if(!isset($_SESSION['usuario'])){

    header("Location: adm.php");
    exit();
};
$usuario = $_SESSION['usuario'];

$cliente = $_POST['cliente'];
$senha = $_POST['senha'];
$senha = MD5($_POST['senha']);
$email = $_POST['email'];

$conexao = mysqli_connect('localhost','root','','highman');

$query = "INSERT INTO cliente (cliente, senha, email) VALUES ('$cliente','$senha','$email')";

$inserir = mysqli_query($conexao,$query);

header("Location: cadastro.php");

?>