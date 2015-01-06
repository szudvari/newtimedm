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
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/tdm-favicon.png" />
    
    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-dialog.js" type="text/javascript"></script>
    <script src="js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="js/timedm.js" type="text/javascript"></script>
    
    
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
    if (isset($user['user'])){
        $link="newsletter_list.php";
    }
    else {
        $link="index.php";
    }
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
                <a class="navbar-brand" href="$link">Tim-E-DM</a>
            </div>
            <!-- Tovabbi menu-elemek -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="urlbuilder.php">URL builder</a>
                    </li>       
                    <li>
                        <a href="list_images.php">Képek méretre vágása</a>
                    </li>
            
EOT;
    if (isset($user['user']))
    {
        echo <<<EOT
                    <li>
                        <a href="newnewsletter.php">Hírlevélkészítés</a>
                    </li>
                    <li>
                        <a href="newsletter_list.php">Hírlevelek szerkesztése</a>
                    </li>
                    <li>
                        <a href="useradmin.php">Felhasználók</a>
                    </li>
                    <li>
                        <a href="index.php?logout">Kijelentkezés</a>
                    </li>
EOT;
    }
    echo <<<EOT
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
    global $website;
    echo <<<EOT
   </div>
   <!-- /.row -->    
   
   <!-- /.container -->
 <div class="footer">
				<p class="textCenter">
                                        Powered by <a href="http://webariel.hu?utm_source=travelo&utm_medium=footer&utm_campaign=copyright" target="_blank">WebAriel <img src="./images/wa_logo.png"></a> - &copy; 2014 <a href="http://webariel.hu?utm_source=travelo&utm_medium=footer&utm_campaign=copyright2" target="_blank">Tim-E-DM Version {$website['version']}</a></p>
			</div>
   </div>
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
    <h2 class="form-signin-heading" align="center">Bejelentkezés</h2>
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
    echo <<<EOT
		<div class="container">

					<div class="row">
				        <div class="col-md-12" style="margin-top:100px;">

				            <div class="row">	
				                <div class="col-md-2"></div>

				                <div class="col-md-8">
				                    <div class="panel panel-red2">
				                        <div class="panel-heading">
				                            <div class="row">
				                                <div class="col-xs-3">
				                                    <i class="fa fa-warning fa-5x"></i>
				                                </div>
				                                <div class="col-xs-9 text-left">
				                                    <div class="huge">Figyelem!</div>
				                                    <div>A kért oldal megtekintése bejelentkezéshez kötött. Kérem, jelentkezzen be! Amennyiben még nincs belépési azonosítója, keresse fel a rendszergazdát!</div>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="panel-footer" style="height: 70px;">

				                            <div class="col-md-2"></div>
				                        </div>
				                    </div>
				                    <div class="clearfix"></div>
				                </div>

				            </div>
				        </div>

						</div><!-- /.row -->
		 			</div> <!-- /.container -->
EOT;
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
			  <div class="row" style="margin-top:50px">
		      <form role="form" method="post" action="urlbuilder.php" data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
		                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
		                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">         
		        <div class="col-md-2"></div>
		        <div class="col-md-8">
		        	<div class="panel panel-yellow">
			        	<div class="panel-heading">
				        	<div class="row">
					        	<div class="col-xs-9 text-left">
		                           <div class="huge">URL builder</div>
		                         </div>
				        	</div><!-- /.row -->
			        	</div><!-- /.panel-heading -->
			        	<div class="panel-footer">
		                    <div class="form-group">
		                    <label for="url">URL</label>
		                    <input type="url" class="form-control" id="url" name="url" placeholder="URL cím" value="{$value['url']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
		                    </div> <!-- /.form-group -->

		                    <div class="form-group">
		                    <label for="source">Source:</label>
		                    <input type="text" class="form-control" id="source" name="source" placeholder="Source"  value="{$value['source']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div><!-- /.form-group -->

		                    <div class="form-group">
		                    <label for="source">Medium:</label>
		                    <input type="text" class="form-control" id="medium" name="medium" placeholder="Medium" value="{$value['medium']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div><!-- /.form-group -->

		                    <div class="form-group">
		                    <label for="source">Campaign:</label>
		                    <input type="text" class="form-control" id="campaign" name="campaign" placeholder="Campaign" value="{$value['campaign']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div><!-- /.form-group -->

		                    <div class="clearfix"></div>
			        	</div><!-- /.panel-footer -->
		        	</div><!-- /.panel panel-yellow -->
		        </div>
		        <div class="col-md2"></div>

		        <!--Submit-->
		                <div class="row">
		                    <div class="col-md-12">
		                        <div class="col-md-2"></div>

		                        <div class="col-md-8" id="submit">
		                            <input class="btn btn-warning btn-lg" id="submit2" type="submit" value="Felépít">
		                        </div>
		                        <div class="col-md-2"></div>      
		                    </div>
		                </div>
		      </form>
