<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}



?>

<!DOCTYPE html>
<html lang="en">

<body>
  <header class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img class="logo1" src="assets/img/logo.png" alt="">
        <span class="logosc">SKIMP®</span>
      </a>
    </div><!-- End Logo -->
    <!-- ======= Header ======= -->




    <div class="leer">
      <div class="d-flex align-items-center justify-content-end toggle-icon-container">
        <i class="bi bi-list toggle-sidebar-btn"></i>

        

        <nav class="header-nav ms-4">
          <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-xl-none">
              <a class="nav-link nav-icon search-bar-toggle " href="#">
                <i class="bi bi-search"></i>
              </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown">

              <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="heart bi bi-heart-fill"></i>
              </a><!-- End Messages Icon -->


              <!-- Heart Icon -->
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                <li class="dropdown-header">
                  <div class="hearttxt">Merkliste
                    <i class="heartkl i bi-heart-fill"></i>
                  </div>
                </li>
                <!-- Anfang Favoritenlisteninhalt  -->

                  <!-- Anfang Reza Anteil -->
                  <form method="POST">

                      <!-- Input für den Source-Pfad des Bildes
                      <input type="hidden" name="imgsrc" value="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
                      -->
                  </form>
                      <?php
                      try {
                          include_once 'functions.php';


                          $dir = 'myDir';
                          $myfilepath = './'.$dir.'/'.'tempfile.txt';
                          if (file_exists($myfilepath))
                          {
                              $myfile = fopen($myfilepath, "r");

                              $usernamefromfile = fgets($myfile);
                              if(strlen($usernamefromfile) > 0)
                              {
                                $user_id = return_user_id($usernamefromfile);
                                //echo '<script>alert("user_id: '.$user_id.'    '.$usernamefromfile.'")</script>';
                                $imgs="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg";
                                getRememberedItemsForUserToList($user_id, $imgs);
                              }
                              fclose($myfile);
                          }

                      }
                      catch (Exception $favex)
                      {
                          echo $favex->getCode() . ': ' . $favex->getMessage() . '<br>;';
                      }

                      ?>





                  <!-- Ende Reza Anteil -->

                <!--hr class="dropdown-divider">
                <li class="message-item">
                  <img class="likepic likepic2" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
                  <b> TestErgebnis1</b>
                  <div class="message-content">
                    <b>
                      <h3 class="message-title"></h3>
                      <i class="heartkl2 i bi-heart-fill"></i>
                  </div>
                </li>

                <hr class="dropdown-divider">
                <li class="message-item">
                  <img class="likepic likepic2" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
                  <b> Test</b>
                  <div class="message-content">
                    <b>
                      <h3 class="message-title"></h3>
                      <i class="heartkl2 i bi-heart-fill"></i>
                  </div>
                </li>

                <hr class="dropdown-divider">
                <li class="message-item">
                  <img class="likepic likepic2" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
                  <b> Test</b>
                  <div class="message-content">
                    <b>
                      <h3 class="message-title"></h3>
                      <i class="heartkl2 i bi-heart-fill"></i>
                  </div>
                </li>

                <hr class="dropdown-divider">
                <li class="message-item">
                  <img class="likepic likepic2" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
                  <b> Test</b>
                  <div class="message-content">
                    <b>
                      <h3 class="message-title"></h3>
                      <i class="heartkl2 i bi-heart-fill"></i>
                  </div>
                </li>

                <hr class="dropdown-divider">
                <li class="message-item">
                  <img class="likepic likepic2" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
                  <b> Test</b>
                  <div class="message-content">
                    <b>
                      <h3 class="message-title"></h3>
                      <i class="heartkl2 i bi-heart-fill"></i>
                  </div>
                </li>

                <hr class="dropdown-divider">
                <li class="message-item">
                  <img class="likepic likepic2" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
                  <b> Test</b>
                  <div class="message-content">
                    <b>
                      <h3 class="message-title"></h3>
                      <i class="heartkl2 i bi-heart-fill"></i>
                  </div>
                </li>

                <hr class="dropdown-divider">
                <li class="message-item">
                  <img class="likepic likepic2" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
                  <b> Test</b>
                  <div class="message-content">
                    <b>
                      <h3 class="message-title"></h3>
                      <i class="heartkl2 i bi-heart-fill"></i>
                  </div>
                </li>

                <hr class="dropdown-divider">
                <li class="message-item">
                  <img class="likepic likepic2" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
                  <b> Test</b>
                  <div class="message-content">
                    <b>
                      <h3 class="message-title"></h3>
                      <i class="heartkl2 i bi-heart-fill"></i>
                  </div>
                </li-->
                  <!-- Ende Favoritenliste  -->
              </ul>
            </li><!-- End Messages Nav -->

            <!-- End Heart Icon --->

            <!-- Profil Drop Down --->
            <li class="nav-item dropdown pe-3">
              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                <span class="d-none d-sm-block dropdown-toggle ps-2">
                  <?php
                  try {
                       /*if (isset($_SESSION['logged_in']) &&  isset($_SESSION['username'])){
                            echo $_SESSION['username'];
                      }
                         else {
                             echo 'User';
                     
                          }*/


                          $dir = 'myDir';
                          $myfilepath = './'.$dir.'/'.'tempfile.txt';
                          if (file_exists($myfilepath))
                          {
                            $myfile = fopen($myfilepath, "r");

                            $usernamefromfile = fgets($myfile);
                            if(strlen($usernamefromfile)>0)
                            {
                              echo $usernamefromfile;
                            }
                            else
                            {
                              echo 'User';
                            }

                            fclose($myfile);
                          }
                          else 
                          {
                              echo 'User';
                          }

                     } catch (Exception $e)
                    {
                        echo 'Error - Anmeldung: '.$e->getCode().': '.$e->getMessage().'<br>';
                     }
                  ?></span>
              </a><!-- End Profile Iamge Icon -->
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" style="border: 2px solid black;">
                <li class="dropdown-header">
                  <h6><?php
                      #    if ($loggedIn){echo $_SESSION['username'];}
                      #    else {echo 'User';}
                      ?>
                  </h6>
                  <U> <span>Einstellungen</span></u>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="pages-login.php">
                    <i class="bi bi-person-fill-check"></i>
                    <span>Login</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="pages-register.php">
                    <i class="bi bi-person-fill-add"></i>
                    <span>Registrieren</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="pages-pwreset2.php">
                    <i class="bi bi-person-fill-gear"></i>
                    <span>PW-Reset</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="logout.php">
                    <i class="bi bi-person-fill-dash"></i>
                    <span>Sign Out</span>
                    <span>

                    </span>

                  </a>
                </li>
              </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->
          </ul>
        </nav><!-- End Icons Navigation -->
      </div>
  </header><!-- End Header -->