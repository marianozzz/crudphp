<?php
include ('controllers/UserController.php');
$users = index();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include ('partials/head.php'); ?>
    <title>CRUD con PHP y Bootstrap CSS</title>
</head>
<body>
<?php include ('partials/navbar.php'); ?>

<main class="flex-shrink-0">
    <div class="container">
         <p class="h2 mt-2">CRUD en PHP</p>
         <form action="controllers/UserController.php" method="POST">
         <input type="hidden" name="_method" value="reset" id="">
         <input type="submit" value="Resetear BD" class="btn btn-success btn-sm">
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
                                        </td>
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
            <div class="col-md-6">
                <div class="card mt-4 mb-4">
                    <div class="card-body">
                        <p>Para descargar el codigo de este ejemplo podes hacerlo desde github:</p>
                        <p><i class="fab fa-github"> <a href="https://github.com/marianozzz/crudphp" target="_blank"> Codigo </a></i></p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <p>Si te gusto este ejemplo podes apoyarme invitandome un cafecito</p> 
                        <a href='https://cafecito.app/zcode' rel='noopener' target='_blank'>
                        <img srcset='https://cdn.cafecito.app/imgs/buttons/button_2.png 1x, https://cdn.cafecito.app/imgs/buttons/button_2_2x.png 2x, https://cdn.cafecito.app/imgs/buttons/button_2_3.75x.png 3.75x' src='https://cdn.cafecito.app/imgs/buttons/button_2.png' alt='Invitame un café en cafecito.app' />
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mt-4 mb-4">
                    <div class="card-body">
                    
                                <!--Start rollercoin.com code-->
                                <a href="https://rollercoin.com/?r=kqacq9wd">
                                <img src="images/w300h250.gif" alt="300h250"/>
                                </a>
                                <!--End rollercoin.com code-->
                            
                    </div>
                </div>
            </div>
        </div>
</div>
</main>
<?php include('partials/footer.php'); ?>
</body>
</html>