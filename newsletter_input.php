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
    else if ($type==2) {
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
    else if($type==4) {
        intravenaFormHeader ("Intravéna hírlevél készítése");
        intravenaInputFormBase();
        //intravenaInputFormMenu ();
        intravenaInputFormWelcome();
        intravenaInputFormBigPic ();
        intravenaInputFormBigPic2 ();
        intravenaInputFormSmallPic();
        intravenaFormFoot ("Hírlevél készítése");
    }
    else if($type==5) {
        thematicFormHeader ("Travelo tematikus hírlevél készítése");
        thematicInputFormBase();
        thematicInputFormMenu ();
        thematicInputFormBigPic1 ();
        thematicInputFormBigPic2 ();
        thematicInputFormBigPic3 ();
        thematicInputFormArticle();
        thematicInputFormAd1 ();
        thematicInputFormAd2 ();
        thematicFormFoot ("Hírlevél készítése");
    }
    
    else {
        notValidFunction();
    }
    
}
htmlEnd();

