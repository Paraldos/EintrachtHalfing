"use strict"

const MENU_BTN = document.querySelector(".menu_btn")
const NAVBAR = document.querySelector(".navbar")

MENU_BTN.addEventListener("click", () => {
    if (NAVBAR.classList.contains("open")) {
        NAVBAR.classList.remove("open")
    } else {
        NAVBAR.classList.add("open")
    }
})