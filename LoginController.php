<?php
/**Iniciar que voy a utilizar variables de session */
session_start();


/* Validados que se haya ejecutado el metodo post*/
if(isset($_POST))
{

/** Si el metodo posto da true (verdadero) entonces 
 *  pasamos la inforamcion a las variables
 * $email y $pass y luego las mostramos para verificar
 */
    
    $email = $_POST['email'];

    /**Encriptamos el password */
    $pass = md5($_POST['password']);
    


    $_SESSION['user'] = "Mariano";
    $_SESSION['email'] = $email;

    header('location:dashboard.php');

}
else
{
    header('location:login.php');
}

?>