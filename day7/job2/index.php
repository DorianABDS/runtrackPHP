<?php
session_start();

if (isset($_COOKIE['nbvisites'])) {
    if ($_COOKIE['nbvisites'] == 0) {
        echo "Bienvenue";
    } else {
        echo "Vous avez visité notre site " . $_COOKIE['nbvisites'] . " fois<br><br>";
    }
} else {
    setcookie('nbvisites', 0, time() + 3600);
    $_COOKIE['nbvisites'] = 0;
}

if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() + 3600);
    $_COOKIE['nbvisites'] = 0;
}

$_COOKIE['nbvisites']++;
setcookie('nbvisites', $_COOKIE['nbvisites'], time() + 3600);
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