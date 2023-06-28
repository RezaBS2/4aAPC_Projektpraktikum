<?php
if(session_status() === PHP_SESSION_NONE)
{
    session_start();
}

include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">

<?php
include "head.php";
?>
<?php
include "header.php"
?>
<?php
include "Sidebar.php";
?>
<?php
include "Hero.php";
?>

<body>
</body>

<main id="main" class="main">
</main>

<?php
include "footer.php";
?>

<!-- Template Main JS File -->
<section>
  <div class="preloader">
    <img id="meinBild" class="preimg" src="assets\img\logo.png" alt="Logo">
    <div class="loader"></div>
    <div class="corner-text">Version 1.1.4</div>
  </div>
</section>
</body>

</html>