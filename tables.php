<?php

function allUser() {
    mysql_query("set names 'utf8'");
    mysql_query("set character set 'utf8'");
    $sql = "SELECT  `id` ,  `fullname` ,  `user` ,  `active` , `role` FROM  `users` where `id` > 1";
    $result = mysql_query($sql);
    $table = array();
    while ($row = mysql_fetch_assoc($result)) {
        $table[] = $row;
    }
    for ($i = 0; ($i < mysql_num_rows($result)); $i++) {
        switch ($table[$i]['active']) {
            case 0:
                $table[$i]['status'] = "Nem";
                break;
            case 1:
                $table[$i]['status'] = "Igen";
                break;
        }
        switch ($table[$i]['role']) {
            case 0:
                $table[$i]['admin'] = "Nem";
                break;
            case 1:
                $table[$i]['admin'] = "Igen";
                break;
        }
    }
    echo <<<EOT
   <div class="container">
   <h3 class="primary"><i class="fa fa-list"></i> Felhasználók:</h3>
   <div class="row news-ready-th">
   <div class="col-md-2">Teljes név</div>
   <div class="col-md-2">Login name</div>
   <div class="col-md-1">Aktív</div>
   <div class="col-md-1">Admin</div>
   <div class="col-md-2">Státusz módosítása</div>
   <div class="col-md-2">Admin rang kiosztása</div>
   <div class="col-md-2">Jelszó módosítás</div>
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
        echo '<div class="col-md-2">' . $row['fullname'] . '</div>';
        echo '<div class="col-md-2">' . $row['user'] . '</div>';
        echo '<div class="col-md-1">' . $row['status'] . '</div>';
        echo '<div class="col-md-1">' . $row['admin'] . '</div>';


        if ($row['active'] == 1)
        {
            echo '<div class="col-md-2"><a href="update_ustatus.php?uid=' . $row['id'] . '&status=' . $row['active'] . '">User letiltása</a></div>';
        }
        else
        {
            echo '<div class="col-md-2"><a href="update_ustatus.php?uid=' . $row['id'] . '&status=' . $row['active'] . '">User aktiválása</a></div>';
        }
        if ($row['role'] == 1)
        {
            echo '<div class="col-md-2"><a href="update_astatus.php?uid=' . $row['id'] . '&status=' . $row['role'] . '">Admin jog megvonása</a></div>';
        }
        else
        {
            echo '<div class="col-md-2"><a href="update_astatus.php?uid=' . $row['id'] . '&status=' . $row['role'] . '">Admin jog kiosztása</a></div>';
        }
        updatePassword($row);
        echo '</div>';
        $count++;
    }
    echo '</div>';
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
    for ($i = 0; ($i < mysql_num_rows($result)); $i++) {
        switch ($table[$i]['hirlevel_tipus']) {
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
        echo '<div class="col-md-1">' . $row['id'] . '</div>';
        echo '<div class="col-md-2">' . $row['cim'] . '</div>';
        echo '<div class="col-md-1">' . $row['datum'] . '</div>';
        echo '<div class="col-md-1">' . $row['hirlevel_nev'] . '</div>';
        echo '<div class="col-md-2">' . $row['created_on'] . '</div>';
        echo '<div class="col-md-1">' . $row['user'] . '</div>';


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

        echo '<div class="col-md-1"><a href="' . $link . '?hirlevel_id=' . $row['id'] . '" target="blank">Megnéz</a></div>';
        echo '<div class="col-md-1"><a href="newsletter_edit.php?hirlevel_id=' . $row['id'] . '&hirlevel_type=' . $row['hirlevel_tipus'] . '" target="blank">Szerkeszt</a></div>';
        echo '<div class="col-md-1 tool-tip" title="HTML kód mentése"><a href=' . $link . '?hirlevel_id=' . $row['id'] . '&save=1" target="blank">HTML kód mentése</a></div>';
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
        echo '<div class="col-md-1"><a href="' . $link . '?hirlevel_id=' . $row['id'] . '" target="blank">TXT változat mentése</a></div>';
        echo '</div>';
        $count++;
    }
    echo '</div>';
}

function getSuccesNewsletter($id) {
    mysql_query("set names 'utf8'");
    mysql_query("set character set 'utf8'");
    $sql = "SELECT hirlevel.id, hirlevel.cim, hirlevel.datum, hirlevel.hirlevel_tipus, "
            . "hirlevel.created_on, users.user "
            . "from hirlevel "
            . "left join users on hirlevel.created_by=users.id "
            . "where hirlevel.id=$id;";
    $result = mysql_query($sql);
    $table = array();
    while ($row = mysql_fetch_assoc($result)) {
        $table[] = $row;
    }
    //Kicseréli a hírlvél típusokat string-re
    for ($i = 0; ($i < mysql_num_rows($result)); $i++) {
        switch ($table[$i]['hirlevel_tipus']) {
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
    <div class="row">
            <h3 class="page-header"><i class="fa fa-envelope"></i> Hírlevele elkészült</h3>
    
    <div class="row news-ready-th">
   <div class="col-md-1"> id </div>
   <div class="col-md-2"> Cím </div>
   <div class="col-md-1"> Kiküldés dátuma </div>
   <div class="col-md-1"> Hírlevél típusa </div>
   <div class="col-md-2"> Készítés ideje </div>
   <div class="col-md-1"> Létrehozta </div>
   <div class="col-md-1"> Megnéz </div>
   <div class="col-md-1"> Szerkeszt </div>
   <div class="col-md-1" tool-tip" title="HTML kód mentése"> HTML mentése </div>
   <div class="col-md-1"> TXT mentése </div>
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
        echo '<div class="col-md-1">' . $row['id'] . '</div>';
        echo '<div class="col-md-2">' . $row['cim'] . '</div>';
        echo '<div class="col-md-1">' . $row['datum'] . '</div>';
        echo '<div class="col-md-1">' . $row['hirlevel_nev'] . '</div>';
        echo '<div class="col-md-2">' . $row['created_on'] . '</div>';
        echo '<div class="col-md-1">' . $row['user'] . '</div>';


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
         echo '<div class="col-md-1"><a href="' . $link . '?hirlevel_id=' . $row['id'] . '" target="blank">Megnéz</a></div>';
        echo '<div class="col-md-1"><a href="newsletter_edit.php?hirlevel_id=' . $row['id'] . '&hirlevel_type=' . $row['hirlevel_tipus'] . '" target="blank">Szerkeszt</a></div>';
        echo '<div class="col-md-1 tool-tip" title="HTML kód mentése"><a href=' . $link . '?hirlevel_id=' . $row['id'] . '&save=1" target="blank">HTML mentése</a></div>';
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
        echo '<div class="col-md-1"><a href="' . $link . '?hirlevel_id=' . $row['id'] . '" target="blank">TXT mentése</a></div>';
        echo '</div>';
        $count++;
    }
    echo '</div>';
    echo '</div>';
}