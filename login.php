
<?php

if(session_status() === PHP_SESSION_NONE)
{
    session_start();
}
global $loggedIn;
include 'config.php';
/*  Reza:
 *  "This page is for the backend element of the login page"
 **/

/* Verbindung uzum Thomas sein Server
$server = 'tom.m1nd.at:80';
$user = 'bs-linz2';
$pwd = 'bs-linz2';
$db = 'skimp';
*/


/*
$str = "Mary Had 5 Little Lambs and She LOVED HTEMöüäöÖÖÄÜÚ So";
//$str_converted = mb_convert_case($str, MB_CASE_LOWER, "UTF-8");
$str_converted = strtolower($str);

echo $str_converted;
*/

/*

$email = "";
$username = $password = "";
$username_err = $password_err = $confirm_password_err = "";




$query = sprintf("SELECT username, password FROM Benutzer 
    WHERE username='%username' AND password='%password'");

// Perform Query



$result = mysql_query($query);

// Check result
// This shows the actual query sent to MySQL, and the error. Useful for debugging.
if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}
*/



/*/w3schools
$servername = "localhost:3306";
$db_username = "root";
$db_password = "";
$db_name = "projektpraktikum";
*/

$input_username = "";
$input_password = "";

$temp_username = "";
$temp_password = "";


//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//else{
//    echo "<br>Mysqli connection successful!<br>";
    //$sql = "SELECT id, firstname, lastname FROM MyGuests";


try {
    /*$con = new PDO('mysql:host='.$servername.';dbname='.$db_name.';charset=utf8', $db_username, $db_password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/

    global $con;

    $input_username = $_POST["username"];
    $input_password = $_POST["password"];


   // $stmt1 = "SELECT benutzer_id, benutzer_username, benutzer_email, benutzer_passwort FROM projektpraktikum.benutzer where benutzer_username = $input_username";
   // $result = $con->query($stmt1); //Unsichere Methode wegen SQL-Injections


    $stmt = "SELECT benutzer_username, benutzer_passwort FROM projektpraktikum.benutzer where benutzer_username = ?"; // lolales statement
    //$stmt = "SELECT username, password FROM skimp.user where username = ?"; //echtes statement für Thomas' Datenbank
    $sql = $con->prepare($stmt);
    $sql->execute([trim($input_username)]); //Sichere Methode


    $rcount = $sql->rowCount();

//    if ($rcount > 0 && !isset($_SESSION['logged_in'])) {
    if ($rcount > 0) {
        // output data of each row
        while($row = $sql->fetch(PDO::FETCH_NUM)) {
            //echo "id: " . $row["benutzer_id"]. " - Name: " . $row["benutzer_username"]. " - E-Mail: " . $row["benutzer_email"]. "<br>";
            $temp_username = $row[0];
            $temp_password = $row[1];
        }
        //echo 'temp password: '.$temp_password.'  input password: '.md5($input_password).'<br>';
        if ($temp_password == md5($input_password))
        {
            //$remember = true;
            if($_SESSION['logged_in'] == false)
            {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $input_username;
                echo "<a href=index.php>Anmeldung erfolgreich</a>";
            }
            else
            {
                $_SESSION['username'] = $input_username;
                echo "<a href=index.php>Anmeldung erfolgreich</a>";
            }
        }
        else{
            echo '<button onclick="history.back()">Inkorrektes Passwort!</button>';
        }

    } else {
        echo '<button onclick="history.back()">Dieser Benutzer existiert nicht!</button>';
    }
}
catch (Exception $eall)
{
    echo $eall->getCode().': '.$eall->getMessage().'<br>;';
    echo "<br>Failure!<br>";
    //die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>