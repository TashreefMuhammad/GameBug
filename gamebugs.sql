-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2019 at 09:28 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamebugs`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CatName` varchar(255) NOT NULL,
  `Img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CatName`, `Img`) VALUES
('Action', 'images/action/1.jpg'),
('Adventure', 'images/Adventure/1.jpg'),
('Fighting', 'images/Fighting/1.jpg'),
('Mystery', 'images/Mystery/1.jpg'),
('Racing', 'images/Racing/1.jpg'),
('RPG', 'images/RPG/1.png'),
('Sci-Fi', 'images/SCiFi/1.jpg'),
('Shooting', 'images/Shooting/1.jpg'),
('Sports', 'images/Sports/1.jpg'),
('Strategy', 'images/Strategy/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CommentID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `GameID` int(11) NOT NULL,
  `Message` text NOT NULL,
  `Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`CommentID`, `UserID`, `UserName`, `GameID`, `Message`, `Date`) VALUES
(6, 3, 'Ara', 4, 'OOOOOOOO!!!!!', '2019-10-13 02:41:45'),
(7, 1, 'm', 3, 'Hello!!! Everyone This is a good game!!', '2019-10-13 03:11:46'),
(8, 1, 'm', 3, 'HI EveryOne!!', '2019-10-13 03:12:03'),
(9, 3, 'Ara', 4, 'Nice Game!\r\n', '2019-10-13 03:19:37'),
(10, 3, 'Ara', 2, 'Heloo!!', '2019-10-13 03:29:32'),
(11, 3, 'Ara', 2, 'Nice game!', '2019-10-13 03:31:27'),
(12, 3, 'Ara', 2, 'Yaaaaa!!!', '2019-10-13 03:33:37'),
(13, 1, 'm', 2, 'Yaaaaas!!!', '2019-10-13 03:34:11'),
(14, 1, 'm', 2, 'Nothing', '2019-10-13 03:36:51'),
(15, 1, 'm', 2, 'Likhlam', '2019-10-13 03:36:58'),
(16, 1, 'm', 4, 'UUUUUU uUUUUUUUUUU UUUU!!!', '2019-10-13 03:43:46'),
(17, 1, 'm', 1, 'Nice game!! But poor graphics!!', '2019-10-13 05:23:06'),
(18, 5, 'Arafat Uddin', 1, 'i dont know but lkike this Game!!', '2019-10-13 05:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `GameID` int(11) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `CatIMG` varchar(255) NOT NULL,
  `GameName` varchar(255) NOT NULL,
  `Details` text NOT NULL,
  `gIMG1` varchar(255) NOT NULL,
  `gIMG2` varchar(255) NOT NULL,
  `gIMG3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`GameID`, `Category`, `CatIMG`, `GameName`, `Details`, `gIMG1`, `gIMG2`, `gIMG3`) VALUES
