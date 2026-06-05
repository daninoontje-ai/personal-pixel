const welkom = document.getElementById("welkom");
const startButton = document.getElementById("start-button");
const klaarButton = document.getElementById("klaar-button");
const output = document.getElementById("output");
const restartButton = document.getElementById("restart-button");

let spelers = [];

// START
startButton.addEventListener("click", function () {
    welkom.style.display = "none";
    document.getElementById("players").style.display = "block";
});

// AANTAL + NAMEN
klaarButton.addEventListener("click", function () {

    const aantal = document.getElementById("playerCount").value;

    output.innerHTML = "";

    for (let i = 0; i < aantal; i++) {
        output.innerHTML += `
            <input id="p${i}" placeholder="Speler ${i + 1} naam"><br>
        `;
    }

    output.innerHTML += `<button id="startGame">Start spel</button>`;

    document.getElementById("startGame").addEventListener("click", function () {

        spelers = [];

        for (let i = 0; i < aantal; i++) {
            let naam = document.getElementById("p" + i).value;

            spelers.push({
                naam: naam,
                levens: 3
            });
        }

        game();
    });
});

// GAME
function game() {

    output.innerHTML = "<h3>Klik op een speler</h3>";

    spelers.forEach((s, index) => {

        let btn = document.createElement("button");
        btn.textContent = s.naam + " ❤️ " + s.levens;

        btn.addEventListener("click", function () {

            spelers[index].levens--;

            if (spelers[index].levens <= 0) {
                alert(s.naam + " is af!");
            }

            update();
            checkWin();
        });

        output.appendChild(btn);
        output.appendChild(document.createElement("br"));
    });
}

// UPDATE
function update() {
    output.innerHTML = "";

    spelers.forEach((s, index) => {

        let btn = document.createElement("button");
        btn.textContent = s.naam + " ❤️ " + s.levens;

        btn.addEventListener("click", function () {

            spelers[index].levens--;

            update();
            checkWin();
        });

        output.appendChild(btn);
        output.appendChild(document.createElement("br"));
    });
}

// WIN CHECK
function checkWin() {

    let alive = spelers.filter(s => s.levens > 0);

    if (alive.length === 1) {

        output.innerHTML = "<h1>🏆 WINNAAR: " + alive[0].naam + "</h1>";

        restartButton.hidden = false;
    }
}

// RESTART
restartButton.addEventListener("click", function () {
    location.reload();
});