<?php

session_start();
require_once 'functions.php';
include_once 'config.php';
include_once 'db.php';
include_once 'html.php';
include_once 'tables.php';
include_once 'js.php';

htmlHead();
navBar($_SESSION);
if (!isset($_SESSION['login']))
{
    notLoggedIn();
}
else
{
    if (isset($_GET["login"]) && ($_GET["login"]=="true")) {
        popUp("Sikeresen bejelentkezett mint \"" . $_SESSION['user'] . "\"!");
    }
    $con = connectDb();
    newsletters();
    closeDb($con);
}
htmlEnd();
?>