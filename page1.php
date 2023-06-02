<?php

session_start();
?>

<!DOCTYPE html>
<html lang="de">

<?php
include "head.php";
?>

<?php
include "header.php";

?>

<?php
include "Sidebar.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detailierter Ansicht</title>
    <link rel="stylesheet" href="css/bpptstrap.min.css">
    <script type="text/javascript" src="assets/js/googlemap.js"></script>
    <style type="text/css">
        .container {
            height: 450px;
        }
        #googlemap {
            width: 75%;
            height: 100%;
            border: 1px solid blue;
        }
    </style>
</head>

<main id="main" class="main">

  <section id="services" class="services section-bg ">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <i>
          <h2 class="uber">Such Ergebnisse</h2>
        </i>
      </div>

      <div class="topi, row">
        <div class="col-md-12">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <img class="img-size2" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
            <div class="text-justify">
              <span class="vert-line"></span>
              <h4>SAMSUNG S22
                <br><br><br>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident
                </p>
              </h4>
            </div>
            <img class="geslog" src="https://www.pado-shopping.at/wp-content/uploads/2020/09/media-markt_logo-1.png">
            <div class="hrd star">
              <i class="bi bi-star"></i>
              <i class="bi bi-star"></i>
              <i class="bi bi-star"></i>
              <i class="bi bi-star"></i>
              <i class="bi bi-star"></i>
            </div>

            <br>
            <br>
            <br>
            <hr>
          </div>

          <div data-aos="fade-up" class="container">
            <div id="googlemap"></div>
          </div>
          <div data-aos="fade-up">
            <iframe class="map3 topi2" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12833.959136156158!2d14.3119882!3d48.2778077!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477397da7180f8e9%3A0xd11a61d6a61f789e!2sBerufsschule%20Linz%202!5e1!3m2!1sde!2sdk!4v1684478755067!5m2!1sde!2sdk">
            </iframe>
          </div>

          <div class="section error-404  d-flex flex-column align-items-center justify-content-center">
            <a class="btn" onclick="history.back()">Back to home</a>
          </div>
        </div>
</main><!-- End #main -->
<?php
include "footer2.php";
?>
<?php
include "footer.php";
?>
</body>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAE-9-itGaSPetW7EPKvZ_E149JtnQ7-Bo&callback=loadMap">
        </script>

</html>