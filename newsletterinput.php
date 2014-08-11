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
htmlHead();
navBar($_SESSION);
if (!isset($_SESSION['login']))
{
    notLoggedIn();
}
else
{
    $type=$_GET['type'];
    if ($type==1){
        traveloInputFormHeader ();
        traveloInputFormBase();
        traveloInputFormMenu ();
        traveloInputFormBigPic ();
        traveloInputFormSmallPic();
        traveloInputFormMostRecent();
        traveloInputFormArticle();
        traveloInputFormAd1 ();
        traveloInputFormAd2 ();
        traveloInputFormFoot ();
        
    }
    elseif ($type==2) {
        lifeInputFormHeader ();
        lifeInputFormBase();
        lifeInputFormMenu ();
        lifeInputFormBigPic ();
        lifeInputFormSmallPic();
        lifeInputFormFoot ();
    }
    else if($type==3) {
       echo "life_op hl"; 
    }
    
}
htmlEnd();

