<?php
// Start the session
//session_start();
$loggedIn = $_SESSION['logged_in'];
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
    <div class="cen">
      <div id="header" class="search-bar">
        <form class="search-form d-flex" method="POST" action="#">
          <input checked type="text" name="query" placeholder="Search" title="Enter search keyword">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div><!-- End Search Bar -->
    </div>
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
                <span class="badge bg-success badge-number">3</span>
              </a><!-- End Messages Icon -->


              <!-- Heart Icon -->
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages" style="border: 2px solid black;">
                <li class="dropdown-header">
                  <div class="hearttxt">Sachen die dir Gefallen
                    <i class="heartkl i bi-heart-fill"></i>
                  </div>
                </li>

                <hr class="dropdown-divider">
                <li>
                <li>
                <li class="message-item">
                  <img class="likepic likepic2" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
                  <b> Test</b>
                  <div class="message-content">
                    <b>
                      <h3 class="message-title"></h3>
                      <i class="heartkl2 i bi-heart-fill"></i>
                  </div>
                </li>
            </li>

            <hr class="dropdown-divider">
            <li>
            <li>
            <li class="message-item">
              <img class="likepic likepic2" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
              <b> Test</b>
              <div class="message-content">
                <b>
                  <h3 class="message-title"></h3>
                  <i class="heartkl2 i bi-heart-fill"></i>
              </div>
            </li>
            </li>

            <hr class="dropdown-divider">
            <li>
            <li>
            <li class="message-item">
              <img class="likepic likepic2" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
              <b> Test</b>
              <div class="message-content">
                <b>
                  <h3 class="message-title"></h3>
                  <i class="heartkl2 i bi-heart-fill"></i>
              </div>
            </li>
            </li>

            <hr class="dropdown-divider">
            <li>
            <li>
            <li class="message-item">
              <img class="likepic likepic2" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
              <b> Test</b>
              <div class="message-content">
                <b>
                  <h3 class="message-title"></h3>
                  <i class="heartkl2 i bi-heart-fill"></i>
              </div>
            </li>
            </li>

            <hr class="dropdown-divider">
            <li>
            <li>
            <li class="message-item">
              <img class="likepic likepic2" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
              <b> Test</b>
              <div class="message-content">
                <b>
                  <h3 class="message-title"></h3>
                  <i class="heartkl2 i bi-heart-fill"></i>
              </div>
            </li>
            </li>

            <hr class="dropdown-divider">
            <li>
            <li>
            <li class="message-item">
              <img class="likepic likepic2" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
              <b> Test</b>
              <div class="message-content">
                <b>
                  <h3 class="message-title"></h3>
                  <i class="heartkl2 i bi-heart-fill"></i>
              </div>
            </li>
            </li>

            <hr class="dropdown-divider">
            <li>
            <li>
            <li class="message-item">
              <img class="likepic likepic2" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
              <b> Test</b>
              <div class="message-content">
                <b>
                  <h3 class="message-title"></h3>
                  <i class="heartkl2 i bi-heart-fill"></i>
              </div>
            </li>
            </li>

            <hr class="dropdown-divider">
            <li>
            <li>
            <li class="message-item">
              <img class="likepic likepic2" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/192909_0ef6ec08-33d7-4cd1-989c-1c0819b0bbbd.jpg">
              <b> Test</b>
              <div class="message-content">
                <b>
                  <h3 class="message-title"></h3>
                  <i class="heartkl2 i bi-heart-fill"></i>
              </div>
            </li>
            </li>

          </ul>
          </li><!-- End Messages Nav -->

          <!-- End Heart Icon --->

          <!-- Profil Drop Down --->
          <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <span class="d-none d-sm-block dropdown-toggle ps-2"><?php
              try {
                      if ($loggedIn){
                          echo $_SESSION['username'];
                      }
                      else {
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
                    if ($loggedIn){echo $_SESSION['username'];}
                    else {echo 'User';}?>
                </h6>
                <span>Web Designer</span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                  <i class="bi bi-gear"></i>
                  <span>Account Settings</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                  <i class="bi bi-question-circle"></i>
                  <span>Need Help?</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <i class="bi bi-box-arrow-right"></i>
                  <!-- span>Sign Out</span -->
                    <span><input type="button" id="signout" name="signout" method="POST" title="Sign Out" action="
                    <?php
                        if($_SESSION['logged_in'])
                        {
                            $loggedIn = false;
                            $_SESSION['logged_in'] = false;
                            $_SESSION['username'] = "";
                            header("Refresh: 1; url=index.php");
                            //header("Refresh:0");
                        }

                      //echo "<a href=index.php>Sign Out</a>";
                      ?>"></span>

                </a>
              </li>
            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->
          </ul>
        </nav><!-- End Icons Navigation -->
      </div>
  </header><!-- End Header -->