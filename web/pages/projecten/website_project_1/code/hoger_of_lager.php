<?php

//Welkompagina
echo "Welkom bij hoger of lager!" . PHP_EOL;
echo "Wil je eerst de spelregels lezen?" . PHP_EOL;
$keuzeUitleg = readline();

// Spelregels tonen (optioneel)
if ($keuzeUitleg === 'ja') {
    echo "Spelregels:" . PHP_EOL;
    echo "" . PHP_EOL;
    echo "Computer kiest een getal (1 tot 20,40 of 60 (afhangkelijk van gekozen niveau))." . PHP_EOL;
    echo "Jij kiest: hoger of lager." . PHP_EOL;
    echo "" . PHP_EOL;

    echo "Punten per niveau:" . PHP_EOL;
    echo "makkelijk = Goed = +1, gelijk = +1, fout = -1." . PHP_EOL;
    echo "gemiddeld = Goed = +1, gelijk = +1, fout = -2." . PHP_EOL;
    echo "gemiddeld = Goed = +1, gelijk = +1, fout = -3." . PHP_EOL;
    echo "" . PHP_EOL;

    echo "Einde spel:" . PHP_EOL;
    echo "5 punten = jij wint." . PHP_EOL;
    echo "0 punten = computer wint." . PHP_EOL;
    echo "" . PHP_EOL;

    echo "Veel plezier!" . PHP_EOL;;
    echo "" . PHP_EOL;
    // Geen spelregels
} elseif ($keuzeUitleg === 'nee') {
    echo "Veel succes!" . PHP_EOL;
    // Ongeldige invoer
} else {
    echo "'$keuzeUitleg' is geen geldige invoer. Kies ja of nee." . PHP_EOL;
}

// Keuze niveau
echo "" . PHP_EOL;
echo "Kies een niveau: makkelijk (1-20) / gemiddeld (1-40) / moeilijk (1-60)" . PHP_EOL;
$niveau = strtolower(readline());

switch ($niveau) {
    case 'makkelijk':
        $maxGetal = 20;
        $winScore = 5;
        $foutStraf = 1;
        break;

    case 'gemiddeld':
        $maxGetal = 40;
        $winScore = 7;
        $foutStraf = 2;
        break;

    case 'moeilijk':
        $maxGetal = 60;
        $winScore = 10;
        $foutStraf = 3;
        break;

    default:
        echo "Ongeldig niveau.";
        exit;
}

echo "" . PHP_EOL;
echo "Je speelt op niveau: $niveau (1 - $maxGetal)" . PHP_EOL . PHP_EOL;

//Genereert begingetal
$begingetal = rand(1, $maxGetal);

//Score
$scorespeler = 1;

//Kijkt naar input van de speler
while ($scorespeler < 11) {
    echo "typ 'stop' om eerder te stoppen" . PHP_EOL;
    echo "" . PHP_EOL;
    echo "Huidig getal: $begingetal" . PHP_EOL;
    echo "Is het volgende getal hoger of lager? (hoger/lager):" . PHP_EOL;
    $spelerInput = readline();
    echo "" . PHP_EOL;
    $spelerInput = strtolower($spelerInput);

    // Stoppen met het spel
    if ($spelerInput !== 'stop') {
        if ($spelerInput === "hoger" || $spelerInput === "lager") {
            $volgendGetal = rand(1, $maxGetal);

            // Controle geldige invoer
            if (
                $spelerInput === "hoger" && $volgendGetal >= $begingetal ||
                $spelerInput === "lager" && $volgendGetal <= $begingetal
            ) {
                // Goed of fout geraden
                $scorespeler++;
                echo "Goed gedaan! Het volgende getal was $volgendGetal" . PHP_EOL;
                echo "******************************************************" . PHP_EOL;
                echo "scorespeler: $scorespeler" . PHP_EOL;
                echo "******************************************************" . PHP_EOL;
            } else {
                $scorespeler -= $foutStraf;
                echo "Helaas! Het volgende getal was $volgendGetal" . PHP_EOL;
                echo "******************************************************" . PHP_EOL;
                echo "scorespeler: $scorespeler" . PHP_EOL;
                echo "******************************************************" . PHP_EOL;
            }
            // Volgend getal wordt het nieuwe begingetal
            $volgendGetal = rand(1, $maxGetal);
            $begingetal = $volgendGetal;

            // Ongeldige invoer
        } else {
            echo "'$spelerInput' is geen geldige invoer!" . PHP_EOL;
            echo "" . PHP_EOL;
        }
        //Einde spel
        if ($scorespeler == $winScore) {
            echo "Gefeliciteerd! je hebt gewonnen." . PHP_EOL;
            exit(1);
        } elseif ($scorespeler <= 0) {
            echo "Helaas! Je hebt dit keer niet gewonnen." . PHP_EOL;
            exit(1);
        }
        // Speler kiest om te stoppen
    } else {
        echo "Bedankt voor het spelen!" . PHP_EOL;
        echo "Hopelijk zien we elkaar snel weer terug!" . PHP_EOL;
        exit(1);
    }
}
