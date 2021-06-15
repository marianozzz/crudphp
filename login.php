<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
<?php include ('partials/head.php'); ?>

    <title>Inicio de Sesion</title>
</head>
<body>
<div class="container">

    <div class="row">
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header bg-success">
                    <h5>Iniciar sesion</h5>
                </div>
                    <div class="card-body">
               <!-- Inicio del fomulario -->       
                    <form action="LoginController.php" method="post">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <input type="submit" value="Iniciar Sesion" class="btn btn-success bt-sm mt-2">
                    </form>
                <!-- Fin del fomulario -->  
                    </div>
                    <div class="card-footer bg-dark">
                        <h5>pie pagina </h5>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <?php include('partials/footer.php'); ?>
=======
  <?php
  include('partials/head.php');
  ?>
</head>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-md-4">
                <div class="card mt-4">
                    <div class="card-header">
                         <h3>Login de usuario</h1>
                    </div>
                    <div class="card-body">
                        <form action="LoginController.php" method="post">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" required placeholder="ingrese su email">
                            </div>
                              <div class="form-group">
                                <label for="email">Contraseña</label>
                                <input type="password" name="password" class="form-control" required placeholder="password">
                            </div>

                            <input type="submit" value="Entrar" class="btn btn-primary mt-2">
                        </form>
                    </div><!-- Cierra el card-body -->

                    <div class="card-footer">
                    <h3>Footer login</h3>
                    </div>
                </div> <!-- Cierra el card -->
            </div>  <!-- Cierra el col -->
        </div><!-- Cierra el row -->
    </div><!-- Cierra el container -->
>>>>>>> 36439649fc3af72864707245382de318f4f93985
</body>
</html>