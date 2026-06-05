<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>31</title>
    <link rel="stylesheet" href="../css/31.css">
    <link rel="stylesheet" href="../css/nav.css">
</head>
<body>
    <?php
        include '../includes/nav.php';
    ?>
        <h1>♥️ 31</h1>
        <div id="welkom">
            <p>Welkom bij 31! Klik op de startknop om te beginnen.</p>
            <button id="start-button" type="button">Start</button>
        </div>
        <div id="players" hidden>
            <p>Met hoeveel spelers ben je?</p>
            <input id="playerCount" type="number" min="2" max="100" value="2" required>
            <button id="klaar-button" type="button">Klaar</button>
        </div>
        <div id="output"></div>
        <button id="restart-button" type="button" hidden>Opnieuw starten</button>
    <script src="../js/31.js"></script>
</body>
</html>