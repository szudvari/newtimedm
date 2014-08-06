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

function insertUserDb($userdata, $con) {
    $sql = "INSERT INTO  users (user ,pass ,fullname) values (\"{$userdata['user']}\", \"{$userdata['pass']}\", \"{$userdata['name']}\")";
    $res = mysql_query($sql, $con);
    if (!$res)
    {
        if (mysql_errno() == 1062)
        {
            echo "<div id=\"notloggedin\">Ez a felhasználónév már foglalt.<br>"
            . "Válassz másikat!</div>";
        }
        else
        {
            echo mysql_errno() . ": " . mysql_error();
            exit();
        }
        header("Refresh: 2; url={$_SERVER['HTTP_REFERER']}");
        exit();
    }
}

function authUserDb($userdata, $con) {
    $sql = "select user from users where user=\"{$userdata['user']}\" 
        and pass=\"{$userdata['pass']}\" and active=1";
    $res = mysql_query($sql, $con);
    if (!$res)
    {
        echo "Hiba a lekérdezés során!";
        exit();
    }

    if (mysql_num_rows($res) == 0)
    {
        return false;
    }
    else
    {
        return true;
    }
}

function getUserRole($userdata) {
    $sql = "select role from users where user=\"{$userdata['user']}\";";
    $res = mysql_query($sql);
    if (!$res)
    {
        echo "A ($sql) kérdés futtatása sikertelen: " . mysql_error();
        exit;
    }

    if (mysql_num_rows($res) == 0)
    {
        echo "Nincs ilyen felhasználó";
        exit;
    }
    while ($row = mysql_fetch_assoc($res)) {
        $role = $row["role"];
    }
    return $role;
}

function getUserId($userdata) {
    $sql = "select id from users where user=\"{$userdata['user']}\";";
    $res = mysql_query($sql);
    if (!$res)
    {
        echo "A ($sql) kérdés futtatása sikertelen: " . mysql_error();
        exit;
    }

    if (mysql_num_rows($res) == 0)
    {
        echo "Nincs ilyen felhasználó";
        exit;
    }
    while ($row = mysql_fetch_assoc($res)) {
        $id = $row["id"];
    }
    return $id;
}

function changeAdminSatus($id, $status, $con) {
    switch ($status) {
        case "0":
            $sql = "UPDATE  `users` SET  `role` =  '1' WHERE  `users`.`id` =$id;";
            break;
        case "1":
            $sql = "UPDATE  `users` SET  `role` =  '0' WHERE  `users`.`id` =$id;";
            break;
    }
    $res = mysql_query($sql, $con);
    if (!$res)
    {
        die("Hiba:" . mysql_errno() . " - " . mysql_error());
    }
 }
 
 function changeUserPassword($id, $password, $con) {
   $sql = "UPDATE  `users` SET  `pass` =  '$password' WHERE  `users`.`id` =$id;";
   $res = mysql_query($sql, $con);
    if (!$res)
    {
        die("Hiba:" . mysql_errno() . " - " . mysql_error());
    }
    return $res;
}

function changeUserSatus($id, $status, $con) {
    switch ($status) {
        case "0":
            $sql = "UPDATE  `users` SET  `active` =  '1' WHERE  `users`.`id` =$id;";
            break;
        case "1":
            $sql = "UPDATE  `users` SET  `active` =  '0' WHERE  `users`.`id` =$id;";
            break;
    }
    $res = mysql_query($sql, $con);
    if (!$res)
    {
        die("Hiba:" . mysql_errno() . " - " . mysql_error());
    }
}

function getANewsletter($table, $id) {
    mysql_query("set names 'utf8'");
    mysql_query("set character set 'utf8'");
    $sql = "SELECT * from $table where hirlev_id=$id;";
    $result = mysql_query($sql);
    $array = array();
    while ($row = mysql_fetch_assoc($result)) {
        $array = $row;
    }
//print_r($array);

    return $array;
}