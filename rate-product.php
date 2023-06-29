<?php

include_once 'functions.php';
if(session_status() === PHP_SESSION_NONE)
{
    session_start();
}

//$cn = $_POST['companyname2']; //companyname
$cn = $_SESSION['SearchResults'][$_GET['producktArr_id']][1];
//$cn = $_SESSION['currentcompany'];

$comp_id = return_comp_id($cn); //comp_id

//echo '<script>alert("companyname: '.$cn.'   comp_id: '.$comp_id.'")</script>';


//$pn = $_POST['productname2']; // productname
//$pn = $_SESSION['currentproduct'];
$pn = $_SESSION['SearchResults'][$_GET['producktArr_id']][0];

$prod_id = return_prod_id($pn);

//echo '<script>alert("productname: '.$pn.'   prod_id: '.$prod_id.'")</script>';



$prod_comp_id = return_prod_comp_id($prod_id, $comp_id); // prod_comp_id !!!

//echo '<script>alert("prod_comp_id: '.$prod_comp_id.'")</script>';



$un = $_SESSION['username'];

$user_id = return_user_id($un);         // user_id !!!

//echo '<script>alert("username: '.$un.'   user_id: '.$user_id.'")</script>';



$rcount = getRowCountFrom_user_prod_comp($user_id, $prod_comp_id);

//echo '<script>alert("$rcount: '.$rcount.'")</script>';

if($rcount == 0)
{
    try {
        insertInto_user_prod_comp($user_id, $prod_comp_id);
        // echo '<script>alert("insertInto_user_prod_comp durchgeführt")</script>';
    }
    catch (Exception $eInsertFail)
    {
        echo $eInsertFail->getCode() . ': ' . $eInsertFail->getMessage() . '<br>';
    }
}

$bewertung = $_POST['rating2'];
echo '<script>alert("$bewertung: '.$bewertung.'")</script>';

try {
    saveRating($bewertung, $user_id, $prod_comp_id);
    echo '<script>alert("Bewertung abgegeben")</script>';
}
catch (Exception $eRate)
{
    echo $eRate->getCode() . ': ' . $eRate->getMessage() . '<br>';
}



?>
