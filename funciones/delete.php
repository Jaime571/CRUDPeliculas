<?php 
include_once("conexion.php");

$cod_pelicula = $_GET['cod_pelicula'];
$res = mysqli_query($con, "DELETE FROM peliculas where cod_pelicula = '$cod_pelicula'");

    if(mysqli_affected_rows($con)>0)
        $r= "El título se eliminó de manera correcta";
    else
        $r= "Algo salió mal";

header("Location: catalogo.php?r=$r");

?>