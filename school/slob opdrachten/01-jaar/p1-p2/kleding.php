<?php

for ($i = 0; $i < 5; $i++) {
    $temp =readline("hoe warm is het? ");

    if ($temp <= 15) {
        echo "je moet een jas aan" . PHP_EOL;
    } elseif ($temp <= 24) {
        echo "je hebt misschien een trui nodig" . PHP_EOL;
    } else {
        echo "t-shirt is genoeg" . PHP_EOL;
    }
}