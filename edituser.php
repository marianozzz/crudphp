<?php
include('UserController.php');

$id = $_GET['user'];

$user = edit($id);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('partials/head.php'); ?>
    <title>Editar Usuario</title>
</head>
<body>
    <div class="container">
    <p class="h2 mt-2">CRUD en PHP - Modificar usuario</p>
         <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-header">
                        <h5>Editar Usuario</h5>
                    </div>
                    <div class="card-body">
                        <form action="UserController.php" method="post" if-match="*">
                          <input type="hidden" name="_method" value="PUT">
                          <?php include ('partials/form.php'); ?>

                            <input type="submit" value="Actualizar" class="btn btn-primary btn-sm mt-2">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="card mt-4">
                    <div class="card-body">
                    <p> Recuperamos un usuario existente y cargamos sus datos en cada input para modificarlos.</p>
                    <p> El controlador de usuario tiene la responsabilidad de buscar y devolvernos los datos que necesitamos, al finalizar confirmamos la accion actualizando.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>