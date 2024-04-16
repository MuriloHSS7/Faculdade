<?php
    if (isset($_COOKIE["usuario"])) {
        echo '<p> É necessario fazer o login para acessar o sistemas </p>';
        echo '<a href= "login.php"> Ir para o login </a>';
        
    }

?>