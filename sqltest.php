
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


//Verbindungsinformationsvariablen

//$server = 'localhost:3307';
$server = 'localhost:3306';
$user = 'root';
$pwd = '';
//$db = 'information_schema';
$db = 'projektpraktikum';
//




/*/ Verbindung uzum Thomas sein Server
$server = 'tom.m1nd.at:80';
$user = 'bs-linz2';
$pwd = 'bs-linz2';
$db = 'skimp';
/*/



//Benutzervariablen
$username = "";
$email = "";
$passwort = "";


$input_username = "";
$input_passwort = "";


$input_username = $_POST["username"];
$input_passwort = $_POST["password"];


$email = $_POST["email"];;




//Testen
$username = "usern";
$email = "usern@mail.com";
$passwort = "123pass";


$input_username = "usern";
$input_passwort ="123pass";
//


$isLoggedIn = FALSE;

//


try {
    $con = new PDO('mysql:host='.$server.';dbname='.$db.';charset=utf8', $user,$pwd);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    $sqlSelectAll = 'SELECT benutzer_id, benutzer_username, benutzer_email, benutzer_passwort FROM benutzer';


    $result = $con->query($sqlSelectAll);


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

    $sqlInsert =  $con->prepare('INSERT INTO projektpraktikum.benutzer (benutzer_username, benutzer_email, benutzer_passwort)
	values
    (
		?,
        ?,
        MD5(?)
    )');

    $sqlInsert->execute([$username, $email, $passwort]);
    $remainingLines = $sqlInsert->fetchAll();




    //Vergleich Login
    $sqlSelectUsername =  $con->prepare('SELECT benutzer_username, benutzer_passwort FROM benutzer WHERE benutzer_username = ?');
    $sqlSelectUsername->execute([$username]);
    try {
        while($row = $result->fetch()) {
            $input_username = $row["benutzer_username"];
            $input_passwort = $row["benutzer_passwort"];
        }
        if($input_passwort == $passwort)
        {
            $isLoggedIn = TRUE;
            echo '<a href="index.php">main</a>';
        }



    }
    catch (Exception $e){
       // echo $e->getCode().': '.$e->getMessage().'<br>;';
        echo "<br>Username does not exist!<br>";

    }


    //$sql2->execute([user2, 'user2@mail.to', 'PassWortUser2']);
    //$yellow = $sth->fetchAll();

    //$sql3 = 'commit';




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
