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
        echo "<p id=\"notloggedin\"> A kért oldal megtekintéséhez nincs jogosultsága.</br>"
        . "Kérem, lépjen kapcsolatba a rendszergazdával!<br>";
    }
    else
    {
        $id = $_GET["uid"];
        if ($id != 1)
        {
            $status = $_GET["status"];
            $con = connectDb();
            changeUserSatus($id, $status, $con);
            closeDb($con);
            header("Location:useradmin.php");
        }
        else
        {

            echo "<p id=\"notloggedin\">A főadmin nem tiltható ki!</p>";
            header("Refresh: 3; url=useradmin.php");
        }
    }
}
htmlEnd();
ob_end_flush();