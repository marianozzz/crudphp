<!DOCTYPE html>
<html lang="en">
<head>
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
</body>
</html>