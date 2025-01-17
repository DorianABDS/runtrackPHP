<?php
$array = [
    "prénom" => isset($_POST["fname"]) ? $_POST["fname"] : "",
    "nom" => isset($_POST["lname"]) ? $_POST["lname"] : "",
];

echo "<table border='1'>";
echo "<thead>";
echo "<tr><th>Type</th><th>Valeur</th></tr>";
echo "</thead>";
echo "<tbody>";
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
        <label for="fname">Prénom</label><br>
        <input type="$_POST" id="fname" name="fname" required><br>
        <label for="lname">Nom</label><br>
        <input type="$_POST" id="lname" name="lname" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>