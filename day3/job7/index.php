<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais";

for ($i = 0; $i < strlen($str) - 1; $i++) {
    echo $str[$i + 1]; // Remplace chaque lettre par la lettre suivante
}
echo $str[0]; // Affiche le premier caractère à la fin
