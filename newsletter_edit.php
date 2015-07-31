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
include_once 'intravena_nl.php';
include_once 'thematic_nl.php';
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
                traveloFormHeader("Travelo heti hírlevél módosítása");
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
                lifeFormHeader("Life EDM módosítása");
                lifeEditFormBase($travelo, $id);
                lifeEditFormMenu ($travelo);
                lifeEditFormBigPic ($travelo);
                lifeEditFormSmallPic($travelo);
                lifeFormFoot("Hírlevél módosítása");
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
                life_opFormHeader("Life egyképes EDM módosítása");
                life_opEditFormBase($travelo, $id);
                life_opEditFormMenu ($travelo);
                life_opEditFormBigPic ($travelo);
                life_opFormFoot("Hírlevél módosítása");
            }
            break;
        case 4:
            $table = "intravena_hirlev";
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
                intravenaFormHeader("Intravéna hírlevél módosítása");
                intravenaEditFormBase($travelo, $id);
                //intravenaEditFormMenu ($travelo);
                intravenaEditFormWelcome($travelo);
                intravenaEditFormBigPic ($travelo);
                intravenaEditFormBigPic2 ($travelo);
                intravenaEditFormSmallPic($travelo);
                intravenaFormFoot("Hírlevél módosítása");
            }
            break;
        case 5:
            $table = "thematic_hirlev";
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
                thematicFormHeader("Travelo tematikus hírlevél módosítása");
                thematicEditFormBase($travelo, $id);
                thematicEditFormMenu ($travelo);
                thematicEditFormBigPic1 ($travelo);
                thematicEditFormBigPic2 ($travelo);
                thematicEditFormBigPic3 ($travelo);
                thematicEditFormArticle($travelo);
                thematicEditFormAd1($travelo);
                thematicEditFormAd2($travelo);
                thematicFormFoot("Hírlevél módosítása");
            }
            break;
        default:
            notValidFunction();
            header("Refresh: 3; url=newsletter_list.php");
    }
}
htmlEnd();
ob_end_flush();