const projects = [
    {
        url: "./pages/projecten/website_project_1/home.html",
        title: "Project Randomizers",
        img: "img/randomizers.PNG",
        description: "Dit is mijn eerste project..."
    },
    {
        url: "./pages/projecten/website_project_2/html/home.php",
        title: "Project Marktplaats",
        img: "img/marktplaats.PNG",
        description: "Dit is mijn 2de project..."
    }
];

let index = 0;

const title = document.querySelector("h1");
const link = document.getElementById("link");
const img = document.querySelector("img");
const description = document.querySelector("#text p");
const button = document.getElementById("nextBtn");

function showProject(i) {
    const project = projects[i];

    title.textContent = project.title;
    link.href = project.url;
    img.src = project.img;
    description.textContent = project.description;
}

button.addEventListener("click", () => {
    index++;

    if (index >= projects.length) {
        index = 0;
    }

    showProject(index);
});