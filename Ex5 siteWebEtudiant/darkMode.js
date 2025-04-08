document.addEventListener("DOMContentLoaded", () => {
    let meta_backgroundColor = document.querySelector("#mode");
    let backgroundColor = meta_backgroundColor.content === "dark" ? "black" : "white";
    const modeSpan = document.getElementById("dark_mode");
    const cv = document.querySelector("#canvas");

    cv.style.backgroundColor = backgroundColor;

    function toggleDarkMode() {
        backgroundColor = backgroundColor === "black" ? "white" : "black";
        cv.style.backgroundColor = backgroundColor;

        fetch("toggleDarkMode.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ mode: backgroundColor === "black" ? "dark" : "light" })
        })
    }

    modeSpan.addEventListener("click", toggleDarkMode);
});