<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "renta";
    /*Mysqli*/
    $con = mysqli_connect($servername, $username, $password, $database);
    if(mysqli_connect_errno())
        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
?>