const text = document.querySelector("#text");
const modeSpan = document.querySelector("#dark_mode");

function toggleTextColor() {
    const currentColor = text.style.color;
    text.style.color = currentColor === "black" ? "white" : "black";
}

modeSpan.addEventListener("click", toggleTextColor);