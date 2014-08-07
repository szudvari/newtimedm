<?php
session_start();
require_once 'functions.php';
include_once 'config.php';
include_once 'db.php';
include_once 'html.php';
include_once 'tables.php';
include_once 'test.php';
htmlHead();
navBar($_SESSION);

egy();
ketto();
harom();
negy();
ot();
hat();
het();
nyolc();
kilenc();
tiz();

htmlEnd();

