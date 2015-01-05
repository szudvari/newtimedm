<?php

session_start();
require_once 'functions.php';
include_once 'config.php';
include_once 'html.php';

htmlHead();
navBar($_SESSION);
imageUpload();


htmlEnd();
