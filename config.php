<?php
// Start the session
//session_start();
?>

<!DOCTYPE html>
<html lang="en">

<?php

/* Verbindung uzum Thomas sein Server */
$server = 'tom.m1nd.at:80';
$user = 'bs-linz2';
$pwd = 'bs-linz2';
$db = 'skimp';



/* Lokale Datenbank
$server = 'localhost:3306';
$user = 'root';
$pwd = '';
$db = 'projektpraktikum';
*/


try {
    $con = new PDO('mysql:host=' . $server . ';dbname=' . $db . ';charset=utf8', $user, $pwd);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $_SESSION['DBConnection'] = $con;

} catch (Exception $e) {
    echo 'Error - Verbindung: ' . $e->getCode() . ': ' . $e->getMessage() . '<br>';
}
?>

</html>