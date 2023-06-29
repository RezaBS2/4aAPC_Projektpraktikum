<?php
// Start the session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

//
?>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<?php include_once "head.php"; ?>
<?php include_once "header2.php"; ?>
<?php include_once "functions.php"; ?>
<?php include_once "Sidebar.php"; ?>

<div class="background-image"></div>
<main id="main" class="main">

    <section id="services" class="services section-bg">
        <div class="container">
            <div class="section-title1">
                <i>
                    <h2 class="uber2">Details</h2>
                </i>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="icon-box">
                            <div class="image-and-text">
                                <?php

                                $categorie = $_GET['categorie'];

                                echo '<img class="img-size img1" src="' .
                                    ($categorie == 1 ? '\assets\img\Kamera.jpg' : ($categorie == 2 ? '\assets\img\Handy.jpg' : ($categorie == 3 ? '\assets\img\Laptop.jpg' : ($categorie == 4 ? '\assets\img\Lautsprecher.jpg' : '\assets\img\Smartwatch.jpg'
                                    )))) . '">
                                <div class="text-container">
                                    <!-- Anfang Reza Anteil -->

                                    <!-- -->
                                    <!-- Bewerttungsanzeige mit Sternen -->
                                    <p>';


                                try {
                                    //$cn = $_SESSION['currentcompany'];


                                    //$cn = "Mediamarkt Pluscity";
                                    if (isset($_GET['firma']))
                                        $cn = $_GET['firma'];       //companyname
                                    $_SESSION['compdiag'] = $cn;
                                    echo '<p>' . $cn . '</p>';
                                    $comp_id = return_comp_id($_GET['firma']); //comp_id

                                    //$pn = $_SESSION['currentproduct'];

                                    $pn = $_GET['name'];        //productname
                                    $_SESSION['proddiag'] = $pn;
                                    echo '<p>' . $pn . '</p>';

                                    //$pn = "iPhone 13 Pro Max";

                                    $prod_id = return_prod_id($pn);

                                    $prod_comp_id = return_prod_comp_id($prod_id, $comp_id);

                                    $avgnodec = returnAVGnoDecimals($prod_comp_id);
                                    $avgonedec = returnAVGoneDecimal($prod_comp_id);

                                    //Testwerte
                                    //$avgnodec = 3;
                                    //$avgonedec = 3.4;
                                    //echo '<script>alert("$avgnodec: '.$avgnodec.' $avgonedec: '.$avgonedec.'")</script>';

                                    returnRatings($avgnodec, $avgonedec);
                                } catch (Exception $exce) {
                                    echo $exce->getCode() . ': ' . $exce->getMessage() . '<br>;';
                                }



                                ?>
                                </p>
                                <!-- Ende der Bewerttungsanzeige mit Sternen -->
                                <hr style="color: black;">
                                <p>Für mehr Details auf den Button Drücken</p>
                                <hr style="color: black;">
                                <button class="btf2 btn btn-danger" id="detailsBtn">Details</button>
                            </div>
                        </div>
                        <form method="POST">
                            <input type="hidden" name="companyname1" value="Mediamarkt Pluscity">
                            <input type="hidden" name="productname1" value="iPhone 13 Pro Max">

                            <div class="right">
                                <?php
                                $cn = $_GET['firma'];

                                echo '<img class="company-logo" src="' .
                                    ($cn == "Hartlauer Dornach" ? '\assets\img\hartlauer.png' : ($cn == "Conrad Leonding" ? '\assets\img\Conrad.png' : ($cn == "Mediamarkt Pluscity" ? '\assets\img\mediamarkt.png' : ($cn == "A1 Linz Altstadt" ? '\assets\img\A1.png' : ($cn == "Mediamarkt Passage" ? '\assets\img\mediamarkt.png' : ($cn == "A1 Pluscity" ? '\assets\img\A1.png' : '\assets\img\hartlauer.png'
                                    )))))) . '" alt="Company Logo">
                                    <br><br>
                                    <b><div class="Pricetxt">' . $_GET['preis'] . '</div></b>'
                                ?>

                                <!--i class="bi bi-heart-fill"-->
                                <i>
                                    <!--input class="heart1 bord" type="submit" name="fav" value="♥"-->
                                    <?php
                                    //$_SESSION['logged_in'] = 0;
                                    if (isset($_SESSION['logged_in'])) {
                                        //echo '<script>alert("$_SESSION[logged_in]: '.$_SESSION['logged_in'].'")</script>';
                                        echo '<input class="heart1 bord" type="submit" name="fav" value=" ♥ " style="font-size: 55px;">';
                                        if (isset($_POST['fav'])) {
                                            include_once 'fave-product.php';
                                        }
                                    }
                                    ?>
                                </i>

                            </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

    </section>
    <section id="contact1" class="contact" style="display: none;">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="info bordertb">
                        <u>
                            <h2 class="ubermini">Weitere Details:</h2>
                            <br>
                        </u>
                        <div class="col-xl-12">

                            <div class="card">
                                <div class="card-body pt-3">
                                    <!-- Bordered Tabs -->
                                    <ul class="nav nav-tabs nav-tabs-bordered">

                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#Allgemein">Allgemein</button>
                                        </li>

                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Beschreibung">Beschreibung</button>
                                        </li>

                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Besonderheit">Besonderheiten</button>
                                        </li>

                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Lieferumfang">Lieferumfang</button>
                                        </li>

                                    </ul>
                                    <div class="tab-content pt-2">



                                        <div class="tab-pane fade show active Allgemein" id="Allgemein">
                                            <h5 class="card-title">Allgemein:</h5>
                                            <form>
                                                <a>Warum iPhone? <br>
                                                    Kein Telefon ist wie das iPhone!<br>
                                                    Leicht zu bedienen so einfach und intuitiv.<br>
                                                    Dass du mit einem Tippen oder Streichen ganz leichtnavigieren kannst.<br>
                                                    Intelligente Leistung
                                                    Von Apple entwickelter Chip, der alles schnell energieeffizient und intelligent erledigt.<br>
                                                    Robust und wertbeständig, Das iPhone ist so entwickelt, dass es lange hält, und ist dabei wertbeständiger als andere Smartphones.<br>
                                                    Schützt deine Privatsphäre,
                                                    Jeder Aspekt des iPhone ist gemacht, um deine Daten privat und sicher zu halten.
                                                </a>
                                            </form>
                                        </div>

                                        <div class="tab-pane fade Beschreibung " id="Beschreibung">
                                            <h5 class="card-title">Beschreibung:</h5>
                                            <form>
                                                <a>
                                                    Das iPhone 12 Pro ist ein leistungsstarkes Smartphone von Apple mit einem eleganten Design und hochwertigen Materialien.<br>
                                                    Es verfügt über ein beeindruckendes Super Retina XDR Display, das lebendige Farben und eine hohe Auflösung bietet. <br>
                                                    Die fortschrittliche Triple-Kamera ermöglicht es Benutzern, beeindruckende Fotos und Videos in verschiedenen Situationen aufzunehmen.<br>
                                                    Angetrieben von einem leistungsstarken A14 Bionic Chip bietet das iPhone 12 Pro schnelle Leistung, 5G-Konnektivität und eine verbesserte Akkulaufzeit.
                                                    <br><br>
                                                </a>
                                            </form>
                                        </div>


                                        <div class="tab-pane fade Besonderheit " id="Besonderheit">
                                            <h5 class="card-title">Besonderheiten:</h5>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <ul>
                                                            <li>A14 Bionic Chip </li>
                                                            <li>Schutz vor Wasser und Staub IP68 klassifiziert</li>
                                                            <li>Face ID </li>
                                                            <li>Betriebs­system IOS </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <ul>
                                                            <li>Kapazität 128 GB, 256 GB oder 512 GB </li>
                                                            <li>Super Retina XDR Display</li>
                                                            <li>12 MP Pro Kamerasystem mit Ultraweitwinkel-, Weitwinkel- und Teleobjektiv</li>
                                                            <li>MagSafe</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <br> <br> <br>
                                                </a>
                                            </form>
                                        </div>



                                        <div class="tab-pane fade Lieferumfang" id="Lieferumfang">
                                            <h5 class="card-title">Lieferumfang:</h5>
                                            <form>
                                                <a>
                                                    <ul>
                                                        <li>iPhone mit iOS 14</li>
                                                        <li>USB‑C auf Lightning Kabel</li>
                                                        <li>Dokumentation</li>
                                                        <li>1x Apple Sticker</li>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                    </ul>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
    </section>

    <section id="contact" class="contact topi5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="info bordertb">
                        <u>
                            <h2 class="ubermini">SHOPS:</h2>
                            <a class="shop-txt2">Shops in deiner Nähe</a>
                            <br>
                        </u>
                        <div data-aos="fade-up" class="map2">

                            <div id="googlemap">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!---  Reihe 2 -->
    <section id="contact" class="contact topi5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="info bordertb">
                        <form method="POST">
                            <input type="hidden" name="companyname2" value="Mediamarkt Pluscity">
                            <input type="hidden" name="productname2" value="iPhone 13 Pro Max">
                            <u>
                                <h2 class="ubermini2">Bewertung Abgeben:</h2>
                                <br>
                            </u>
                            <div class="col-lg-12">
                                <fieldset class="rating2">
                                    <input type="radio" id="star1" name="rating2" value="1"><label class="stsz" for="star1" title="Sehr schlecht">
                                        <input type="radio" id="star2" name="rating2" value="2"><label class="stsz" for="star2" title="Schlecht">
                                            <input type="radio" id="star3" name="rating2" value="3"><label class="stsz" for="star3" title="Durchschnittlich">
                                                <input type="radio" id="star4" name="rating2" value="4"><label class="stsz" for="star4" title="Gut">
                                                    <input type="radio" id="star5" name="rating2" value="5"><label class="stsz" for="star5" title="Hervorragend">
                                </fieldset>
                            </div>
                            <div class="text-center"> <!-- Hinzugefügt: Ein Container für die Ausrichtung -->
                                <?php
                                if (isset($_SESSION['logged_in'])) {
                                    //echo '<button class="btf btn btn-danger">Absenden</button>';
                                    echo '<input type="submit" class="btf btn btn-danger" name="bewertungAbsenden" value="Absenden">';
                                    if (isset($_POST['bewertungAbsenden'])) {
                                        //echo '<input type="hidden" name="companyname2" value="Mediamarkt Pluscity">';
                                        //echo '<input type="hidden" name="productname2" value="iPhone 13 Pro">';
                                        include_once 'rate-product.php';
                                    }
                                } else {
                                    echo '<p class="alert-info bold ">Zum Bewerten müssen Sie sich zuerst anmelden</p>';
                                }
                                ?>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <u>
                                    <h2 class="ubermini">Empfehlungen</h2>
                                    <br>
                                </u>
                                <hr>
                                <!-- Container 1 -->
                                <div class="container">
                                    <img class="pic" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/413174_68c84823-9cfd-49fb-bb2c-ce5f82944142.jpg" alt="Bild">
                                    <div class="text-container">
                                        <h4 class="emptxt">Text hier</h4>
                                        <div class="rating">
                                            <i class="bi bi-star-fill star11"></i>
                                            <i class="bi bi-star-fill star11"></i>
                                            <i class="bi bi-star-fill star11"></i>
                                            <i class="bi bi-star-half star11"></i>
                                            <i class="bi bi-star star11"></i>
                                        </div>
                                        <div class="Pricetxt3">Preis hier</div>
                                    </div>
                                </div>
                                <br><br>
                                <hr>
                                <!-- Container 1 -->
                                <div class="container">
                                    <img class="pic" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/413174_68c84823-9cfd-49fb-bb2c-ce5f82944142.jpg" alt="Bild">
                                    <div class="text-container">
                                        <h4 class="emptxt">Text hier</h4>
                                        <div class="rating">
                                            <i class="bi bi-star-fill star11"></i>
                                            <i class="bi bi-star-fill star11"></i>
                                            <i class="bi bi-star-fill star11"></i>
                                            <i class="bi bi-star-half star11"></i>
                                            <i class="bi bi-star star11"></i>
                                        </div>
                                        <div class="Pricetxt3">Preis hier</div>
                                    </div>
                                </div>
                                <br><br>
                                <hr>
                                <!-- Container 1 -->
                                <div class="container">
                                    <img class="pic" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/413174_68c84823-9cfd-49fb-bb2c-ce5f82944142.jpg" alt="Bild">
                                    <div class="text-container">
                                        <h4 class="emptxt">Text hier</h4>
                                        <div class="rating">
                                            <i class="bi bi-star-fill star11"></i>
                                            <i class="bi bi-star-fill star11"></i>
                                            <i class="bi bi-star-fill star11"></i>
                                            <i class="bi bi-star-half star11"></i>
                                            <i class="bi bi-star star11"></i>
                                        </div>
                                        <div class="Pricetxt3">Preis hier</div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--- Ende Reihe 2 -->

    <!--- Reihe 3 -->
    <section id="contact" class="contact topi5 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="info bordertb">
                        <section class="section">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Preis Verlauf der letzten Tage:</h5>
                                            <script>
                                                window.Promise ||
                                                    document.write(
                                                        '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
                                                    )
                                                window.Promise ||
                                                    document.write(
                                                        '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
                                                    )
                                                window.Promise ||
                                                    document.write(
                                                        '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
                                                    )
                                            </script>


                                            <script src="https://cdn.jsdelivr.net/npm/react@16.12/umd/react.production.min.js"></script>
                                            <script src="https://cdn.jsdelivr.net/npm/react-dom@16.12/umd/react-dom.production.min.js"></script>
                                            <script src="https://cdn.jsdelivr.net/npm/prop-types@15.7.2/prop-types.min.js"></script>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.34/browser.min.js"></script>
                                            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                                            <script src="https://cdn.jsdelivr.net/npm/react-apexcharts@1.3.6/dist/react-apexcharts.iife.min.js"></script>


                                            <script>
                                                // Replace Math.random() with a pseudo-random number generator to get reproducible results in e2e tests
                                                // Based on https://gist.github.com/blixt/f17b47c62508be59987b
                                                var _seed = 42;
                                                Math.random = function() {
                                                    _seed = _seed * 16807 % 2147483647;
                                                    return (_seed - 1) / 2147483646;
                                                };
                                            </script>
                                            <?php

                                            $qr = 'SELECT price AS "Preis",
                                                            date AS "Datum"
                                                        FROM 
                                                            skimp.price p 
                                                                NATURAL JOIN 
                                                            prod_comp pc 
                                                        WHERE 
                                                        prod_comp_id = ?
                                                        AND
                                                        date  <= ?
                                                        ORDER BY DATE DESC';

                                            $datetoday = date('Y-m-d');

                                            ?>
                                            <!--script src="../../assets/irregular-data-series.js"></script-->


                                            <div id="app"></div>

                                            <div id="html">
                                            </div>

                                            <?php
                                            //makeTableWithGivenArray($qr, [$prod_comp_id, $datetoday]);
                                            $t = makeTableWithGivenArray($qr, [$prod_comp_id, $datetoday]);

                                            if ($t == 1) {
                                                echo '                                            
                                                <div>
                                                    <a class="nav-link" href="diagramm3.php">
                                                        <i class="btn btn-primary center" >
                                                        <span>Als Diagramm anzeigen</span></i>
                                                    </a>
                                                </div>';
                                            }
                                            ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!--- Ende Reihe 3 -->
</main>

<button class="centered-btn btf2 btn btn-danger topi5" onclick="history.back()">&nbsp;&nbsp;&nbsp;Zurück&nbsp;&nbsp;&nbsp;</button>


<?php include "footer.php"; ?>
<?php include "footer2.php"; ?>

<!-- Template Main JS File -->
</body>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAE-9-itGaSPetW7EPKvZ_E149JtnQ7-Bo&callback=loadMap"></script>

</html>