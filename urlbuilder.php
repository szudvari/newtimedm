<?php

session_start();
require_once 'functions.php';
include_once 'config.php';
include_once 'html.php';
htmlHead();
navBar($_SESSION);


if (!isset($_POST['url'])) {
    $value['url'] = "";
    $value['source'] = "";
    $value['medium'] = "";
    $value['campaign'] = "";
    $value['content'] = "";
} else {
    $value['url'] = $_POST["url"];
    $value['source'] = $_POST["source"];
    $value['medium'] = $_POST["medium"];
    $value['campaign'] = $_POST["campaign"];
    $value['content'] = $_POST["content"];
}
urlBuilder($value);

if (($_SERVER["REQUEST_METHOD"] == "POST")) {
    $separator = separator($value['url']);
    if (!empty($value['content'])) {
        $link = $value['url'] . $separator . 'utm_source=' . $value['source'] . '&utm_medium=' . $value['medium'] . '&utm_campaign=' . $value['campaign'] . '&utm_content=' . $value['content'];
    } else {
        $link = $value['url'] . $separator . 'utm_source=' . $value['source'] . '&utm_medium=' . $value['medium'] . '&utm_campaign=' . $value['campaign'];
    }
    builtURL($link);
}
htmlEnd();
