<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="#" method="POST">
    <input type="text" id="mail" name="mail" placeholder="Voer je e-mailadres in">
    <input type="submit" value="submit" name="submit">
</form>
</body>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail = $_POST["mail"];
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        
        echo($mail . " is geldig!");
    } 
    else {
        echo($mail .  " is niet geldig!");
    }
}
?>

</html>
