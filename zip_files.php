<?php

require_once 'functions.php';
$name = $_GET['dir'];
$dir = '/var/local/www/stuff.szallas.travelo.hu/frissites/' . $name;


$files = filesInDirectory($dir);

# create new zip opbject
$zip = new ZipArchive();

# create a temp file & open it
$tmp_file = tempnam('.', '');
$zip->open($tmp_file, ZipArchive::CREATE);

# loop through each file
foreach ($files as $file) {

    # download file
    $download_file = file_get_contents($dir.'/'.$file);

    #add it to the zip
    $zip->addFromString(basename($file), $download_file);
}

# close zip
$zip->close();

# send the file to the browser as a download
header('Content-disposition: attachment; filename=download.zip');
header('Content-type: application/zip');
readfile($tmp_file);
