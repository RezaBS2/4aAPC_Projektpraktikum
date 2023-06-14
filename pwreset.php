<?php

session_start();
global $loggedIn;
include 'config.php';

try 
{

    global $con;

    
    $input_email = $_POST["emailReset"];

    $input_newpw = $_POST["passwordReset"];

    $input_newpwconfirm = $_POST["passwordResetConfirm"];




}
catch (Exception $e)
{

}
