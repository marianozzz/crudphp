
<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
  include('partials/head.php');
?>
    <title>Dashboard</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8">
        <form action="DestroySession.php" method="post">
            <input type="submit" value="Cerrar Session" class="btn btn-success mt-4 btn-sm">
        </form>
        
            <div class="card mt-4">
                <div class="card-header">
                    <h2>My Dashboard</h2>
                </div>
                <div class="card-body">
                    <p>Bienvenido <?php echo $_SESSION['name']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

    
</body>
</html>
