<?php

session_start();
require_once 'functions.php';
include_once 'config.php';
include_once 'html.php';
include_once 'tables.php';


htmlHead();
navBar($_SESSION);
echo '<a href="image_cropper.php"><input class="btn btn-primary btn-lg" value="Új kép vágása"></a>';

listImageDirectory ();




htmlEnd();