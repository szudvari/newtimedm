<?php
include 'functions.php';
$folder = 'teszt1';
//$dir = "/var/local/www/stuff.szallas.travelo.hu/frissites/" . $folder;
$dir = $folder;
$pic = "1435388_90906499.jpg";
$file= "./".$dir . "/" . $pic;
$name = watermarkImage($folder, $dir, $file);

echo $name;
