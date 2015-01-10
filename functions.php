<?php

include_once 'config.php';

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
    if ((($file["type"] == "image/gif") || ($file["type"] == "image/jpeg") || ($file["type"] == "image/jpg") || ($file["type"] == "image/pjpeg") || ($file["type"] == "image/x-png") || ($file["type"] == "image/png")) && ($file["size"] < 8000000000000000) && in_array($extension, $allowedExts)) {
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

function isDiscounted($orig_price) {
    $discount = 0;
    if ($orig_price != 0) {
        $discount = 1;
    }
    return $discount;
}

function siteReplace($string, $site) {
    if (strpos($string, "intravena.hu/travelo")) {
        $newSite = str_replace("intravena.hu/travelo", "intravena.hu/" . $site, $string);
    } else if (strpos($string, "secure.travelo.hu/intravena/travelo")) {
        $newSite = str_replace("secure.travelo.hu/intravena/travelo", "secure.travelo.hu/intravena/" . $site, $string);
    } else {
        $newSite = $string;
    }
    return $newSite;
}

function changeAnalytics($string, $site) {
    $newString = $site . substr($string, 7);
    return $newString;
}

function filesInDirectory($dir) {
    $files = array_diff(scandir($dir), array('..', '.'));
    return $files;
}

function linkReplace($link) {
    if (strpos($link, "var/local/www/")) {
        $newLink = substr(str_replace("var/local/www/", "http://", $link), 1);
    } else {
        $newLink = $link;
    }
    return $newLink;
}

function resize_image($folder, $dir, $file, $w, $h) {

    $image = imagecreatefromjpeg($file);
    $filename = $dir . "/" . $folder . "-" . $w . "x" . $h . ".jpg";

    $thumb_width = $w;
    $thumb_height = $h;

    $width = imagesx($image);
    $height = imagesy($image);

    $original_aspect = $width / $height;
    $thumb_aspect = $thumb_width / $thumb_height;

    if ($original_aspect >= $thumb_aspect) {
        // If image is wider than thumbnail (in aspect ratio sense)
        $new_height = $thumb_height;
        $new_width = $width / ($height / $thumb_height);
    } else {
        // If the thumbnail is wider than the image
        $new_width = $thumb_width;
        $new_height = $height / ($width / $thumb_width);
    }

    $thumb = imagecreatetruecolor($thumb_width, $thumb_height);

// Resize and crop
    imagecopyresampled($thumb, $image, 0 - ($new_width - $thumb_width) / 2, // Center the image horizontally
            0 - ($new_height - $thumb_height) / 2, // Center the image vertically
            0, 0, $new_width, $new_height, $width, $height);
    imagejpeg($thumb, $filename, 100);

    imagedestroy($image);
    return $filename;
}

function watermarkImage($dir, $file) {
    $logo200 = "./misc/travelo_logo_200_watermark.png";
    $logo150 = "./misc/travelo_logo_150_watermark.png";
    $logo100 = "./misc/travelo_logo_100_watermark.png";
    $logo50 = "./misc/travelo_logo_50_watermark.png";
    $image = imagecreatefromjpeg($file);
    
    if ((imagesx($image)>220) && (imagesy($image)>177)) {
     $watermark = imagecreatefrompng($logo200);    
    }
    else if (imagesx($image)>220 && ((imagesy($image)<=177) && (imagesy($image)>132))) {
     $watermark = imagecreatefrompng($logo150);    
    }
    else if (imagesx($image)>220 && ((imagesy($image)<=132) && (imagesy($image)>90))) {
     $watermark = imagecreatefrompng($logo100);    
    }
    else if (((imagesx($image)<=220) && (imagesx($image))> 170) && (imagesy($image)>132)) {
     $watermark = imagecreatefrompng($logo150);    
    }
    else if (((imagesx($image)<=220) && (imagesx($image))> 170) && ((imagesy($image)<=132) && (imagesy($image)>90))) {
     $watermark = imagecreatefrompng($logo100);    
    }
    else if (imagesx($image)<=170 && imagesx($image)> 120 && (imagesy($image)>132)) {
     $watermark = imagecreatefrompng($logo100);    
    }
    else {
     $watermark = imagecreatefrompng($logo50);
    }
    
    $filename= basename($file);
    $filename= $dir."/".preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename)."_marked.jpg";

    // Set the margins for the stamp and get the height/width of the stamp image
    $marge_right = 10;
    $marge_bottom = 10;
    $wx = imagesx($watermark);
    $wy = imagesy($watermark);

// Copy the stamp image onto our photo using the margin offsets and the photo 
// width to calculate positioning of the stamp. 
    imagecopy($image, $watermark, imagesx($image) - $wx - $marge_right, imagesy($image) - $wy - $marge_bottom, 0, 0, imagesx($watermark), imagesy($watermark));

// Output and free memory
    imagejpeg($image, $filename, 100);
    imagedestroy($image);
    return $filename;
}
