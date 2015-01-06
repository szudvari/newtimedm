<?php

include_once '/var/local/www/szallas.travelo.hu/public/inc/intravena_true.php';
include_once 'html.php';
include_once 'functions.php';

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
        if ($count % 2 == 0) {
            echo '<div class="row news-ready-tr">';
        } else {
            echo '<div class="row news-ready-tr-sec">';
        }
        echo '<div class="col-md-2">' . $row['fullname'] . '</div>';
        echo '<div class="col-md-2">' . $row['user'] . '</div>';
        echo '<div class="col-md-1">' . $row['status'] . '</div>';
        echo '<div class="col-md-1">' . $row['admin'] . '</div>';


        if ($row['active'] == 1) {
            echo '<div class="col-md-2"><a href="update_ustatus.php?uid=' . $row['id'] . '&status=' . $row['active'] . '">User letiltása</a></div>';
        } else {
            echo '<div class="col-md-2"><a href="update_ustatus.php?uid=' . $row['id'] . '&status=' . $row['active'] . '">User aktiválása</a></div>';
        }
        if ($row['role'] == 1) {
            echo '<div class="col-md-2"><a href="update_astatus.php?uid=' . $row['id'] . '&status=' . $row['role'] . '">Admin jog megvonása</a></div>';
        } else {
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
            case 4:
                $table[$i]['hirlevel_nev'] = "Intravéna hírlevél";
                break;
            case 5:
                $table[$i]['hirlevel_nev'] = "Travelo tematikus hírlevél";
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
        if ($count % 2 == 0) {
            echo '<div class="row news-ready-tr">';
        } else {
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
            case 4:
                $link = "intravena_preview.php";
                break;
            case 5:
                $link = "thematic_nl_db.php";
                break;
        }

        echo '<div class="col-md-1"><a href="' . $link . '?hirlevel_id=' . $row['id'] . '" target="_blank">Megnéz</a></div>';
        echo '<div class="col-md-1"><a href="newsletter_edit.php?hirlevel_id=' . $row['id'] . '&hirlevel_type=' . $row['hirlevel_tipus'] . '" target="_blank">Szerkeszt</a></div>';
        switch ($row['hirlevel_tipus']) {
            case 4:
                echo '<div class="col-md-1 tool-tip" title="Hírlevelek készítése"><a href="intravena_generate.php?hirlevel_id=' . $row['id'] . '">Hírlevelek készítése</a></div>';
                break;
            default :
                echo '<div class="col-md-1 tool-tip" title="HTML kód mentése"><a href=' . $link . '?hirlevel_id=' . $row['id'] . '&save=1" target="_blank">HTML kód mentése</a></div>';
                break;
        }
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
            case 5:
                $link = "thematic_nl_db_txt.php";
                break;
        }
        switch ($row['hirlevel_tipus']) {
            case 4:
                echo '<div class="col-md-1 tool-tip" title="Hírlevelek letöltése"><a href="intravena_files.php?hirlevel_id=' . $row['id'] . '" target="_blank">Elkészült hírlevelek</a></div>';
                break;
            default :
                echo '<div class="col-md-1"><a href="' . $link . '?hirlevel_id=' . $row['id'] . '" target="_blank">TXT változat mentése</a></div>';
                break;
        }
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
            case 4:
                $table[$i]['hirlevel_nev'] = "Intravéna hírlevél";
                break;
            case 5:
                $table[$i]['hirlevel_nev'] = "Travelo tematikus hírlevél";
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
        if ($count % 2 == 0) {
            echo '<div class="row news-ready-tr">';
        } else {
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
            case 4:
                $link = "intravena_preview.php";
                break;
            case 5:
                $link = "thematic_nl_db.php";
                break;
        }
        echo '<div class="col-md-1"><a href="' . $link . '?hirlevel_id=' . $row['id'] . '" target="blank">Megnéz</a></div>';
        echo '<div class="col-md-1"><a href="newsletter_edit.php?hirlevel_id=' . $row['id'] . '&hirlevel_type=' . $row['hirlevel_tipus'] . '" target="_blank">Szerkeszt</a></div>';
        switch ($row['hirlevel_tipus']) {
            case 4:
                echo '<div class="col-md-1 tool-tip" title="Hírlevelek készítése"><a href="intravena_generate.php?hirlevel_id=' . $row['id'] . '">Hírlevelek készítése</a></div>';
                break;
            default :
                echo '<div class="col-md-1 tool-tip" title="HTML kód mentése"><a href=' . $link . '?hirlevel_id=' . $row['id'] . '&save=1" target="_blank">HTML kód mentése</a></div>';
                break;
        }
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
            case 5:
                $link = "thematic_nl_db_txt.php";
                break;
        }
        switch ($row['hirlevel_tipus']) {
            case 4:
                echo '<div class="col-md-1 tool-tip" title="Hírlevelek letöltése"><a href="intravena_files.php?hirlevel_id=' . $row['id'] . '" target="_blank">Elkészült hírlevelek</a></div>';
                break;
            default :
                echo '<div class="col-md-1"><a href="' . $link . '?hirlevel_id=' . $row['id'] . '" target="_blank">TXT változat mentése</a></div>';
                break;
        }
        echo '</div>';
        $count++;
    }
    echo '</div>';
    echo '</div>';
}

