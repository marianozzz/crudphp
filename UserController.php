<?php
include ('conexion.php');

if(!empty($_POST))
{
    $conexion =Conectar();
    store($_POST["nombre"],$_POST["apellido"],$conexion);
}

function index()
{
    $conexion =Conectar();
    $consulta = "select *from users";
    $resultado = mysqli_query($conexion, $consulta);

    return $resultado;
}

function store($name, $lastname, $conexion)
{
    $consulta = "insert into users (name, lastname) values ('$name','$lastname')";
    $resultado = mysqli_query($conexion, $consulta);
   // header('Location: http://apptec3.infinityfreeapp.com/'); 
      header('location:http://localhost/crudphp/');
}

function edit($id)
{
    //code...
}

function update($id)
{
    // code..
}

function destroy($id)
{
    //code..
}

?>