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

if (isset($_GET["psw"])) {
    popUp("A felhasználó jelszava megváltozott!");
}

if ((isset($_GET["bckp"])) && ($_SESSION['login'] == 1))  {
    popUpDanger("<b>A kódolt jelszó:</b> <br />".wordwrap($_GET["bckp"], 75, "<br />", true));
}

if (!isset($_SESSION['login'])) {
    notLoggedIn();
} else {
    if ($_SESSION['login'] != 1) {
        notLoggedIn();
    } else {
        $con = connectDb();
        allUser();
        closeDb($con);
        newUser();
        if ($_SESSION['user'] == "admin") {
            pswBackup();
        }
    }
}

htmlEnd();

