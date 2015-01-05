<?php
$dir="/var/local/www/stuff.szallas.travelo.hu/frissites/";

if (chmod($dir, 0777)){
    echo "done";
}
else {
    echo "$dir <br>";
        $error = error_get_last();
        echo $error['message']."<br>";
        die("hiba, a könyvtár nem jött létre");
}

