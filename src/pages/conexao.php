<?php
    $server = "localhost";
    $user = "root";
    $pass = "senha123";
    $bd = "webdengue";

    if ( $conn = mysqli_connect($server, $user, $pass, $bd) ) {
        //echo "Conectado!";
    } else 
        echo "Erro!";
?>