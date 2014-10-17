<?php
require_once 'db.php';
require_once 'config.php';
//Küldés dátuma
@$id = ($_POST["id"]);
@$travelo['sendingdate'] = ($_POST["sendingdate"]);
//Mappa, amiben a szükséges képek, file-ok tárolódnak
@$travelo['folder'] = ($_POST["folder"]);

//általános analytics
@$travelo['analytics_source'] = ($_POST["analytics_source"]);
@$travelo['analytics_medium'] = ($_POST["analytics_medium"]);
@$analytics_camapaign = "";
@$title = $travelo['analytics_source']." ".@$travelo['sendingdate'];

//Menü
//menü 1. hely
@$travelo['menu1'] = ($_POST["menu1"]);
@$travelo['menu1_link'] = ($_POST["menu1_link"]);
@$travelo['menu1_analytics'] = ($_POST["menu1_analytics"]);
//menü 2. hely
@$travelo['menu2'] = ($_POST["menu2"]);
@$travelo['menu2_link'] = ($_POST["menu2_link"]);
@$travelo['menu2_analytics'] = ($_POST["menu2_analytics"]);
//menü 3. hely
@$travelo['menu3'] = ($_POST["menu3"]);
@$travelo['menu3_link'] = ($_POST["menu3_link"]);
@$travelo['menu3_analytics'] = ($_POST["menu3_analytics"]);
//menü 4. hely
@$travelo['menu4'] = ($_POST["menu4"]);
@$travelo['menu4_link'] = ($_POST["menu4_link"]);
@$travelo['menu4_analytics'] = ($_POST["menu4_analytics"]);
//menü 5. hely
@$travelo['menu5'] = ($_POST["menu5"]);
@$travelo['menu5_link'] = ($_POST["menu5_link"]);
@$travelo['menu5_analytics'] = ($_POST["menu5_analytics"]);

//Ajánlatok
//nagyképes
@$travelo['bp_link'] = ($_POST["bp_link"]);
@$travelo['bp_analytics'] = ($_POST["bp_analytics"]);
@$travelo['bp_pic'] = ($_POST["bp_pic"]);
@$travelo['bp_title'] = ($_POST["bp_title"]);
@$travelo['bp_text'] = ($_POST["bp_text"]);
@$travelo['bp_price'] = ($_POST["bp_price"]);
@$travelo['bp_orig_price'] = ($_POST["bp_orig_price"]);
@$travelo['bp_discount'] = ($_POST["bp_discount"]);
//nagyképes2
@$travelo['bp2_ok'] = ($_POST["bp2_ok"]);
@$travelo['bp2_link'] = ($_POST["bp2_link"]);
@$travelo['bp2_analytics'] = ($_POST["bp2_analytics"]);
@$travelo['bp2_pic'] = ($_POST['bp2_pic']);
@$travelo['bp2_title'] = ($_POST["bp2_title"]);
@$travelo['bp2_text'] = ($_POST["bp2_text"]);
@$travelo['bp2_price'] = ($_POST["bp2_price"]);
@$travelo['bp2_orig_price'] = ($_POST["bp2_orig_price"]);
@$travelo['bp2_discount'] = ($_POST["bp2_discount"]);
//nagyképes3
@$travelo['bp3_ok'] = ($_POST["bp3_ok"]);
@$travelo['bp3_link'] = ($_POST["bp3_link"]);
@$travelo['bp3_analytics'] = ($_POST["bp3_analytics"]);
@$travelo['bp3_pic'] = ($_POST['bp3_pic']);
@$travelo['bp3_title'] = ($_POST["bp3_title"]);
@$travelo['bp3_text'] = ($_POST["bp3_text"]);
@$travelo['bp3_price'] = ($_POST["bp3_price"]);
@$travelo['bp3_orig_price'] = ($_POST["bp3_orig_price"]);
@$travelo['bp3_discount'] = ($_POST["bp3_discount"]);

