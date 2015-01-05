<?php

/* 
 * Design and programming by WebAriel
 * Visit http://webariel.hu
 * E-mail: info@webariel.hu
 */

session_start();
require_once 'config.php';
require_once 'html.php';
require_once 'db.php';
require_once 'js.php';

htmlHead();
if (isset($_GET["logout"]))
{
    session_unset();
    session_destroy();
    $_SESSION["admin"] = NULL;
    popUp("Sikeresen kijelentkezett!");
}
navBar($_SESSION);

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
