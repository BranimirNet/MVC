document.addEventListener("DOMContentLoaded", function () {
    const output = document.getElementById("js-output");
    output.innerText = "klikni me - dolazim iz JavaScript-a!";

    output.addEventListener("click", function () {
        output.style.color = "red";
    });
});