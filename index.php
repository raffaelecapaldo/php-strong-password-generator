<?php

function generatePwd($length)
{
    $password = '';
    $characters = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
        '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '!', '"', '#', '$', '%', '&', '\'', '(', ')', '*', '?', '@', '_'
    ];
    for ($i = 1; $i < $length; $i++) {
        $randNumber = rand(0, count($characters) - 1);
        $password .= $characters[$randNumber];
    }
    return $password;

}
if (!empty($_GET['pwdLength'])) {
$pwdLenght = $_GET['pwdLength']; 
$generatedPasswd = generatePwd($pwdLenght);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
                <div class="container d-flex justify-content-center">
                    <form action="">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Lunghezza</span>
                            <input name="pwdLength" type="number" min="8" class="form-control">
                            <button type="submit" class="btn btn-primary">Genera</button>
                        </div>
                        <?php if (!empty($generatedPasswd)) { ?>
                        <div class="generated-pwd">
                            <p class="fs-3">La tua password è: <?php echo $generatedPasswd ?> </p>
                        </div>
                        <?php } ?>

                </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>