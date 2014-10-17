<?php

require_once 'db.php';
require_once 'functions.php';
require_once 'config.php';
require_once 'travelo_nl.php';


$id = $_GET['hirlevel_id'];
$table = "thematic_hirlev";
$con = connectDb();
$travelo = getANewsletterIso($table, $id);
closeDb($con);

$dir = $website['root'] . getFolderName($travelo['folder']);

//nagyképes1
$travelo_separator['bp_link'] = separator($travelo['bp_link']);
$travelo_bp['link'] = $travelo['bp_link'] . $travelo_separator['bp_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['bp_analytics'];

//nagyképes2
$travelo_separator['bp2_link'] = separator($travelo['bp2_link']);
$travelo_bp2['link'] = $travelo['bp2_link'] . $travelo_separator['bp2_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['bp2_analytics'];

//nagyképes3
$travelo_separator['bp3_link'] = separator($travelo['bp3_link']);
$travelo_bp3['link'] = $travelo['bp3_link'] . $travelo_separator['bp3_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['bp3_analytics'];

//Legfrisebb cikkek
//Kiemelt
$travelo_separator['harticle_link'] = separator($travelo['harticle_link']);
$travelo_article['h_link'] = $travelo['harticle_link'] . $travelo_separator['harticle_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['harticle_analytics'];

//cikk1
$travelo_separator['article_1_link'] = separator($travelo['article_1_link']);
$travelo_article['1_link'] = $travelo['article_1_link'] . $travelo_separator['article_1_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['article_1_analytics'];

//cikk2
$travelo_separator['article_2_link'] = separator($travelo['article_2_link']);
$travelo_article['2_link'] = $travelo['article_2_link'] . $travelo_separator['article_2_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['article_2_analytics'];

//cikk3
$travelo_separator['article_3_link'] = separator($travelo['article_3_link']);
$travelo_article['3_link'] = $travelo['article_3_link'] . $travelo_separator['article_3_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['article_3_analytics'];

//cikk4
$travelo_separator['article_4_link'] = separator($travelo['article_4_link']);
$travelo_article['4_link'] = $travelo['article_4_link'] . $travelo_separator['article_4_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['article_4_analytics'];

//Szöveges
$travelo_separator['textad_link'] = separator($travelo['textad_link']);
if ($travelo['textad_analytics'] == "") {
    $travelo_textad['link'] = $travelo['textad_link'];
} else {
    $travelo_textad['link'] = $travelo['textad_link'] . $travelo_separator['textad_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['textad_analytics'];
}
$travelo_textad['title'] = '<a href="' . $travelo_textad['link'] . '">' . $travelo['textad_title'] . '</a>';
$travelo_textad['text'] = '<a href="' . $travelo_textad['link'] . '">' . $travelo['textad_text'] . '</a>';

//Szöveges 2_1
$travelo_separator['textad2_link'] = separator($travelo['textad2_link']);
$travelo_separator['textad2_link'] = separator($travelo['textad2_link']);
if ($travelo['textad2_analytics'] == "") {
    $travelo_textad2['link'] = $travelo['textad2_link'];
} else {
    $travelo_textad2['link'] = $travelo['textad2_link'] . $travelo_separator['textad2_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['textad2_analytics'];
}


//Szöveges 2_2
$travelo_separator['textad2_2_link'] = separator($travelo['textad2_2_link']);
if ($travelo['textad2_2_analytics'] == "") {
    $travelo_textad2_2['link'] = $travelo['textad2_2_link'];
} else {
    $travelo_textad2_2['link'] = $travelo['textad2_2_link'] . $travelo_separator['textad2_2_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['textad2_2_analytics'];
}


//Other

$csomag = iconv("UTF-8", "ISO-8859-2","Csomagár :");
$kiemelt = iconv("UTF-8", "ISO-8859-2", "Kiemelt ajánlatok:");
$leggyakoribb = iconv("UTF-8", "ISO-8859-2", "Leggyakoribb kresések:");
$cikkek = iconv("UTF-8", "ISO-8859-2", "Legfrissebb cikkeink:");
$turpan1 = iconv("UTF-8", "ISO-8859-2", "Utazási hírek:");
$turpan2 = iconv("UTF-8", "ISO-8859-2", "turizmus.com - utazási híreink forrása");
$hirdetes = iconv("UTF-8", "ISO-8859-2", "Hirdetés:");
$legal=iconv("UTF-8", "ISO-8859-2", "Ezt az mailt azért kapta, mert korábbi regisztrációjával hozzájárult
a Travelo és a CEMP csoport tartalmaiból összeállított hírlevél fogadásához.
Ha szeretne leiratkozni, küldje el szándékát a hirlevel@travelo.hu email címre!

--------------------------------------------------------------------------- 
A Confhotel-Net Kft. és a jelen hírlevélben szereplő partnerei fenntartják
az utazással kapcsolatos feltételek és árak módosításának jogát.

Confhotel-NEt Kft. | 1033 Budapest, Flórián tér 1. | Tel.: +36 1 7001 002
Fax: +36 1 7002 502 | E-mail: info@travelo.hu
---------------------------------------------------------------------------");




ob_start();
echo <<<EOT
$kiemelt
{$travelo['bp_title']}
{$travelo['bp_text']}
>>> {$travelo_bp['link']}
$csomag{$travelo['bp_price']}

EOT;

/* Cikkiek */
if ($travelo['article_ok'] == "on")
{
echo <<<EOT

---
$cikkek
{$travelo['harticle_title']}
{$travelo['harticle_date']}
{$travelo['harticle_text']}
>>>{$travelo_article['h_link']}
    
{$travelo['article_1_title']}
{$travelo['article_1_date']}
>>>{$travelo_article['1_link']}
    
{$travelo['article_2_title']}
{$travelo['article_2_date']}
>>>{$travelo_article['2_link']}
    
{$travelo['article_3_title']}
{$travelo['article_3_date']}
>>>{$travelo_article['3_link']}
    
{$travelo['article_4_title']}
{$travelo['article_4_date']}
>>>{$travelo_article['4_link']}  
    
EOT;
}
/* Hirdetések */
if ($travelo['ad2_ok'] == "sz_sz")
{
echo <<<EOT

--- 
$hirdetes
{$travelo['textad2_title']}
{$travelo['textad2_text']}
>>>{$travelo_textad2['link']}

{$travelo['textad2_2_title']}
{$travelo['textad2_2_text']}
>>>{$travelo_textad2_2['link']}
 
EOT;
}
if ($travelo['ad2_ok'] == "b2_sz")
{
echo <<<EOT

--- 
$hirdetes
{$travelo['textad2_title']}
{$travelo['textad2_text']}
>>>{$travelo_textad2['link']}

EOT;
}

if ($travelo['ad_ok'] == "t_b")
{
echo <<<EOT

--- 
$turpan1
{$travelo['turpan_1_title']} - {$travelo['turpan_1_link']}
{$travelo['turpan_2_title']} - {$travelo['turpan_2_link']}
{$travelo['turpan_3_title']} - {$travelo['turpan_3_link']}
{$travelo['turpan_4_title']} - {$travelo['turpan_4_link']}
   
$turpan2
        
EOT;
}
if ($travelo['ad_ok'] == "b_sz")
{
echo <<<EOT

--- 
$hirdetes
{$travelo['textad_title']}
{$travelo['textad_text']}
>>>{$travelo_textad['link']}
 
EOT;

}
if ($travelo['ad_ok'] == "t_sz")
{
   echo <<<EOT
    
 --- 
$turpan1
{$travelo['turpan_1_title']} - {$travelo['turpan_1_link']}
{$travelo['turpan_2_title']} - {$travelo['turpan_2_link']}
{$travelo['turpan_3_title']} - {$travelo['turpan_3_link']}
{$travelo['turpan_4_title']} - {$travelo['turpan_4_link']}
   
$turpan2
   
   --- 
$hirdetes
{$travelo['textad_title']}
{$travelo['textad_text']}
>>>{$travelo_textad['link']}
EOT;
}

echo <<<EOT


$legal
EOT;

$title=$id."-travelo_text.txt";
file_put_contents("save/$title", ob_get_contents());
file_put_contents("$dir/index.txt", ob_get_contents());
$url="showtxt.php?title=$title";
header("Location: $url");
htmlEnd();