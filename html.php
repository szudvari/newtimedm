<?php

function htmlHead() {
    echo <<<EOT
    <!DOCTYPE html>
<html lang="hu">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TimeDM hírlevél készítés">
    <meta name="author" content="WebAriel">

    <title>Tim-E-DM</title>
    <link href="css/timedm.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrapValidator.css" rel="stylesheet">
    <link href="css/bootstrap-dialog.css" rel="stylesheet">
    
    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-dialog.js" type="text/javascript"></script>
    <script src="js/bootstrapValidator.js" type="text/javascript"></script>
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script>
        $(document).ready(function() {
            $('form').bootstrapValidator();
        });
    </script>

</head>
<body>
EOT;
}

function navBar($user) {
    echo <<<EOT
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Navigáció</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Tim-E-DM</a>
            </div>
            <!-- Tovabbi menu-elemek -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="urlbuilder.php">URL builder</a>
                    </li>
EOT;
    if (isset($user['user']))
    {
        echo <<<EOT
                    <li>
                        <a href="#">Hírlevélkészítés</a>
                    </li>
                    <li>
                        <a href="newsletter_list.php">Hírlevelek szerkesztése</a>
                    </li>
                    <li>
                        <a href="useradmin.php">Felhasználók</a>
                    </li>
EOT;
    }
    echo <<<EOT
                    <li>
                        <a href="index.php?logout">Kijelentkezés</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Content -->
    <div class="container">
    <div class="row">
EOT;
}

function htmlEnd() {
    echo <<<EOT
    	</div>
		<!-- /.row -->
		</div>
    	<!-- /.container -->

   

</body>

</html>
EOT;
}

function mainScreen($user) {
    if (!isset($user['user']))
    {
        $user['user'] = $user['login'] = NULL;
    }
    echo <<<EOT
     <div class="row">
            <div class="col-lg-12 text-center">
                <h1>TimeDM - hírlevél készítés egyszerűen</h1>
                <p class="lead">A TimeDM program egy egyszerű hírlevél készítő alkalmazás, melynek segítségével előre meghatározott sablonú hírlevelek HTML és TXT verzióját hozhatja létre.</p>
            </div>
EOT;
    if (!isset($user['user']))
    {
        loginForm();
    }
    else
    {
        if ($user['login'] != 1)
        {
            echo "User vagy";
        }
        else
        {
            echo "Admin vagy";
        }
    }
    echo <<<EOT
        </div>
        <!-- /.row -->
EOT;
}

function loginForm() {
    echo <<<EOT
<form class="form-signin" role="form" action="auth.php" method="post" data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
    <h2 class="form-signin-heading">Bejelentkezés</h2>
    <div class="form-group">
        <input type="text" class="form-control" name="user" placeholder="Felhasználónév" data-bv-notempty="true"
               data-bv-notempty-message="A mező kitöltése kötelező!">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="pass" placeholder="Jelszó" data-bv-notempty="true"
               data-bv-notempty-message="A mező kitöltése kötelező!">
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Belépés</button>
</form>
EOT;
}

function notLoggedIn() {
    echo '<p id="notloggedin">A kért oldalmegtekintése bejelntkezéshez kötött.<br>'
    . 'Kérem, jelentkezzen be!<br>'
    . 'Amennyiben még nincs belépési azonosítója, keresse fel a rendszergazdát!</p>';
}

function urlBuilder($value) {
    if (($value['url'])==""){
        $value['url']=NULL;
    }
     if (($value['source'])==""){
        $value['url']=NULL;
    }
     if (($value['medium'])==""){
        $value['url']=NULL;
    }
     if (($value['campaign'])==""){
        $value['url']=NULL;
    }
    echo <<<EOT
<div class="container">
    <div class="row">
        <h3 class="primary"><i class="fa fa-list"></i> URL builder:</h3>
        <div class="col-md-6">
            <form role="form" method="post" action="urlbuilder.php" data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="url" class="form-control" id="url" name="url" placeholder="URL cím" value="{$value['url']}" data-bv-notempty="true"
                           data-bv-notempty-message="A mező kitöltése kötelező!"
                           data-bv-uri-message="A formátum nem megfelelő!">
                </div>
                <div class="form-group">
                    <label for="source">Source:</label>
                    <input type="text" class="form-control" id="source" name="source" placeholder="Source" value="{$value['source']}" data-bv-notempty="true"
                           data-bv-notempty-message="A mező kitöltése kötelező!">
                </div>
                <div class="form-group">
                    <label for="source">Medium:</label>
                    <input type="text" class="form-control" id="medium" name="medium" placeholder="Medium" value="{$value['medium']}" data-bv-notempty="true"
                           data-bv-notempty-message="A mező kitöltése kötelező!">
                </div>
                <div class="form-group">
                    <label for="source">Campaign:</label>
                    <input type="text" class="form-control" id="campaign" name="campaign" placeholder="Campaign" value="{$value['campaign']}" data-bv-notempty="true"
                           data-bv-notempty-message="A mező kitöltése kötelező!">
                </div>
                <button id="submit2" type="submit" class="btn btn-primary">Felépít</button>
            </form>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
EOT;
}

