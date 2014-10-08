<?php

require_once 'db.php';
require_once 'functions.php';
require_once 'config.php';
require_once 'intravena_nl.php';
include '/var/local/www/szallas.travelo.hu/public/inc/intravena_true.php';

$id = $_GET['hirlevel_id'];
$table = "intravena_hirlev";


$con = connectDb();
$travelo = getANewsletter($table, $id);
closeDb($con);

$today = date('Y-m-d'); 

$folder_name = getFolderName($travelo['folder']);
$dir = $website['root'] . "intravena/" . $folder_name . "/save";

if (!mkdir($dir))
{
    if (file_exists($dir))
    {
        $error = error_get_last();
        echo $error['message'] . "<br>";
        echo $dir . "<br>";
        echo "A könyvtár már létezik";
    }
    else
    {
        $error = error_get_last();
        echo $error['message'] . "<br>";
        die("hiba, a könyvtár nem jött létre");
    }
}
else
{
    chmod($dir, 0777);
}

echo "Elkeszult hirlevelek: ";
foreach ($int_true as $site) {


//style
    $style['travelo_title'] = 'color:#1a438a; font-size:16px; font-weight:bold; text-decoration:none; text-transform:uppercase';
    $style['travelo_bptext'] = 'color:#010101; font-size:14px; text-decoration:none;';
    $style['travelo_subtitle'] = 'color:#5d5d5d; font-size:13px; text-decoration:none;';
    $style['travelo_text'] = 'color:#010101; font-size:13px; text-decoration:none;';
    $style['travelo_textad_title'] = 'color:#1a438a; font-size:15px; font-weight:bold; text-decoration:none; text-transform:uppercase';
    $style['travelo_bg'] = '<body style="background: #cfcfcf; text-decoration:none; font-size: 14px; font-family: \'OpenSans\',arial,helvetica,sans-serif;margin:0;padding:0">';
    $style['travelo_maintable'] = '<table style="background: #cfcfcf; width: 100%; font-family: \'OpenSans\',arial,helvetica,sans-serif" border="0" align="center">';

    $style['price'] = "color:#D40063; font-size:16px; font-weight: bold; text-decoration:none;";
    $style['orig_price'] = "color:#a8a8a8; font-size:16px; text-decoration: line-through;";
    $style['discount'] = "padding: 5px; background-color:#D40063; border-radius:5px; color:#fff; font-size:16px; font-weight: bold; text-decoration: none;";

//header
    $style['travelo_logo_img'] = '<img src="http://intravena.hu/public/whitelabels/intravena/images/intravena.png">';
    $style['travelo_header'] = '"width:30%; background-color: #fff; padding: 0 0 0 10px;"';
    $style['travelo_logo'] = $style['travelo_logo_img'];
    $style['travelo_menu_bg_col'] = 'bgcolor: #fff';
    $style['travelo_menu_bg'] = $style['travelo_menu_bg_col'];
    $style['travelo_menu'] = '"' . $style['travelo_menu_bg'] . ' padding: 8px 0  8px 0; margin-top:5px; border-left-style:solid; border-top-style:solid; border-bottom-style:solid; border-width:1px; border-color:#fff;  text-align: right; font-size: 14px; width:5%;"';

//logo
    $travelo['intravena_logo_img'] = '<img src="http://intravena.hu/public/whitelabels/intravena/logo/' . $site . '.gif">';

//nagyképes
    $whitelabel['bp_link'] = siteReplace($travelo['bp_link'], $site);
    $travelo_separator['bp_link'] = separator($whitelabel['bp_link']);
    $travelo_bp['link'] = $whitelabel['bp_link'] . $travelo_separator['bp_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['bp_analytics'];
    $travelo_bp['pic'] = '<a href="' . $travelo_bp['link'] . '" style="display: block;"><img src="' . $travelo['folder'] . '/' . $travelo['bp_pic'] . '" border="0"></a>';
    $travelo_bp['title'] = '<a href="' . $travelo_bp['link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['bp_title'] . '</a>';
    $travelo_bp['text'] = '<a href="' . $travelo_bp['link'] . '" style="' . $style['travelo_bptext'] . '">' . $travelo['bp_text'] . '</a>';
    $travelo_bp['price'] = '<a href="' . $travelo_bp['link'] . '" style="' . $style['price'] . '">' . $travelo['bp_price'] . '</a>';
    $travelo_bp['orig_price'] = '<a href="' . $travelo_bp['link'] . '" style="' . $style['orig_price'] . '">' . $travelo['bp_orig_price'] . '</a>';
    $travelo_bp['discount'] = '<a href="' . $travelo_bp['link'] . '" style="' . $style['discount'] . '">' . $travelo['bp_discount'] . '</a>';

//kisképes blokk
//1 - bal
    $whitelabel['1l_link'] = siteReplace($travelo['1l_link'], $site);
    $travelo_separator['1l_link'] = separator($whitelabel['1l_link']);
    $smallpic1['l_discounted'] = isDiscounted($travelo['1l_discount']);
    $smallpic1['l_link'] = $whitelabel['1l_link'] . $travelo_separator['1l_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['1l_analytics'];
    $smallpic1['l_pic'] = '<a href="' . $smallpic1['l_link'] . '" style="display: block;"><img src="' . $travelo['folder'] . '/' . $travelo['1l_pic'] . '" border="0"></a>';
    $smallpic1['l_title'] = '<a href="' . $smallpic1['l_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['1l_title'] . '</a>';
    $smallpic1['l_subtitle'] = '<a href="' . $smallpic1['l_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['1l_subtitle'] . '</a>';
    $smallpic1['l_text'] = '<a href="' . $smallpic1['l_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['1l_text'] . '</a>';
    $smallpic1['l_price'] = '<a href="' . $smallpic1['l_link'] . '" style="' . $style['price'] . '">' . $travelo['1l_price'] . '</a>';
    $smallpic1['l_orig_price'] = '<a href="' . $smallpic1['l_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['1l_orig_price'] . '</a>';
    $smallpic1['l_discount'] = '<a href="' . $smallpic1['l_link'] . '" style="' . $style['discount'] . '">' . $travelo['1l_discount'] . '</a>';
//1 - jobb
    $whitelabel['1r_link'] = siteReplace($travelo['1r_link'], $site);
    $travelo_separator['1r_link'] = separator($whitelabel['1r_link']);
    $smallpic1['r_discounted'] = isDiscounted($travelo['1r_discount']);
    $smallpic1['r_link'] = $whitelabel['1r_link'] . $travelo_separator['1r_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['1r_analytics'];
    $smallpic1['r_pic'] = '<a href="' . $smallpic1['r_link'] . '" style="display: block;"><img src="' . $travelo['folder'] . '/' . $travelo['1r_pic'] . '" border="0"></a>';
    $smallpic1['r_title'] = '<a href="' . $smallpic1['r_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['1r_title'] . '</a>';
    $smallpic1['r_subtitle'] = '<a href="' . $smallpic1['r_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['1r_subtitle'] . '</a>';
    $smallpic1['r_text'] = '<a href="' . $smallpic1['r_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['1r_text'] . '</a>';
    $smallpic1['r_price'] = '<a href="' . $smallpic1['r_link'] . '" style="' . $style['price'] . '">' . $travelo['1r_price'] . '</a>';
    $smallpic1['r_orig_price'] = '<a href="' . $smallpic1['r_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['1r_orig_price'] . '</a>';
    $smallpic1['r_discount'] = '<a href="' . $smallpic1['r_link'] . '" style="' . $style['discount'] . '">' . $travelo['1r_discount'] . '</a>';
//2 - bal
    $whitelabel['2l_link'] = siteReplace($travelo['2l_link'], $site);
    $travelo_separator['2l_link'] = separator($whitelabel['2l_link']);
    $smallpic2['l_discounted'] = isDiscounted($travelo['2l_discount']);
    $smallpic2['l_link'] = $whitelabel['2l_link'] . $travelo_separator['2l_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['2l_analytics'];
    $smallpic2['l_pic'] = '<a href="' . $smallpic2['l_link'] . '" style="display: block;"><img src="' . $travelo['folder'] . '/' . $travelo['2l_pic'] . '" border="0"></a>';
    $smallpic2['l_title'] = '<a href="' . $smallpic2['l_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['2l_title'] . '</a>';
    $smallpic2['l_subtitle'] = '<a href="' . $smallpic2['l_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['2l_subtitle'] . '</a>';
    $smallpic2['l_text'] = '<a href="' . $smallpic2['l_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['2l_text'] . '</a>';
    $smallpic2['l_price'] = '<a href="' . $smallpic2['l_link'] . '" style="' . $style['price'] . '">' . $travelo['2l_price'] . '</a>';
    $smallpic2['l_orig_price'] = '<a href="' . $smallpic2['l_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['2l_orig_price'] . '</a>';
    $smallpic2['l_discount'] = '<a href="' . $smallpic2['l_link'] . '" style="' . $style['discount'] . '">' . $travelo['2l_discount'] . '</a>';
//2 - jobb
    $whitelabel['2r_link'] = siteReplace($travelo['2r_link'], $site);
    $travelo_separator['2r_link'] = separator($whitelabel['2r_link']);
    $smallpic2['r_discounted'] = isDiscounted($travelo['2r_discount']);
    $smallpic2['r_link'] = $whitelabel['2r_link'] . $travelo_separator['2r_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['2r_analytics'];
    $smallpic2['r_pic'] = '<a href="' . $smallpic2['r_link'] . '" style="display: block;"><img src="' . $travelo['folder'] . '/' . $travelo['2r_pic'] . '" border="0"></a>';
    $smallpic2['r_title'] = '<a href="' . $smallpic2['r_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['2r_title'] . '</a>';
    $smallpic2['r_subtitle'] = '<a href="' . $smallpic2['r_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['2r_subtitle'] . '</a>';
    $smallpic2['r_text'] = '<a href="' . $smallpic2['r_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['2r_text'] . '</a>';
    $smallpic2['r_price'] = '<a href="' . $smallpic2['r_link'] . '" style="' . $style['price'] . '">' . $travelo['2r_price'] . '</a>';
    $smallpic2['r_orig_price'] = '<a href="' . $smallpic2['r_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['2r_orig_price'] . '</a>';
    $smallpic2['r_discount'] = '<a href="' . $smallpic2['r_link'] . '" style="' . $style['discount'] . '">' . $travelo['2r_discount'] . '</a>';
//3 - bal
    $whitelabel['3l_link'] = siteReplace($travelo['3l_link'], $site);
    $travelo_separator['3l_link'] = separator($whitelabel['3l_link']);
    $smallpic3['l_discounted'] = isDiscounted($travelo['3l_discount']);
    $smallpic3['l_link'] = $whitelabel['3l_link'] . $travelo_separator['3l_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['3l_analytics'];
    $smallpic3['l_pic'] = '<a href="' . $smallpic3['l_link'] . '" style="display: block;"><img src="' . $travelo['folder'] . '/' . $travelo['3l_pic'] . '" border="0"></a>';
    $smallpic3['l_title'] = '<a href="' . $smallpic3['l_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['3l_title'] . '</a>';
    $smallpic3['l_subtitle'] = '<a href="' . $smallpic3['l_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['3l_subtitle'] . '</a>';
    $smallpic3['l_text'] = '<a href="' . $smallpic3['l_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['3l_text'] . '</a>';
    $smallpic3['l_price'] = '<a href="' . $smallpic3['l_link'] . '" style="' . $style['price'] . '">' . $travelo['3l_price'] . '</a>';
    $smallpic3['l_orig_price'] = '<a href="' . $smallpic3['l_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['3l_orig_price'] . '</a>';
    $smallpic3['l_discount'] = '<a href="' . $smallpic3['l_link'] . '" style="' . $style['discount'] . '">' . $travelo['3l_discount'] . '</a>';
//3 - jobb
    $whitelabel['3r_link'] = siteReplace($travelo['3r_link'], $site);
    $travelo_separator['3r_link'] = separator($whitelabel['3r_link']);
    $smallpic3['r_discounted'] = isDiscounted($travelo['3r_discount']);
    $smallpic3['r_link'] = $whitelabel['3r_link'] . $travelo_separator['3r_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['3r_analytics'];
    $smallpic3['r_pic'] = '<a href="' . $smallpic3['r_link'] . '" style="display: block;"><img src="' . $travelo['folder'] . '/' . $travelo['3r_pic'] . '" border="0"></a>';
    $smallpic3['r_title'] = '<a href="' . $smallpic3['r_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['3r_title'] . '</a>';
    $smallpic3['r_subtitle'] = '<a href="' . $smallpic3['r_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['3r_subtitle'] . '</a>';
    $smallpic3['r_text'] = '<a href="' . $smallpic3['r_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['3r_text'] . '</a>';
    $smallpic3['r_price'] = '<a href="' . $smallpic3['r_link'] . '" style="' . $style['price'] . '">' . $travelo['3r_price'] . '</a>';
    $smallpic3['r_orig_price'] = '<a href="' . $smallpic3['r_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['3r_orig_price'] . '</a>';
    $smallpic3['r_discount'] = '<a href="' . $smallpic3['r_link'] . '" style="' . $style['discount'] . '">' . $travelo['3r_discount'] . '</a>';
//4 - bal
    $whitelabel['4l_link'] = siteReplace($travelo['4l_link'], $site);
    $travelo_separator['4l_link'] = separator($whitelabel['4l_link']);
    $smallpic4['l_discounted'] = isDiscounted($travelo['4l_discount']);
    $smallpic4['l_link'] = $whitelabel['4l_link'] . $travelo_separator['4l_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['4l_analytics'];
    $smallpic4['l_pic'] = '<a href="' . $smallpic4['l_link'] . '" style="display: block;"><img src="' . $travelo['folder'] . '/' . $travelo['4l_pic'] . '" border="0"></a>';
    $smallpic4['l_title'] = '<a href="' . $smallpic4['l_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['4l_title'] . '</a>';
    $smallpic4['l_subtitle'] = '<a href="' . $smallpic4['l_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['4l_subtitle'] . '</a>';
    $smallpic4['l_text'] = '<a href="' . $smallpic4['l_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['4l_text'] . '</a>';
    $smallpic4['l_price'] = '<a href="' . $smallpic4['l_link'] . '" style="' . $style['price'] . '">' . $travelo['4l_price'] . '</a>';
    $smallpic4['l_orig_price'] = '<a href="' . $smallpic4['l_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['4l_orig_price'] . '</a>';
    $smallpic4['l_discount'] = '<a href="' . $smallpic4['l_link'] . '" style="' . $style['discount'] . '">' . $travelo['4l_discount'] . '</a>';
//4 - jobb
    $whitelabel['4r_link'] = siteReplace($travelo['4r_link'], $site);
    $travelo_separator['4r_link'] = separator($whitelabel['4r_link']);
    $smallpic4['r_discounted'] = isDiscounted($travelo['4r_discount']);
    $smallpic4['r_link'] = $whitelabel['4r_link'] . $travelo_separator['4r_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['4r_analytics'];
    $smallpic4['r_pic'] = '<a href="' . $smallpic4['r_link'] . '" style="display: block;"><img src="' . $travelo['folder'] . '/' . $travelo['4r_pic'] . '" border="0"></a>';
    $smallpic4['r_title'] = '<a href="' . $smallpic4['r_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['4r_title'] . '</a>';
    $smallpic4['r_subtitle'] = '<a href="' . $smallpic4['r_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['4r_subtitle'] . '</a>';
    $smallpic4['r_text'] = '<a href="' . $smallpic4['r_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['4r_text'] . '</a>';
    $smallpic4['r_price'] = '<a href="' . $smallpic4['r_link'] . '" style="' . $style['price'] . '">' . $travelo['4r_price'] . '</a>';
    $smallpic4['r_orig_price'] = '<a href="' . $smallpic4['r_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['4r_orig_price'] . '</a>';
    $smallpic4['r_discount'] = '<a href="' . $smallpic4['r_link'] . '" style="' . $style['discount'] . '">' . $travelo['4r_discount'] . '</a>';
//5 - bal
    $whitelabel['5l_link'] = siteReplace($travelo['5l_link'], $site);
    $travelo_separator['5l_link'] = separator($whitelabel['5l_link']);
    $smallpic5['l_discounted'] = isDiscounted($travelo['5l_discount']);
    $smallpic5['l_link'] = $whitelabel['5l_link'] . $travelo_separator['5l_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['5l_analytics'];
    $smallpic5['l_pic'] = '<a href="' . $smallpic5['l_link'] . '" style="display: block;"><img src="' . $travelo['folder'] . '/' . $travelo['5l_pic'] . '" border="0"></a>';
    $smallpic5['l_title'] = '<a href="' . $smallpic5['l_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['5l_title'] . '</a>';
    $smallpic5['l_subtitle'] = '<a href="' . $smallpic5['l_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['5l_subtitle'] . '</a>';
    $smallpic5['l_text'] = '<a href="' . $smallpic5['l_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['5l_text'] . '</a>';
    $smallpic5['l_price'] = '<a href="' . $smallpic5['l_link'] . '" style="' . $style['price'] . '">' . $travelo['5l_price'] . '</a>';
    $smallpic5['l_orig_price'] = '<a href="' . $smallpic5['l_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['5l_orig_price'] . '</a>';
    $smallpic5['l_discount'] = '<a href="' . $smallpic5['l_link'] . '" style="' . $style['discount'] . '">' . $travelo['5l_discount'] . '</a>';
//5 - jobb
    $whitelabel['5r_link'] = siteReplace($travelo['5r_link'], $site);
    $travelo_separator['5r_link'] = separator($whitelabel['5r_link']);
    $smallpic5['r_discounted'] = isDiscounted($travelo['5r_discount']);
    $smallpic5['r_link'] = $whitelabel['5r_link'] . $travelo_separator['5r_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['5r_analytics'];
    $smallpic5['r_pic'] = '<a href="' . $smallpic5['r_link'] . '" style="display: block;"><img src="' . $travelo['folder'] . '/' . $travelo['5r_pic'] . '" border="0"></a>';
    $smallpic5['r_title'] = '<a href="' . $smallpic5['r_link'] . '" style="' . $style['travelo_title'] . '">' . $travelo['5r_title'] . '</a>';
    $smallpic5['r_subtitle'] = '<a href="' . $smallpic5['r_link'] . '" style="' . $style['travelo_subtitle'] . '">' . $travelo['5r_subtitle'] . '</a>';
    $smallpic5['r_text'] = '<a href="' . $smallpic5['r_link'] . '" style="' . $style['travelo_text'] . '">' . $travelo['5r_text'] . '</a>';
    $smallpic5['r_price'] = '<a href="' . $smallpic5['r_link'] . '" style="' . $style['price'] . '">' . $travelo['5r_price'] . '</a>';
    $smallpic5['r_orig_price'] = '<a href="' . $smallpic5['r_link'] . '" style="' . $style['orig_price'] . '">' . $travelo['5r_orig_price'] . '</a>';
    $smallpic5['r_discount'] = '<a href="' . $smallpic5['r_link'] . '" style="' . $style['discount'] . '">' . $travelo['5r_discount'] . '</a>';
    
    ob_start();
    intravenaHead();
    echo $style['travelo_bg'];
    echo $style['travelo_maintable'];
    intravenaTableStart();
    intravenaSendingDate($travelo['sendingdate']);
    /* menü */
    intravenaNewsletterHeader($style, $travelo);
    /* nagyképes */
    if ($travelo['bp_discount'] == 0)
    {
        intravenaBigPic($travelo_bp);
    }
    else
    {
        intravenaBigPicDiscount($travelo_bp);
    }
    /* Kisképes blokk */
    /* 1sor */
    if ($travelo['1ok'] == "on")
    {
        intravenaSmallPic($smallpic1);
    }
    /* 2sor */
    if ($travelo['2ok'] == "on")
    {
        intravenaSmallPic($smallpic2);
    }

    /* 3. Sor */
    if ($travelo['3ok'] == "on")
    {
        intravenaSmallPic($smallpic3);
    }
    /* 4.sor */
    if ($travelo['4ok'] == "on")
    {
        intravenaSmallPic($smallpic4);
    }
    /* 5.sor */
    if ($travelo['5ok'] == "on")
    {
        intravenaSmallPic($smallpic5);
    }
    /* Legal statement */
    intravenaLegalStatement();
    intravenaTableEnd();
//traveloBottomMenuMap();
    intravenaHtmlEnd();
    $filename = $site . "-intravena_hirlevel-".$today;
    

    file_put_contents($dir . "/" . $filename.".html", ob_get_contents());
    wkhtmltox_convert('pdf',
            array('out' => $dir . "/" . $filename.'.pdf', 'imageQuality' => '95', 
                'margin.right' => '1.5cm', 'margin.left' => '1.5cm', 
                'margin.top' => '1.5cm', 'documentTitle' => $filename),
            array(
                array('page' => $dir . "/" .$filename.'.html'),
            ));
    ob_end_clean();
    
   
}
$url="newsletter_list.php?intravena=done";
header("Location: $url");
