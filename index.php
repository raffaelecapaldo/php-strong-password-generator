<?php
session_start();
include __DIR__ . '/functions.php';
if (!empty($_GET['pwdLength']) && !ctype_digit($_GET['pwdLength'])) {//Se viene passata alla queryString in url non un numero, ricarica la pagina
    //e non eseguire la funzione (evitamento overflow)
    header('Location: ./index.php');
}

else if (!empty($_GET['pwdLength'])) { //Controllo query
    $pwdLenght = $_GET['pwdLength'];
    $_SESSION['generatePwd'] = generatePwd($pwdLenght); //Genera la pwd
    header('Location: ./password.php'); //Redirect
}

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

    <title>Strong password generator</title>
</head>

<body>

    <header>
        <h1 class="text-center mb-3">Generatore di password sicure</h1>
    </header>
    <main>
        <div class="container p-2" id="app">
            <div class="generator text-center">
                <p class="fs-5">Inserisci la lunghezza della password da generare (tra 8 e 64 caratteri) e invia!</p>
                <div class="container d-flex justify-content-center">
                    <form action="">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Lunghezza</span>
                            <input name="pwdLength" value="8" type="number" min="8" max="64" class="form-control">
                            <button type="submit" class="btn btn-primary">Genera</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>