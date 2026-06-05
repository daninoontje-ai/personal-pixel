<?php
// Vraag of de speler de spelregels wil lezen en hij blijft vragen bij ongeldige invoer
do {
    echo PHP_EOL;
    echo "Wil je eerst de spelregels doorlezen? (y/n)" . PHP_EOL;
    $spelregelKeuze = readline();
    $spelregelKeuze = strtolower($spelregelKeuze);

    if ($spelregelKeuze !== "y" && $spelregelKeuze !== "n") {
        echo "'$spelregelKeuze' is geen geldige invoer. typ y of n!" . PHP_EOL;
    }
} while ($spelregelKeuze !== "y" && $spelregelKeuze !== "n");

// Als speler 'y' kiest laat hij de spelregels zien.
if ($spelregelKeuze === "y") {
echo "

BELANGRIJKSTE SPELREGELS VOOR VUUR–WATER–WIND!

Doel van het spel:
Versla de computer door het winnende element te kiezen.

De tekens:
Typ Vuur om Vuur te kiezen
Typ Water om Water te kiezen
Typ Wind om Wind te kiezen

Winregels:
Vuur wint van Wind
Wind wint van Water
Water wint van Vuur

Spelverloop:
1. Kies eerst het aantal rondes dat je wilt spelen.
2. Typ je keuze: Vuur, Water of Wind.
3. De computer kiest ook een element.
4. Winnaar van de ronde krijgt 1 punt.
5. Bij gelijkspel krijgt niemand een punt en wordt de ronde opnieuw gespeeld.
6. Het spel eindigt als alle rondes zijn gespeeld.
7. Bij gelijkspel na alle rondes wordt er extra rondes gespeeld totdat er een winnaar is.
8. Typ Stop om het spel eerder te stoppen (dan wint de computer).

Input regels:
Alleen de woorden Vuur, Water of Wind zijn geldig.
Hoofdletters of kleine letters maken niet uit (vuur of Vuur werkt hetzelfde).

Strategietips:
Let op patronen van de computer om je winkansen te vergroten.
Wissel zelf van element als je vaak verliest." . PHP_EOL;
    echo PHP_EOL;
}

//dit is de score van de spelers
$scoreSpeler = 0;
$scoreComputer = 0;
$x = 1;

//hier wordt de gebruiker gevraagd hoeveel rondes wil je spelen en wordt het opnieuw gevraagd totdat de gebruiker een geldig getal invult.
do {
    echo "Hoeveel rondes wil je spelen? (of 'stop' om het spel te stoppen)" . PHP_EOL;
    $rondes = readline();
    $rondes = strtolower($rondes);
    if ($rondes === "stop") {
        echo PHP_EOL;
        echo "Het spel is gestopt. bedankt voor het spelen!" . PHP_EOL;
        echo "Hopelijk zie ik je snel terug bij een nieuw spel!" . PHP_EOL;
        echo "****************************************************" . PHP_EOL;
        echo "Aantal punten speler: $scoreSpeler" . PHP_EOL;
        echo "Aantal punten computer: $scoreComputer" . PHP_EOL;
        echo "****************************************************" . PHP_EOL;
        echo "Doordat je bent gestopt heeft de computer gewonnen!" . PHP_EOL;
        exit;
    }
    if (!is_numeric($rondes) || $rondes <= 0) {
        echo PHP_EOL;
        echo "'$rondes' is geen geldig getal en het aantal rondes moet groter zijn dan 0!" . PHP_EOL;
    }
} while (!is_numeric($rondes) || $rondes <= 0);

