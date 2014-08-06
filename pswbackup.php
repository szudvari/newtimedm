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
if (!isset($_SESSION['login'])) {
    notLoggedIn();
} else {

    if ($_SESSION['login'] != 1) {
        notLoggedIn();
    } else {
        $pass = $_POST["pass"];
        $password = encodePass($pass1);
        header("Location: useradmin.php?bckp=$password");
    }
}
htmlEnd();
ob_end_flush();
