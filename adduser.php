<!DOCTYPE html>
<html lang="es">
<head>
    <?php include ('partials/head.php'); ?>
    <title>Agregar Nuevo Usuario</title>
</head>
<body>
    <div class="container">
    <p class="h2 mt-2">CRUD en PHP - Alta de usuario</p>
    <a href="index.php" class="btn btn-info btn-sm">Inicio</a>
    <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-body">
                        <form action="UserController.php" method="post">
                        <input type="hidden" name="_method" value="insert">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Ingrese un nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Apellido</label>
                            <input type="text" name="apellido"  class="form-control" placeholder="Ingrese apellido" required>
                        </div>

                        <input type="submit" value="Agregar usuario" class="btn btn-primary btn-sm mt-2">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="card mt-4">
                    <div class="card-body">
                    <p> Esta es la opcion de alta en este form ingresamos un nuevo usuario, la peticion sera procesada por el controlador de usuario.</p>
                    <p> Si la operacion fue exitosa retornara al index con el usuario nuevo en la lista.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('partials/footer.php'); ?>
</body>
</html>