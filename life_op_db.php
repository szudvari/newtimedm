<?php

require_once 'db.php';
require_once 'functions.php';
require_once 'config.php';
require_once 'life_op.php';

$id = $_GET['hirlevel_id'];
$table = "life_op_hirlev";
@$save=$_GET['save'];

$con = connectDbIso();
$travelo = getANewsletterIso($table, $id);
closeDb($con);

$dir = $website['root'] ."dm/". getFolderName($travelo['folder']);

$style['travelo_title'] = 'color:#434a54; font-size:16px; font-weight:bold; text-decoration:none; text-transform:uppercase';
$style['travelo_bptext'] = 'color:#010101; font-size:14px; text-decoration:none;';
$style['travelo_subtitle'] = 'color:#434a54; font-size:13px; text-decoration:none;';
$style['travelo_text'] = 'color:#666d78; font-size:13px; text-decoration:none;';
$style['travelo_logo_img'] = '<img src="life_topmenu-logo.png">'; 
$style['travelo_header'] = '"background:#ffffff; padding: 5px 0 3px; border-right: solid 1px #d3d3d3"';
$style['travelo_logo'] = '<a href="http://utazas.life.hu/?utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=fooldal" target="_blank">' . $style['travelo_logo_img'] . '</a>';

$style['travelo_menu'] = '"background: #ffffff;  padding: 5px 0px 5px 0px; text-align: center; font-size: 14px; font-weight: lighter; text-transform: uppercase; width:17%;"';
$style['price'] = "color:#1aa54a; font-size:16px; text-decoration:none;";
$style['orig_price'] = "color:#a8a8a8; font-size:16px; text-decoration: line-through;";
$style['discount'] = "padding: 5px; background-color:#1aa54a; border-radius:5px; color:#fff; font-size:16px; font-weight: bold; text-decoration: none;";

$travelo_separator['t_menu1'] = separator($travelo['menu1_link']);
$travelo_separator['t_menu2'] = separator($travelo['menu2_link']);
$travelo_separator['t_menu3'] = separator($travelo['menu3_link']);
$travelo_separator['t_menu4'] = separator($travelo['menu4_link']);
$travelo_menu['1'] = '<a href="' . $travelo['menu1_link'] . $travelo_separator['t_menu1'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['menu1_analytics'] . '" style="text-decoration: none; color: #434a54; font-weight: bold;" target="_blank">' . $travelo['menu1'] . '</a>';
$travelo_menu['2'] = '<a href="' . $travelo['menu2_link'] . $travelo_separator['t_menu2'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['menu2_analytics'] . '" style="text-decoration: none; color: #434a54; font-weight: bold;" target="_blank">' . $travelo['menu2'] . '</a>';
$travelo_menu['3'] = '<a href="' . $travelo['menu3_link'] . $travelo_separator['t_menu3'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['menu3_analytics'] . '" style="text-decoration: none; color: #434a54; font-weight: bold;" target="_blank">' . $travelo['menu3'] . '</a>';
$travelo_menu['4'] = '<a href="' . $travelo['menu4_link'] . $travelo_separator['t_menu4'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['menu4_analytics'] . '" style="text-decoration: none; color: #434a54; font-weight: bold;" target="_blank">' . $travelo['menu4'] . '</a>';

//nagyképes
$travelo_separator['bp_link'] = separator($travelo['bp_link']);
$travelo_bp['link'] = $travelo['bp_link'] . $travelo_separator['bp_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['bp_analytics'];
$travelo_bp['pic'] = '<a href="' . $travelo_bp['link'] . '"><img src="' . $travelo['bp_pic'] . '" border="0"></a>';
$travelo_bp['title'] = '<a href="' . $travelo_bp['link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['bp_title'] . '</a>';
$travelo_bp['text'] = '<a href="' . $travelo_bp['link'] . '" style="' . $style['travelo_bptext'] . '">' . $travelo['bp_text'] . '</a>';

//Other
$l_legal = iconv("UTF-8", "ISO-8859-2", "A Life Utazás és a jelen hírlevélben szereplő partnerei fenntartják az utazással kapcsolatos feltételek és árak módosításának jogát. A Life.hu Utazási mellékletét a Confhotel-Net Kft. üzemelteti.");
$l_opti1 = iconv("UTF-8", "ISO-8859-2", "Ezt a levelet az optimail online direkt-marketing rendszeren keresztül küldtük a(z)");
$l_opti2 = iconv("UTF-8", "ISO-8859-2", "címre az Ön előzetes hozzájárulásával, melyet az Origo Zrt-nek tett a freemail.hu 
                                                ingyenes rendszerébe történő regisztrációja során. E szerint Ön marketingtartalmú 
                                                célzott üzenetek fogadását vállalja. Szolgáltatásunkkal kapcsolatban bővebb információval 
                                                szolgálunk az Ön számára a  ");
$l_opti3 = iconv("UTF-8", "ISO-8859-2", "Amennyiben a továbbiakban mégsem szeretne az érdeklődési körének megfelelő kedvezményes ajánlatokat vagy 
                                                    nyereményjáték-ismertetőket kapni, kattintson ");
$l_opti4 = iconv("UTF-8", "ISO-8859-2", "Az Origo Zrt. adatkezelési nyilvántartási azonosítója: 820-0001 ");

if ($save==1){
    ob_start();
}

life_opHead();
life_opTableStart();
life_opMenu($style, $travelo_menu);
life_opBigPic($travelo_bp);
life_opLegalNotice();
life_opOptimailFooter();
life_opTableEnd();
life_opHtmlEnd();

if ($save==1) {
$title=$id."-life_op.txt";
file_put_contents("save/$title", ob_get_contents());
file_put_contents("$dir/index.html", ob_get_contents());
copy("./life_misc/lablec_logo.gif", "$dir/lablec_logo.gif");  
copy("./life_misc/lablec_szaggatott.gif", "$dir/lablec_szaggatott.gif");  
copy("./life_misc/spacer1.gif", "$dir/spacer1.gif");  
copy("./life_misc/life_topmenu-logo.png", "$dir/life_topmenu-logo.png");  
$url="showtxt.php?title=$title&id=$id";
header("Location: $url");
}
