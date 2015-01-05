<?php

session_start();
require_once 'functions.php';
include_once 'config.php';
include_once 'html.php';
include_once 'db.php';

htmlHead();
navBar($_SESSION);


if (isset($_GET["title"])) {
    $title = $_GET["title"];
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $con = connectDb();
        $type = getANewsletterType($id);
        switch ($type) {
            case 1:
                $table = "travelo_hirlev";
                break;
            case 2:
                $table = "life_hirlev";
                break;
            case 3:
                $table = "life_op_hirlev";
                break;
            case 4:
                $table = "intravena_hirlev";
                break;
            case 5:
                $table = "thematic_hirlev";
                break;
        }
        $travelo = getANewsletter($table, $id);
        switch ($type) {
            case 1:
                $index = $website['root'] . getFolderName($travelo['folder']) . '/index.html';
                break;
            case 2:
                $index = $website['root'] . "dm/" . getFolderName($travelo['folder']) . '/index.html';
                break;
            case 3:
                $index = $website['root'] . "dm/" . getFolderName($travelo['folder']) . '/index.html';
                break;
            case 4:
                $index = $website['root'] . "intavena/" . getFolderName($travelo['folder']) . '/index.html';
                break;
            case 5:
                $index = $website['root'] . getFolderName($travelo['folder']) . '/index.html';
                break;
        }
        $link = linkReplace($index);
    } else {
        $link = NULL;
    }
    saveDone($title, $link);
} else {
    notValidFunction();
}

htmlEnd();
