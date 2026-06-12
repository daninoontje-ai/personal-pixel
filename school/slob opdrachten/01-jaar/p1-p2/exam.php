<?php

$bedrag = readline("Hoeveel is het aankoopbedrag? ");

function berekenVerzendkosten($bedrag) {
    if ($bedrag >= 50) {
        return "Er worden geen verzendkosten in rekening gebracht.";
    } else {
        return "Er worden verzendkosten van €5 in rekening gebracht.";
    }
}


echo berekenVerzendkosten(30);
echo PHP_EOL;
echo berekenVerzendkosten(75);
?>