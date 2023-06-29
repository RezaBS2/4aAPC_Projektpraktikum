<!DOCTYPE html>
<html>

<?php 
  $tmp = $_SESSION['current_Item'];
?>


<div class="col-md-12">
<?php
$_COOKIE['test'] = $_SESSION['SearchResults'];

            echo '<a href="page1.php?name='. $_SESSION['SearchResults'][$_SESSION['current_Item']][0] .'&firma=' .$_SESSION['SearchResults'][$_SESSION['current_Item']][1] .'">
      <div class="icon-box">
        <div class="image-and-text">
          <img class="img-size img1" src="\assets\img\Handy.jpg">
          <div class="text-container">

<u class="u"><i><h4 class="herst2">' . $_SESSION['SearchResults'][$_SESSION['current_Item']][0] . '</h4></i>
                    <h5 class="herst">' . 'Gefunden bei: <br>'. $_SESSION['SearchResults'][$_SESSION['current_Item']][1] . '</h5>
                    
                    <p>"Der angeführte Preis ist ohne Gewähr"</p>
                  </div>
                    </div>
                    <div class="right"></u>
                      <img class="company-logo" src="\assets\img\Shöpping.at_logo.svg.png" alt="Company Logo">
                      <br><br>
                      <b><div class="Pricetxt">' . $_SESSION['SearchResults'][$_SESSION['current_Item']][2] . '€</div></b>
                    </div>
                  </div>
                </a>';
            ?>
          </div>
          <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
          <?php
include_once "footer.php";
?>
</html>
</script>