<?php
require_once 'db.php';
require_once 'functions.php';
require_once 'config.php';
require_once 'life_nl.php';

$id = $_GET['hirlevel_id'];
@$save=$_GET['save'];
$table = "life_hirlev";
$con = connectDbIso();
$travelo = getANewsletterIso($table, $id);
closeDb($con);

$dir = $website['root'] ."/dm". getFolderName($travelo['folder']);


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
$travelo_bp['price'] = '<a href="' . $travelo_bp['link'] . '" style="' . $style['price'] . '">' . $travelo['bp_price'] . '</a>';
$travelo_bp['orig_price'] = '<a href="' . $travelo_bp['link'] . '" style="' . $style['orig_price'] . '">' . $travelo['bp_orig_price'] . '</a>';
$travelo_bp['discount'] = '<a href="' . $travelo_bp['link'] . '" style="' . $style['discount'] . '">' . $travelo['bp_discount'] . '</a>';

//kisképes blokk
//1 - bal
$travelo_separator['1l_link'] = separator($travelo['1l_link']);
$smallpic1['l_discounted'] = isDiscounted($travelo['1l_discount']);
$smallpic1['l_link'] = $travelo['1l_link'] . $travelo_separator['1l_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['1l_analytics'];
$smallpic1['l_pic'] = '<a href="' . $smallpic1['l_link'] . '"><img src="' . $travelo['1l_pic'] . '" border="0"></a>';
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
$smallpic1['r_pic'] = '<a href="' . $smallpic1['r_link'] . '"><img src="' . $travelo['1r_pic'] . '" border="0"></a>';
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
$smallpic2['l_pic'] = '<a href="' . $smallpic2['l_link'] . '"><img src="' . $travelo['2l_pic'] . '" border="0"></a>';
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
$smallpic2['r_pic'] = '<a href="' . $smallpic2['r_link'] . '"><img src="' . $travelo['2r_pic'] . '" border="0"></a>';
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
$smallpic3['l_pic'] = '<a href="' . $smallpic3['l_link'] . '"><img src="' . $travelo['3l_pic'] . '" border="0"></a>';
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
$smallpic3['r_pic'] = '<a href="' . $smallpic3['r_link'] . '"><img src="' . $travelo['3r_pic'] . '" border="0"></a>';
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
$smallpic4['l_pic'] = '<a href="' . $smallpic4['l_link'] . '"><img src="' . $travelo['4l_pic'] . '" border="0"></a>';
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
$smallpic4['r_pic'] = '<a href="' . $smallpic4['r_link'] . '"><img src="' . $travelo['4r_pic'] . '" border="0"></a>';
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
$smallpic5['l_pic'] = '<a href="' . $smallpic5['l_link'] . '"><img src="' . $travelo['5l_pic'] . '" border="0"></a>';
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
$smallpic5['r_pic'] = '<a href="' . $smallpic5['r_link'] . '"><img src="' . $travelo['5r_pic'] . '" border="0"></a>';
$smallpic5['r_title'] = '<a href="' . $smallpic5['r_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['5r_title'] . '</a>';
$smallpic5['r_subtitle'] = '<a href="' . $smallpic5['r_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['5r_subtitle'] . '</a>';
$smallpic5['r_text'] = '<a href="' . $smallpic5['r_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['5r_text'] . '</a>';
$smallpic5['r_price'] = '<a href="' . $smallpic5['r_link'] . '" style="' . $style['price'] . '">' . $travelo['5r_price'] . '</a>';
$smallpic5['r_orig_price'] = '<a href="' . $smallpic5['r_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['5r_orig_price'] . '</a>';
$smallpic5['r_discount'] = '<a href="' . $smallpic5['r_link'] . '" style="' . $style['discount'] . '">' . $travelo['5r_discount'] . '</a>';
//Other



if ($save==1){
    ob_start();
}
lifeHead();
lifeTableStart();
lifeMenu($style, $travelo_menu);
if ($travelo['bp_discount']==0){
lifeBigPic($travelo_bp);
}
else {
    lifeBigPicDiscount($travelo_bp); 
}
if ($travelo['1ok'] == "on")
{
    lifeSmallPic($smallpic1);
}
/* 2sor */
if ($travelo['2ok'] == "on")
{
    lifeSmallPic($smallpic2);
}

/* 3. Sor */
if ($travelo['3ok'] == "on")
{
    lifeSmallPic($smallpic3);
}
/* 4.sor */
if ($travelo['4ok'] == "on")
{
    lifeSmallPic($smallpic4);
}
/* 5.sor */
if ($travelo['5ok']== "on")
{
    lifeSmallPic($smallpic5);
}
//lifeBottomMenu();
lifeLegalNotice();
lifeOptimailFooter();
lifeTableEnd();
//lifeBottomMenuMap();
lifeHtmlEnd();
if ($save==1) {
$title=$id."-life_nl_html.txt";
file_put_contents("save/$title", ob_get_contents());
file_put_contents("$dir/index.html", ob_get_contents());
$url="showtxt.php?title=$title";
header("Location: $url");
}
?>