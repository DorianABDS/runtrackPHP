<?php
$bool = true;
$entier = 1;
$chaine = 'ceci est tout simplement une chaines de caractères';
$float = 0.5;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job3-Tableaux</title>
</head>

<body>
    <?php
    $tab = array($bool, $entier, $chaine, $float);

    $all = count($tab);
    for ($i = 0; $i < $all; $i++) {
        echo $tab[$i];
        echo "<br>";
    }

    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr><th>Type</th><th>Bool</th><th>Entier</th><th>Chaine</th><th>Float</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr><td>Valeur</td><td>" . $tab[0] . "</td><td>" . $tab[1] . "</td><td>" . $tab[2] . "</td><td>" . $tab[3] . "</td></tr>";
    echo "</tbody>";
    echo "</table>";
    ?>
</body>

</html>