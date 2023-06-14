<?php

if(session_status() === PHP_SESSION_NONE)
{
    session_start();

}

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
