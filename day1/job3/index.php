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
    <title>Job3</title>
</head>

<body>
    <?php
    $tab = array($bool, $entier, $chaine, $float);

    $all = count($tab);
    for ($test = 0; $test < $all; $test++) {
        echo $tab[$test];
        echo "<br>";
    }
    ?>

</body>

</html>