<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if ($usuario == "Murilo" && $senha == "123"){
    setcookie("usuario", $usuario);
    header('Location: Principal.php');
} else {
    echo "<p> Usuario e/ou senha inválidos </p>";
    echo "<a href=\"login.php\"> Fazer login </a>";
}
?>