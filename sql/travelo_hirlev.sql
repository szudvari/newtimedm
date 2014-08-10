CREATE TABLE `travelo_hirlev` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hirlev_id` int(11) NOT NULL,
  `sendingdate` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `folder` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `analytics_source` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `analytics_medium` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu1` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu1_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu1_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu2` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu2_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu2_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu3` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu3_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu3_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu4` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu4_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu4_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu5` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu5_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu5_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `bp_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `bp_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `bp_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `bp_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `bp_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `bp_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `1ok` tinytext,
  `1l_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1l_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1l_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1l_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1l_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1l_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1l_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1r_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1r_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1r_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1r_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1r_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1r_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1r_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2ok` tinytext,
  `2l_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2l_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2l_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2l_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2l_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2l_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2l_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2r_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2r_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2r_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2r_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2r_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2r_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2r_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3ok` tinytext,
  `3l_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3l_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3l_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3l_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3l_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3l_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3l_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3r_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3r_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3r_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3r_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3r_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3r_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3r_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4ok` tinytext,
  `4l_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4l_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4l_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4l_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4l_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4l_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4l_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4r_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4r_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4r_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4r_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4r_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4r_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4r_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5ok` tinytext,
  `5l_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5l_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5l_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5l_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5l_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5l_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5l_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5r_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5r_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5r_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5r_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5r_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5r_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5r_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_1c_ok` tinytext,
  `mostrecent_1_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_1_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_1_puretext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_1_highlitedtext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_2_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_2_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_2_puretext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_2_highlitedtext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_3_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_3_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_3_puretext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_3_highlitedtext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_4_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_4_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_4_puretext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_4_highlitedtext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_5_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_5_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_5_puretext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_5_highlitedtext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_2c_ok` tinytext,
  `mostrecent_1l_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_1l_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_1l_puretext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_1l_highlitedtext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_1r_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_1r_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_1r_puretext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_1r_highlitedtext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_2l_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_2l_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_2l_puretext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_2l_highlitedtext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_2r_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_2r_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_2r_puretext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_2r_highlitedtext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_3l_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_3l_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_3l_puretext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_3l_highlitedtext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_3r_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_3r_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_3r_puretext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_3r_highlitedtext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_4l_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_4l_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_4l_puretext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_4l_highlitedtext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_4r_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_4r_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_4r_puretext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_4r_highlitedtext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_5l_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_5l_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_5l_puretext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_5l_highlitedtext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_5r_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_5r_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_5r_puretext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `mostrecent_5r_highlitedtext` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `article_ok` tinytext,
  `harticle_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `harticle_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `harticle_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `harticle_date` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `harticle_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `article_1_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `article_1_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `article_1_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `article_1_date` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `article_2_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `article_2_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `article_2_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `article_2_date` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `article_3_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `article_3_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `article_3_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `article_3_date` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `article_4_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `article_4_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `article_4_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `article_4_date` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `ad_ok` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `banner_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `banner_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `banner_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `textad_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `textad_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `textad_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `textad_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `textad_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `turpan_1_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `turpan_1_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `turpan_2_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `turpan_2_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `turpan_3_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `turpan_3_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `turpan_4_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `turpan_4_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `travelo_hirlev`
--

INSERT INTO `travelo_hirlev` VALUES(100, 100, '2014. március 4.', 'http://stuff.szallas.travelo.hu/hirlevel/20140304', 'hirlev', '20140304', 'közel', 'http://travelo.hu/kozel', 'fejlec-kozel', 'távol', 'http://travelo.hu/tavol', 'fejlec-tavol', 'cucc', 'http://travelo.hu/cucc', 'fejlec-cucc', 'hírek', 'http://travelo.hu/hirek', 'fejlec-hirek', 'akciók', 'http://szallas.travelo.hu/akciok', 'fejlec-akciok', 'http://szallas.travelo.hu/?keyword=nonap&rendezes=', 'nonap', 'nonap625.jpg', 'Nőnapi kényeztetés - last minute ajánlatok', 'Szóljon ez a hétvége a hölgyekről: masszázs, kozmetikai kezelések, gyertyafényes vacsora! Ne habozzon, foglaljon szállást most! ', '7300 Ft/ fő / éjtől', 'on', 'https://secure.travelo.hu/hunguest-hotel-aqua-sol/', 'aqua-sol', 'aquasol305.jpg', 'Tavasz csalogató akció', 'Hunguest Hotel Aqua-Sol****, Hajdúszoboszló', 'Pihenjen családjával az Aqua-Sol szállodában és élvezze a fürdőkomplexum nyújtotta élményeket! ', '', 'http://szallas.travelo.hu/?szo=Egyiptom&iroda=kart', 'egyiptom', 'egyiptom305.jpg', 'Egyiptom: akár - 45%', 'Last Minute kedvezmények', 'Búvárkodjon és lazítson Egyiptomban! Mesés tengerpart, szikrázó napsütés és finom koktélok: most ennyit spórolhat!', '', '', '', '', 'http://stuff.szallas.travelo.hu/hirlevel/20140304/http://stuff.szallas.travelo.hu/hirlevel/20140304/', '', '', '', '', '', '', 'http://stuff.szallas.travelo.hu/hirlevel/20140304/http://stuff.szallas.travelo.hu/hirlevel/20140304/', '', '', '', '', '', '', '', 'http://stuff.szallas.travelo.hu/hirlevel/20140304/http://stuff.szallas.travelo.hu/hirlevel/20140304/', '', '', '', '', '', '', 'http://stuff.szallas.travelo.hu/hirlevel/20140304/http://stuff.szallas.travelo.hu/hirlevel/20140304/', '', '', '', '', '', '', '', 'http://stuff.szallas.travelo.hu/hirlevel/20140304/http://stuff.szallas.travelo.hu/hirlevel/20140304/', '', '', '', '', '', '', 'http://stuff.szallas.travelo.hu/hirlevel/20140304/http://stuff.szallas.travelo.hu/hirlevel/20140304/', '', '', '', '', '', '', '', 'http://stuff.szallas.travelo.hu/hirlevel/20140304/http://stuff.szallas.travelo.hu/hirlevel/20140304/', '', '', '', '', '', '', 'http://stuff.szallas.travelo.hu/hirlevel/20140304/http://stuff.szallas.travelo.hu/hirlevel/20140304/', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'value="value="value="value="value=""""""', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'http://stuff.szallas.travelo.hu/hirlevel/20140304/http://stuff.szallas.travelo.hu/hirlevel/20140304/', '', '', 'http://stuff.szallas.travelo.hu/hirlevel/20140304/http://stuff.szallas.travelo.hu/hirlevel/20140304/', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `travelo_hirlev` VALUES(101, 101, '2014. március 11.', 'http://stuff.szallas.travelo.hu/hirlevel/20140311', 'hirlev', '20140311', 'közel', 'http://travelo.hu/kozel', 'fejlec-kozel', 'távol', 'http://travelo.hu/tavol', 'fejlec-tavol', 'cucc', 'http://travelo.hu/cucc', 'fejlec-cucc', 'hírek', 'http://travelo.hu/hirek', 'fejlec-hirek', 'akciók', 'http://szallas.travelo.hu/akciok', 'fejlec-akciok', 'http://szallas.travelo.hu/?szo=Torokorszag&rendezes=csomagar|asc', 'torok', 'torok625.jpg', 'Török riviéra', 'Elege van a szürke hétköznapokból? Dobja fel hangulatát egy törökországi nyaralással! Repülős utak félpanziós vagy all inclusive ellátással.', '79 900 Ft / fő / 7 éjtől', 'on', 'https://secure.travelo.hu/hunguest-hotel-helios/kihagyhatatlan-akcio-hevizen', 'hunguest_helios', 'helios305.jpg', 'Kihagyhatatlan akció Hévízen', 'Hunguest Hotel Helios***superior - Hévíz', 'Töltsön el nálunk minimum 2 éjszakát napi háromszori étkezéssel, élvezze szállodánk wellness, selfness, terápiás és egyéb szolgáltatásait!', '22 600 Ft / fő / 2 éjtől', 'http://szallas.travelo.hu/?szo=Gorogorszag&rendezes=csomagar|asc', 'gorog', 'gorog305.jpg', 'Görög tengerpart', 'Napfény és kristálytiszta tenger', 'Egy varázslatos hét várja a vendégszeretetéről is híres Görögországban! Korfu, Kréta, Zakynthos, Kefalonia, Karpathos, Chalkidiki, Kos, Rodosz.', '43 900 Ft / fő / 7 éjtől', 'on', 'https://secure.travelo.hu/hunguest-hotel-beke/szoboszloi-napok-es-gyermek-akcio', 'hunguest_beke', 'beke305.jpg', 'Szoboszlói gyermek akció', 'Hunguest Hotel Béke**** - Hajdúszoboszló', 'Szállás, félpanzió, wellness részleg és fitness terem használata. \r\n', '29 400 Ft / fő / 2 éjtől', 'http://szallas.travelo.hu/?szo=varoslatogatas&kulfold=1&rendezes=csomagar|asc', 'varoslatogatas', 'varoslatogatas305.jpg', 'Tavaszi városlátogatás', 'Róma, London, Párizs...', 'Fedezze fel a városok legizgalmasabb arcát! Legyen minden nap egy újabb élmény! ', '55 900 Ft / fő / 3 éjtől', 'on', 'https://secure.travelo.hu/nimrod-bioszalloda/ev-eleji-kedvezmenyes-ajanlat', 'nimrod', 'nimrod305.jpg', 'Kedvezményes ajánlat', 'Nimród Bioszálloda és Bioétterem, Biobolt, Karcag****', 'Pihenje ki a hétköznapok fáradalmait csendes,nyugodt környezetben Karcagon!', '29 600 Ft / fő / 2 éjtől', 'http://szallas.travelo.hu/?szo=Tunezia&rendezes=csomagar|asc', 'tunezia', 'tunezia305.jpg', 'Tunézia', 'Irány a nyár!', 'Fehér homokos strandok, színpompás vadvirágok - évezredes oázis, ahol fázni és unatkozni sosem fog!\r\n\r\n', '42 900 Ft / fő / 7 éjtől', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'on', 'http://szallas.travelo.hu/?keyword=husvet&belfold=1&rendezes=csomagar|asc', 'husvet', 'Húsvéti örömök', 'ünnepi programok', 'http://szallas.travelo.hu/?szo=Madeira&rendezes=csomagar|asc', 'madeira', 'Madeira', 'lenyűgöző tájak közt', 'http://szallas.travelo.hu/?szo=szechenyi_piheno_kartya', 'szep_kartya', 'Szép-kártya', 'panzió, hotel, wellness szálló', 'http://szallas.travelo.hu/?szo=Usa&rendezes=csomagar|asc', 'usa', 'USA', 'úton az álmok földjén', 'http://szallas.travelo.hu/?keyword=punkosd&belfold=1&rendezes=csomagar|asc', 'punkosd', 'Pünkösd', 'júniusi hosszú hétvége', 'http://szallas.travelo.hu/?szo=Szicilia&rendezes=csomagar|asc', 'szicilia', 'Szicília', 'fejedelmi nyaralás', 'http://szallas.travelo.hu/?szo=Balaton&belfold=1', 'balaton', 'Balaton', 'gondoljon a nyárra!', 'http://szallas.travelo.hu/?szo=Izrael&rendezes=csomagar|asc', 'izrael', 'Izrael', 'változatos körutak', 'http://szallas.travelo.hu/?keyword=majus1&belfold=1&rendezes=csomagar|asc', 'majus1', 'Május 1.', '4 napos kikapcsolódás', 'http://szallas.travelo.hu/kulfold/sissi-park-schladming-dachstein', 'sissi_park', 'Sissi Park****', 'pályaszállás apartmanok', 'on', 'http://travelo.hu/kozel/2014/03/11/szponzoralt_cikkek/', 'cikk_nepszerusitik_hazankat', 'Szponzorált cikkek népszerűsítik hazánkat', '2014. március 11., kedd 09:10', 'Sorra jelennek meg a külföldi sajtóban a Magyarország turisztikai látványosságát bemutató cikkek: a CNN, a New York Times, az angol Daily Mail és a Sunday Times is közölt az elmúlt évben a romkocsmák, a termálfürdők és a magyar konyha érdemeit méltató írást.', 'http://travelo.hu/tavol/2014/03/07/tulertekelt_eu_2_-_malaga/', 'cikk_malaga', 'Tapas, tengerpart és Picasso: válassza Malagát a túlértékelt Barcelona helyett!', '2014. március 7., péntek 09:42', 'http://travelo.hu/kozel/2014/03/05/tavaszi_balaton/', 'cikk_tavaszi_balaton', 'Bock Bisztro és új látnivalók a Balatonnál', '2014. március 5., szerda 10:55', 'http://travelo.hu/cucc/2014/03/10/legitarsasagok/', 'cikk_legitarsasagok', 'A semminél a félzsemlés kávé is jobb', '2014. március 10., hétfő 09:36', 'http://travelo.hu/tavol/2014/03/06/macskahotel_lyonban/', 'cikk_macskahotel', 'Macskahotel nyílt Lyonban', '2014. március 6., csütörtök 13:35', 't_sz', '', '', '', 'http://azenlegitarsasagom.hu/', 'azenlegitarsasagom', 'legitarsasagom120.jpg', 'Keressük Magyarország kedvenc légi- társaságát!', 'Értékelje repülős utazását, írja meg véleményét! Az élménybeszámolókat megosztók között értékes díjakat sorsolunk ki!', 'Nőkre szabott szolgáltatások az MGallerynél', 'http://businesstraveller.hu/bt_szallashelyek/nokre-szabott-szolgaltatasok-az-mgallery-nel-1121003', 'Grúziába a Wizz Airrel', 'http://businesstraveller.hu/uti_celok/gruziaba-a-wizz-airrel-1121000', 'Magyarország leglátogatottabb települései', 'http://businesstraveller.hu/bt_hirek/magyarorszag-leglatogatottabb-telepulesei-2013-ban-1120910', 'Nyílik a Hotel Vécsecity', 'http://businesstraveller.hu/bt_szallashelyek/hotel-vecsecity-kastelyba-zart-varos-nyilik-1121002');

-- --------------------------------------------------------