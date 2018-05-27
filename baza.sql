-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2017 at 11:34 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CommentID` int(12) NOT NULL,
  `CommentUserID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `CommentDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CommentText` text COLLATE utf16_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_croatian_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`CommentID`, `CommentUserID`, `ProductID`, `CommentDate`, `CommentText`) VALUES
(1, 5, 991, '2017-06-15 08:36:21', 'Vrlo dobar album'),
(2, 5, 997, '2017-06-15 09:03:48', 'ARGGGGGGGGGGGH!');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `NewsID` int(11) NOT NULL,
  `NewsName` varchar(100) COLLATE utf16_croatian_ci NOT NULL,
  `NewsDesc` text COLLATE utf16_croatian_ci NOT NULL,
  `NewsImage` varchar(100) COLLATE utf16_croatian_ci NOT NULL,
  `NewsDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `NewsAuthor` varchar(50) COLLATE utf16_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_croatian_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`NewsID`, `NewsName`, `NewsDesc`, `NewsImage`, `NewsDate`, `NewsAuthor`) VALUES
(1, 'ALESTORM - Announce European Tour!', 'Oh wow! Hot on the heels of ''No Grave But The Sea'', out NOW on Napalm Records, your favorite pirates ALESTORM will return to the stage for the band''s first headlining European tour in over 3 years!\n\nWhile ALESTORM are about to hit the road to join the legendary US Vans Warped Tour this summer, in October 2017 the heavy metal party pirates will be hitting venues in Germany, Hungary, Austria, Switzerland, France, the Netherlands, and Belgium for the first part of their ''No Grave But The Sea World Tour''. Expect an extra long set of singalong anthems, drunken partying, crazy pirate mosh pits, and of course giant inflatable rubber ducks! \nSupport will come with special guests in the US epic folk metal vikings of ÆTHER REALM as well as by Australia''s Troldhaugen.\n \nMake sure to catch this very special and heavy band package live on the following dates this Fall!', 'slike/vesti/alestorm_tour.jpg', '2017-06-01 17:26:18', 'Ivan'),
(2, 'GLORYHAMMER & CIVIL WAR on tour in 2018!', 'GLORYHAMMER will embark on a headline tour in early 2018 and will bring CIVIL WAR as very special guest!\r\n \r\nGLORYHAMMER is already looking forward to this tour & state:              \r\n"In January 2018 we will be questing across the barren frozen wastelands of Germany, Czech Republic, Hungary, Austria, Italy, France, Spain, Switzerland, The Netherlands, Belgium and England to bring you a show like none other! Yes, mighty warriors...we will be performing the ENTIRE album "Space 1992: Rise of the Chaos Wizards", from start to finish, in sequence. Including songs we have NEVER played before! And to top it off, we''ll also play all your favorites from our debut album as well! Truly a show fit for a hootsman!"', 'slike/vesti/gloryhammer_tour.jpg', '2017-06-01 17:32:00', 'Ivan');

-- --------------------------------------------------------

--
-- Table structure for table `optiongroups`
--

CREATE TABLE `optiongroups` (
  `OptionGroupID` int(11) NOT NULL,
  `OptionGroupName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data for table `optiongroups`
--

INSERT INTO `optiongroups` (`OptionGroupID`, `OptionGroupName`) VALUES
(1, 'color'),
(2, 'size');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `OptionID` int(11) NOT NULL,
  `OptionGroupID` int(11) DEFAULT NULL,
  `OptionName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`OptionID`, `OptionGroupID`, `OptionName`) VALUES
(1, 1, 'red'),
(2, 1, 'blue'),
(3, 1, 'green'),
(4, 2, 'S'),
(5, 2, 'M'),
(6, 2, 'L'),
(7, 2, 'XL'),
(8, 2, 'XXL');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `DetailID` int(11) NOT NULL,
  `DetailOrderID` int(11) NOT NULL,
  `DetailProductID` int(11) NOT NULL,
  `DetailName` varchar(250) COLLATE latin1_german2_ci NOT NULL,
  `DetailPrice` float NOT NULL,
  `DetailSKU` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `DetailQuantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `OrderUserID` int(11) NOT NULL,
  `OrderAmount` float NOT NULL,
  `OrderShipName` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipAddress` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipAddress2` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderCity` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderState` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderZip` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `OrderCountry` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderPhone` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `OrderFax` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipping` float NOT NULL,
  `OrderTax` float NOT NULL,
  `OrderEmail` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `OrderShipped` tinyint(1) NOT NULL DEFAULT '0',
  `OrderTrackingNumber` varchar(80) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productcategories`
--

