
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

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  var mybutton = document.getElementById("myBtn");
  if (
    document.body.scrollTop > 450 ||
    document.documentElement.scrollTop > 50
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

var ratingInputs = document.querySelectorAll('.rating input');

ratingInputs.forEach(function (input) {
  input.addEventListener('change', function () {
    var rating = this.value;
    // Hier kannst du den Bewertungswert verwenden oder an einen Server senden
    console.log('Bewertung: ' + rating);
  });
});

function countCharacters(textarea) {
  var message = textarea.value;
  var characterCount = message.length;
  document.getElementById("characterCount").textContent = characterCount + " Zeichen geschrieben";
}

function countCharacters(textarea) {
  var message = textarea.value;
  var characterCount = message.length;
  var remainingCharacters = 500 - characterCount;
  document.getElementById("characterCount").textContent = characterCount + " Zeichen geschrieben";
  document.getElementById("remainingCharacters").textContent = "Noch " + remainingCharacters + " Zeichen übrig";
}

function searchbtn() {
  if (select('.search-bar-toggle')) {
    on('click', '.search-bar-toggle', function (e) {
      select('.search-bar').classList.toggle('search-bar-show')
    })
  }
}
// Definition der select()-Funktion zur Auswahl von Elementen
function select(selector) {
  return document.querySelector(selector);
}

// Definition der on()-Funktion zur Registrierung von Ereignishandlern
function on(event, selector, handler) {
  document.addEventListener(event, function (e) {
    const targetElement = e.target.closest(selector);
    if (targetElement) {
      handler(e, targetElement);
    }
  });
}

// Registrierung des Klickereignisses für den "Suche Starten"-Button
on('click', '.btn1', function (e) {
  if (select('.search-bar-toggle')) {
    select('.search-bar').classList.toggle('search-bar-show');
  }
});


