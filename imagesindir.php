<?php

session_start();
require_once 'functions.php';
include_once 'config.php';
include_once 'html.php';
include_once 'tables.php';


htmlHead();
navBar($_SESSION);

$dir="/var/local/www/stuff.szallas.travelo.hu/frissites/".$_GET['dir'];
$name=$_GET['dir'];
listPictures ($dir, $name);

htmlEnd();

