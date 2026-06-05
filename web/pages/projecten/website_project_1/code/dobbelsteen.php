<?php

$tijd = 1;

$volgende_speler = "
██╗   ██╗ ██████╗ ██╗      ██████╗ ███████╗███╗   ██╗██████╗ ███████╗    ███████╗██████╗ ███████╗██╗     ███████╗██████╗ 
██║   ██║██╔═══██╗██║     ██╔════╝ ██╔════╝████╗  ██║██╔══██╗██╔════╝    ██╔════╝██╔══██╗██╔════╝██║     ██╔════╝██╔══██╗
██║   ██║██║   ██║██║     ██║  ███╗█████╗  ██╔██╗ ██║██║  ██║█████╗      ███████╗██████╔╝█████╗  ██║     █████╗  ██████╔╝
╚██╗ ██╔╝██║   ██║██║     ██║   ██║██╔══╝  ██║╚██╗██║██║  ██║██╔══╝      ╚════██║██╔═══╝ ██╔══╝  ██║     ██╔══╝  ██╔══██╗
 ╚████╔╝ ╚██████╔╝███████╗╚██████╔╝███████╗██║ ╚████║██████╔╝███████╗    ███████║██║     ███████╗███████╗███████╗██║  ██║
  ╚═══╝   ╚═════╝ ╚══════╝ ╚═════╝ ╚══════╝╚═╝  ╚═══╝╚═════╝ ╚══════╝    ╚══════╝╚═╝     ╚══════╝╚══════╝╚══════╝╚═╝  ╚═╝
";

$winnaar_ascii = "
██╗    ██╗██╗███╗   ██╗███╗   ██╗ █████╗  █████╗ ██████╗ 
██║    ██║██║████╗  ██║████╗  ██║██╔══██╗██╔══██╗██╔══██╗
██║ █╗ ██║██║██╔██╗ ██║██╔██╗ ██║███████║███████║██████╔╝
██║███╗██║██║██║╚██╗██║██║╚██╗██║██╔══██║██╔══██║██╔══██╗
╚███╔███╔╝██║██║ ╚████║██║ ╚████║██║  ██║██║  ██║██║  ██║
 ╚══╝╚══╝ ╚═╝╚═╝  ╚═══╝╚═╝  ╚═══╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝
";

$gooi_1 = "
╔══╦═══════╗ 
║  ║       ║
║  ║       ║
║  ║       ║
╚══╩═══════╝
";
$gooi_2 = "
╔═════╦════╗
║     ║    ║
║     ║    ║
║     ║    ║
╚═════╩════╝
";
$gooi_3 = "
╔═══════╦══╗
║       ║  ║
║       ║  ║
║       ║  ║
╚═══════╩══╝
";

$dobbelsteen = [
    1 => "
╔══════════╗
║          ║
║    ██    ║
║          ║
╚══════════╝
",
    2 => "
╔══════════╗
║       ██ ║
║          ║
║ ██       ║
╚══════════╝
",
    3 => "
╔══════════╗
║       ██ ║
║    ██    ║
║ ██       ║
╚══════════╝
",
    4 => "
╔══════════╗
║ ██    ██ ║
║          ║
║ ██    ██ ║
╚══════════╝
",
    5 => "
╔══════════╗
║ ██    ██ ║
║    ██    ║
║ ██    ██ ║
╚══════════╝
",
    6 => "
╔══════════╗
║ ██ ██ ██ ║
║          ║
║ ██ ██ ██ ║
╚══════════╝
"
];

echo "wil je een uiteg?";

$uitleg = readline("ja/nee: ");

if ($uitleg == "ja") {
    echo PHP_EOL;
    echo    "1. Alle spelers gooien om de beurt een keer met de dobbelsteen." . PHP_EOL;
    echo    "2. Nadat iedereen heeft gegooid, worden de worpen vergeleken." . PHP_EOL;
    echo    "3. De speler met de hoogste worp wordt uitgeroepen tot winnaar." . PHP_EOL;
    echo    "4. Wanneer twee of meer spelers hetzelfde hoogste aantal gooien, ontstaat er een gelijke stand." . PHP_EOL;
    echo    "• In dat geval gooien alleen deze spelers opnieuw totdat er één speler duidelijk de hoogste worp heeft." . PHP_EOL;
    echo    "5. Zodra er een winnaar is, kan het spel worden afgesloten of kunnen de spelers besluiten om meerdere rondes te spelen." . PHP_EOL . PHP_EOL;
} else {

}

    echo "speel je" . PHP_EOL;
    echo "1 alleen tegen bot" . PHP_EOL;
    echo "2 met vrienden" . PHP_EOL;

$modus = readline("keuze: ");

if ($modus == 2) {
    $aantal_input = readline("hoeveel spelers ");
    if (!is_numeric($aantal_input) || (int)$aantal_input < 1) {
        echo "Ongeldig aantal spelers" . PHP_EOL;
        exit(1);
    }
    $aantal = (int)$aantal_input;

    if ($aantal < 1) {
        echo "ongeldig aantal spelers" . PHP_EOL;
        exit(1);
    }
    $spelers = [];
    for ($i = 1; $i <= $aantal; $i++) {
        $spelers[] = "speler $i";
    }
} else {
    echo PHP_EOL;
    echo "je speelt tegen de bot" . PHP_EOL;
    $spelers = ["jij", "bot"];
}

do {
    $worpen = [];

    foreach ($spelers as $speler) {

        if ($speler === "bot") {
            echo "bot gooit" . PHP_EOL;
            sleep(1);
            $worp = rand(1, 6);
        } else {
            readline($speler . " druk enter om te gooien");
            $worp = rand(1, 6);
        }

        $worpen[$speler] = $worp;

        echo $speler . " gooide" . PHP_EOL;
        echo $gooi_1 . PHP_EOL;
        sleep($tijd);
        echo $gooi_2 . PHP_EOL;
        sleep($tijd);
        echo $gooi_3 . PHP_EOL;
        sleep($tijd);
        echo $dobbelsteen[$worp] . PHP_EOL;
        echo "volgende speler" . PHP_EOL;
    }

    $hoogste = max($worpen);
    $winnaars = array_keys($worpen, $hoogste);

    if (count($winnaars) > 1) {
        echo "gelijkspel tussen " . implode(" ", $winnaars) . PHP_EOL;
        echo "nieuwe ronde" . PHP_EOL;
        $spelers = $winnaars;
    }

} while (count($winnaars) > 1);

$definitieve_winnaar = $winnaars[0] ?? "Geen winnaar";
echo "Winnaar: " . $definitieve_winnaar . PHP_EOL;

echo $winnaar_ascii . PHP_EOL;
echo "Winnaar: " . $winnaars[0] . PHP_EOL;