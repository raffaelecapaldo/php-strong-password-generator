<?php
session_start();
if (empty($_SESSION['generatePwd']) || strlen($_SESSION['generatePwd']) < 8 || strlen($_SESSION['generatePwd']) > 64) { //Se non c'è una pwd o è minore di otto caratteri, torna alla index
    header('Location: ./index.php');
}
$generatedPwd = $_SESSION['generatePwd']; //recupera pwd da array session



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>La tua password!</title>
</head>

<body>
    <header>
        <h1 class="text-center mb-3">Password generata!</h1>

        <div id="generated" class="container d-flex flex-column align-items-center p-2">
            <p class="m-0 text-center">La tua password è stata generata, conservala bene, non potrai più recuperarla!</p>
            <p class="m-0 text-center">Vai col mouse sul box giallo, o da mobile cliccaci su, per mostrarla!</p>
            <p class="fs-4 mt-2 mb-1 text-uppercase">La tua password è </p>
            <div class="fs-2 container-fluid d-flex align-items-center flex-column">
            <span id="pwd" class="fw-bold"><?php echo $generatedPwd ?></span>
            <div class="controls mt-3 d-flex justify-content-center">
            <a class href="./index.php"><button type="submit" class="btn btn-primary">Home</button></a>
            </div>
            </div>
        </div>
    </header>
</body>

</html>

<?php
$_SESSION['generatePwd'] = ''; //Svuota pwd, poco sicuro poter riaccedere alla PWD andando su password.php

?>