<?php

function life_opOptimailFooter() {
$l_opti1 = iconv("UTF-8", "ISO-8859-2", "Ezt a levelet az optimail online direkt-marketing rendszeren keresztül küldtük a(z)");
$l_opti2 = iconv("UTF-8", "ISO-8859-2", "címre az Ön előzetes hozzájárulásával, melyet az Origo Zrt-nek tett a freemail.hu 
                                                ingyenes rendszerébe történő regisztrációja során. E szerint Ön marketingtartalmú 
                                                célzott üzenetek fogadását vállalja. Szolgáltatásunkkal kapcsolatban bővebb információval 
                                                szolgálunk az Ön számára a  ");
$l_opti3 = iconv("UTF-8", "ISO-8859-2", "Amennyiben a továbbiakban mégsem szeretne az érdeklődési körének megfelelő kedvezményes ajánlatokat vagy 
                                                    nyereményjáték-ismertetőket kapni, kattintson ");
$l_opti4 = iconv("UTF-8", "ISO-8859-2", "Az Origo Zrt. adatkezelési nyilvántartási azonosítója: 820-0001 ");
    echo <<<EOT
    <!-- Optimail lablec ON -->
<tr>
    <td colspan="5">
        <table align="center" bgcolor="white" width="100%" style="margin-top: 20px; background: #ffffff">
            <tr>
                <td><table align="center" bgcolor="white" width="562">
                        <tr>
                            <td colspan="2" align="left" height="10" width="562"><img src="spacer1.gif" width="562" height="10" alt="" border="0"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="left" height="1" width="562"><img src="lablec_szaggatott.gif" width="562" height="1" alt="" border="0"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="left" valign="top" height="32"><img src="lablec_logo.gif" width="158" height="32" alt="" border="0"></td>
                        </tr>
                        <tr>
                            <td width="45"><img src="{openingLogger}" width="45" height="1" alt="" border="0"></td>
                            <td align="left" valign="top" style="font-family:Arial; color:#555555; font-size:11px; text-align: justify">$l_opti1 
                                {email} $l_opti2<a style="color:#7EC100;text-decoration:none" href="http://www.optimail.hu" target="_blank">www.optimail.hu</a> oldalon.<br>
                                $l_opti3<a href="{unsubscribeUrl}" style="color:#7EC100; text-decoration:none" target="_blank">ide</a>. <br>
                                $l_opti4
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="left" height="1" width="562"><img src="lablec_szaggatott.gif" width="562" height="1" alt="" border="0"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="left" height="10" width="562"><img src="spacer1.gif" width="562" height="10" alt="" border="0"></td>
                        </tr>
                    </table></td>
            </tr>
        </table>

    </td>
</tr>
<!-- Optimail lablec OFF -->'
EOT;
}

function life_opLegalNotice() {
 $l_legal = iconv("UTF-8", "ISO-8859-2", "A Life Utazás és a jelen hírlevélben szereplő partnerei fenntartják az utazással kapcsolatos feltételek és árak módosításának jogát. A Life.hu Utazási mellékletét a Confhotel-Net Kft. üzemelteti.");
    echo <<<EOT
    <tr>
    <td colspan="5" valign="top">
        <table cellpadding="0" cellspacing="0" width="100%" style="margin-top: 20px; background: #ffffff">
            <tr>
                <td style="padding: 20px; font-size:10px; color: #5d5d5d; text-align:center">$l_legal Kapcsolat: +36-20-492-99-29; <a href="mailto:life@travelo.hu" style="color: #ec006e; text-decoration:none">life@travelo.hu</a>
                </td>
            </tr>
        </table>
    </td>
</tr>
EOT;
}

function life_opHead() {
    $title=iconv("UTF-8", "ISO-8859-2", "Life Utazás");
    echo <<<EOT
<!doctype html>
<html>
    <head>
        <meta charset="iso-8859-2">
        <title>$title</title>
        <style type='text/css'> @font-face {
                font-family: "OpenSans";
                src: local('¢'), url(http://szallas.travelo.hu/public/css/fonts/OpenSans-Regular.ttf) format('truetype');
                font-weight: normal;
                font-style: normal;
            }
        </style>
    </head>
    <body>

EOT;
}

function life_opTableStart() {
    echo <<<EOT
<body style="background: #faf8f1; text-decoration:none; font-size: 14px; font-family: 'OpenSans',arial,helvetica,sans-serif;margin:0;padding:0">
    <table width="660" border="0" align="center" style="background: #faf8f1; width: 660px; font-family: 'OpenSans',arial,helvetica,sans-serif">
        <tbody>
EOT;
}

function life_opMenu($style, $menu) {
    echo <<<EOT
    <!--Menu-->
<tr>
    <td>
        <table  cellpadding="0" cellspacing="0" style="width:660px;margin:0 0 5px 0;">
            <tr>
                <td style={$style['travelo_header']}>{$style['travelo_logo']}</td>
                <td style={$style['travelo_menu']}>{$menu['1']}</td>
                <td style={$style['travelo_menu']}>{$menu['2']}</td>
                <td style={$style['travelo_menu']}>{$menu['3']}</td>
                <td style={$style['travelo_menu']}>{$menu['4']}</td>
            </tr>
        </table>
    </td>
</tr>
<!--Menu vege-->
EOT;
}

function life_opBottomMenu() {
    echo <<<EOT
    <tr>
        <td align="center" style="padding: 25px 0; background:#ffffff">
            <img usemap="#bottommenuimagemap" src="bottommenu.png" border="0" />
         </td>
     </tr>
EOT;
}

function life_opTableEnd() {
    echo '</table>';
}

function life_opBottomMenuMap() {
    echo <<<EOT
    <map name="bottommenuimagemap" id="bottommenuimagemap">
    <area shape="rect" coords="58,17,201,47" href="http://repulojegy.travelo.hu/" alt="rep" target="_blank" />
    <area shape="rect" coords="248,14,412,48" href="http://autoberles.travelo.hu/" target="_blank" />
    <area shape="rect" coords="464,11,614,47" href="http://biztositas.travelo.hu/" target="_blank" />
</map>
EOT;
}

function life_opBigPic($travelo_bp) {
    echo <<<EOT
<!--Nagykepes-->
                <tr>
                    <td style="background:#ffffff;">
                        <table  cellpadding="0" cellspacing="0" style="width:625px;margin:15px 20px 15px 15px;">
                            <!--Kep-->
                            <tr>
                                <td align="center">{$travelo_bp['pic']}</td>
                            </tr>
                            <tr>
                                <td align="center" style="">
                                    <table cellpadding="0" cellspacing="0" style="background:#f7f5ef;padding:10px 10px;width:625px;margin-left:0px;">
                                        <!--Cim-->
                                        <tr>
                                            <td style="text-align:center;">{$travelo_bp['title']}</td>
                                        </tr>
                                        <!--Szoveg-->
                                        <tr>
                                            <td style="padding-top:35px; text-align:center;">{$travelo_bp['text']}</td>
                                        </tr>
                                        <tr>
                                        <td align="center" style="padding-top:35px;">
                                        <div style= "width: 200px; height:50px; 
                                            background-color: #e60f71; 
                                            text-align: center; padding-top:17px; 
                                            border-radius:5px; 
                                            box-shadow: 5px 5px 5px #888888; 
                                            border: solid 1px #fff;"> 
                                        <a style="font-family:'OpenSans',arial,helvetica,sans-serif; 
                                            font-size:22px; color:#fff; 
                                            font-weight:bold; text-decoration:none;" 
                                            href="{$travelo_bp['link']}">Megn&eacute;zem</a>
                                        </td>
                                        </tr>                     
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!--Nagykepes vege-->    
EOT;
}

function life_opHtmlEnd() {
    echo <<<EOT
     </body>
	</html>
	
EOT;
}

function life_opFormHeader($text) {
    echo <<<EOT
     <!-- Page Content -->

		<div class="container">

	            <div class="row">
	            <div class="col-md-12">
	                <!--h3 class="page-header"><i class="fa fa-envelope"></i> Hírlevél készítés</h3-->

					<!-- Panel2 eleje -->

                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-envelope fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="small"><img src="images/life_logo.png"></div>
                                        <div>$text</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
               </div>
            <!-- Panel2 vege -->   
EOT;
}

function life_opInputFormBase() {
    echo <<<EOT
    <form action="life_op_inputDb.php" method="post" id="travelo_nl_edit" accept-charset="UTF-8" enctype="multipart/form-data" data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
<!-- Alapadatok panel + az analitycs panel row-ja -->
				<div class="row">
				    <div class="col-md-6">
				        <div class="panel panel-success">
				            <div class="panel-heading">
				                <div class="row">

				                    <div class="col-xs-9 text-left">
				                        <div class="big">Alapadatok</div>

				                    </div>
				                </div>
				            </div>

				            <div class="panel-footer">

				                <div class="form-group">
				                    <label>Küldés dátuma:</label>
				                    <input type="text" class="form-control" name="sendingdate" placeholder="Dátum" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
				                </div>
				                <div class="form-group">
				                    <label>Alap mappa</label>
				                    <input class="form-control" type="url" name="folder" placeholder="Pl.: http://stuff.szallas.travelo.hu/hirlevel/20140101" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">

				                </div>
				                <div class="clearfix"></div>
				            </div>
				        </div>
				    </div>

<!--analitycs kodok panel-->
				    <div class="col-md-6">
				        <div class="panel panel-success">
				            <div class="panel-heading">
								<div class="row">
				                <div class="col-xs-9 text-left">
				                    <div class="big">Analytics kódok</div>
				                </div>
				            </div>
				        </div>
				        <div class="panel-footer">

				            <div class="form-group">
				                <label>Source:</label>
				                <input class="form-control"  type="text" name="analytics_source" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
				            </div>
				            <div class="form-group">
				                <label>Medium</label>
				                <input class="form-control"  type="text" name="analytics_medium"  data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
				            </div>
				        </div>
				        <div class="clearfix"></div>
				    </div>
				</div>
			</div>	
EOT;
}

function life_opInputFormMenu () {
    echo <<<EOT
    <!--menu panel eleje-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-success ">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-9 text-left">
                                        <div class="big">Menü</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">


                                <div class="row">

                                    <div class="form-group col-md-3">
                                        <label>1. hely</label>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label>2. hely</label>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label>3. hely</label>
                                    </div>


                                    <div class="form-group col-md-3">
                                        <label>4. hely</label>
                                    </div>
                                </div>




                                <div class="row">

                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Felirat</label>
                                        <input class="form-control"  type="text" name="menu1" value="Wellness" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                    </div>

                                    <div class="form-group col-md-3">

                                        <label class="help-block-form">Felirat</label>
                                        <input class="form-control"  type="text" id="menu2" name="menu2" value="Tengerpart" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Felirat</label>
                                        <input class="form-control"  type="text" id="menu3" name="menu3" value="Balaton" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                    </div>


                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Felirat</label>
                                        <input class="form-control"  type="text" id="menu4" name="menu4" value="Akciók" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Link:</label>
                                        <input class="form-control"  type="url" id="menu1_link" name="menu1_link" value="http://utazas.life.hu/kereses?keyword=wellness&belfold=1" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Link:</label>
                                        <input class="form-control"  type="url" id="menu2_link" name="menu2_link" value="http://utazas.life.hu/kereses?szo=tengerpart" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Link:</label>
                                        <input class="form-control"  type="url" id="menu3_link" name="menu3_link" value="http://utazas.life.hu/kereses?szo=Balaton&belfold=1" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
                                    </div>


                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Link:</label>
                                        <input class="form-control"  type="url" id="menu4_link" name="menu4_link" value="http://utazas.life.hu/akciok" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Analitycs:</label>
                                        <input class="form-control"  type="text" id="menu1_analytics" name="menu1_analytics" value="menu_wellness" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Analitycs:</label>
                                        <input class="form-control"  type="text" id="menu2_analytics" name="menu2_analytics" value="menu_tengerpart" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Analitycs:</label>
                                        <input class="form-control"  type="text" id="menu3_analytics" name="menu3_analytics" value="menu_balaton" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                    </div>


                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Analitycs:</label>
                                        <input class="form-control"  type="text" id="menu4_analytics" name="menu4_analytics" value="menu_akciok" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                    </div>
                                </div>	

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div> 
            <!--menu panel vege-->
EOT;
}

function life_opInputFormBigPic () {
    echo <<<EOT
    <!--nagykepes panel eleje-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-9 text-left">
                                        <div class="big">Nagyképes</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="help-block-form">Cím:</label>
                                            <input class="form-control"  type="text" name="bp_title" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Link:</label>
                                            <input class="form-control"  type="url" name="bp_link"  data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Leírás:</label>
                                            <textarea class="form-control" rows="2" cols="83" name="bp_text" form="travelo_nl_edit" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="help-block-form">Képválasztás:</label>
                                            <input class="form-control"  type="file" name="bp_pic"  data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Analitycs:</label>
                                            <input class="form-control"  type="text" name="bp_analytics" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Legjobb ár:</label>
                                            <input class="form-control"  type="text" name="bp_price" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
EOT;
}

function life_opFormFoot ($text) {
    echo <<<EOT
    <!--Submit-->
                <div class="row">
                    <div class="col-md-12">
                        <div id="submit">
                            <input class="btn btn-success btn-lg" id="submit2" type="submit" value="$text">
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </form>
        </div>
        <!-- /.container -->
EOT;
}

function life_opEditFormBase($travelo, $id) {
    echo <<<EOT
		<form action="life_op_updateDb.php" method="post" id="travelo_nl_edit" accept-charset="UTF-8" enctype="multipart/form-data" data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
		data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
		data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                <input type="hidden" name="id" value="$id"> 
		<!-- Alapadatok panel + az analitycs panel row-ja -->
						<div class="row">
						    <div class="col-md-6">
						        <div class="panel panel-success">
						            <div class="panel-heading">
						                <div class="row">

						                    <div class="col-xs-9 text-left">
						                        <div class="big">Alapadatok</div>

						                    </div>
						                </div>
						            </div>

						            <div class="panel-footer">

						                <div class="form-group">
						                    <label>Küldés dátuma:</label>
                                                                    <input type="text" class="form-control" name="sendingdate" placeholder="Dátum" value="{$travelo['sendingdate']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
						                </div>
						                <div class="form-group">
						                    <label>Alap mappa</label>
						                    <input class="form-control" type="url" name="folder" placeholder="Pl.: http://stuff.szallas.travelo.hu/hirlevel/20140101" value="{$travelo['folder']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">

						                </div>
						                <div class="clearfix"></div>
						            </div>
						        </div>
						    </div>

		<!--analitycs kodok panel-->
						    <div class="col-md-6">
						        <div class="panel panel-success">
						            <div class="panel-heading">
										<div class="row">
						                <div class="col-xs-9 text-left">
						                    <div class="big">Analytics kódok</div>
						                </div>
						            </div>
						        </div>
						        <div class="panel-footer">

						            <div class="form-group">
						                <label>Source:</label>
						                <input class="form-control"  type="text" name="analytics_source" value="{$travelo['analytics_source']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
						            </div>
						            <div class="form-group">
						                <label>Medium</label>
						                <input class="form-control"  type="text" name="analytics_medium" value="{$travelo['analytics_medium']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
						            </div>
						        </div>
						        <div class="clearfix"></div>
						    </div>
						</div>
					</div>

EOT;
}

function life_opEditFormMenu ($travelo) {
    echo <<<EOT
    <!--menu panel eleje-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-success ">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-9 text-left">
                                        <div class="big">Menü</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">


                                <div class="row">

                                    <div class="form-group col-md-3">
                                        <label>1. hely</label>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label>2. hely</label>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label>3. hely</label>
                                    </div>


                                    <div class="form-group col-md-3">
                                        <label>4. hely</label>
                                    </div>
                                </div>




                                <div class="row">

                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Felirat</label>
                                        <input class="form-control"  type="text" name="menu1" value="{$travelo['menu1']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                    </div>

                                    <div class="form-group col-md-3">

                                        <label class="help-block-form">Felirat</label>
                                        <input class="form-control"  type="text" id="menu2" name="menu2" value="{$travelo['menu2']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Felirat</label>
                                        <input class="form-control"  type="text" id="menu3" name="menu3" value="{$travelo['menu3']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                    </div>


                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Felirat</label>
                                        <input class="form-control"  type="text" id="menu4" name="menu4" value="{$travelo['menu4']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Link:</label>
                                        <input class="form-control"  type="url" id="menu1_link" name="menu1_link" value="{$travelo['menu1_link']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Link:</label>
                                        <input class="form-control"  type="url" id="menu2_link" name="menu2_link" value="{$travelo['menu2_link']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Link:</label>
                                        <input class="form-control"  type="url" id="menu3_link" name="menu3_link" value="{$travelo['menu3_link']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
                                    </div>


                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Link:</label>
                                        <input class="form-control"  type="url" id="menu4_link" name="menu4_link" value="{$travelo['menu4_link']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Analitycs:</label>
                                        <input class="form-control"  type="text" id="menu1_analytics" name="menu1_analytics" value="{$travelo['menu1_analytics']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Analitycs:</label>
                                        <input class="form-control"  type="text" id="menu2_analytics" name="menu2_analytics" value="{$travelo['menu2_analytics']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Analitycs:</label>
                                        <input class="form-control"  type="text" id="menu3_analytics" name="menu3_analytics" value="{$travelo['menu3_analytics']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                    </div>


                                    <div class="form-group col-md-3">
                                        <label class="help-block-form">Analitycs:</label>
                                        <input class="form-control"  type="text" id="menu4_analytics" name="menu4_analytics" value="{$travelo['menu4_analytics']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
                                    </div>
                                </div>	

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div> 
            <!--menu panel vege-->
EOT;
}

function life_opEditFormBigPic ($travelo) {
    echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-success">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-9 text-left">
		                        <div class="big">Nagyképes</div>
		                    </div>
		                </div>
		            </div>
		            <div class="panel-footer">
		                <div class="row">
		                    <div class="col-md-6">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" name="bp_title" value="{$travelo['bp_title']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" name="bp_link" value="{$travelo['bp_link']}"  data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Leírás:</label>
		                            <textarea class="form-control" rows="2" cols="83" name="bp_text" form="travelo_nl_edit" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">{$travelo['bp_text']}</textarea>
		                        </div>
		                    </div>
		                    <div class="col-md-6">
		                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="text" name="bp_pic" value="{$travelo['bp_pic']}"  data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="bp_analytics" value="{$travelo['bp_analytics']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" name="bp_price" value="{$travelo['bp_price']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
		                    </div>
		                </div>
		                <div class="clearfix"></div>
		            </div>
		        </div>
		    </div>
		</div>
EOT;
}