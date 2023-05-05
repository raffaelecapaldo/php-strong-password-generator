<?php 

function generatePwd() {
    
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
                <p class="fs-3">Inserisci la lunghezza della password da generare, minimo 8 caratteri e invia!</p>
                <form class="w-25 mx-auto" action="">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Lunghezza</span>
                        <input type="number" min="8" class="form-control">
                        <button type="button" class="btn btn-primary">Genera</button>

                    </div>
                </form>
            </div>
        </div>
    </main>

</body>

</html>