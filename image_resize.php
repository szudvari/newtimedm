<?php
session_start();
require_once 'functions.php';
include_once 'config.php';


$pic = ($_FILES['pic']['name']);
$folder=preg_replace('/\s+/', '', $_POST['name']);
$dir="/var/local/www/stuff.szallas.travelo.hu/frissites/".$folder;
//$dir="./".$folder;

if (!mkdir($dir)) {
    if (file_exists($dir)) {
        echo "{$website['root']} <br>"; 
        echo "$dir <br>";
        die("A könyvtár már létezik");
        
    } 
    else {
        echo "$dir <br>";
        $error = error_get_last();
        echo $error['message']."<br>";
        die("hiba, a könyvtár nem jött létre");
    }
}
else { 
    chmod($dir, 0777);
    upload_picture($_FILES['pic'], $dir);
}
$file=$dir."/".$pic;

$_304x174=$_POST['304x174'];
$_74x74=$_POST['74x74'];
$_634x344=$_POST['634x344'];
$_160x120=$_POST['160x120'];
$_185x105=$_POST['185x105'];
$_352x198=$_POST['352x198'];
$_348x196=$_POST['348x196'];
$_148x83=$_POST['148x83'];
$_516x342=$_POST['516x342'];
$_640x350=$_POST['640x350'];
$_320x185=$_POST['320x185'];
$_296x200=$_POST['296x200'];
$_770x410=$_POST['770x410'];
$_375x220=$_POST['375x220'];
$_625x290=$_POST['625x290'];
$_305x160=$_POST['305x160'];


if ($_304x174=="on") {
    resize_image($dir,$file,304,174);
}
if ($_74x74=="on") {
    resize_image($dir,$file,74,74);
}
if ($_634x344=="on") {
    resize_image($dir,$file,634,344);
}
if ($_160x120=="on") {
    resize_image($dir,$file,160,120);
}
if ($_185x105=="on") {
    resize_image($dir,$file,185,105);
}
if ($_352x198=="on") {
    resize_image($dir,$file,352,198);
}
if ($_348x196=="on") {
    resize_image($dir,$file,348,196);
}
if ($_148x183=="on") {
    resize_image($dir,$file,148,83);
}
if ($_516x342=="on") {
    resize_image($dir,$file,516,342);
}
if ($_640x350=="on") {
    resize_image($dir,$file,640,350);
}
if ($_320x185=="on") {
    resize_image($dir,$file,320,185);
}
if ($_296x200=="on") {
    resize_image($dir,$file,296,200);
}
if ($_770x410=="on") {
    resize_image($dir,$file,770,410);
}
if ($_375x220=="on") {
    resize_image($dir,$file,375,220);
}
if ($_625x290=="on") {
    resize_image($dir,$file,625,290);
}
if ($_305x160=="on") {
    resize_image($dir,$file,305,160);
}