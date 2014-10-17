<?php
require_once 'config.php';

function thematicBanner ($banner) {
    
    echo <<<EOT
<!--Banner-->
<table cellpadding="0" cellspacing="0" align="center" style="width:305px;">
    <tr>
        <td style="width:305px;" align="center" valign="top">
            <table  cellpadding="0" cellspacing="0" align="center">
                <tr>
                    <td align="center">{$banner}</td>
                </tr>
            </table> 
        </td>
    </tr>
</table>
EOT;
}

function thematicTurpan ($turpan) {
    global $newsletter;
    echo <<<EOT
<table cellpadding="0" cellspacing="0" align="center" style="width:305px;">
    <tr>
        <td align="center" style="padding: 0;width:305px;">
            <table cellpadding="0" cellspacing="0" align="center">
                <tr>
                    <td align="center">
                        <img src="{$newsletter['picfolder']}/utazasihir-top.png" border="0" style="display: block;" />
                    </td>
                </tr>
                <tr>
                    <td style="background: #ffffff;border-left:2px solid #e5e5e5;border-right:2px solid #e5e5e5;width: 255px">
                        <ul style="margin: 5px 0 5px 20px; padding:10px;">
                            {$turpan['1']}
                            {$turpan['2']}
                            {$turpan['3']}
                            {$turpan['4']}
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="border-left:2px solid #e5e5e5;border-right:2px solid #e5e5e5;">
                        <img src="{$newsletter['picfolder']}/turizmuscom-logo.png" />
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <img src="{$newsletter['picfolder']}/utazasihir-bottom.png" />
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
EOT;
}

function thematicTextAd ($textad) {
    echo <<<EOT
    <!--Szöveges-->
                    <table width="300" cellspacing="0" cellpadding="0" align="center" style="width:300px;margin-left:5px;margin-top:13px;">
                        <tr>
                            <td style="padding: 20px;background: #f8f5e5; border:1px solid #e5e5e5">
                                <table width="100%" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td style="padding:0 0 10px 0">
                                            {$textad['pic']}
                                            {$textad['title']}
                                         </td>
                                    </tr>

                                    <tr>
                                        <td>{$textad['text']}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>                                                                             
                    </table>
EOT;
}

function thematicSendingDate($sdate) {
    echo <<<EOT
<!-- Dátum-->
<tr>
    <td style="padding-bottom: 5px; text-align:right; color:#9e9e9e; font-size:14px">$sdate</td>
</tr> 
<!-- Dátum vége-->
EOT;
}

