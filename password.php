<?php 
session_start();
$generatedPwd = $_SESSION['generatePwd'];//recupera pwd da array session



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $generatedPwd  ?></p>
</body>
</html>