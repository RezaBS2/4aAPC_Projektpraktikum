<?php

if(session_status() === PHP_SESSION_NONE)
{
    session_start();
}

include_once 'config.php';


try 
{
    global $con;
    
    $input_email = $_POST["emailReset"];

    $input_newpw = $_POST["passwordReset"];

    $input_newpwconfirm = $_POST["passwordResetConfirm"];


    $queryPWReset = 'UPDATE skimp.user SET password = ? WHERE username = 1';
    //$sqlPWReset = $con->prepare($queryInsertNewUser);
    //$sqlPWReset->execute([$username, $email, md5($password)]);

}
catch (Exception $e)
{

}
