<?php
include ('UserController.php');
$users = index();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include ('partials/head.php'); ?>
    <title>CRUD con PHP y Bootstrap CSS</title>
</head>
<body>
<main class="flex-shrink-0">
    <div class="container">
         <p class="h2 mt-2">CRUD en PHP</p>
         <hr>
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
            <div class="col-md-6 ">
                <div class="card mt-4">
                    <div class="card-body">
                    <p> Un CRUD (Create, Read, Update, Delete) es un acrónimo para las maneras en las que se puede operar sobre información almacenada. Es un nemónico para las cuatro funciones del almacenamiento persistente.</p>
                    <p> Este es un ejemplo sencillo realizado en PHP, utilizando Bootstrap CSS.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4 mb-4">
                    <div class="card-body">
                        <p>Para descargar el codigo de este ejemplo podes hacerlo desde github:</p>
                        <p><i class="fab fa-github"> <a href="https://github.com/marianozzz/crudphp "> Codigo </a></i></p>
                    </div>
                </div>
            </div>
        </div>
</div>
</main>
<?php include('partials/footer.php'); ?>
</body>
</html>