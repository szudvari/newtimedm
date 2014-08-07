<?php
require_once 'config.php';

function traveloBanner ($banner) {
    
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
</table>'
EOT;
}

function traveloTurpan ($turpan) {
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

function traveloTextAd ($textad) {
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

function traveloSendingDate($sdate) {
    echo <<<EOT
<!-- Dátum-->
<tr>
    <td style="padding-bottom: 5px; text-align:right; color:#9e9e9e; font-size:14px">$sdate</td>
</tr> 
<!-- Dátum vége-->
EOT;
}

function traveloHead () {
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
    <body>
EOT;
}

function traveloTableStart() {
    echo <<<EOT
<tbody>
    <tr>
        <td width="100%" align="center">
            <table style="border: none; width: 660px;" border="0" cellspacing="0" cellpadding="0">
                <tbody>
EOT;
}

function traveloNewsletterHeader($style, $travelo_menu) {
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

function traveloBigPic($travelo_bp) {
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

function traveloSmallPic($smallpic) {
    echo <<<EOT
<!--smallPic--> 
<tr>
    <td style="background:#ffffff">
        <table cellpadding="0" cellspacing="0" style="width:625px;margin:0 20px 20px 15px;" align="center">
            <tr>
                <!-- Bal-->
                <td style="width:305px;" align="center" valign="top">
                    <table cellpadding="0" cellspacing="0" align="center" style="width:305px;">
                        <!--Kép-->
                        <tr>
                            <td align="center">{$smallpic['l_pic']}</td>
                        </tr>
                        <tr>
                            <td align="center" style="padding: 0;width:305px;">
                                <table cellpadding="0" cellspacing="0" style="background:#f7f5ef;padding:5px 10px;margin-left:5px;width:300px;">
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
                <td style="width:305px;" align="center" valign="top">
                    <table cellpadding="0" cellspacing="0" align="center" style="width:305px;">
                        <!--Kép-->
                        <tr>
                            <td align="center">{$smallpic['r_pic']}</td>
                        </tr>
                        <tr>
                            <td align="center" style="padding: 0;width:305px;">
                                <table cellpadding="0" cellspacing="0" style="background:#f7f5ef;padding:5px 10px;margin-left:5px;width:300px;">
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

function traveloMostRecent1c($picfolder, $travelo_mostrecent) {
    echo <<<EOT
<!--Leggyakoribb keresesek 1 hasabos-->
<tr>
    <td style="background:#ffffff">
        <table cellpadding="0" cellspacing="0" style="margin-bottom: 20px;">
            <tr>
                <td align="center" style="background:#ffffff;">
                    <img src="$picfolder/leggyakoribb-top.png" border="0" style="display: block;" />
                </td>
            </tr>
            <tr>
                <td style="background: #ffffff">
                    <table width="620px" cellpadding="0" cellspacing="0" style="border-left:2px solid #e5e5e5;border-right:2px solid #e5e5e5; margin: 0 20px">
                        <tr>
                            <td style="width:100%" valign="top">
                                {$travelo_mostrecent['1']}
                                {$travelo_mostrecent['2']}
                                {$travelo_mostrecent['3']}
                                {$travelo_mostrecent['4']}
                                {$travelo_mostrecent['5']}
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
<!--Leggyakoribb keresések 1 hasabos vege-->
EOT;
}

function traveloMostRecent2c($picfolder, $travelo_mostrecent2) {
    echo <<<EOT
<!--Leggyakoribb (2 hasabos)--> 
<tr>
    <td style="background:#ffffff">
        <table cellpadding="0" cellspacing="0" style="margin-bottom: 20px;">
            <tr>
                <td align="center" style="background:#ffffff;">
                    <img src="$picfolder/leggyakoribb-top.png" border="0" style="display: block;" />
                </td>
            </tr>
            <tr>
                <td style="background: #ffffff">
                    <table width="620px" cellpadding="0" cellspacing="0" style="border-left:2px solid #e5e5e5;border-right:2px solid #e5e5e5; margin: 0 20px">
                        <tr>
                            <td style="width:50%" valign="top">
                            {$travelo_mostrecent2['1l']}
                            {$travelo_mostrecent2['2l']}
                            {$travelo_mostrecent2['3l']}
                            {$travelo_mostrecent2['4l']}
                            {$travelo_mostrecent2['5l']}
                                
                                </td>
                            <td style="width:50%" valign="top">
                            {$travelo_mostrecent2['1r']}
                            {$travelo_mostrecent2['2r']}
                            {$travelo_mostrecent2['3r']}
                            {$travelo_mostrecent2['4r']}
                            {$travelo_mostrecent2['5r']}
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
<!--Leggyakoribb (2 hasabos) vege-->
EOT;
}

function traveloArticles($picfolder, $travelo_article) {
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

function traveloDoubleBanner($banner1, $banner2) {
    echo <<<EOT
    <!--Dupla banner-->
<tr>
    <td style="background:#ffffff">
        <table cellpadding="0" cellspacing="0" style="width:625px;margin:0 20px 20px 15px;" align="center">
            <tr>
                <td style="width:305px;" align="center" valign="top">
EOT;
                traveloBanner($banner1);
echo <<<EOT
                </td>
                <td style="width:20px;">&nbsp;</td>  
                <td style="width:305px;" align="center" valign="top">
EOT;
                traveloBanner($banner2);
echo <<<EOT
                </td>                  
            </tr>
        </table>
    </td>
</tr> 
<!--Dupla banner vege-->
EOT;
}

function traveloBannerAndText($banner, $textad) {
    echo <<<EOT
    <!--Banner + szoveges-->
<tr>
    <td style="background:#ffffff">
        <table cellpadding="0" cellspacing="0" style="width:625px;margin:0 20px 20px 15px;" align="center">
            <tr>
                <td style="width:305px;" align="center" valign="top">
EOT;
                 traveloBanner($banner);
echo <<<EOT
                </td>
                <td style="width:20px;">&nbsp;</td>  
                <td style="width:305px;" align="center" valign="top">
EOT;
                traveloTextAd($textad);                                          
echo <<<EOT
                </td>                  
            </tr>
        </table>
    </td>
</tr> 
<!--Banner + szoveges vege-->
EOT;
}

function traveloDoubleText($textad1, $textad2) {
    echo <<<EOT
    <!--Dupla szoveges-->
<tr>
    <td style="background:#ffffff">
        <table cellpadding="0" cellspacing="0" style="width:625px;margin:0 20px 20px 15px;" align="center">
            <tr>
                <td style="width:305px;" align="center" valign="top">
EOT;
                traveloTextAd($textad1);                                          
echo <<<EOT
                </td>
                <td style="width:20px;">&nbsp;</td>  
                <td style="width:305px;" align="center" valign="top">
EOT;
                traveloTextAd($textad2);                                          
echo <<<EOT
                </td>                  
            </tr>
        </table>
    </td>
</tr> 
<!--Dupla szoveges vege-->
EOT;
}

function traveloTurPanAndBanner($turpan, $banner) {
    echo <<<EOT
    <!--Turpan + banner-->
<tr>
    <td align="center" style="background:#ffffff">
        <table cellpadding="0" cellspacing="0" style="width:625px;margin:0 20px 20px 15px;" align="center">
            <tr>
                <!--Turpan-->                                       
                <td style="width:305px;" align="center" valign="top">
EOT;
                traveloTurpan($turpan);
echo <<<EOT
                </td>
                <!--Turpan vége-->
                <td style="width:20px;">&nbsp;</td>
                <!--Banner-->
                <td style="width:305px;" align="center" valign="top">
EOT;
                 traveloBanner($banner);
echo <<<EOT
                </td>
            </tr>
        </table>
    </td>
</tr>                        
<!--Turpan+Banner vege-->
EOT;
}

function bannerAndText($banner, $textad) {
    echo <<<EOT
    <!--Banner + szoveges-->
<tr>
    <td style="background:#ffffff">
        <table cellpadding="0" cellspacing="0" style="width:625px;margin:0 20px 20px 15px;" align="center">
            <tr>
                <td style="width:305px;" align="center" valign="top">
EOT;
                 traveloBanner($banner);
echo <<<EOT
                </td>
                <td style="width:20px;">&nbsp;</td>  
                <td style="width:305px;" align="center" valign="top">
EOT;
                traveloTextAd($textad);                                          
echo <<<EOT
                </td>                  
            </tr>
        </table>
    </td>
</tr> 
<!--Banner + szoveges vege-->
EOT;
}

function traveloTurPanAndText($turpan, $textad) {
    echo <<<EOT
        <!--Turpan + szoveges-->
<tr>
    <td align="center" style="background:#ffffff">
        <table cellpadding="0" cellspacing="0" style="width:625px;margin:0 20px 20px 15px;" align="center">
            <tr>
                <!--Turpan-->                                       
                <td style="width:305px;" align="center" valign="top">
EOT;
                traveloTurpan($turpan);
echo <<<EOT
                </td>
                <!--Turpan vége-->
                <td style="width:20px;">&nbsp;</td>  
                <td style="width:305px;" align="center" valign="top">
EOT;
                traveloTextAd($textad);                                          
echo <<<EOT
                </td>                  
            </tr>
        </table>
    </td>
</tr> 
<!--Turpan + szoveges vege-->
EOT;
}

function traveloBottomMenu($picfolder) {
    echo <<<EOT
    <tr>
        <td align="center" style="padding: 25px 0; background:#ffffff">
            <img usemap="#bottommenuimagemap" src="$picfolder/bottommenu.png" border="0" />
         </td>
     </tr>
EOT;
}

function traveloLegalStatement() {
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

function traveloTableEnd() {
    echo <<<EOT
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
EOT;
}

function traveloBottomMenuMap() {
    echo <<<EOT
    <map name="bottommenuimagemap" id="bottommenuimagemap">
    <area shape="rect" coords="58,17,201,47" href="http://repulojegy.travelo.hu/" alt="rep" target="_blank" />
    <area shape="rect" coords="248,14,412,48" href="http://autoberles.travelo.hu/" target="_blank" />
    <area shape="rect" coords="464,11,614,47" href="http://biztositas.travelo.hu/" target="_blank" />
</map>
EOT;
}

function traveloHtmlEnd() {
    echo <<<EOT
     </body>
	</html>
	
EOT;
}