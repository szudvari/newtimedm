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

function newsletters() {
    mysql_query("set names 'utf8'");
    mysql_query("set character set 'utf8'");
    $sql = "SELECT hirlevel.id, hirlevel.cim, hirlevel.datum, hirlevel.hirlevel_tipus, "
            . "hirlevel.created_on, users.user "
            . "from hirlevel "
            . "left join users on hirlevel.created_by=users.id "
            . "order by hirlevel.id desc";
    $result = mysql_query($sql);
    $table = array();
    while ($row = mysql_fetch_assoc($result)) {
        $table[] = $row;
    }
    //Kicseréli a hírlvél típusokat string-re
    for ($i = 0; ($i < mysql_num_rows($result)); $i++){
        switch ($table[$i]['hirlevel_tipus']){
        case 1:
                $table[$i]['hirlevel_nev'] = "Travelo hírlevél";
                break;
            case 2:
                $table[$i]['hirlevel_nev'] = "Life hírlevél";
                break;
            case 3:
                $table[$i]['hirlevel_nev'] = "Life egyképes hírlevél";
                break;    
        }
    }
    echo <<<EOT
   <div class="container">
   <h3 class="primary"><i class="fa fa-list"></i> Elkészített hírlevelek:</h3>
	
		<div class="row news-ready-th">
		  <div class="col-md-1">ID</div>
		  <div class="col-md-2">Cím</div>
		  <div class="col-md-1">Kiküldés dátuma</div>
		  <div class="col-md-1">Hírlevél típusa</div>
		  <div class="col-md-2">Készítés ideje</div>
		  <div class="col-md-1">Létrehozta</div>
		  <div class="col-md-1">Megnéz</div>
		  <div class="col-md-1">Szerkeszt</div>
		  <div class="col-md-1 tool-tip" title="HTML kód mentése">HTML mentés</div>
		  <div class="col-md-1">TXT mentés</div>
		</div>   
EOT;
    $count = 0;
    foreach ($table as $row) {
        if ($count % 2 == 0)
        {
            echo '<div class="row news-ready-tr">';
        }
        else
        {
            echo '<div class="row news-ready-tr-sec">';
        }
        echo '<div class="col-md-1">'.$row['id'].'</div>';
        echo '<div class="col-md-2">'.$row['cim'].'</div>';
        echo '<div class="col-md-1">'.$row['datum'].'</div>';
        echo '<div class="col-md-1">'.$row['hirlevel_nev'].'</div>';
        echo '<div class="col-md-2">'.$row['created_on'].'</div>';
        echo '<div class="col-md-1">'.$row['user'].'</div>';
        

        switch ($row['hirlevel_tipus']) {
            case 1:
                $link = "travelo_nl_db.php";
                break;
            case 2:
                $link = "life_nl_db.php";
                break;
            case 3:
                $link = "life_op_db.php";
                break;
        }

        echo '<div class="col-md-1"><a href="'.$link.'?hirlevel_id='.$row['id'].'" target="blank">Megnéz</a></div>';
        echo '<div class="col-md-1"><a href="newsletter_edit.php?hirlevel_id='.$row['id'].'&hirlevel_type='.$row['hirlevel_tipus'].'" target="blank">Szerkeszt</a></div>';
        echo '<div class="col-md-1 tool-tip" title="HTML kód mentése"><a href='.$link.'?hirlevel_id='.$row['id'].'&save=1" target="blank">HTML kód mentése</a></div>';
        switch ($row['hirlevel_tipus']) {
            case 1:
                $link = "travelo_nl_db_txt.php";
                break;
            case 2:
                $link = "life_nl_db_txt.php";
                break;
            case 3:
                $link = "life_op_db_txt.php";
                break;
        }
        echo '<div class="col-md-1"><a href="'.$link.'?hirlevel_id='.$row['id'].'" target="blank">TXT változat mentése</a></div>';
        echo '</div>';
        $count++;
    }
    echo '</div>';
}
