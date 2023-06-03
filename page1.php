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
          <h2 class="uber2">Details</h2>
        </i>
      </div>
      <div class="row">
        <div class="col-md-12">

          <div class="col-md-12">
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
              <section class="section profile">

                <!---Detail Start--->

                <div class="row">
                  <div class="col-xl-12">
                    <div class="card">
                      <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                          <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#test1">Overview</button>
                          </li>

                          <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#test2">Settings</button>
                          </li>

                          <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#test3">Change </button>
                          </li>

                          <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#test4">Other </button>
                          </li>

                          <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#test5">Else </button>
                          </li>

                          <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#test6">Try </button>
                          </li>

                        </ul>
                        <div class="tab-content pt-2">

                          <div class="tab-pane fade show active" id="test1">
                            <p>Test1</p>
                          </div>

                          <div class="tab-pane fade" id="test2">
                            <p>Testt</p>
                          </div>

                          <div class="tab-pane fade" id="test3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">s</label>
                            <p>Testttt</p>
                          </div>


                          <div class="tab-pane fade" id="test4">
                            <p>Testt</p>
                          </div>

                          <div class="tab-pane fade" id="test5">
                            <p>Testdt</p>
                          </div>

                          <div class="tab-pane fade" id="test6">
                            <p>Tesstt</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div><!-- End Bordered Tabs -->
<br><br><br><br>
          </div>
        </div>
      </div>
    </div>
  </section>

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