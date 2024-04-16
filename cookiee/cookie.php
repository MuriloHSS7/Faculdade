<?php
    $dt_validade = time() + 3600*24; // duração de 24 horas a partir da criação
    $dt_acesso - time() + 3600*24;
    setcookie("AulaPHP", "Terça", $dt_validade);
    setcookie("dt_acesso", $dt_acesso, $dt_acesso + 3600*24);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando um cookie</title>
</head>
<body>
    
    <h1>Criando um cookie</h1>
    <?php
    $i = 0;
    while ($i<10) {
        echo"<p>sou bonito, sou goxtoso, jogo bola e danço</P>";
        $i++; // $i = $i + $i 
    }

    ?>
</body>
</html>