-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 15, 2024 at 10:05 PM
-- Server version: 8.1.0
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Team_28`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `customer_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`name`, `email`, `phone_number`, `address`, `customer_id`) VALUES
('Regina Panting', 'rpanting0@upenn.edu', '225-197-9276', '30 Mayer Point', 1),
('Roseline Spreckley', 'rspreckley1@sun.com', '519-707-1729', '21136 Pearson Plaza', 2),
('Candice O\'Dooghaine', 'codooghaine2@dell.com', '240-619-2421', '6898 Steensland Pass', 3),
('Ravid Fagan', 'rfagan3@w3.org', '422-152-4908', '4 Granby Terrace', 4),
('Homere Growy', 'hgrowy4@stumbleupon.com', '479-806-8736', '82997 Anniversary Crossing', 5),
('Shane Tilte', 'stilte5@tiny.cc', '771-554-8717', '12 Colorado Parkway', 6),
('Mayne Morcom', 'mmorcom6@bbc.co.uk', '902-382-5744', '278 Buena Vista Terrace', 7),
('Darby Billison', 'dbillison7@dot.gov', '601-876-3563', '56515 Crest Line Circle', 8),
('Amalle Rampton', 'arampton8@twitter.com', '828-440-4564', '587 Nobel Parkway', 9),
('Ado Schnieder', 'aschnieder9@prlog.org', '954-432-4554', '8572 Surrey Street', 10),
('Kimberlee Ranson', 'kranson25@topsy.com', '535-850-8771', '533 Declaration Junction', 11),
('Christopher Stopps', 'cstoppsa@scientificamerican.com', '251-998-5824', '0662 Muir Avenue', 12),
('Coriss Crankshaw', 'ccrankshawb@chron.com', '427-304-0730', '736 Bowman Lane', 13),
('Darrelle Rubert', 'drubert26@jimdo.com', '652-984-4959', '62679 Hoffman Park', 14),
('Elsy Scoone', 'escoonec@mlb.com', '867-340-7875', '046 Banding Parkway', 15),
('Shane Albin', 'salbin27@macromedia.com', '417-290-8887', '971 Atwood Court', 16),
('Jarvis Mosedill', 'jmosedill28@mail.ru', '917-637-7968', '59299 Mariners Cove Point', 17),
('Vito Bachman', 'vbachmand@newyorker.com', '986-124-0886', '89636 Stone Corner Point', 18),
('Jacques Simm', 'jsimme@blogger.com', '726-206-5784', '7521 Forster Pass', 19),
('Fred Backhouse', 'fbackhouse29@symantec.com', '613-205-6211', '94 Elgar Crossing', 20),
('Benetta Codlin', 'bcodlinf@cpanel.net', '780-848-5168', '92 Blackbird Avenue', 21),
('Pepi Bollini', 'pbollini2a@bloomberg.com', '417-212-9802', '7987 Maple Plaza', 22),
('Hamilton O\'Collopy', 'hocollopyg@elpais.com', '933-612-7211', '044 Sutteridge Crossing', 23),
('Carson Skill', 'cskill2b@amazon.co.jp', '635-512-8759', '10 La Follette Place', 24),
('Gunter Josum', 'gjosumh@sphinn.com', '566-656-0560', '9007 Sachtjen Court', 25),
('Ilka Askham', 'iaskham2c@bbb.org', '124-942-8683', '9471 Kipling Point', 26),
('Boycey Aylmer', 'baylmeri@google.com.au', '760-344-8998', '3031 Ludington Junction', 27),
('Eb Decourcy', 'edecourcy2d@wix.com', '320-444-1448', '105 Upham Court', 28),
('Fields Slowley', 'fslowleyj@about.com', '558-219-5676', '809 Porter Drive', 29),
('Amalia Macieiczyk', 'amacieiczykk@behance.net', '875-747-6077', '11 Everett Circle', 30),
('Elisha Arend', 'earend2e@sourceforge.net', '449-199-6976', '20 Esch Circle', 31),
('Alick Yearns', 'ayearnsl@desdev.cn', '702-881-5266', '0 Crescent Oaks Point', 32),
('Niles Sute', 'nsute2f@ezinearticles.com', '816-948-1463', '3502 Corben Road', 33),
('Stacy Antecki', 'santeckim@squarespace.com', '580-506-8400', '85 Maple Lane', 34),
('Lamar Gronw', 'lgronw2g@sciencedirect.com', '430-153-6631', '5 Rockefeller Plaza', 35),
('Martyn O\' Reagan', 'mon@chicagotribune.com', '744-433-2197', '303 Laurel Point', 36),
('Paige Bernardez', 'pbernardez2h@nih.gov', '600-266-2000', '66713 Steensland Plaza', 37),
('Angelita Argyle', 'aargyleo@csmonitor.com', '891-836-6243', '5222 Dottie Hill', 38),
('Salomi Danelutti', 'sdanelutti2i@google.co.uk', '980-312-0018', '2689 Annamark Way', 39),
('Murvyn Verecker', 'mvereckerp@storify.com', '974-911-9649', '02 Forster Trail', 40),
('Merrielle Ilem', 'milem2j@slate.com', '203-388-0502', '7300 Orin Point', 41),
('Benjamen Sang', 'bsangq@ox.ac.uk', '540-164-5348', '5 Troy Place', 42),
('Marika Brereton', 'mbrereton2k@ow.ly', '866-302-4226', '88 Gina Alley', 43),
('Fredi Bysouth', 'fbysouthr@china.com.cn', '257-554-5871', '3153 Algoma Point', 44),
('Dav Chieze', 'dchieze2l@newyorker.com', '968-860-5504', '1426 Warbler Trail', 45),
('Idaline Anscombe', 'ianscombes@techcrunch.com', '974-386-6044', '503 Fuller Road', 46),
('Dorena Apfel', 'dapfel2m@google.ru', '542-415-1124', '6912 Barnett Avenue', 47),
('Justin MacIntyre', 'jmacintyret@a8.net', '954-585-3258', '8 Longview Lane', 48),
('Amelie McGarrahan', 'amcgarrahan2n@usatoday.com', '602-905-0850', '1105 Arizona Street', 49),
('Marion Dagless', 'mdagless2o@guardian.co.uk', '155-747-2123', '08 Eggendart Street', 50),
('Perry Pocknell', 'ppocknellu@amazon.co.uk', '373-283-7031', '99 Petterle Parkway', 51),
('Carri Fleet', 'cfleet2p@nationalgeographic.com', '296-167-3487', '1 Corry Center', 52),
('Costanza Sibery', 'csiberyv@wikispaces.com', '716-421-2841', '371 Acker Street', 53),
('Angelita Heard', 'aheard2q@istockphoto.com', '366-953-5011', '6 Summer Ridge Center', 54),
('Kearney Shama', 'kshamaw@theglobeandmail.com', '294-728-4770', '3297 Golf Course Place', 55),
('Muire Cathrae', 'mcathrae2r@accuweather.com', '857-995-2917', '8 Golden Leaf Pass', 56),
('Pearl Feehery', 'pfeeheryx@boston.com', '810-782-1006', '4031 Independence Way', 57),
('Renato Heck', 'rheck2s@twitter.com', '741-219-6821', '496 Goodland Park', 58),
('Barry Decaze', 'bdecazey@cnbc.com', '390-957-2798', '4892 Nevada Parkway', 59),
('Blaine Bradforth', 'bbradforth2t@washingtonpost.com', '775-146-3558', '94926 Dexter Center', 60),
('Jordan Mostin', 'jmostinz@1und1.de', '848-880-9100', '9313 Hooker Road', 61),
('Jammal McCready', 'jmccready2u@cbsnews.com', '253-895-1249', '610 Golden Leaf Trail', 62),
('Ambros Bahlmann', 'abahlmann10@omniture.com', '306-398-3339', '0 Ilene Avenue', 63),
('Hali Gilkison', 'hgilkison2v@google.cn', '493-379-7916', '67543 Fieldstone Place', 64),
('Siward Ceci', 'sceci11@mashable.com', '440-322-4028', '26483 Sundown Trail', 65),
('Brianna MacRedmond', 'bmacredmond2w@bluehost.com', '953-715-1240', '32579 Logan Trail', 66),
('Gustaf Shadwick', 'gshadwick12@wordpress.com', '610-983-4989', '2560 Arapahoe Center', 67),
('Kacey Antony', 'kantony2x@joomla.org', '426-876-8564', '1 8th Court', 68),
('Adolpho Geeraert', 'ageeraert13@1688.com', '530-133-2257', '5 Valley Edge Road', 69),
('Liana Silbert', 'lsilbert2y@nytimes.com', '472-672-2353', '068 Novick Lane', 70),
('Yehudi Eakins', 'yeakins14@umn.edu', '307-602-3642', '83262 Hoepker Plaza', 71),
('Genna Johnsee', 'gjohnsee15@independent.co.uk', '435-441-7526', '6 Logan Junction', 72),
('Carita Ousby', 'cousby2z@tiny.cc', '934-792-1061', '6 Starling Trail', 73),
('Darwin Dorsey', 'ddorsey16@dyndns.org', '390-616-1198', '74 Nobel Parkway', 74),
('Ermengarde McNaught', 'emcnaught30@engadget.com', '329-525-2856', '51593 Roth Street', 75),
('Ardith Whates', 'awhates17@newsvine.com', '321-276-4738', '5748 Mcbride Way', 76),
('Georgeta Worters', 'gworters31@newyorker.com', '562-257-9484', '547 Porter Parkway', 77),
('Olav Ciobotaru', 'ociobotaru18@webnode.com', '884-563-7838', '3 Green Ridge Center', 78),
('Zechariah Beagrie', 'zbeagrie32@arstechnica.com', '846-535-5710', '95 Dahle Crossing', 79),
('Moira Karp', 'mkarp19@a8.net', '459-449-1120', '16 Bay Point', 80),
('Mead Georghiou', 'mgeorghiou33@time.com', '515-407-8674', '189 Rigney Terrace', 81),
('Emlynn Whines', 'ewhines1a@foxnews.com', '904-804-9356', '92 Scott Avenue', 82),
('Myrna Gludor', 'mgludor34@bing.com', '316-322-4965', '6 Ilene Point', 83),
('Jerald Parram', 'jparram35@usnews.com', '856-275-8804', '5715 International Drive', 84),
('Loutitia Bruff', 'lbruff1b@telegraph.co.uk', '908-994-4547', '77 Sunnyside Avenue', 85),
('Dore Ucceli', 'ducceli36@yellowpages.com', '308-927-4260', '9 Lake View Lane', 86),
('Cory Slocom', 'cslocom1c@walmart.com', '947-163-1253', '48572 Forster Park', 87),
('Kandy Szymanek', 'kszymanek37@kickstarter.com', '409-686-2242', '932 Londonderry Way', 88),
('Bibi Hebron', 'bhebron1d@elpais.com', '394-533-8419', '3 International Alley', 89),
('Yulma Melson', 'ymelson1e@lulu.com', '225-814-5056', '993 Raven Point', 90),
('Angie Meron', 'ameron38@dion.ne.jp', '334-153-1695', '46245 Main Place', 91),
('Norina Leate', 'nleate1f@blogs.com', '196-340-1936', '5 Longview Way', 92),
('Mariette Pollak', 'mpollak39@pagesperso-orange.fr', '764-572-6837', '28355 Mayfield Road', 93),
('Dominica Kepling', 'dkepling1g@livejournal.com', '836-941-4813', '483 Hallows Hill', 94),
('Cristionna Bartens', 'cbartens3a@live.com', '311-328-8925', '5495 Steensland Crossing', 95),
('Devonna Kinastan', 'dkinastan1h@w3.org', '587-755-8888', '09 Ramsey Court', 96),
('Guthry Edmett', 'gedmett3b@walmart.com', '189-398-1645', '42722 Ridgeview Drive', 97),
('Ulla Meletti', 'umeletti1i@archive.org', '363-735-5003', '0 Petterle Crossing', 98),
('Tommi Horrigan', 'thorrigan3c@wiley.com', '673-693-5079', '2104 Elmside Way', 99),
('Lauraine Dumphrey', 'ldumphrey1j@geocities.com', '471-598-2034', '84 Buhler Avenue', 100),
('Dru Beeckx', 'dbeeckx3d@deviantart.com', '556-280-2435', '63675 Farwell Point', 101),
('Jenelle Wardington', 'jwardington1k@4shared.com', '434-332-7800', '022 Burrows Trail', 102),
('Lin Quaif', 'lquaif3e@twitpic.com', '469-850-6503', '57 Spenser Avenue', 103),
('Hort Grayne', 'hgrayne1l@jugem.jp', '414-787-9290', '3 Prentice Terrace', 104),
('Kitti Hoyes', 'khoyes3f@homestead.com', '660-332-7561', '006 Columbus Parkway', 105),
('Wash Abrahams', 'wabrahams1m@cnbc.com', '239-854-1157', '3154 Upham Center', 106),
('Rufe Catteroll', 'rcatteroll3g@delicious.com', '717-470-1331', '2546 Pawling Junction', 107),
('Ambros Pycock', 'apycock1n@angelfire.com', '903-450-2624', '723 Leroy Trail', 108),
('Jeannie Greville', 'jgreville3h@yellowbook.com', '744-988-7202', '0878 Maywood Plaza', 109),
('Tatiania O\'Mullally', 'tomullally1o@alibaba.com', '555-253-0440', '467 5th Drive', 110),
('Lotty Harrington', 'lharrington3i@chron.com', '865-860-3159', '864 Crest Line Avenue', 111),
('Mischa Pirot', 'mpirot1p@reference.com', '345-113-3436', '02500 Summerview Park', 112),
('Verne Villa', 'vvilla3j@diigo.com', '106-361-2458', '74886 Buell Place', 113),
('Burgess Pettifor', 'bpettifor1q@house.gov', '753-285-0656', '18149 Mallory Crossing', 114),
('Mason Ashall', 'mashall3k@wufoo.com', '583-462-5746', '763 Weeping Birch Drive', 115),
('Adah Prene', 'aprene1r@chronoengine.com', '275-351-8528', '6348 Crownhardt Terrace', 116),
('Terence Culham', 'tculham3l@zdnet.com', '753-126-2224', '22 Killdeer Plaza', 117),
('Glory McTaggart', 'gmctaggart1s@ucsd.edu', '929-170-3576', '14273 Mcbride Park', 118),
('Laurianne Worcs', 'lworcs3m@marketwatch.com', '539-935-7719', '781 Rowland Way', 119),
('Isabeau Cattanach', 'icattanach1t@cbsnews.com', '443-444-4018', '86611 Union Park', 120),
('Dale Iliffe', 'diliffe3n@vimeo.com', '723-848-4201', '1 Lunder Plaza', 121),
('Bobine Conneely', 'bconneely1u@ucsd.edu', '907-883-4381', '1005 Monica Way', 122),
('Emlynne Duley', 'eduley3o@webnode.com', '904-657-8415', '81704 Eggendart Trail', 123),
('Dyane Petasch', 'dpetasch1v@home.pl', '348-596-0663', '9879 Pankratz Plaza', 124),
('Devan McSharry', 'dmcsharry1w@ocn.ne.jp', '384-371-1785', '6222 Center Place', 125),
('Patrice Moscon', 'pmoscon3p@shutterfly.com', '919-262-4161', '79984 Mallory Drive', 126),
('Lin Kenewel', 'lkenewel1x@sphinn.com', '758-622-2930', '1453 Dunning Drive', 127),
('Garrot Decaze', 'gdecaze3q@illinois.edu', '119-266-7575', '327 Texas Circle', 128),
('Onfre Longbothom', 'olongbothom3r@cmu.edu', '307-478-4352', '0 Schiller Street', 129),
('Teena Caddies', 'tcaddies1y@paypal.com', '591-827-8758', '5224 Homewood Parkway', 130),
('Karlen Ravenhills', 'kravenhills3s@cnet.com', '305-608-1142', '38 Westerfield Point', 131),
('Rita Sharman', 'rsharman1z@samsung.com', '648-678-4575', '8098 Summerview Junction', 132),
('Claudina Bernette', 'cbernette3t@altervista.org', '267-865-6413', '14 Crownhardt Place', 133),
('Maurita Battill', 'mbattill20@weibo.com', '387-600-8975', '88 Roxbury Drive', 134),
('Sargent Thraves', 'sthraves3u@independent.co.uk', '806-866-1301', '12 Armistice Street', 135),
('Cam Sotham', 'csotham21@psu.edu', '959-953-5794', '9120 Merry Pass', 136),
('Cyndie Goch', 'cgoch3v@umn.edu', '485-804-2326', '1006 Center Avenue', 137),
('Lanae Feasley', 'lfeasley22@microsoft.com', '858-707-6968', '0182 Cascade Street', 138),
('Harley D\'Ambrogi', 'hdambrogi3w@topsy.com', '733-264-4606', '877 Blue Bill Park Place', 139),
('Rochette Haydock', 'rhaydock23@biglobe.ne.jp', '743-508-2184', '52589 Shopko Trail', 140),
('Alexine Pembridge', 'apembridge3x@usa.gov', '126-897-7050', '360 Scoville Pass', 141),
('Fairfax Fitzsymonds', 'ffitzsymonds24@chicagotribune.com', '736-263-3103', '62074 Starling Avenue', 142),
('Madonna Redwing', 'mredwing3y@yale.edu', '415-882-7693', '6015 Kingsford Way', 143),
('Gothart Hercock', 'ghercock3z@multiply.com', '808-816-2065', '24179 Carey Point', 144),
('Emanuele Trobe', 'etrobe40@slideshare.net', '737-531-0006', '34110 Wayridge Point', 145),
('Nola Baskerfield', 'nbaskerfield41@mit.edu', '202-961-1877', '010 Green Ridge Court', 146),
('Elfie McLae', 'emclae42@fema.gov', '442-596-3669', '9575 Rutledge Junction', 147),
('Robinet Halward', 'rhalward43@dot.gov', '954-980-8750', '1 Vermont Avenue', 148),
('Jemima Lasty', 'jlasty44@nymag.com', '183-971-8537', '7 Dayton Road', 149),
('Rocky Strangwood', 'rstrangwood45@noaa.gov', '131-790-2635', '6027 Mayer Park', 150),
('Emelyne Dendon', 'edendon46@example.com', '268-397-1186', '7561 Esker Trail', 151),
('Baryram Nial', 'bnial47@stanford.edu', '484-143-4564', '9 Milwaukee Hill', 152),
('Bron Trinke', 'btrinke48@ustream.tv', '592-772-1455', '96 Saint Paul Court', 153),
('Lizzie Rowles', 'lrowles49@elegantthemes.com', '642-245-7472', '437 Iowa Court', 154),
('Izabel Duckworth', 'iduckworth4a@state.gov', '189-124-7425', '60505 Gale Pass', 155),
('Neel Toopin', 'ntoopin4b@mediafire.com', '348-595-7372', '07880 Pleasure Alley', 156),
('Perry Pocknell', 'ppocknellu@amazon.co.uk', '373-283-7031', '99 Petterle Parkway', 157),
('Ricky Trudgian', 'rtrudgian4c@is.gd', '164-230-6826', '14 Meadow Vale Circle', 158),
('Costanza Sibery', 'csiberyv@wikispaces.com', '716-421-2841', '371 Acker Street', 159),
('Merrily Dixey', 'mdixey4d@yellowpages.com', '932-517-2249', '5 Fallview Pass', 160),
('Kearney Shama', 'kshamaw@theglobeandmail.com', '294-728-4770', '3297 Golf Course Place', 161),
('Alexandro Paget', 'apaget4e@who.int', '527-855-8651', '7379 High Crossing Court', 162),
('Kimmi Kingsland', 'kkingsland4f@walmart.com', '645-233-1214', '112 Center Crossing', 163),
('Pearl Feehery', 'pfeeheryx@boston.com', '810-782-1006', '4031 Independence Way', 164),
('Lazaro Gilloran', 'lgilloran4g@dailymail.co.uk', '508-687-0519', '45128 Gina Crossing', 165),
('Barry Decaze', 'bdecazey@cnbc.com', '390-957-2798', '4892 Nevada Parkway', 166),
('Maritsa Sattin', 'msattin4h@liveinternet.ru', '799-560-0424', '217 Clyde Gallagher Center', 167),
('Jordan Mostin', 'jmostinz@1und1.de', '848-880-9100', '9313 Hooker Road', 168),
('Calv Stern', 'cstern4i@redcross.org', '135-498-7715', '75723 Grasskamp Way', 169),
('Ambros Bahlmann', 'abahlmann10@omniture.com', '306-398-3339', '0 Ilene Avenue', 170),
('Annabell Manntschke', 'amanntschke4j@businessinsider.com', '166-417-8186', '3233 Dottie Terrace', 171),
('Siward Ceci', 'sceci11@mashable.com', '440-322-4028', '26483 Sundown Trail', 172),
('Allyson O\'Shirine', 'aoshirine4k@whitehouse.gov', '615-849-3568', '0930 Duke Trail', 173),
('Gustaf Shadwick', 'gshadwick12@wordpress.com', '610-983-4989', '2560 Arapahoe Center', 174),
('Adolpho Geeraert', 'ageeraert13@1688.com', '530-133-2257', '5 Valley Edge Road', 175),
('Micah Pea', 'mpea4l@ocn.ne.jp', '101-577-4461', '8 High Crossing Road', 176),
('Yehudi Eakins', 'yeakins14@umn.edu', '307-602-3642', '83262 Hoepker Plaza', 177),
('Aland Mewett', 'amewett4m@etsy.com', '403-503-1133', '1 Red Cloud Center', 178),
('Genna Johnsee', 'gjohnsee15@independent.co.uk', '435-441-7526', '6 Logan Junction', 179),
('Guenna Braidon', 'gbraidon4n@t-online.de', '699-474-1984', '8068 Burning Wood Terrace', 180),
('Darwin Dorsey', 'ddorsey16@dyndns.org', '390-616-1198', '74 Nobel Parkway', 181),
('Emmeline McFfaden', 'emcffaden4o@ebay.co.uk', '567-545-7219', '38 Pleasure Lane', 182),
('Ardith Whates', 'awhates17@newsvine.com', '321-276-4738', '5748 Mcbride Way', 183),
('Kevan O\'Donoghue', 'kodonoghue4p@macromedia.com', '249-597-1928', '4773 Fallview Drive', 184),
('Olav Ciobotaru', 'ociobotaru18@webnode.com', '884-563-7838', '3 Green Ridge Center', 185),
('Aurelie Hallowes', 'ahallowes4q@trellian.com', '336-412-6027', '84 Namekagon Avenue', 186),
('Moira Karp', 'mkarp19@a8.net', '459-449-1120', '16 Bay Point', 187),
('Alfy Issett', 'aissett4r@imgur.com', '228-472-2898', '1055 Dennis Pass', 188),
('Emlynn Whines', 'ewhines1a@foxnews.com', '904-804-9356', '92 Scott Avenue', 189),
('Loutitia Bruff', 'lbruff1b@telegraph.co.uk', '908-994-4547', '77 Sunnyside Avenue', 190),
('Darrell Mackerness', 'dmackerness4s@twitpic.com', '684-848-8372', '35 Jenna Trail', 191),
('Cory Slocom', 'cslocom1c@walmart.com', '947-163-1253', '48572 Forster Park', 192),
('Tate Benge', 'tbenge4t@hostgator.com', '894-408-1817', '57265 Troy Lane', 193),
('Bibi Hebron', 'bhebron1d@elpais.com', '394-533-8419', '3 International Alley', 194),
('Clyde Allbut', 'callbut4u@mail.ru', '339-137-4117', '9 Grayhawk Crossing', 195),
('Lydon Hoyles', 'lhoyles4v@zimbio.com', '979-736-1490', '42916 Merchant Point', 196),
('Heddie De Gregario', 'hde4w@microsoft.com', '355-548-6664', '62766 Monica Park', 197),
('Dal Mildner', 'dmildner4x@sciencedaily.com', '845-848-6055', '47 Portage Junction', 198),
('Darby Burnep', 'dburnep4y@odnoklassniki.ru', '775-805-5893', '270 Schiller Point', 199),
('Giacopo Arbon', 'garbon4z@desdev.cn', '415-778-6507', '47 Sutteridge Junction', 200),
('Cammy Sawkin', 'csawkin50@twitter.com', '479-458-3059', '87165 Sauthoff Plaza', 201),
('Toma Mathie', 'tmathie51@so-net.ne.jp', '736-980-7695', '4660 Debs Parkway', 202),
('Andonis Farreil', 'afarreil52@is.gd', '886-905-7587', '7397 Esker Place', 203),
('Rhody Boase', 'rboase53@disqus.com', '274-215-9793', '75214 Summer Ridge Center', 204),
('Aylmer Fullman', 'afullman54@dagondesign.com', '874-997-7822', '915 Briar Crest Alley', 205),
('Danyelle O\'Dooghaine', 'dodooghaine55@github.com', '171-138-9625', '11598 Haas Plaza', 206),
('Diana Powlesland', 'dpowlesland56@jimdo.com', '785-454-4574', '243 Everett Crossing', 207),
('Keane Coggles', 'kcoggles57@howstuffworks.com', '726-544-0100', '10067 Corscot Street', 208),
('Gayleen MacGlory', 'gmacglory58@php.net', '688-803-7757', '307 Northland Point', 209),
('Gisela Stealy', 'gstealy59@unblog.fr', '949-747-6045', '45319 Tony Lane', 210),
('Tynan Frame', 'tframe5a@1688.com', '822-551-3111', '959 Bartillon Center', 211),
('Amery Robke', 'arobke5b@histats.com', '461-539-6506', '83 Burrows Hill', 212),
('Leona Le Page', 'lle5c@github.com', '998-799-5726', '4 Forster Trail', 213),
('Vinson Junifer', 'vjunifer5d@theatlantic.com', '628-491-4169', '47 Hagan Park', 214),
('Bridget Raccio', 'braccio5e@narod.ru', '937-571-8583', '350 Bashford Way', 215),
('Ev Poinsett', 'epoinsett5f@nsw.gov.au', '421-203-0421', '39 Cottonwood Circle', 216),
('Evered Winterflood', 'ewinterflood5g@pcworld.com', '285-376-9416', '1634 Corry Terrace', 217),
('Stace Leinster', 'sleinster5h@yellowpages.com', '220-679-4471', '2978 Di Loreto Drive', 218),
('Cosmo Yanin', 'cyanin5i@unc.edu', '190-918-8147', '0 Drewry Park', 219),
('Holli Helis', 'hhelis5j@sina.com.cn', '524-578-4441', '063 Helena Trail', 220),
('Regina Panting', 'rpanting0@upenn.edu', '225-197-9276', '30 Mayer Point', 221),
('Roseline Spreckley', 'rspreckley1@sun.com', '519-707-1729', '21136 Pearson Plaza', 222),
('Candice O\'Dooghaine', 'codooghaine2@dell.com', '240-619-2421', '6898 Steensland Pass', 223),
('Ravid Fagan', 'rfagan3@w3.org', '422-152-4908', '4 Granby Terrace', 224),
('Homere Growy', 'hgrowy4@stumbleupon.com', '479-806-8736', '82997 Anniversary Crossing', 225),
('Shane Tilte', 'stilte5@tiny.cc', '771-554-8717', '12 Colorado Parkway', 226),
('Mayne Morcom', 'mmorcom6@bbc.co.uk', '902-382-5744', '278 Buena Vista Terrace', 227),
('Darby Billison', 'dbillison7@dot.gov', '601-876-3563', '56515 Crest Line Circle', 228),
('Amalle Rampton', 'arampton8@twitter.com', '828-440-4564', '587 Nobel Parkway', 229),
('Ado Schnieder', 'aschnieder9@prlog.org', '954-432-4554', '8572 Surrey Street', 230),
('Christopher Stopps', 'cstoppsa@scientificamerican.com', '251-998-5824', '0662 Muir Avenue', 231),
('Coriss Crankshaw', 'ccrankshawb@chron.com', '427-304-0730', '736 Bowman Lane', 232),
('Elsy Scoone', 'escoonec@mlb.com', '867-340-7875', '046 Banding Parkway', 233),
('Vito Bachman', 'vbachmand@newyorker.com', '986-124-0886', '89636 Stone Corner Point', 234),
('Jacques Simm', 'jsimme@blogger.com', '726-206-5784', '7521 Forster Pass', 235),
('Benetta Codlin', 'bcodlinf@cpanel.net', '780-848-5168', '92 Blackbird Avenue', 236),
('Hamilton O\'Collopy', 'hocollopyg@elpais.com', '933-612-7211', '044 Sutteridge Crossing', 237),
('Gunter Josum', 'gjosumh@sphinn.com', '566-656-0560', '9007 Sachtjen Court', 238),
('Boycey Aylmer', 'baylmeri@google.com.au', '760-344-8998', '3031 Ludington Junction', 239),
('Fields Slowley', 'fslowleyj@about.com', '558-219-5676', '809 Porter Drive', 240),
('Amalia Macieiczyk', 'amacieiczykk@behance.net', '875-747-6077', '11 Everett Circle', 241),
('Alick Yearns', 'ayearnsl@desdev.cn', '702-881-5266', '0 Crescent Oaks Point', 242),
('Stacy Antecki', 'santeckim@squarespace.com', '580-506-8400', '85 Maple Lane', 243),
('Martyn O\' Reagan', 'mon@chicagotribune.com', '744-433-2197', '303 Laurel Point', 244),
('Angelita Argyle', 'aargyleo@csmonitor.com', '891-836-6243', '5222 Dottie Hill', 245),
('Murvyn Verecker', 'mvereckerp@storify.com', '974-911-9649', '02 Forster Trail', 246),
('Benjamen Sang', 'bsangq@ox.ac.uk', '540-164-5348', '5 Troy Place', 247),
('Fredi Bysouth', 'fbysouthr@china.com.cn', '257-554-5871', '3153 Algoma Point', 248),
('Idaline Anscombe', 'ianscombes@techcrunch.com', '974-386-6044', '503 Fuller Road', 249),
('Justin MacIntyre', 'jmacintyret@a8.net', '954-585-3258', '8 Longview Lane', 250);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `expiry_date` varchar(5) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `customer_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `flower` varchar(9) DEFAULT NULL,
  `price` decimal(4,2) DEFAULT NULL,
  `product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`flower`, `price`, `product_id`) VALUES
