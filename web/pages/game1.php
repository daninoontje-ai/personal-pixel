<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hartenjager Scoretracker</title>
    <link rel="stylesheet" href="../css/game1.css">
    <link rel="stylesheet" href="../css/nav.css">
</head>
<body>
    <?php
        include '../includes/nav.php';
    ?>
    <div id="game-root">
        <h1>♥️ Hartenjager</h1>
        <div id="game-stage">
            <form id="game-form">
                <p id="message">Met hoeveel spelers ben je?</p>
                <label>Aantal spelers</label>
                <input id="aantalSpelers" type="number" min="2" max="100" value="2" required>
                <button id="game-button" type="submit">OK</button>
            </form>
            <div id="namen" hidden>
                <div id="output"></div>
                <button id="startButton" type="button">Gereed</button>
            </div>
            <div id="game-summary" hidden>
                <h2>Tussenscores (Ronde 1)</h2>
                <ul id="summary-list" class="standings"></ul>
                <button id="next-round-button" type="button">Volgende ronde</button>
                <button id="reset-game-button" type="button">Opnieuw starten</button>
            </div>
        </div>
    </div>
    <script src="../js/game1.js"></script>
</body>
</html>