CREATE TABLE `productcategories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(50) COLLATE latin1_german2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data for table `productcategories`
--

INSERT INTO `productcategories` (`CategoryID`, `CategoryName`) VALUES
(1, 'CD'),
(2, 'EARBOOK'),
(3, 'VINYL'),
(4, 'TSHIRT'),
(5, 'JEWELLERY'),
(6, 'BAG');

-- --------------------------------------------------------

--
-- Table structure for table `productoptions`
--

CREATE TABLE `productoptions` (
  `ProductOptionID` int(10) UNSIGNED NOT NULL,
  `ProductID` int(10) UNSIGNED NOT NULL,
  `OptionID` int(10) UNSIGNED NOT NULL,
  `OptionPriceIncrement` double DEFAULT NULL,
  `OptionGroupID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data for table `productoptions`
--

INSERT INTO `productoptions` (`ProductOptionID`, `ProductID`, `OptionID`, `OptionPriceIncrement`, `OptionGroupID`) VALUES
(1, 1, 1, 0, 1),
(2, 1, 2, 0, 1),
(3, 1, 3, 0, 1),
(4, 1, 4, 0, 2),
(5, 1, 5, 0, 2),
(6, 1, 6, 0, 2),
(7, 1, 7, 2, 2),
(8, 1, 8, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(12) NOT NULL,
  `ProductSKU` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `ProductName` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `ProductPrice` float NOT NULL,
  `ProductWeight` float NOT NULL,
  `ProductCartDesc` varchar(250) COLLATE latin1_german2_ci NOT NULL,
  `ProductImageTwo` varchar(1000) COLLATE latin1_german2_ci NOT NULL,
  `ProductLongDesc` text COLLATE latin1_german2_ci NOT NULL,
  `ProductThumb` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `ProductImage` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `ProductCategoryID` int(11) DEFAULT NULL,
  `ProductUpdateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ProductStock` float DEFAULT NULL,
  `ProductLive` tinyint(1) DEFAULT '0',
  `ProductUnlimited` tinyint(1) DEFAULT '1',
  `ProductLocation` varchar(250) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductSKU`, `ProductName`, `ProductPrice`, `ProductWeight`, `ProductCartDesc`, `ProductImageTwo`, `ProductLongDesc`, `ProductThumb`, `ProductImage`, `ProductCategoryID`, `ProductUpdateDate`, `ProductStock`, `ProductLive`, `ProductUnlimited`, `ProductLocation`) VALUES
(994, 'Istaknut', 'GLORYHAMMER - TFTOF', 24.99, 1, 'BLACK VINYL', '', 'In a fantasy version of 10th-century Scotland, as previously foretold (“Anstruther’s Dark Prophecy”), the evil wizard Zargothrax invades and conquers Dundee with an army of corrupted undead unicorns (“The Unicorn Invasion of Dundee”), kidnapping the princess Iona McDougall. The prince of the Kingdom of Fife, Angus McFife, swears revenge (“Angus McFife”); in a dream, he has a vision of three artifacts that will allow him to defeat Zargothrax, and sets off on a quest to acquire them.', 'slike/gloryhammer_tales_from_the_kingdom_of_fire.jpg', 'slike/gloryhammer_tales_from_the_kingdom_of_fire2.jpg', 3, '2017-05-06 15:50:45', NULL, 0, 1, NULL),
(992, 'Istaknut', 'Sabaton - Heroes', 13.99, 1, 'CD', 'slike/sabaton_heroes3.jpg', 'What can we do when our band''s previous album is career-defining classic and one of our home country''s most successful heavy metal albums ever?" This was the million dollar question that members of Sabaton - Swedish heavy metal heroes, who have dominated European the heavy metal circuit already for years and received prestigious awards including Metal Hammer UK''s Golden Gods Award for "Best Breakthrough Artist" - had to ask themselves after successful world tour promoting their sixth and platinum selling album "Carolus Rex" (2012).', 'slike/sabaton_heroes.jpg', 'slike/sabaton_heroes2.jpg', 1, '2017-05-06 15:31:49', NULL, 0, 1, NULL),
(993, 'Istaknut', 'Sabaton - The Last Stand', 24.99, 1, 'EARBOOK', '', 'The Last Stand is the eighth studio album by Swedish power metal band Sabaton. It was released on 19 August 2016. It was produced by Peter Tägtgren in Abyss Studios.[1] Like Sabaton''s previous album Heroes, The Last Stand is a concept album and takes inspiration from famous defensive "last stand" battles. On 10 June 2016 the first single The Lost Battalion was released, followed by Blood of Bannockburn on 15 July and Shiroyama on 12 August.', 'slike/sabaton_the_last_stand_earbook.jpg', 'slike/sabaton_the_last_stand_earbook.jpg', 2, '2017-05-06 15:36:36', NULL, 0, 1, NULL),
(991, 'Istaknut', 'Sabaton - Carolus Rex', 9.99, 1, 'CD', 'slike/sabaton_carolus_rex3.jpg', 'SABATON, the power metal band from Falun, Sweden, have worked themselves up to the top. With over 500 shows in over 30 countries, songs and albums in top positions on the charts, excellent reviews and winners of several awards world wide, these guys never seem to stop. Six albums with additional tours have marvelled the global audience, and the lyrics inspired by different war themes define SABATON in their quite unique way. During their career, SABATON have been touring all across Europe together with Iron Maiden, Judas Priest, Scorpions and Accept, and have made fans all over the world. Early in their carreer, in 2001, SABATON won the biggest music contest in northern Europe, “Musik Direkt”. The album “Metalizer” was their first debut attempt, but it wasn’t released until five years later, in 2007. Instead, SABATON took the matter into their own hands and created a new album for a fresh new start. With Primo Victoria - “the first victory” - and Daniel Mÿhr added to the band to master the keyboard, SABATON was completed. Their next album Attero Dominatus also became album of the month in Sweden Rock Magazine, and several magazines worldwide have also honoured SABATON’s albums with this nomination. ', 'slike/sabaton_carolus_rex.jpg', 'slike/sabaton_carolus_rex2.jpg', 1, '2017-05-06 14:19:52', NULL, 0, 1, NULL),
(995, 'Istaknut', 'HAMMERFALL - Hector In battle', 14.99, 1, 'T-SHIRT', '', 'HAMMERFALL official men''s Tee in black cotton, featuring "Hector - In battle" design motif. This quality garment is available in a wide range of sizes from small through xx-large. 100% cotton.', 'slike/hammerfall_majica.jpg', 'slike/hammerfall_majica.jpg', 4, '2017-05-06 15:53:24', NULL, 0, 1, NULL),
(996, 'Istaknut', 'Nightwish - Imaginaerum', 14.99, 1, 'CD', 'slike/nightwish_imaginaerum3.jpg', 'They are uncommon rare. Those unusual, unique and enchanting diamonds washed ashore by the stormy, blustering ocean. They shine brighter than the stars and a magical spell seems to live inside that sparkling, so breathtakingly seductive adornment. NIGHTWISH are one of these adorable virtuosic jewels: Beyond comparison, sensual, touching and overwhelming beautifully. With an exceptional musical mélange combining bombastic, epically and opulent metal elements with symphonic melodies full of melancholic, romantic and dreamy moments, NIGHTWISH created their own style long ago: Often imitated, never duplicated! Mastermind Tuomas Holopainen is not just an excellent and unique composer, even more he understands from the beginning on to fulfill his musical passion - he is a blessed visionary!  Never before a band has merged elements of classic and metal so homogeneous and created such a bombastic and powerful result They have always been ahead of their time. Among the bands ever to storm the metal genre, to take the Symphonic Olympus by assault and to cut their own path, NIGHTWISH have come to be known as the most influential band worldwide in their genre. ', 'slike/nightwish_imaginaerum.jpg', 'slike/nightwish_imaginaerum2.jpg', 1, '2017-05-06 15:54:22', NULL, 0, 1, NULL),
(997, '', 'Alestorm - No grave but the sea', 14.99, 1, 'CD', 'slike/alestorm_no_grave_but_the_sea3.jpg', 'The one and only heavy metal pirates of ALESTORM are back, and they''ve brought with them their 5th full length album: “No Grave But The Sea”! So put on your eyepatch and let the rum flow freely for the unstoppable international party machine. No other band in the galaxy creates such epic modern symphonic folk metal anthems with endless hooks that will be stuck in your head until the heat death of the universe. Or in Alestorm''s own words...”Stupid songs about getting drunk and stealing treasure”. Twisted together with blistering harmonized guitar & keyboard solos, thunderous power metal majesty, and unrelenting modern metal riffing, “No Grave But The Sea” is nothing less than the perfect soundtrack to the most epic battle of your life. “A pirate''s life is simple; we drink and steal and kill!” So raise up your tankard into the sky for this brand new treasure of pirate metal!', 'slike/alestorm_no_grave_but_the_sea.jpg', 'slike/alestorm_no_grave_but_the_sea2.jpg', 1, '2017-05-07 18:49:16', NULL, 0, 1, NULL),
(998, '', 'POWERWOLF - Blessed and Possessed', 18.99, 1, 'VINYL', '', 'After their critically acclaimed number 1-CHART-album „Preachers of the night“ POWERWOLF are back with their new masterpiece „Blessed & possessed“. The density of hits and anthems on their sixth epic is nearly unchristianly - firing hit after hit. The Mystic and bombastic title track “Blessed & possessed” enthralls the listener from the beginning and leads to a top-flight direction, by presenting metal hymns with emotiveness and pure magic. POWERWOLF are bursting with imagination, they have cultivated their well proven trademarks and deliver first class Power Metal („Dead until dark“), the finest Speed Metal („Christ & combat“), great Hard Rock trips („Sacramental sister“) and even orchestral madness („Let there be night“). If all of that isn’t enough for you, the limited first run contains a special bonus CD “Metallium Nostrum” with eight marvelous cover versions of Black Sabbath, Ozzy Osbourne and Judas Priest! This is metal at the absolute top!', 'slike/POWERWOLF_Blessed_and_Possessed_black.jpg', 'POWERWOLF_Blessed_and_Possessed_black.jpg', 3, '2017-05-07 18:52:47', NULL, 0, 1, NULL),
(999, '', 'AC/DC The rockin'' years YELLOW VINYL', 21.99, 1, 'VINYL', '', 'Original recording by the Australian radio station WTCM from 1974. Limited to 999 yellow copies.', 'slike/AC_DC_TheRockin_Years_VINYL.jpg', 'slike/AC_DC_TheRockin_Years_VINYL.jpg', 3, '2017-05-10 20:52:14', NULL, 0, 1, NULL),
(1000, '', 'AC/DC Back in black REISSUE', 21.99, 1, 'VINYL', '', 'Back in Black is the seventh studio album by Australian rock band AC/DC. Produced by Robert John "Mutt" Lange, the album was released on 25 July 1980 by Albert Productions and Atlantic Records. By the late 1970s, AC/DC began to achieve significant popularity outside their native Australia, with high-energy live performances and a string of successful albums. In 1979, they paired with producer Lange and recorded their international breakthrough, Highway to Hell. ', 'slike/AC_DC_Back_In_Black_VINYL.jpg', 'slike/AC_DC_Back_In_Black_VINYL.jpg', 3, '2017-05-10 20:54:34', NULL, 0, 1, NULL),
(1001, '', 'SABATON The art of war RE-ARMED BLACK VINYL', 19.99, 1, 'VINYL', '', 'Black double vinyl with four bonus tracks in gatefold.', 'slike/Sabaton_The_Art_Of_War_VINYL.jpg', 'slike/Sabaton_The_Art_Of_War_VINYL.jpg', 3, '2017-05-10 20:56:43', NULL, 0, 1, NULL),
(1002, '', 'SABATON Shoot to kill', 16.99, 1, 'T-SHIRT', '', 'T shirt. 100% cotton. Textile: Gildan Softstyle', 'slike/SABATON_Shoot_to_kill.jpg', 'slike/SABATON_Shoot_to_kill2.jpg', 4, '2017-05-10 21:00:11', NULL, 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserEmail` varchar(500) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserPassword` varchar(500) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserFirstName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserLastName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserCity` varchar(90) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserState` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserZip` varchar(12) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserEmailVerified` tinyint(1) DEFAULT '0',
  `UserRegistrationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UserVerificationCode` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserIP` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserPhone` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserFax` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserCountry` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserAddress` varchar(100) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserAddress2` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserEmail`, `UserPassword`, `UserFirstName`, `UserLastName`, `UserCity`, `UserState`, `UserZip`, `UserEmailVerified`, `UserRegistrationDate`, `UserVerificationCode`, `UserIP`, `UserPhone`, `UserFax`, `UserCountry`, `UserAddress`, `UserAddress2`) VALUES
