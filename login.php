
<?php
 include_once "head.php"; 
if(session_status() === PHP_SESSION_NONE)
{
    session_start();
}
global $loggedIn;
include_once 'functions.php';
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

    $input_username = trim($_POST["username"]);
    $input_password = trim($_POST["password"]);


    // $stmt1 = "SELECT benutzer_id, benutzer_username, benutzer_email, benutzer_passwort FROM projektpraktikum.benutzer where benutzer_username = $input_username";
    // $result = $con->query($stmt1); //Unsichere Methode wegen SQL-Injections


    $stmt = "SELECT username, password FROM user where user_id = ?";
    //$sql = $con->prepare($stmt);
    $sql = $_SESSION['DBConnection']->prepare($stmt);
    $sql->execute([return_user_id($input_username)]); //Sichere Methode


    $rcount = $sql->rowCount();


    if ($rcount > 0) {
        // output data of each row
        while ($row = $sql->fetch(PDO::FETCH_NUM)) {
            //echo "id: " . $row["benutzer_id"]. " - Name: " . $row["benutzer_username"]. " - E-Mail: " . $row["benutzer_email"]. "<br>";
            $temp_username = $row[0];
            $temp_password = $row[1];
        }
        //echo 'temp password: '.$temp_password.'  input password: '.md5($input_password).'<br>';
        if ($temp_password == md5($input_password)) {
            //$remember = true;

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
            echo'    <img  class="preimg" src="assets\img\logo.png" alt="Logo">';
            /*if(!isset($_SESSION['logged_in']))
            {
                $_SESSION["logged_in"] = true;
                $_SESSION["username"] = $input_username;

                //Testen
                echo '<script>alert("Session-Username: '.$_SESSION["username"].'")</script>';
                echo '<script>alert("Session-logged in: '.$_SESSION["logged_in"].'")</script>';



                echo "<a href=index.php>Anmeldung erfolgreich</a>";
            } else {
                $_SESSION['username'] = $input_username;


                //Testen
                echo '<script>alert("Session-Username: '.$_SESSION["username"].'")</script>';
                echo '<script>alert("Session-logged in: '.$_SESSION["logged_in"].'")</script>';

                echo "<a href=index.php>Anmeldung erfolgreich</a>";
            }*/
        } else {
            echo '<h1 class="fail reg topi3 to">Inkorrektes Passwort</h1>';
            echo '<button class="centered-btn btf2 btn btn-danger topi5" onclick="history.back()">&nbsp;&nbsp;&nbsp;Zurück&nbsp;&nbsp;&nbsp;</button>';
            echo '<br>';
            echo'    <img  class="preimg" src="assets\img\logo.png" alt="Logo">';

        }
    } else {
        echo '<h1 class="fail reg topi3 to">Dieser Benutzer exestiert nicht!</h1>';
        echo '<button class="centered-btn btf2 btn btn-danger topi5" onclick="history.back()">&nbsp;&nbsp;&nbsp;Zurück&nbsp;&nbsp;&nbsp;</button>';
        echo '<br>';
        echo'    <img  class="preimg" src="assets\img\logo.png" alt="Logo">';
    }
} catch (Exception $eall) {
    echo $eall->getCode() . ': ' . $eall->getMessage() . '<br>;';
    echo "<br>Failure!<br>";
    echo '<br>';
    echo'    <img  class="preimg" src="assets\img\logo.png" alt="Logo">';
    //die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>