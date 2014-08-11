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
    @$type=$_GET['type'];
    
   if ($type==1){
        traveloFormHeader ("Travelo heti hírlevél készítése");
        traveloInputFormBase();
        traveloInputFormMenu ();
        traveloInputFormBigPic ();
        traveloInputFormSmallPic();
        traveloInputFormMostRecent();
        traveloInputFormArticle();
        traveloInputFormAd1 ();
        traveloInputFormAd2 ();
        traveloFormFoot ("Hírlevél készítése");
        
    }
    elseif ($type==2) {
        lifeFormHeader ("Life EDM készítése");
        lifeInputFormBase();
        lifeInputFormMenu ();
        lifeInputFormBigPic ();
        lifeInputFormSmallPic();
        lifeFormFoot ("Hírlevél készítése");
    }
    else if($type==3) {
        life_opFormHeader ("Life egyképes EDM készítése");
        life_opInputFormBase();
        life_opInputFormMenu ();
        life_opInputFormBigPic ();
        life_opFormFoot ("Hírlevél készítése");
    }
    
    else {
        notValidFunction();
    }
    
}
htmlEnd();

