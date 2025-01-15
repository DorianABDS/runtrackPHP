<?php

$array = array(200, 204, 173, 98, 171, 404, 459);

foreach ($array as $value) {
    if ($value % 2 == 1) {
        echo "$value est impair<br>";
    } else {
        echo "$value est pair<br>";
    }
}
