<?php

session_start();
require_once 'functions.php';
include_once 'config.php';
include_once 'db.php';
include_once 'html.php';
include_once 'tables.php';
htmlHead();
navBar($_SESSION);
if (!isset($_SESSION['login']))
{
    notLoggedIn();
}
else
{
    if ($_SESSION['login'] != 1)
    {
        notLoggedIn();
    }
    else
    {
        $con = connectDb();
        allUser();
        closeDb($con);
        echo<<<EOT
        <b><u>TODO: Kicserélni MODAL-ra!</b></u>
<form action=adduser.php>
<input id="submit3" type="submit" value="Új felhasználó felvétele">
</form>
EOT;
        if ($_SESSION['user'] == "admin")
            echo '<p><a href="pswbackup.php">Adatbázis-szintű jelszó generálás</a></p>';
    }
}

htmlEnd();
?>
