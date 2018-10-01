<?php


require ('ClearPar.php');
require ('ChangeString.php');
require ('CompleteRange.php');

$p1 = new  ChangeString();
$p2 = new  CompleteRange();
$obj = new ClearPar();


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title></title>
</head>
<body>

<!-- Begin page content -->
<main role="main" class="container">
    <h1 class="mt-5">Parte 1</h1>
    <p class="lead">...</p>


    <div class="card">
        <div class="card-body">
            <h2>Problema 01</h2>
            <?php


            echo '<br>';
            echo $p1->build('avzzdaasdxxas123ads');
            echo '<br>';
            echo $p1->build(' asd sTY12dasd 3ads');
            echo '<br>';
            echo $p1->build('341 46 41 a');
            echo '<br>';
            echo $p1->build('a 0 cx.1ZApO');
            echo '<br>';
            ?>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <h2>Problema 02</h2>
            <?php

            echo '<br>';


            foreach ($p2->build([1, 3, 22 , 69]) as $row){
                echo $row;
                echo '<br>';
            }
            ?>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <h2>Problema 03</h2>
            <?php

            echo $obj->build(')()))())');
            echo '<br>';
            echo $obj->build(')()))()))))');
            echo '<br>';
            echo $obj->build(')()))())))');
            echo '<br>';
            echo $obj->build(')()))())))()');

            ?>
        </div>
    </div>
</main>
<br>
<footer class="footer" style="padding-bottom: 50px">
    <div class="container mx-auto" style="width: 200px;">
        Percy Vidal © <?= date('Y')?>
    </div>
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
