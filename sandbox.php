<?php
include '/var/local/www/szallas.travelo.hu/public/inc/intravena_true.php';


//print_r($int_true);
sort ($int_true);
foreach ($int_true as $oldal) {
    echo "$oldal<br>";
}