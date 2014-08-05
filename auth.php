<?php

session_start();
include_once 'functions.php';
include_once 'db.php';
include_once 'config.php';
include_once 'html.php';

ob_start();
htmlHead();

$userdata['user'] = $_POST['user'];
$userdata['pass'] = encodePass($_POST['pass']);


$con = connectDb();
$login = authUserDb($userdata, $con);
closeDb($con);

if ($login)
{
//    echo 'success';
    $con = connectDb();
    $_SESSION['login'] = getUserRole($userdata);
    $_SESSION['user'] = $userdata['user'];
    $_SESSION['userid'] = getUserId($userdata);
    closeDb($con);
    header("Location: index.php");
}
else
{
    echo 'Hibás felhasználónév vagy jelszó.';
    header("Refresh: 3; url={$_SERVER['HTTP_REFERER']}");
}
ob_end_flush();