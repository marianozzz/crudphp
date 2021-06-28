<?php
/** Incluimos la conexion a base de datos */
include ('conexion.php');

/**Llamamos a la funcion conectar y el resultado lo guardamos en la variable $conexion */
$conexion= Conectar();

/**Iniciar que voy a utilizar variables de session */
session_start();


/* Validados que se haya ejecutado el metodo post*/
if(isset($_POST))
    {

    /** Si el metodo post da true (verdadero) entonces 
     *  pasamos la inforamcion a las variables
     * $email y $pass y luego las mostramos para verificar
     */
        
        $email = $_POST['email'];

        /**Encriptamos el password */
        $pass = md5($_POST['password']);

        /* Guardamos la consulta a la BD en una varible verificamos que exita el email*/
        $contsulta = "select *from users where email = '$email'";
        /*hacemos la consulta y la respuesta la guardamos en una variable */
        $respuesta = mysqli_query($conexion, $contsulta);
       
        /*si la respuesta es mayor a 0 es por que encontro un registro */
        if(mysqli_num_rows($respuesta) > 0)
        {
            /*creamos un array asociativo y lo guardamos en la variable data */
            $data = mysqli_fetch_array($respuesta);
            /*guardamos el pass en una variable */
            $password_hash = $data['password'];
            
            /*Si coinciden los pass entonces se crea la session de usuario */
            if($pass == $password_hash)
            {
                $_SESSION['user'] = $data['name'];
                $_SESSION['email'] = $data['email'];
                /*redireccionamos al dash del usuario */
                header('location:../dashboard.php');
            }
            else
            {
                /*si falla el login redireccion a la pagina de login */
                header('location:../login.php');
            } 

        }
        else
        {
            header('location:../login.php');
        } 

    }
else
    {
        header('location:../login.php');
    }

?>