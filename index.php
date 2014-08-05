<?php
session_start();
require_once 'config.php';
require_once 'html.php';
require_once 'db.php';

htmlHead();
navBar($_SESSION);
mainScreen($_SESSION);
htmlEnd();
