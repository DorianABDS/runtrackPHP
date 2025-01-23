<?php

$user = 'root';
$pass = '';

$db = new mysqli('localhost', $user, $pass, 'jour08');

$request = "SELECT nom, prenom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01'";

$query = $db->query($request);

echo "<table border='1'>
            <thead>
                <tr>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>naissance</th>
                </tr>
            </thead>
            <tbody>";
while ($row = $query->fetch_array()) {
    echo "<tr>
            <td>" . $row['nom'] . "</td>
            <td>" . $row['prenom'] . "</td>
            <td>" . $row['naissance'] . "</td>
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