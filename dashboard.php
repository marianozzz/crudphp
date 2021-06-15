<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('partials/head.php'); ?>

<title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card mt-4">
                <div class="card-header">
                    <h5>My Dashboard</h5>
                </div>
                <div class="card-body">
                    <p>Bienvenido estas conectado como: <a href="#"><?php echo $_SESSION['user']; ?></a></p>
                </div>
                <div class="card-footer">
                <h5> Copyright © </h5>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include ('partials/footer.php'); ?>
</html>