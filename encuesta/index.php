<!DOCTYPE html>
<html lang="es">
<head>
   <?php include ('../partials/head.php'); 
         include ('survey.php');
   ?>
    <title>Encuesta</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-header">
                        <h5>Encuesta</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST"> 
                        <?php
                         $survey = new Survey();
                         $showResults = false;

                         if(isset($_POST['lenguaje']))
                         {
                             $survey->setOptionSelected($_POST['lenguaje']);
                             $survey->vote();
                         }
                        ?>
                            <ul class="list-group"> 
                                <li class="list-group-item"><input type="radio" name="lenguaje" id="" value="PHP"> PHP</li>
                                <li class="list-group-item"><input type="radio" name="lenguaje" id="" value="JAVA"> JAVA</li>
                                <li class="list-group-item"> <input type="radio" name="lenguaje" id="" value="MYSQL"> MYSQL</li>
                                <li class="list-group-item"> <input type="radio" name="lenguaje" id="" value="C#"> C#</li>
                                <li class="list-group-item"><input type="radio" name="lenguaje" id="" value="JAVASCRIPT"> JAVASCRIPT</li>
                            </ul>
                            <input type="submit" value="VOTAR" class="btn btn-primary btn-sm mt-2">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>