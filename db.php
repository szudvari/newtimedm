<?php

//erre gondoltal?
function connectDb() {
    global $db;
    $con = mysql_connect($db['host'], $db['user'], $db['pass']);

    if (!$con) {
        die('Nem tudok kapcsolódni: ' . mysql_error());
    }
    mysql_select_db($db['name'], $con);
    mysql_set_charset($db['charset'], $con);
    if (!mysql_select_db($db['name'], $con)) {
        echo "Az adatbázis nem választható: " . mysql_error();
        exit;
    }
    return $con;
}

function connectDbIso() {
    global $db;
    $con = mysql_connect($db['host'], $db['user'], $db['pass']);

    if (!$con) {
        die('Nem tudok kapcsolódni: ' . mysql_error());
    }
    mysql_select_db($db['name'], $con);
    mysql_set_charset("latin2", $con);
    if (!mysql_select_db($db['name'], $con)) {
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
    if (!$res) {
        if (mysql_errno() == 1062) {
            echo "<div id=\"notloggedin\">Ez a felhasználónév már foglalt.<br>"
            . "Válassz másikat!</div>";
        } else {
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
    if (!$res) {
        echo "Hiba a lekérdezés során!";
        exit();
    }

    if (mysql_num_rows($res) == 0) {
        return false;
    } else {
        return true;
    }
}

function getUserRole($userdata) {
    $sql = "select role from users where user=\"{$userdata['user']}\";";
    $res = mysql_query($sql);
    if (!$res) {
        echo "A ($sql) kérdés futtatása sikertelen: " . mysql_error();
        exit;
    }

    if (mysql_num_rows($res) == 0) {
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
    if (!$res) {
        echo "A ($sql) kérdés futtatása sikertelen: " . mysql_error();
        exit;
    }

    if (mysql_num_rows($res) == 0) {
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
    if (!$res) {
        die("Hiba:" . mysql_errno() . " - " . mysql_error());
    }
}

function changeUserPassword($id, $password, $con) {
    $sql = "UPDATE  `users` SET  `pass` =  '$password' WHERE  `users`.`id` =$id;";
    $res = mysql_query($sql, $con);
    if (!$res) {
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
    if (!$res) {
        die("Hiba:" . mysql_errno() . " - " . mysql_error());
    }
}

function getANewsletter($table, $id) {
    mysql_query("set names 'utf8'");
    mysql_query("set character set 'utf8'");
    $sql = "SELECT * from $table where hirlev_id=$id;";
    $result = mysql_query($sql);
    if (!$result) {
        echo mysql_errno() . "(getNewsletter): " . mysql_error();
        exit;
    }
    if (mysql_num_rows($result) == 0) {
        die("Hiba, az adatbázis egyetlen adatot sem tartalmaz.");
    }
    $array = array();
    while ($row = mysql_fetch_assoc($result)) {
        $array = $row;
    }
//print_r($array);

    return $array;
}

function getANewsletterIso($table, $id) {
    mysql_query("set names 'latin2'");
    mysql_query("set character set 'latin2'");
    $sql = "SELECT * from $table where hirlev_id=$id;";
    $result = mysql_query($sql);
    $array = array();
    while ($row = mysql_fetch_assoc($result)) {
        $array = $row;
    }
//print_r($array);

    return $array;
}

function insertMainTable($array, $title, $type, $user, $con) {
    $sql = "INSERT INTO  hirlevel (cim ,datum ,hirlevel_tipus, created_on, created_by)"
            . " values (\"$title\", \"{$array['sendingdate']}\", \"$type\", NOW(), \"$user\");";
    mysql_query($sql, $con);
    $result = mysql_insert_id();
    return $result;
}

function insertHirlevTable($table, $vars, $con) {
    foreach ($vars as $key => $value) {
        $insert_list_variables[] = $key;
        if (is_numeric($value))
            $insert_list_values[] = "$value";
        else
            $insert_list_values[] = "'" . $value . "'";
    }

    $insert_list_variables = implode(", ", $insert_list_variables);
    $insert_list_values = implode(", ", $insert_list_values);
    $sql = "
			INSERT INTO
				" . $table . " (" . $insert_list_variables . ")
			VALUES
				(" . $insert_list_values . ")
		";
    //echo $sql;
    if (!mysql_query($sql, $con)) {
        echo mysql_errno() . ":" . mysql_error();
    }
}

function updateHirlevTable($table, $vars, $id, $con) {
    foreach ($vars as $key => $value) {
        if (is_numeric($value))
            $update_list[] = "$key = $value";
        else
            $update_list[] = $key . " = '" . $value . "'";
    }
    $update_list = implode(", ", $update_list);

    $sql = "UPDATE " . $table . " SET " . $update_list . " WHERE hirlev_id = " . $id;
    mysql_query($sql, $con);
    if (!mysql_query($sql, $con)) {
        die('hiba a frissítés során' . mysql_errno() . ':' . mysql_error());
    }
}

function getANewsletterType($id) {
    mysql_query("set names 'utf8'");
    mysql_query("set character set 'utf8'");
    $sql = "SELECT hirlevel_tipus from hirlevel where id=$id;";
    $result = mysql_query($sql);
    if (!$result) {
        echo mysql_errno() . "(getNewsletter): " . mysql_error();
        exit;
    }
    if (mysql_num_rows($result) == 0) {
        die("Hiba, az adatbázis egyetlen adatot sem tartalmaz.");
    }
    while ($row = mysql_fetch_assoc($result)) {
        $table = $row['hirlevel_tipus'];
    }
    return $table;
}
