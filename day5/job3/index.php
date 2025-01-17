<?php

function getHello($hello)
{
    echo "hello la plateforme";
    return $hello;
}

$hello = "Bonjour";
$greeting = getHello($hello);

echo $greeting;