function builtURL ($link) {
        echo <<<EOT
<div class="container">
    <div class="row">
        <h3 class="primary"><i class="fa fa-list"></i> A felépített URL:</h3>
        <div class="col-md-6">
            $link
            <a href="$link" target="_blank"<button class="btn btn-default">Teszt</button></a>
            <button id="submit3" type="submit" class="btn btn-default" onClick="history.go(0)">Adatok törlése</button>
        </div>
    </div>
</div>
EOT;
}

function newUser () {
    echo<<<EOT
<!-- Button trigger modal -->
<div style="padding-top:25px">
    <button class="btn btn-primary btn-lg btnmargin" data-toggle="modal" data-target="#myModal">
        Új felhasználó felvétele
    </button>
</div>

<!-- Modal new user -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Bezár</span></button>
                <h4 class="modal-title" id="myModalLabel">Új felhasználó</h4>
            </div>
            <div class="modal-body">

                <form role="form" method="post" action="add.php" data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                    <div class="form-group">
                        <label for="user">Felhasználónév</label>
                        <input type="text" class="form-control" id="user" name="user" placeholder="Felhasználónév" data-bv-notempty="true"
                               data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>
                    <div class="form-group">
                        <label for="source">Teljes név:</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Teljes név">
                    </div>
                    <div class="form-group">
                        <label for="source">Jelszó:</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Jelszó" data-bv-identical="true"
                               data-bv-identical-field="pass2"
                               data-bv-identical-message="A két jelszó nem egyezik"/>
                    </div>
                    <div class="form-group">
                        <label for="source">Jelszó újra:</label>
                        <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Jelszó újra" data-bv-identical="true"
                               data-bv-identical-field="pass"
                               data-bv-identical-message="A két jelszó nem egyezik"/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Mégsem</button>
                        <button type="submit" class="btn btn-primary">Mentés</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
EOT;
}

function updatePassword($user) {
    echo <<<EOT

<div class="col-md-2" style='text-align:center;'><a data-toggle="modal" href="#updatePassword-{$user['id']}">Új jelszó</a></div>
<!-- -- Uj jelszo Modal -- -->
<div class="modal fade" id="updatePassword-{$user['id']}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-primary">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title">Felhasználó jelszavának módosítása</h4>
            </div>
            <form action="changepassword.php" method="post"
                  data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                <div class="modal-body">
                    <div class="form-group">
                        <p>Felhasználó: {$user['fullname']} - {$user['user']} </p>


                    </div>

                    <div class="form-group">
                        <label for="pass1">Új jelszó</label>
                        <input type="text" class="form-control" name="pass1" id="pass1" value="" data-bv-identical="true"
                               data-bv-identical-field="pass2"
                               data-bv-identical-message="A két jelszó nem egyezik"/>
                        <span class="help-block">Új jelszó</span>
                    </div>
                    <div class="form-group">
                        <label for="pass2">Jelszó megerősítése</label>
                        <input type="text" class="form-control" name="pass2" id="pass2" value="" data-bv-identical="true"
                               data-bv-identical-field="pass1"
                               data-bv-identical-message="A két jelszó nem egyezik"/>
                        <input type="hidden" class="form-control" name="id" id="id" value="{$user['id']}" />
                        <span class="help-block">Adja meg újra a jelszót. A megadott jelszavaknak egyezniük kell!</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Mégsem</button>
                    <button type="submit" class="btn btn-primary">Mentés</button>
                </div>
            </form>
        </div>
    </div>
</div>	
EOT;
}