<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>
<?php include "header.php"; ?>
<?php include "Sidebar.php"; ?>

<body>
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="fade-down" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1 class="hero-title">SKIMP®</h1>
          <h3 class="typed hero-subtitle1"></h3>
          <h3 class="typed hero-subtitle2"></h3>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <?php include "footer.php"; ?>

  <!-- Template Main JS File -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
  <script>
    const typedSubtitle1 = new Typed('.typed.hero-subtitle1', {
      strings: [
        'Herzlich Willkommen',
      ],
      loop: true,
      typeSpeed: 80,
      backSpeed: 50,
      backDelay: 5000
    });
    const typedSubtitle2 = new Typed('.typed.hero-subtitle2', {
      strings: [
        'Finden sie bei uns den besten Preis!',
      ],
      loop: true,
      typeSpeed: 50,
      backSpeed: 50,
      backDelay: 5000
    });
  </script>
</body>

</html>