EOT;
}

function builtURL ($link) {
    
        echo <<<EOT
<div class="container">
	<div class="row" style="margin-top:50px">                
        <div class="col-md-2"></div>
        <div class="col-md-8">
        	<div class="alert alert-warning" role="alert">
	        	<div class="panel-heading">
		        	<div class="row">
			        	<div class="col-xs-9 text-left">
                           <div class="big"><i class="fa fa-list"></i> A felépített URL:</div>
                           <p></p>
                           <p>
EOT;
       echo wordwrap($link, 120, "<br />", true);
echo <<<EOT
                                 </p>
                                 <textarea id="holdtext" STYLE="display:none;">
                                 </textarea>
                         </div>
		        	</div>
	        	</div>
                    <div class="clearfix"></div>
        	</div>
        </div>
        <div class="col-md2"></div>       
</div>
 		<div class="col-md-2"></div>
        <div class="col-md-8">
		        	<div class="row">
			        	<div class="col-md-4" style="padding-left: 5px">
				        <a href="$link" target="_blank"><button class="btn btn-warning btn-lg">Teszt</button></a>	
			        	</div>
                                        <div class="col-md-4">
				        <a href="urlbuilder.php"><button class="btn btn-danger btn-lg">Adatok törlése</button></a>
			        	</div>
		        	</div>    
		        </div>
		      <div class="col-md2"></div>
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

function pswBackup () {
    echo<<<EOT
<!-- Button trigger modal -->
<div style="padding-top:25px">
    <button class="btn btn-primary btn-lg btnmargin" data-toggle="modal" data-target="#pswBackup">
        Adatbázis-jelszó generálás
    </button>
</div>

<!-- Modal new user -->
<div class="modal fade" id="pswBackup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Bezár</span></button>
                <h4 class="modal-title" id="myModalLabel">Jelszó kódolás</h4>
            </div>
            <div class="modal-body">

                <form role="form" method="post" action="pswbackup.php" data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                    <div class="form-group">
                        <label for="user">Dekódolt jelszó</label>
                        <input type="text" class="form-control" id="pass" name="pass" placeholder="Jelszó" data-bv-notempty="true"
                               data-bv-notempty-message="A mező kitöltése kötelező!">
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Mégsem</button>
                        <button type="submit" class="btn btn-primary">Elküld</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
EOT;

}

function newsletterPicker () {
    echo <<<EOT
    
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h3 class="page-header"><i class="fa fa-envelope"></i> Hírlevél készítés</h3>

            <div class="row">


                <div class="col-md-4">
                    <!-- Travelo panel eleje -->
                    <div class="panel panel-blue">
                        <a href="newsletter_input.php?type=1">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-envelope fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="small"><img src="images/travelo_logo.png"></div>
                                        <div>Travelo heti hírlevél</div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer">
                                <span class="pull-left">Ezt választom</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                    <!-- Travelo panel vege -->
                </div>


                <div class="col-md-4">

                </div>


                <div class="col-md-4">
                    <!-- Travelo panel eleje -->
                    <div class="panel panel-blue">
                        <a href="newsletter_input.php?type=5">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-envelope fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="small"><img src="images/travelo_logo.png"></div>
                                        <div>Travelo tematikus hírlevél</div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer">
                                <span class="pull-left">Ezt választom</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                    <!-- Travelo panel vege -->
                </div>



                <!-- /.row -->

            </div>
            
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <!-- Intravena panel eleje -->
                    <div class="panel panel-red">
                        <a href="newsletter_input.php?type=4">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-envelope fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="small"><img src="images/intravena_logo.png"></div>
                                        <div>Intravéna hírlevél</div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer">
                                <span class="pull-left">Ezt választom</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                    <!-- Intravena panel vege -->
                </div>
                <div class="col-md-4">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <!-- Life panel eleje -->
                    <div class="panel panel-green">
                        <a href="newsletter_input.php?type=2">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-envelope fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div><img src="images/life_logo.png"></div>
                                        <div>Life EDM</div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer">
                                <span class="pull-left">Ezt választom</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                    <!-- Life panel vege -->
                </div>


                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <!-- LifeOP panel eleje -->
                    <div class="panel panel-green">
                        <a href="newsletter_input.php?type=3">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-envelope fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="small"><img src="images/life_logo.png"></div>    
                                        <div>Life EDM Egyetlen képpel</div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer">
                                <span class="pull-left">Ezt választom</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                    <!-- LifeOP panel vege -->
                </div>
            </div>
        </div>
    </div>
</div>

            <!-- /.container -->
EOT;
}

function notValidFunction() {
    echo <<<EOT
		<div class="container">

					<div class="row">
				        <div class="col-md-12" style="margin-top:100px;">

				            <div class="row">	
				                <div class="col-md-2"></div>

				                <div class="col-md-8">
				                    <div class="panel panel-red2">
				                        <div class="panel-heading">
				                            <div class="row">
				                                <div class="col-xs-3">
				                                    <i class="fa fa-warning fa-5x"></i>
				                                </div>
				                                <div class="col-xs-9 text-left">
				                                    <div class="huge">Figyelem!</div>
				                                    <div>A kért funkció nem létezik! Ellenőrizze, hogy helyesen adta-e meg az elérési utat!</div>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="panel-footer" style="height: 70px;">

				                            <div class="col-md-2"></div>
				                        </div>
				                    </div>
				                    <div class="clearfix"></div>
				                </div>

				            </div>
				        </div>

						</div><!-- /.row -->
		 			</div> <!-- /.container -->
EOT;
}

function saveDone ($title, $link) {
    echo <<<EOT
		<div class="container">

					<div class="row">
				        <div class="col-md-12" style="margin-top:100px;">

				            <div class="row">	
				                <div class="col-md-2"></div>

				                <div class="col-md-8">
				                    <div class="panel panel-primary">
				                        <div class="panel-heading">
				                            <div class="row">
				                                <div class="col-xs-3">
				                                    <i class="fa fa-download fa-5x"></i>
				                                </div>
				                                <div class="col-xs-9 text-left">
				                                    <div class="huge">Hírlevele elkészült!</div>
				                                    <div>Az alábbi linkre kattintva letöltheti annak forráskódját.</div>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="panel-footer" style="height: 70px;">
				                            <div class="col-md-2">
                                                             <a href="save/$title" download="$title"><button class="btn btn-primary btn-lg">Letöltés</button></a>   
                                                            </div>
EOT;
    if (isset ($link)){
        echo <<<EOT
                                                            <div class="col-md-7"></div>
                                                            <div class="col-md-2">
                                                             <a href="$link" target="_blank"><button class="btn btn-danger btn-lg">Megtekintés</button></a>   
                                                            </div>    
EOT;
    }
    echo <<<EOT
				                        </div>
				                    </div>
				                    <div class="clearfix"></div>
				                </div>

				            </div>
				        </div>

						</div><!-- /.row -->
		 			</div> <!-- /.container -->
EOT;
}

function emptyIntravenaDir () {
    echo <<<EOT
        <div class="container">

					<div class="row">
				        <div class="col-md-12" style="margin-top:100px;">

				            <div class="row">	
				                <div class="col-md-2"></div>

				                <div class="col-md-8">
				                    <div class="panel panel-red2">
				                        <div class="panel-heading">
				                            <div class="row">
				                                <div class="col-xs-3">
				                                    <i class="fa fa-warning fa-5x"></i>
				                                </div>
				                                <div class="col-xs-9 text-left">
				                                    <div class="huge">Figyelem!</div>
				                                    <div>A Keresett könyvtár üres. Kérem generálja le a hírleveleket!</div>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="panel-footer" style="height: 70px;">

				                            <div class="col-md-2"></div>
				                        </div>
				                    </div>
				                    <div class="clearfix"></div>
				                </div>

				            </div>
				        </div>

						</div><!-- /.row -->
		 			</div> <!-- /.container -->
EOT;
}
function emptyPicDir () {
    echo <<<EOT
        <div class="container">

					<div class="row">
				        <div class="col-md-12" style="margin-top:100px;">

				            <div class="row">	
				                <div class="col-md-2"></div>

				                <div class="col-md-8">
				                    <div class="panel panel-red2">
				                        <div class="panel-heading">
				                            <div class="row">
				                                <div class="col-xs-3">
				                                    <i class="fa fa-warning fa-5x"></i>
				                                </div>
				                                <div class="col-xs-9 text-left">
				                                    <div class="huge">Figyelem!</div>
				                                    <div>A Keresett könyvtár üres.</div>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="panel-footer" style="height: 70px;">

				                            <div class="col-md-2"></div>
				                        </div>
				                    </div>
				                    <div class="clearfix"></div>
				                </div>

				            </div>
				        </div>

						</div><!-- /.row -->
		 			</div> <!-- /.container -->
EOT;
}

function imageUpload() {
    echo <<<EOT
<form class="form" role="form" action="image_resize.php" method="post" accept-charset="UTF-8" enctype="multipart/form-data" data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
    <h2 class="form-signin-heading" align="center">Képméretek készítése</h2>
    <div class="form-group">
        <input type="file" class="form-control" name="pic" data-bv-notempty="true"
               data-bv-notempty-message="Válassz egy képet!">
        <strong>Csak JPG kiterjesztésű képet használj! Minimum méret: 770x410 px</strong>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Add meg a kép nevét!" data-bv-notempty="true"
               data-bv-notempty-message="Add meg a kép nevét!">
    <strong>Az elnevezésnél gondolj arra, hogy a képek később is megtalálhatók legyenek. Használj egyértelmű neveket, pl.: "húsvét", "karácsony", "wellness", stb.!</strong>
    </div>
    <h3 align="center">Elkészítendő méretek</h3>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="1">Travelo - Cimlap - Heti ajánlataink, Közel- Távol- kisképes (304x174)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="1" name="304x174">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">
                <label for="2"> Travelo - Cimlap - Heti ajánlataink (74x74)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="2" name="74x74">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="3">Közel-, Távol-, Mellékletek nyitóképei (634x344)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="3" name="634x344">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="4">Most ajánljuk, Kiemelt találat (160x120)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="4" name="160x120">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="5">Travelo 5-ös ajánló (185x105)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="5" name="185x105">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="6">Index címlap (352x198)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="6" name="352x198">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="7">Index, Velvet cikkoldal (348x196)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="7" name="348x196">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="8">Dívány, Sportgéza cikkoldal (148x83)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="8" name="148x83">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="9">Intravéna nagyképes (516x342)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="9" name="516x342">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="10">Life nyitó (640x350)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="10" name="640x350">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="11">Life középső (320x185)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="11" name="320x185">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="12">Life alsó (296x200)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="12" name="296x200">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="13">Kutyabarát nyitó (770x410)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="13" name="770x410">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="14">Kutyabarát címlapi (375x220)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="14" name="375x220">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="15">Hírlevél nagyképes (625x290)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="15" name="625x290">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="16">Hírlevél kisképes (305x160)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="16" name="305x160">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="17">XML banner 300x250-re (145x150)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="17" name="145x150">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="18">XML banner 640x360-ra - nagy (340x160)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="18" name="340x160">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="18">XML banner 640x360-ra - kicsi (164x190)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="18" name="164x190">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="19">XML banner 970x900-re (220x90)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="19" name="220x90">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="20">XML banner 468x120-ra (157x120)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="20" name="157x120">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="21">XML banner 300x600-ra - fekvő (300x139)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="21" name="300x139">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="22">XML banner 300x600-ra - álló (145x215)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="22" name="145x215">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="background-color: rgba(86,61,124,.15);">
            <div class="col-md-10">

                <label for="23">XML banner 140x600-ra (140x152)</label>
            </div>
            <div class="col-md-2">
                <input class="form-control"  type="checkbox" checked="checked" id="23" name="140x152">
            </div>
        </div>
    </div>


    <button class="btn btn-lg btn-primary btn-block" type="submit">Gyerünk!</button>
</form>
EOT;
}