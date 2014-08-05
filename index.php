<?php
session_start();
require_once 'config.php';
require_once 'html.php';
require_once 'db.php';

htmlHead();
navBar();
mainScreen($_SESSION);
htmlEnd();