while ($x <= $rondes) {
    //Hier wordt de keuze gevraagd aan de speler.
    echo PHP_EOL;
    echo "Typ 'Vuur', 'Water' of 'Wind' (of 'stop' om het spel te stoppen)" . PHP_EOL;
    $keuzeSpeler = readline();
    $keuzeSpeler = strtolower($keuzeSpeler);

    //Als de speler stop typt wordt het spel gestopt.
    if ($keuzeSpeler === "stop") {
        echo PHP_EOL;
        echo "Het spel is gestopt. bedankt voor het spelen!" . PHP_EOL;
        echo "Hopelijk zie ik je snel terug bij een nieuw spel!" . PHP_EOL;
        echo "****************************************************" . PHP_EOL;
        echo "Aantal punten speler: $scoreSpeler" . PHP_EOL;
        echo "Aantal punten computer: $scoreComputer" . PHP_EOL;
        echo "****************************************************" . PHP_EOL;
        echo "Doordat je bent gestopt heeft de computer gewonnen!" . PHP_EOL;
        exit;
    } else {
        //hier genereert de computer een random getal tussen de 0 en 2.
        $keuzeComputerNummer = rand(0, 2);

        if ($keuzeComputerNummer == 0) {
            $keuzeComputer = "Vuur";
        } else if ($keuzeComputerNummer == 1) {
            $keuzeComputer = "Water";
        } else if ($keuzeComputerNummer == 2) {
            $keuzeComputer = "Wind";
        }

        $keuzeSpeler = strtolower($keuzeSpeler);
        $keuzeComputer = strtolower($keuzeComputer);

        // Check geldige input
        if ($keuzeSpeler !== "vuur" && $keuzeSpeler !== "water" && $keuzeSpeler !== "wind") {
            echo "'$keuzeSpeler' is geen geldige invoer! kies uit: vuur, water of wind." . PHP_EOL;
            continue; 
        }

        // Gelijkspel
        if ($keuzeSpeler === $keuzeComputer) {
            echo "Gelijkspel! Maak opnieuw je keuze!" . PHP_EOL;
        }
        // Speler wint
        elseif (($keuzeSpeler === "water" && $keuzeComputer === "vuur") || ($keuzeSpeler === "vuur"  && $keuzeComputer === "wind") || ($keuzeSpeler === "wind"  && $keuzeComputer === "water")) {
            $scoreSpeler++;
            echo PHP_EOL;
            echo "Speler wint!" . PHP_EOL;
            echo "Speler kiest: $keuzeSpeler, computer kiest: $keuzeComputer" . PHP_EOL;
            echo "Aantal punten speler: $scoreSpeler" . PHP_EOL;
            echo "Aantal punten computer: $scoreComputer" . PHP_EOL;
            $x++;
        }
        // Computer wint
        else {
            $scoreComputer++;
            echo PHP_EOL;
            echo "Computer wint!" . PHP_EOL;
            echo "Speler kiest: $keuzeSpeler, computer kiest: $keuzeComputer" . PHP_EOL;
            echo "Aantal punten speler: $scoreSpeler" . PHP_EOL;
            echo "Aantal punten computer: $scoreComputer" . PHP_EOL;
            $x++;
        }

        if ($x > $rondes && $scoreComputer == $scoreSpeler) {
            $rondes++;
            echo PHP_EOL;
            echo "Het is gelijkspel na het spelen van alle rondes. Er wordt een extra ronde gespeeld zodat er een winnaar is!" . PHP_EOL;
        }     
    }
}

//de uitslag
if ($x >= $rondes && $scoreSpeler > $scoreComputer) {
    echo PHP_EOL;
    echo "***********************************************" . PHP_EOL;
    echo "Gefeliciteerd met de overwinning!" . PHP_EOL;
    echo "***********************************************" . PHP_EOL;
    echo "Score Speler: $scoreSpeler" . PHP_EOL;
    echo "Score Computer: $scoreComputer" . PHP_EOL;
    echo "Bedankt voor het spelen! hopelijk zien wij jou snel terug bij een nieuw spel!" . PHP_EOL;
    exit;
} else {
    echo PHP_EOL;
    echo "***********************************************" . PHP_EOL;
    echo "Helaas! De computer heeft gewonnen!" . PHP_EOL;
    echo "***********************************************" . PHP_EOL;
    echo "Score Speler: $scoreSpeler" . PHP_EOL;
    echo "Score Computer: $scoreComputer" . PHP_EOL;
    echo "Bedankt voor het spelen! hopelijk zien wij jou snel terug bij een nieuw spel!" . PHP_EOL;
}