('hydrangea', 7.37, 1),
('lily', 10.74, 2),
('orchid', 8.61, 3),
('orchid', 8.61, 4),
('orchid', 19.44, 5),
('orchid', 19.44, 6),
('daffodil', 13.69, 7),
('daffodil', 13.69, 8),
('daisy', 16.28, 9),
('daisy', 16.28, 10),
('daisy', 16.06, 11),
('daisy', 16.06, 12),
('orchid', 16.72, 13),
('tulip', 18.80, 14),
('carnation', 9.27, 15),
('orchid', 16.72, 16),
('sunflower', 13.67, 17),
('carnation', 9.27, 18),
('sunflower', 13.67, 19),
('peonies', 13.35, 20),
('sunflower', 17.51, 21),
('sunflower', 17.51, 22),
('rose', 15.61, 23),
('rose', 15.61, 24),
('daffodil', 9.27, 25),
('sunflower', 16.59, 26),
('sunflower', 16.59, 27),
('tulip', 14.80, 28),
('rose', 13.93, 29),
('tulip', 14.80, 30),
('orchid', 9.86, 31),
('lily', 13.37, 32),
('sunflower', 15.05, 33),
('sunflower', 10.93, 34),
('rose', 14.40, 35),
('daffodil', 17.02, 36),
('carnation', 8.35, 37),
('hydrangea', 9.54, 38),
('tulip', 8.10, 39),
('lily', 15.81, 40),
('peonies', 13.87, 41),
('daisy', 8.68, 42),
('orchid', 9.86, 43),
('orchid', 18.46, 44),
('lily', 13.37, 45),
('orchid', 17.63, 46),
('sunflower', 15.05, 47),
('sunflower', 10.93, 48),
('rose', 14.40, 49),
('daffodil', 17.02, 50),
('tulip', 9.62, 51),
('carnation', 8.35, 52),
('daisy', 10.17, 53),
('hydrangea', 9.54, 54),
('carnation', 15.06, 55),
('tulip', 8.10, 56),
('lily', 15.81, 57),
('peonies', 13.87, 58),
('daisy', 8.68, 59),
('orchid', 18.46, 60),
('orchid', 17.63, 61),
('tulip', 9.62, 62),
('daisy', 10.17, 63),
('carnation', 15.06, 64),
('tulip', 18.80, 65),
('peonies', 13.35, 66),
('daffodil', 9.27, 67),
('rose', 13.93, 68),
('daisy', 17.57, 69),
('orchid', 13.21, 70),
('sunflower', 12.86, 71),
('sunflower', 19.08, 72),
('hydrangea', 7.37, 73),
('lily', 10.74, 74),
('daisy', 17.57, 75),
('orchid', 13.21, 76),
('sunflower', 12.86, 77),
('sunflower', 19.08, 78);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
