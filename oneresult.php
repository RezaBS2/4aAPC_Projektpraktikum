<!DOCTYPE html>
<html>
<?php 
  $tmp = $_SESSION['current_Item'];
?>


<div class="col-md-12">
<?php
$_COOKIE['test'] = $_SESSION['SearchResults'];

            echo '<a href="page1.php?name='. $_SESSION['SearchResults'][$_SESSION['current_Item']][0] .'&firma=' .$_SESSION['SearchResults'][$_SESSION['current_Item']][1] .'">
      <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
        <div class="image-and-text">
          <img class="img-size img1" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/413174_68c84823-9cfd-49fb-bb2c-ce5f82944142.jpg">
          <div class="text-container">

<h4>' . $_SESSION['SearchResults'][$_SESSION['current_Item']][0] . '</h4>
                    <h5 class="herst">' . $_SESSION['SearchResults'][$_SESSION['current_Item']][1] . '</h5>
                    <p>"Der angeführte Preis ist ohne Gewähr"</p>
                  </div>
                    </div>
                    <div class="right">
                      <img class="company-logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Media_Markt_logo.svg/2560px-Media_Markt_logo.svg.png" alt="Company Logo">
                      <div class="Pricetxt">' . $_SESSION['SearchResults'][$_SESSION['current_Item']][2] . '</div>
                    </div>
                  </div>
                </a>';
            ?>
          </div>

</html>
</script>