<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ler cookie</title>
</head>
<body>
    <h1>Ler cookie</h1>

    <?php
    echo"<p>Valor do cookie: ".$_COOKIE["AulaPHP"]."</p>";
    echo"<p>Valor do cookie: ".$_COOKIE["dt_acesso"]."</p>";
    ?>
</body>
</html>