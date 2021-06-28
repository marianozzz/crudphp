<?php

function Conectar()
{
    $server = "localhost";
    $bd = "escuela";
    $user = "root";
    $pass = "";

    $conexion = new mysqli($server, $user, $pass, $bd);

    if($conexion->connect_error)
    die("Error en la conexion: ".$conexion->connect_errno."-".$conexion->connect_error);


    return $conexion;
}
?>
