<?php

session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.html");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display home</title>
    <style>
        body{
            background-color: aqua;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>

    <h1>Displays home and System</h1>
    <h2>Welcome(a): <?php echo $_SESSION['user'];?> </h2>
    <a href="logout.php">Sair</a>

</body>

</html>