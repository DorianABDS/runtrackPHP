<?php
$array = [
    "username" => isset($_POST["username"]) ? $_POST["username"] : "",
    "password" => isset($_POST["password"]) ? $_POST["password"] : "",
];

echo "<table border='1'>";
echo "<thead>";
echo "<tr><th>Type</th><th>Valeur</th></tr>";
echo "</thead>";
echo "<tbody>";

if ($array["username"] == "John" && $array["password"] == "Rambo") {
    echo "c'est pas ma guerre<br>";
} else {
    echo "votre pire cauchemar<br>";
}

foreach ($array as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</tbody>";
echo "</table>";
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
        <label for="username">Nom d'utilisateur</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>