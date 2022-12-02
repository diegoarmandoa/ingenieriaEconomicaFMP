<?php
    //mysql://root:@:7968/railway
    $host = $_ENV["DB_HOST"];
    $user =  $_ENV["DB_USER"];
    $clave =  $_ENV["DB_CLAVE"];
    $bd =  $_ENV["DB_NAME"];
    $port =  $_ENV["DB_PORT"];

    $conexion = mysqli_connect($host,$user,$clave,$bd,$port);
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }

    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");

    mysqli_set_charset($conexion,"utf8");


?>
