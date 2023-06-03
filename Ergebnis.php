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
      <div class="section-title1">
        <i>
          <h2 class="uber2">Such Ergebnisse</h2>
        </i>
      </div>
      <div class="row">
        <div class="col-md-12">

          <div class="col-md-12">
            <a href="work.php">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="image-and-text">
                  <img class="img-size img1" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/413174_68c84823-9cfd-49fb-bb2c-ce5f82944142.jpg">
                  <div class="text-container">
                    <h4>iPhone 12 Pro</h4>
                    <h5 class="herst">APPLE</h5>
                    <p>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-half star1"></i>
                      <i class="bi bi-star star1"></i>
                    </p>
                    <p>"Der angeführte Preis ist ohne Gewähr"</p>
                  </div>
                </div>
                <div class="right">
                  <img class="company-logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Media_Markt_logo.svg/2560px-Media_Markt_logo.svg.png" alt="Company Logo">
                  <div class="Pricetxt">999,99€</div>
                  <div class="heart1 bord"><i class="bi bi-heart-fill"></i></div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-12">
            <a href="work.php">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="image-and-text">
                  <img class="img-size img1" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/None_74b32542-34e3-44c7-a83a-3279055089bf.jpg">
                  <div class="text-container">
                    <h4>Galaxy S21 5G Dual Sim</h4>
                    <h5 class="herst">Samsung</h5>
                    <p>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-half star1"></i>
                      <i class="bi bi-star star1"></i>
                      <i class="bi bi-star star1"></i>
                    </p>
                    <p>"Der angeführte Preis ist ohne Gewähr"</p>
                  </div>
                </div>
                <div class="right">
                  <img class="company-logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/2560px-Amazon_logo.svg.png" alt="Company Logo">
                  <div class="Pricetxt">999,99€</div>
                  <div class="heart1 bord"><i class="bi bi-heart-fill"></i></div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-12">
            <a href="work.php">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="image-and-text">
                  <img class="img-size img1" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/413174_68c84823-9cfd-49fb-bb2c-ce5f82944142.jpg">
                  <div class="text-container">
                    <h4>iPhone 12 Pro</h4>
                    <h5 class="herst">APPLE</h5>
                    <p>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-half star1"></i>
                      <i class="bi bi-star star1"></i>
                      <i class="bi bi-star star1"></i>
                    </p>
                    <p>"Der angeführte Preis ist ohne Gewähr"</p>
                  </div>
                </div>
                <div class="right">
                  <img class="company-logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Magenta_Telekom_Logo.svg/1310px-Magenta_Telekom_Logo.svg.png" alt="Company Logo">
                  <div class="Pricetxt">999,99€</div>
                  <div class="heart1 bord"><i class="bi bi-heart-fill"></i></div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-12">
            <a href="work.php">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="image-and-text">
                  <img class="img-size img1" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/None_74b32542-34e3-44c7-a83a-3279055089bf.jpg">
                  <div class="text-container">
                    <h4>Galaxy S21 5G Dual Sim</h4>
                    <h5 class="herst">Samsung</h5>
                    <p>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star star1"></i>
                      <i class="bi bi-star star1"></i>
                    </p>
                    <p>"Der angeführte Preis ist ohne Gewähr"</p>
                  </div>
                </div>
                <div class="right">
                  <img class="company-logo" src="https://upload.wikimedia.org/wikipedia/commons/9/93/Sh%C3%B6pping.at_logo.svg">
                  <div class="Pricetxt">999,99€</div>
                  <div class="heart1 bord"><i class="bi bi-heart-fill"></i></div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-12">
            <a href="work.php">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="image-and-text">
                  <img class="img-size img1" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/413174_68c84823-9cfd-49fb-bb2c-ce5f82944142.jpg">
                  <div class="text-container">
                    <h4>iPhone 12 Pro</h4>
                    <h5 class="herst">APPLE</h5>
                    <p>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-half star1"></i>
                      <i class="bi bi-star star1"></i>
                    </p>
                    <p>"Der angeführte Preis ist ohne Gewähr"</p>
                  </div>
                </div>
                <div class="right">
                  <img class="company-logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Media_Markt_logo.svg/2560px-Media_Markt_logo.svg.png" alt="Company Logo">
                  <div class="Pricetxt">999,99€</div>
                  <div class="heart1 bord"><i class="bi bi-heart-fill"></i></div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-12">
            <a href="work.php">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="image-and-text">
                  <img class="img-size img1" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/None_74b32542-34e3-44c7-a83a-3279055089bf.jpg">
                  <div class="text-container">
                    <h4>Galaxy S21 5G Dual Sim</h4>
                    <h5 class="herst">Samsung</h5>
                    <p>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star star1"></i>
                      <i class="bi bi-star star1"></i>
                    </p>
                    <p>"Der angeführte Preis ist ohne Gewähr"</p>
                  </div>
                </div>
                <div class="right">
                  <img class="company-logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/2560px-Amazon_logo.svg.png" alt="Company Logo">
                  <div class="Pricetxt">999,99€</div>
                  <div class="heart1 bord"><i class="bi bi-heart-fill"></i></div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-12">
            <a href="work.php">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="image-and-text">
                  <img class="img-size img1" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/413174_68c84823-9cfd-49fb-bb2c-ce5f82944142.jpg">
                  <div class="text-container">
                    <h4>iPhone 12 Pro</h4>
                    <h5 class="herst">APPLE</h5>
                    <p>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-half star1"></i>
                      <i class="bi bi-star star1"></i>
                    </p>
                    <p>"Der angeführte Preis ist ohne Gewähr"</p>
                  </div>
                </div>
                <div class="right">
                  <img class="company-logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Magenta_Telekom_Logo.svg/1310px-Magenta_Telekom_Logo.svg.png" alt="Company Logo">
                  <div class="Pricetxt">999,99€</div>
                  <div class="heart1 bord"><i class="bi bi-heart-fill"></i></div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-12">
            <a href="work.php">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="image-and-text">
                  <img class="img-size img1" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/None_74b32542-34e3-44c7-a83a-3279055089bf.jpg">
                  <div class="text-container">
                    <h4>Galaxy S21 5G Dual Sim</h4>
                    <h5 class="herst">Samsung</h5>
                    <p>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star-fill star1"></i>
                      <i class="bi bi-star star1"></i>
                      <i class="bi bi-star star1"></i>
                    </p>
                    <p>"Der angeführte Preis ist ohne Gewähr"</p>
                  </div>
                </div>
                <div class="right">
                  <img class="company-logo" src="https://upload.wikimedia.org/wikipedia/commons/9/93/Sh%C3%B6pping.at_logo.svg">
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