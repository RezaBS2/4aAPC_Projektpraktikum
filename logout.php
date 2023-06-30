<!-- input type="" id="signout" name="signout" method="POST" title="Sign Out" action="" -->
<?php
 include_once "head.php"; 
    if(session_status() === PHP_SESSION_NONE)
    {
        session_start();
    }
//echo 'Is Session logged in: '.$_SESSION['logged_in'].'<br>';
    



//if(isset($_SESSION['logged_in']))
    //{
        //$loggedIn = false;
        //$_SESSION['logged_in'] = false;
        unset($_SESSION['logged_in']);
        $_SESSION['username'] = "";
        unset($_SESSION['username']);

        

        
        $dir = 'myDir';
        $myfilepath = './'.$dir.'/'.'tempfile.txt';
        if (file_exists($myfilepath))
        {
          //$myfile = fopen($myfilepath, "w+");
            $myfile = fopen($myfilepath,"w");
            fwrite($myfile,"");
            fclose($myfile);

            unlink($myfilepath);
        }
        
        //session_destroy();
        
        echo '<a href=index.php class="reg">';
        echo '<h1 class="fail reg topi3 to">Sie wurde Erfolgreich Abgemeldet!</h1>';
        echo '<button class="centered-btn btf2 btn btn-danger topi5">&nbsp;&nbsp;&nbsp;OK&nbsp;&nbsp;&nbsp;</button></a>';
        echo '<br>';
        echo'    <img  class="preimg" src="assets\img\logo.png" alt="Logo">';

        //header("Refresh: 1; url=index.php");
        //header("Refresh:0");
//    }
 //   else if(!$_SESSION['logged_in']){
 //       header('location:index.php');
  //      echo "<a href=index.php>Sie waren nicht abgemeldet</a>";
  //  }

//echo "<a href=index.php>Sign Out</a>";
?>