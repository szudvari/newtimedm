<?php
session_start();
require_once 'functions.php';
include_once 'config.php';
include_once 'html.php';
include_once 'tables.php';
include_once 'db.php';

htmlHead();
navBar($_SESSION);


if (isset($_GET["hirlevel_id"])){
$id = $_GET["hirlevel_id"];
$table = "intravena_hirlev";

$con = connectDb();
$travelo = getANewsletter($table, $id);
closeDb($con);

$folder_name = getFolderName($travelo['folder']);
$dir = $website['root'] . "intravena/" . $folder_name . "/save";
listFiles($dir, $folder_name);

}
else {
    notValidFunction();
}

htmlEnd();