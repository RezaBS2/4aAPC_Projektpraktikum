<!DOCTYPE html>
<html>

<?php 
  $tmp = $_SESSION['current_Item'];
?>


<div class="col-md-12">
<?php
$_COOKIE['test'] = $_SESSION['SearchResults'];

$firma = $_SESSION['SearchResults'][$_SESSION['current_Item']][1];

$itemname = $_SESSION['SearchResults'][$_SESSION['current_Item']][0];

$preis = $_SESSION['SearchResults'][$_SESSION['current_Item']][2];

$categorie = $_SESSION['SearchResults'][$_SESSION['current_Item']][3];

$lat = $_SESSION['SearchResults'][$_SESSION['current_Item']][4];

$lon = $_SESSION['SearchResults'][$_SESSION['current_Item']][5];

            echo '<a href="page1.php?name='. $itemname .'&firma=' .$firma .'&preis='. $preis .'&categorie='. $categorie . '&lat=' . $lat . '&lon=' . $lon . '">
      <div class="icon-box">
        <div class="image-and-text">
          <img class="img-size img1" src="' . 
          ($categorie==1?'\assets\img\Kamera.jpg':
          ($categorie==2?'\assets\img\Handy.jpg':
          ($categorie==3?'\assets\img\Laptop.jpg':
          ($categorie==4?'\assets\img\Lautsprecher.jpg':'\assets\img\Smartwatch.jpg'
          )))) .'">
          <div class="text-container">

<i><h4 class="herst2">' . $itemname . '</h4></i>
                    <h5 class="herst">' . 'Gefunden bei: <br>'. $firma . '</h5>
                    <p>"Der angeführte Preis ist ohne Gewähr"</p>
                  </div>
                    </div>
                    <div class="right">
                      <img class="company-logo" src="' . 
                      ($firma=="Hartlauer Dornach"?'\assets\img\hartlauer.png':
                      ($firma=="Conrad Leonding"?'\assets\img\Conrad.png':
                      ($firma=="Mediamarkt Pluscity"?'\assets\img\mediamarkt.png':
                    ($firma=="A1 Linz Altstadt"?'\assets\img\A1.jpg':
                      ($firma=="Mediamarkt Passage"?'\assets\img\mediamarkt.png':
                      ($firma=="A1 Pluscity"?'\assets\img\A1.png':'\assets\img\hartlauer.png'
                      )))))) .'" alt="Company Logo">
                      <br><br>
                      <b><div class="Pricetxt">' . $preis . '€</div></b>
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