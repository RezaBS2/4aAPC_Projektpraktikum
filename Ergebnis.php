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
        <form method="POST">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-12">
                <a href="page1.php">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="image-and-text">
                      <img class="img-size img1" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/413174_68c84823-9cfd-49fb-bb2c-ce5f82944142.jpg">
                      <div class="text-container">
                        <h4 name="article1" id="article1" value="iPhone 12 Pro">iPhone 12 Pro</h4>
                          <!-- Anfang Reza Anteil -->
                          <!-- input type ="hidden" value="" -->
                          <!-- script type="text/javascript">
                              $(function(){ // I use jQuery in this example
                                  document.getElementById('article1').onclick =
                                      function () { alert('Hi'); };
                              });
                          </script -->
                          
                          <?php
                          
                          //echo '<input type="hidden" name="thidden" value="TestHidden">';
                          //echo '<input type="hidden" name="username1" value="'.$_POST['usernameReset'].'">';
                          //echo '<script>alert("Hidden:'.$_POST['thidden'].'")</script>';



                          $vari ='nameArticle1';
                          //$_SESSION['nameArticle1'] = "test";
                          $_SESSION[$vari] = "test";
                            echo '<script>alert("Thing:'.$_SESSION[$vari].'")</script>';
                            //echo '<script>alert("Thing:'.$_POST["article1"].'  '.$_POST.'")</script>';
                           //echo 'document.getElementById("article1")';
                          ?>
                          <!-- Ende Reza Anteil -->
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
                <a href="page1.php">
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
                <a href="page1.php">
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
                <a href="page1.php">
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
                <a href="page1.php">
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
                <a href="page1.php">
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
                <a href="page1.php">
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
                <a href="page1.php">
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
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Zurück</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">Weiter</a></li>
                  </ul>
                </nav><!-- End Basic Pagination -->
              </div>

            </div>
          </div>
        </form>
    </div>
  </section>
</main>
<?php
include "footer2.php";
?>
<?php
include "footer.php";
?>

<!-- Template Main JS File -->
</body>

</html>