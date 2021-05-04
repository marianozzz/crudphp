<?php
include ('UserController.php');
include ('User.php');
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
                        <a href="adduser.php" class="btn btn-secondary">Nuevo usuario</a>
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
                                        <td width="10px"><a href="edituser.php?user=<?php echo $user['id'];?>" class="btn btn-success btn-sm">Editar</a></td>
                                        <td width="10px">
                                        <form action="UserController.php" method="post">
                                        <input type="hidden" name="_method" value="delete">
                                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                                        </form>
                                       
                                        </a></td>
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