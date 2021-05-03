<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Editar Usuario</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-header">
                        <h5>Editar Usuario</h5>
                    </div>
                    <div class="card-body">
                        <form action="UserController.php" method="post">

                          <?php include ('partials/form.php'); ?>

                            <input type="submit" value="Actualizar" class="btn btn-primary btn-sm mt-2">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>