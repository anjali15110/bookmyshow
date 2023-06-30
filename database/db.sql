-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 05:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `artist_image` varchar(500) NOT NULL,
  `artist_name` varchar(20) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `about` varchar(200) NOT NULL,
  `createddate` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `artist_image`, `artist_name`, `occupation`, `about`, `createddate`, `status`) VALUES
(3, 'artist-2023-05-12-4874.jpg', 'Harsh Gujral', 'Stand-up-comedian', 'Harsh is a Dabangg guy from Kanpur who cracks jokes on his life experiences. With a strong personality, he also has strong comedy sets to tickle your funny bones.', '2023-05-12 00:00:00', 1),
(4, 'artist-2023-05-18-5922.jpg', 'Swati Sachdeva', 'Comedian • Stand-up-comedian', 'Swati is funny and biting in her humour. Watch her talk about her life choices, stupid decision making and people she comes across with, the lucky ones who made it to her jokes list!', '2023-05-18 00:00:00', 1),
(5, 'artist-2023-05-18-6701.jpg', 'Nooran Sisters', 'Singer', 'Mystical and legendary folk tales are put to music by the Nooran Sisters. Born into a family of musicians, Jyoti and Sultana Nooran are the granddaughters of the late Bibi Nooran, a very popular Sufi ', '2023-05-18 00:00:00', 1),
(6, 'artist-2023-05-18-9466.jpg', 'Appurv Gupta', 'Comedian', 'Engineer turned Stand-Up Comedian, Appurv Gupta aka GuptaJi has one of the unique voices in the Stand-Up Comedy scene in India. With over 300 Million plus views on Social media, CNN-Network 18 has lis', '2023-05-18 00:00:00', 1),
(7, 'artist-2023-05-18-6248.jpg', 'Ravi Gupta', 'Actor', 'He is a Delhi based Stand Up comic who rose to fame quickly with his new viral video. His observational based desi humor, distinct dialect, and his ability to make you burst into gut wrenching laughte', '2023-05-18 00:00:00', 1),
(10, 'artist-2023-05-18-6597.jpg', 'Gaurav Kapoor', 'Actor', 'Gaurav Kapoor sounds like a celebrity name but he is only a short boy from Delhi who is actually a fully grown man. Apart from a day job, the only thing he has going for him is that he is funny. ', '2023-05-18 00:00:00', 1),
(11, 'artist-2023-05-18-8457.jpg', 'Gurinder Singh', 'Comedian', 'Confused about life, Gurinder started doing comedy and since has been Hanging in with perseverance. He performs jokes with an extremely high rate of speech to have audience in splits, but sometimes th', '2023-05-18 00:00:00', 1),
(12, 'artist-2023-05-18-1152.jpg', 'Onkar Yadav', 'Comedian • Stand-up-comedian', 'Onkar is a delhi based comic doing stand up since 2017 . Dont bother googling Onkar, you will only be disappointed. But walk into his live show and you may still be disappointed (disappointed that the', '2023-05-18 00:00:00', 1),
(13, 'artist-2023-05-18-7378.jpg', 'Saurabh Pandey', 'Comedian', 'After six years of college and three jobs later. He decided to quit his consulting career in 2016 forever because it was getting difficult for him to not take naps in between and he blames the boring ', '2023-05-18 00:00:00', 1),
(14, 'artist-2023-05-18-2667.jpg', 'Gurleen Pannu', 'Comedian • Stand-up-comedian', 'Gurleen Pannu is a new age stand-up comedian. She is a crazy person to listen to, with her observations, anecdotes and gup-shup right from the enigma of a typical Indian household! The lady with her e', '2023-05-18 00:00:00', 1),
(15, 'artist-2023-05-18-7834.jpg', 'Zahid Hassan', 'Trainer', 'His passion is teaching and he aims to help kids grow with technology and build their own creativity that will help them upscale their knowledge.', '2023-05-18 00:00:00', 1),
(16, 'artist-2023-05-18-6551.jpg', 'Guru Randhawa', 'Music • Singer • Lyricist • Producer • Actor', 'The High Rated Gabru hitmaker, Guru Randhawa is a Punjabi singer and songwriter who made his debut in 2013 with the album titled Page One, which comprised songs like `Billo On Fire`, `My Jugni`, `Khal', '2023-05-18 00:00:00', 1),
(17, 'artist-2023-05-18-5144.jpg', 'Raftaar', 'Singer • Lyricist • Music', 'From starting his journey as an avid dancer and performing at one of the country`s biggest dance shows DID (Dance India Dance) RAFTAAR had started his journey as Max. ', '2023-05-18 00:00:00', 1),
(18, 'artist-2023-05-18-2025.jpg', 'KR$NA', 'Singer', 'Carrying the heart of Delhi is KR$NA, one of Indias biggest hip hop artists and known especially for his expert rapping and technical writing ability. ', '2023-05-18 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking_table`
--

CREATE TABLE `booking_table` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `event_id` int(11) NOT NULL,
  `event_name` varchar(20) NOT NULL,
  `seat` varchar(50) NOT NULL,
  `total_price` int(20) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `createddate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_table`
--

INSERT INTO `booking_table` (`id`, `user_id`, `event_id`, `event_name`, `seat`, `total_price`, `quantity`, `status`, `createddate`) VALUES
(1, '2', 10, 'Sham e Sufi - Live S', 'B1,B2', 1998, '2', 1, 2023),
(2, '2', 2, 'Vibin Festival', 'B4,B5', 1398, '2', 1, 2023),
(3, '2', 2, 'Vibin Festival', 'C9,C10', 1398, '2', 1, 2023),
(4, '2', 2, 'Vibin Festival', 'C9,C10', 1398, '2', 1, 2023),
(5, '2', 32, 'MAHINDRA EXCELLENCE ', 'D11,D12', 998, '2', 1, 2023),
(6, '2', 30, 'Women Slay Saturday ', 'B10,B11,B12,C11,C12', 2995, '5', 1, 2023),
(7, '1', 46, 'Madhur Virli Live - ', 'B6,B7', 598, '2', 1, 2023),
(8, '1', 46, 'Madhur Virli Live - ', 'B6,B7', 598, '2', 1, 2023),
(9, '1', 46, 'Madhur Virli Live - ', 'B6,B7', 598, '2', 1, 2023),
(10, '1', 46, 'Madhur Virli Live - ', 'B6,B7', 598, '2', 1, 2023),
(11, '1', 46, 'Madhur Virli Live - ', 'C5,D5', 598, '2', 1, 2023),
(12, '1', 43, 'The Late Night Comed', 'A2,A3', 398, '2', 1, 2023),
(13, '1', 43, 'The Late Night Comed', 'B3,C3', 398, '2', 1, 2023),
(14, '1', 43, 'The Late Night Comed', 'B3,C3', 398, '2', 1, 2023),
(15, '1', 43, 'The Late Night Comed', 'E9,E10', 398, '2', 1, 2023),
(16, '1', 43, 'The Late Night Comed', 'D2,E2', 398, '2', 1, 2023),
(17, '1', 45, 'Pannu Yaar! Standup ', 'E11,E12', 998, '2', 1, 2023),
(18, '1', 40, 'Relaxing Music Thera', 'C4,D4', 498, '2', 1, 2023),
(19, '1', 23, 'So Rude of Me by Swa', 'D9,D10', 998, '2', 1, 2023),
(20, '1', 32, 'MAHINDRA EXCELLENCE ', 'D8,E8', 998, '2', 1, 2023),
(21, '1', 47, 'Stress Free Zone - L', 'D6', 99, '1', 1, 2023),
(22, '1', 32, 'MAHINDRA EXCELLENCE ', 'E7', 499, '1', 1, 2023),
(23, '1', 32, 'MAHINDRA EXCELLENCE ', '', 499, '1', 1, 2023),
(24, '1', 47, 'Stress Free Zone - L', 'E5', 99, '1', 1, 2023),
(25, '1', 32, 'MAHINDRA EXCELLENCE ', 'D7', 499, '1', 1, 2023),
(26, '1', 46, 'Madhur Virli Live - ', 'A4,A5', 598, '2', 1, 2023),
(27, '1', 32, 'MAHINDRA EXCELLENCE ', '', 499, '1', 1, 2023),
(28, '1', 32, 'MAHINDRA EXCELLENCE ', 'A12', 499, '1', 1, 2023),
(29, '1', 47, 'Stress Free Zone - L', '', 99, '1', 1, 2023),
(30, '1', 65, 'Sunburn Goa 2023', 'E11,E12', 1998, '2', 1, 2023),
(31, '1', 66, 'Claydate! Workshop b', 'D8,E8', 3000, '2', 1, 2023),
(32, '1', 10, 'Sham e Sufi - Live S', 'D4,D5', 1998, '2', 1, 2023),
(33, '1', 23, 'So Rude of Me by Swa', 'C5,D5,E5', 1497, '3', 1, 2023);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `createddate` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `image`, `category`, `createddate`, `status`) VALUES
(1, 'category-2023-03-25-7969.jpg', 'Comedy Shows', '2023-03-03 00:00:00', 1),
(2, 'category-2023-03-25-9140.jpg', 'Award Show', '2023-03-23 00:00:00', 1),
(3, 'category-2023-03-25-3401.jpg', 'Celebrity Wishes', '2023-03-23 00:00:00', 1),
(4, 'category-2023-03-25-5946.jpg', 'Exhibitions', '2023-03-23 00:00:00', 1),
(5, 'category-2023-03-25-5451.jpg', 'Kids', '2023-03-18 00:00:00', 1),
(6, 'category-2023-03-25-1418.jpg', 'Music Show', '2023-03-23 00:00:00', 1),
(7, 'category-2023-03-25-6012.jpg', 'Spirituality', '2023-03-23 00:00:00', 1),
(8, 'category-2023-03-25-5594.jpg', 'Workshops', '2023-03-23 00:00:00', 1),
(9, 'category-2023-03-25-3855.jpg', 'Performances', '2023-03-23 00:00:00', 1),
(10, 'category-2023-03-26-9615.jpg', 'Online Steaming Events', '2023-03-14 00:00:00', 1),
(11, 'category-2023-04-07-2490.jpg', 'Movies', '2023-04-07 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `list_image` varchar(200) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_date` datetime NOT NULL,
  `price` int(9) NOT NULL,
  `detail_image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `artist_id` varchar(100) NOT NULL,
  `features` varchar(2000) NOT NULL,
  `createddate` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `category`, `list_image`, `event_name`, `event_date`, `price`, `detail_image`, `description`, `artist_id`, `features`, `createddate`, `status`, `seat`) VALUES
(1, '6', 'event_list-2023-03-25-2079.jpg', 'Echoes of Earth Presents: The Cinematic Orchestra', '2023-04-06 00:00:00', 999, 'event_detail-2023-03-25-9784.jpg', 'Echoes of Earth presents The Cinematic Orchestra 3 city concert tour across India. A one-day affair in each city, offering the unparalleled experience of Echoes. The festival aims at highlighting the local ecosystems and focusing on the successful conservation stories & the eco warriors leading the same.\n\nThe Cinematic Orchestra creates a unique blend of jazz, classical, electronic, and film score music. They are known for their emotive compositions, often featuring live orchestration and vocals', '', '1. Each pass admits one person only, in whose name the pass has been reserved (“Entrant”). This pass is non-transferable and ron-refundable. If your child is below 10 years of age, this pass can be ad', '2023-03-25 00:00:00', 1, 20),
(2, '6', 'event_list-2023-03-25-1161.jpg', 'Vibin Festival', '2023-04-01 00:00:00', 699, 'event_detail-2023-03-25-4419.jpg', 'Don’t miss out on this glorious opportunity to witness an unmatched concert experience with the captivating entertainer Guru Randhawa presented by Magic Moments and8 PM premium black', '', '4th & 5th March - Jaipur\n11th & 12th March - Manipal\n17th & 18th March - Mumbai\n18th & 19th March - Ahmedabad\n25th & 26th March - Kota\n1st & 2nd April - Delhi\n1st & 2nd April - Indore', '2023-03-25 00:00:00', 1, 200),
(3, '6', 'event_list-2023-03-25-5805.jpg', 'Bollyboom Guru Randhawa India Tour 2023 ', '2023-06-06 00:00:00', 999, 'event_detail-2023-03-25-9042.jpg', 'Don’t miss out on this glorious opportunity to witness an unmatched concert experience with the captivating entertainer Guru Randhawa presented by Magic Moments and8 PM premium black.', '16', 'Age limit: 5+\nNo Mask, No Entry, even with a valid ticket.\nTemperature & sanitization checks will be done at the gate.\nNo bag packs, handbags and other baggage allowed inside the venue. \nNo Mask, No Entry, even with a valid ticket.\nTemperature & sanitization checks will be done at the gate.\nNo bag packs, handbags and other baggage allowed inside the venue. ', '2023-03-25 00:00:00', 1, 200),
(4, '6', 'event_list-2023-03-25-4443.jpg', 'Backstreet Boys: DNA World Tour', '2023-03-27 00:00:00', 4000, 'event_detail-2023-03-25-3982.jpg', 'Backstreet’s back, alright! \n\nThe pitch-perfect harmonies. The matching outfits and dance moves. The dreamy personas. When they set foot in an arena, the Backstreet Boys are absolutely in their element, belting out a massive catalog of original hits to an outsized audience that screams back every word. Get your group together for the biggest selling Boy Band of all time!', '', 'AJ McLean, Brian Littrell, Nick Carter, Howie Dorough and Kevin Richardson have been enthralling fans for more than 25 years and are expanding their massive world tour to India. Their DNA World Tour c', '2023-03-25 00:00:00', 1, 200),
(5, '6', 'event_list-2023-03-25-3016.jpg', 'RAFTAAR X KR$NA LIVE IN ARENA', '2023-06-04 00:00:00', 749, 'event_detail-2023-03-25-1737.jpg', 'RAFTAAR X KR$NA LIVE IN ARENA\n\nDilliwalon! Mark your calendars! We’re kicking off Raftaar’s much awaited ‘Intensity India Tour’ on 9th April 2023, starting with your city!', '17,18', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 30 ', '2023-03-25 00:00:00', 1, 200),
(6, '6', 'event_list-2023-03-25-3835.jpg', 'Basti Ka Hasti - MC- Stan India Tour 23', '2023-05-07 00:00:00', 799, 'event_detail-2023-03-25-6525.jpg', 'Basti Ka Hasti fame, After winning the Big Boss 2023, MC Stan is coming to your city! He will be performing across 10 cities just for his fans! Come watch him live!', '', 'Owing to the recent conditions surrounding the COVID – 19 pandemic, as a pre-condition to gaining access to the venue (events and theatres) you are required to be fully vaccinated and may be required ', '2023-03-25 00:00:00', 1, 200),
(7, '6', 'event_list-2023-03-25-4669.jpg', 'Sagar Wali Qawwali Ft. Sagar Bhatia', '2023-03-30 00:00:00', 599, 'event_detail-2023-03-25-4442.jpg', 'Soak in the silky, honeydew magic of Sagar Bhatia with his exclusive performance \"Sagar Wali Qawwali\" for an unforgettable Sufi evening.', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 30 ', '2023-03-25 00:00:00', 1, 200),
(8, '6', 'event_list-2023-03-25-3451.jpg', 'Sukoon Sufi Nights ft. Bismil', '2023-03-08 00:00:00', 899, 'event_detail-2023-03-25-1792.jpg', 'It`s 1 year of Sukoon. Noida`s Best Sufi Nights and we can`t wait to celebrate it with you and Sufi Legend Bismil Ki Mehfil as they set the evening on fire. Get ready for a sufiyana shaam with Noida`s Best Sufi Nights - Sukoon at the Ministry Of Sound on 19th April 2023 as the Promising thrilling music, groovy performances, and Sufiyana ambience.', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 30 ', '2023-03-25 00:00:00', 1, 200),
(9, '6', 'event_list-2023-03-25-9009.jpg', 'Sukoon Sufi Nights ft. Nooran Sisters', '2023-06-04 00:00:00', 1000, 'event_detail-2023-03-25-8139.jpg', 'The voices of Patakha Guddi- the Nooran Sisters are coming to recharge Ministry Of Sound, Noida`s SUKOON Sufi Night with their powerful soprano. Get ready to experience a high on energy Sufi performance as the sisters branch you towards unforgettable Sufi tracks.', '5', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 30 ', '2023-03-25 00:00:00', 1, 200),
(10, '6', 'event_list-2023-03-25-3884.jpg', 'Sham e Sufi - Live Sufi Band, Spiritual DT Gurgaon', '2023-05-08 00:00:00', 999, 'event_detail-2023-03-25-1827.jpg', 'Afro Nights located at Golf Course Road, Sector 56 (Doubletree by Hilton Gurgaon) is all about - Party Vibe, Good Food, Nice Cocktails, Friends Get-together and Lot more', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 30 ', '2023-03-25 00:00:00', 1, 200),
(11, '8', 'event_list-2023-03-25-4097.jpg', 'On the ways of seeing theatre', '2023-04-03 00:00:00', 250, 'event_detail-2023-03-25-6771.jpg', 'A session with a focus on the manner in which audiences might receive theatre (in its many forms) and write about it.', '', 'Age Limit: 14+\nTickets once booked cannot be exchanged or refunded\nAn Internet handling fee per ticket may be levied. Please check the total amount before payment\nWe recommend that you arrive at-least', '2023-03-25 00:00:00', 1, 200),
(12, '8', 'event_list-2023-03-25-2366.jpg', 'On Movements and Expressions Savita Rani', '2023-03-12 00:00:00', 250, 'event_detail-2023-03-25-9174.jpg', 'Movements and Expressions are essential tools for actors to create engaging, dynamic, and emotionally resonant performances that captivate audiences and bring the story to life on stage. This workshop with performer, researcher, writer, director, and acting trainer Savita Rani will be of 3 hours and the format will be mixed, practice and conversational.', '', 'Age Limit: 14+\nTickets once booked cannot be exchanged or refunded\nAn Internet handling fee per ticket may be levied. Please check the total amount before payment\nWe recommend that you arrive at-least', '2023-03-25 00:00:00', 1, 200),
(13, '8', 'event_list-2023-03-25-9134.jpg', 'Brushstrokes and Giggles', '2023-04-30 00:00:00', 500, 'event_detail-2023-03-25-3443.jpg', 'Join us for an afternoon of good food and good vibes, and paint your worries away! Learn new painting techniques under personal guidance, and paint your own masterpiece. So put on your creative caps and get ready to be a maestro for the day!', '', '* starting with the basic fundamentals of using acrylic paints \n\n* Various techniques that you can do using them \n\n* Personal assistance throughout the workshop \n\n* Live demo of the painting before yo', '2023-03-25 00:00:00', 1, 200),
(14, '7', 'event_list-2023-03-25-1383.jpg', 'Prasad from Somnath Ji', '2023-03-07 00:00:00', 300, 'event_detail-2023-03-25-4473.jpg', 'The Somnath temple is located in Prabhas Patan, Veraval in Gujarat, India. It is also called Somanātha temple or Deo Patan and is believed to be the first among the twelve Jyotirlinga shrines of Shiva. This Temple is considered one of the most sacred of all Shrines and an important pilgrimage destination.', '', 'Age Limit: Open to all\nInternet handling fee per ticket may be levied. Please check your total amount before payment.\nTickets once booked cannot be exchanged or refunded.', '2023-03-25 00:00:00', 1, 200),
(15, '7', 'event_list-2023-03-25-2250.jpg', 'Prasad from Vrindavan', '2023-05-10 00:00:00', 899, 'event_detail-2023-03-25-5554.jpg', 'Vrindavan Banke Bihari Krishna Temple is amongst the most revered and popular temples of Lord Krishna in the world. One can feel the divine spiritual vibrations and feel the place resonates where Bhagwan Krishna spent his childhood.', '', 'Age Limit: Open to all\nInternet handling fee per ticket may be levied. Please check your total amount before payment.\nTickets once booked cannot be exchanged or refunded.', '2023-03-25 00:00:00', 1, 200),
(16, '7', 'event_list-2023-03-25-8246.jpg', 'Online Prasad From Vindhyachal', '2023-03-01 00:00:00', 599, 'event_detail-2023-03-25-5565.jpg', 'Mata Vindhyavasini Vindhyachal Mai is the presiding deity of Vindhyachal Dham, Mirzapur. Also called Rakshak Devi - Kshetra Devi in Uttar Pradesh as well as Bihar.  Lacs of Hindus, visit Vindhyachal Mandir for the blessings of Maa Vindhyavasini. Maa Vindhyavasini is Mahishasur Mardini (Slayer of demon), as described in Durga Saptashati.', '', 'Age Limit: Open to all\nInternet handling fee per ticket may be levied. Please check your total amount before payment.\nTickets once booked cannot be exchanged or refunded.', '2023-03-25 00:00:00', 1, 200),
(17, '5', 'event_list-2023-03-25-4202.jpg', 'Roblox Editor : Game Creation', '2023-06-15 00:00:00', 999, 'event_detail-2023-03-25-2547.jpg', 'In this introductory camp, campers will go beyond playing games, and get a behind-the-scenes experience, learning the art and science of game development. With hands-on projects, campers will be exposed to many digital tools used today for game creation such as Roblox Editor. The game created throughout the camp will start small and grow exponentially along with skills learned! By the end of the camp, campers will really see that making games is more fun than playing them!', '15', 'The Child Will Gain:\n\nLogical Skills\n\nCreativity\n\nProblem Solving Skills\n\nCritical Thinking', '2023-03-25 00:00:00', 1, 200),
(18, '5', 'event_list-2023-03-25-2298.jpg', 'A fun summer Camp - Sunny side up', '2023-03-03 00:00:00', 799, 'event_detail-2023-03-25-8294.jpg', 'Presenting Sunny Side Up – an exciting age-appropriate fun summer camp program, designed to spark a love of science, art, music, and dance in young minds through hands-on exploration, adventure, and discovery. ', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 30 ', '2023-03-25 00:00:00', 1, 200),
(19, '5', 'event_list-2023-03-25-4513.jpg', 'A fun summer camp - Sunny side up ', '2023-03-31 00:00:00', 600, 'event_detail-2023-03-25-1693.jpg', 'Presenting Sunny Side Up – an exciting age-appropriate fun summer camp program, designed to spark a love of science, art, music, and dance in young minds through hands-on exploration, adventure, and discovery. ', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 30 ', '2023-03-25 00:00:00', 1, 200),
(20, '4', 'event_list-2023-03-25-7722.jpg', 'Magic & Cardistry Convention - CardmaCon 2023', '2023-05-01 00:00:00', 199, 'event_detail-2023-03-25-9862.jpg', 'WHAT IS CARDMACON ?\n\nEXPERIENCE THE MAGIC - FEEL THE WONDER !\n\nCardMaCon is India`s first and only exclusive experience dedicated to celebrating a collective love of cardistry, magic, cards and more happening at the luxurious Roseate House Delhi. Come explore the secrets of this magical art and meet the magicians and cardists of India, and fall in love with the most portable hobby on the planet.', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 30 ', '2023-03-25 00:00:00', 1, 200),
(21, '4', 'event_list-2023-03-25-9963.jpg', 'Suta Bazaar', '2023-03-07 00:00:00', 199, 'event_detail-2023-03-25-1347.jpg', 'Suta Bazaar is a travelling exhibition that brings the very best of Suta to various cities, with a handpicked curation of our choicest products, across categories. We also aim to create an intimate shopping experience for our attendees and give them the opportunity to interact with the team in an informal setting. The conversations and memories we build through each edition of Suta Bazaar makes this exercise truly gratifying.', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 30 ', '2023-03-25 00:00:00', 1, 200),
(22, '4', 'event_list-2023-03-25-7025.jpg', 'VIRAASAT', '2023-03-08 00:00:00', 199, 'event_detail-2023-03-25-5217.jpg', 'A solo debut of the venerated art form of Tanjore paintings by artist Seema Sethi. Marrying the traditional with the contemporary, she uses gold foils, semi-precious stones and muck work to embellish not just Gods and Goddesses, but also novel concepts.', '', '1. This is an open event\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. Unlawful resale (or attempted unlawful resale) of a ticket would lead t', '2023-03-25 00:00:00', 1, 200),
(23, '1', 'event_list-2023-03-25-4180.jpg', 'So Rude of Me by Swati Sachdeva', '2023-06-01 00:00:00', 499, 'event_detail-2023-03-25-2917.jpg', 'Swati is funny and biting in her humour. Watch her talk about her life choices, stupid decision making and people she comes across with, the lucky ones who made it to her jokes list!', '4', 'Age Limit: 16+ (subject to change as per the show content). \n\nChildren are not allowed.\n\nPlease carry your valid student id proof to avail student ticket discount.\n\nNo refunds on the purchased ticket are possible, even in case of any rescheduling. \n\nThe Venue Auro Kitchen and Bar is not wheelchair friendly\n\nSeating is on a first-come-first-serve basis. Venue will decide seating preference.\n\nTickets are not available at Venue you can only buy through Bookmyshow.\n\nWe recommend that you arrive at least 30 minutes prior to the venue to pick up your physical tickets. \n\nThe door will be closed 20 min after show time. latecomers will not be allowed once the show starts.', '2023-03-25 00:00:00', 1, 200),
(24, '1', 'event_list-2023-03-25-1051.jpg', 'Blue Sky Comedy Festival', '2023-04-05 00:00:00', 499, 'event_detail-2023-03-25-4055.jpg', 'A warm April evening, a refreshing cold one in hand while laughing at punchlines from your favourite comedians.. sounds like an epic weekend, right? Look no further, Delhi’s first open air comedy festival is coming your way on April 1st-2nd with this and much more.', '', 'Age group: 16+\nGates will open at 3 pm.\nA physical ticket/wristbands will be issued at the venue box office on the day of the event in exchange for your e-ticket purchase confirmation. Please carry va', '2023-03-25 00:00:00', 1, 200),
(25, '1', 'event_list-2023-03-25-9520.jpg', 'Lakshay Chaudhary Live : A Standup Comedy Show', '2023-05-09 00:00:00', 499, 'event_detail-2023-03-25-9130.jpg', 'Lakshay Choudhary, a popular Indian YouTuber known for his roast videos, is all set to embark on a tour of stand-up comedy and meet-and-greet sessions across India. In his live shows, Lakshay will showcase his talent for observational humor, relatable stories, and witty jokes that touch on everything from everyday life to social issues. He will also share personal anecdotes about incidents in his life, making the show even more engaging for his fans. Along with his comedy performances, Lakshay w', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 30 ', '2023-03-25 00:00:00', 1, 200),
(26, '1', 'event_list-2023-03-25-8652.jpg', 'Gaurav Kapoor Live', '2023-05-27 00:00:00', 399, 'event_detail-2023-03-25-7255.jpg', 'Gaurav Kapoor, the funny one from Delhi is back in action with his first ever online comedy show. His razor-sharp wit and candid humour lead him to win almost every open-mic he has ever participated in. Gaurav is a regular featured act at comedy clubs across the country and has performed on the biggest of stages including opening for Vir Das and Russell Brand on his India tour. Since then, he has done numerous live shows, released videos on YouTube and have also released a stand up special, Haha', '10', 'First come first serve basis seating\nTickets once booked cannot be exchanged or refunded\nAn Internet handling fee per ticket may be levied. Please check the total amount before payment\nWe recommend th', '2023-03-25 00:00:00', 1, 200),
(27, '1', 'event_list-2023-03-25-1300.jpg', 'Jo Bolta Hai Wohi Hota Hai feat Harsh Gujral', '2023-05-23 00:00:00', 799, 'event_detail-2023-03-25-3861.jpg', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', '3', 'This is to inform everyone that if you are attending the show, you are at risk. We are at risk too in organizing the shows. So, overall we are together in this. We will try our best in taking all the ', '2023-03-25 00:00:00', 1, 200),
(28, '1', 'event_list-2023-03-25-4828.jpg', 'Kal Ki Chinta Nahi Karta ft.Ravi Gupta', '2023-06-03 00:00:00', 399, 'event_detail-2023-03-25-4298.jpg', 'Forget your Kal ki Chinta and Join us in this super funny Show by Ravi Gupta. Kal Ki Chinta Nahi Karta is a new stand-up special by Ravi Gupta.', '7', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 30 ', '2023-03-25 00:00:00', 1, 200),
(29, '1', 'event_list-2023-03-25-2458.jpg', 'Gaurav Kapoor Live', '2023-05-22 00:00:00', 399, 'event_detail-2023-03-25-9110.jpg', 'He is so hilarious that you’ll think he’s delirious! ', '10', '1.  Age Limit: 16+ (subject to change as per the show content). \n2.  Children are not allowed.\n3.  No refunds on the purchased ticket are possible, even in case of any rescheduling. \n4.  Seating is on', '2023-03-25 00:00:00', 1, 200),
(30, '1', 'event_list-2023-03-25-7355.jpg', 'Women Slay Saturday in Delhi', '2023-03-02 00:00:00', 599, 'event_detail-2023-03-25-1860.jpg', 'Women Slay Saturday is a new show that will leave you on the floor laughing! Men need to pay the price to watch the best in comedy! A show that has everything from sex, heartbreak, feeling fat, PMS, domestic violence, being poor, hating rich people, brother and sister fights, growing old, being young all this and so much more.', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 30 ', '2023-03-25 00:00:00', 1, 200),
(31, '3', 'event_list-2023-03-26-7051.jpg', 'unluclass', '2023-04-01 00:00:00', 699, 'event_detail-2023-03-26-5101.jpg', 'Unlu.io provides a range of services including\n\n1. Personalised video messages from celebrities for different occasions like birthdays, anniversaries etc.\n\n2. Easy and cost-effective celebrity brand endorsements\n\n3. Online courses by different industry veterans and celebrities who share their experiences and knowledge with the audience online.', '', 'Online courses by different industry veterans and celebrities who share their experiences and knowledge with the audience online.', '2023-03-26 00:00:00', 1, 200),
(32, '2', 'event_list-2023-03-26-2474.jpg', 'MAHINDRA EXCELLENCE IN THEATRE AWARDS', '2023-04-05 00:00:00', 499, 'event_detail-2023-03-26-7078.jpg', 'The Awards Night of the 18th edition of the Mahindra Excellence in Theatre Awards promises to be a glittering event, with a grand red carpet opening and esteemed personalities from the theatre fraternity in attendance. Alongside stellar dance and music performances, the Awards Night is dedicated to rewarding the plays of the 18th edition of META in a diverse number of categories. This incredible show will be hosted by the acclaimed actor Jim Sarbh.', '', '1.  Age Limit: 14+\n2.  Tickets once booked cannot be exchanged or refunded\n3.  An Internet handling fee per ticket may be levied. Please check the total amount before payment\n4.  We recommend that you', '2023-03-26 00:00:00', 1, 200),
(33, '9', 'event_list-2023-03-26-1357.jpg', 'Guinness World Records - Watermelon Target', '2023-04-09 00:00:00', 499, 'event_detail-2023-03-26-3699.jpg', 'The most playing cards thrown into watermelons in one minute is 17 and was achieved by Bai Dengchun (China) on the set of CCTV - Guinness World Records Special in Jiangyin, Jiangsu, China on 14 January 2015.\n\nNow witness as India`s very own 2 time Guinness World Records holder Aditya Kodmur attempts to break this record live at the event along with a spectacular performance involving the audience as he teaches you his tricks on how to throw cards like a ninja.', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 30 ', '2023-03-26 00:00:00', 1, 200),
(34, '9', 'event_list-2023-03-26-9053.jpg', 'Breaking Guinness World Records - Human Targe', '2023-04-08 00:00:00', 499, 'event_detail-2023-03-26-3227.jpg', 'The most playing cards thrown around a human target in one minute is 56, and was achieved by Rick Smith, Jr. (USA), in Irvine, California, USA, on 18 October 2022.', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 30 ', '2023-03-26 00:00:00', 1, 200),
(35, '10', 'event_list-2023-03-26-4690.jpg', 'MS in US: Online Networking Event 2023', '2023-03-26 00:00:00', 199, 'event_detail-2023-03-26-8804.jpg', 'Are you ready to join the ranks of students at the top US universities this fall? GyanDhan is proud to present our Virtual Networking Event, exclusively for students who have received or are expecting admissions to the top universities in the US. This is your chance to meet and connect with fellow students who share the same goals and excitement as you. Join us for an evening of speed networking and valuable connections, right from the comfort of your own home.', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. Recording or uploading of this stream is ', '2023-03-26 00:00:00', 1, 200),
(36, '10', 'event_list-2023-03-26-5588.jpg', 'Festival Music Concert / Varun Krishna', '2023-04-26 00:00:00', 20, 'event_detail-2023-03-26-2666.jpg', 'Varun Krishna is an Indian Musician / actor. He was born in Pondicherry on 31st October 2004. He was started his music career in the year 2020. He was officially joined VKM Records. He was active in his social media accounts.His upcoming music is One Side Kaadhal. He also author of the gang leader the city of crime. And received many Awards', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. Recording or uploading of this stream is ', '2023-03-26 00:00:00', 1, 200),
(37, '6', 'event_list-2023-03-26-7704.jpg', 'Music Therapy for Calm and Deep Sleep', '2023-04-14 00:00:00', 399, 'event_detail-2023-03-26-1178.jpg', 'Does Music help us Sleep? Music is a powerful art form.While it may get more credit for inspiring people to dance, it also offers a simple way to improve sleep hygiene, improving your ability to fall asleep quickly and feel more rested.Music can aid sleep by helping you feel relaxed and at ease. With streaming apps and portable speakers, it’s now easier than ever to take advantage of the power of music wherever you go.Given music’s accessibility and potential sleep benefits, it might be a good t', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you login at-least 10 m', '2023-03-26 00:00:00', 1, 200),
(38, '10', 'event_list-2023-03-26-4017.jpg', 'Fitness Bootcamp with Niraj Kumar Borah', '2023-03-27 00:00:00', 1999, 'event_detail-2023-03-26-3486.jpg', 'Are you looking to take your fitness and athleticism to the next level? Look no further than the exclusive 1-ON-1 private sessions with Niraj Kumar Borah, the ADCC Singapore Open Champion and National Champion. This is an incredible opportunity to learn from one of the best in the business and gain insights and techniques that can propel you towards success.\n\nNiraj Kumar Borah is an experienced coach who knows how to tailor his training to meet the specific needs of his clients. Whether you are ', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you login at-least 10 m', '2023-03-26 00:00:00', 1, 200),
(39, '10', 'event_list-2023-03-26-8061.jpg', 'Building Product Management Skills', '2023-04-09 00:00:00', 499, 'event_detail-2023-03-26-3412.jpg', 'In this expert talk, decode the essential leadership skills required for product managers to get to the next level. The session speaker will delve into the different aspects of leadership in product management and provide insights into how to develop them whilst covering topics like communication, decision-making, solving conflict, stakeholder management and more.', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. Recording or uploading of this stream is ', '2023-03-26 00:00:00', 1, 200),
(40, '10', 'event_list-2023-03-26-8607.jpg', 'Relaxing Music Therapy for Stressful Work Day', '2023-03-27 00:00:00', 249, 'event_detail-2023-03-26-2771.jpg', 'Wellness at work best describes with these 3 factors:\n\n1.Balance - Striking the right balance to your workload helps you to perform better\n\n2.Creativity - Allowing space for all your creative ideas to develop helps you to be more pro active\n\n3.Rest - Taking breaks and time to rest and relax is crucial for your well being at work.', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. Recording or uploading of this stream is ', '2023-03-26 00:00:00', 1, 200),
(41, '10', 'event_list-2023-03-26-6871.jpg', 'Create Positive Thoughts and Develop Inner Power', '2023-03-26 00:00:00', 249, 'event_detail-2023-03-26-1909.jpg', 'Eliminate negative aspects like Stage fear,Anxiety, Tension and many other phobias by listening to this excellent guided voice meditation and develop positive thinking and self-confidence.Relax yourself in your couch or comfort place and listen to this 30 minute guided voice meditation for creating positive thoughts and inner peace.Heal your heart & emotional wounds with positive energy visualization,and positive affirmations.This healing and guided meditation audio will help you cultivate grati', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. Recording or uploading of this stream is ', '2023-03-26 00:00:00', 1, 200),
(42, '1', 'event_list-2023-03-26-5076.jpg', 'Late Night Noida Live Stand-up Comedy', '2023-03-26 00:00:00', 199, 'event_detail-2023-03-26-1505.jpg', 'If you are getting bored and want some laughter in your lives, then here is the time. Come and enjoy some of the local comics doing their jokes in late night. The show is a laughter riot. All you need to do is leave your stress behind and come in fun frolic manner, because life is too short to remove USB safely. Come & have fun with us.', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 10 ', '2023-03-26 00:00:00', 1, 200),
(43, '1', 'event_list-2023-03-26-3693.jpg', 'The Late Night Comedy Show', '2023-03-26 00:00:00', 199, 'event_detail-2023-03-26-6363.jpg', 'Guftagu Cafe Late Night Comedy Show is One Of The Most Entertaining Show of The Town, Where Best of The Best Comics Comes And Try Their New Content Everyday, Live Stand-up Comedy is One of The Best Art Form of Entertainment and Guftagu Cafe Late Night Comedy Show is One of The Best Show For All The Stand-up Comedy Lovers, Where Ravi Gupta, Jeeveshu Ahluwalia, Vijay Yadav, Pratyush Chaubey, Inder Sahani, Maheep Singh, Mohit Dudeja, Saurabh Pandey, RJ Vidit, Rupali Tyagi, Vikas Kush Sharma, Shreya', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 30 ', '2023-03-26 00:00:00', 1, 200),
(44, '1', 'event_list-2023-03-27-7092.jpg', 'GENUINELY - StandUp Comedy Special Ft Appurv Gupta', '2023-06-22 00:00:00', 499, 'event_detail-2023-03-27-7928.jpg', 'After a wild run with his special Kaafi Wild Hai and Best of GuptaJi, your very own GuptaJi is back with his brand new special- `GENUINELY`!\n\nThis time, he will take you on a hilarious ride through his own journey. Changes that took place since his very first video and more.\n\nGet ready to LOL at his attempt at doing the impossible- Understanding the opposite Gender. Re-live your Friendships & Hostel Days. And find out what weird things this pandemic brought along. GuptaJi has packed a trolley ca', '6', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 30 ', '2023-03-27 00:00:00', 1, 200),
(45, '1', 'event_list-2023-03-27-5875.jpg', 'Pannu Yaar! Standup Comedy Show by Gurleen Pannu', '2023-05-26 00:00:00', 499, 'event_detail-2023-03-27-8208.jpg', '`Pannu Yaar` is a stand-up comedy show, which will be your one-way ticket into the Pannu-Verse.\n\nHer friendly attitude, observational humour, and personal anecdotes will get you in a fit of breathless laughter. Life is full of stories, and Pannu picks the best, presenting them in a manner which reeks of humor and hilarity. Being the centre of attention was always her favourite hobby, and her stories bloom from analysing and observing her surroundings. One may never know, kya pata agla anecdote a', '14', 'Age Limit: 16+ (subject to change as per the show content).\n\nChildren are not allowed.\n\nNo refunds on the purchased ticket are possible, even in case of any rescheduling.\n\nVenue Auro Kitchen & Bar is ', '2023-03-27 00:00:00', 1, 200),
(46, '1', 'event_list-2023-03-27-6735.jpg', 'Madhur Virli Live - A Stand-Up Comedy Show', '2023-04-02 00:00:00', 299, 'event_detail-2023-03-27-3283.jpg', 'Madhur Virli, a Delhi based stand-up comic is touring with his solo. He talks about his personal tragedies which turned out to be comedy for him. You can check his YouTube videos for reference. Earphones are recommended.', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 30 ', '2023-03-27 00:00:00', 1, 200),
(47, '1', 'event_list-2023-03-27-6424.jpg', 'Stress Free Zone - Laugh Out Loud', '2023-05-22 00:00:00', 99, 'event_detail-2023-03-27-7104.jpg', 'Lakshay Choudhary, a popular Indian YouTuber known for his roast videos, is all set to embark on a tour of stand-up comedy and meet-and-greet sessions across India. In his live shows, Lakshay will showcase his talent for observational humor, relatable stories, and witty jokes that touch on everything from everyday life to social issues. He will also share personal anecdotes about incidents in his life, making the show even more engaging for his fans', '11,12,13', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 10 ', '2023-03-27 00:00:00', 1, 200),
(48, '5', 'event_list-2023-03-27-3215.jpg', 'Teachings of Buddha', '2023-04-30 00:00:00', 250, 'event_detail-2023-03-27-7514.jpg', 'Buddha born as Siddhartha Gautama, was curious about life. He grew up to be a wonderful teacher who helped people learn how to be happier within themselves and kinder to one another. The Buddha told stories about his many lifetimes before he was born as the Buddha. These are called Jataka Tales, or “birth stories.”\n\nJoin is as we take you through these interesting stories. Stories designed for children, but can be enjoyed by anyone who likes listening to a good story!', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. Recording or uploading of this stream is ', '2023-03-27 00:00:00', 1, 200),
(49, '5', 'event_list-2023-03-27-5267.jpg', 'Magic Beans - The Wonderful World of Jolly Phonics', '2023-05-30 00:00:00', 350, 'event_detail-2023-03-27-4956.jpg', 'Jolly Phonics is a comprehensive program. It lays a strong foundation for reading and writing as your child learns the alphabet through a holistic mix of jolly Phonics and conventional teaching. The 26 sessions of the program cover: - Introduction to uppercase and lowercase letters - Introduction to 26 letter sounds (one letter per session) - Letter-specific story - Letter Formation - Letter Vocabulary - Song - Literacy Games - Art and Craft - Practice Sheets\n\n \n\nAge : 3 years to 5 years  \n\nClas', '', 'Age Limit: 3 - 5 years\n\nRecording or uploading of this stream is not permitted.\n\nThe time and date of the show may vary due to internet connectivity issues. In this case, the artist will share the rev', '2023-03-27 00:00:00', 1, 200),
(50, '9', 'event_list-2023-03-27-6861.jpg', 'Learn Python', '2023-05-29 00:00:00', 899, 'event_detail-2023-03-27-9486.jpg', 'Python has become one of the most popular computer programming languages amongst the programmers because of its various advantages.\n\nEnrol your children for this 2 hour workshop today, and help them learn this growing programming language.\n\nAge: 11 to 16 years\n\nDigital Certificates will be provided to all the participants at the end of the workshop.', '15', '1. Only for participants of age between 10 and 18 years. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before', '2023-03-27 00:00:00', 1, 200),
(52, '14', 'event_list-2023-04-13-9741.jpg', 'My Dance', '2023-04-15 00:00:00', 1000, 'event_detail-2023-04-13-7439.jpg', 'Madhur Virli, a Delhi based stand-up comic is touring with his solo. He talks about his personal tragedies which turned out to be comedy for him. You can check his YouTube videos for reference. Earphones are recommended.', '', '1. Tickets once booked cannot be exchanged or refunded 2. An Internet handling fee per ticket may be levied. Please check the total amount before payment 3. We recommend that you arrive at-least 30', '2023-04-13 00:00:00', 1, 200),
(65, '6', 'event_list-2023-05-18-7794.jpg', 'Sunburn Goa 2023', '2023-12-31 00:00:00', 999, 'event_detail-2023-05-18-4393.jpg', 'Asia’s biggest music festival – Sunburn Goa is back!\n\nWelcome to the Enchanted Forest. Get ready to go deep into the jungle with electrifying sounds and mesmerising artists from around the world. The journey has just begun. Coming in bigger than ever before this 28, 29, 30 & 31 December with 4 days of absolute epicness,\n\nit’s time to Live Love Dance, again!', '', 'Age limit: 18+\nNo bag packs, handbags, and other baggage allowed inside the venue. There is NO storage facility available at the event. \nNo refund on a purchased ticket is possible, even in case of any rescheduling.\nThe event is subject to government permissions. In case the event is canceled, a full refund shall be issued to all patrons.\nUnlawful resale (or attempted unlawful resale) of a ticket would lead to seizure or cancellation of that ticket without refund or other compensation.\nAlcohol will be served to guests above the legal drinking age (LDA) and on the display of valid age proof. ', '2023-05-18 00:00:00', 1, 200),
(66, '8', 'event_list-2023-05-18-1934.jpg', 'Claydate! Workshop by Bizyheart Clay Studio', '2023-05-15 00:00:00', 1500, 'event_detail-2023-05-18-9623.jpg', 'It’s a claydate! ❤️ Looking for a fun and delicious way to unleash your creativity and spend some quality time with your friends or loved ones? Bizyheart and The Dessart Gallery bring you a clay workshop on Sunday, May 28, 2023, with a sweet touch! 🎨👀🖌️ Whether you`re a beginner or an experienced crafter, you`ll love learning how to make cute clay art. With expert guidance from Bizyheart, you`ll be amazed at what you can create. A free sundae is included in the price!', '', '1. Tickets once booked cannot be exchanged or refunded\n\n2. An Internet handling fee per ticket may be levied. Please check the total amount before payment\n\n3. We recommend that you arrive at-least 30 minutes prior at the venue for a seamless entry \n\n4. It is mandatory to wear masks at all times and follow social distancing norms\n\n5. Please do not purchase tickets if you feel sick', '2023-05-18 00:00:00', 1, 200);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` bigint(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `createddate` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `email`, `phone`, `city`, `state`, `pincode`, `password`, `createddate`, `status`) VALUES
(1, 'Anjali', 'anjali@gmail.com', 8130764614, 'ghaziabad', 'U.P', 201102, 'anjali@123', '2023-04-21 00:00:00', 1),
(2, 'Neha', 'neha@gmail.com', 7678637868, 'GZB', 'UP', 201102, 'neha@123', '2023-05-02 00:00:00', 1),
(3, 'Ananya', 'ananya@gmail.com', 7623786478, 'GZB', 'UP', 201102, 'ananya@123', '2023-05-02 00:00:00', 1),
(4, 'aman', 'aman@gmail.com', 8997976666, 'GZB', 'UP', 201102, 'aman', '2023-05-21 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `booking_table`
--
ALTER TABLE `booking_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
