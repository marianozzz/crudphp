<!DOCTYPE html>
<html lang="en">
<head>
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
</body>
</html>