<?php
// Controleer of de JSON-bestanden bestaan
if (!file_exists('./Oktober 2024.json') || !file_exists('./Oktober 2025.json')) {
    die("Een of beide JSON-bestanden bestaan niet!");
}

// Open het JSON-bestand van 2024
$json2024 = file_get_contents('./Oktober 2024.json');

// Open het JSON-bestand van 2025
$json2025 = file_get_contents('./Oktober 2025.json');

// Zet de JSON om in een PHP-array
$data2024 = json_decode($json2024, true);
$data2025 = json_decode($json2025, true);

// Maak 2 lege bakken voor de temperaturen
$temp2024 = [];
$temp2025 = [];

// Loop door alle datums en temperaturen van 2024
foreach ($data2024 as $datum => $temp) {
    // Controleer dat het echt oktober is
    if (strpos($datum, '2024-10') === 0) {
        $temp2024[] = $temp;
    }
}

// Loop door alle datums en temperaturen van 2025
foreach ($data2025 as $datum => $temp) {
    // Controleer dat het echt oktober is
    if (strpos($datum, '2025-10') === 0) {
        $temp2025[] = $temp;
    }
}

// Reken het gemiddelde van elke bak uit
$gem2024 = count($temp2024) > 0 ? array_sum($temp2024) / count($temp2024) : 0;
$gem2025 = count($temp2025) > 0 ? array_sum($temp2025) / count($temp2025) : 0;

// Vergelijk de gemiddelden
if ($gem2024 > $gem2025) {
    $resultaat = "Oktober 2024 was warmer";
} elseif ($gem2025 > $gem2024) {
    $resultaat = "Oktober 2025 was warmer";
} else {
    $resultaat = "Oktober 2024 en 2025 waren even warm";
}

// Laat het resultaat zien
echo $resultaat;
?>