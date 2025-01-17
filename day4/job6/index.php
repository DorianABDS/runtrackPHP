<?php
$array = [
    "chiffre" => isset($_POST["chiffre"]) ? $_POST["chiffre"] : "",
];

echo "<table border='1'>";
echo "<thead>";
echo "<tr><th>Type</th><th>Valeur</th></tr>";
echo "</thead>";
echo "<tbody>";

if (isset($array["chiffre"]) !== "") {
    if ($array["chiffre"] % 2 == 0) {
        echo "{$array["chiffre"]} est pair<br>";
    } else {
        echo "{$array["chiffre"]} est impair<br>";
    }
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
        <label for="chiffre">Chiffre</label><br>
        <input type="number" id="chiffre" name="chiffre" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>