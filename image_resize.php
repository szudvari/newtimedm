<?php
session_start();
require_once 'functions.php';
include_once 'config.php';


$pic = ($_FILES['pic']['name']);
$folder=preg_replace('/\s+/', '', $_POST['name']);
$dir="/var/local/www/stuff.szallas.travelo.hu/frissites/".$folder;

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
$_770x410=$_POST['770x420'];
$_375x220=$_POST['375x220'];

smart_resize_image($dir."/".$pic,304,174,1);

