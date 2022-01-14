<?php
require_once("conexion.php");

$titulo = $_POST['titulo'];
$fecha_creacion = $_POST['fecha_creacion'];
$duracion = $_POST['duracion'];
$disponibilidad = $_POST['estatus'];
$sinopsis = $_POST['sinopsis'];
$costo = $_POST['costo'];
$productora = $_POST['productora'];
$cod_pelicula = $_POST['cod_pelicula'];
/* $poster = $_FILES['poster']['name']; */

/* $tipo_archivo = array("image/jpg", "image/png", "image/jpeg"); */

/* if(in_array($_FILES['poster']['type'], $tipo_archivo))
{
    $ruta = "../images/peliculas/". $_FILES['poster']['name'];
    move_uploaded_file($_FILES["poster"]["tmp_name"], $ruta);
} */

$res = mysqli_query($con, "UPDATE peliculas SET titulo = '$titulo',
                                                fecha_creacion = '$fecha_creacion',
                                                duracion = '$duracion',
                                                disponibilidad = '$disponibilidad',
                                                sinopsis = '$sinopsis',
                                                costo = '$costo',
                                                productora = '$productora'
                                            WHERE cod_pelicula = '$cod_pelicula'");

if(mysqli_affected_rows($con)>0)
    $r ="Título actualizado correctamente.";
else
    $r = "Algo salió mal... :c";

header("Location: catalogo.php?r=$r");
?>