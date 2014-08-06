<?php

session_start();
require_once 'functions.php';
include_once 'config.php';
include_once 'html.php';
htmlHead();
navBar($_SESSION);

$b_url = $b_source = $b_medium = $b_campaign = $b_separator = $b_link = "";
if (!isset($_POST['url'])){
    $value['url']="";
    $value['source']="";
    $value['medium']="";
    $value['campaign']="";
}
else {
    $value['url']=$_POST["url"];
    $value['source']=$_POST["source"];
    $value['medium']=$_POST["medium"];
    $value['campaign']=$_POST["campaign"];
}
urlBuilder($value);

if (($_SERVER["REQUEST_METHOD"] == "POST")) {
    $separator = separator($value['url']);
    $link = $value['url'] . $separator . 'utm_source=' . $value['source'] . '&utm_medium=' . $value['medium'] . '&utm_campaign=' . $value['campaign'];
    builtURL($link);
   


}
htmlEnd();
