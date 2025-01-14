<?php

for ($i = 0; $i <= 100; $i++) {
    if ($i == 42) {
        echo ("LaPlateforme_<br>"); //Affiche LaPlateforme_
    }
    if ($i == 42) { // supprime 42
        continue;
    }
    if ($i <= 20) {
        echo "<i>$i</i><br>"; //affiche en italique
    }
    if ($i >= 21  && $i <= 25) { //affiche de 21 à 25
        echo "$i<br>";
    }
    if ($i >= 25  && $i <= 50) { //affiche en gras
        echo "<u>$i</u><br>";
    }
    if ($i >= 50  && $i <= 100) { //affiche de 50 à 100
        echo "$i<br>";
    }
}
