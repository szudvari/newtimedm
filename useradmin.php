<?php

session_start();
require_once 'functions.php';
include_once 'config.php';
include_once 'db.php';
include_once 'html.php';
include_once 'tables.php';
htmlHead();
navBar($_SESSION);

if (isset($_GET["psw"])) {
    popUp("A felhasználó jelszava megváltozott!");
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
            echo '<br><a href="pswbackup.php"><button class="btn btn-primary btn-lg btnmargin"> Adatbázis-szintű jelszó generálás</button></a>';
        }
    }
}

htmlEnd();

