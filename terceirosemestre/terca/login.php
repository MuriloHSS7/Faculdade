<?php
session_start();

define('HOST', 'localhost');
define('USER', 'root');
define('PASS','');
define('BASE', 'cadastro');

$conn = new mysqli(HOST, USER, PASS, BASE, 3306);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['usuario'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM usuario WHERE usuario = ?");
    $stmt -> bind_param("SS", $username, $password);
    $stmt -> execute();

    $resultado = $stmt->get_result();
    if($resultado->num_rows === 1){
        $_SESSION['user'] = $username;
        header("Location: index.php");
    } else {
        echo ("Usuário ou senha inválidos!");
    }

    $stmt->close();
    $conn->close();
}