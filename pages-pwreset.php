<!DOCTYPE html>
<html lang="en">

<?php
if(session_status() === PHP_SESSION_NONE)
{
    session_start();
}
include 'config.php';
?>
<?php
include "head.php";
?>
<?php
include "header.php";
?>
<?php
include "Sidebar.php";
?>

<div class="background-image"></div>

<body>
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card to" style="border-radius: 1rem; border: 3px solid black;">
                    <div class="row g-0 ">
                        <div class="col-md-6 col-lg-5 d-none d-md-block" style="border-right: 2px solid black;">
                            <div class="text-center">
                                <img src="assets/img/logo.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; display: inline-block; vertical-align: middle;padding-top: 5%;" />
                                <p style="padding-top: 5%; font-size: 40px; display: inline-block; vertical-align: middle;">SKIMP®</p>
                                <br>
                                <p style="padding-top: 5%; font-size: 35px; display: inline-block; vertical-align: middle;">Passwort<br>Zurücksetzen</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-4 text-black">
                                <form method="POST" class="row g-3 needs-validation" novalidate>
                                    <div class="d-flex align-items-center pb-0">
                                        <u><img src="assets/img/logo.png" alt="Logo" style="width: 6rem; height: 6rem; margin-right: 0.5rem;"></u>
                                        <u><span class="h1 fw-bold mb-0">SKIMP®</span></u>
                                    </div>

                                    <h5 class="fw-normal mb-1 pb-1 to" style="letter-spacing: 1px;">Setze hier dein Passwort Zurück:</h5>

                                    <div class="form-outline mb-2">
                                        <label class="form-label logtx" for="yourPwdReset">Neues Passwort:</label>
                                        <input type="password" name="passwordReset" id="yourPwdReset" placeholder="Passwort" class="form-control form-control-lg" required />
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label logtx" for="yourPwdResetConfirm">Neues Passwort Bestätigen:</label>
                                        <input type="password" name="passwordResetConfirm" id="yourPwdResetConfirm" placeholder="Passwort Wiederholen" class="form-control form-control-lg" required />
                                    </div>

                                    <div class=" mb-2 text-center">
                                        <input name="ResetConfirmation" class="btn btn-danger btn-lg btn-block" type="submit" value="Zurücksetzen">
                                    </div>
                                    <hr>
                                    <div class=" text-center">
                                        <div class="d-flex justify-content-center">
                                            <a class=" small text-muted">Zurück zur Anmeldung</a>
                                            <u>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <p class="mb-3 pb-lg-1" style="color: #393f81;"><a href="pages-login.php" class="registertxt">Anmelden</a></p>
                                            </u>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class=" text-center">
                                        <div class="d-flex justify-content-between">
                                            <u><a href="contact.php" class="small  registertxt">Hilfe</a></u>
                                            <u><a href="about.php" class="small  registertxt">Fragen</a></u>
                                            <button class="btn btn-danger btn-md" onclick="history.back()">Zurück</button>
                                        </div>
                                    </div>
                                    <?php
                                        global $con;
                                        if (isset($_POST['ResetConfirmation'])){
                                            try
                                            {
                                                $input_username = $_POST["username"];
                                                $input_email = $_POST["emailReset"];
                                                $input_newpw = $_POST["passwordReset"];
                                                $input_newpwconfirm = $_POST["passwordResetConfirm"];

                                                $idOfUser = 0;

                                                $querySelectid = 'Select user_id from skimp.user WHERE username = ? AND email = ?';
                                                $sqlSelectid = $con->prepare($querySelectid);
                                                $sqlSelectid->execute([$input_username, $input_email]);

                                                while($row1 = $sqlSelectid->fetch(PDO::FETCH_NUM))
                                                {
                                                    $idOfUser = $row1[0];
                                                }

                                                $input_newpw = trim($_POST['passwordReset']);
                                                $input_newpwconfirm = trim($_POST['passwordResetConfirm']);

                                                if($input_newpw == $input_newpwconfirm && $rc > 0 && !empty($input_newpw) && strlen($input_newpw) >= 6)
                                                {
                                                    try
                                                    {
                                                        $queryPWReset = 'UPDATE skimp.user SET password = ? WHERE user_id = ?';
                                                        $sqlPWReset = $con->prepare($queryPWReset);
                                                        $sqlPWReset->execute([md5($input_newpw), $idOfUser]);

                                                        $alertChangedPW = "Passwort erfolgreich verändert";
                                                        //echo "<a href=index.php>$alert</a>";
                                                        echo '<script>alert("'.$alertChangedPW.'")</script>';

                                                    }
                                                    catch (Exception $e)
                                                    {
                                                        echo 'Error - Verbindung: ' . $e->getCode() . ': ' . $e->getMessage() . '<br>';
                                                    }
                                                }
                                                elseif ($rc == 0)
                                                {
                                                    /*if (window.confirm('Ok to Confirm, Cancel to Stay here'))
                                                    {
                                                        window.open('index.php');

                                                        //a.click();
                                                    };*/
                                                    $alert = "Inkorrekter (oder nicht zusammengehörender) Username und/oder Passwort";
                                                    echo '<script>alert("'.$alert.'")</script>';
                                                    //echo '<a href="page1.php">';
                                                    //header("Location: http://localhost:63342/Projektpraktikum/index.php");
                                                    //echo '<button onclick="history.back(-2)">Zurück!</button>';
                                                }
                                                elseif ($input_newpw != $input_newpwconfirm)
                                                {
                                                    $alert = "Passwörter stimmen nicht überein";
                                                    //echo "<a href=index.php>$alert</a>";
                                                    echo '<script>alert("'.$alert.'")</script>';
                                                    //echo '<button onclick="history.back(-2)">Zurück!</button>';
                                                }
                                                elseif ($strlen($input_newpw) < 6)
                                                {
                                                    $alert = "Passworter zu kurz";
                                                    //echo "<a href=index.php>$alert</a>";
                                                    echo '<script>alert("'.$alert.'")</script>';
                                                    //echo '<button onclick="history.back(-2)">Zurück!</button>';
                                                }
                                                else
                                                {
                                                    $alert = "Fehler beim Zurücksetzen des Passwortes";
                                                    //echo "<a href=index.php>$alert</a>";
                                                    echo '<script>alert("'.$alert.'")</script>';
                                                    //echo '<button onclick="history.back(-2)">Zurück!</button>';
                                                }
                                            }
                                            catch (Exception $ex)
                                            {
                                                echo 'Error - Verbindung: ' . $ex->getCode() . ': ' . $ex->getMessage() . '<br>';
                                            }
                                        }
                                    ?>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "footer.php";
?>
</body>

</html>
