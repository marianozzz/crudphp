<?php
include ('conexion.php');
<<<<<<< HEAD
if($_POST)
{
    if(!empty($_POST['_method'] && $_POST['_method'] == 'insert'))
    {
        $conexion =Conectar();
        store($_POST["nombre"],$_POST["apellido"],$conexion);
    }

    if(!empty($_POST['_method'] && $_POST['_method'] == 'PUT'))
    {
        $conexion =Conectar();
        $name = $_POST['nombre'];
        $lastname = $_POST['apellido'];
        $id = $_POST['id'];
        update($id, $name, $lastname, $conexion);
=======

if($_POST)
{

    if(!empty($_POST['_method'] && $_POST['_method'] == 'insert'))
    {
        $conexion =Conectar();
        store($_POST["nombre"],$_POST["apellido"],$conexion);
    }
    if(!empty($_POST['_method'] && $_POST['_method'] == 'PUT'))
    {
        $name = $_POST['nombre'];
        $lastname = $_POST['apellido'];
        $id = $_POST['id'];
        update($id, $name, $lastname);
>>>>>>> 36439649fc3af72864707245382de318f4f93985
    }
    if(!empty($_POST['_method'] && $_POST['_method'] == 'delete'))
    {
        $conexion = Conectar();
        $id = $_POST['id'];
        destroy($id, $conexion);
    }
<<<<<<< HEAD
=======

    if(!empty($_POST['_method'] && $_POST['_method'] == 'reset'))
    {
    
        resetbd();
    }

}
>>>>>>> 36439649fc3af72864707245382de318f4f93985

    if(!empty($_POST['_method'] && $_POST['_method'] == 'reset'))
    {
        resetbd();
    }
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
    //header('Location: http://apptec3.infinityfreeapp.com/'); 
      header('location:http://localhost/crudphp/');
}

function edit($id)
{
   $conexion =Conectar();
   /* Uso el select where ... where lo utilizo para filtrar de a acuerdo a una condicion*/
   $consulta = "select *from users where id = $id";
   $resultado = mysqli_query($conexion, $consulta);
   
   return $resultado;
    
}

function update($id, $name, $lastname, $conexion)
{
   
    $consulta ="update users set name = '$name', lastname = '$lastname' where id = $id";   
    $resultado = mysqli_query($conexion, $consulta);
    header('Location: http://apptec3.infinityfreeapp.com/'); 
}

function destroy($id,$conexion)
{
    
    $consulta = "delete from users where id = $id";
    $resultado = mysqli_query($conexion, $consulta);
     header('Location: http://apptec3.infinityfreeapp.com/'); 
   // header('location:http://localhost/crudphp/');
}

function resetbd()
{
    $conexion =Conectar();
    $consulta = "TRUNCATE TABLE users";
    mysqli_query($conexion, $consulta);
    header('Location: http://apptec3.infinityfreeapp.com/'); 
}

?>