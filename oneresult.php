<!DOCTYPE html>
<html>


<div class="col-md-12">
            <a href="page1.php">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="image-and-text">
                  <img class="img-size img1" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/413174_68c84823-9cfd-49fb-bb2c-ce5f82944142.jpg">
                    <?php
                    echo '<div class="text-container" href=\'page1.php?producktArr_id='.$_SESSION['current_Item'].'\'>
                    <h4>'.$_SESSION['SearchResults'][$_SESSION['current_Item']][0].'</h4>
                    <h5 class="herst">'.$_SESSION['SearchResults'][$_SESSION['current_Item']][1].'</h5>
                    <p>"Der angeführte Preis ist ohne Gewähr"</p>
                  </div>';
                    ?>
                </div>
                <div class="right">
                  <img class="company-logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Media_Markt_logo.svg/2560px-Media_Markt_logo.svg.png" alt="Company Logo">
                  <?php
                    echo '<div class="Pricetxt">'.$_SESSION['SearchResults'][$_SESSION['current_Item']][2].'</div>';
                    ?>
                  <!--div class="heart1 bord"><i class="bi bi-heart-fill"></i></div>-->
                </div>
              </div>
            </a>
          </div>

</html>