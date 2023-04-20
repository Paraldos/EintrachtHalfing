"use strict";

const NAV = {
  navbar: document.querySelector(".navbar"),
  burger: document.querySelector(".navbar_burger"),
  links: document.querySelector(".nav_links").children,

  init: function () {
    this.init_on_click_burger();
    this.init_on_click_links();
  },

  init_on_click_burger: function () {
    this.burger.addEventListener("click", () =>
      this.navbar.classList.toggle("open")
    );
  },

  init_on_click_links: function () {
    for (let link of this.links) {
      link.addEventListener("click", () => {
        this.navbar.classList.remove("open");
      });
    }
  },
};
NAV.init();
