<?php

function connectDb() {
    global $db;
    $con = mysql_connect($db['host'], $db['user'], $db['pass']);

    if (!$con)
    {
        die('Nem tudok kapcsolódni: ' . mysql_error());
    }
    mysql_select_db($db['name'], $con);
    mysql_set_charset($db['charset'], $con);
    if (!mysql_select_db($db['name'], $con))
    {
        echo "Az adatbázis nem választható: " . mysql_error();
        exit;
    }
    return $con;
}

function connectDbIso() {
    global $db;
    $con = mysql_connect($db['host'], $db['user'], $db['pass']);

    if (!$con)
    {
        die('Nem tudok kapcsolódni: ' . mysql_error());
    }
    mysql_select_db($db['name'], $con);
    mysql_set_charset("latin2", $con);
    if (!mysql_select_db($db['name'], $con))
    {
        echo "Az adatbázis nem választható: " . mysql_error();
        exit;
    }
    return $con;
}

function closeDb($con) {
    mysql_close($con);
}

