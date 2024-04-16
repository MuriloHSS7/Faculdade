<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula do dia 26/03</title>
</head>
<body>
    
    <?php
    
    function incrementa ($variavel, $valor){
        $variavel += $valor;
        echo "<p> Dentro de Incrementa: $variavel </p>";
        return $variavel;
    }

    $a = 10;
    echo '<br> retorno da função: '. incrementa($a,20);
    echo '<br>'.$a;
    ?>
</body>
</html>