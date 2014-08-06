<?php

session_start();
require_once 'functions.php';
include_once 'config.php';
include_once 'db.php';
include_once 'html.php';
include_once 'tables.php';
ob_start();
htmlHead();
navBar($_SESSION);
if (!isset($_SESSION['login']))
{
    notLoggedIn();
}
else
{

    if ($_SESSION['login'] != 1)
    {
        notLoggedIn();
    }
    else
    {

        $id = $_POST["id"];
        $pass1 = $_POST["pass1"];
        $pass2 = $_POST["pass2"];
        if ($pass1 != $pass2)
            {
                echo '<p id="notloggedin">A két jelszó nem egyezik!</p>';
            }
            else
            {
                $password = encodePass($pass1);
                $con = connectDb();
                changeUserPassword($id, $password, $con);
                closeDb($con);
                
                header("Location: useradmin.php?psw");
            }
        
    }
}

htmlEnd();
ob_end_flush();