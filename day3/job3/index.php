<?php

$str = "I'm sorry Dave I'm afraid I can't do that";
$vowel = "aeiouy";

for ($i = 0; $i < strlen($str); $i++) {
    if (strpos($vowel, ($str[$i])) !== false) {
        echo $str[$i];
    }
}
