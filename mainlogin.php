<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Preisfinder</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="login">
        <h1>Preisfinder</h1>
        <h2>Login</h2>
        <form action="authenticate.php" method="post">
            <br>
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <br>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <br>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <br>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <br>
            <input type="submit" value="Login">

            <br><br>
        </form>
    </div>
    <div>
        <button onclick="window.location.href='mainregister.php';">Registrieren</button>
    </div>
    <div>
        <button onclick="window.location.href='https://w3docs.com';">Ohne Anmeldung fortfahren</button>
    </div>

    <?php
        include 'config.php';
        include 'login.php';
    ?>

</body>

</html>