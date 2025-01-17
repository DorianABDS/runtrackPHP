<?php
$nombre = count($_POST); // Nombre d'arguments
echo "Nombre d'arguments : $nombre<br>"; // Nombre d'arguments : 2
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="fname">Prénom</label><br>
        <input type="$_POST" id="fname" name="fname"><br>
        <label for="lname">Nom</label><br>
        <input type="$_POST" id="lname" name="lname"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>