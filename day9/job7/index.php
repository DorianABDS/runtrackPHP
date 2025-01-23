<?php

$user = 'root';
$pass = '';

$db = new mysqli('localhost', $user, $pass, 'jour08');

$request = "SELECT SUM(superficie) as superficie FROM etage";

$query = $db->query($request);

echo "<table border='1'>
            <thead>
                <tr>
                    <th>superficie_totale</th>
                </tr>
            </thead>
            <tbody>";
while ($row = $query->fetch_array()) {
    echo "<tr>
            <td>" . $row['superficie'] . "</td>
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