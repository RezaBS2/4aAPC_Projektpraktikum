<?php
// Start the session
session_start();
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


<main id="main" class="main">
<div class="background-image"></div>
  <div class="section-title">
    <i>
      <u>
        <h2 class="uber">Kontakt</h2>
      </u>
    </i>
  </div>

  <section class="section contact">
  <div class="row">
    <div class="row justify-content-md-center justify-content-xl-center justify-content-sm-center">
      <div class="col-lg-9 col-sm-9 col-md-9 col-xl-9">
        <div class="c2 info-box card">
        <i class="bi bi-pin-map-fill txtcenter"></i>
          <h3 class="txtcenter">Publisher</h3>
          <p class="txtcenter">Berufsschule Linz 2<br>Wiener Str. 181, 4020 Linz</p>
          <div class="text-center">
            <img class="topi" src="https://bs-linz2.ac.at/fileadmin/user_upload/Berufsschule-Linz2/Bilder/Logo/bs2.PNG" width="200px" height="80px">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  </div>
  </div>

  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="row">
  <div class="col-lg-12 d-flex align-items-stretch">
    <div class="info bordertb">
      <div class="address">
        <i class="bi bi-geo-alt"></i>
     <u><h4>Adresse:</h4></u>
        <a href="https://www.google.com/maps/place/Berufsschule+Linz+2/@48.2778077,14.3119882,15z/data=!4m2!3m1!1s0x0:0xd11a61d6a61f789e?sa=X&ved=2ahUKEwjYysP8xo7_AhVlRPEDHRILBKUQ_BJ6BAhSEAg">
        <u> <p>Wiener Str. 181, 4020 Linz</p></u></a>
      </div>
      <div class="email">
        <i class="bi bi-envelope"></i>
        <u> <h4>E-Mail:</h4></u>
        <a href="mailto:bs-linz2.post@ooe.gv.at">
        <u><p>bs-linz2.post@ooe.gv.at</p></a></u>
      </div>
      <div class="phone">
        <i class="bi bi-phone"></i>
        <u> <h4>Telefon:</h4></u>
        <a href="tel:0732 772035800">
        <u><p>0732 772035800</p></u></a>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12833.959136156158!2d14.3119882!3d48.2778077!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477397da7180f8e9%3A0xd11a61d6a61f789e!2sBerufsschule%20Linz%202!5e1!3m2!1sde!2sat!4v1684955369466!5m2!1sde!2sat"  frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
    </div>
    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
      <div class="row">
        <div class="form-group col-md-6">
          <label for="name">Dein Name:</label>
          <input type="text" name="name" class="form-control" placeholder="Max" id="name" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Deine Email:</label>
          <input type="email" class="form-control" name="email" placeholder="Max@Musteremail.muster" id="email" required>
        </div>
      </div>
      <div class="form-group">
        <label for="subject">Thema:</label>
        <select class="form-control" name="subject" id="subject" required>
          <option value="">Bitte wählen Sie ein Thema aus</option>
          <option value="lob">Lob</option>
          <option value="seite">Website Allgemein</option>
          <option value="frage">Frage zur Website</option>
          <option value="fehler">Fehler in der Website</option>
          <option value="Account">Account Einstellungen</option>
          <option value="falsch">Falsch Information angegeben</option>
          <option value="anderes">Etwas anderes das nicht aufgelistet ist...</option>
        </select>
      </div>
      <div class="form-group">
        <label for="message">Nachricht:</label>
        <textarea class="form-control" name="message" placeholder="Deine Nachricht an uns" rows="10" oninput="countCharacters(this);" maxlength="500" required></textarea>
        <small id="characterCount">0 Zeichen geschrieben</small>
        <br>
        <small id="remainingCharacters">Maximal 500 Zeichen</small>
      </div>
      <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
      </div>
      <div class="text-center"><button type="submit">Send Message</button></div>
    </form>
  </div>
</div>

</main>

<?php
include "footer.php";
?>

</body>

</html>