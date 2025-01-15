<?php

$str = "Les choses que l'on possède finissent par nous posséder.";
$reverse_str = strrev($str);

for ($i = 0; $i < strlen($str); $i++) {
    echo $reverse_str[$i];
}
