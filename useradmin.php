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
			        
						<form role="form" method="post" action="add.php">
						  <div class="form-group">
						    <label for="user">Felhasználónév</label>
						    <input type="text" class="form-control" id="user" name="user" placeholder="Felhasználónév">
						  </div>
						  <div class="form-group">
						    <label for="source">Teljes név:</label>
						    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Teljes név">
						  </div>
						  <div class="form-group">
						    <label for="source">Jelszó:</label>
						    <input type="password" class="form-control" id="pass" name="pass" placeholder="Jelszó">
						  </div>
						  <div class="form-group">
						    <label for="source">Jelszó újra:</label>
						    <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Jelszó újra">
						</form>
						
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Mégsem</button>
			        <button type="button" class="btn btn-primary">Mentés</button>
			      </div>
			    </div>
			  </div>
			</div>



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
