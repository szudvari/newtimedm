<?php

require_once 'db.php';
require_once 'functions.php';
require_once 'config.php';
require_once 'life_op.php';


$id = $_GET['hirlevel_id'];
$table = "life_op_hirlev";
$con = connectDbIso();
$travelo = getANewsletterIso($table, $id);
closeDb($con);

$dir = $website['root'] ."/dm". getFolderName($travelo['folder']);

//nagyképes
$travelo_separator['bp_link'] = separator($travelo['bp_link']);
$travelo_bp['link'] = $travelo['bp_link'] . $travelo_separator['bp_link'] . 'utm_source=' . $travelo['analytics_source'] . '&utm_medium=' . $travelo['analytics_medium'] . '&utm_campaign=' . $travelo['bp_analytics'];


//Other
$legal=iconv("UTF-8", "ISO-8859-2", "A Life Utazás és a jelen hírlevélben szereplő partnerei fenntartják
az utazással kapcsolatos feltételek és árak módosítasának jogát.
A Life.hu Utazási mellékletét a Confhotel-Net Kft. üzemelteti. 
Kapcsolat: +36-20-777-8095; life@travelo.hu 

--------------------------------------------------------------------------- 
Ezt a levelet az optimail online direkt-marketing rendszeren keresztül 
küldtük a(z) {email} címre az Ön előzetes hozzájárulásával, melyet az Origo
Zrt-nek tett a freemail.hu ingyenes rendszerébe történő regisztrációja
során. E szerint Ön marketingtartalmú célzott üzenetek fogadását vállalja. 
Szolgáltatásunkkal kapcsolatban bővebb információval szolgálunk az Ön 
számára a http://www.optimail.hu oldalon. 
<br>
Amennyiben a továbbiakban mégsem szeretne az érdeklődési körének megfelelő 
kedvezményes ajánlatokat vagy nyereményjáték-ismertetőket kapni, látogasson 
el az alábbi címre: 
{unsubscribeUrl} 

Az Origo Zrt. adatkezelési nyilvántartási azonosítója: 820-0001 
---------------------------------------------------------------------------");
$csomag = iconv("UTF-8", "ISO-8859-2","Csomagár :");
ob_start();
echo <<<EOT
{$travelo['bp_title']}
{$travelo['bp_text']}
>>> {$travelo['bp_link']}
$csomag{$travelo['bp_price']}

$legal
EOT;
$title=$id."-life_op_text.txt";
file_put_contents("save/$title", ob_get_contents());
file_put_contents("$dir/index.txt", ob_get_contents());
$url="showtxt.php?title=$title";
header("Location: $url");
htmlEnd();

