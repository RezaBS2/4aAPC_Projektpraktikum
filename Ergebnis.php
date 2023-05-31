<?php
// Start the session
session_start();
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
      <div class="section-title">
        <i>
          <h2 class="uber">Such Ergebnisse</h2>
        </i>
      </div>
      <div class="topi row">
        <div class="col-md-12 space">
          <a href="page1.php">
            <div class="icon-box " data-aos="fade-up" data-aos-delay="100">
              <img class="img-size" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
              <h4>SAMSUNG S22</h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </a>
        </div>
        <div class="col-md-12">
          <a href="page1.php">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <img class="img-size" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/413174_68c84823-9cfd-49fb-bb2c-ce5f82944142.jpg">
              <h4>Lorem Ipsum</h4>
              <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </a>
        </div>
        <div class="col-md-12, space">
          <a href="page1.php">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <img class="img-size" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/None_74b32542-34e3-44c7-a83a-3279055089bf.jpg">
              <h4>Lorem Ipsum</h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </a>
        </div>
        <div class="col-md-12, space">
          <a href="page1.php">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <img class="img-size" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
              <h4>Lorem Ipsum</h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </a>
        </div>
        <div class="col-md-12">
          <a href="page1.php">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <img class="img-size" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/413174_68c84823-9cfd-49fb-bb2c-ce5f82944142.jpg">
              <h4>Lorem Ipsum</h4>
              <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </a>
        </div>
        <div class="col-md-12, space">
          <a href="page1.php">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <img class="img-size" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/None_74b32542-34e3-44c7-a83a-3279055089bf.jpg">
              <h4>Lorem Ipsum</h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
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