(1, 'Racing', 'images/racing/1.jpg', 'NFS Carbon', 'Need for Speed Carbon PC game is set in the city named Palmont. It has the same locations as showed in the previous games of NFS. Also there is a new city added for Need for Speed Carbon PC game. The same player is shown to ride along the new city in his BMW and we see a flashback in which he is seen to race along some rivals. As he is about to win the race police interferes and arrests all the racers. The player escapes this raid and chaos. Now he is about to live his most astounding and terrifying days in his life.\r\nSystem Requirements of Need for Speed Carbon PC Game\r\n\r\nMinimum system requirements.\r\n\r\n    Operating System: Game is tested on windows 7 ( 32 and 64 Bit)\r\n    CPU: Pentium 4 2.24 GHz\r\n    RAM: 512\r\n    Hard Disk Space: 5.3 GB', 'images/racing/r1.jpg', 'images/racing/r2.jpg', 'images/racing/r3.jpg'),
(2, 'Action', 'images/action/1.jpg', 'Hitman Absolution', 'Hitman Absolution takes place in a city of United States. and in a fictional city named Hope. Interesting thing in this game is that. The player can generate missions of his choice. and these missions will also be completed by other players. The main mode of the game is Instinct mode. and with the help of this mode player can guess the route of enemy.Hitman Absolution has interesting a cinematic story. In this game the player is a cold blooded assassin. and this player is betrayed by those people on which he has true faith. The player is hunted by police from every where. Player has a variety of weapons. and he can use them for fight. The player is surrounded by bad schemes. and he has to begin a new journey to fight against these things. Player wants to free himself from this dishonest world.\r\n\r\nMinimum system requirements\r\n\r\n    Operating System: Wndows Vista, Windows 7, Windows 8 and 8.1  \r\n    CPU: Dual core CPU\r\n    RAM: 2 GB\r\n    Hard Disk: 10 GB', 'images/action/a1.jpg', 'images/action/a2.jpg', 'images/action/a3.jpg'),
(3, 'Action', 'images/Action/1.jpg', 'Max Payne 1', 'Max Payne 1 is a third person shooter game that has been developed by Remedy Entertainment and is published by Gathering of Developers. This game was made available for Microsoft Windows on 23rd July 2001. This game revolves around Max Payne, a detective of NYPD who is on a mission to get revenge of the murder of his family. It has got a very interesting plot. The game though released more than a decade ago is still very popular among people.The player will have only a semi automatic pistol at the start of the game but as the game advances and the player completes different level new and advanced weaponry is introduced. During the game the player has to collect whatever comes its way. These items includes different weapons and painkillers which will help Max Payne when is health is down. Slow motion action has been introduced in this game and whenever a bullet is fired time slows down to such extent that you can see the bullet coming your way with the naked eye. At this point Max Payne can perform some special moves. As the game advances you will experience that the it has become more and more complex and difficult . In order to navigate through different buildings maps have been provided. The graphics of this game are quite impressive and the sounds are also very much praiseworthy. With some mind blowing actions and advanced weaponry Max Payne 1 is surely a game to go for.\r\n\r\nMinimum system requirements.\r\n\r\n    Operating System: Windows XP/Vista/7/8\r\n    Memory: 128 MB\r\n    Hard Disk Space: 1 GB\r\n    Processor: 1GHz or faster.', 'images/Action/a4.jpg', 'images/Action/a5.jpg', 'images/Action/a6.jpg'),
(4, 'Action', 'images/Action/1.jpg', 'Mafia II', 'Mafia 2 is an action and adventure game. This game is second game in Mafia game series. Previous game Mafia is also a very good game but believe me this game is something special. Mafia 2 has got amazing graphic quality and wonderful sound effects.In this game the main character is Vito. Vito has got a variety of useful weapons such as pump action shotgun, MP 40, MG 42 and machine gun. Vito has to face many powerful enemies. Player can do two types of action in this game to the objects; standard action and violent action. You will see a map in this game which is useful for player to travel. Player has an ability to hide behind different objects and after hiding he can also shoot the enemies.You will see three different radio stations in this game and with these stations player can enjoy different types of music. Player can also enjoy songs of some real singers. In this game player has to complete fifteen difficult chapters. Player has also got an ability to collect things. As the game progressed player can also unlock different things.\r\n\r\nMinimum system requirements\r\n\r\n    Operating System: Microsoft Windows XP, Window 7/ Windows 8 and 8.1.\r\n    CPU: Pentium D 3 GHz\r\n    RAM: 1.5 GB\r\n    Hard Disk: 8 GB', 'images/Action/a7.jpg', 'images/Action/a8.jpg', 'images/Action/a9.jpg'),
(5, 'Action', 'images/Action/1.jpg', 'Mass Effect 3', 'Commander Shepard is the main character of Mass Effect 3 PC game. In this game you will see that Reapers start destruction in the whole Galaxy. The entire Galaxy is disturbed by them. Shepard is the only one who can save the Galaxy from them. Shepard can save planet of his own choice. He has to make plan and to lead the force to defeat Reapers. Commander Shepard has got many powers.Mass Effect 3 has three campaign modes Action mode, RPG mode and story mode. In this game some new options are also added. You will see a variety of grenades available for player to attack. Artificial intelligence is also improved. Players can customize and upgrade their skills and weapons. Players who have saved files of Mass Effect and Mass Effect 2 can import these files to that game. Players who do not have saved files will see a story at the start of the game. This story helps them to understand that game.\r\n\r\nMinimum system requirements\r\n\r\n    Operating System: Windows XP, Windows 7, Windows 8 and 8.1\r\n    CPU: Core 2 duo 1.8 GHz\r\n    RAM: 2 GB\r\n    Hard Disk: 15 GB', 'images/Action/a10.jpg', 'images/Action/a11.jpg', 'images/Action/a12.jpg'),
(6, 'Racing', 'images/racing/1.jpg', 'MotoGP 13', 'In this game player need to drive his bike faster. and try to beat all other drivers. In the game MotoGP 13. You will enjoy four very interesting and unique kinds of single player game modes. Grand Prix, World Championship, Career and Time attack. These are the game modes of MotoGP 13. \r\n\r\nEvery game mod is different from other. and you will enjoy different features in each and every mode. You can enjoy multi player games. and online game mode is also available in this game.\r\n\r\nMinimum system requirements\r\n\r\n    Operating System: Windows XP/ Windows Vista/ Windows 7/ Windows 8 and 8.1\r\n    CPU: 2.2 GHz Dual Core\r\n    RAM: 2 GB\r\n    Hard Disk: 6 GB', 'images/racing/r4.jpg', 'images/racing/r5.jpg', 'images/racing/r6.jpg'),
(7, 'Racing', 'images/racing/r1.jpg', 'Need For Speed Most Wanted', 'The game has been set in open world environment of Rockport city. The player can select one of the many breathtaking cars included in this game and then compete with other cars in three different modes Quick Race, Career and Challenge Series. In the Quick Race mode you select a car and immediately start racing while the Career mode introduces a new feature of snatching the opponent’s car. The Challenge Series modes includes 69 stunning challenges which the player has to complete to advance. Need For Speed Most Wanted also includes the pursuit system the the cops can chase you at any time in race. \r\n\r\nMinimum system requirements.\r\n\r\n    Operating System: Windows XP/Vista/7/8\r\n    CPU: Intel Pentium 4\r\n    RAM: 256MB\r\n    Hard Disk Space: 3GB', 'images/racing/r7.jpg', 'images/racing/r8.jpg', 'images/racing/r9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `GBLogo` varchar(255) NOT NULL,
  `Des` text NOT NULL,
  `Name1` varchar(255) NOT NULL,
  `Id1` varchar(255) NOT NULL,
  `Img1` varchar(255) NOT NULL,
  `Name2` varchar(255) NOT NULL,
  `Id2` varchar(255) NOT NULL,
  `Img2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`GBLogo`, `Des`, `Name1`, `Id1`, `Img1`, `Name2`, `Id2`, `Img2`) VALUES
('images/logo.png', '<b>GameBug</b> is an online community under development for gamers. The Objective is to provide a social websites that solely concentrates on developing a community for gamers of Bangladesh & worldwide.\r\n                                </p>\r\n                                <p class=\"card-text\"><i>We primarily developed this website as our CSE 3100 Project</i></p>', 'Arafat Uddin', '17.01.04.021', 'images/arafat.jpg', 'Tashreef Muhammad', '17.01.04.014', 'images/tashreef.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` text NOT NULL,
  `SignupDate` date NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Email`, `Password`, `SignupDate`, `Status`) VALUES
(1, 'm', 'm@h.com', 'c4ca4238a0b923820dcc509a6f75849b', '2019-10-12', 1),
(2, 'moin', 'moin@gmail.com', '06a998cdd13c50b7875775d4e7e9fa74', '2019-10-12', 1),
(3, 'Ara', 'Ara@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2019-10-12', 1),
(4, 'Ali', 'ali24@g.com', '86318e52f5ed4801abe1d13d509443de', '2019-10-13', 1),
(5, 'Arafat Uddin', 'Arafat@gmail.com', '0f0a24fb6d926e172d2d2f7a61444560', '2019-10-13', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentID`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`GameID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `GameID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
