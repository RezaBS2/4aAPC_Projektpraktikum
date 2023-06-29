<section id="services" class="services section-bg">
    <div class="background-image"></div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div class="container" data-aos="fade-up">
        <div class="section-title1">
        </div>
        <div class="row">
            <div class="col-md-12">
                <main id="main" class="main">

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
<?php
include_once "footer2.php";
?>
<main id="main" class="main">
    <!-- Dropdown Filter -->
    <div class="dropdown2 d-flex align-items-center justify-content-end">
        <button class="btn dropdown-toggle" type="button" id="optionsDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="border: 3px solid black; background-color:white;">
            <i class="filtericon bi bi-sort-down-alt"></i>
        </button>
        <div class="dropdown-menu" style="border: 2px solid black; text-align: center;">
            <option class="textfilter" selected disabled><b>Filtern Nach:</b></option>
            <hr>
            <a class="dropdown-item textfilter" href="#">Preis Aufsteigend</a>
            <hr>
            <a class="dropdown-item textfilter" href="#">Preis Absteigend</a>
            <hr>
            <a class="dropdown-item textfilter" href="#">Beste Bewertung</a>
            <hr>
        </div>
    </div>
    <!--- Dropdown Filter End -->

</main>