<?php

$user = 'root';
$pass = '';

$db = new mysqli('localhost', $user, $pass, 'jour08');

$request = "SELECT salles.nom as salles_nom, etage.nom as etage_nom FROM salles INNER JOIN etage ON salles.id_etage = etage.id";

$query = $db->query($request);

echo "<table border='1'>
            <thead>
                <tr>
                    <th>Salle Nom</th>
                    <th>Etage Nom</th>
                </tr>
            </thead>
            <tbody>";
while ($row = $query->fetch_array()) {
    echo "<tr>
            <td>" . $row['salles_nom'] . "</td>
            <td>" . $row['etage_nom'] . "</td>
          </tr>";
}
echo "</tbody>
      </table>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>