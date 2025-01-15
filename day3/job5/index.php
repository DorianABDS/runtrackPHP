<?php

$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$dic = array(
    "consonnes" => " ",
    "voyelles" => " ",
);

for ($i = 0; $i < strlen($str); $i++) {
    if (strpos("aeiouy", $str[$i]) !== false) {
        $dic["voyelles"] .= $str[$i];
    } else if ($str[$i] !== " ") {
        $dic["consonnes"] .= $str[$i];
    }
}

echo "<table border='1'>";
echo "<thead>";
echo "<tr><th>Type</th><th>Consonnes</th><th>Voyelles</th></tr>";
echo "<tr><td>Nombre</td><td>" . strlen($dic["consonnes"]) . "</td><td>" . strlen($dic["voyelles"]) . "</td></tr>";
echo "</thead>";
echo "<tbody>";
