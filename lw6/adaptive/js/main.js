document.getElementById("top_button").onclick = function () {
    let display = document.querySelector(".top_menu").style.display;
    document.querySelector(".top_menu").style.display = (display == "") ? "flex" : "";
}