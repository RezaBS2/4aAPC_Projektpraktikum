<?php

if(session_status() === PHP_SESSION_NONE)
{
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<?php include "head.php"; ?>

<?php include "header.php"; ?>

<?php include "Sidebar.php"; ?>

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
                <img class="img-size img1" src="https://www.backmarket.at/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D640/https://d1eh9yux7w8iql.cloudfront.net/product_images/413174_68c84823-9cfd-49fb-bb2c-ce5f82944142.jpg">
                <div class="text-container">
                  <h4>iPhone 12 Pro</h4>
                  <h5 class="herst">APPLE</h5>
                  <p>
                    <i class="bi bi-star-fill star1"></i>
                    <i class="bi bi-star-fill star1"></i>
                    <i class="bi bi-star-fill star1"></i>
                    <i class="bi bi-star-half star1"></i>
                    <i class="bi bi-star star1"></i>
                  </p>
                  <hr style="color: black;">
                  <p>Für mehr Details auf den Button Drücken</p>
                  <hr style="color: black;">
                  <button class="btf2 btn btn-danger" id="detailsBtn">Details</button>
                </div>
              </div>
              <div class="right">
                <img class="company-logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Media_Markt_logo.svg/2560px-Media_Markt_logo.svg.png" alt="Company Logo">
                <div class="Pricetxt">999,99€</div>
                <div class="heart1 bord"><i class="bi bi-heart-fill"></i>
                </div>
              </div>

            </div>
            <img class="geslog" src="https://www.pado-shopping.at/wp-content/uploads/2020/09/media-markt_logo-1.png">
            <div class="hrd star">
              <i class="bi bi-star"></i>
              <i class="bi bi-star"></i>
              <i class="bi bi-star"></i>
              <i class="bi bi-star"></i>
              <i class="bi bi-star"></i>
            </div>

            <br>
            <br>
            <br>
            <hr>
          </div>

          <div data-aos="fade-up" class="container">
            <div id="googlemap"></div>
          </div>


          <div class="section error-404  d-flex flex-column align-items-center justify-content-center">
            <a class="btn" onclick="history.back()">Back to home</a>
          </div>
        </div>
      </div>
    </div>

    <section id="contact1" class="contact" style="display: none;">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="info bordertb">
              <u>
                <h2 class="ubermini">Weiter Details:</h2>
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
                          </a>
                          </ul>

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
                <button class="btf btn btn-danger">Absenden</button>
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
                        <h5 class="card-title">Preis Verlauf der Letzten 10 Tage:</h5>
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

                        <script src="../../assets/irregular-data-series.js"></script>
                        <script>
                          var ts2 = 1484418600000;
                          var dates = [];
                          var spikes = [5, -5, 3, -3, 8, -8]
                          for (var i = 0; i < 120; i++) {
                            ts2 = ts2 + 86400000;
                            var innerArr = [ts2, dataSeries[1][i].value];
                            dates.push(innerArr)
                          }
                        </script>
                        </head>

                        <body>

                          <div id="app"></div>

                          <div id="html">
                          </div>

                          <script type="text/babel">
                            class ApexChart extends React.Component {
        constructor(props) {
          super(props);

          this.state = {
          
            series: [{
              name: 'XYZ MOTORS',
              data: dates
            }],
            options: {
              chart: {
                type: 'area',
                stacked: false,
                height: 350,
                zoom: {
                  type: 'x',
                  enabled: true,
                  autoScaleYaxis: true
                },
                toolbar: {
                  autoSelected: 'zoom'
                }
              },
              dataLabels: {
                enabled: false
              },
              markers: {
                size: 0,
              },
              title: {
                text: 'Stock Price Movement',
                align: 'left'
              },
              fill: {
                type: 'gradient',
                gradient: {
                  shadeIntensity: 1,
                  inverseColors: false,
                  opacityFrom: 0.5,
                  opacityTo: 0,
                  stops: [0, 90, 100]
                },
              },
              yaxis: {
                labels: {
                  formatter: function (val) {
                    return (val / 1000000).toFixed(0);
                  },
                },
                title: {
                  text: 'Price'
                },
              },
              xaxis: {
                type: 'datetime',
              },
              tooltip: {
                shared: false,
                y: {
                  formatter: function (val) {
                    return (val / 1000000).toFixed(0)
                  }
                }
              }
            },
          
          
          };
        }

      

        render() {
          return (
            <div>
              <div id="chart">
                <ReactApexChart options={this.state.options} series={this.state.series} type="area" height={350} />
              </div>
              <div id="html-dist"></div>
            </div>
          );
        }
      }

      const domContainer = document.querySelector('#app');
      ReactDOM.render(React.createElement(ApexChart), domContainer);
    </script>


                      </div>
                    </div>
                  </div>
                </div>
              </section>

              <!--- Ende Reihe 3 -->
</main>

<button class="centered-btn btf2 btn btn-danger topi5" onclick="history.back()">&nbsp;&nbsp;&nbsp;Zurück&nbsp;&nbsp;&nbsp;</button>

<?php
include "footer2.php";
?>
<?php
include "footer.php";
?>




<!-- Template Main JS File -->
</body>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAE-9-itGaSPetW7EPKvZ_E149JtnQ7-Bo&callback=loadMap"></script>
</html>