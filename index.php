<?php
include ('UserController.php');

$users = index();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <title>Tablas con Bootstrap</title>
</head>
<body>
    <div class="container">
        
        <div class="row">
            
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-header">
                        <a href="adduser.php" class="btn btn-secondary">Agregar nuevo usuario</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Lastname</th>
                                    <th colspan="2"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($users as $user){ ?>
                                <tr>
                                        <td><?php echo $user['id']; ?> </td>
                                        <td><?php echo $user['name']; ?> </td>
                                        <td><?php echo $user['lastname']; ?> </td>
                                        <td width="10px"><a href="edituser.php" class="btn btn-success btn-sm">Editar</a></td>
                                        <td width="10px"><a href="" class="btn btn-danger btn-sm">Eliminar</a></td>
                                </tr>
                                <?php } // cierro el foreach?>
                            </tbody>
                        </table>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</body>
</html>