<?php

function calcule($nb1, $op, $nb2)
{
    switch ($op) {
        case '+':
            return $nb1 + $nb2;
        case '-':
            return $nb1 - $nb2;
        case '*':
            return $nb1 * $nb2;
        case '/':
            return $nb1 / $nb2;
        default:
            return 'Opérateur inconnu';
    }
}

echo calcule(5, '+', 3);
