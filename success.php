<?php

session_start();
require_once 'functions.php';
include_once 'config.php';
include_once 'db.php';
include_once 'html.php';
include_once 'tables.php';
htmlHead();
navBar($_SESSION);
if (!isset($_SESSION['login']))
{
    notLoggedIn();
}
else
{
    $id=$_GET['hirlevel_id'];
    $con = connectDb();
    getSuccesNewsletter($id);
    closeDb($con);
}
htmlEnd();
