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

  <div class="section-title">
    <i>
      <u>
      <h2 class="uber">Kontakt</h2>
      </u>
    </i>
  </div>

  <section class="section contact">

    <div class="row gy-4">

      <div class="col-xl-12">

        <div class="row justify-content-md-center">
          <div class="col-lg-6">
            <div class="info-box card">
              <i class="bi bi-geo-alt txtcenter"></i>
              <h3 class="txtcenter">Address</h3>
              <p class="txtcenter">A108 Adam Street,<br>New York, NY 535022</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="info-box card">
              <i class="bi bi-geo-alt txtcenter"></i>
              <h3 class="txtcenter">Address</h3>
              <p class="txtcenter">A108 Adam Street,<br>New York, NY 535022</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="info-box card">
              <i class="bi bi-geo-alt txtcenter"></i>
              <h3 class="txtcenter">Address</h3>
              <p class="txtcenter">A108 Adam Street,<br>New York, NY 535022</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="info-box card">
              <i class="bi bi-geo-alt txtcenter"></i>
              <h3 class="txtcenter">Address</h3>
              <p class="txtcenter">A108 Adam Street,<br>New York, NY 535022</p>
            </div>
          </div>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe class="map topi2" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12833.959136156158!2d14.3119882!3d48.2778077!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477397da7180f8e9%3A0xd11a61d6a61f789e!2sBerufsschule%20Linz%202!5e1!3m2!1sde!2sdk!4v1684478755067!5m2!1sde!2sdk">
        </iframe>
      </div>

      <div class="col-xl-12">
        <div class="card p-4">
          <form action="forms/contact.php" method="post" class="php-email-form">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>
</main>

<?php
include "footer.php";
?>

</body>

</html>