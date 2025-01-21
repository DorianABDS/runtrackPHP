<?php
session_start();

if (isset($_SESSION['nbvisites'])) {
    if ($_SESSION['nbvisites'] == 0) {
        echo "Bienvenue";
    } else {
        echo "Vous avez visité notre site " . $_SESSION['nbvisites'] . " fois<br><br>";
    }
}

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}

$_SESSION['nbvisites']++;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>

</html>