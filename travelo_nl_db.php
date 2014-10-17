<?php

require_once 'db.php';
require_once 'functions.php';
require_once 'config.php';
require_once 'travelo_nl.php';

$id = $_GET['hirlevel_id'];
$table = "travelo_hirlev";
@$save=$_GET['save'];

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

//kisképes blokk
//1 - bal
$travelo_separator['1l_link'] = separator($travelo['1l_link']);
$smallpic1['l_discounted'] = isDiscounted($travelo['1l_discount']);
$smallpic1['l_link'] = $travelo['1l_link'] . $travelo_separator['1l_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['1l_analytics'];
$smallpic1['l_pic'] = '<a href="' . $smallpic1['l_link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['1l_pic'] . '" border="0"></a>';
$smallpic1['l_title'] = '<a href="' . $smallpic1['l_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['1l_title'] . '</a>';
$smallpic1['l_subtitle'] = '<a href="' . $smallpic1['l_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['1l_subtitle'] . '</a>';
$smallpic1['l_text'] = '<a href="' . $smallpic1['l_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['1l_text'] . '</a>';
$smallpic1['l_price'] = '<a href="' . $smallpic1['l_link'] . '" style="' . $style['price'] . '">' . $travelo['1l_price'] . '</a>';
$smallpic1['l_orig_price'] = '<a href="' . $smallpic1['l_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['1l_orig_price'] . '</a>';
$smallpic1['l_discount'] = '<a href="' . $smallpic1['l_link'] . '" style="' . $style['discount'] . '">' . $travelo['1l_discount'] . '</a>';
//1 - jobb
$travelo_separator['1r_link'] = separator($travelo['1r_link']);
$smallpic1['r_discounted'] = isDiscounted($travelo['1r_discount']);
$smallpic1['r_link'] = $travelo['1r_link'] . $travelo_separator['1r_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['1r_analytics'];
$smallpic1['r_pic'] = '<a href="' . $smallpic1['r_link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['1r_pic'] . '" border="0"></a>';
$smallpic1['r_title'] = '<a href="' . $smallpic1['r_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['1r_title'] . '</a>';
$smallpic1['r_subtitle'] = '<a href="' . $smallpic1['r_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['1r_subtitle'] . '</a>';
$smallpic1['r_text'] = '<a href="' . $smallpic1['r_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['1r_text'] . '</a>';
$smallpic1['r_price'] = '<a href="' . $smallpic1['r_link'] . '" style="' . $style['price'] . '">' . $travelo['1r_price'] . '</a>';
$smallpic1['r_orig_price'] = '<a href="' . $smallpic1['r_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['1r_orig_price'] . '</a>';
$smallpic1['r_discount'] = '<a href="' . $smallpic1['r_link'] . '" style="' . $style['discount'] . '">' . $travelo['1r_discount'] . '</a>';
//2 - bal
$travelo_separator['2l_link'] = separator($travelo['2l_link']);
$smallpic2['l_discounted'] = isDiscounted($travelo['2l_discount']);
$smallpic2['l_link'] = $travelo['2l_link'] . $travelo_separator['2l_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['2l_analytics'];
$smallpic2['l_pic'] = '<a href="' . $smallpic2['l_link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['2l_pic'] . '" border="0"></a>';
$smallpic2['l_title'] = '<a href="' . $smallpic2['l_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['2l_title'] . '</a>';
$smallpic2['l_subtitle'] = '<a href="' . $smallpic2['l_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['2l_subtitle'] . '</a>';
$smallpic2['l_text'] = '<a href="' . $smallpic2['l_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['2l_text'] . '</a>';
$smallpic2['l_price'] = '<a href="' . $smallpic2['l_link'] . '" style="' . $style['price'] . '">' . $travelo['2l_price'] . '</a>';
$smallpic2['l_orig_price'] = '<a href="' . $smallpic2['l_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['2l_orig_price'] . '</a>';
$smallpic2['l_discount'] = '<a href="' . $smallpic2['l_link'] . '" style="' . $style['discount'] . '">' . $travelo['2l_discount'] . '</a>';
//2 - jobb
$travelo_separator['2r_link'] = separator($travelo['2r_link']);
$smallpic2['r_discounted'] = isDiscounted($travelo['2r_discount']);
$smallpic2['r_link'] = $travelo['2r_link'] . $travelo_separator['2r_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['2r_analytics'];
$smallpic2['r_pic'] = '<a href="' . $smallpic2['r_link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['2r_pic'] . '" border="0"></a>';
$smallpic2['r_title'] = '<a href="' . $smallpic2['r_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['2r_title'] . '</a>';
$smallpic2['r_subtitle'] = '<a href="' . $smallpic2['r_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['2r_subtitle'] . '</a>';
$smallpic2['r_text'] = '<a href="' . $smallpic2['r_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['2r_text'] . '</a>';
$smallpic2['r_price'] = '<a href="' . $smallpic2['r_link'] . '" style="' . $style['price'] . '">' . $travelo['2r_price'] . '</a>';
$smallpic2['r_orig_price'] = '<a href="' . $smallpic2['r_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['2r_orig_price'] . '</a>';
$smallpic2['r_discount'] = '<a href="' . $smallpic2['r_link'] . '" style="' . $style['discount'] . '">' . $travelo['2r_discount'] . '</a>';
//3 - bal
$travelo_separator['3l_link'] = separator($travelo['3l_link']);
$smallpic3['l_discounted'] = isDiscounted($travelo['3l_discount']);
$smallpic3['l_link'] = $travelo['3l_link'] . $travelo_separator['3l_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['3l_analytics'];
$smallpic3['l_pic'] = '<a href="' . $smallpic3['l_link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['3l_pic'] . '" border="0"></a>';
$smallpic3['l_title'] = '<a href="' . $smallpic3['l_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['3l_title'] . '</a>';
$smallpic3['l_subtitle'] = '<a href="' . $smallpic3['l_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['3l_subtitle'] . '</a>';
$smallpic3['l_text'] = '<a href="' . $smallpic3['l_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['3l_text'] . '</a>';
$smallpic3['l_price'] = '<a href="' . $smallpic3['l_link'] . '" style="' . $style['price'] . '">' . $travelo['3l_price'] . '</a>';
$smallpic3['l_orig_price'] = '<a href="' . $smallpic3['l_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['3l_orig_price'] . '</a>';
$smallpic3['l_discount'] = '<a href="' . $smallpic3['l_link'] . '" style="' . $style['discount'] . '">' . $travelo['3l_discount'] . '</a>';
//3 - jobb
$travelo_separator['3r_link'] = separator($travelo['3r_link']);
$smallpic3['r_discounted'] = isDiscounted($travelo['3r_discount']);
$smallpic3['r_link'] = $travelo['3r_link'] . $travelo_separator['3r_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['3r_analytics'];
$smallpic3['r_pic'] = '<a href="' . $smallpic3['r_link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['3r_pic'] . '" border="0"></a>';
$smallpic3['r_title'] = '<a href="' . $smallpic3['r_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['3r_title'] . '</a>';
$smallpic3['r_subtitle'] = '<a href="' . $smallpic3['r_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['3r_subtitle'] . '</a>';
$smallpic3['r_text'] = '<a href="' . $smallpic3['r_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['3r_text'] . '</a>';
$smallpic3['r_price'] = '<a href="' . $smallpic3['r_link'] . '" style="' . $style['price'] . '">' . $travelo['3r_price'] . '</a>';
$smallpic3['r_orig_price'] = '<a href="' . $smallpic3['r_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['3r_orig_price'] . '</a>';
$smallpic3['r_discount'] = '<a href="' . $smallpic3['r_link'] . '" style="' . $style['discount'] . '">' . $travelo['3r_discount'] . '</a>';
//4 - bal
$travelo_separator['4l_link'] = separator($travelo['4l_link']);
$smallpic4['l_discounted'] = isDiscounted($travelo['4l_discount']);
$smallpic4['l_link'] = $travelo['4l_link'] . $travelo_separator['4l_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['4l_analytics'];
$smallpic4['l_pic'] = '<a href="' . $smallpic4['l_link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['4l_pic'] . '" border="0"></a>';
$smallpic4['l_title'] = '<a href="' . $smallpic4['l_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['4l_title'] . '</a>';
$smallpic4['l_subtitle'] = '<a href="' . $smallpic4['l_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['4l_subtitle'] . '</a>';
$smallpic4['l_text'] = '<a href="' . $smallpic4['l_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['4l_text'] . '</a>';
$smallpic4['l_price'] = '<a href="' . $smallpic4['l_link'] . '" style="' . $style['price'] . '">' . $travelo['4l_price'] . '</a>';
$smallpic4['l_orig_price'] = '<a href="' . $smallpic4['l_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['4l_orig_price'] . '</a>';
$smallpic4['l_discount'] = '<a href="' . $smallpic4['l_link'] . '" style="' . $style['discount'] . '">' . $travelo['4l_discount'] . '</a>';
//4 - jobb
$travelo_separator['4r_link'] = separator($travelo['4r_link']);
$smallpic4['r_discounted'] = isDiscounted($travelo['4r_discount']);
$smallpic4['r_link'] = $travelo['4r_link'] . $travelo_separator['4r_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['4r_analytics'];
$smallpic4['r_pic'] = '<a href="' . $smallpic4['r_link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['4r_pic'] . '" border="0"></a>';
$smallpic4['r_title'] = '<a href="' . $smallpic4['r_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['4r_title'] . '</a>';
$smallpic4['r_subtitle'] = '<a href="' . $smallpic4['r_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['4r_subtitle'] . '</a>';
$smallpic4['r_text'] = '<a href="' . $smallpic4['r_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['4r_text'] . '</a>';
$smallpic4['r_price'] = '<a href="' . $smallpic4['r_link'] . '" style="' . $style['price'] . '">' . $travelo['4r_price'] . '</a>';
$smallpic4['r_orig_price'] = '<a href="' . $smallpic4['r_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['4r_orig_price'] . '</a>';
$smallpic4['r_discount'] = '<a href="' . $smallpic4['r_link'] . '" style="' . $style['discount'] . '">' . $travelo['4r_discount'] . '</a>';
//5 - bal
$travelo_separator['5l_link'] = separator($travelo['5l_link']);
$smallpic5['l_discounted'] = isDiscounted($travelo['5l_discount']);
$smallpic5['l_link'] = $travelo['5l_link'] . $travelo_separator['5l_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['5l_analytics'];
$smallpic5['l_pic'] = '<a href="' . $smallpic5['l_link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['5l_pic'] . '" border="0"></a>';
$smallpic5['l_title'] = '<a href="' . $smallpic5['l_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['5l_title'] . '</a>';
$smallpic5['l_subtitle'] = '<a href="' . $smallpic5['l_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['5l_subtitle'] . '</a>';
$smallpic5['l_text'] = '<a href="' . $smallpic5['l_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['5l_text'] . '</a>';
$smallpic5['l_price'] = '<a href="' . $smallpic5['l_link'] . '" style="' . $style['price'] . '">' . $travelo['5l_price'] . '</a>';
$smallpic5['l_orig_price'] = '<a href="' . $smallpic5['l_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['5l_orig_price'] . '</a>';
$smallpic5['l_discount'] = '<a href="' . $smallpic5['l_link'] . '" style="' . $style['discount'] . '">' . $travelo['5l_discount'] . '</a>';
//5 - jobb
$travelo_separator['5r_link'] = separator($travelo['5r_link']);
$smallpic5['r_discounted'] = isDiscounted($travelo['5r_discount']);
$smallpic5['r_link'] = $travelo['5r_link'] . $travelo_separator['5r_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['5r_analytics'];
$smallpic5['r_pic'] = '<a href="' . $smallpic5['r_link'] . '"><img src="' . $travelo['folder'] . '/' . $travelo['5r_pic'] . '" border="0"></a>';
$smallpic5['r_title'] = '<a href="' . $smallpic5['r_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['5r_title'] . '</a>';
$smallpic5['r_subtitle'] = '<a href="' . $smallpic5['r_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['5r_subtitle'] . '</a>';
$smallpic5['r_text'] = '<a href="' . $smallpic5['r_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['5r_text'] . '</a>';
$smallpic5['r_price'] = '<a href="' . $smallpic5['r_link'] . '" style="' . $style['price'] . '">' . $travelo['5r_price'] . '</a>';
$smallpic5['r_orig_price'] = '<a href="' . $smallpic5['r_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['5r_orig_price'] . '</a>';
$smallpic5['r_discount'] = '<a href="' . $smallpic5['r_link'] . '" style="' . $style['discount'] . '">' . $travelo['5r_discount'] . '</a>';

//Leggyakoribb keresések
//1 oszlopos
//1. sor
$travelo_separator['mostrecent_1_link'] = separator($travelo['mostrecent_1_link']);
$travelo_mostrecent['1_link'] = $travelo['mostrecent_1_link'] . $travelo_separator['mostrecent_1_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['mostrecent_1_analytics'];
$travelo_mostrecent['1'] = '<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 10px"><tr><td><a href="' . $travelo_mostrecent['1_link'] . '" style="' . $style['mostrecent'] . '">' . $travelo['mostrecent_1_puretext'] . '<span style="' . $style['mostrecent_highlight'] . '"> – ' . $travelo['mostrecent_1_highlitedtext'] . '</span></a></td></tr></table>';
//2. sor
$travelo_separator['mostrecent_2_link'] = separator($travelo['mostrecent_2_link']);
$travelo_mostrecent['2_link'] = $travelo['mostrecent_2_link'] . $travelo_separator['mostrecent_2_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['mostrecent_2_analytics'];
$travelo_mostrecent['2'] = '<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 10px"><tr><td><a href="' . $travelo_mostrecent['2_link'] . '" style="' . $style['mostrecent'] . '">' . $travelo['mostrecent_2_puretext'] . '<span style="' . $style['mostrecent_highlight'] . '"> – ' . $travelo['mostrecent_2_highlitedtext'] . '</span></a></td></tr></table>';
//3. sor
$travelo_separator['mostrecent_3_link'] = separator($travelo['mostrecent_3_link']);
$travelo_mostrecent['3_link'] = $travelo['mostrecent_3_link'] . $travelo_separator['mostrecent_3_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['mostrecent_3_analytics'];
$travelo_mostrecent['3'] = '<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 10px"><tr><td><a href="' . $travelo_mostrecent['3_link'] . '" style="' . $style['mostrecent'] . '">' . $travelo['mostrecent_3_puretext'] . '<span style="' . $style['mostrecent_highlight'] . '"> – ' . $travelo['mostrecent_3_highlitedtext'] . '</span></a></td></tr></table>';
//4. sor
$travelo_separator['mostrecent_4_link'] = separator($travelo['mostrecent_4_link']);
$travelo_mostrecent['4_link'] = $travelo['mostrecent_4_link'] . $travelo_separator['mostrecent_4_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['mostrecent_4_analytics'];
$travelo_mostrecent['4'] = '<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 10px"><tr><td><a href="' . $travelo_mostrecent['4_link'] . '" style="' . $style['mostrecent'] . '">' . $travelo['mostrecent_4_puretext'] . '<span style="' . $style['mostrecent_highlight'] . '"> – ' . $travelo['mostrecent_4_highlitedtext'] . '</span></a></td></tr></table>';
//5. sor
$travelo_separator['mostrecent_5_link'] = separator($travelo['mostrecent_5_link']);
$travelo_mostrecent['5_link'] = $travelo['mostrecent_5_link'] . $travelo_separator['mostrecent_5_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['mostrecent_5_analytics'];
$travelo_mostrecent['5'] = '<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 10px"><tr><td><a href="' . $travelo_mostrecent['5_link'] . '" style="' . $style['mostrecent'] . '">' . $travelo['mostrecent_5_puretext'] . '<span style="' . $style['mostrecent_highlight'] . '"> – ' . $travelo['mostrecent_5_highlitedtext'] . '</span></a></td></tr></table>';
//2 oszlopos
//1. sor
//Bal
$travelo_separator['mostrecent_1l_link'] = separator($travelo['mostrecent_1l_link']);
$travelo_mostrecent2['1l_link'] = $travelo['mostrecent_1l_link'] . $travelo_separator['mostrecent_1l_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['mostrecent_1l_analytics'];
$travelo_mostrecent2['1l'] = '<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 10px"><tr><td><a href="' . $travelo_mostrecent2['1l_link'] . '" style="' . $style['mostrecent'] . '">' . $travelo['mostrecent_1l_puretext'] . '<span style="' . $style['mostrecent_highlight'] . '"> – ' . $travelo['mostrecent_1l_highlitedtext'] . '</span></a></td></tr></table>';
//Jobb
$travelo_separator['mostrecent_1r_link'] = separator($travelo['mostrecent_1r_link']);
$travelo_mostrecent2['1r_link'] = $travelo['mostrecent_1r_link'] . $travelo_separator['mostrecent_1r_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['mostrecent_1r_analytics'];
$travelo_mostrecent2['1r'] = '<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 10px"><tr><td><a href="' . $travelo_mostrecent2['1r_link'] . '" style="' . $style['mostrecent'] . '">' . $travelo['mostrecent_1r_puretext'] . '<span style="' . $style['mostrecent_highlight'] . '"> – ' . $travelo['mostrecent_1r_highlitedtext'] . '</span></a></td></tr></table>';
//2. sor
//Bal
$travelo_separator['mostrecent_2l_link'] = separator($travelo['mostrecent_2l_link']);
$travelo_mostrecent2['2l_link'] = $travelo['mostrecent_2l_link'] . $travelo_separator['mostrecent_2l_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['mostrecent_2l_analytics'];
$travelo_mostrecent2['2l'] = '<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 10px"><tr><td><a href="' . $travelo_mostrecent2['2l_link'] . '" style="' . $style['mostrecent'] . '">' . $travelo['mostrecent_2l_puretext'] . '<span style="' . $style['mostrecent_highlight'] . '"> – ' . $travelo['mostrecent_2l_highlitedtext'] . '</span></a></td></tr></table>';
//Jobb
$travelo_separator['mostrecent_2r_link'] = separator($travelo['mostrecent_2r_link']);
$travelo_mostrecent2['2r_link'] = $travelo['mostrecent_2r_link'] . $travelo_separator['mostrecent_2r_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['mostrecent_2r_analytics'];
$travelo_mostrecent2['2r'] = '<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 10px"><tr><td><a href="' . $travelo_mostrecent2['2r_link'] . '" style="' . $style['mostrecent'] . '">' . $travelo['mostrecent_2r_puretext'] . '<span style="' . $style['mostrecent_highlight'] . '"> – ' . $travelo['mostrecent_2r_highlitedtext'] . '</span></a></td></tr></table>';
//3. sor
//Bal
$travelo_separator['mostrecent_3l_link'] = separator($travelo['mostrecent_3l_link']);
$travelo_mostrecent2['3l_link'] = $travelo['mostrecent_3l_link'] . $travelo_separator['mostrecent_3l_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['mostrecent_3l_analytics'];
$travelo_mostrecent2['3l'] = '<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 10px"><tr><td><a href="' . $travelo_mostrecent2['3l_link'] . '" style="' . $style['mostrecent'] . '">' . $travelo['mostrecent_3l_puretext'] . '<span style="' . $style['mostrecent_highlight'] . '"> – ' . $travelo['mostrecent_3l_highlitedtext'] . '</span></a></td></tr></table>';
//Jobb
$travelo_separator['mostrecent_3r_link'] = separator($travelo['mostrecent_3r_link']);
$travelo_mostrecent2['3r_link'] = $travelo['mostrecent_3r_link'] . $travelo_separator['mostrecent_3r_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['mostrecent_3r_analytics'];
$travelo_mostrecent2['3r'] = '<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 10px"><tr><td><a href="' . $travelo_mostrecent2['3r_link'] . '" style="' . $style['mostrecent'] . '">' . $travelo['mostrecent_3r_puretext'] . '<span style="' . $style['mostrecent_highlight'] . '"> – ' . $travelo['mostrecent_3r_highlitedtext'] . '</span></a></td></tr></table>';
///4. sor
//Bal
$travelo_separator['mostrecent_4l_link'] = separator($travelo['mostrecent_4l_link']);
$travelo_mostrecent2['4l_link'] = $travelo['mostrecent_4l_link'] . $travelo_separator['mostrecent_4l_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['mostrecent_4l_analytics'];
$travelo_mostrecent2['4l'] = '<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 10px"><tr><td><a href="' . $travelo_mostrecent2['4l_link'] . '" style="' . $style['mostrecent'] . '">' . $travelo['mostrecent_4l_puretext'] . '<span style="' . $style['mostrecent_highlight'] . '"> – ' . $travelo['mostrecent_4l_highlitedtext'] . '</span></a></td></tr></table>';
//Jobb
$travelo_separator['mostrecent_4l_link'] = separator($travelo['mostrecent_4r_link']);
$travelo_mostrecent2['4r_link'] = $travelo['mostrecent_4r_link'] . $travelo_separator['mostrecent_4l_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['mostrecent_4r_analytics'];
$travelo_mostrecent2['4r'] = '<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 10px"><tr><td><a href="' . $travelo_mostrecent2['4r_link'] . '" style="' . $style['mostrecent'] . '">' . $travelo['mostrecent_4r_puretext'] . '<span style="' . $style['mostrecent_highlight'] . '"> – ' . $travelo['mostrecent_4r_highlitedtext'] . '</span></a></td></tr></table>';
//5. sor
//Bal
$travelo_separator['mostrecent_5l_link'] = separator($travelo['mostrecent_5l_link']);
$travelo_mostrecent2['5l_link'] = $travelo['mostrecent_5l_link'] . $travelo_separator['mostrecent_5l_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['mostrecent_5l_analytics'];
$travelo_mostrecent2['5l'] = '<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 10px"><tr><td><a href="' . $travelo_mostrecent2['5l_link'] . '" style="' . $style['mostrecent'] . '">' . $travelo['mostrecent_5l_puretext'] . '<span style="' . $style['mostrecent_highlight'] . '"> – ' . $travelo['mostrecent_5l_highlitedtext'] . '</span></a></td></tr></table>';
//Jobb
$travelo_separator['mostrecent_5r_link'] = separator($travelo['mostrecent_5r_link']);
$travelo_mostrecent2['5r_link'] = $travelo['mostrecent_5r_link'] . $travelo_separator['mostrecent_5r_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['mostrecent_5r_analytics'];
$travelo_mostrecent2['5r'] = '<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 10px"><tr><td><a href="' . $travelo_mostrecent2['5r_link'] . '" style="' . $style['mostrecent'] . '">' . $travelo['mostrecent_5r_puretext'] . '<span style="' . $style['mostrecent_highlight'] . '"> – ' . $travelo['mostrecent_5r_highlitedtext'] . '</span></a></td></tr></table>';

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


if ($save==1){
    ob_start();
}
traveloHead();
echo $style['travelo_bg'];
echo $style['travelo_maintable'];
traveloTableStart();
traveloSendingDate($travelo['sendingdate']);
/* menü */
traveloNewsletterHeader($style, $travelo_menu);
/* nagyképes */
if ($travelo['bp_discount']==0){
traveloBigPic($travelo_bp);
}
else {
    traveloBigPicDiscount($travelo_bp); 
}
/* Kisképes blokk */
/* 1sor */
if ($travelo['1ok'] == "on")
{
    traveloSmallPic($smallpic1);
}
/* 2sor */
if ($travelo['2ok'] == "on")
{
    traveloSmallPic($smallpic2);
}

/* 3. Sor */
if ($travelo['3ok'] == "on")
{
    traveloSmallPic($smallpic3);
}
/* 4.sor */
if ($travelo['4ok'] == "on")
{
    traveloSmallPic($smallpic4);
}
/* 5.sor */
if ($travelo['5ok'] == "on")
{
    traveloSmallPic($smallpic5);
}
/* Leggyakoribb 1 hasábos */
if ($travelo['mostrecent_1c_ok'] == "on")
{
    traveloMostRecent1c($newsletter['picfolder'], $travelo_mostrecent);
}
/* Leggyakoribb 2 hasábos */
if ($travelo['mostrecent_2c_ok'] == "on")
{
    traveloMostRecent2c($newsletter['picfolder'], $travelo_mostrecent2);
}
/* Cikkiek */
if ($travelo['article_ok'] == "on")
{
    traveloArticles($newsletter['picfolder'], $travelo_article);
}
/*Hirdetések2 */
if ($travelo['ad2_ok'] == "b_b")
{
    traveloDoubleBanner($travelo_banner2_1['banner'], $travelo_banner2_2['banner']);
}
if ($travelo['ad2_ok'] == "b2_sz")
{
    traveloBannerAndText($travelo_banner2_1['banner'], $travelo_textad2);
}
if ($travelo['ad2_ok'] == "sz_sz")
{
    traveloDoubleText($travelo_textad2, $travelo_textad2_2);
}
/* Hirdetések */
if ($travelo['ad_ok'] == "t_b")
{
    traveloTurPanAndBanner($travelo_turpan, $travelo_banner['banner']);
}
if ($travelo['ad_ok'] == "b_sz")
{
    traveloBannerAndText($travelo_banner['banner'], $travelo_textad);
}
if ($travelo['ad_ok'] == "t_sz")
{
    traveloTurPanAndText($travelo_turpan, $travelo_textad);
}
/* Bottom menü */
traveloBottomMenu($newsletter['picfolder']);
/* Legal statement */
traveloLegalStatement();
traveloTableEnd();
traveloBottomMenuMap();
traveloHtmlEnd();
if ($save==1) {
$title=$id."-travelo_nl.txt";
file_put_contents("save/$title", ob_get_contents());
file_put_contents("$dir/index.html", ob_get_contents());
$url="showtxt.php?title=$title";
header("Location: $url");

}
