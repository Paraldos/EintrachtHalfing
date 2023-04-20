"use strict";

function replaceLandingImage() {
  var image = document.querySelector(".landing_background");
  var bigImage = document.createElement("img");

  bigImage.onload = function () {
    image.src = this.src;
    image.classList.remove("blur");
  };

  setTimeout(function () {
    bigImage.src = "./img/PhotoHalfing.jpg";
  }, 100);
}
replaceLandingImage();
