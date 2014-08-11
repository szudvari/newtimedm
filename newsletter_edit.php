<?php

session_start();
require_once 'functions.php';
include_once 'config.php';
include_once 'db.php';
include_once 'html.php';
include_once 'tables.php';
include_once 'travelo_nl.php';
include_once 'life_nl.php';
include_once 'life_op.php';
ob_start();
htmlHead();
navBar($_SESSION);
if (!isset($_SESSION['login']))
{
    notLoggedIn();
}
else
{
    @$type=$_GET['hirlevel_type'];
    @$id=$_GET['hirlevel_id'];
    switch ($type) {
        case 1:
            $table = "travelo_hirlev";
            $con = connectDb();
            $travelo = getANewsletter($table, $id);
            closeDb($con);
            if (empty($travelo))
            {
                notValidFunction();
                header("Refresh: 3; url=newsletter_list.php");
            }
            else
            {
                traveloFormHeader("Travelo heti hírlevél módosítás");
                traveloEditFormBase($travelo, $id);
                traveloEditFormMenu($travelo);
                traveloEditFormBigPic ($travelo);
                traveloEditFormSmallPic($travelo);
                traveloEditFormMostRecent($travelo);
                traveloEditFormArticle($travelo);
                traveloEditFormAd1($travelo);
                traveloEditFormAd2($travelo);
                traveloFormFoot("Hírlevél módosítása");
            }
            break;
        case 2:
            $table = "life_hirlev";
            $con = connectDb();
            $travelo = getANewsletter($table, $id);
            closeDb($con);
            if (empty($travelo))
            {
                notValidFunction();
                header("Refresh: 3; url=newsletter_list.php");
            }
            else
            {
                lifeInputFormHeader();
                lifeEdit($travelo, $id);
            }
            break;
        case 3:
            $table = "life_op_hirlev";
            $con = connectDb();
            $travelo = getANewsletter($table, $id);
            closeDb($con);
            if (empty($travelo))
            {
                notValidFunction();
                header("Refresh: 3; url=newsletter_list.php");
            }
            else
            {
                life_opInputFormHeader();
                lifeOpEdit($travelo, $id);
            }
            break;
        default:
            notValidFunction();
            header("Refresh: 3; url=newsletter_list.php");
    }
}
htmlEnd();
ob_end_flush();