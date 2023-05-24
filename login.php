
<?php

session_start();
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

    $sql = $con->prepare("SELECT benutzer_id, benutzer_username, benutzer_email, benutzer_passwort FROM projektpraktikum.benutzer where benutzer_username = ?");

    $sql->execute([$input_username]);

    $result = $con->query($sql);


    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo "id: " . $row["benutzer_id"]. " - Name: " . $row["benutzer_username"]. " - E-Mail: " . $row["benutzer_email"]. "<br>";
            $temp_username = $row["benutzer_username"];
            $temp_password = $row["benutzer_passwort"];
        }
        if ($temp_password == md5($input_password))
        {
            $remember = true;
            $_SESSION['logged_in'] = true;
            $_SESSION['name'] = $name;
            $_SESSION['username'] = $input_username;
            echo "<a href=index.php>Anmeldung erfolgreich</a>";

        }
        else{
            echo "Inkorrektes Passwort!";
        }





        //if($temp_password == )



    } else {
        echo "Dieser Benutzer existiert nicht!";
    }
}
catch (Exception $eall)
{
    echo $eall->getCode().': '.$eall->getMessage().'<br>;';
    echo "<br>Failure!<br>";
    //die("ERROR: Could not connect. " . mysqli_connect_error());
}

//$conn->close();




echo "test";
?>