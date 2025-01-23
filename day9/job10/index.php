<?php

$user = 'root';
$pass = '';

$db = new mysqli('localhost', $user, $pass, 'jour08');

$request = "SELECT * FROM salles ORDER BY capacite ASC";

$query = $db->query($request);

echo "<table border='1'>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>id_etage</th>
                    <th>capacite</th>
                </tr>
            </thead>
            <tbody>";
while ($row = $query->fetch_array()) {
    echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['nom'] . "</td>
            <td>" . $row['id_etage'] . "</td>
            <td>" . $row['capacite'] . "</td>
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