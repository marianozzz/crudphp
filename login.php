<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include('partials/head.php');
  ?>
</head>
<body>
<?php include ('partials/navbar.php'); ?>
    <div class="container"> 
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="card mt-4 mb-4">
                    <div class="card-header">
                         <h4>Iniciar Sesion</h4>
                    </div>
                    <div class="card-body">
                        <form action="controllers/LoginController.php" method="post">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" required placeholder="Corre electronico">
                            </div>
                              <div class="form-group">
                                <label for="email">Contraseña</label>
                                <input type="password" name="password" class="form-control" required placeholder="Contraseña">
                            </div>

                            <input type="submit" value="Entrar" class="btn btn-primary mt-2">
                        </form>
                    </div><!-- Cierra el card-body -->

                    <div class="card-footer">
                         <h5><a  class="nav-link" href="#">Crear una cuenta</a> </h5>
                    </div>
                </div> <!-- Cierra el card -->
            </div>  <!-- Cierra el col -->
        </div><!-- Cierra el row -->
    </div><!-- Cierra el container -->

    <?php include('partials/footer.php'); ?>
</body>
</html>