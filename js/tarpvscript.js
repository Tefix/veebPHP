const links = document.querySelectorAll(".student-list a");
const modal = document.getElementById("modal");
const modalText = document.getElementById("modal-text");
const yesBtn = document.getElementById("yes-btn");
const noBtn = document.getElementById("no-btn");

let currentLink = null;

links.forEach(link => {
    link.addEventListener("click", function(event) {
        event.preventDefault();
        currentLink = this.href;
        modalText.textContent = `Вы точно хотите перейти на сайт ${this.textContent}?`;
        modal.style.display = "block";
    });
});

yesBtn.addEventListener("click", () => {
    if(currentLink) {
        window.location.href = currentLink;
    }
});

noBtn.addEventListener("click", () => {
    modal.style.display = "none";
    currentLink = null;
});


window.addEventListener("click", (event) => {
    if(event.target == modal) {
        modal.style.display = "none";
        currentLink = null;
    }
});

const khusseinLink = document.getElementById("khussein");
const explosionGif = document.getElementById("explosion-gif");

khusseinLink.addEventListener("mouseenter", () => {
    explosionGif.style.display = "block";
});

khusseinLink.addEventListener("mouseleave", () => {
    explosionGif.style.display = "none";
});
