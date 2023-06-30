<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>




<?php
include_once "head.php";
?>
<?php
include_once "header2.php";
?>
<?php

include_once "Sidebar.php";
?>
<?php
include_once 'functions.php';
?>


  <body>
    <div class="background-image"></div>
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card to" style="border-radius: 1rem; border: 3px solid black;">
              <div class="row g-0 ">
                <div class="col-md-6 col-lg-5 d-none d-md-block" style="border-right: 2px solid black;">
                  <div class="text-center">
                    <img src="assets/img/logo.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; display: inline-block; vertical-align: middle;padding-top: 5%;" />
                    <p style="padding-top: 5%; font-size: 40px; display: inline-block; vertical-align: middle;">&nbsp SKIMP®</p>
                    <br>
                    <p style="padding-top: 5%; font-size: 35px; display: inline-block; vertical-align: middle;">Login </p>
                  </div>
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body  text-black">
                    <form method="POST" class="row g-2 needs-validation" novalidate>
                      <div class="d-flex align-items-center pb-0">
                        <u><img src="assets/img/logo.png" alt="Logo" style="width: 6rem; height: 6rem; margin-right: 0.5rem;"></u>
                        <u><span class="h1 fw-bold mb-0">SKIMP®</span></u>
                      </div>

                      <h5 class="fw-normal mb-1 pb-1 to" style="letter-spacing: 1px;">Melde dich mit deinem Account an:</h5>

                      <div class="form-outline mb-2 to">
                        <label class="form-label logtx" for="yourUsername">Username:</label>
                        <input type="text" name="username" id="yourUsername" placeholder="Max" class="form-control form-control-lg" required />
                      </div>

                      <div class="form-outline mb-2">
                        <label class="form-label logtx" for="yourPassword">Passwort:</label>
                        <input type="password" name="password" id="yourPassword" placeholder="Passwort" class="form-control form-control-lg" required />
                      </div>

                      <div class=" mb-2 text-center">
                        <input class="btn btn-danger btn-lg btn-block" type="submit" name="loginname" value="Einloggen" />
                      </div>


                      <hr>
                      <div class="d-flex justify-content-around">
                        <div>
                          <a class="small text-muted">Passwort Vergessen?</a>
                          <u>
                            <div class="d-flex justify-content-center">
                              <p class="mb-1 pb-lg-1" style="color: #393f81;"><a href="pages-pwreset2.php" class="registertxt">Zurücksetzen</a></p>
                          </u>
                        </div>
                      </div>
                      <!-- 
                        <div>
                          <a class="pt-2 small text-muted">Passwort Vergessen?</a>
                          <u>
                          <div class="d-flex justify-content-center">
                            <p class="mb-3 pb-lg-1" style="color: #393f81;"><a href="pages-register.php" class="registertxt">Zurücksetzen</a></p>
                          </u>
                        </div>
                        </div> -->
                  </div>
                  <hr>

                  <div class=" text-center">
                    <div class="d-flex justify-content-center">
                      <a class="pt-2 small text-muted">Du hast noch keinen Account?</a>
                      <u>
                    </div>
                    <div class="d-flex justify-content-center">
                      <p class="mb-1 pb-lg-1" style="color: #393f81;"><a href="pages-register.php" class="registertxt">Account Erstellen</a></p>
                      </u>
                    </div>
                  </div>


                  <hr>

                  <div class=" text-center">
                    <div class="d-flex justify-content-around">
                      <u><a href="contact.php" class="small  registertxt">Hilfe</a></u>
                      <u><a href="about.php" class="small  registertxt">Fragen</a></u>
                      <button class="btn btn-danger btn-md" onclick="history.back()">Zurück</button>
                    </div>
                  </div>


                  </form>

                  <?php
                    if (isset($_POST['loginname']) ){
                      $input_username = "";
                      $input_password = "";

                      $temp_username = "";
                      $temp_password = "";

                      try {
                          $input_username = trim($_POST['username']);
                          $input_password = trim($_POST['password']);

                          $stmt = "SELECT username, password FROM user where user_id = ?";
                          $sql = $_SESSION['DBConnection']->prepare($stmt);
                          $sql->execute([return_user_id($input_username)]); //Sichere Methode


                          $rcount = $sql->rowCount();


                          if ($rcount > 0) {
                              while ($row = $sql->fetch(PDO::FETCH_NUM)) {
                                  $temp_username = $row[0];
                                  $temp_password = $row[1];
                              }
                              if ($temp_password == md5($input_password)) {
                                
                                $dir = 'myDir';

                                // create new directory with 744 permissions if it does not exist yet
                                // owner will be the user/group the PHP script is run under
                                if ( !file_exists($dir) ) {
                                    mkdir ($dir, 0744);
                                }
                    
                                //$myfile = fopen(session_id().'txt', "r+") or die("Unable to open file!");
                                //$myfile = fopen('tempfile.txt', 'w+') or die('Unable to open file!');
                                $myfile = fopen('./'.$dir.'/'.'tempfile.txt', 'w+');
                                
                                fwrite($myfile, $input_username);
                                fclose($myfile);
                                echo '<a href=index.php class="reg">';
                                echo '<h1 class="fail reg topi3 to">Anmeldung war Erfolgreich!</h1>';
                                echo '<button class="centered-btn btf2 btn btn-danger topi5">&nbsp;&nbsp;&nbsp;Weiter&nbsp;&nbsp;&nbsp;</button></a>';  
                                      echo '<br>';

                              } else {
                                echo '<h1 class="fail reg topi3 to">Inkorrektes Passwort</h1>';
                                echo '<button class="centered-btn btf2 btn btn-danger topi5" onclick="history.back()">&nbsp;&nbsp;&nbsp;Zurück&nbsp;&nbsp;&nbsp;</button>';
                                echo '<br>';
                              }
                          } else {
                              //echo '<button onclick="history.back()">Dieser Benutzer existiert nicht!</button>';
                              echo '<h1 class="fail reg topi3 to">Dieser Benutzer exestiert nicht!</h1>';
                              echo '<button class="centered-btn btf2 btn btn-danger topi5" onclick="history.back()">&nbsp;&nbsp;&nbsp;Zurück&nbsp;&nbsp;&nbsp;</button>';
                              echo '<br>';
                          }
                      } catch (Exception $eall) {
                          echo $eall->getCode() . ': ' . $eall->getMessage() . '<br>;';
                          echo "<br>Failure!<br>";
                          echo '<br>';
                      }

                    }
                  ?>

                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


<?php
include_once "footer.php";
?>
</body>