function thematicHead () {
    echo <<<EOT
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Travelo - Heti Esszencia</title>
        <style type='text/css'> @font-face {
                font-family: "OpenSans";
                src: local('¢'), url(http://szallas.travelo.hu/public/css/fonts/OpenSans-Regular.ttf) format('truetype');
                font-weight: normal;
                font-style: normal;
            }
        </style>
    </head>
EOT;
}

function thematicTableStart() {
    echo <<<EOT
<tbody>
    <tr>
        <td width="100%" align="center">
            <table style="border: none; width: 660px;" border="0" cellspacing="0" cellpadding="0">
                <tbody>
EOT;
}

function thematicNewsletterHeader($style, $travelo_menu) {
    echo <<<EOT
    <!--Logo+fejléc-->
<tr>
    <td>
        <table  cellpadding="0" cellspacing="0" style="width:660px;margin:0 0 5px 0;">
            <tr>
                <td style={$style['travelo_header']}>{$style['travelo_logo']}</td>
                <td style="width:70%;">
                    <table cellpadding="0" cellspacing="0" style="width:100%;">
                        <tr>
                            <td valign="baseline" style={$style['travelo_menu_left']}>&nbsp;</td>
                            <td valign="baseline" style={$style['travelo_menu']}>{$travelo_menu['1']}</td>
                            <td valign="baseline" style={$style['travelo_menu']}>{$travelo_menu['2']}</td>
                            <td valign="baseline" style={$style['travelo_menu']}>{$travelo_menu['3']}</td>
                            <td valign="baseline" style={$style['travelo_menu']}>{$travelo_menu['4']}</td>
                            <td valign="baseline" style={$style['travelo_menu']}>{$travelo_menu['5']}</td>
                            <td valign="baseline" style={$style['travelo_menu_right']}>&nbsp;</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
<!--Logo+fejléc vége-->
EOT;
}

function thematicBigPic($travelo_bp) {
    echo <<<EOT
<!--Nagykepes-->
<tr>
    <td style="background:#ffffff; margin-top:15px">
        <table  cellpadding="0" cellspacing="0" style="width:625px; margin:15px 20px 15px 15px;">
            <!--Kép-->
            <tr>
                <td align="center">{$travelo_bp['pic']}</td>
            </tr>
            <tr>
               <td align="left" style="background:#f7f5ef; padding:10px 0 15px 5px; width:620px; margin-left:5px; font-size:16px; font-weight: bold;">
                Csomagár: {$travelo_bp['price']}
               </td>
            </tr>
            <tr>
                <td align="center" style="background:#f7f5ef">
                    <table cellpadding="0" cellspacing="0" style="padding: 5px; width:620px; margin-left:0px">
                        <!--Cím-->
                        <tr>
                            <td style="">{$travelo_bp['title']}</td>
                        </tr>
                        <!--Szöveg-->
                        <tr>
                            <td style="padding-top:5px;">{$travelo_bp['text']}</td>
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

function thematicBigPicDiscount($travelo_bp) {
    global $website;
    echo <<<EOT
<!--Nagykepes-->
<tr>
    <td style="background:#ffffff; margin-top:15px">
        <table  cellpadding="0" cellspacing="0" style="width:625px;margin:15px 20px 15px 15px;">
            <!--Kép-->
            <tr>
                <td align="center">{$travelo_bp['pic']}</td>
            </tr>
            <tr>
                <td align="left" style="background:#fff;padding:10px 10px;width:620px;margin-left:5px; font-size:16px; font-weight: bold;">
            Kedvezményes ár: <span style="padding: 2px 18px 2px 3px; margin-left:375px;">{$travelo_bp['discount']}</span>
                <br> 
EOT;
                if ($travelo_bp['orig_price'] != "")  {
                    echo  $travelo_bp['orig_price'].' helyett';
                }
    echo <<<EOT
                {$travelo_bp['price']} 
            </tr>
            <tr>
                <td align="center" style="">
                    <table cellpadding="0" cellspacing="0" style="background:#f7f5ef;padding:10px 10px;width:620px;margin-left:5px;">
                        <!--Cím-->
                        <tr>
                            <td style="">{$travelo_bp['title']}</td>
                        </tr>
                        <!--Szöveg-->
                        <tr>
                            <td style="padding-top:5px;">{$travelo_bp['text']}</td>
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
function thematicArticles($picfolder, $travelo_article) {
    echo <<<EOT
<!--Cikkek-->
<tr>
    <td style="background:#ffffff">
        <table cellpadding="0" cellspacing="0" style="margin-bottom:20px;">
            <tr>
                <td align="center" style="background:#ffffff">
                    <img src="$picfolder/legfrissebb-top.png" border="0" style="display: block;" />
                </td>
            </tr>
            <tr>
                <td style="background: #ffffff">
                    <table width="620" cellpadding="0" cellspacing="0" style="border-left:2px solid #e5e5e5;border-right:2px solid #e5e5e5; margin: 0 20px;width:620px;">
                        <tr>
                            <td style="width:300px;" valign="top">
                                <table style="width:300px;">
                                    <tr>
                                        <td style="padding: 0px 10px">
                                            {$travelo_article['h_title']}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 10px">
                                            {$travelo_article['h_date']}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0px 10px">
                                            {$travelo_article['h_text']}
                                        </td>
                                    </tr>                        
                                </table>
                            </td>
                            <td style="width:20px;"></td>  
                            <td style="width:300px;" valign="top">
                                <table cellpadding="0" cellspacing="0" border="0" style="width:300px;padding-bottom:10px;">
                                    <tr>
                                        <td>{$travelo_article['1_title']}</td>
                                    </tr>
                                    <tr>
                                        <td>{$travelo_article['1_date']}</td>
                                    </tr>
                                </table>
                                <table cellpadding="0" cellspacing="0" border="0" style="width:300px;padding-bottom:10px;">
                                    <tr>
                                        <td>{$travelo_article['2_title']}</td>
                                    </tr>
                                    <tr>
                                        <td>{$travelo_article['2_date']}</td>
                                    </tr>
                                </table>
                                <table cellpadding="0" cellspacing="0" border="0" style="width:300px;padding-bottom:10px;">
                                    <tr>
                                        <td>{$travelo_article['3_title']}</td>
                                    </tr>
                                    <tr>
                                        <td>{$travelo_article['3_date']}</td>
                                    </tr>
                                </table>
                                <table cellpadding="0" cellspacing="0" border="0" style="width:300px;padding-bottom:10px;">
                                    <tr>
                                        <td>{$travelo_article['4_title']}</td>
                                    </tr>
                                    <tr>
                                        <td>{$travelo_article['4_date']}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="center" style="background:#ffffff">
                    <img src="$picfolder/legfrissebb-bottom.png" />
                </td>
            </tr>                                
        </table>
    </td>
</tr>            
<!--Cikkek vege-->
EOT;
}

function thematicDoubleBanner($banner1, $banner2) {
    echo <<<EOT
    <!--Dupla banner-->
<tr>
    <td style="background:#ffffff">
        <table cellpadding="0" cellspacing="0" style="width:625px;margin:0 20px 20px 15px;" align="center">
            <tr>
                <td style="width:305px;" align="center" valign="top">
EOT;
                thematicBanner($banner1);
echo <<<EOT
                </td>
                <td style="width:20px;">&nbsp;</td>  
                <td style="width:305px;" align="center" valign="top">
EOT;
                thematicBanner($banner2);
echo <<<EOT
                </td>                  
            </tr>
        </table>
    </td>
</tr> 
<!--Dupla banner vege-->
EOT;
}

function thematicBannerAndText($banner, $textad) {
    echo <<<EOT
    <!--Banner + szoveges-->
<tr>
    <td style="background:#ffffff">
        <table cellpadding="0" cellspacing="0" style="width:625px;margin:0 20px 20px 15px;" align="center">
            <tr>
                <td style="width:305px;" align="center" valign="top">
EOT;
                 thematicBanner($banner);
echo <<<EOT
                </td>
                <td style="width:20px;">&nbsp;</td>  
                <td style="width:305px;" align="center" valign="top">
EOT;
                thematicTextAd($textad);                                          
echo <<<EOT
                </td>                  
            </tr>
        </table>
    </td>
</tr> 
<!--Banner + szoveges vege-->
EOT;
}

function thematicDoubleText($textad1, $textad2) {
    echo <<<EOT
    <!--Dupla szoveges-->
<tr>
    <td style="background:#ffffff">
        <table cellpadding="0" cellspacing="0" style="width:625px;margin:0 20px 20px 15px;" align="center">
            <tr>
                <td style="width:305px;" align="center" valign="top">
EOT;
                thematicTextAd($textad1);                                          
echo <<<EOT
                </td>
                <td style="width:20px;">&nbsp;</td>  
                <td style="width:305px;" align="center" valign="top">
EOT;
                thematicTextAd($textad2);                                          
echo <<<EOT
                </td>                  
            </tr>
        </table>
    </td>
</tr> 
<!--Dupla szoveges vege-->
EOT;
}

function thematicTurPanAndBanner($turpan, $banner) {
    echo <<<EOT
    <!--Turpan + banner-->
<tr>
    <td align="center" style="background:#ffffff">
        <table cellpadding="0" cellspacing="0" style="width:625px;margin:0 20px 20px 15px;" align="center">
            <tr>
                <!--Turpan-->                                       
                <td style="width:305px;" align="center" valign="top">
EOT;
                thematicTurpan($turpan);
echo <<<EOT
                </td>
                <!--Turpan vége-->
                <td style="width:20px;">&nbsp;</td>
                <!--Banner-->
                <td style="width:305px;" align="center" valign="top">
EOT;
                 thematicBanner($banner);
echo <<<EOT
                </td>
            </tr>
        </table>
    </td>
</tr>                        
<!--Turpan+Banner vege-->
EOT;
}

function thematic_BannerAndText($banner, $textad) {
    echo <<<EOT
    <!--Banner + szoveges-->
<tr>
    <td style="background:#ffffff">
        <table cellpadding="0" cellspacing="0" style="width:625px;margin:0 20px 20px 15px;" align="center">
            <tr>
                <td style="width:305px;" align="center" valign="top">
EOT;
                thematicBanner($banner);
echo <<<EOT
                </td>
                <td style="width:20px;">&nbsp;</td>  
                <td style="width:305px;" align="center" valign="top">
EOT;
                thematicTextAd($textad);                                          
echo <<<EOT
                </td>                  
            </tr>
        </table>
    </td>
</tr> 
<!--Banner + szoveges vege-->
EOT;
}

function thematicTurPanAndText($turpan, $textad) {
    echo <<<EOT
        <!--Turpan + szoveges-->
<tr>
    <td align="center" style="background:#ffffff">
        <table cellpadding="0" cellspacing="0" style="width:625px;margin:0 20px 20px 15px;" align="center">
            <tr>
                <!--Turpan-->                                       
                <td style="width:305px;" align="center" valign="top">
EOT;
                thematicTurpan($turpan);
echo <<<EOT
                </td>
                <!--Turpan vége-->
                <td style="width:20px;">&nbsp;</td>  
                <td style="width:305px;" align="center" valign="top">
EOT;
                thematicTextAd($textad);                                          
echo <<<EOT
                </td>                  
            </tr>
        </table>
    </td>
</tr> 
<!--Turpan + szoveges vege-->
EOT;
}

function thematicBottomMenu($picfolder) {
    echo <<<EOT
    <tr>
        <td align="center" style="padding: 25px 0; background:#ffffff">
            <img usemap="#bottommenuimagemap" src="$picfolder/bottommenu.png" border="0" />
         </td>
     </tr>
EOT;
}

function thematicLegalStatement() {
    echo <<<EOT
    <tr>
    <td valign="top">
        <table cellpadding="0" cellspacing="0" width="100%" style="margin-top: 20px; background: #ffffff">
            <tr>
                <td style="padding: 20px; font-size:12px; color: #5d5d5d; text-align:center">
                    Ezt az emailt azért kaptad, mert Indapass regisztrációddal hozzájárultál a Travelo és a CEMP csoport tartalmaiból összeállított hírlevél fogadásához. Ha szeretnél leiratkozni, <a href="%Link:Unsubscribe%" style="color: #ec006e; text-decoration:none">itt</a> teheted meg.
                    <br /><br />
                    A Confhotel-Net Kft. és a jelen hírlevélben szereplő partnerei fenntartják az utazással kapcsolatos feltételek és árak módosításának jogát.
                </td>
            </tr>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin-top: 20px;">
            <tr>
                <td style="padding: 20px; font-size:12px; color: #5d5d5d; font-weight:bold; text-align:center">
                    Confhotel-Net Kft.  •  1033 Budapest, Flórián tér 1.  •  Tel.: +36 1 7001 002  •  Fax: +36 1 7002 502  •  E-mail: <a href="" style="color: #ec006e; text-decoration:none">info@travelo.hu</a>
                </td>
            </tr>
        </table>            
    </td>
</tr>
EOT;
}

function thematicTableEnd() {
    echo <<<EOT
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
EOT;
}

function thematicBottomMenuMap() {
    echo <<<EOT
    <map name="bottommenuimagemap" id="bottommenuimagemap">
    <area shape="rect" coords="58,17,201,47" href="http://repulojegy.travelo.hu/" alt="rep" target="_blank" />
    <area shape="rect" coords="248,14,412,48" href="http://autoberles.travelo.hu/" target="_blank" />
    <area shape="rect" coords="464,11,614,47" href="http://biztositas.travelo.hu/" target="_blank" />
</map>
EOT;
}

function thematicHtmlEnd() {
    echo <<<EOT
     </body>
	</html>
	
EOT;
}

function thematicFormHeader ($text) {
    echo <<<EOT
    <div class="container">
            
            <div class="row">
            <div class="col-md-12">
                <!--h3 class="page-header"><i class="fa fa-envelope"></i> Hírlevél készítés</h3-->

                
                    <!-- Panel1 eleje -->
                    
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-envelope fa-5x"></i>
                                    </div><!--./col-->
                                    <div class="col-xs-9 text-right">
                                        <div class="small"><img src="images/travelo_logo.png"></div>
                                        <div>$text</div>
                                    </div><!--./col-->
                                </div><!--./row-->
                            </div><!--./heading-->

                        </div><!--./primary-->
                    
                </div><!--./col-->
            </div><!--./row-->
            <!-- Panel1 vege --> 
EOT;
}

function thematicInputFormBase() {
    echo <<<EOT
		<form action="travelo_nl_inputDb.php" method="post" id="thematic_nl_edit" accept-charset="UTF-8" enctype="multipart/form-data" data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
		data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
		data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
		<!-- Alapadatok panel + az analitycs panel row-ja -->
						<div class="row">
						    <div class="col-md-6">
						        <div class="panel panel-primary">
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
						        <div class="panel panel-primary">
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

function thematicInputFormMenu () {
    echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-primary ">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-9 text-left">
		                        <div class="big">Menü</div>
		                    </div>
		                </div>
		            </div>
		
		            <div class="panel-footer">
		                <div class="row">
		                    <div class="col-md-1"></div>
		                    <div class="form-group col-md-2">
		                        <label>1. hely</label>
		                    </div>

		                    <div class="form-group col-md-2">
		                        <label>2. hely</label>
		                    </div>

		                    <div class="form-group col-md-2">
		                        <label>3. hely</label>
		                    </div>


		                    <div class="form-group col-md-2">
		                        <label>4. hely</label>
		                    </div>


		                    <div class="form-group col-md-2">
		                        <label>5. hely</label>
		                    </div>
		                    <div class="form-group col-md-1"></div>
		                </div>

		                <div class="row">
		                    <div class="col-md-1"></div>
		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Felirat</label>
		                        <input class="form-control"  type="text" name="menu1" value="közel" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>

		                    <div class="form-group col-md-2">

		                        <label class="help-block-form">Felirat</label>
		                        <input class="form-control"  type="text" id="menu2" name="menu2" value="távol" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>

		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Felirat</label>
		                        <input class="form-control"  type="text" id="menu3" name="menu3" value="cucc" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>


		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Felirat</label>
		                        <input class="form-control"  type="text" id="menu4" name="menu4" value="hirek" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>


		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Felirat</label>
		                        <input class="form-control"  type="text" id="menu5" name="menu5" value="akciók" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>
		                    <div class="form-group col-md-1"></div>
		                </div>
		                <div class="row">
		                    <div class="form-group col-md-1"></div>

		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Link:</label>
		                        <input class="form-control"  type="url" id="menu1_link" name="menu1_link" value="http://travelo.hu/kozel" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
		                    </div>

		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Link:</label>
		                        <input class="form-control"  type="url" id="menu2_link" name="menu2_link" value="http://travelo.hu/tavol" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
		                    </div>

		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Link:</label>
		                        <input class="form-control"  type="url" id="menu3_link" name="menu3_link" value="http://travelo.hu/cucc" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
		                    </div>


		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Link:</label>
		                        <input class="form-control"  type="url" id="menu4_link" name="menu4_link" value="http://travelo.hu/hirek" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
		                    </div>


		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Link:</label>
		                        <input class="form-control"  type="url" id="menu5_link" name="menu5_link" value="http://szallas.travelo.hu/akciok" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
		                    </div>
		                    <div class="form-group col-md-1"></div>
		                </div>
		                <div class="row">
		                    <div class="form-group col-md-1"></div>
		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Analitycs:</label>
		                        <input class="form-control"  type="text" id="menu1_analytics" name="menu1_analytics" value="menu_kozel" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>

		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Analitycs:</label>
		                        <input class="form-control"  type="text" id="menu2_analytics" name="menu2_analytics" value="menu_tavol" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>

		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Analitycs:</label>
		                        <input class="form-control"  type="text" id="menu3_analytics" name="menu3_analytics" value="menu_cucc" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>


		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Analitycs:</label>
		                        <input class="form-control"  type="text" id="menu4_analytics" name="menu4_analytics" value="menu_hirek" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>


		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Analitycs:</label>
		                        <input class="form-control"  type="text" id="menu5_analytics" name="menu5_analytics" value="menu_akciok" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>				
		                    <div class="form-group col-md-1"></div>
		                </div>	

		                <div class="clearfix"></div>
		            </div>
		        </div>
		    </div>
		</div>
EOT;
}

function thematicInputFormBigPic1 () {
    echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-primary">
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
		                            <input class="form-control"  type="text" name="bp1_title" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" name="bp1_link"  data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Leírás:</label>
		                            <textarea class="form-control" rows="2" cols="83" name="bp1_text" form="travelo_nl_edit" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!"></textarea>
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="file" name="bp1_pic"  data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
		                    </div>
		                    <div class="col-md-6">
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="bp1_analytics" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" name="bp1_price" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" name="bp1_orig_price">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" name="bp1_discount">
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

function thematicInputFormBigPic2 () {
    echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-primary">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-9 text-left">
		                        <div class="big">Nagyképes - 
                                            <span class="form-group form-inline">
                                            <label class="help-block-checkb">2</label>
                                            <input class="form-control input-lg tech" type="checkbox" name="bp2_ok"></span>
                                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="panel-footer">
		                <div class="row">
		                    <div class="col-md-6">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" name="bp2_title">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" name="bp2_link" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Leírás:</label>
		                            <textarea class="form-control" rows="2" cols="83" name="bp2_text" form="travelo_nl_edit"></textarea>
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="file" name="bp2_pic">
		                        </div>
		                    </div>
		                    <div class="col-md-6">
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="bp2_analytics">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" name="bp2_price">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" name="bp2_orig_price">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" name="bp2_discount">
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

function thematicInputFormBigPic3 () {
    echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-primary">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-9 text-left">
		                        <div class="big">Nagyképes - 
                                            <span class="form-group form-inline">
                                            <label class="help-block-checkb">3</label>
                                            <input class="form-control input-lg tech" type="checkbox" name="bp3_ok"></span>
                                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="panel-footer">
		                <div class="row">
		                    <div class="col-md-6">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" name="bp3_title">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" name="bp3_link" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Leírás:</label>
		                            <textarea class="form-control" rows="2" cols="83" name="bp3_text" form="travelo_nl_edit"></textarea>
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="file" name="bp3_pic">
		                        </div>
		                    </div>
		                    <div class="col-md-6">
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="bp3_analytics">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" name="bp3_price">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" name="bp3_orig_price">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" name="bp3_discount">
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

function thematicInputFormArticle() {
    echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-primary">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-9 text-left">
		                        <div class="big">Cikkajánló</div>
		                    </div>
		                </div>
		            </div>

		            <div class="panel-footer">
		                <div class="row">
		                    <div class="col-md-2">
		                        <div class="form-group">
		                            <label>Cikkek</label>
		                            <input class="form-control"  type="checkbox" name="article_ok">
		                        </div>

		                    </div>
		                    <div class="col-md-5">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" name="harticle_title">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Dátum:</label>
		                            <input class="form-control"  type="text" name="harticle_date">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" name="harticle_link"  data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="harticle_analytics">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Szöveg:</label>
		                            <textarea class="form-control" rows="4" name="harticle_text" form="travelo_nl_edit"></textarea>
		                        </div>
		                    </div>
		                    <div class="col-md-5">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" name="article_1_title">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Dátum:</label>
		                            <input class="form-control"  type="text" name="article_1_date">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" name="article_1_link" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="article_1_analytics">
		                        </div>
		                        <hr>
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" name="article_2_title">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Dátum:</label>
		                            <input class="form-control"  type="text" name="article_2_date">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" name="article_2_link" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="article_2_analytics">
		                        </div>            
		                        <hr>
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" name="article_3_title">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Dátum:</label>
		                            <input class="form-control"  type="text" name="article_3_date">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" name="article_3_link" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="article_3_analytics">
		                        </div>
		                        <hr>
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" name="article_4_title">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Dátum:</label>
		                            <input class="form-control"  type="text" name="article_4_date">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" name="article_4_link" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="article_4_analytics">
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

function thematicInputFormAd1 () {
    echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <h4 class="page-header">Hirdetések 1</h4>

		        <div class="row"> 
		            <div class="col-md-12">
		                <div class="alert alert-info" style="min-height: 53px;">
		                    <div class="form-group col-md-3">
		                        <label for="null2" class="radio-inline">
		                            <input type="radio" id="null2" name="advertisements2" value="null">Nincs hirdetés</label></div>
		                    <div class="form-group col-md-3">
		                        <label for="b_b" class="radio-inline">
		                            <input type="radio" id="b_b" name="advertisements2" value="b_b">Banner1 + Banner2</label></div>
		                    <div class="form-group col-md-3">
		                        <label for="b2_sz" class="radio-inline">                                
		                            <input type="radio" id="b2_sz" name="advertisements2" value="b2_sz">Banner1 + Szöveges1</label></div>
		                    <div class="form-group col-md-3">
		                        <label for="sz_sz" class="radio-inline"><input type="radio" id="sz_sz" name="advertisements2" value="sz_sz">Szöveges1 + Szöveges2</label>
		                    </div>
		                </div>

		                <div class="panel panel-primary">
		                    <div class="panel-heading">
		                        <div class="row">
		                            <div class="col-xs-9 text-left">
		                                <div class="big">Szöveges</div>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="panel-footer">
		                        <div class="row">
		                            <div class="form-group col-md-6">
		                                <label>Szöveges 1</label>
		                            </div>
		                            <div class="form-group-col-md-6">
		                                <label><img src="images/spacer-2x1.png" width="15px">Szöveges 2</label>
		                            </div>
		                        </div>



		                        <div class="row">                  
		                            <div class="col-md-6">
		                                <div class="form-group">
		                                    <label class="help-block-form">Kép:</label>
		                                    <input class="form-control"  type="file" name="textad2_pic">
		                                </div>
		                                <div class="form-group">
		                                    <label class="help-block-form">Cím:</label>
		                                    <input class="form-control"  type="text" name="textad2_title">
		                                </div>
		                                <div class="form-group">
		                                    <label class="help-block-form">Szöveg:</label>
		                                    <textarea class="form-control" rows="5" name="textad2_text" form="travelo_nl_edit" ></textarea>
		                                </div>
		                                <div class="form-group">
		                                    <label class="help-block-form">Link:</label>
		                                    <input class="form-control"  type="url" name="textad2_link" data-bv-uri-message="A formátum nem megfelelő!">
		                                </div>
		                                <div class="form-group">
		                                    <label class="help-block-form">Analitycs:</label>
		                                    <input class="form-control"  type="text" name="textad2_analytics">
		                                </div>
		                            </div>
		                            <div class="col-md-6">
		                                <div class="form-group">
		                                    <label class="help-block-form">Kép:</label>
		                                    <input class="form-control"  type="file" name="textad2_2_pic">
		                                </div>
		                                <div class="form-group">
		                                    <label class="help-block-form">Cím:</label>
		                                    <input class="form-control"  type="text" name="textad2_2_title">
		                                </div>
		                                <div class="form-group">
		                                    <label class="help-block-form">Szöveg:</label>
		                                    <textarea class="form-control" rows="5" name="textad2_2_text" form="travelo_nl_edit" ></textarea>
		                                </div>
		                                <div class="form-group">
		                                    <label class="help-block-form">Link:</label>
		                                    <input class="form-control"  type="url" name="textad2_2_link" data-bv-uri-message="A formátum nem megfelelő!">
		                                </div>
		                                <div class="form-group">
		                                    <label class="help-block-form">Analitycs:</label>
		                                    <input class="form-control"  type="text" name="textad2_2_analytics">
		                                </div>
		                            </div>
		                        </div>
		                        <div class="clearfix"></div>
		                    </div>
		                </div>
		            </div>
		        </div>
<!-- Travelo szoveges vege -->
<!-- Travelo bannerek eleje -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9 text-left">
                        <div class="big">Bannerek</div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Banner 1</label>
                    </div>
                    <div class="form-group-col-md-6">
                        <label><img src="images/spacer-2x1.png" width="15px">Banner 2</label>
                    </div>
                </div>
                <div class="row">	
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="help-block-form">Kép:</label>
                            <input class="form-control"  type="file" name="banner2_1_pic">
                        </div>
                        <div class="form-group">
                            <label class="help-block-form">Link:</label>
                            <input class="form-control"  type="url" name="banner2_1_link" data-bv-uri-message="A formátum nem megfelelő!">
                        </div>
                        <div class="form-group">
                            <label class="help-block-form">Analitycs:</label>
                            <input class="form-control"  type="text" name="banner2_1_analytics">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="help-block-form">Kép:</label>
                            <input class="form-control"  type="file" name="banner2_2_pic">
                        </div>
                        <div class="form-group">
                            <label class="help-block-form">Link:</label>
                            <input class="form-control"  type="url" name="banner2_2_link" data-bv-uri-message="A formátum nem megfelelő!">
                        </div>
                        <div class="form-group">
                            <label class="help-block-form">Analitycs:</label>
                            <input class="form-control"  type="text" name="banner2_2_analytics">
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

function thematicInputFormAd2 () {
	echo <<<EOT
	<div class="row">
	    <div class="col-md-12">
	        <h4 class="page-header">Hirdetések 2</h4>

	        <div class="row">

	            <div class="col-md-12">
	                <div class="alert alert-info" style="min-height: 53px;">
	                    <div class="form-group col-md-3">
	                        <label for="null2" class="radio-inline">
	                            <input type="radio" id="null" name="advertisements" value="null">Nincs hirdetés</label></div>
	                    <div class="form-group col-md-3">
	                        <label for="t_b" class="radio-inline">
	                            <input type="radio" id="t_b" name="advertisements" value="t_b">Turpan + Banner</label></div>
	                    <div class="form-group col-md-3">
	                        <label for="b_sz" class="radio-inline">                                
	                            <input type="radio" id="b_sz" name="advertisements" value="b_sz" >Banner + Szöveges</label></div>
	                    <div class="form-group col-md-3">
	                        <label for="t_sz" class="radio-inline"><input type="radio" id="t_sz" name="advertisements" value="t_sz">Turpan + Szöveges</label>
	                    </div>
	                </div>
	                <div class="panel panel-primary">
	                    <div class="panel-heading">
	                        <div class="row">
	                            <div class="col-xs-9 text-left">
	                                <div class="big">Szöveges - Banner - Turpan</div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="panel-footer">
	                        <div class="row">
	                            <div class="col-md-4"><label>Szöveges</label></div>
	                            <div class="col-md-4"><label>Banner</label></div>
	                            <div class="col-md-4"><label>Turpan</label></div>
	                        </div>	
	                        <div class="row">	
	                            <div class="col-md-4">
	                                <div class="form-group">
	                                    <label class="help-block-form">Kép:</label>
	                                    <input class="form-control"  type="file" name="textad_pic">
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Cím:</label>
	                                    <input class="form-control"  type="text" name="textad_title">
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Szöveg:</label>
	                                    <textarea class="form-control" rows="5"  name="textad_text" form="travelo_nl_edit"></textarea>
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Link:</label>
	                                    <input class="form-control"  type="url" name="textad_link" data-bv-uri-message="A formátum nem megfelelő!">
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Analitycs:</label>
	                                    <input class="form-control"  type="text" name="textad_analytics">
	                                </div>
	                            </div>
	                            <div class="col-md-4">
	                                <div class="form-group">
	                                    <label class="help-block-form">Kép:</label>
	                                    <input class="form-control"  type="file" name="banner_pic">
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Link:</label>
	                                    <input class="form-control"  type="url" name="banner_link" data-bv-uri-message="A formátum nem megfelelő!">
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Analitycs:</label>
	                                    <input class="form-control"  type="text" name="banner_analytics">
	                                </div>
	                            </div>
	                            <div class="col-md-4">
	                                <div class="form-group">
	                                    <label class="help-block-form">Turpan:</label>
	                                    <input class="form-control"  type="text" name="turpan_1_title">
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Link:</label>
	                                    <input class="form-control"  type="url"  name="turpan_1_link" data-bv-uri-message="A formátum nem megfelelő!">
	                                </div>
	                                <hr>
	                                <div class="form-group">
	                                    <label class="help-block-form">Cím:</label>
	                                    <input class="form-control"  type="text" name="turpan_2_title">
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Link:</label>
	                                    <input class="form-control"  type="url"  name="turpan_2_link" data-bv-uri-message="A formátum nem megfelelő!">
	                                </div>
	                                <hr>
	                                <div class="form-group">
	                                    <label class="help-block-form">Cím:</label>
	                                    <input class="form-control"  type="text" name="turpan_3_title">
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Link:</label>
	                                    <input class="form-control"  type="url"  name="turpan_3_link" data-bv-uri-message="A formátum nem megfelelő!">
	                                </div>
	                                <hr>
	                                <div class="form-group">
	                                    <label class="help-block-form">Cím:</label>
	                                    <input class="form-control"  type="text" name="turpan_4_title">
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Link:</label>
	                                    <input class="form-control"  type="url"  name="turpan_4_link" data-bv-uri-message="A formátum nem megfelelő!">
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

function thematicFormFoot ($text) {
    echo <<<EOT
    <div class="row">
        <div class="col-md-12">
            <div id="submit">
                <input class="btn btn-primary btn-lg" id="submit2" type="submit" value="$text">
            </div>
        </div>
    </div>
</form> 
EOT;
}

function thematicEditFormBase($travelo, $id) {
    echo <<<EOT
		<form action="thematic_nl_updateDb.php" method="post" id="travelo_nl_edit" accept-charset="UTF-8" enctype="multipart/form-data" data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
		data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
		data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                <input type="hidden" name="id" value="$id"> 
		<!-- Alapadatok panel + az analitycs panel row-ja -->
						<div class="row">
						    <div class="col-md-6">
						        <div class="panel panel-primary">
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
						        <div class="panel panel-primary">
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
function thematicEditFormMenu ($travelo) {
    echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-primary ">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-9 text-left">
		                        <div class="big">Menü</div>
		                    </div>
		                </div>
		            </div>
		
		            <div class="panel-footer">
		                <div class="row">
		                    <div class="col-md-1"></div>
		                    <div class="form-group col-md-2">
		                        <label>1. hely</label>
		                    </div>

		                    <div class="form-group col-md-2">
		                        <label>2. hely</label>
		                    </div>

		                    <div class="form-group col-md-2">
		                        <label>3. hely</label>
		                    </div>


		                    <div class="form-group col-md-2">
		                        <label>4. hely</label>
		                    </div>


		                    <div class="form-group col-md-2">
		                        <label>5. hely</label>
		                    </div>
		                    <div class="form-group col-md-1"></div>
		                </div>

		                <div class="row">
		                    <div class="col-md-1"></div>
		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Felirat</label>
		                        <input class="form-control"  type="text" name="menu1" value="{$travelo['menu1']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>

		                    <div class="form-group col-md-2">

		                        <label class="help-block-form">Felirat</label>
		                        <input class="form-control"  type="text" id="menu2" name="menu2" value="{$travelo['menu2']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>

		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Felirat</label>
		                        <input class="form-control"  type="text" id="menu3" name="menu3" value="{$travelo['menu3']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>


		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Felirat</label>
		                        <input class="form-control"  type="text" id="menu4" name="menu4" value="{$travelo['menu4']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>


		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Felirat</label>
		                        <input class="form-control"  type="text" id="menu5" name="menu5" value="{$travelo['menu5']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>
		                    <div class="form-group col-md-1"></div>
		                </div>
		                <div class="row">
		                    <div class="form-group col-md-1"></div>

		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Link:</label>
		                        <input class="form-control"  type="url" id="menu1_link" name="menu1_link" value="{$travelo['menu1_link']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
		                    </div>

		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Link:</label>
		                        <input class="form-control"  type="url" id="menu2_link" name="menu2_link" value="{$travelo['menu2_link']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
		                    </div>

		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Link:</label>
		                        <input class="form-control"  type="url" id="menu3_link" name="menu3_link" value="{$travelo['menu3_link']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
		                    </div>


		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Link:</label>
		                        <input class="form-control"  type="url" id="menu4_link" name="menu4_link" value="{$travelo['menu4_link']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
		                    </div>


		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Link:</label>
		                        <input class="form-control"  type="url" id="menu5_link" name="menu5_link" value="{$travelo['menu5_link']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
		                    </div>
		                    <div class="form-group col-md-1"></div>
		                </div>
		                <div class="row">
		                    <div class="form-group col-md-1"></div>
		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Analitycs:</label>
		                        <input class="form-control"  type="text" id="menu1_analytics" name="menu1_analytics" value="{$travelo['menu1_analytics']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>

		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Analitycs:</label>
		                        <input class="form-control"  type="text" id="menu2_analytics" name="menu2_analytics" value="{$travelo['menu2_analytics']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>

		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Analitycs:</label>
		                        <input class="form-control"  type="text" id="menu3_analytics" name="menu3_analytics" value="{$travelo['menu3_analytics']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>


		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Analitycs:</label>
		                        <input class="form-control"  type="text" id="menu4_analytics" name="menu4_analytics" value="{$travelo['menu4_analytics']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>


		                    <div class="form-group col-md-2">
		                        <label class="help-block-form">Analitycs:</label>
		                        <input class="form-control"  type="text" id="menu5_analytics" name="menu5_analytics" value="{$travelo['menu5_analytics']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                    </div>				
		                    <div class="form-group col-md-1"></div>
		                </div>	

		                <div class="clearfix"></div>
		            </div>
		        </div>
		    </div>
		</div>
EOT;
}

function thematicEditFormBigPic1 ($travelo) {
    echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-primary">
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
                                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="text" name="bp_pic" value="{$travelo['bp_pic']}"  data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
		                    </div>
		                    <div class="col-md-6">
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="bp_analytics" value="{$travelo['bp_analytics']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" name="bp_price" value="{$travelo['bp_price']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" name="bp_orig_price" value="{$travelo['bp_orig_price']}">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" name="bp_discount" value="{$travelo['bp_discount']}">
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


        
function thematicEditFormBigPic2 ($travelo) {
    $bigpic = "";
    if ($travelo['bp2_ok'] != NULL) {
        $bigpic = "checked";
    }
    echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-primary">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-9 text-left">
		                        <div class="big">Nagyképes - 
                                            <span class="form-group form-inline">
                                            <label class="help-block-checkb">2</label>
                                            <input class="form-control input-lg tech" type="checkbox" name="bp2_ok" $bigpic></span>
                                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="panel-footer">
		                <div class="row">
		                    <div class="col-md-6">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" name="bp_title" value="{$travelo['bp2_title']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" name="bp_link" value="{$travelo['bp2_link']}"  data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Leírás:</label>
		                            <textarea class="form-control" rows="2" cols="83" name="bp_text" form="travelo_nl_edit" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">{$travelo['bp2_text']}</textarea>
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="text" name="bp_pic" value="{$travelo['bp2_pic']}"  data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
		                    </div>
		                    <div class="col-md-6">
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="bp_analytics" value="{$travelo['bp2_analytics']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" name="bp_price" value="{$travelo['bp2_price']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" name="bp_orig_price" value="{$travelo['bp2_orig_price']}">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" name="bp_discount" value="{$travelo['bp2_discount']}">
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

function thematicEditFormBigPic3 ($travelo) {
    $bigpic = "";
    if ($travelo['bp3_ok'] != NULL) {
        $bigpic = "checked";
    }
    echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-primary">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-9 text-left">
		                        <div class="big">Nagyképes - 
                                            <span class="form-group form-inline">
                                            <label class="help-block-checkb">2</label>
                                            <input class="form-control input-lg tech" type="checkbox" name="bp3_ok" $bigpic></span>
                                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="panel-footer">
		                <div class="row">
		                    <div class="col-md-6">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" name="bp_title" value="{$travelo['bp3_title']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" name="bp_link" value="{$travelo['bp3_link']}"  data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Leírás:</label>
		                            <textarea class="form-control" rows="2" cols="83" name="bp_text" form="travelo_nl_edit" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">{$travelo['bp3_text']}</textarea>
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="text" name="bp_pic" value="{$travelo['bp3_pic']}"  data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
		                    </div>
		                    <div class="col-md-6">
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="bp_analytics" value="{$travelo['bp3_analytics']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" name="bp_price" value="{$travelo['bp3_price']}" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" name="bp_orig_price" value="{$travelo['bp3_orig_price']}">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" name="bp_discount" value="{$travelo['bp3_discount']}">
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

function thematicEditFormArticle($travelo) {
    $article_ok = "";
    if ($travelo['article_ok'] != NULL) {
        $article_ok = "checked";
    }

    echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-primary">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-9 text-left">
		                        <div class="big">Cikkajánló</div>
		                    </div>
		                </div>
		            </div>

		            <div class="panel-footer">
		                <div class="row">
		                    <div class="col-md-2">
		                        <div class="form-group">
		                            <label>Cikkek</label>
		                            <input class="form-control"  type="checkbox" name="article_ok" $article_ok>
		                        </div>

		                    </div>
		                    <div class="col-md-5">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" name="harticle_title" value="{$travelo['harticle_title']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Dátum:</label>
		                            <input class="form-control"  type="text" name="harticle_date" value="{$travelo['harticle_date']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" name="harticle_link" value="{$travelo['harticle_link']}" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="harticle_analytics" value="{$travelo['harticle_analytics']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Szöveg:</label>
		                            <textarea class="form-control" rows="4" name="harticle_text" form="travelo_nl_edit">{$travelo['harticle_text']}</textarea>
		                        </div>
		                    </div>
		                    <div class="col-md-5">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" name="article_1_title" value="{$travelo['article_1_title']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Dátum:</label>
		                            <input class="form-control"  type="text" name="article_1_date" value="{$travelo['article_1_date']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" name="article_1_link" value="{$travelo['article_1_link']}" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="article_1_analytics" value="{$travelo['article_1_analytics']}">
		                        </div>
		                        <hr>
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" name="article_2_title" value="{$travelo['article_2_title']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Dátum:</label>
		                            <input class="form-control"  type="text" name="article_2_date" value="{$travelo['article_2_date']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" name="article_2_link" value="{$travelo['article_2_link']}" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="article_2_analytics" value="{$travelo['article_2_analytics']}">
		                        </div>            
		                        <hr>
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" name="article_3_title" value="{$travelo['article_3_title']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Dátum:</label>
		                            <input class="form-control"  type="text" name="article_3_date" value="{$travelo['article_3_date']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" name="article_3_link" value="{$travelo['article_3_link']}" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="article_3_analytics" value="{$travelo['article_3_analytics']}">
		                        </div>
		                        <hr>
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" name="article_4_title" value="{$travelo['article_4_title']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Dátum:</label>
		                            <input class="form-control"  type="text" name="article_4_date" value="{$travelo['article_4_date']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" name="article_4_link" value="{$travelo['article_4_link']}" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="article_4_analytics" value="{$travelo['article_4_analytics']}">
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

function thematicEditFormAd1 ($travelo) {
    $b_b = $b2_sz = $sz_sz = "";
    if ($travelo['ad2_ok'] == "b_b") {
        $b_b = 'checked="checked"';
    } elseif ($travelo['ad2_ok'] == "b2_sz") {
        $b2_sz = 'checked="checked"';
    } elseif ($travelo['ad2_ok'] == "sz_sz") {
        $sz_sz = 'checked="checked"';
    }
    echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <h4 class="page-header">Hirdetések 1</h4>

		        <div class="row"> 
		            <div class="col-md-12">
		                <div class="alert alert-info" style="min-height: 53px;">
		                    <div class="form-group col-md-3">
		                        <label for="null2" class="radio-inline">
		                            <input type="radio" id="null2" name="advertisements2" value="null">Nincs hirdetés</label></div>
		                    <div class="form-group col-md-3">
		                        <label for="b_b" class="radio-inline">
		                            <input type="radio" id="b_b" name="advertisements2" value="b_b" $b_b>Banner1 + Banner2</label></div>
		                    <div class="form-group col-md-3">
		                        <label for="b2_sz" class="radio-inline">                                
		                            <input type="radio" id="b2_sz" name="advertisements2" value="b2_sz" $b2_sz>Banner1 + Szöveges1</label></div>
		                    <div class="form-group col-md-3">
		                        <label for="sz_sz" class="radio-inline">
                                            <input type="radio" id="sz_sz" name="advertisements2" value="sz_sz" $sz_sz>Szöveges1 + Szöveges2</label>
		                    </div>
		                </div>

		                <div class="panel panel-primary">
		                    <div class="panel-heading">
		                        <div class="row">
		                            <div class="col-xs-9 text-left">
		                                <div class="big">Szöveges</div>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="panel-footer">
		                        <div class="row">
		                            <div class="form-group col-md-6">
		                                <label>Szöveges 1</label>
		                            </div>
		                            <div class="form-group-col-md-6">
		                                <label><img src="images/spacer-2x1.png" width="15px">Szöveges 2</label>
		                            </div>
		                        </div>



		                        <div class="row">                  
		                            <div class="col-md-6">
		                                <div class="form-group">
		                                    <label class="help-block-form">Kép:</label>
		                                    <input class="form-control"  type="text" name="textad2_pic" value="{$travelo['textad2_pic']}">
		                                </div>
		                                <div class="form-group">
		                                    <label class="help-block-form">Cím:</label>
		                                    <input class="form-control"  type="text" name="textad2_title" value="{$travelo['textad2_title']}">
		                                </div>
		                                <div class="form-group">
		                                    <label class="help-block-form">Szöveg:</label>
		                                    <textarea class="form-control" rows="5" name="textad2_text" form="travelo_nl_edit" >{$travelo['textad2_text']}</textarea>
		                                </div>
		                                <div class="form-group">
		                                    <label class="help-block-form">Link:</label>
		                                    <input class="form-control"  type="url" name="textad2_link" value="{$travelo['textad2_link']}" data-bv-uri-message="A formátum nem megfelelő!">
		                                </div>
		                                <div class="form-group">
		                                    <label class="help-block-form">Analitycs:</label>
		                                    <input class="form-control"  type="text" name="textad2_analytics" value="{$travelo['textad2_analytics']}">
		                                </div>
		                            </div>
		                            <div class="col-md-6">
		                                <div class="form-group">
		                                    <label class="help-block-form">Kép:</label>
		                                    <input class="form-control"  type="text" name="textad2_2_pic" value="{$travelo['textad2_2_pic']}">
		                                </div>
		                                <div class="form-group">
		                                    <label class="help-block-form">Cím:</label>
		                                    <input class="form-control"  type="text" name="textad2_2_title" value="{$travelo['textad2_2_title']}">
		                                </div>
		                                <div class="form-group">
		                                    <label class="help-block-form">Szöveg:</label>
		                                    <textarea class="form-control" rows="5" name="textad2_2_text" form="travelo_nl_edit" >{$travelo['textad2_2_text']}</textarea>
		                                </div>
		                                <div class="form-group">
		                                    <label class="help-block-form">Link:</label>
		                                    <input class="form-control"  type="url" name="textad2_2_link"  value="{$travelo['textad2_2_link']}" data-bv-uri-message="A formátum nem megfelelő!">
		                                </div>
		                                <div class="form-group">
		                                    <label class="help-block-form">Analitycs:</label>
		                                    <input class="form-control"  type="text" name="textad2_2_analytics"  value="{$travelo['textad2_2_analytics']}">
		                                </div>
		                            </div>
		                        </div>
		                        <div class="clearfix"></div>
		                    </div>
		                </div>
		            </div>
		        </div>
<!-- Travelo szoveges vege -->
<!-- Travelo bannerek eleje -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9 text-left">
                        <div class="big">Bannerek</div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Banner 1</label>
                    </div>
                    <div class="form-group-col-md-6">
                        <label><img src="images/spacer-2x1.png" width="15px">Banner 2</label>
                    </div>
                </div>
                <div class="row">	
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="help-block-form">Kép:</label>
                            <input class="form-control"  type="text" name="banner2_1_pic"  value="{$travelo['banner2_1_pic']}">
                        </div>
                        <div class="form-group">
                            <label class="help-block-form">Link:</label>
                            <input class="form-control"  type="url" name="banner2_1_link" value="{$travelo['banner2_1_link']}" data-bv-uri-message="A formátum nem megfelelő!">
                        </div>
                        <div class="form-group">
                            <label class="help-block-form">Analitycs:</label>
                            <input class="form-control"  type="text" name="banner2_1_analytics" value="{$travelo['banner2_1_analytics']}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="help-block-form">Kép:</label>
                            <input class="form-control"  type="text" name="banner2_2_pic" value="{$travelo['banner2_2_pic']}">
                        </div>
                        <div class="form-group">
                            <label class="help-block-form">Link:</label>
                            <input class="form-control"  type="url" name="banner2_2_link" value="{$travelo['banner2_2_link']}" data-bv-uri-message="A formátum nem megfelelő!">
                        </div>
                        <div class="form-group">
                            <label class="help-block-form">Analitycs:</label>
                            <input class="form-control"  type="text" name="banner2_2_analytics" value="{$travelo['banner2_2_analytics']}">
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

function thematicEditFormAd2 ($travelo) {
     $t_b = $b_sz = $t_sz = "";
    if ($travelo['ad_ok'] == "t_b") {
        $t_b = 'checked="checked"';
    } elseif ($travelo['ad_ok'] == "b_sz") {
        $b_sz = 'checked="checked"';
    } elseif ($travelo['ad_ok'] == "t_sz") {
        $t_sz = 'checked="checked"';
    }
    
    if ($travelo['ad2_ok'] == "b_b") {
        $b_b = 'checked="checked"';
    } elseif ($travelo['ad2_ok'] == "b2_sz") {
        $b2_sz = 'checked="checked"';
    } elseif ($travelo['ad2_ok'] == "sz_sz") {
        $sz_sz = 'checked="checked"';
    }
	echo <<<EOT
	<div class="row">
	    <div class="col-md-12">
	        <h4 class="page-header">Hirdetések 2</h4>

	        <div class="row">

	            <div class="col-md-12">
	                <div class="alert alert-info" style="min-height: 53px;">
	                    <div class="form-group col-md-3">
	                        <label for="null2" class="radio-inline">
	                            <input type="radio" id="null" name="advertisements" value="null">Nincs hirdetés</label></div>
	                    <div class="form-group col-md-3">
	                        <label for="t_b" class="radio-inline">
	                            <input type="radio" id="t_b" name="advertisements" value="t_b" $t_b>Turpan + Banner</label></div>
	                    <div class="form-group col-md-3">
	                        <label for="b_sz" class="radio-inline">                                
	                            <input type="radio" id="b_sz" name="advertisements" value="b_sz" $b_sz>Banner + Szöveges</label></div>
	                    <div class="form-group col-md-3">
	                        <label for="t_sz" class="radio-inline">
                                    <input type="radio" id="t_sz" name="advertisements" value="t_sz" $t_sz>Turpan + Szöveges</label>
	                    </div>
	                </div>
	                <div class="panel panel-primary">
	                    <div class="panel-heading">
	                        <div class="row">
	                            <div class="col-xs-9 text-left">
	                                <div class="big">Szöveges - Banner - Turpan</div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="panel-footer">
	                        <div class="row">
	                            <div class="col-md-4"><label>Szöveges</label></div>
	                            <div class="col-md-4"><label>Banner</label></div>
	                            <div class="col-md-4"><label>Turpan</label></div>
	                        </div>	
	                        <div class="row">	
	                            <div class="col-md-4">
	                                <div class="form-group">
	                                    <label class="help-block-form">Kép:</label>
	                                    <input class="form-control"  type="text" name="textad_pic" value="{$travelo['textad_pic']}">
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Cím:</label>
	                                    <input class="form-control"  type="text" name="textad_title" value="{$travelo['textad_title']}">
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Szöveg:</label>
	                                    <textarea class="form-control" rows="5"  name="textad_text" form="travelo_nl_edit">{$travelo['textad_text']}</textarea>
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Link:</label>
	                                    <input class="form-control"  type="url" name="textad_link" value="{$travelo['textad_link']}" data-bv-uri-message="A formátum nem megfelelő!">
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Analitycs:</label>
	                                    <input class="form-control"  type="text" name="textad_analytics" value="{$travelo['textad_analytics']}">
	                                </div>
	                            </div>
	                            <div class="col-md-4">
	                                <div class="form-group">
	                                    <label class="help-block-form">Kép:</label>
	                                    <input class="form-control"  type="text" name="banner_pic" value="{$travelo['banner_pic']}">
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Link:</label>
	                                    <input class="form-control"  type="url" name="banner_link" value="{$travelo['banner_link']}" data-bv-uri-message="A formátum nem megfelelő!">
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Analitycs:</label>
	                                    <input class="form-control"  type="text" name="banner_analytics" value="{$travelo['banner_analytics']}">
	                                </div>
	                            </div>
	                            <div class="col-md-4">
	                                <div class="form-group">
	                                    <label class="help-block-form">Turpan:</label>
	                                    <input class="form-control"  type="text" name="turpan_1_title" value="{$travelo['turpan_1_title']}">
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Link:</label>
	                                    <input class="form-control"  type="url"  name="turpan_1_link"  value="{$travelo['turpan_1_link']}" data-bv-uri-message="A formátum nem megfelelő!">
	                                </div>
	                                <hr>
	                               <div class="form-group">
	                                    <label class="help-block-form">Turpan:</label>
	                                    <input class="form-control"  type="text" name="turpan_2_title" value="{$travelo['turpan_2_title']}">
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Link:</label>
	                                    <input class="form-control"  type="url"  name="turpan_2_link"  value="{$travelo['turpan_2_link']}" data-bv-uri-message="A formátum nem megfelelő!">
	                                </div>
	                                <hr>
	                                <div class="form-group">
	                                    <label class="help-block-form">Turpan:</label>
	                                    <input class="form-control"  type="text" name="turpan_3_title" value="{$travelo['turpan_3_title']}">
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Link:</label>
	                                    <input class="form-control"  type="url"  name="turpan_3_link"  value="{$travelo['turpan_3_link']}" data-bv-uri-message="A formátum nem megfelelő!">
	                                </div>
	                                <hr>
	                                <div class="form-group">
	                                    <label class="help-block-form">Turpan:</label>
	                                    <input class="form-control"  type="text" name="turpan_4_title" value="{$travelo['turpan_4_title']}">
	                                </div>
	                                <div class="form-group">
	                                    <label class="help-block-form">Link:</label>
	                                    <input class="form-control"  type="url"  name="turpan_4_link"  value="{$travelo['turpan_4_link']}" data-bv-uri-message="A formátum nem megfelelő!">
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
