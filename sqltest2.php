
<!DOCTYPE html>
<html lang="en">
<?php

$server = 'localhost:3306';
$user = 'root';
$pwd = '';
//$db = 'information_schema';
$db = 'projektpraktikum';


//Benutzervariablen
$username = "";
$email = "";
$passwort = "";


$input_username = "";
$input_passwort = "";



//Testen


$input_username = "usertesting";
$input_passwort ="123pass";
//


//


try {
    $con = new PDO('mysql:host='.$server.';dbname='.$db.';charset=utf8', $user, $pwd);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//$sql = 'SELECT benutzer_id, benutzer_username, benutzer_email, benutzer_passwort FROM projektpraktikum.benutzer where benutzer_username = ?';


//$result = $con->query($sqlSelectAll);

    $sql = $con->prepare("SELECT benutzer_id, benutzer_username, benutzer_email, benutzer_passwort FROM projektpraktikum.benutzer where benutzer_username = 'usertesting'");

    $sql->execute([$input_username]);
    $colCount = $sql->columnCount();
    echo 'Size of array: '.$colCount.'<br>';
    while($row = $sql->fetch()) {
        echo ''.$row["benutzer_username"].'<br>';
    }


    $query = 'SELECT benutzer_id, benutzer_username, benutzer_email, benutzer_passwort FROM projektpraktikum.benutzer where benutzer_username = ?';
    $stmt = $con->prepare($query);
    $stmt->execute([$input_username]);


    $colCount2 = $stmt->columnCount();


   // $result = $con->query($sql);


    $result->fetch(PDO::FETCH_NUM);
    echo 'Size of array: '.$colCount2.'';
} catch (Exception $e)
{
    echo $eall->getCode().': '.$eall->getMessage().'<br>;';
    echo "<br>Failure!<br>";
}


?>
</html>
