<!-- input type="" id="signout" name="signout" method="POST" title="Sign Out" action="" -->
<?php
    if(session_status() === PHP_SESSION_NONE)
    {
        session_start();
    }
//echo 'Is Session logged in: '.$_SESSION['logged_in'].'<br>';
    if($_SESSION['logged_in'])
    {
        $loggedIn = false;
        $_SESSION['logged_in'] = false;
        $_SESSION['username'] = "";


        session_destroy();

        echo "<a href=index.php>User abgemeldet</a>";
        //header("Refresh: 1; url=index.php");
        //header("Refresh:0");
    }
    else if(!$_SESSION['logged_in']){
        header('location:index.php');
        echo "<a href=index.php>Sie waren nicht abgemeldet</a>";
    }

//echo "<a href=index.php>Sign Out</a>";
?>