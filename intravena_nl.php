<?php

function intravenaSendingDate($sdate) {
    echo <<<EOT
<!-- Dátum-->
<tr>
    <td style="padding-bottom: 5px; text-align:right; color:#9e9e9e; font-size:14px">$sdate</td>
</tr> 
<!-- Dátum vége-->
EOT;
}

function intravenaHead () {
    echo <<<EOT
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Intravéna hírlevél</title>
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

function intravenaTableStart() {
    echo <<<EOT
<tbody>
    <tr>
        <td width="100%" align="center">
            <table style="border: none; width: 660px;" border="0" cellspacing="0" cellpadding="0">
                <tbody>
EOT;
}

function intravenaNewsletterHeader($style, $travelo) {
    echo <<<EOT
    <!--Logo+fejléc-->
<tr>
    <td>
        <table  cellpadding="0" cellspacing="0" style="width:660px;margin:0 0 5px 0;">
            <tr>
                <td style={$style['travelo_header']}>{$style['travelo_logo']}</td>
                <td style="width:70%; background-color: #fff; padding: 0 10px 0 0;">
                    <table cellpadding="0" cellspacing="0" style="width:100%;">
                        <tr>
                            
                            <td valign="baseline" style={$style['travelo_menu']}>{$travelo['intravena_logo_img']}</td>
                            
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

function intravenaBigPic($travelo_bp, $travelo) {
    $none = "NONE";
    if (strcmp($travelo['bp_analytics'], $none) !== 0) {
        echo <<<EOT
<!--Nagykepes-->
<tr>
    <td style="background:#ffffff; margin-top:15px">
        <table  cellpadding="0" cellspacing="0" style="width:625px; margin:15px 20px 15px 15px;">
            <!--Kép-->
            <tr>
                <td align="center">{$travelo_bp['pic']}</td>
            </tr>
EOT;
        if (strcmp($travelo['bp_price'], $none) !== 0) {
            echo <<<EOT
            <tr>
               <td align="left" style="background:#f7f5ef; padding:10px 0 15px 5px; width:620px; margin-left:5px; font-size:16px; font-weight: bold;">
                Csomagár: {$travelo_bp['price']}
               </td>
            </tr>
EOT;
        }
        echo <<<EOT
                <tr>
                <td align="center" style="background:#f7f5ef">
                    <table cellpadding="0" cellspacing="0" style="padding: 5px; width:620px; margin-left:0px">
EOT;
        if (strcmp($travelo['bp_title'], $none) !== 0) {
            echo <<<EOT
                    <!--Cím-->
                        <tr>
                            <td style="">{$travelo_bp['title']}</td>
                        </tr>
EOT;
        }
        if (strcmp($travelo['bp_text'], $none) !== 0) {
            echo <<<EOT
                        <!--Szöveg-->
                        <tr>
                            <td style="padding-top:5px;">{$travelo_bp['text']}</td>
                        </tr>
EOT;
        }
        echo <<<EOT
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
<!--Nagykepes vege-->
EOT;
    }
}

function intravenaBigPicDiscount($travelo_bp) {
    global $website;
    echo <<<EOT
<!--Nagykepes-->
<tr>
    <td style="background:#ffffff; margin-top:15px">
        <table  cellpadding="0" cellspacing="0" style="width:625px;margin:15px 20px 15px 15px; page-break-inside: avoid;">
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

function intravenaSmallPic($smallpic,$l_price, $r_price) {
       $none = "NONE";
    echo <<<EOT
<!--smallPic--> 
<tr>
    <td style="background:#ffffff";>
        <table cellpadding="0" cellspacing="0" style="width:625px; margin:0 20px 20px 15px;" align="center">
            <tr>
                <!-- Bal-->
                <td style="width:305px; padding-top:10px;" align="center" valign="top">
                    <table cellpadding="0" cellspacing="0" align="center" style="width:305px;">
                        <!--Kép-->
                        <tr>
                            <td align="center">{$smallpic['l_pic']} </td>
                        </tr>
EOT;
 if (strcmp($l_price, $none)!==0) {                            
    if ($smallpic['l_discounted']==0) {
    echo <<<EOT
                        <tr>
                            <td align="left" style="background:#f7f5ef; padding:10px 0 5px 5px; width:305px; margin-left:5px; font-size:16px; font-weight: bold;">
                            Csomagár: <br> 
                            {$smallpic['l_price']}
                            </td>
                        </tr>
EOT;
    }
    else
    {
            echo <<<EOT
                         <tr>
                            <td align="left" style="background:#f7f5ef; padding:10px 0 5px 5px; width:305px; margin-left:5px; font-size:16px; font-weight: bold;">
                            Kedvezményes ár: <span style="padding: 2px 18px 2px 3px; margin-left:61px;">{$smallpic['l_discount']}</span> <br>
                            {$smallpic['l_price']} 
                            </td>
                        </tr>   
EOT;
        }
}
    echo <<<EOT
                        <tr>
                            <td align="center" style="padding: 0;width:305px;">
                                <table cellpadding="0" cellspacing="0" style="background:#f7f5ef;padding:5px 10px; width:305px;">
                                    <!--Cím-->
                                    <tr>
                                        <td>{$smallpic['l_title']}</td>
                                    </tr>
                                    <!--Alcím-->
                                    <tr>
                                        <td style="">{$smallpic['l_subtitle']}</td>
                                    </tr> 
                                    <!--Szöveg-->
                                    <tr>
                                        <td style="padding-top:4px;">{$smallpic['l_text']}</td>
                                    </tr>                        
                                </table>
                            </td>
                        </tr>
                    </table></td>
                <td style="width:15px;">&nbsp;</td>  
                <!--Jobb-->
                <td style="width:305px; padding-top:10px;" align="center" valign="top">
                    <table cellpadding="0" cellspacing="0" align="center" style="width:305px;">
                        <!--Kép-->
                        <tr>
                            <td align="center">{$smallpic['r_pic']}</td>
                        </tr>
EOT;
    if (strcmp($r_price, $none)!==0){                            
        if ($smallpic['r_discounted']==0) {
            echo <<<EOT
                        <tr>
                            <td align="left" style="background:#f7f5ef; padding:10px 0 5px 5px; width:305px; margin-left:5px; font-size:16px; font-weight: bold;">
                            Csomagár: <br>
                            {$smallpic['r_price']}
                            </td>
                        </tr>
EOT;
        }
        else {
            echo <<<EOT
                         <tr>
                            <td align="left" style="background:#f7f5ef; padding: 10px 0 5px 5px; width:305px; margin-left:5px; font-size:16px; font-weight: bold;">
                            Kedvezményes ár: <span style="padding: 2px 18px 2px 3px; margin-left:61px;">{$smallpic['r_discount']}</span><br>
                            {$smallpic['r_price']} 
                            </td>
                        </tr>   
EOT;
        }
    }
    echo <<<EOT
                        <tr>
                            <td align="center" style="padding: 0;width:305px;">
                               <table cellpadding="0" cellspacing="0" style="background:#f7f5ef;padding:5px 10px; width:305px;">
                                    <!--Cím-->
                                    <tr>
                                        <td>{$smallpic['r_title']}</td>
                                    </tr>
                                    <!--Alcím--> 
                                    <tr>
                                        <td>{$smallpic['r_subtitle']}</td>
                                    </tr>                                         
                                    <!--Szöveg-->
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
<!--smallPic End-->
EOT;
}

function intravenaLegalStatement() {
    echo <<<EOT
    <tr>
    <td valign="top">
        <table cellpadding="0" cellspacing="0" width="100%" style="margin-top: 20px; page-break-inside: avoid; background: #ffffff">
            <tr>
                <td style="padding: 20px; font-size:12px; color: #5d5d5d; text-align:center">
                    A Confhotel-Net Kft. és a jelen hírlevélben szereplő partnerei fenntartják az utazással kapcsolatos feltételek és árak módosításának jogát.
                </td>
            </tr>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin-top: 10px;">
            <tr>
                <td style="padding: 10px; font-size:12px; color: #5d5d5d; font-weight:bold; text-align:center">
                <img src="http://intravena.hu/public/whitelabels/intravena/images/f-intravena.png">
                </td>
                <td style="padding: 10px; font-size:12px; color: #5d5d5d; font-weight:bold; text-align:center">
                <img src="http://intravena.hu/public/whitelabels/intravena/images/travelo_logo.png">
                </td>
                <td style="padding: 10px; font-size:12px; color: #5d5d5d; font-weight:bold; text-align:center">
                <img src="http://intravena.hu/public/whitelabels/intravena/images/f-confhotel.png">
                </td>
            </tr>
        </table>
        <table cellpadding="0" cellspacing="0" width="100%" style="margin-top: 10px;">
            <tr>
                <td style="padding: 5px; font-size:12px; color: #5d5d5d; font-weight:bold; text-align:center">
                    Confhotel-Net Kft.  •  1033 Budapest, Flórián tér 1.  •  Tel.: +36 1 7001 002  •  Fax: +36 1 7002 502  •  E-mail: <a href="" style="color: #ec006e; text-decoration:none">info@travelo.hu</a>
                </td>
            </tr>
        </table>    
    </td>
</tr>

EOT;
}

function intravenaTableEnd() {
    echo <<<EOT
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
EOT;
}

function intravenaHtmlEnd() {
    echo <<<EOT
     </body>
	</html>
	
EOT;
}

function intravenaYourSite($site) {
    echo <<<EOT
    <tr>
    <td valign="top">
        <table cellpadding="0" cellspacing="0" width="100%" style="margin-top: 20px; page-break-inside: avoid; background: #ffffff">
            <tr>
                <td style="padding: 5px; font-size:13px; text-align:center; font-weight: bold;">
                    <a href="http://intravena.hu/$site" style="text-decoration: none; color: #010101">További kedvezményes ajánlatokért látogasson el a <span style="color: #ec006e;">http://intravena.hu/$site</span> oldalra!</a>
                </td>
            </tr>
        </table>
    </td>
    </tr>
EOT;
}

function intravenaWhatis($site, $text_head, $text) {
    if (($text_head!="")||($text!="")){
    echo <<<EOT
    <tr>
    <td valign="top">
        <table cellpadding="0" cellspacing="0" width="100%" style="margin-top: 20px; margin-bottom:20px; page-break-inside: avoid; background: #ffffff">
            <tr>
                <td style="padding: 10px 20px; font-size:12px; color: #5d5d5d; text-align:left; font-weight: normal;">
EOT;
    if ($text_head!=""){
        echo <<<EOT
        <span style="color:#010101; font-size:16px; font-weight:bold; text-decoration:none;">$text_head</span><br><br>
EOT;
    }
    if ($text!=""){
        echo <<<EOT
                    <span style="color:#010101; font-size:14px; text-decoration:none; text-align:left;">$text</span><br><br>
EOT;
    }
    echo <<<EOT
                    <a href="http://intravena.hu/$site" style="text-decoration: none; color: #010101; font-size:14px;">További kedvezményes ajánlatokért látogasson el a <span style="color: #ec006e;">http://intravena.hu/$site</span> oldalra!</a><br><br>
                    <span style="color:#010101; font-size:14px; font-weight:bold; text-decoration:none;">Travelo.hu csapata</span>    
                </td>
            </tr>
        </table>
    </td>
    </tr>
EOT;
}
}

function intravenaFormHeader($text){
    echo <<<EOT
    <div class="container">

	            <div class="row">
	            <div class="col-md-12">
	                <!--h3 class="page-header"><i class="fa fa-envelope"></i> Hírlevél készítés</h3-->

					<!-- Panel2 eleje -->

                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-envelope fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="small"><img src="images/intravena_logo.png"></div>
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

function intravenaInputFormBase () {
    echo <<<EOT
    <form action="intravena_inputDb.php" method="post" id="travelo_nl_edit" accept-charset="UTF-8" enctype="multipart/form-data" data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                <!-- Alapadatok panel + az analitycs panel row-ja -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-danger">
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
                                    <input class="form-control" type="url" name="folder" placeholder="Pl.: http://stuff.szallas.travelo.hu/hirlevel/intravena/20140101" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!" data-bv-uri-message="A formátum nem megfelelő!">

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <!--analitycs kodok panel-->
                    <div class="col-md-6">
                        <div class="panel panel-danger">
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

function intravenaInputFormMenu () {
    echo <<<EOT
    <!--menu panel eleje-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-danger ">
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

function intravenaInputFormBigPic () {
    echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-danger">
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
		                            <textarea class="form-control" rows="6" cols="83" name="bp_text" form="travelo_nl_edit" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!"></textarea>
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="file" name="bp_pic"  data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
		                    </div>
		                    <div class="col-md-6">
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="bp_analytics" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" name="bp_price" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" name="bp_orig_price">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" name="bp_discount">
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

function intravenaInputFormWelcome () {
    echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-danger">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-9 text-left">
		                        <div class="big">Köszöntő szöveg</div>
		                    </div>
		                </div>
		            </div>
		            <div class="panel-footer">
		                <div class="row">
		                    <div class="col-md-12">
		                        <div class="form-group">
		                            <label class="help-block-form">Megszólítás:</label>
		                            <input class="form-control"  type="text" name="welcome_head">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Köszöntő:</label>
		                            <textarea class="form-control" rows="6" cols="83" name="welcome" form="travelo_nl_edit"></textarea>
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

function intravenaInputFormBigPic2 () {
    echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-danger">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-9 text-left">
		                        <div class="big">Nagyképes 2
                                            <input class="form-control input-lg tech" type="checkbox" name="bp2_ok"></div>
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
		                            <textarea class="form-control" rows="6" cols="83" name="bp2_text" form="travelo_nl_edit"></textarea>
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

function intravenaInputFormSmallPic () {
   echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-danger">
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
                                        <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="1l_orig_price" name="1l_orig_price">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="1l_discount" name="1l_discount">
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
                                        <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="1r_orig_price" name="1r_orig_price">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="1r_discount" name="1r_discount">
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
                                         <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="2l_orig_price" name="2l_orig_price">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="2l_discount" name="2l_discount">
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
                                         <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="2r_orig_price" name="2r_orig_price">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="2r_discount" name="2r_discount">
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
                                         <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="3l_orig_price" name="3l_orig_price">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="3l_discount" name="3l_discount">
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
                                         <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="3r_orig_price" name="3r_orig_price">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="3r_discount" name="3r_discount">
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
                                         <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="4l_orig_price" name="4l_orig_price">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="4l_discount" name="4l_discount">
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
                                         <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="4r_orig_price" name="4r_orig_price">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="4r_discount" name="4r_discount">
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
                                         <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="5l_orig_price" name="5l_orig_price">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="5l_discount" name="5l_discount">
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
                                         <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="5r_orig_price" name="5r_orig_price">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="5r_discount" name="5r_discount">
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

function intravenaFormFoot ($text) {
    echo <<<EOT
    <!--Submit-->
                <div class="row">
                    <div class="col-md-12">
                        <div id="submit">
                            <input class="btn btn-danger btn-lg" id="submit2" type="submit" value="$text">
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </form>
        </div>
        <!-- /.container -->
EOT;
}

function intravenaEditFormBase($travelo, $id) {
    echo <<<EOT
		<form action="intravena_updateDb.php" method="post" id="travelo_nl_edit" accept-charset="UTF-8" enctype="multipart/form-data" data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
		data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
		data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                <input type="hidden" name="id" value="$id"> 
		<!-- Alapadatok panel + az analitycs panel row-ja -->
						<div class="row">
						    <div class="col-md-6">
						        <div class="panel panel-danger">
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
						        <div class="panel panel-danger">
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

function intravenaEditFormMenu ($travelo) {
    echo <<<EOT
    <!--menu panel eleje-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-danger ">
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

function intravenaEditFormWelcome ($travelo) {
    echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-danger">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-9 text-left">
		                        <div class="big">Köszöntő szöveg</div>
		                    </div>
		                </div>
		            </div>
		            <div class="panel-footer">
		                <div class="row">
		                    <div class="col-md-12">
		                        <div class="form-group">
		                            <label class="help-block-form">Megszólítás:</label>
		                            <input class="form-control"  type="text" name="welcome_head" value="{$travelo['welcome_head']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Köszöntő:</label>
		                            <textarea class="form-control" rows="6" cols="83" name="welcome" form="travelo_nl_edit">{$travelo['welcome']}</textarea>
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

function intravenaEditFormBigPic ($travelo) {
       echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-danger">
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
		                            <textarea class="form-control" rows="6" cols="83" name="bp_text" form="travelo_nl_edit" data-bv-notempty="true" data-bv-notempty-message="A mező kitöltése kötelező!">{$travelo['bp_text']}</textarea>
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

function intravenaEditFormBigPic2 ($travelo) {
    $bp2ok="";
    if ($travelo['bp2_ok'] != NULL) {
        $bp2ok = "checked";
    }
       echo <<<EOT
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel panel-danger">
		            <div class="panel-heading">
		                <div class="row">
		                    <div class="col-xs-9 text-left">
		                        <div class="big">Nagyképes 2
                                            <input class="form-control input-lg tech" type="checkbox" name="bp2_ok" $bp2ok></div>
		                    </div>
		                </div>
		            </div>
		            <div class="panel-footer">
		                <div class="row">
		                    <div class="col-md-6">
		                        <div class="form-group">
		                            <label class="help-block-form">Cím:</label>
		                            <input class="form-control"  type="text" name="bp2_title" value="{$travelo['bp2_title']}" >
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Link:</label>
		                            <input class="form-control"  type="url" name="bp2_link" value="{$travelo['bp2_link']}" data-bv-uri-message="A formátum nem megfelelő!">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Leírás:</label>
		                            <textarea class="form-control" rows="6" cols="83" name="bp2_text" form="travelo_nl_edit">{$travelo['bp2_text']}</textarea>
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Képválasztás:</label>
		                            <input class="form-control"  type="text" name="bp2_pic" value="{$travelo['bp2_pic']}">
		                        </div>
		                    </div>
		                    <div class="col-md-6">
		                        <div class="form-group">
		                            <label class="help-block-form">Analitycs:</label>
		                            <input class="form-control"  type="text" name="bp2_analytics" value="{$travelo['bp2_analytics']}">
		                        </div>
		                        <div class="form-group">
		                            <label class="help-block-form">Legjobb ár:</label>
		                            <input class="form-control"  type="text" name="bp2_price" value="{$travelo['bp2_price']}">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" name="bp2_orig_price" value="{$travelo['bp2_orig_price']}">
		                        </div>
                                        <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" name="bp2_discount" value="{$travelo['bp2_discount']}">
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

function intravenaEditFormSmallPic($travelo) {
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
		        <div class="panel panel-danger">
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
                                        <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="1l_orig_price" name="1l_orig_price" value="{$travelo['1l_orig_price']}">
		                        </div>
                                         <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="1l_discount" name="1l_discount" value="{$travelo['1l_discount']}">
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
                                         <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="1r_orig_price" name="1r_orig_price" value="{$travelo['1r_orig_price']}">
		                        </div>
                                         <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="1r_discount" name="1r_discount" value="{$travelo['1r_discount']}">
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
                                         <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="2l_orig_price" name="2l_orig_price" value="{$travelo['2l_orig_price']}">
		                        </div>
                                         <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="2l_discount" name="2l_discount" value="{$travelo['2l_discount']}">
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
                                         <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="2r_orig_price" name="2r_orig_price" value="{$travelo['2r_orig_price']}">
		                        </div>
                                         <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="2r_discount" name="2r_discount" value="{$travelo['2r_discount']}">
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
                                         <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="3l_orig_price" name="3l_orig_price" value="{$travelo['3l_orig_price']}">
		                        </div>
                                         <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="3l_discount" name="3l_discount" value="{$travelo['3l_discount']}">
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
                                         <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="3r_orig_price" name="3r_orig_price" value="{$travelo['3r_orig_price']}">
		                        </div>
                                         <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="3r_discount" name="3r_discount" value="{$travelo['3r_discount']}">
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
                                         <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="4l_orig_price" name="4l_orig_price" value="{$travelo['4l_orig_price']}">
		                        </div>
                                         <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="4l_discount" name="4l_discount" value="{$travelo['4l_discount']}">
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
                                         <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="4r_orig_price" name="4r_orig_price" value="{$travelo['4r_orig_price']}">
		                        </div>
                                         <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="4r_discount" name="4r_discount" value="{$travelo['4r_discount']}">
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
                                         <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="5l_orig_price" name="5l_orig_price" value="{$travelo['5l_orig_price']}">
		                        </div>
                                         <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="5l_discount" name="5l_discount" value="{$travelo['5l_discount']}">
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
                                         <div class="form-group">
		                            <label class="help-block-form">Eredeti ár:</label>
		                            <input class="form-control"  type="text" id="5r_orig_price" name="5r_orig_price" value="{$travelo['5r_orig_price']}">
		                        </div>
                                         <div class="form-group">
		                            <label class="help-block-form">Kedvezmény:</label>
		                            <input class="form-control"  type="text" id="5r_discount" name="5r_discount" value="{$travelo['5r_discount']}">
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