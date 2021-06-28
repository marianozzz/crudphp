<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">ZCODE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        
        <li class="nav-item">
        <?php if(isset($_SESSION['user'])){ ?>
         <a class="nav-link active" href="controllers/cerrar.php"> Cerrar Sesion </a>
        <?php } else { ?>
          <a class="nav-link active" href="login.php" tabindex="-1" aria-disabled="true">Login</a>
        <?php }?>
        </li>
      </ul>
    </div>
  </div>
</nav>