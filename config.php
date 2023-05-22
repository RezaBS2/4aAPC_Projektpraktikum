<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<?php

/*define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'projektpraktikum');


$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    echo "Connection successful!";
}*/




//$server = 'localhost:3307';
$server = 'localhost:3306';
$user = 'root';
$pwd = '';
//$db = 'information_schema';
$db = 'projektpraktikum';

try {
    $con = new PDO('mysql:host='.$server.';dbname='.$db.';charset=utf8', $user,$pwd);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    $sql = 'SELECT benutzer_id, benutzer_username, benutzer_email, benutzer_passwort FROM benutzer';


    $result = $con->query($sql);


    //if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch()) {
            echo "id: " . $row["benutzer_id"]. " - Name: " . $row["benutzer_username"]. " - EMail: " . $row["benutzer_email"]. "<br>";
            echo "Passwort: " . $row["benutzer_passwort"]."<br>";
        }
    /*} else {
        echo "0 results";
    }*/
    //$con->close();

    $sql2 =  $con->prepare('INSERT INTO projektpraktikum.benutzer (benutzer_username, benutzer_email, benutzer_passwort)
	values
    (
		?,
        ?,
        ?
    )');

    $sql3 = 'commit';










    $con=null;

    echo "Success!";

}
catch (Exception $e){
    echo $e->getCode().': '.$e->getMessage().'<br>;';
    echo "<br>Failure!<br>";
    die("ERROR: Could not connect. " . mysqli_connect_error());

}
?>
</html>
