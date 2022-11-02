"use strict";

const NAVBAR = document.querySelector(".navbar");
const ARTICLES = document.querySelectorAll("article");
const SECTION_H2 = document.querySelectorAll("h2");
const PHOTOS = document.getElementById("photos");

// NAVBAR ===============================================================
function addNavbar() {
  let markup = `
    <div class="menu_btn">
        <i class="menu_btn_symbol fa-regular fa-circle-right"></i>
    </div>
    <a class="logo" href="./index.html#landing">SG Eintracht Halfing e.V.</a>
    <ul class="nav_links">
        <li><a href="./index.html#ueber_uns">Über Uns</a></li>
        <li><a href="./index.html#aktuelles">Aktuelles</a></li>
        <li><a href="./index.html#sportliches">Sportliches</a></li>
        <li><a href="./index.html#impressum">Impressum</a></li>
    </ul>
    `;
  NAVBAR.innerHTML = markup;
}
addNavbar();

function addNavbarBtnListener() {
  let btn = document.querySelector(".menu_btn");
  btn.addEventListener("click", () => {
    if (NAVBAR.classList.contains("open")) {
      NAVBAR.classList.remove("open");
    } else {
      NAVBAR.classList.add("open");
    }
  });
}
addNavbarBtnListener();

function addNavLinksListeners() {
  let links = document.querySelector(".nav_links");
  for (let link of links.children) {
    link.addEventListener("click", () => {
      NAVBAR.classList.remove("open");
    });
  }
}
addNavLinksListeners();

// SCROLL ANIMATION ===============================================================
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
    } else {
      entry.target.classList.remove("show");
    }
  });
});

ARTICLES.forEach((el) => {
  observer.observe(el);
});

SECTION_H2.forEach((el) => {
  observer.observe(el);
});