(5, 'pero.pazdrkan@gmail.com', 'd78ca35b58d096ff349aeca805466208', 'Ivan', 'Djukic', 'Zemun', NULL, NULL, 1, '2017-05-06 23:02:17', NULL, NULL, NULL, NULL, NULL, 'Lazna Adresa', NULL),
(10, 'admin@admin', 'd78ca35b58d096ff349aeca805466208', 'Pera', 'Peric', 'Vlasotince', NULL, NULL, 1, '2017-05-09 22:54:06', NULL, NULL, NULL, NULL, NULL, 'Ulica', NULL),
(12, 'mare@mail', '202cb962ac59075b964b07152d234b70', 'Marko', 'Obrenic', 'Zemun', NULL, NULL, 1, '2017-05-15 14:44:47', NULL, NULL, NULL, NULL, NULL, 'Adresa', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`NewsID`);

--
-- Indexes for table `optiongroups`
--
ALTER TABLE `optiongroups`
  ADD PRIMARY KEY (`OptionGroupID`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`OptionID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`DetailID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `productcategories`
--
ALTER TABLE `productcategories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `productoptions`
--
ALTER TABLE `productoptions`
  ADD PRIMARY KEY (`ProductOptionID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `NewsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `optiongroups`
--
ALTER TABLE `optiongroups`
  MODIFY `OptionGroupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `OptionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `DetailID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `productcategories`
--
ALTER TABLE `productcategories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `productoptions`
--
ALTER TABLE `productoptions`
  MODIFY `ProductOptionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
