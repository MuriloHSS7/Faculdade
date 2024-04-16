<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>par</title>
</head>
<body>
    
    <h1>Função para veriricar se o número é par</h1>

    <?php
    function par($n){
        if ($n % 2 ==0) {
            return true;
        } else {
            return false;
        }
    }

    for ($i=0; $i < 20; $i++){
        echo "<p> $i é par? ";
        if (par($i)){
            echo "sim<p>";
        } else {
            echo "não<p>";
        }
    }

    ?>




</body>
</html>