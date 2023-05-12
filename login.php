



<?php
/*  Reza:
 *  "This page is for the backend element of the login page"
 * */




$str = "Mary Had 5 Little Lambs and She LOVED HTEMöüäöÖÖÄÜÚ So";
//$str_converted = mb_convert_case($str, MB_CASE_LOWER, "UTF-8");
$str_converted = strtolower($str);

echo $str_converted;

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



//w3schools
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "projektpraktikum";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();




echo "test";
?>