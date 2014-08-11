<?php

function lifeOptimailFooter() {
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

function lifeLegalNotice() {
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

function lifeHead() {
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

function lifeTableStart() {
    echo <<<EOT
<body style="background: #faf8f1; text-decoration:none; font-size: 14px; font-family: 'OpenSans',arial,helvetica,sans-serif;margin:0;padding:0">
    <table width="660" border="0" align="center" style="background: #faf8f1; width: 660px; font-family: 'OpenSans',arial,helvetica,sans-serif">
        <tbody>
EOT;
}

function lifeMenu($style, $menu) {
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

function lifeBigPic($travelo_bp) {
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
                            <td>{$travelo_bp['title']}</td>
                        </tr>
                        <!--Szoveg-->
                        <tr>
                            <td style="padding-top:5px;">{$travelo_bp['text']}</td>
                        </tr>                        
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
<!--Nagykepes vége-->
EOT;
}

function lifeSmallPic($smallpic) {
    echo <<<EOT
<!--Kiskepes blokk-->
<tr>
    <td style="background:#ffffff">
        <table cellpadding="0" cellspacing="0" style="width:625px;margin:0 20px 20px 15px;" align="center">
            <tr>
                <!-- Bal-->
                <td style="width:305px;" align="center" valign="top">
                    <table cellpadding="0" cellspacing="0" align="center" style="width:305px;">
                        <!--Kep-->
                        <tr>
                            <td align="center">{$smallpic['l_pic']}</td>
                        </tr>
                        <tr>
                            <td align="center" style="padding: 0;width:305px;">
                                <table cellpadding="0" cellspacing="0" style="background:#f7f5ef;padding:5px 10px;margin-left:0px;width:305px;">
                                    <!--Cim-->
                                    <tr>
                                        <td>{$smallpic['l_title']}</td>
                                    </tr>
                                    <!--Alcim-->
                                    <tr>
                                        <td style="">{$smallpic['l_subtitle']}</td>
                                    </tr> 
                                    <!--Szoveg-->
                                    <tr>
                                        <td style="padding-top:4px;">{$smallpic['l_text']}</td>
                                    </tr>                        
                                </table>
                            </td>
                        </tr>
                    </table></td>
                <td style="width:15px;">&nbsp;</td>  
                <!--Jobb-->
                <td style="width:305px;" align="center" valign="top">
                    <table cellpadding="0" cellspacing="0" align="center" style="width:305px;">
                        <!--Kep-->
                        <tr>
                            <td align="center">{$smallpic['r_pic']}</td>
                        </tr>
                        <tr>
                            <td align="center" style="padding: 0;width:305px;">
                                <table cellpadding="0" cellspacing="0" style="background:#f7f5ef;padding:5px 10px;margin-left:0px;width:305px;">
                                    <!--Cim-->
                                    <tr>
                                        <td>{$smallpic['r_title']}</td>
                                    </tr>
                                    <!--Alcim--> 
                                    <tr>
                                        <td>{$smallpic['r_subtitle']}</td>
                                    </tr>                                         
                                    <!--Szoveg-->
                                    <tr>
                                        <td style="padding-top:4px;">{$smallpic['r_text']}</td>
                                    </tr>                        
                                </table>
                            </td>
                        </tr>
                    </table>                   
                </td>
            </tr>
        </table>
    </td>
</tr>
EOT;
}

function lifeBottomMenu() {
    echo <<<EOT
    <tr>
        <td align="center" style="padding: 25px 0; background:#ffffff">
            <img usemap="#bottommenuimagemap" src="bottommenu.png" border="0" />
         </td>
     </tr>
EOT;
}

function lifeTableEnd() {
    echo '</table>';
}

function lifeBottomMenuMap() {
    echo <<<EOT
    <map name="bottommenuimagemap" id="bottommenuimagemap">
    <area shape="rect" coords="58,17,201,47" href="http://repulojegy.travelo.hu/" alt="rep" target="_blank" />
    <area shape="rect" coords="248,14,412,48" href="http://autoberles.travelo.hu/" target="_blank" />
    <area shape="rect" coords="464,11,614,47" href="http://biztositas.travelo.hu/" target="_blank" />
</map>
EOT;
}

function lifeHtmlEnd() {
    echo <<<EOT
     </body>
	</html>
	
EOT;
}

function lifeFormHeader($text){
    echo <<<EOT
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

function lifeInputFormBase () {
    echo <<<EOT
    <form action="life_inputDb.php" method="post" id="travelo_nl_edit" accept-charset="UTF-8" enctype="multipart/form-data" data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
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
                                    <input class="form-control" type="url" name="folder" placeholder="Pl.: http://stuff.szallas.travelo.hu/hirlevel/edm/140101_life_dm" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">

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

function lifeInputFormMenu () {
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

function lifeInputFormBigPic () {
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

function lifeInputFormSmallPic () {
    echo <<<EOT
    <!-- kiskepes panel eleje-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-9 text-left">
                                        <div class="big">Kisképesek</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label>1. sor</label>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label>Bal</label>
                                    </div>

                                    <div class="form-group col-md-5">
                                        <label>Jobb</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input class="form-control"  type="checkbox" id="1ok" name="1ok">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="help-block-form">Cím:</label>
                                            <input class="form-control"  type="text" id="1l_title" name="1l_title">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Alcím:</label>
                                            <input class="form-control"  type="text" id="1l_subtitle" name="1l_subtitle">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Leírás:</label>
                                            <textarea class="form-control" rows="2" id="1l_text" name="1l_text" form="travelo_nl_edit" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Képválasztás:</label>
                                            <input class="form-control"  type="file" id="1l_pic" name="1l_pic">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Link:</label>
                                            <input class="form-control"  type="url" id="1l_link" name="1l_link" data-bv-uri-message="A formátum nem megfelelő!">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Analitycs:</label>
                                            <input class="form-control"  type="text" id="1l_analytics" name="1l_analytics">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Legjobb ár:</label>
                                            <input class="form-control"  type="text" id="1l_price" name="1l_price">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="help-block-form">Cím:</label>
                                            <input class="form-control"  type="text" id="1r_title" name="1r_title">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Alcím:</label>
                                            <input class="form-control"  type="text" id="1r_subtitle" name="1r_subtitle">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Leírás:</label>
                                            <textarea class="form-control" rows="2" id="1r_text" name="1r_text" form="travelo_nl_edit" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Képválasztás:</label>
                                            <input class="form-control"  type="file" id="1r_pic" name="1r_pic">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Link:</label>
                                            <input class="form-control"  type="url" id="1r_link" name="1r_link" data-bv-uri-message="A formátum nem megfelelő!">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Analitycs:</label>
                                            <input class="form-control"  type="text" id="1r_analytics" name="1r_analytics">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Legjobb ár:</label>
                                            <input class="form-control"  type="text" id="1r_price" name="1r_price">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label>2. sor</label>
                                    </div>

                                    <div class="form-group col-md-5">
                                        <label>Bal</label>
                                    </div>

                                    <div class="form-group col-md-5">
                                        <label>Jobb</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input class="form-control"  type="checkbox" id="2ok" name="2ok">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="help-block-form">Cím:</label>
                                            <input class="form-control"  type="text" id="2l_title" name="2l_title">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Alcím:</label>
                                            <input class="form-control"  type="text" id="2l_subtitle" name="2l_subtitle">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Leírás:</label>
                                            <textarea class="form-control" rows="2" id="2l_text" name="2l_text" form="travelo_nl_edit" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Képválasztás:</label>
                                            <input class="form-control"  type="file" id="2l_pic" name="2l_pic">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Link:</label>
                                            <input class="form-control"  type="url" id="2l_link" name="2l_link" data-bv-uri-message="A formátum nem megfelelő!">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Analitycs:</label>
                                            <input class="form-control"  type="text" id="2l_analytics" name="2l_analytics">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Legjobb ár:</label>
                                            <input class="form-control"  type="text" id="2l_price" name="2l_price">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="help-block-form">Cím:</label>
                                            <input class="form-control"  type="text" id="2r_title" name="2r_title">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Alcím:</label>
                                            <input class="form-control"  type="text" id="2r_subtitle" name="2r_subtitle">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Leírás:</label>
                                            <textarea class="form-control" rows="2" id="2r_text" name="2r_text" form="travelo_nl_edit" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Képválasztás:</label>
                                            <input class="form-control"  type="file" id="2r_pic" name="2r_pic">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Link:</label>
                                            <input class="form-control"  type="url" id="2r_link" name="2r_link" data-bv-uri-message="A formátum nem megfelelő!">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Analitycs:</label>
                                            <input class="form-control"  type="text" id="2r_analytics" name="2r_analytics">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Legjobb ár:</label>
                                            <input class="form-control"  type="text" id="2r_price" name="2r_price">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label>3. sor</label>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label>Bal</label>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label>Jobb</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input class="form-control"  type="checkbox" id="3ok" name="3ok">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="help-block-form">Cím:</label>
                                            <input class="form-control"  type="text" id="3l_title" name="3l_title">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Alcím:</label>
                                            <input class="form-control"  type="text" id="3l_subtitle" name="3l_subtitle">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Leírás:</label>
                                            <textarea class="form-control" rows="3" id="3l_text" name="3l_text" form="travelo_nl_edit" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Képválasztás:</label>
                                            <input class="form-control"  type="file" id="3l_pic" name="3l_pic">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Link:</label>
                                            <input class="form-control"  type="url" id="3l_link" name="3l_link" data-bv-uri-message="A formátum nem megfelelő!">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Analitycs:</label>
                                            <input class="form-control"  type="text" id="3l_analytics" name="3l_analytics">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Legjobb ár:</label>
                                            <input class="form-control"  type="text" id="3l_price" name="3l_price">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="help-block-form">Cím:</label>
                                            <input class="form-control"  type="text" id="3r_title" name="3r_title">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Alcím:</label>
                                            <input class="form-control"  type="text" id="3r_subtitle" name="3r_subtitle">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Leírás:</label>
                                            <textarea class="form-control" rows="3" id="3r_text" name="3r_text" form="travelo_nl_edit" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Képválasztás:</label>
                                            <input class="form-control"  type="file" id="3r_pic" name="3r_pic">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Link:</label>
                                            <input class="form-control"  type="url" id="3r_link" name="3r_link" data-bv-uri-message="A formátum nem megfelelő!">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Analitycs:</label>
                                            <input class="form-control"  type="text" id="3r_analytics" name="3r_analytics">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Legjobb ár:</label>
                                            <input class="form-control"  type="text" id="3r_price" name="3r_price">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label>4. sor</label>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label>Bal</label>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label>Jobb</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input class="form-control"  type="checkbox" id="4ok" name="4ok">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="help-block-form">Cím:</label>
                                            <input class="form-control"  type="text" id="4l_title" name="4l_title">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Alcím:</label>
                                            <input class="form-control"  type="text" id="4l_subtitle" name="4l_subtitle">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Leírás:</label>
                                            <textarea class="form-control" rows="4" id="4l_text" name="4l_text" form="travelo_nl_edit" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Képválasztás:</label>
                                            <input class="form-control"  type="file" id="4l_pic" name="4l_pic">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Link:</label>
                                            <input class="form-control"  type="url" id="4l_link" name="4l_link" data-bv-uri-message="A formátum nem megfelelő!">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Analitycs:</label>
                                            <input class="form-control"  type="text" id="4l_analytics" name="4l_analytics">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Legjobb ár:</label>
                                            <input class="form-control"  type="text" id="4l_price" name="4l_price">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="help-block-form">Cím:</label>
                                            <input class="form-control"  type="text" id="4r_title" name="4r_title">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Alcím:</label>
                                            <input class="form-control"  type="text" id="4r_subtitle" name="4r_subtitle">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Leírás:</label>
                                            <textarea class="form-control" rows="4" id="4r_text" name="4r_text" form="travelo_nl_edit" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Képválasztás:</label>
                                            <input class="form-control"  type="file" id="4r_pic" name="4r_pic">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Link:</label>
                                            <input class="form-control"  type="url" id="4r_link" name="4r_link" data-bv-uri-message="A formátum nem megfelelő!">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Analitycs:</label>
                                            <input class="form-control"  type="text" id="4r_analytics" name="4r_analytics">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Legjobb ár:</label>
                                            <input class="form-control"  type="text" id="4r_price" name="4r_price">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label>5. sor</label>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label>Bal</label>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label>Jobb</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input class="form-control"  type="checkbox" id="5ok" name="5ok">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="help-block-form">Cím:</label>
                                            <input class="form-control"  type="text" id="5l_title" name="5l_title">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Alcím:</label>
                                            <input class="form-control"  type="text" id="5l_subtitle" name="5l_subtitle">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Leírás:</label>
                                            <textarea class="form-control" rows="5" id="5l_text" name="5l_text" form="travelo_nl_edit" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Képválasztás:</label>
                                            <input class="form-control"  type="file" id="5l_pic" name="5l_pic">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Link:</label>
                                            <input class="form-control"  type="url" id="5l_link" name="5l_link" data-bv-uri-message="A formátum nem megfelelő!">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Analitycs:</label>
                                            <input class="form-control"  type="text" id="5l_analytics" name="5l_analytics">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Legjobb ár:</label>
                                            <input class="form-control"  type="text" id="5l_price" name="5l_price">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="help-block-form">Cím:</label>
                                            <input class="form-control"  type="text" id="5r_title" name="5r_title">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Alcím:</label>
                                            <input class="form-control"  type="text" id="5r_subtitle" name="5r_subtitle">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Leírás:</label>
                                            <textarea class="form-control" rows="5" id="5r_text" name="5r_text" form="travelo_nl_edit" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Képválasztás:</label>
                                            <input class="form-control"  type="file" id="5r_pic" name="5r_pic">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Link:</label>
                                            <input class="form-control"  type="url" id="5r_link" name="5r_link" data-bv-uri-message="A formátum nem megfelelő!">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Analitycs:</label>
                                            <input class="form-control"  type="text" id="5r_analytics" name="5r_analytics">
                                        </div>
                                        <div class="form-group">
                                            <label class="help-block-form">Legjobb ár:</label>
                                            <input class="form-control"  type="text" id="5r_price" name="5r_price">
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

function lifeFormFoot ($text) {
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

function lifeEditFormBase($travelo, $id) {
    echo <<<EOT
		<form action="travelo_nl_updateDb.php" method="post" id="travelo_nl_edit" accept-charset="UTF-8" enctype="multipart/form-data" data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
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

function lifeEditFormMenu ($travelo) {
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

function lifeEditFormBigPic ($travelo) {
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

function lifeEditFormSmallPic($travelo) {
    $s1ok = $s2ok = $s3ok = $s4ok = $s5ok="";
    if ($travelo['1ok'] != NULL) {
        $s1ok = "checked";
    }
    if ($travelo['2ok'] != NULL) {
        $s2ok = "checked";
    }
    if ($travelo['3ok'] != NULL) {
        $s3ok = "checked";
    }
    if ($travelo['4ok'] != NULL) {
        $s4ok = "checked";
    }
    if ($travelo['5ok'] != NULL) {
        $s5ok = "checked";
    }
    echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-success">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-9 text-left">
		                        <div class="big">Kisképesek</div>
		                    </div>
		                </div>
		            </div>
		            <div class="panel-footer">
		                <div class="row">
		                    <div class="form-group col-md-2">
		                        <label>1. sor</label>
		                    </div>
		                    <div class="form-group col-md-5">
		                        <label>Bal</label>
		                    </div>

		                    <div class="form-group col-md-5">
		                        <label>Jobb</label>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-md-2">
		                        <div class="form-group">
		                            <input class="form-control"  type="checkbox" id="1ok" name="1ok" $s1ok>
		                        </div>
		                    </div>
		                    <div class="col-md-5">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" id="1l_title" name="1l_title" value="{$travelo['1l_title']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Alcím:</label>
		                            <input class="form-control"  type="text" id="1l_subtitle" name="1l_subtitle" value="{$travelo['1l_subtitle']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Leírás:</label>
		                            <textarea class="form-control" rows="2" id="1l_text" name="1l_text" form="travelo_nl_edit" >{$travelo['1l_text']}</textarea>
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="text" id="1l_pic" name="1l_pic" value="{$travelo['1l_pic']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" id="1l_link" name="1l_link" value="{$travelo['1l_link']}" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" id="1l_analytics" name="1l_analytics" value="{$travelo['1l_analytics']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" id="1l_price" name="1l_price" value="{$travelo['1l_price']}">
		                        </div>
		                    </div>
		                    <div class="col-md-5">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" id="1r_title" name="1r_title" value="{$travelo['1r_title']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Alcím:</label>
		                            <input class="form-control"  type="text" id="1r_subtitle" name="1r_subtitle" value="{$travelo['1r_subtitle']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Leírás:</label>
		                            <textarea class="form-control" rows="2" id="1r_text" name="1r_text" form="travelo_nl_edit" >{$travelo['1r_text']}</textarea>
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="text" id="1r_pic" name="1r_pic" value="{$travelo['1r_pic']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" id="1r_link" name="1r_link" value="{$travelo['1r_link']}" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" id="1r_analytics" name="1r_analytics" value="{$travelo['1r_analytics']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" id="1r_price" name="1r_price" value="{$travelo['1r_price']}">
		                        </div>
		                    </div>
		                </div>
		                <hr>
		                <div class="row">
		                    <div class="form-group col-md-2">
		                        <label>2. sor</label>
		                    </div>

		                    <div class="form-group col-md-5">
		                        <label>Bal</label>
		                    </div>

		                    <div class="form-group col-md-5">
		                        <label>Jobb</label>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-md-2">
		                        <div class="form-group">
		                            <input class="form-control"  type="checkbox" id="2ok" name="2ok" $s2ok>
		                        </div>
		                    </div>
		                    <div class="col-md-5">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" id="2l_title" name="2l_title" value="{$travelo['2l_title']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Alcím:</label>
		                            <input class="form-control"  type="text" id="2l_subtitle" name="2l_subtitle" value="{$travelo['2l_subtitle']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Leírás:</label>
		                            <textarea class="form-control" rows="2" id="2l_text" name="2l_text" form="travelo_nl_edit" >{$travelo['2l_text']}</textarea>
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="text" id="2l_pic" name="2l_pic" value="{$travelo['2l_pic']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" id="2l_link" name="2l_link" value="{$travelo['2l_link']}" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" id="2l_analytics" name="2l_analytics" value="{$travelo['2l_analytics']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" id="2l_price" name="2l_price" value="{$travelo['2l_price']}">
		                        </div>
		                    </div>
		                    <div class="col-md-5">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" id="2r_title" name="2r_title" value="{$travelo['2r_title']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Alcím:</label>
		                            <input class="form-control"  type="text" id="2r_subtitle" name="2r_subtitle" value="{$travelo['2r_subtitle']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Leírás:</label>
		                            <textarea class="form-control" rows="2" id="2r_text" name="2r_text" form="travelo_nl_edit" >{$travelo['2r_text']}</textarea>
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="text" id="2r_pic" name="2r_pic" value="{$travelo['2r_pic']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" id="2r_link" name="2r_link" value="{$travelo['2r_link']}" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" id="2r_analytics" name="2r_analytics" value="{$travelo['2r_analytics']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" id="2r_price" name="2r_price" value="{$travelo['2r_price']}">
		                        </div>
		                    </div>
		                </div>
		                <hr>
		                <div class="row">
		                    <div class="form-group col-md-2">
		                        <label>3. sor</label>
		                    </div>
		                    <div class="form-group col-md-5">
		                        <label>Bal</label>
		                    </div>
		                    <div class="form-group col-md-5">
		                        <label>Jobb</label>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-md-2">
		                        <div class="form-group">
		                            <input class="form-control"  type="checkbox" id="3ok" name="3ok" $s3ok>
		                        </div>
		                    </div>
		                    <div class="col-md-5">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" id="3l_title" name="3l_title" value="{$travelo['3l_title']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Alcím:</label>
		                            <input class="form-control"  type="text" id="3l_subtitle" name="3l_subtitle" value="{$travelo['3l_subtitle']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Leírás:</label>
		                            <textarea class="form-control" rows="2" id="3l_text" name="3l_text" form="travelo_nl_edit" >{$travelo['3l_text']}</textarea>
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="text" id="3l_pic" name="3l_pic" value="{$travelo['3l_pic']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" id="3l_link" name="3l_link" value="{$travelo['3l_link']}" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" id="3l_analytics" name="3l_analytics" value="{$travelo['3l_analytics']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" id="3l_price" name="3l_price" value="{$travelo['3l_price']}">
		                        </div>
		                    </div>
		                    <div class="col-md-5">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" id="3r_title" name="3r_title" value="{$travelo['3r_title']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Alcím:</label>
		                            <input class="form-control"  type="text" id="3r_subtitle" name="3r_subtitle" value="{$travelo['3r_subtitle']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Leírás:</label>
		                            <textarea class="form-control" rows="2" id="3r_text" name="3r_text" form="travelo_nl_edit" >{$travelo['3r_text']}</textarea>
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="text" id="3r_pic" name="3r_pic" value="{$travelo['3r_pic']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" id="3r_link" name="3r_link" value="{$travelo['3r_link']}" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" id="3r_analytics" name="3r_analytics" value="{$travelo['3r_analytics']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" id="3r_price" name="3r_price" value="{$travelo['3r_price']}">
		                        </div>
		                    </div>
		                </div>
		                <hr>
		                <div class="row">
		                    <div class="form-group col-md-2">
		                        <label>4. sor</label>
		                    </div>
		                    <div class="form-group col-md-5">
		                        <label>Bal</label>
		                    </div>
		                    <div class="form-group col-md-5">
		                        <label>Jobb</label>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-md-2">
		                        <div class="form-group">
		                            <input class="form-control"  type="checkbox" id="4ok" name="4ok" $s4ok>
		                        </div>
		                    </div>
		                    <div class="col-md-5">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" id="4l_title" name="4l_title" value="{$travelo['4l_title']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Alcím:</label>
		                            <input class="form-control"  type="text" id="4l_subtitle" name="4l_subtitle" value="{$travelo['4l_subtitle']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Leírás:</label>
		                            <textarea class="form-control" rows="2" id="4l_text" name="4l_text" form="travelo_nl_edit" >{$travelo['4l_text']}</textarea>
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="text" id="4l_pic" name="4l_pic" value="{$travelo['4l_pic']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" id="4l_link" name="4l_link" value="{$travelo['4l_link']}" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" id="4l_analytics" name="4l_analytics" value="{$travelo['4l_analytics']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" id="4l_price" name="4l_price" value="{$travelo['4l_price']}">
		                        </div>
		                    </div>
		                    <div class="col-md-5">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" id="4r_title" name="4r_title" value="{$travelo['4r_title']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Alcím:</label>
		                            <input class="form-control"  type="text" id="4r_subtitle" name="4r_subtitle" value="{$travelo['4r_subtitle']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Leírás:</label>
		                            <textarea class="form-control" rows="2" id="4r_text" name="4r_text" form="travelo_nl_edit" >{$travelo['4r_text']}</textarea>
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="text" id="4r_pic" name="4r_pic" value="{$travelo['4r_pic']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" id="4r_link" name="4r_link" value="{$travelo['4r_link']}" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" id="4r_analytics" name="4r_analytics" value="{$travelo['4r_analytics']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" id="4r_price" name="4r_price" value="{$travelo['4r_price']}">
		                        </div>
		                    </div>
                                </div>
		                <hr>
		                <div class="row">
		                    <div class="form-group col-md-2">
		                        <label>5. sor</label>
		                    </div>
		                    <div class="form-group col-md-5">
		                        <label>Bal</label>
		                    </div>
		                    <div class="form-group col-md-5">
		                        <label>Jobb</label>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-md-2">
		                        <div class="form-group">
		                            <input class="form-control"  type="checkbox" id="5ok" name="5ok" $s5ok>
		                        </div>
		                    </div>
		                    <div class="col-md-5">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" id="5l_title" name="5l_title" value="{$travelo['5l_title']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Alcím:</label>
		                            <input class="form-control"  type="text" id="5l_subtitle" name="5l_subtitle" value="{$travelo['5l_subtitle']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Leírás:</label>
		                            <textarea class="form-control" rows="2" id="5l_text" name="5l_text" form="travelo_nl_edit" >{$travelo['5l_text']}</textarea>
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="text" id="5l_pic" name="5l_pic" value="{$travelo['5l_pic']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" id="5l_link" name="5l_link" value="{$travelo['5l_link']}" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" id="5l_analytics" name="5l_analytics" value="{$travelo['5l_analytics']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" id="5l_price" name="5l_price" value="{$travelo['5l_price']}">
		                        </div>
		                    </div>
		                    <div class="col-md-5">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" id="5r_title" name="5r_title" value="{$travelo['5r_title']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Alcím:</label>
		                            <input class="form-control"  type="text" id="5r_subtitle" name="5r_subtitle" value="{$travelo['5r_subtitle']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Leírás:</label>
		                            <textarea class="form-control" rows="2" id="5r_text" name="5r_text" form="travelo_nl_edit" >{$travelo['5r_text']}</textarea>
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="text" id="5r_pic" name="5r_pic" value="{$travelo['5r_pic']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" id="5r_link" name="5r_link" value="{$travelo['5r_link']}" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" id="5r_analytics" name="5r_analytics" value="{$travelo['5r_analytics']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" id="5r_price" name="5r_price" value="{$travelo['5r_price']}">
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