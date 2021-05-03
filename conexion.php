<?php

function Conectar()
{
    $server = "sql204.epizy.com";
    $bd = "epiz_28517983_escuela";
    $user = "epiz_28517983";
    $pass = "AnSLbfHlP28FG";

    $conexion = new mysqli($server, $user, $pass, $bd);

    if($conexion->connect_error)
    die("Error en la conexion: ".$conexion->connect_errno."-".$conexion->connect_error);


    return $conexion;
}
?>
