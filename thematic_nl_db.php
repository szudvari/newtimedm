<?php

require_once 'db.php';
require_once 'functions.php';
require_once 'config.php';
require_once 'thematic_nl.php';

$id = $_GET['hirlevel_id'];
$table = "thematic_hirlev";
@$save = $_GET['save'];

$con = connectDb();
$travelo = getANewsletter($table, $id);
closeDb($con);

$dir = $website['root'] . getFolderName($travelo['folder']);

//style
$style['travelo_title'] = 'color:#1a438a; font-size:16px; font-weight:bold; text-decoration:none; text-transform:uppercase';
$style['travelo_bptext'] = 'color:#010101; font-size:14px; text-decoration:none;';
$style['travelo_subtitle'] = 'color:#5d5d5d; font-size:13px; text-decoration:none;';
$style['travelo_text'] = 'color:#010101; font-size:13px; text-decoration:none;';
$style['travelo_textad_title'] = 'color:#1a438a; font-size:15px; font-weight:bold; text-decoration:none; text-transform:uppercase';
$style['travelo_bg'] = '<body style="background: #f5f4f2 url(\'' . $newsletter['picfolder'] . '/fullbg.png\'); text-decoration:none; font-size: 14px; font-family: \'OpenSans\',arial,helvetica,sans-serif;margin:0;padding:0">';
$style['travelo_maintable'] = '<table style="background: #f5f4f2 url(\'' . $newsletter['picfolder'] . '/fullbg.png\'); width: 100%; font-family: \'OpenSans\',arial,helvetica,sans-serif" border="0" align="center">';
$style['mostrecent'] = 'color:#1a438a; font-weight:bold; font-size:14px; text-decoration:none';
$style['mostrecent_highlight'] = 'color:#D40063; font-size:14px; font-weight:normal; text-decoration:none';
$style['travelo_harticle_title'] = "color:#1a438a; font-weight:bold; font-size:18px; text-decoration:none";
$style['travelo_article_title'] = "color:#1a438a;font-size:14px; text-decoration:none";
$style['travelo_article_date'] = "color:#a8a8a8; font-size:12px; text-decoration:none";
$style['travelo_turpan_li'] = "color:#a8a8a8; margin-bottom: 5px";
$style['price'] = "color:#D40063; font-size:16px; font-weight: bold; text-decoration:none;";
$style['orig_price'] = "color:#a8a8a8; font-size:16px; text-decoration: line-through;";
$style['discount'] = "padding: 5px; background-color:#D40063; border-radius:5px; color:#fff; font-size:16px; font-weight: bold; text-decoration: none;";


//header
$style['travelo_logo_img'] = '<img src="' . $newsletter['picfolder'] . '/topmenu_logo.png">';
$style['travelo_header'] = '"width:30%;"';
$style['travelo_logo'] = '<a href="http://szallas.travelo.hu?utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=fooldal" target="_blank">' . $style['travelo_logo_img'] . '</a>';
$style['travelo_menu_bg_col'] = '(rgba(136,200,65,1), rgba(104,161,51,1))';
$style['travelo_menu_bg'] = 'background: -webkit-linear-gradient' . $style['travelo_menu_bg_col'] . '; background: -o-linear-gradient' . $style['travelo_menu_bg_col'] . '; background: -moz-linear-gradient' . $style['travelo_menu_bg_col'] . '; background:linear-gradient' . $style['travelo_menu_bg_col'] . ';';
$style['travelo_menu'] = '"' . $style['travelo_menu_bg'] . 'padding: 8px 0 8px 0; margin-top:5px; text-align: center; font-size: 14px; width:18%; border-top-style:solid; border-bottom-style:solid; border-width:1px; border-color:#68a133 #72ae38;"';
$style['travelo_menu_left'] = '"' . $style['travelo_menu_bg'] . ' padding: 8px 0  8px 0; margin-top:5px; border-left-style:solid; border-top-style:solid; border-bottom-style:solid; border-width:1px; border-color:#68a133 #72ae38 #68a133 #68a133; border-top-left-radius:8px; border-bottom-left-radius:8px; text-align: center; font-size: 14px; width:5%;"';
$style['travelo_menu_right'] = '"' . $style['travelo_menu_bg'] . ' padding: 8px 0 8px 0; margin-top:5px; border-right-style:solid; border-top-style:solid; border-bottom-style:solid; border-width:1px; border-color:#68a133 #68a133 #68a133 #72ae38; border-top-right-radius:8px; border-bottom-right-radius:8px; text-align: center; font-size: 14px; width:5%;"';

