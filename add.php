<?php

session_start();
require_once 'functions.php';
include_once 'config.php';
include_once 'db.php';
include_once 'html.php';

ob_start();
htmlHead();
navBar($_SESSION);
if (!isset($_SESSION['login'])) {
    notLoggedIn();
} else {
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    $userdata['user'] = $_POST['user'];
    $userdata['name'] = $_POST['fullname'];
    $userdata['pass'] = encodePass($pass);

    if ($pass == $pass2) {
        $con = connectDb();
        insertUserDb($userdata, $con);
        closeDb($con);
        header("Refresh: 2; url=useradmin.php?add=1");
    } else {
        echo "A jelszó nem egyezik!";
        header("Refresh: 2; url={$_SERVER['HTTP_REFERER']}");
    }
}
htmlEnd();
ob_end_flush();
