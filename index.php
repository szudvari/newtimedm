<?php
session_start();
require_once 'config.php';
require_once 'html.php';
require_once 'db.php';
require_once 'js.php';

htmlHead();
navBar($_SESSION);
if (isset($_GET["logout"]))
{
    session_unset();
    session_destroy();
    $_SESSION["admin"] = NULL;
    popUp("Sikeresen kijelentkezett!");
}
if (isset($_GET["login"]))
{
    if($_GET["login"]=="true") {
        popUp("Sikeresen bejelentkezett mint \"" . $_SESSION['user'] . "\"!");
    }
    else {
      popUp("Sikertelen bejelentkezés!");  
    }
}
mainScreen($_SESSION);
htmlEnd();
