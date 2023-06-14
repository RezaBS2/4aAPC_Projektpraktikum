<?php
// Start the session
if(session_status() === PHP_SESSION_NONE)
{
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<?php include "head.php"; ?>
<?php include "header.php"; ?>
<?php include "Sidebar.php"; ?>
<div class="background-image"></div>
<main id="main" class="main">
  <!-- Dropdown Filter -->
  <div class="dropdown2 d-flex align-items-center justify-content-end">
    <button class="btn dropdown-toggle" type="button" id="optionsDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="border: 3px solid black; background-color:white;">
      <i class="filtericon bi bi-sort-down-alt"></i>
    </button>
    <div class="dropdown-menu" style="border: 2px solid black; text-align: center;">
      <option class="textfilter" selected disabled><b>Filtern Nach:</b></option>
      <hr>
      <a class="dropdown-item textfilter" href="#">Preis Aufsteigend</a>
      <hr>
      <a class="dropdown-item textfilter" href="#">Preis Absteigend</a>
      <hr>
      <a class="dropdown-item textfilter" href="#">Beste Bewertung</a>
      <hr>
    </div>
  </div>
  <!--- Dropdown Filter End -->

  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title1">
        <i>
          <h2 class="uber">Suchergebnisse</h2>
        </i>
      </div>
      <div class="row">
        <div class="col-md-12">

        <div class="col-md-12">
  <a href="page1.php">
    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
      <div class="image-and-text">
        <img class="img-size img1" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/413174_68c84823-9cfd-49fb-bb2c-ce5f82944142.jpg">
        <div class="text-container">
          <h4>Samsung</h4>
          <p>
            <i class="bi bi-star-fill star1"></i>
            <i class="bi bi-star-fill star1"></i>
            <i class="bi bi-star-half star1"></i>
            <i class="bi bi-star star1"></i>
            <i class="bi bi-star star1"></i>
          </p>
          <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        </div>
      </div>
      <div class="right">
        <img class="company-logo" src="https://www.pado-shopping.at/wp-content/uploads/2020/09/media-markt_logo-1.png" alt="Company Logo">
        <div class="Pricetxt">999,99€</div>
        <div class="heart1 bord"><i class="bi bi-heart-fill"></i></div>
      </div>
    </div>
  </a>
</div>

<div class="col-md-12">
  <a href="page1.php">
    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
      <div class="image-and-text">
        <img class="img-size img1" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/413174_68c84823-9cfd-49fb-bb2c-ce5f82944142.jpg">
        <div class="text-container">
          <h4>Samsung</h4>
          <p>
            <i class="bi bi-star-fill star1"></i>
            <i class="bi bi-star-fill star1"></i>
            <i class="bi bi-star-half star1"></i>
            <i class="bi bi-star star1"></i>
            <i class="bi bi-star star1"></i>
          </p>
          <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        </div>
      </div>
      <div class="right">
        <img class="company-logo" src="https://www.pado-shopping.at/wp-content/uploads/2020/09/media-markt_logo-1.png" alt="Company Logo">
        <div class="Pricetxt">999,99€</div>
        <div class="heart1 bord"><i class="bi bi-heart-fill"></i></div>
      </div>
    </div>
  </a>
</div>

<div class="col-md-12">
  <a href="page1.php">
    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
      <div class="image-and-text">
        <img class="img-size img1" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/413174_68c84823-9cfd-49fb-bb2c-ce5f82944142.jpg">
        <div class="text-container">
          <h4>Samsung</h4>
          <p>
            <i class="bi bi-star-fill star1"></i>
            <i class="bi bi-star-fill star1"></i>
            <i class="bi bi-star-half star1"></i>
            <i class="bi bi-star star1"></i>
            <i class="bi bi-star star1"></i>
          </p>
          <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        </div>
      </div>
      <div class="right">
        <img class="company-logo" src="https://www.pado-shopping.at/wp-content/uploads/2020/09/media-markt_logo-1.png" alt="Company Logo">
        <div class="Pricetxt">999,99€</div>
        <div class="heart1 bord"><i class="bi bi-heart-fill"></i></div>
      </div>
    </div>
  </a>
</div>

<div class="col-md-12">
  <a href="page1.php">
    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
      <div class="image-and-text">
        <img class="img-size img1" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/413174_68c84823-9cfd-49fb-bb2c-ce5f82944142.jpg">
        <div class="text-container">
          <h4>Samsung</h4>
          <p>
            <i class="bi bi-star-fill star1"></i>
            <i class="bi bi-star-fill star1"></i>
            <i class="bi bi-star-half star1"></i>
            <i class="bi bi-star star1"></i>
            <i class="bi bi-star star1"></i>
          </p>
          <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        </div>
      </div>
      <div class="right">
        <img class="company-logo" src="https://www.pado-shopping.at/wp-content/uploads/2020/09/media-markt_logo-1.png" alt="Company Logo">
        <div class="Pricetxt">999,99€</div>
        <div class="heart1 bord"><i class="bi bi-heart-fill"></i></div>
      </div>
    </div>
  </a>
</div>

<div class="col-md-12">
  <a href="page1.php">
    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
      <div class="image-and-text">
        <img class="img-size img1" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/413174_68c84823-9cfd-49fb-bb2c-ce5f82944142.jpg">
        <div class="text-container">
          <h4>Samsung</h4>
          <p>
            <i class="bi bi-star-fill star1"></i>
            <i class="bi bi-star-fill star1"></i>
            <i class="bi bi-star-half star1"></i>
            <i class="bi bi-star star1"></i>
            <i class="bi bi-star star1"></i>
          </p>
          <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        </div>
      </div>
      <div class="right">
        <img class="company-logo" src="https://www.pado-shopping.at/wp-content/uploads/2020/09/media-markt_logo-1.png" alt="Company Logo">
        <div class="Pricetxt">999,99€</div>
        <div class="heart1 bord"><i class="bi bi-heart-fill"></i></div>
      </div>
    </div>
  </a>
</div>




</main><!-- End #main -->
<?php
include "footer2.php";
?>
<?php
include "footer.php";
?>

<!-- Template Main JS File -->
</body>

</html>