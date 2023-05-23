<?php

session_start();
?>

<?php
/*  Reza:
 *  "This page is for the backend element of the register page"
 * */

/* Verbindung uzum Thomas sein Server
$server = 'tom.m1nd.at:80';
$user = 'bs-linz2';
$pwd = 'bs-linz2';
$db = 'skimp';
*/

//require_once "config.php";

/*/DB-Verbinfdungsdaten zum Testen
$servername = 'localhost:3306';
$db_username = 'root';
$db_password = '';
$db_name = 'projektpraktikum';
/*/

//Variablen für die Tabellen
$email = "";
$name = $username = $password = $confirm_password = "";
$confirm_password_err = $name_err =  $username_err = $password_err = $email_err = "";

// Processing form data when form is submitted
//if($_SERVER["REQUEST_METHOD"] == "POST"){
try {
    /*
    $con = new PDO('mysql:host='.$servername.';dbname='.$db_name.';charset=utf8', $db_username, $db_password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
*/
    global $con;

    // Validate name
    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter a name.";
    } else {
        $name = $_POST["name"];
    }


    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter a valid email.";
    } else {
        $email = $_POST["email"];
    }


    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
        $username_err = "Username can only contain letters, numbers, and underscores.\nPlease do not use special characters in your username.";
    } else {
        // Prepare a select statement
        /*$sqlSelect = "SELECT id FROM users WHERE username = ?";

        //$sql->bind_param($username);
        $result = $con->query($sqlSelect);*/

        $username = $_POST["username"];
        /*
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                */
                /* store result */
        /*
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }*/
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($name_err)  && empty($email_err)) {

        // Prepare an insert statement


        try {
            $sqlInsert = $con->prepare('INSERT INTO projektpraktikum.benutzer (benutzer_name, benutzer_username, benutzer_email, benutzer_passwort)
            values
            (
                ?,
                ?,
                ?,
                MD5(?)
            )');

            $sqlInsert->execute([$name, $username, $email, $password]);




            $_SESSION['logged_in'] = true;
            $_SESSION['name'] = $name;
            $_SESSION['username'] = $username;


            echo "<a href=index.php>Registrierung erfolgreich</a>";
//            header("location: login.php");
        } catch (Exception $e) {
            echo 'Error - Verbindung: '.$e->getCode().': '.$e->getMessage().'<br>'; // Nachher entfernen
            echo "Oops! Something went wrong. Please try again later.";
        }

        /*/$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }*/
    }

    // Close connection
    $con = null;
    //mysqli_close($link);
//}  //if-Bedingung: if($_SERVER["REQUEST_METHOD"] == "POST"){
}
catch (Exception $eall)
{
    echo $eall->getCode().': '.$eall->getMessage().'<br>;';
    echo "<br>Failure while trying to register!<br>";
    $con = null;
    //die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>