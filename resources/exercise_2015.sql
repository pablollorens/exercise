# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.14)
# Database: excersise
# Generation Time: 2013-12-20 15:08:06 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table stores
# ------------------------------------------------------------

DROP TABLE IF EXISTS `stores`;

CREATE TABLE `stores` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `address` varchar(255) NOT NULL DEFAULT '',
  `postalcode` varchar(255) NOT NULL DEFAULT '',
  `city` varchar(255) NOT NULL DEFAULT '',
  `is_open_on_sunday` enum('N','Y') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `stores` WRITE;
/*!40000 ALTER TABLE `stores` DISABLE KEYS */;

INSERT INTO `stores` (`id`, `name`, `latitude`, `longitude`, `address`,  `postalcode`, `city`, `is_open_on_sunday`)
VALUES
(1, 'Utrecht-West', 52.09558187, 5.08387738, 'Steenovenweg 2', '3532 AE', 'UTRECHT', 'Y'),
(2, 'Utrecht-Nieuw Overvecht', 52.12663078, 5.09291271, 'Nebraskadreef 18', '3565 AG', 'UTRECHT', 'Y'),
(3, 'Nieuwegein', 52.05464673, 5.12476769, 'Laagraven 40', '3439 LK', 'NIEUWEGEIN', 'Y'),
(4, 'Utrecht-De Meern', 52.07614191, 5.05695768, 'Strijkviertel 37', '3454 PJ', 'DE MEERN', 'Y'),
(5, 'Maarssen', 52.12865211, 5.03972386, 'Industrieweg 1', '3606 AR', 'MAARSSEN', 'Y'),
(6, 'IJsselstein', 52.014039, 5.05805857, 'Tinbergenlaan 11', '3401 MT', 'IJSSELSTEIN', 'N'),
(7, 'Zeist', 52.10407057, 5.25181791, 'Dijnselburgerlaan 10', '3705 LP', 'ZEIST', 'Y'),
(8, 'Hilversum', 52.22326789, 5.15021737, 'Verlengde Zuiderloswal 30.', '1216 BX', 'HILVERSUM', 'Y'),
(9, 'Woerden', 52.08218754, 4.86789688, 'Molenvlietbaan 8', '3448 DC', 'WOERDEN', 'Y'),
(10, 'Culemborg', 51.94600504, 5.2260002, 'Parallelweg West 5', '4104 AX', 'CULEMBORG', 'N'),
(11, 'Bussum', 52.26023368, 5.14265928, 'Franse Kampweg 12', '1406 NW', 'BUSSUM', 'Y'),
(12, 'Amersfoort', 52.16347522, 5.3703416, 'Amsterdamseweg 33', '3812 RP', 'AMERSFOORT', 'Y'),
(13, 'Amsterdam-Zuidoost', 52.29472767, 4.94356737, 'Sijsjesbergweg 10', '1105 AL', 'AMSTERDAM ZUIDOOST', 'Y'),
(14, 'Diemen', 52.33148461, 4.97917861, 'Sniep 28', '1112 AH', 'DIEMEN', 'Y'),
(15, 'Amstelveen', 52.28260583, 4.83398289, 'Grutterij 1, Industrieterrein Legmeer', '1185 ZT', 'AMSTELVEEN', 'Y'),
(16, 'Almere-Poort', 52.35286191, 5.1776138, 'Editiestraat 20', '1321 NG', 'ALMERE', 'Y'),
(17, 'Aalsmeer', 52.25661622, 4.77772385, 'Lakenblekerstraat 49 a', '1431 GE', 'AALSMEER', 'N'),
(18, 'Gorinchem', 51.83648472, 4.98313821, 'Spijksedijk 26', '4207 GN', 'GORINCHEM', 'N'),
(19, 'Amsterdam-Overamstel', 52.33726892, 4.92061454, 'Spaklerweg 44 a', '1096 BA', 'AMSTERDAM', 'Y'),
(20, 'Gouda', 52.02501326, 4.67592845, 'Elburgplein 7', '2803 PX', 'GOUDA', 'Y'),
(21, 'Tiel', 51.90009527, 5.4453153, 'Bulkweg 4', '4005 LB', 'TIEL', 'Y'),
(22, 'Veenendaal', 52.03714604, 5.56957548, 'Einsteinstraat 2', '3902 HN', 'VEENENDAAL', 'N'),
(23, 'Alphen aan den Rijn', 52.12653957, 4.65042844, 'Euromarkt 119', '2408 BD', 'ALPHEN AAN DEN RIJN', 'N'),
(24, 'Barneveld', 52.14063979, 5.5805643, 'Rozenstraat 3', '3772 JH', 'BARNEVELD', 'N'),
(25, 'Zaltbommel', 51.80607433, 5.26838241, 'Van Heemstraweg-Oost 10', '5301 KE', 'ZALTBOMMEL', 'N'),
(26, 'Almere-Markerkant', 52.38847953, 5.21962256, 'Markerkant 10-142', '1316 AL', 'ALMERE', 'N'),
(27, 'Amsterdam-Slotervaart', 52.34618208, 4.83191897, 'Aletta Jacobslaan 5', '1066 BP', 'AMSTERDAM', 'Y'),
(28, 'Almere-Doemere', 52.39551391, 5.27372748, 'New Yorkweg 211', '1334 NG', 'ALMERE', 'Y'),
(29, 'Amsterdam-W de Zwijgerlaan Compact', 52.38119728, 4.86020533, 'Willem de Zwijgerlaan 336a', '1055 RD', 'AMSTERDAM', 'Y'),
(30, 'Amsterdam-Noord', 52.39922351, 4.90832448, 'Klimopweg 65', '1032 HZ', 'AMSTERDAM', 'Y'),
(31, 'Ede', 52.03006912, 5.64563436, 'Lorentzstraat 3', '6716 AD', 'EDE', 'N'),
(32, 'Amsterdam-Nieuwe Hemweg', 52.39408117, 4.86608395, 'Nieuwe Hemweg 1', '1013 BG', 'AMSTERDAM', 'Y'),
(33, 'Hoofddorp', 52.31441746, 4.69584038, 'Noordmeerstraat 22-30', '2131 AD', 'HOOFDDORP', 'Y'),
(34, 'Capelle aan den IJssel', 51.94242739, 4.6025156, 'Wormerhoek 4', '2905 TX', 'CAPELLE AAN DEN IJSSEL', 'N'),
(35, 'Wageningen', 51.96040516, 5.64655388, 'Nudepark 180', '6702 DX', 'WAGENINGEN', 'N'),
(36, 'Zeewolde', 52.34642482, 5.51618869, 'Bolwerk 7', '3895 BX', 'ZEEWOLDE', 'N'),
(37, 'Papendrecht', 51.82840503, 4.7220329, 'Ketelweg 18', '3356 LE', 'PAPENDRECHT', 'N'),
(38, 'Ermelo', 52.29773821, 5.61842054, 'Groeneweg 37', '3851 KA', 'ERMELO', 'N'),
(39, 'Lisse', 52.25247037, 4.56654134, 'Grevelingstraat 81', '2161 WE', 'LISSE', 'Y'),
(40, 'Zoetermeer', 52.03581657, 4.50322581, 'Argonstraat 11', '2718 SM', 'ZOETERMEER', 'Y'),
(41, 'Rotterdam-Alexanderpolder', 51.9486686, 4.54197051, 'Nikkelstraat 46-53', '3067 GR', 'ROTTERDAM', 'Y'),
(42, 'Cruquius', 52.33071406, 4.63115178, 'Spaarneweg 44', '2142 EN', 'CRUQUIUS', 'Y'),
(43, 'Ridderkerk', 51.87038748, 4.60617077, 'Gieterijstraat 20', '2984 AB', 'RIDDERKERK', 'N'),
(44, 'Leiden-Zuid', 52.14596434, 4.49103821, 'Lammenschansweg 130', '2321 JX', 'LEIDEN', 'Y'),
(45, 'Leiden-Noord', 52.17445314, 4.49817695, 'Flevoweg 1', '2318 BZ', 'LEIDEN', 'Y'),
(46, 'Rosmalen', 51.72437791, 5.34799312, 'Groote Vlietlaan 17', '5245 PA', 'ROSMALEN', 'Y'),
(47, 'Harderwijk', 52.33893579, 5.63265427, 'Deventerweg 3', '3843 GA', 'HARDERWIJK', 'N'),
(48, 'Zwijndrecht', 51.81623333, 4.63323441, 'H.a. Lorentzstraat 2', '3331 EE', 'ZWIJNDRECHT', 'N'),
(49, 'Oss', 51.7795883, 5.54033336, 'Kanaalstraat 4', '5347 KM', 'OSS', 'Y'),
(50, 'Den Bosch', 51.69807652, 5.3017165, 'Vogelstraat 20', '5212 VL', 'DEN BOSCH', 'Y'),
(51, 'Haarlem', 52.39364177, 4.65545311, 'Heringaweg 6', '2031 BW', 'HAARLEM', 'Y'),
(52, 'Dordrecht', 51.79469579, 4.6483177, 'Mijlweg 49', '3316 BE', 'DORDRECHT', 'Y'),
(53, 'Rotterdam-Stadion', 51.89940046, 4.51732314, 'Koperslagerstraat 9', '3077 MD', 'ROTTERDAM', 'Y'),
(54, 'Koog aan de Zaan', 52.46507141, 4.80836708, 'Kaarsenmakerstraat 3', '1541 HL', 'KOOG A.D. ZAAN', 'N'),
(55, 'Waalwijk', 51.67236377, 5.05641437, 'Prof. Lorentzweg 28', '5144 NP', 'WAALWIJK', 'N'),
(56, 'Purmerend', 52.51283505, 4.99879738, 'Einsteinstraat 10', '1446 VG', 'PURMEREND', 'Y'),
(57, 'Leidschendam', 52.10258118, 4.41745367, 'Veursestraatweg 197', '2264 EG', 'LEIDSCHENDAM', 'N'),
(58, 'Katwijk aan Zee', 52.19891859, 4.43430293, 'Ambachtsweg 23', '2222 AJ', 'KATWIJK AAN ZEE', 'N'),
(59, 'Den Haag-Leidschenveen', 52.07379687, 4.40040431, 'Oude Middenweg 185', '2491 AE', 'DEN HAAG', 'Y'),
(60, 'Velserbroek', 52.43667508, 4.65213606, 'Meubelmakerstraat 11', '1991 JD', 'VELSERBROEK', 'Y'),
(61, 'Rotterdam-Blijdorp', 51.92790903, 4.43819073, 'Houtstraat 30', '3041 JD', 'ROTTERDAM', 'Y'),
(62, 'Oosterhout', 51.66272149, 4.85665903, 'Oostpolderweg 2', '4907 DZ', 'OOSTERHOUT NB', 'Y'),
(63, 'Lelystad', 52.49140701, 5.48122969, 'Zuiderpoort 3', '8239 AB', 'LELYSTAD', 'Y'),
(64, 'Wormerveer', 52.50430976, 4.78212335, 'Samsonweg 9-11', '1521 RA', 'WORMERVEER', 'Y'),
(65, 'Beuningen', 51.85180015, 5.75227392, 'Claudiuslaan 62', '6642 AG', 'BEUNINGEN', 'Y'),
(66, 'Rotterdam-Charlois', 51.86525775, 4.45890185, 'Driemanssteeweg 120', '3084 CB', 'ROTTERDAM', 'Y'),
(67, 'Schiedam-Noord', 51.93627024, 4.39912051, '\'s-Gravelandseweg 363', '3125 BJ', 'SCHIEDAM', 'Y'),
(68, 'Delft', 51.99983457, 4.36042314, 'Leeuwenstein 35', '2627 AM', 'DELFT', 'Y'),
(69, 'Beverwijk', 52.48381854, 4.66695908, 'Spoorsingel 3', '1947 LA', 'BEVERWIJK', 'Y'),
(70, 'Schiedam-Zuid', 51.90676977, 4.38452393, 'Adm. Trompstraat 14-16', '3115 HJ', 'SCHIEDAM', 'N'),
(71, 'Elst', 51.91623623, 5.8604012, 'Industrieweg Oost 2c', '6662 NE', 'ELST (gld)', 'Y'),
(72, 'Den Haag-MegaStores', 52.0631019, 4.31460273, 'Van der Kunstraat 130', '2521 AW', 'DEN HAAG', 'Y'),
(73, 'Arnhem-Zuid', 51.94910846, 5.88296993, 'Hazenkamp 16', '6836 BA', 'ARNHEM', 'Y'),
(74, 'Oud Beijerland', 51.82515391, 4.43728555, 'W. Beukelszstraat 2', '3261 LV', 'OUD BEIJERLAND', 'N'),
(75, 'Nijmegen-Energieweg', 51.84794208, 5.82813625, 'Energieweg 22-24', '6541 CX', 'NIJMEGEN', 'N'),
(76, 'Boxtel', 51.60267992, 5.32332213, 'Vuurijzer 2', '5283 PV', 'BOXTEL', 'N'),
(77, 'Nijmegen-Nieuwe Dukenburgseweg', 51.82140865, 5.82272401, 'Nieuwe Dukenburgseweg 11', '6534 AD', 'NIJMEGEN', 'Y'),
(78, 'Apeldoorn-West', 52.19548976, 5.93444016, 'Laan van Spitsbergen 104', '7336 AX', 'APELDOORN', 'N'),
(79, 'Arnhem-Westervoortsedijk', 51.97350995, 5.93103658, 'Snelliusweg 50', '6827 DH', 'ARNHEM', 'Y'),
(80, 'Vlaardingen', 51.90037452, 4.33264551, 'Deltaweg 82', '3133 KM', 'VLAARDINGEN', 'Y'),
(81, 'Den Haag-Scheveningen', 52.0950473, 4.26641466, 'Dr. Lelykade 220', '2583 CP', 'DEN HAAG', 'Y'),
(82, 'Tilburg-Oost', 51.56463562, 5.10335504, 'Ceramstraat 12', '5013 BB', 'TILBURG', 'N'),
(83, 'Den Haag-Loosduinen', 52.06232505, 4.25763871, 'Oude Haagweg 503-507', '2552 GG', 'DEN HAAG', 'N'),
(84, 'Den Haag-Dekkershoek', 52.04454963, 4.24203015, 'Dekkershoek 171', '2552 DD', 'DEN HAAG', 'Y'),
(85, 'Breda', 51.59866392, 4.75885133, 'Spinveld 16', '4815 HS', 'BREDA', 'Y'),
(86, 'Apeldoorn-Noord', 52.22224833, 5.97054989, 'Vlijtseweg 74', '7317 AJ', 'APELDOORN', 'N'),
(87, 'Tilburg-Zuid', 51.54287312, 5.08623937, 'Ringbaan Zuid 370', '5022 GA', 'TILBURG', 'Y'),
(88, 'Veghel-Poort', 51.59939733, 5.51520912, 'Poort van Veghel 4920', '5466 SB', 'VEGHEL', 'N'),
(89, 'Spijkenisse', 51.85522824, 4.30529456, 'Constantstraat 6', '3202 SV', 'SPIJKENISSE', 'Y'),
(90, 'Hoorn', 52.64981623, 5.04964931, 'Dr. C.J.K. van Aalstweg 6', '1625 NV', 'HOORN NH', 'Y'),
(91, 'Naaldwijk', 52.00333146, 4.20991426, 'Gildestraat 102', '2671 BV', 'NAALDWIJK', 'Y'),
(92, 'Duiven', 51.95934424, 6.0111811, 'Lithograaf 7', '6921 VA', 'DUIVEN', 'Y'),
(93, 'Alkmaar', 52.62317638, 4.77633462, 'Omval 57', '1812 NA', 'ALKMAAR', 'Y'),
(94, 'Elburg', 52.44232435, 5.86466086, 'Westerlengte 2', '8081 PZ', 'ELBURG', 'N'),
(95, 'Dronten', 52.54565719, 5.70666601, 'Het Weerijs 44', '8253 PP', 'DRONTEN', 'N'),
(96, 'Epe', 52.34745585, 5.99441685, 'De Meent 19', '8161 ZN', 'EPE', 'N'),
(97, 'Heerhugowaard', 52.66233363, 4.80872499, 'J.J.P. Oudweg 16', '1703 DE', 'HEERHUGOWAARD', 'Y'),
(98, 'Grootebroek', 52.69421087, 5.22594151, 'Industrieweg 15a', '1613 KT', 'GROOTEBROEK', 'N'),
(99, 'Son en Breugel', 51.49951099, 5.46854969, 'Ekkersrijt 4030', '5692 DA', 'SON EN BREUGEL', 'Y'),
(100, 'Hellevoetsluis', 51.83838262, 4.16655559, 'Einsteinweg 8', '3225 LT', 'HELLEVOETSLUIS', 'N'),
(101, 'Zutphen', 52.15321564, 6.20018685, 'Pollaan 50f', '7202 BX', 'ZUTPHEN', 'Y'),
(102, 'Middelharnis', 51.75283379, 4.17411293, 'De hofjes 6-8', '3241 ML', 'MIDDELHARNIS', 'N'),
(103, 'Boxmeer', 51.64541337, 5.9351687, 'St. Anthonisweg 6A', '5831 AE', 'BOXMEER', 'N'),
(104, 'Roosendaal', 51.53676931, 4.48744144, 'Rucphensebaan 9', '4706 PH', 'ROOSENDAAL', 'Y'),
(105, 'Deventer', 52.24732135, 6.1990032, 'Hannoverstraat 2', '7418 BL', 'DEVENTER', 'N'),
(106, 'Eindhoven', 51.43607741, 5.49745879, 'Kanaaldijk Noord 15a', '5613 DH', 'EINDHOVEN', 'Y'),
(107, 'Helmond', 51.47223992, 5.68322542, 'Engelseweg 234', '5705 AK', 'HELMOND', 'Y'),
(108, 'Schagen', 52.78130815, 4.81094294, 'Witte Paal 201', '1742 LA', 'SCHAGEN', 'Y'),
(109, 'Geldrop', 51.42502114, 5.56507816, 'De Bleekvelden 30', '5666 RZ', 'GELDROP', 'N'),
(110, 'Emmeloord', 52.70085605, 5.75549677, 'Randweg 32', '8304AS', 'EMMELOORD', 'N'),
(111, 'Zwolle', 52.51653624, 6.07279053, 'Rieteweg 16', '8041 AK', 'ZWOLLE', 'Y'),
(112, 'Eersel', 51.3642718, 5.32413839, 'Kuilenhurk 7', '5521 EN', 'EERSEL', 'Y'),
(113, 'Doetinchem', 51.949033, 6.30326193, 'Havenstraat 138', '7005 AG', 'DOETINCHEM', 'N'),
(114, 'Raalte', 52.38240659, 6.28744333, 'Tjalkstraat 1', '8102 HG', 'RAALTE', 'N'),
(115, 'Terborg', 51.91644212, 6.34779513, 'Zeddamseweg 46', '7075 EE', 'ETTEN', 'Y'),
(116, 'Bergen op Zoom', 51.50509332, 4.27692482, 'Kruisakkers 11', '4613 BV', 'BERGEN OP ZOOM', 'Y'),
(117, 'Venray', 51.51660569, 5.9837129, 'Plataanstraat 17', '5802 EH', 'VENRAY', 'Y'),
(118, 'Den Helder', 52.94247436, 4.77137513, 'Ravelijncenter 21', '1785 LX', 'DEN HELDER', 'Y'),
(119, 'Nijverdal', 52.36153423, 6.49474054, 'Industrieweg 39', '7442 CV', 'NIJVERDAL', 'N'),
(120, 'Meppel', 52.7022317, 6.18170332, 'Zomerdijk 3', '7942 JR', 'MEPPEL', 'N'),
(121, 'Rijssen', 52.29950008, 6.54193787, 'Enterstraat 196a', '7461 PE', 'RIJSSEN', 'N'),
(122, 'Weert', 51.24789646, 5.72956188, 'Roermondseweg 98', '6004 AV', 'WEERT', 'Y'),
(123, 'Helden Panningen', 51.32658709, 5.97097054, 'J.F. Kennedylaan 28', '5981 XC', 'HELDEN-PANNINGEN', 'Y'),
(124, 'Venlo', 51.37534195, 6.14781514, 'Ottostraat 19', '5922 VS', 'VENLO', 'Y'),
(125, 'Goes', 51.49969957, 3.88253614, 'Marconistraat 11', '4461 HH', 'GOES', 'N'),
(126, 'Almelo', 52.34012339, 6.64314732, 'Woonboulevard 14', '7606 JA', 'ALMELO', 'Y'),
(127, 'Winterswijk', 51.97303479, 6.70499771, 'Europark 2', '7102 AM', 'WINTERSWIJK', 'N'),
(128, 'Texel', 53.06276928, 4.80297173, 'Abbewaal 10', '1791 WZ', 'DEN BURG', 'N'),
(129, 'Sneek', 53.02242068, 5.6824607, 'Einsteinstraat 6', '8606 JE', 'SNEEK', 'Y'),
(130, 'Heerenveen', 52.96579137, 5.90415885, 'Houtdraaier 3', '8447 GG', 'HEERENVEEN', 'Y'),
(131, 'Haaksbergen', 52.1729314, 6.7430609, 'Textielstraat 24', '7483 PB', 'HAAKSBERGEN', 'Y'),
(132, 'Hardenberg', 52.5785449, 6.59555378, 'Lange Spruit 7', '7773 NE', 'HARDENBERG', 'N'),
(133, 'Hengelo', 52.27513943, 6.77839576, 'Wegtersweg 5-21', '7556 BP', 'HENGELO', 'Y'),
(134, 'Hoogeveen', 52.72479905, 6.46553433, 'Groenewegenstraat 10', '7901 ED', 'HOOGEVEEN', 'N'),
(135, 'Roermond', 51.20352584, 6.02429459, 'St. Wirosingel 178', '6042 KZ', 'ROERMOND', 'Y'),
(136, 'Echt', 51.10372977, 5.86199393, 'Palmbrugweg 2', '6101 AJ', 'ECHT', 'Y'),
(137, 'Enschede', 52.21201776, 6.88432142, 'Slijpsteen 30', '7513 JA', 'ENSCHEDE', 'Y'),
(138, 'Harlingen', 53.17345188, 5.43975875, 'Roordaweg 1', '8861 KW', 'HARLINGEN', 'Y'),
(139, 'Terneuzen', 51.33191939, 3.82723183, 'Kennedylaan 98', '4538 AE', 'TERNEUZEN', 'N'),
(140, 'Oldenzaal', 52.29354216, 6.9262945, 'Nijverheidsstraat 2', '7575 BJ', 'OLDENZAAL', 'Y'),
(141, 'Beilen', 52.85744526, 6.49821624, 'Dambroeken 1', '9411 SG', 'BEILEN', 'N'),
(142, 'Oosterwolde', 52.97968973, 6.29531123, 'Veengang 8', '8431 NJ', 'OOSTERWOLDE', 'N'),
(143, 'Vlissingen', 51.45898335, 3.56982027, 'Govert Flincklaan 7', '4383 WB', 'VLISSINGEN', 'N'),
(144, 'Sittard', 51.01863965, 5.86639144, 'Dr. Nolenslaan 124', '6136 GV', 'SITTARD', 'Y'),
(145, 'Drachten-ML Kingsingel', 53.09636872, 6.10443431, 'M.L. Kingsingel 22', '9203 JC', 'DRACHTEN', 'N'),
(146, 'Leeuwarden-West', 53.19607927, 5.76689192, 'Slauerhoffweg 2', '8912 BH', 'LEEUWARDEN', 'N'),
(147, 'Drachten-De Hemmen', 53.11187737, 6.07893308, 'De Hemmen 12', '9206 AG', 'DRACHTEN', 'N'),
(148, 'Geleen', 50.99155446, 5.8180283, 'Egelantier 2', '6163 RB', 'GELEEN', 'Y'),
(149, 'Leeuwarden-De Hemrik', 53.19590567, 5.84131223, 'Jupiterweg 17', '8938 AD', 'LEEUWARDEN', 'N'),
(150, 'Oostburg', 51.33350548, 3.49906015, 'Industrieweg 10', '4501 PM', 'OOSTBURG', 'N'),
(151, 'Meerssen', 50.88652749, 5.7479441, 'Charles Eyckstraat 15', '6231 GX', 'MEERSSEN', 'N'),
(152, 'Brunssum', 50.93278547, 5.94960552, 'Pijler 38', '6446 AX', 'BRUNSSUM', 'Y'),
(153, 'Maastricht-Belvédère', 50.86049918, 5.68242624, 'Pontonniersweg 15', '6219 PJ', 'MAASTRICHT', 'Y'),
(154, 'Assen', 53.00922758, 6.5852673, 'Stelmakerstraat 32', '9403 VB', 'ASSEN', 'Y'),
(155, 'Emmen', 52.76207272, 6.9068143, 'Nijbracht 30', '7821 CA', 'EMMEN', 'N'),
(156, 'Maastricht-Oost', 50.8529412, 5.7245741, 'Oostermaasweg 3', '6226 VJ', 'MAASTRICHT', 'Y'),
(157, 'Heerlen Woonboulevard', 50.89637577, 5.94953471, 'In de Cramer 125', '6412 PM', 'HEERLEN', 'Y'),
(158, 'Roden', 53.14782179, 6.43007794, 'Westeresch 11', '9301 ZW', 'RODEN', 'N'),
(159, 'Dokkum', 53.31459727, 5.99001235, 'Zuiderschans 2', '9101 PZ', 'DOKKUM', 'N'),
(160, 'Kerkrade', 50.85417708, 6.01090045, 'Locht 44 K', '6466 GW', 'KERKRADE', 'N'),
(161, 'Groningen-Peizerweg', 53.20887222, 6.54102815, 'Peizerweg 89', '9727 AH', 'GRONINGEN', 'Y'),
(162, 'Stadskanaal', 52.98045239, 6.97112597, 'Steenhouwer 31', '9502 EV', 'STADSKANAAL', 'N'),
(163, 'Groningen-Oost', 53.2170799, 6.60460135, 'Osloweg 114', '9723 BX', 'GRONINGEN', 'N'),
(164, 'Hoogezand', 53.1508537, 6.76615109, 'Beverburcht 2', '9603 TK', 'HOOGEZAND', 'N'),
(165, 'Veendam', 53.10993169, 6.88983947, 'Lloydsweg 11', '9641 KJ', 'VEENDAM', 'Y'),
(166, 'Appingedam', 53.31825292, 6.87949607, 'Farmsumerweg 130', '9902 BW', 'APPINGEDAM', 'N');

/*!40000 ALTER TABLE `stores` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
