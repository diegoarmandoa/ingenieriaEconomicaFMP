<?php
    //mysql://root:@:7968/railway
    $host = "containers-us-west-95.railway.app";
    $user = "root";
    $clave = "Xp7HReAzuUU9X5Itiwak";
    $bd = "railway";
    $port = 7968;

    $conexion = mysqli_connect($host,$user,$clave,$bd,$port);
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }

    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");

    mysqli_set_charset($conexion,"utf8");


?>
