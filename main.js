"use strict"

const MENU_BTN = document.querySelector(".menu_btn")
const NAVBAR = document.querySelector(".navbar")
const NAV_LINKS = document.querySelector(".nav_links")

MENU_BTN.addEventListener("click", () => {
    if (NAVBAR.classList.contains("open")) {
        NAVBAR.classList.remove("open")
    } else {
        NAVBAR.classList.add("open")
    }
})



for(let link of NAV_LINKS.children) {
    link.addEventListener("click", () => {
        NAVBAR.classList.remove("open")
    })
    console.log(link)
}