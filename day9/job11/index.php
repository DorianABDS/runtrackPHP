<?php

$user = 'root';
$pass = '';

$db = new mysqli('localhost', $user, $pass, 'jour08');

$request = "SELECT AVG(capacite) as capacite FROM salles";

$query = $db->query($request);

echo "<table border='1'>
            <thead>
                <tr>
                    <th>capacite</th>
                </tr>
            </thead>
            <tbody>";
while ($row = $query->fetch_array()) {
    echo "<tr>
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