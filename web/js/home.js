const obstacle = document.getElementById('obstacle');
const obstacle2 = document.getElementById('obstacle2');
const player = document.getElementById('player');
const game = document.getElementById('game');
const end = document.getElementById('end');
const teller = document.getElementById('tel');

let score = 0;

function tellen() {
    score++;
    teller.textContent = score;
}

let x = 0;
let gameOver = false;


function obstacleMove() {
    x += 1;
    obstacle.style.right = x + '%';
    obstacle2.style.right = x + '%';
    checkCollision();
    if (x >= 100) {
        let total = 400;
        let split = Math.random() * total;
        obstacle.style.height = split + "px";
        obstacle2.style.height = (400 - split) + "px";
        x = 0;
    }
}

let y = 0;

function updatePlayer() {
    player.style.bottom = y + "px";
}

document.addEventListener("keydown", (event) => {
    if (event.key === "ArrowUp") {
        y += 20;
    }

    if (event.key === "ArrowDown") {
        y -= 20;
    }

    if (y < 0) y = 0;
    if (y > 445) y = 445;

    updatePlayer();
});

function checkCollision() {
    const p = player.getBoundingClientRect();
    const o = obstacle.getBoundingClientRect();
    const o2 = obstacle2.getBoundingClientRect();

    if (
        p.x < o.x + o.width &&
        p.x + p.width > o.x &&
        p.y < o.y + o.height &&
        p.y + p.height > o.y
    ) {
        endGame();
    }

    if (
        p.x < o2.x + o2.width &&
        p.x + p.width > o2.x &&
        p.y < o2.y + o2.height &&
        p.y + p.height > o2.y
    ) {
        endGame();
    }
}

function endGame() {
    x = 0;
    y = 0;
    player.style.bottom = "0px";
    obstacle.style.right = "0%";
    obstacle2.style.right = "0%";

    game.style.display = "none";
    end.style.display = "block";
    gameOver = true;
}

function tellen() {
    if (gameOver) return;

    score++;
    teller.textContent = score;
}

setInterval(obstacleMove, 30);
setInterval(tellen, 1000);