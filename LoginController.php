<?php
session_start();

$email = $_POST['email'];
$pass = md5($_POST['password']);


/*Creo las variables de session */

$_SESSION['email'] = $email;
$_SESSION['name']  = "PAKO";


header('Location:/crudphp/home.php'); 

?>