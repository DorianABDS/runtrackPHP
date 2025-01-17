<?php

function bonjour($jour): bool
{
    if ($jour == 'Bonjour') {
        echo "$jour Adam<br>";
        return true;
    } else {
        echo "Bonsoir Adam<br>";
    }
    return false;
}

bonjour('');