//menü
$travelo_separator['t_menu1'] = separator($travelo['menu1_link']);
$travelo_separator['t_menu2'] = separator($travelo['menu2_link']);
$travelo_separator['t_menu3'] = separator($travelo['menu3_link']);
$travelo_separator['t_menu4'] = separator($travelo['menu4_link']);
$travelo_separator['t_menu5'] = separator($travelo['menu5_link']);
$travelo_menu['link_style'] = 'text-decoration: none; color: #fff; font-weight: normal; text-transform: uppercase;';
$travelo_menu['1'] = '<a href="' . $travelo['menu1_link'] . $travelo_separator['t_menu1'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['menu1_analytics'] . '" style="' . $travelo_menu['link_style'] . '" target="_blank">' . $travelo['menu1'] . '</a>';
$travelo_menu['2'] = '<a href="' . $travelo['menu2_link'] . $travelo_separator['t_menu2'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['menu2_analytics'] . '" style="' . $travelo_menu['link_style'] . '" target="_blank">' . $travelo['menu2'] . '</a>';
$travelo_menu['3'] = '<a href="' . $travelo['menu3_link'] . $travelo_separator['t_menu3'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['menu3_analytics'] . '" style="' . $travelo_menu['link_style'] . '" target="_blank">' . $travelo['menu3'] . '</a>';
$travelo_menu['4'] = '<a href="' . $travelo['menu4_link'] . $travelo_separator['t_menu4'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['menu4_analytics'] . '" style="' . $travelo_menu['link_style'] . '" target="_blank">' . $travelo['menu4'] . '</a>';
$travelo_menu['5'] = '<a href="' . $travelo['menu5_link'] . $travelo_separator['t_menu5'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['menu5_analytics'] . '" style="' . $travelo_menu['link_style'] . '" target="_blank">' . $travelo['menu5'] . '</a>';

//nagyképes
$travelo_separator['bp_link'] = separator($travelo['bp_link']);
$travelo_bp['link'] = $travelo['bp_link'] . $travelo_separator['bp_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['bp_analytics'];
$travelo_bp['pic'] = '<a href="' . $travelo_bp['link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['bp_pic'] . '" border="0"></a>';
$travelo_bp['title'] = '<a href="' . $travelo_bp['link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['bp_title'] . '</a>';
$travelo_bp['text'] = '<a href="' . $travelo_bp['link'] . '" style="' . $style['travelo_bptext'] . '">' . $travelo['bp_text'] . '</a>';
$travelo_bp['price'] = '<a href="' . $travelo_bp['link'] . '" style="' . $style['price'] . '">' . $travelo['bp_price'] . '</a>';
$travelo_bp['orig_price'] = '<a href="' . $travelo_bp['link'] . '" style="' . $style['orig_price'] . '">' . $travelo['bp_orig_price'] . '</a>';
$travelo_bp['discount'] = '<a href="' . $travelo_bp['link'] . '" style="' . $style['discount'] . '">' . $travelo['bp_discount'] . '</a>';

//nagyképes2
$travelo_separator['bp2_link'] = separator($travelo['bp2_link']);
$travelo_bp2['link'] = $travelo['bp2_link'] . $travelo_separator['bp2_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['bp2_analytics'];
$travelo_bp2['pic'] = '<a href="' . $travelo_bp2['link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['bp2_pic'] . '" border="0"></a>';
$travelo_bp2['title'] = '<a href="' . $travelo_bp2['link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['bp2_title'] . '</a>';
$travelo_bp2['text'] = '<a href="' . $travelo_bp2['link'] . '" style="' . $style['travelo_bptext'] . '">' . $travelo['bp2_text'] . '</a>';
$travelo_bp2['price'] = '<a href="' . $travelo_bp2['link'] . '" style="' . $style['price'] . '">' . $travelo['bp2_price'] . '</a>';
$travelo_bp2['orig_price'] = '<a href="' . $travelo_bp2['link'] . '" style="' . $style['orig_price'] . '">' . $travelo['bp2_orig_price'] . '</a>';
$travelo_bp2['discount'] = '<a href="' . $travelo_bp2['link'] . '" style="' . $style['discount'] . '">' . $travelo['bp2_discount'] . '</a>';

//nagyképes3
$travelo_separator['bp3_link'] = separator($travelo['bp3_link']);
$travelo_bp3['link'] = $travelo['bp3_link'] . $travelo_separator['bp3_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['bp3_analytics'];
$travelo_bp3['pic'] = '<a href="' . $travelo_bp3['link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['bp3_pic'] . '" border="0"></a>';
$travelo_bp3['title'] = '<a href="' . $travelo_bp3['link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['bp3_title'] . '</a>';
$travelo_bp3['text'] = '<a href="' . $travelo_bp3['link'] . '" style="' . $style['travelo_bptext'] . '">' . $travelo['bp3_text'] . '</a>';
$travelo_bp3['price'] = '<a href="' . $travelo_bp3['link'] . '" style="' . $style['price'] . '">' . $travelo['bp3_price'] . '</a>';
$travelo_bp3['orig_price'] = '<a href="' . $travelo_bp3['link'] . '" style="' . $style['orig_price'] . '">' . $travelo['bp3_orig_price'] . '</a>';
$travelo_bp3['discount'] = '<a href="' . $travelo_bp3['link'] . '" style="' . $style['discount'] . '">' . $travelo['bp3_discount'] . '</a>';

//Banner
$travelo_separator['banner_link'] = separator($travelo['banner_link']);
if ($travelo['banner_analytics'] == "") {
    $travelo_banner['link'] = $travelo['banner_link'];
} else {
    $travelo_banner['link'] = $travelo['banner_link'] . $travelo_separator['banner_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['banner_analytics'];
}
$travelo_banner['banner'] = '<a href="' . $travelo_banner['link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['banner_pic'] . '" border="0" /></a>';

//Szöveges
$travelo_separator['textad_link'] = separator($travelo['textad_link']);
if ($travelo['textad_analytics'] == "") {
    $travelo_textad['link'] = $travelo['textad_link'];
} else {
    $travelo_textad['link'] = $travelo['textad_link'] . $travelo_separator['textad_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['textad_analytics'];
}
$travelo_textad['pic'] = '<a style="text-decoration:none;" href="' . $travelo_textad['link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['textad_pic'] . '" border="0" align="left" style="padding-right:10px;" /></a>';
$travelo_textad['title'] = '<a style="' . $style['travelo_textad_title'] . '" href="' . $travelo_textad['link'] . '">' . $travelo['textad_title'] . '</a>';
$travelo_textad['text'] = '<a style="' . $style['travelo_bptext'] . '" href="' . $travelo_textad['link'] . '">' . $travelo['textad_text'] . '</a>';

//Banner2_1
$travelo_separator['banner2_1_link'] = separator($travelo['banner2_1_link']);
if ($travelo['banner2_1_analytics'] == "") {
    $travelo_banner2_1['link'] = $travelo['banner2_1_link'];
} else {
    $travelo_banner2_1['link'] = $travelo['banner2_1_link'] . $travelo_separator['banner2_1_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['banner2_1_analytics'];
}
$travelo_banner2_1['banner'] = '<a href="' . $travelo_banner2_1['link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['banner2_1_pic'] . '" border="0" /></a>';

//Banner2_2
$travelo_separator['banner2_2_link'] = separator($travelo['banner_link']);
if ($travelo['banner2_2_analytics'] == "") {
    $travelo_banner2_2['link'] = $travelo['banner2_2_link'];
} else {
    $travelo_banner2_2['link'] = $travelo['banner2_2_link'] . $travelo_separator['banner2_2_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['banner2_2_analytics'];
}
$travelo_banner2_2['banner'] = '<a href="' . $travelo_banner2_2['link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['banner2_2_pic'] . '" border="0" /></a>';

//Szöveges2
$travelo_separator['textad2_link'] = separator($travelo['textad2_link']);
if ($travelo['textad2_analytics'] == "") {
    $travelo_textad2['link'] = $travelo['textad2_link'];
} else {
    $travelo_textad2['link'] = $travelo['textad2_link'] . $travelo_separator['textad2_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['textad2_analytics'];
}
$travelo_textad2['pic'] = '<a style="text-decoration:none;" href="' . $travelo_textad2['link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['textad2_pic'] . '" border="0" align="left" style="padding-right:10px;" /></a>';
$travelo_textad2['title'] = '<a style="' . $style['travelo_textad_title'] . '" href="' . $travelo_textad2['link'] . '">' . $travelo['textad2_title'] . '</a>';
$travelo_textad2['text'] = '<a style="' . $style['travelo_bptext'] . '" href="' . $travelo_textad2['link'] . '">' . $travelo['textad2_text'] . '</a>';

//Szöveges2_2
$travelo_separator['textad2_2_link'] = separator($travelo['textad2_2_link']);
if ($travelo['textad2_2_analytics'] == "") {
    $travelo_textad2_2['link'] = $travelo['textad2_2_link'];
} else {
    $travelo_textad2_2['link'] = $travelo['textad2_2_link'] . $travelo_separator['textad2_2_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['textad2_2_analytics'];
}
$travelo_textad2_2['pic'] = '<a style="text-decoration:none;" href="' . $travelo_textad2_2['link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['textad2_2_pic'] . '" border="0" align="left" style="padding-right:10px;" /></a>';
$travelo_textad2_2['title'] = '<a style="' . $style['travelo_textad_title'] . '" href="' . $travelo_textad2_2['link'] . '">' . $travelo['textad2_2_title'] . '</a>';
$travelo_textad2_2['text'] = '<a style="' . $style['travelo_bptext'] . '" href="' . $travelo_textad2_2['link'] . '">' . $travelo['textad2_2_text'] . '</a>';

//Legfrisebb cikkek
//Kiemelt
$travelo_separator['harticle_link'] = separator($travelo['harticle_link']);
$travelo_article['h_link'] = $travelo['harticle_link'] . $travelo_separator['harticle_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['harticle_analytics'];
$travelo_article['h_title'] = '<a href="' . $travelo_article['h_link'] . '" style="' . $style['travelo_harticle_title'] . '">' . $travelo['harticle_title'] . '</a>';
$travelo_article['h_date'] = '<a href="' . $travelo_article['h_link'] . '" style="' . $style['travelo_article_date'] . '">' . $travelo['harticle_date'] . '</a>';
$travelo_article['h_text'] = '<a href="' . $travelo_article['h_link'] . '" style="' . $style['travelo_bptext'] . '">' . $travelo['harticle_text'] . '</a>';
//cikk1
$travelo_separator['article_1_link'] = separator($travelo['article_1_link']);
$travelo_article['1_link'] = $travelo['article_1_link'] . $travelo_separator['article_1_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['article_1_analytics'];
$travelo_article['1_title'] = '<a href="' . $travelo_article['1_link'] . '" style="' . $style['travelo_article_title'] . '">' . $travelo['article_1_title'] . '</a>';
$travelo_article['1_date'] = '<a href="' . $travelo_article['1_link'] . '" style="' . $style['travelo_article_date'] . '">' . $travelo['article_1_date'] . '</a>';
//cikk2
$travelo_separator['article_2_link'] = separator($travelo['article_2_link']);
$travelo_article['2_link'] = $travelo['article_2_link'] . $travelo_separator['article_2_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['article_2_analytics'];
$travelo_article['2_title'] = '<a href="' . $travelo_article['2_link'] . '" style="' . $style['travelo_article_title'] . '">' . $travelo['article_2_title'] . '</a>';
$travelo_article['2_date'] = '<a href="' . $travelo_article['2_link'] . '" style="' . $style['travelo_article_date'] . '">' . $travelo['article_2_date'] . '</a>';
//cikk3
$travelo_separator['article_3_link'] = separator($travelo['article_3_link']);
$travelo_article['3_link'] = $travelo['article_3_link'] . $travelo_separator['article_3_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['article_3_analytics'];
$travelo_article['3_title'] = '<a href="' . $travelo_article['3_link'] . '" style="' . $style['travelo_article_title'] . '">' . $travelo['article_3_title'] . '</a>';
$travelo_article['3_date'] = '<a href="' . $travelo_article['3_link'] . '" style="' . $style['travelo_article_date'] . '">' . $travelo['article_3_date'] . '</a>';
//cikk4
$travelo_separator['article_4_link'] = separator($travelo['article_4_link']);
$travelo_article['4_link'] = $travelo['article_4_link'] . $travelo_separator['article_4_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['article_4_analytics'];
$travelo_article['4_title'] = '<a href="' . $travelo_article['4_link'] . '" style="' . $style['travelo_article_title'] . '">' . $travelo['article_4_title'] . '</a>';
$travelo_article['4_date'] = '<a href="' . $travelo_article['4_link'] . '" style="' . $style['travelo_article_date'] . '">' . $travelo['article_4_date'] . '</a>';

//Turpan hírek
//1.
$travelo_turpan['1'] = '<li style="' . $style['travelo_turpan_li'] . '"><a href="' . $travelo['turpan_1_link'] . '" style="' . $style['travelo_article_title'] . '">' . $travelo['turpan_1_title'] . '</a></li>';
//2.
$travelo_turpan['2'] = '<li style="' . $style['travelo_turpan_li'] . '"><a href="' . $travelo['turpan_2_link'] . '" style="' . $style['travelo_article_title'] . '">' . $travelo['turpan_2_title'] . '</a></li>';
//3.
$travelo_turpan['3'] = '<li style="' . $style['travelo_turpan_li'] . '"><a href="' . $travelo['turpan_3_link'] . '" style="' . $style['travelo_article_title'] . '">' . $travelo['turpan_3_title'] . '</a></li>';
//4.
$travelo_turpan['4'] = '<li style="' . $style['travelo_turpan_li'] . '"><a href="' . $travelo['turpan_4_link'] . '" style="' . $style['travelo_article_title'] . '">' . $travelo['turpan_4_title'] . '</a></li>';


if ($save == 1) {
    ob_start();
}
thematicHead();
echo $style['travelo_bg'];
echo $style['travelo_maintable'];
thematicTableStart();
thematicSendingDate($travelo['sendingdate']);
/* menü */
thematicNewsletterHeader($style, $travelo_menu);
/* nagyképes */
if ($travelo['bp_discount'] == 0) {
    thematicBigPic($travelo_bp);
} else {
    thematicBigPicDiscount($travelo_bp);
}
/* nagyképes2 */
if ($travelo['bp2_ok'] == "on") {
    if ($travelo['bp2_discount'] == 0) {
        thematicBigPic($travelo_bp2);
    } else {
        thematicBigPicDiscount($travelo_bp2);
    }
}
/* nagyképes3 */
if ($travelo['bp3_ok'] == "on") {
    if ($travelo['bp3_discount'] == 0) {
        thematicBigPic($travelo_bp3);
    } else {
        thematicBigPicDiscount($travelo_bp3);
    }
}
/* Cikkiek */
if ($travelo['article_ok'] == "on") {
    thematicArticles($newsletter['picfolder'], $travelo_article);
}
/* Hirdetések2 */
if ($travelo['ad2_ok'] == "b_b") {
    thematicDoubleBanner($travelo_banner2_1['banner'], $travelo_banner2_2['banner']);
}
if ($travelo['ad2_ok'] == "b2_sz") {
    thematicBannerAndText($travelo_banner2_1['banner'], $travelo_textad2);
}
if ($travelo['ad2_ok'] == "sz_sz") {
    thematicDoubleText($travelo_textad2, $travelo_textad2_2);
}
/* Hirdetések */
if ($travelo['ad_ok'] == "t_b") {
    thematicTurPanAndBanner($travelo_turpan, $travelo_banner['banner']);
}
if ($travelo['ad_ok'] == "b_sz") {
    thematicBannerAndText($travelo_banner['banner'], $travelo_textad);
}
if ($travelo['ad_ok'] == "t_sz") {
    thematicTurPanAndText($travelo_turpan, $travelo_textad);
}
/* Bottom menü */
thematicBottomMenu($newsletter['picfolder']);
/* Legal statement */
thematicLegalStatement();
thematicTableEnd();
thematicBottomMenuMap();
thematicHtmlEnd();
if ($save == 1) {
    $title = $id . "-travelo_nl.txt";
    file_put_contents("save/$title", ob_get_contents());
    file_put_contents("$dir/index.html", ob_get_contents());
    $url = "showtxt.php?title=$title&id=$id";
    header("Location: $url");
}
    