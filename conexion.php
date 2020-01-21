<?php
    $host = "localhost";
    $basededatos = "listas";

    $lista ="listas";

    $conexion = new mysqli($host, $basededatos);

    if ($conexion->connect_erno){
        echo "Nuestro sitio experimenta fallos...";
        exit();
    }

?>