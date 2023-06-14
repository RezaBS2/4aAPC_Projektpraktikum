<!DOCTYPE html>
<html lang="en">

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
                                <form  action="pwreset.php" method="POST" class="row g-3 needs-validation" novalidate>
                                    <div class="d-flex align-items-center pb-0">
                                        <u><img src="assets/img/logo.png" alt="Logo" style="width: 6rem; height: 6rem; margin-right: 0.5rem;"></u>
                                        <u><span class="h1 fw-bold mb-0">SKIMP®</span></u>
                                    </div>

                                    <h5 class="fw-normal mb-1 pb-1 to" style="letter-spacing: 1px;">Setze hier dein Passwort Zurück:</h5>


                                    <div class="form-outline mb-2">
                                        <label class="form-label logtx" for="yourEmailReset">Deine Email:</label>
                                        <input type="email" name="emailReset" id="yourEmailReset" placeholder="Max@musteremail.com" class="form-control form-control-lg" required />
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label logtx" for="yourPwdReset">Neues Passwort:</label>
                                        <input type="password" name="passwordReset" id="yourPwdReset" placeholder="Passwort" class="form-control form-control-lg" required />
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label logtx" for="yourPwdResetConfirm">Neues Passwort Bestätigen:</label>
                                        <input type="password" name="passwordResetConfirm" id="yourPwdResetConfirm" placeholder="Passwort Wiederholen" class="form-control form-control-lg" required />
                                    </div>

                                    <div class="pt-2 mb-4 text-center">
                                        <button class="btn btn-danger btn-lg btn-block" type="submit">Zurücksetzen</button>
                                    </div>
                                    <hr>
                                    <div class="pt-2 text-center">
                                        <div class="d-flex justify-content-center">
                                            <a class="pt-2 small text-muted">Zurück zur Anmeldung</a>
                                            <u>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <p class="mb-3 pb-lg-1" style="color: #393f81;"><a href="pages-login.php" class="registertxt">Anmelden</a></p>
                                            </u>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="pt-2 text-center">
                                        <div class="d-flex justify-content-between">
                                            <u><a href="contact.php" class="small  registertxt">Hilfe</a></u>
                                            <u><a href="about.php" class="small  registertxt">Fragen</a></u>
                                            <button class="btn btn-danger btn-md" onclick="history.back()">Zurück</button>
                                        </div>
                                    </div>


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