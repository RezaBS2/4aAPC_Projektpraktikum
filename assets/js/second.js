
  AOS.init({
    duration: 1200,
  })
/* Prelaoder*/
document.addEventListener("DOMContentLoaded", function() {
  var preloader = document.querySelector(".preloader");
  setTimeout(function() {
    preloader.classList.add("hidden");
  }, 1200); // 120000 Millisekunden entspricht 120 Sekunden
});
