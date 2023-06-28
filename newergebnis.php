<!DOCTYPE html>
<html>
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title1">
        </div>
        <div class="row">
            <div class="col-md-12">

                <?php

                if (count($_SESSION['SearchResults']) > 0) {

                    for ($i = 1; $i < count($_SESSION['SearchResults']); $i++) {
                        $_SESSION['current_Item'] = $i;

                        include 'oneresult.php';
                    }
                }
                ?>

            </div>
        </div>
    </div>
</section>

</html>