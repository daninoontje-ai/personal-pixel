const form = document.getElementById("game-form");

form.addEventListener("submit", function(event) {
    event.preventDefault();

    const aantalSpelers = parseInt(
        document.getElementById("aantalSpelers").value
    );

    const output = document.getElementById("output");

    output.innerHTML = ""; // leegmaken

    for (let i = 1; i <= aantalSpelers; i++) {

        const input = document.createElement("input");
        input.type = "text";
        input.placeholder = "Speler " + i + " naam hier:";

        output.appendChild(input);
        output.appendChild(document.createElement("br"));
    }
    document.getElementById("game-form").style.display = "none";
    document.getElementById("namen").style.display = "block";
});

const startButton = document.getElementById("startButton");
startButton.addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("namen").style.display = "none";

    vraag voor elke speler welke scoren ze gehaalt hebben en sla deze op in een array

    toon tussenscores en een "volgende ronde" knop
    vraag opnieuw welke scoren ze gehaalt hebben en tel ze op bij de vorige scores
    herhaal dit totdat een speler 100 of meer punten heeft
    toon de winnaar
});
