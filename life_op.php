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