//Legfrisebb cikkek
@$travelo['article_ok'] = ($_POST["article_ok"]);
//Kiemelt
@$travelo['harticle_link'] = ($_POST["harticle_link"]);
@$travelo['harticle_analytics'] = ($_POST["harticle_analytics"]);
@$travelo['harticle_title'] = ($_POST["harticle_title"]);
@$travelo['harticle_date'] = ($_POST["harticle_date"]);
@$travelo['harticle_text'] = ($_POST["harticle_text"]);
//1.
@$travelo['article_1_link'] = ($_POST["article_1_link"]);
@$travelo['article_1_analytics'] = ($_POST["article_1_analytics"]);
@$travelo['article_1_title'] = ($_POST["article_1_title"]);
@$travelo['article_1_date'] = ($_POST["article_1_date"]);
//2.
@$travelo['article_2_link'] = ($_POST["article_2_link"]);
@$travelo['article_2_analytics'] = ($_POST["article_2_analytics"]);
@$travelo['article_2_title'] = ($_POST["article_2_title"]);
@$travelo['article_2_date'] = ($_POST["article_2_date"]);
//3.
@$travelo['article_3_link'] = ($_POST["article_3_link"]);
@$travelo['article_3_analytics'] = ($_POST["article_3_analytics"]);
@$travelo['article_3_title'] = ($_POST["article_3_title"]);
@$travelo['article_3_date'] = ($_POST["article_3_date"]);
//4.
@$travelo['article_4_link'] = ($_POST["article_4_link"]);
@$travelo['article_4_analytics'] = ($_POST["article_4_analytics"]);
@$travelo['article_4_title'] = ($_POST["article_4_title"]);
@$travelo['article_4_date'] = ($_POST["article_4_date"]);

//Hirdetések
@$travelo['ad_ok'] = ($_POST["advertisements"]);
//Banner
@$travelo['banner_link'] = ($_POST["banner_link"]);
@$travelo['banner_analytics'] = ($_POST["banner_analytics"]);
@$travelo['banner_pic'] = ($_POST["banner_pic"]);

//Szöveges
@$travelo['textad_link'] = ($_POST["textad_link"]);
@$travelo['textad_analytics'] = ($_POST["textad_analytics"]);
@$travelo['textad_pic'] = ($_POST["textad_pic"]);
@$travelo['textad_title'] = ($_POST["textad_title"]);
@$travelo['textad_text'] = ($_POST["textad_text"]);

//Turpan hírek
//1.
@$travelo['turpan_1_title'] = ($_POST["turpan_1_title"]);
@$travelo['turpan_1_link'] = ($_POST["turpan_1_link"]);
//2.
@$travelo['turpan_2_title'] = ($_POST["turpan_2_title"]);
@$travelo['turpan_2_link'] = ($_POST["turpan_2_link"]);
//3.
@$travelo['turpan_3_title'] = ($_POST["turpan_3_title"]);
@$travelo['turpan_3_link'] = ($_POST["turpan_3_link"]);
//4.
@$travelo['turpan_4_title'] = ($_POST["turpan_4_title"]);
@$travelo['turpan_4_link'] = ($_POST["turpan_4_link"]);

//Hirdetések2
@$travelo['ad2_ok'] = ($_POST["advertisements2"]);
//Banner1
@$travelo['banner2_1_link'] = ($_POST["banner2_1_link"]);
@$travelo['banner2_1_analytics'] = ($_POST["banner2_1_analytics"]);
@$travelo['banner2_1_pic'] = ($_POST['banner2_1_pic']);

//Banner2
@$travelo['banner2_2_link'] = ($_POST["banner2_2_link"]);
@$travelo['banner2_2_analytics'] = ($_POST["banner2_2_analytics"]);
@$travelo['banner2_2_pic'] = ($_POST['banner2_2_pic']);

//Szöveges
@$travelo['textad2_link'] = ($_POST["textad2_link"]);
@$travelo['textad2_analytics'] = ($_POST["textad2_analytics"]);
@$travelo['textad2_pic'] = ($_POST['textad2_pic']);
@$travelo['textad2_title'] = ($_POST["textad2_title"]);
@$travelo['textad2_text'] = ($_POST["textad2_text"]);

//Szöveges2_2
@$travelo['textad2_2_link'] = ($_POST["textad2_2_link"]);
@$travelo['textad2_2_analytics'] = ($_POST["textad2_2_analytics"]);
@$travelo['textad2_2_pic'] = ($_POST['textad2_2_pic']);
@$travelo['textad2_2_title'] = ($_POST["textad2_2_title"]);
@$travelo['textad2_2_text'] = ($_POST["textad2_2_text"]);
//print_r ($travelo);
$con = connectDb();
 updateHirlevTable("thematic_hirlev", $travelo, $id, $con);
closeDb($con);
$url = "success.php?hirlevel_id=$id";
header("Location: ".$url);
?>