function listFiles($dir, $folder_name) {
    global $int_true;
    sort($int_true);
    $files = filesInDirectory($dir);
    if (count($files) == 0) {
        emptyIntravenaDir();
    } else {
        $date = substr($folder_name, 0, 4) . '-' . substr($folder_name, 4, 2) . '-' . substr($folder_name, 6, 2);
        echo <<<EOT
   <div class="container">
   <div class="row">
   <h3 class="page-header"><i class="fa fa-envelope"></i> Elkészült intravéna hírlevelek - $date </h3> 
   <div class="row news-ready-th">
   <div class="col-md-4"> Whitelabel </div> 
   <div class="col-md-4"> PDF verzió </div> 
   <div class="col-md-4"> HTML verzió </div> 
   </div>
EOT;
        $count = 0;
        foreach (array_combine($int_true, glob($dir . '/*.pdf')) as $site => $file) {
            $file_name = substr(substr($file, strrpos($file, '/') + 1), 0, -4);
            if ($count % 2 == 0) {
                echo '<div class="row news-ready-tr">';
            } else {
                echo '<div class="row news-ready-tr-sec">';
            }
            echo '<div class="col-md-4"><b>' . ucfirst($site) . '</b></div>';
            echo '<div class="col-md-4 tool-tip" title="http://stuff.szallas.travelo.hu/hirlevel/intravena/' . $folder_name . '/save/' . $file_name . '.pdf"><a href="http://stuff.szallas.travelo.hu/hirlevel/intravena/' . $folder_name . '/save/' . $file_name . '.pdf" target="_blank">PDF verzió</a></div>';
            echo '<div class="col-md-4 tool-tip" title="http://stuff.szallas.travelo.hu/hirlevel/intravena/' . $folder_name . '/save/' . $file_name . '.html"><a href="http://stuff.szallas.travelo.hu/hirlevel/intravena/' . $folder_name . '/save/' . $file_name . '.html" target="_blank">HTML verzió</a></div>';
            echo '</div>';
            $count++;
        }


        echo '</div>';
        echo '</div>';
    }
}

function listImageDirectory() {
    $dir = scandir("/var/local/www/stuff.szallas.travelo.hu/frissites/");
    unset($dir[0], $dir[1]);
    asort($dir);
    $pages = array_chunk($dir, 10);
    echo <<<EOT
   <div class="container">
   <div class="row">
   <h3 class="page-header"><i class="fa fa-file"></i> Képkönyvtárak </h3> 
   <div class="row news-ready-th">
   <div class="col-md-2"> Thumb </div> 
   <div class="col-md-2"> Könyvtár </div> 
   <div class="col-md-8">
       Oldalak: 
EOT;
    if (isset($_GET['showpage'])) {
        $pgkey = (int) $_GET['showpage'] - 1;
    } else {
        $pgkey = 0;
    }
    for ($i = 1; $i < count($pages) + 1; $i++) {
        if ($i === ($pgkey + 1)) {
            echo "<span style='color:#777;'>$i&nbsp;<span>";
        } else {
            echo "<a style='color:#fff; font-weight:bold;' href='list_images.php?showpage=$i'>$i&nbsp;</a>";
        }
    }
    echo "</div>";
    echo "</div>";
    //$pages[$pgkey];

    $count = 0;
    foreach ($pages[$pgkey] as $file) {
        if ($count % 2 == 0) {
            echo '<div class="row news-ready-tr">';
        } else {
            echo '<div class="row news-ready-tr-sec">';
        }
        //echo $file . '<br />';
        echo '<div class="col-md-2"><a href="imagesindir.php?dir=' . $file . '"><img src="http://stuff.szallas.travelo.hu/frissites/'.$file.'/'.$file.'-74x74.jpg"></a></div>';
        echo '<div class="col-md-10"><a href="imagesindir.php?dir=' . $file . '">' . $file . '</a></div>';
        echo '</div>';
        $count++;
    }
    echo <<<EOT
    <div class="row news-ready-th">
    <div class="col-md-2">  </div> 
    <div class="col-md-2">  </div> 
    <div class="col-md-8">
       Oldalak: 
EOT;
    for ($i = 1; $i < count($pages) + 1; $i++) {
        if ($i === ($pgkey + 1)) {
            echo "<span style='color:#777;'>$i&nbsp;<span>";
        } else {
            echo "<a style='color:#fff; font-weight:bold;' href='list_images.php?showpage=$i'>$i&nbsp;</a>";
        }
    }
    echo "</div>";
    echo "</div>";
}

function listPictures($dir, $name) {
    $files = filesInDirectory($dir);
    if (count($files) == 0) {
        emptyPicDir();
    } else {
        echo <<<EOT
   <div class="container">
   <div class="row">
   <h3 class="page-header"><i class="fa fa-file-image-o"></i> $name </h3> 
   <div class="row news-ready-th">
   <div class="col-md-12"> Képek </div> 
   </div>
   <div class="row news-ready-tr">
        <div class="col-md-12"><a href="list_images.php">Vissza <i class="fa fa-level-up"></i></a></div>
   </div>
   <div class="row news-ready-tr-sec">            
       <div class="col-md-12"><a style="color:#d9534f;" href="zip_files.php?dir=$name"> Összes kép letöltése ZIP-ben </a></div>
   </div>
EOT;
        $count = 0;
        foreach ($files as $row) {
            $filename = linkReplace($dir . "/" . $row);

            if ($count % 2 == 0) {
                echo '<div class="row news-ready-tr">';
            } else {
                echo '<div class="row news-ready-tr-sec">';
            }
            echo '<div class="col-md-12"><a href="' . $filename . '">' . $row . '</a></div>';
            echo '</div>';
            $count++;
        }
        if ($count % 2 == 0) {
            echo '<div class="row news-ready-tr">';
        } else {
            echo '<div class="row news-ready-tr-sec">';
        }
    }
}
