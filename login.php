<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

$nom = "";

if (isset($_POST['nom'])){
    setcookie('nom', $_POST['nom']);
    $nom = $_POST['nom'];
}elseif (isset($_COOKIE['nom'])){
    $nom = $_COOKIE['nom'];
}

?>



<body style="padding: 2%;">


    <form method="POST" action="index.php">
        <label>Nombre de usuario</label>
        <input type="text" name="nom">
        <label>Contraseña</label>
        <input type="password">
        <input type="submit">
    </form>
    
</body>
</html>