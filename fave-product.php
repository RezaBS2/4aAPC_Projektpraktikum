<?php

include 'functions.php';
if(session_status() === PHP_SESSION_NONE)
{
    session_start();
}


$cn = $_POST['companyname1']; //companyname

$comp_id = return_comp_id($cn); //comp_id

echo '<script>alert("companyname: '.$cn.'   comp_id: '.$comp_id.'")</script>';


$pn = $_POST['productname1'];

$prod_id = return_prod_id($pn);

echo '<script>alert("productname: '.$pn.'   prod_id: '.$prod_id.'")</script>';



$prod_comp_id = return_prod_comp_id($prod_id, $comp_id); // prod_comp_id !!!

echo '<script>alert("prod_comp_id:'.$prod_comp_id.'")</script>';



$un = $_SESSION['username'];

$user_id = return_user_id($un);         // user_id !!!

echo '<script>alert("username: '.$un.'   user_id: '.$user_id.'")</script>';



$rcount = getRowCountFrom_user_prod_comp($user_id, $prod_comp_id);

echo '<script>alert("$rcount: '.$rcount.'")</script>';

if($rcount == 0)
{
    try {
        insertInto_user_prod_comp($user_id, $prod_comp_id);
        echo '<script>alert("insertInto_user_prod_comp durchgeführt")</script>';
    }
    catch (Exception $eInsertFail)
    {
        echo $eInsertFail->getCode() . ': ' . $eInsertFail->getMessage() . '<br>;';
    }
}

$remember = returnFavouriteStatus($user_id, $prod_comp_id);
echo '<script>alert("$remember: '.$remember.'")</script>';

if ($remember == NULL)
{
    saveAsFavourite($user_id, $prod_comp_id);
    echo '<script>alert("Artikel zu Favoriten hinzugefügt")</script>';
}
else if($remember != NULL)
{
    deleteFromFavourite($user_id, $prod_comp_id);
    echo '<script>alert("Artikel von Favoriten entfernt")</script>';

}


?>
