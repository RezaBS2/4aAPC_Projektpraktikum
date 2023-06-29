<?php

if(session_status() === PHP_SESSION_NONE)
{
    session_start();
}
$t = isset($_SESSION['searchresults']);
echo '<script>alert("'.$t.'"))</script>';

?>