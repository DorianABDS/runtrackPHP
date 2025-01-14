<?php

function isPrime($num)
{
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 3; $i < 1000; $i++) {
    if (isPrime($i)) {
        echo $i . ' ';
    }
}
