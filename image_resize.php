<?php

session_start();
require_once 'functions.php';
include_once 'config.php';


$pic = ($_FILES['pic']['name']);
$folder = preg_replace('/\s+/', '', $_POST['name']);
$dir = "/var/local/www/stuff.szallas.travelo.hu/frissites/" . $folder;
//$dir="./".$folder;

if (!mkdir($dir)) {
    if (file_exists($dir)) {
        //echo "{$website['root']} <br>"; 
        echo "$dir <br>";
        echo "A könyvtár már létezik";
        chmod($dir, 0777);
        upload_picture($_FILES['pic'], $dir);
    } else {
        echo "$dir <br>";
        $error = error_get_last();
        echo $error['message'] . "<br>";
        die("hiba, a könyvtár nem jött létre");
    }
} else {
    chmod($dir, 0777);
    upload_picture($_FILES['pic'], $dir);
}
$watermark = $_POST['watermark'];
$_304x174 = $_POST['304x174'];
$_74x74 = $_POST['74x74'];
$_634x344 = $_POST['634x344'];
$_160x120 = $_POST['160x120'];
$_185x105 = $_POST['185x105'];
$_352x198 = $_POST['352x198'];
$_348x196 = $_POST['348x196'];
$_148x83 = $_POST['148x83'];
$_516x342 = $_POST['516x342'];
$_640x350 = $_POST['640x350'];
$_320x185 = $_POST['320x185'];
$_296x200 = $_POST['296x200'];
$_770x410 = $_POST['770x410'];
$_375x220 = $_POST['375x220'];
$_625x290 = $_POST['625x290'];
$_305x160 = $_POST['305x160'];
$_145x150 = $_POST['145x150'];
$_340x160 = $_POST['340x160'];
$_164x190 = $_POST['164x190'];
$_220x90 = $_POST['220x90'];
$_157x120 = $_POST['157x120'];
$_300x139 = $_POST['300x139'];
$_145x215 = $_POST['145x215'];
$_140x152 = $_POST['140x152'];
$_140x90 = $_POST['140x90'];
$_150x150 = $_POST['150x150'];
$_120x80 = $_POST['120x80'];

$orig_file = $dir . "/" . $pic;

$file = $orig_file;


$res_file=resize_image($folder, $dir, $file, 74, 74);
if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
if ($_304x174 == "on") {
    $res_file=resize_image($folder, $dir, $file, 304, 174);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_634x344 == "on") {
    $res_file=resize_image($folder, $dir, $file, 634, 344);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_160x120 == "on") {
    $res_file=resize_image($folder, $dir, $file, 160, 120);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_185x105 == "on") {
    $res_file=resize_image($folder, $dir, $file, 185, 105);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_352x198 == "on") {
    $res_file=resize_image($folder, $dir, $file, 352, 198);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_348x196 == "on") {
    $res_file=resize_image($folder, $dir, $file, 348, 196);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_148x183 == "on") {
    $res_file=resize_image($folder, $dir, $file, 148, 83);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_516x342 == "on") {
    $res_file=resize_image($folder, $dir, $file, 516, 342);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_640x350 == "on") {
    $res_file=resize_image($folder, $dir, $file, 640, 350);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_320x185 == "on") {
    $res_file=resize_image($folder, $dir, $file, 320, 185);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_296x200 == "on") {
    $res_file=resize_image($folder, $dir, $file, 296, 200);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_770x410 == "on") {
    $res_file=resize_image($folder, $dir, $file, 770, 410);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_375x220 == "on") {
    $res_file=resize_image($folder, $dir, $file, 375, 220);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_625x290 == "on") {
    $res_file=resize_image($folder, $dir, $file, 625, 290);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_305x160 == "on") {
    $res_file=resize_image($folder, $dir, $file, 305, 160);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_145x150 == "on") {
    $res_file=resize_image($folder, $dir, $file, 145, 150);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_340x160 == "on") {
    $res_file=resize_image($folder, $dir, $file, 340, 160);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_164x190 == "on") {
    $res_file=resize_image($folder, $dir, $file, 164, 190);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_220x90 == "on") {
    $res_file=resize_image($folder, $dir, $file, 220, 90);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_157x120 == "on") {
    $res_file=resize_image($folder, $dir, $file, 157, 120);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_300x139 == "on") {
    $res_file=resize_image($folder, $dir, $file, 300, 139);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_145x215 == "on") {
    $res_file=resize_image($folder, $dir, $file, 145, 215);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_140x152 == "on") {
    $res_file=resize_image($folder, $dir, $file, 140, 152);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_148x83 == "on") {
    $res_file=resize_image($folder, $dir, $file, 148, 83);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_140x90 == "on") {
    $res_file=resize_image($folder, $dir, $file, 140, 90);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_150x150 == "on") {
    $res_file=resize_image($folder, $dir, $file, 150, 150);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}
if ($_120x80 == "on") {
    $res_file=resize_image($folder, $dir, $file, 120, 80);
    if ($watermark=='on') {
        watermarkImage($dir,$res_file);
    } 
}

$url = "http://stuff.szallas.travelo.hu/timedm/imagesindir.php?dir=" . $folder;
header("Location: " . $url);
