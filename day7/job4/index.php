<?php
session_start(['name' => 'session']);

$array = [
    "nom" => isset($_GET["nom"]) ? $_GET["nom"] : "",
];

if (isset($_GET["submit"])) {
    $_SESSION["name"] = $array["nom"];
    echo $array["nom"];
} elseif (isset($_GET["reset"])) {
    session_destroy();
    $_SESSION = [];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get">
        <label for="nom">Prénom</label>
        <input type="text" name="nom" value=""><br>
        <input type="submit" name="submit" value="submit">
        <input type="submit" name="reset" value="reset">
    </form>
</body>

</html>