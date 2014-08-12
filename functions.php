<?php

function encodePass($clearPass) {
    $salt1 = "eldjh!er%vb+nv";
    $salt2 = "%fgdfgfd=4%dfsdf(";
    $saltedText = $salt1 . $clearPass . $salt2;
    $cryptedPass = hash("sha512", $saltedText);
    return $cryptedPass;
}

function separator($link) {
    $findme = '?';
    $pos = strpos($link, $findme);
    if ($pos === false) {
        $separator_result = "?";
    } else {
        $separator_result = "&";
    }
    return $separator_result;
}

function upload_picture($file, $folder) {
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $file["name"]);
    $extension = end($temp);
//print_r($file);
    if ((($file["type"] == "image/gif") 
            || ($file["type"] == "image/jpeg") 
            || ($file["type"] == "image/jpg") 
            || ($file["type"] == "image/pjpeg") 
            || ($file["type"] == "image/x-png") 
            || ($file["type"] == "image/png")) 
            && ($file["size"] < 8000000) 
            && in_array($extension, $allowedExts)) {
        if ($file["error"] > 0) {
            echo "Return Code: " . $file["error"] . "<br>";
        } else {
            if (file_exists($folder . "/" . $file["name"])) {
                echo $file["name"] . " already exists. ";
            } else {
//				echo "move ";
//				echo $folder . "/" . $file["name"];
                move_uploaded_file($file["tmp_name"], $folder . "/" . $file["name"]);
            }
        }
    } else {
        echo "Invalid file";
    }
}

function getFolderName($string) {
    $array = explode("/", $string);
    $folderName = end($array);
    return $folderName;
}
