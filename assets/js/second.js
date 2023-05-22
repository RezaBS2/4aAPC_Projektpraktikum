
AOS.init({
  duration: 1200,
})
/* Prelaoder*/
document.addEventListener("DOMContentLoaded", function () {
  var preloader = document.querySelector(".preloader");
  setTimeout(function () {
    preloader.classList.add("hidden");
  }, 1600); // 120000 Millisekunden entspricht 120 Sekunden
});

window.onload = function () {
  var bild = document.getElementById('meinBild');
  var aktuelleBreite = bild.width;
  var aktuelleBreite = bild.height;
  var zielBreite = 2000;
  var schrittweite = 2;
  var intervall = 1.5;

  var timer = setInterval(function () {
    if (aktuelleBreite >= zielBreite) {
      clearInterval(timer);
    } else {
      aktuelleBreite += schrittweite;
      bild.style.width = aktuelleBreite + 'px';
      bild.style.height = aktuelleBreite + 'px';
    }
  }, intervall);
}

// Get the button
let mybutton = document.getElementById("myBtn");

// Wenn der Benutzer 200px von der oberen Seite des Dokuments gescrollt hat, wird der Button angezeigt
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 450 || document.documentElement.scrollTop > 450) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

