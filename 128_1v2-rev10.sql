-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 07:57 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `128.1v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(300) COLLATE utf8mb4_bin DEFAULT NULL,
  `user_password` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL,
  `full_name` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `user_password`, `full_name`) VALUES
(1, 'sheila', '0eb60b63b5a03861c506b18860bf6463', 'Sheila Magboo');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `middle_initial` varchar(2) COLLATE utf8mb4_bin DEFAULT NULL,
  `sex` enum('M','F') COLLATE utf8mb4_bin DEFAULT NULL,
  `current_address` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL,
  `place_of_birth` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `linkedin_profile` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `educational_attainment` enum('College','Vocational','Highschool','Elementary') COLLATE utf8mb4_bin DEFAULT NULL,
  `civil_status` enum('S','M') COLLATE utf8mb4_bin DEFAULT NULL,
  `nationality` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `SSN` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `target_position` int(10) UNSIGNED NOT NULL,
  `birth_certificate_id` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `user_password` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL,
  `skills_csv` varchar(6000) COLLATE utf8mb4_bin DEFAULT NULL,
  `job_history_csv` mediumtext COLLATE utf8mb4_bin,
  `approved` tinyint(1) DEFAULT '0',
  `do_not_show` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `first_name`, `last_name`, `middle_initial`, `sex`, `current_address`, `place_of_birth`, `birthdate`, `phone_number`, `email`, `linkedin_profile`, `educational_attainment`, `civil_status`, `nationality`, `SSN`, `target_position`, `birth_certificate_id`, `user_password`, `skills_csv`, `job_history_csv`, `approved`, `do_not_show`) VALUES
(349, 'Maxima', 'Hipolito', 'M', 'M', 'Taguig', 'Digos', '0000-00-00', '9075551275', 'iujyfjcyfhtgf@gmail.com', 'maximahipolito', 'College', '', 'Filipino', '771178127', 1, '43869003505', '5898r22zkat3', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(350, 'Princess', 'Belmonte', 'O', 'M', 'Quezon City', 'Zamboanga', '0000-00-00', '9325554003', 'vyrtjhghb@gmail.com', 'princessbelmonte', 'Vocational', '', 'Filipino', '325727707', 1, '50657067963', 'twssmgw3omvs', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(351, 'Boi', 'Boboi', 'M', 'M', 'San Juan', 'Kuala Lumpur', '0000-00-00', '9285555594', 'asd@yahoo.com', 'boiboboi', 'Vocational', '', 'Malaysian', '210198354', 1, '58661756048', 'vjnz65sqm1jz', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(352, 'Yaya', 'Yaha', 'Y', 'M', 'Valenzuela', 'George Town', '0000-00-00', '9285555185', 'rtwfsdaf@yahoo.com', 'yayayaha', 'College', '', 'Malaysian', '311118647', 1, '49420955738', '8dlbmz7bepl1', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(353, 'Gabi', 'Makahiya', 'G', 'M', 'Quezon City', 'Quezon City', '0000-00-00', '9285557434', 'etyrhtdf@gmail.com', 'gabimakahiya', 'College', '', 'Filipino', '6105764', 1, '539303920', 'ftcyg31wxtat', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(354, 'Joy ', 'Lobo', 'A', 'M', 'Paranaque', 'Delhi', '0000-00-00', '9335552370', 'erfthjy@yahoo.com', 'joylobo', 'College', '', 'India', '313728307', 1, '79945361438', 'y47fklann11g', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(355, 'Sorwin', 'Chanong', 'Y', 'M', 'Taguig', 'Beijing', '0000-00-00', '9295550690', 'tujyhmt@yahoo.com', 'sorwinchanong', 'College', '', 'Chinese', '16811645', 1, '53572395967', 'q1rms7m10pgs', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(356, 'Maria', 'Huse', 'U', 'M', 'Paranaque', 'Puerto Princesa', '0000-00-00', '9295551254', 'sfdhf@yahoo.com', 'mariahuse', 'College', '', 'Filipino', '201412968', 1, '10011351936', '8xzy70bpq71t', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(357, 'Diego', 'Torillo', 'K', 'M', 'Paranaque', 'Cebu', '0000-00-00', '2805553820', 'oiuth@yahoo.com', 'diegotorillo', 'Vocational', '', 'Filipino', '443413994', 1, '82451936811', 'vjrw9vqqnon4', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(358, 'Cortez', 'Hermano', 'H', 'M', 'Valenzuela', 'Davao', '0000-00-00', '9325550049', 'fdszv@gmail.com', 'cortezhermano', 'College', '', 'Filipino', '896196776', 1, '75629034491', 'eup9qobtund4', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(359, 'Maria', 'Magallanes', 'W', 'M', 'Quezon City', 'Dumaguete', '0000-00-00', '2805552837', 'sadgf@yahoo.com', 'mariamagallanes', 'College', '', 'Filipino', '498628188', 1, '49457248395', '9v6fmxk3g844', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(360, 'Dio', 'Diogenes', 'R', 'M', 'Manila', 'Angeles', '0000-00-00', '9335559957', 'byrtdrtdb@gmail.com', 'diodiogenes', 'Vocational', '', 'Filipino', '229418803', 1, '10612263285', 'vel78k2j17ux', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(361, 'Mara', 'Makiling', 'C', 'M', 'Manila', 'Subic', '0000-00-00', '9325554755', 'stpjidksm@yahoo.com', 'maramakiling', '', '', 'Filipino', '649826518', 1, '32068162544', 'u5a4l63tnp71', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(362, 'Rick', 'Astley', 'B', 'M', 'Muntinlupa', 'Chicago', '0000-00-00', '9285550604', 'wrged@gmail.com', 'rickastley', 'College', '', 'American', '591422880', 1, '20812454067', 'vmmy9j20qxab', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(363, 'Rodrigo', 'Gonzalez', 'M', 'M', 'Paranaque', 'Tarlac', '0000-00-00', '9335559242', 'ergs@hotmail.com', 'rodrigogonzalez', 'College', '', 'Filipino', '471087144', 1, '28544728858', 'ew6yse8or6nn', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(364, 'Sarah', 'Hermano', 'Z', 'M', 'Meycauayan', 'Meycauayan', '0000-00-00', '9325556569', 'adsgrw@yahoo.com', 'sarahhermano', 'College', '', 'Filipino', '382427475', 1, '70820293145', '37y7inlxd0ls', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(365, 'Bob', 'McBobbison', 'N', 'M', 'Pasay', 'Rejkjavik', '0000-00-00', '2835559124', 'sdfbv@gmail.com', 'bobmcbobbison', 'College', '', 'Icelandic', '436875318', 1, '33645946354', 'c759olg9kv64', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(366, 'Pia', 'Makasakay', 'D', 'M', 'Manila', 'Mexico', '0000-00-00', '9215557040', 'plmk@gmail.com', 'piamakasakay', 'Vocational', '', 'Filipino', '592085549', 1, '90405451039', '517i0w3qf9l1', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(367, 'Maya', 'De Castro', 'W', 'M', 'Paranaque', 'Bacoor', '0000-00-00', '2835556378', 'reasgf@hotmail.com', 'mayade castro', 'Vocational', '', 'Filipino', '658656911', 1, '10246323669', '5pdm189q6g9a', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(368, 'Yuuko', 'Aioi', 'A', 'M', 'Tagaytay', 'Tagaytay', '0000-00-00', '9335556740', 'tghfdf@yahoo.com', 'yuukoaioi', 'College', '', 'Japanese', '482225477', 1, '78565241528', 'c0oonkxd34eo', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(369, 'Sid', 'Nicodemus', 'G', 'M', 'Quezon City', 'Baler', '0000-00-00', '2835556115', 'reagv@gmail.com', 'sidnicodemus', 'College', '', 'Filipino', '842409116', 1, '47281926012', 'ztndu1afp2ae', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(370, 'George', 'Miler', 'Y', 'M', 'Antipolo', 'Perth', '0000-00-00', '9295553400', 'asdg@yahoo.com', 'georgemiler', 'Vocational', '', 'Austrailian', '53027854', 1, '22092841652', 'y1ktmjxhyr0d', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(371, 'Bong', 'Budots', 'R', 'M', 'San Juan', 'Dagupan', '0000-00-00', '9195551998', 'gwrtef@gmail.com', 'bbudots', 'College', '', 'Filipino', '868199606', 1, '25658671320', 'mcu0i6led3jo', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(372, 'Mark', 'Maquia', 'W', 'M', 'Manila', 'Manila', '0000-00-00', '9215554981', 'yagpdb@gmail.com', 'mmquia', 'College', '', 'Filipino', '415507697', 1, '72179993686', 'mvd8aax6qlmv', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(373, 'Juan Carlos', 'Bourbon', 'Q', 'M', 'Manila', 'Madrid', '0000-00-00', '9335559032', 'yahoo@gmail.com', 'juanbourbon', 'College', '', 'Spanish', '585307701', 1, '44885408702', '4xlczuilywom', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(374, 'May', 'Martinez', 'U', 'M', 'Quezon City', 'Quezon City', '0000-00-00', '9285553232', 'ken123@gmail.com', 'kenmartinez', 'College', '', 'Filipino', '866932944', 1, '17541058632', 'pingas123', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(375, 'Juan', 'Rodriguez', 'S', 'M', 'Marikina', 'Marikina', '0000-00-00', '9295558379', 'jr134@yahoo.com', 'jrodriguez', 'Vocational', '', 'Filipino', '387868675', 1, '53425006236', 'password12345', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(376, 'Sarah', 'De Castro', 'G', 'M', 'Manila', 'Manila', '0000-00-00', '9285559561', 'sdc989@yahoo.com', 'sarahdc', '', '', 'Filipino', '75709106', 1, '47928338771', 'dimes4crimes', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(377, 'Martin', 'Jackson', 'W', 'M', 'Taguig', 'New York', '0000-00-00', '2805558385', 'mj1235@gmail.com', 'martinjackson', 'College', '', 'American', '692775254', 1, '42963007161', '4twenty69', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(378, 'Max', 'De La Cruz', 'A', 'M', 'Manila', 'Cebu', '0000-00-00', '2805552245', 'max822@gmail.com', 'maxdlc', 'College', '', 'Filipino', '665032679', 1, '88507513624', 'boom0606', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(379, 'Yolanda', 'Lobantac', 'P', 'M', 'Pasay', 'Tacloban', '0000-00-00', '9195556506', 'yoyo00@gmail.com', 'yolobontac', 'Vocational', '', 'Filipino', '239459341', 1, '65498508408', 'q8telmv8xhgp', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(380, 'Nino', 'Santo', 'T', 'M', 'Pasig', 'Dumaguete', '0000-00-00', '9235551325', 'nino409@yahoo.com', 'nisanto', '', '', 'Filipino', '70954192', 1, '72444590344', 'khye924cnqbq', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(381, 'Ronald', 'Ongsitco', 'D', 'M', 'Pasay', 'Shenzen', '0000-00-00', '9085559267', 'ronald049@hotmail.com', 'ronong', 'Vocational', '', 'Chinese', '784203400', 1, '23417589325', 'djf433regwri', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(382, 'Linda', 'Feria', 'R', 'M', 'Muntinlupa', 'Ilo-Ilo', '0000-00-00', '9295552963', 'aw45r@gmail.com', 'lindaferia', 'College', '', 'Filipino', '158771229', 1, '91283595099', 'g1gr88g7b9co', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(383, 'May', 'Junjulay', 'Q', 'M', 'Manila', 'Manila', '0000-00-00', '9225552022', 'hsdaui@gmail.com', 'mayjunjulay', 'College', '', 'Filipino', '678771358', 1, '43743692994', '6mryfegtw3pt', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(384, 'Winber', 'Uy', 'D', 'M', 'Manila', 'Shanghai', '0000-00-00', '2835555044', 'dhu@yahoo.com', 'winberuy', 'College', '', 'Chinese', '321679396', 1, '14187524395', 'xur8dx0q854f', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(385, 'Warren', 'De Guzman', 'I', 'M', 'Quezon City', 'Cebu', '0000-00-00', '2835556700', 'akdlsjfi@hotmail.com', 'warrende guzman', 'Vocational', '', 'Filipino', '731438340', 1, '91348434669', 'q31rok38pham', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(386, 'Gah', 'Mytim', 'S', 'M', 'Taguig', 'Cagayan De Oro', '0000-00-00', '9285550406', 'nhdt@gmail.com', 'gahmytim', 'Vocational', '', 'Norwegian', '160344698', 1, '43429643552', 'tj6fip9xlt3k', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(387, 'Karl', 'Martinez', 'U', 'M', 'Manila', 'Vigan', '0000-00-00', '9105551019', 'wrtsehg@gmail.com', 'karlmartinez', 'College', '', 'Filipino', '493805651', 1, '3815725969', '9bilhoohoip6', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(388, 'Felix', 'Gonzalez', 'W', 'M', 'Caloocan', 'Tuguegarao', '0000-00-00', '9335559657', 'arhtr@gmail.com', 'felixgonzalez', 'College', '', 'Filipino', '411804775', 1, '88504196920', 'tckmdfdphnnu', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(389, 'Mohammed', 'Abdul', 'Q', 'M', 'Quezon City', 'Nubia', '0000-00-00', '9325550466', 'ags@gmail.com', 'mohammedabdul', 'Vocational', '', 'Egyptian', '965060471', 1, '37548462497', 'lkvznhjflr5e', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(390, 'Clarence', 'De La Cruz', 'K', 'M', 'Pasig', 'Pasig', '0000-00-00', '9335559369', 'dsfdfrf@yahoo.com', 'clarencede la cruz', 'College', '', 'Filipino', '661675119', 1, '95833976419', '87kchyio6v7z', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(391, 'Bonifacio', 'Delgado', 'S', 'M', 'Pasay', 'Pasay', '0000-00-00', '9325551901', 'aryag@gmail.com', 'bonifaciodelgado', 'Vocational', '', 'Filipino', '780476625', 1, '92523467245', '7mcxms78ultg', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(392, 'Okbul', 'Ibanez', 'T', 'M', 'Calamba', 'Calamba', '0000-00-00', '9325554138', 'treghf@yahoo.com', 'okbulibanez', 'Vocational', '', 'Filipino', '822235480', 1, '53357434464', 'w1re2a11uuf6', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(393, 'Juan Miguel', 'De La Cruz', 'E', 'M', 'Quezon City', 'Ormoc', '0000-00-00', '9195552449', 'ruyjh@gmail.com', 'jmdelacruz', 'College', '', 'Filipino', '469515749', 1, '77811015462', 'fd17fzhbra81', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(394, 'Docar', 'Lisaydal', 'U', 'M', 'Taguig', 'Buguey', '0000-00-00', '9095557260', 'gtraef@gmail.com', 'docarlisaydal', 'College', '', 'Filipino', '773872508', 1, '32671165576', 'zuo3v7q3rrio', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(395, 'John', 'Medina', 'Q', 'M', 'San Juan', 'Baguio', '0000-00-00', '9285558513', 'ryuth@gmail.com', 'johnmedina', 'College', '', 'Filipino', '151003210', 1, '60069868364', 'hmare72kcr78', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(396, 'Gus', 'Abergus', 'S', 'M', 'San Juan', 'Dapitan', '0000-00-00', '9215551239', 'juytgbr@yahoo.com', 'gusabergus', 'Vocational', '', 'Filipino', '306607080', 1, '8821979190', '2io69knsojjw', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(397, 'George', 'Carillo', 'U', 'M', 'Caloocan', 'Caloocan', '0000-00-00', '9325556687', 'rtyhgf@hotmail.com', 'georgecarillo', '', '', 'Filipino', '715075741', 1, '1539087456', '546qkx6gf0b3', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(398, 'Gopal', 'Kumar', 'R', 'M', 'Manila', 'Mumbai', '0000-00-00', '9325553890', 'wrehgu@gmail.com', 'gokumar', 'College', '', 'Indian', '687429394', 1, '71250781912', 'f51bmq5id6bp', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(399, 'Maxima', 'Hipolito', 'M', 'M', 'Taguig', 'Digos', '0000-00-00', '9075551275', 'iujyfjcyfhtgf@gmail.com', 'maximahipolito', 'College', '', 'Filipino', '771178127', 1, '43869003505', '5898r22zkat3', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(400, 'Princess', 'Belmonte', 'O', 'M', 'Quezon City', 'Zamboanga', '0000-00-00', '9325554003', 'vyrtjhghb@gmail.com', 'princessbelmonte', 'Vocational', '', 'Filipino', '325727707', 1, '50657067963', 'twssmgw3omvs', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(401, 'Boi', 'Boboi', 'M', 'M', 'San Juan', 'Kuala Lumpur', '0000-00-00', '9285555594', 'asd@yahoo.com', 'boiboboi', 'Vocational', '', 'Malaysian', '210198354', 1, '58661756048', 'vjnz65sqm1jz', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(402, 'Yaya', 'Yaha', 'Y', 'M', 'Valenzuela', 'George Town', '0000-00-00', '9285555185', 'rtwfsdaf@yahoo.com', 'yayayaha', 'College', '', 'Malaysian', '311118647', 1, '49420955738', '8dlbmz7bepl1', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(403, 'Gabi', 'Makahiya', 'G', 'M', 'Quezon City', 'Quezon City', '0000-00-00', '9285557434', 'etyrhtdf@gmail.com', 'gabimakahiya', 'College', '', 'Filipino', '6105764', 1, '539303920', 'ftcyg31wxtat', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(404, 'Joy ', 'Lobo', 'A', 'M', 'Paranaque', 'Delhi', '0000-00-00', '9335552370', 'erfthjy@yahoo.com', 'joylobo', 'College', '', 'India', '313728307', 1, '79945361438', 'y47fklann11g', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(405, 'Sorwin', 'Chanong', 'Y', 'M', 'Taguig', 'Beijing', '0000-00-00', '9295550690', 'tujyhmt@yahoo.com', 'sorwinchanong', 'College', '', 'Chinese', '16811645', 1, '53572395967', 'q1rms7m10pgs', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(406, 'Maria', 'Huse', 'U', 'M', 'Paranaque', 'Puerto Princesa', '0000-00-00', '9295551254', 'sfdhf@yahoo.com', 'mariahuse', 'College', '', 'Filipino', '201412968', 1, '10011351936', '8xzy70bpq71t', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(407, 'Diego', 'Torillo', 'K', 'M', 'Paranaque', 'Cebu', '0000-00-00', '2805553820', 'oiuth@yahoo.com', 'diegotorillo', 'Vocational', '', 'Filipino', '443413994', 1, '82451936811', 'vjrw9vqqnon4', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(408, 'Cortez', 'Hermano', 'H', 'M', 'Valenzuela', 'Davao', '0000-00-00', '9325550049', 'fdszv@gmail.com', 'cortezhermano', 'College', '', 'Filipino', '896196776', 1, '75629034491', 'eup9qobtund4', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(409, 'Maria', 'Magallanes', 'W', 'M', 'Quezon City', 'Dumaguete', '0000-00-00', '2805552837', 'sadgf@yahoo.com', 'mariamagallanes', 'College', '', 'Filipino', '498628188', 1, '49457248395', '9v6fmxk3g844', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(410, 'Dio', 'Diogenes', 'R', 'M', 'Manila', 'Angeles', '0000-00-00', '9335559957', 'byrtdrtdb@gmail.com', 'diodiogenes', 'Vocational', '', 'Filipino', '229418803', 1, '10612263285', 'vel78k2j17ux', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(411, 'Mara', 'Makiling', 'C', 'M', 'Manila', 'Subic', '0000-00-00', '9325554755', 'stpjidksm@yahoo.com', 'maramakiling', '', '', 'Filipino', '649826518', 1, '32068162544', 'u5a4l63tnp71', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(412, 'Rick', 'Astley', 'B', 'M', 'Muntinlupa', 'Chicago', '0000-00-00', '9285550604', 'wrged@gmail.com', 'rickastley', 'College', '', 'American', '591422880', 1, '20812454067', 'vmmy9j20qxab', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(413, 'Rodrigo', 'Gonzalez', 'M', 'M', 'Paranaque', 'Tarlac', '0000-00-00', '9335559242', 'ergs@hotmail.com', 'rodrigogonzalez', 'College', '', 'Filipino', '471087144', 1, '28544728858', 'ew6yse8or6nn', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(414, 'Sarah', 'Hermano', 'Z', 'M', 'Meycauayan', 'Meycauayan', '0000-00-00', '9325556569', 'adsgrw@yahoo.com', 'sarahhermano', 'College', '', 'Filipino', '382427475', 1, '70820293145', '37y7inlxd0ls', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(415, 'Bob', 'McBobbison', 'N', 'M', 'Pasay', 'Rejkjavik', '0000-00-00', '2835559124', 'sdfbv@gmail.com', 'bobmcbobbison', 'College', '', 'Icelandic', '436875318', 1, '33645946354', 'c759olg9kv64', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(416, 'Pia', 'Makasakay', 'D', 'M', 'Manila', 'Mexico', '0000-00-00', '9215557040', 'plmk@gmail.com', 'piamakasakay', 'Vocational', '', 'Filipino', '592085549', 1, '90405451039', '517i0w3qf9l1', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(417, 'Maya', 'De Castro', 'W', 'M', 'Paranaque', 'Bacoor', '0000-00-00', '2835556378', 'reasgf@hotmail.com', 'mayade castro', 'Vocational', '', 'Filipino', '658656911', 1, '10246323669', '5pdm189q6g9a', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(418, 'Yuuko', 'Aioi', 'A', 'M', 'Tagaytay', 'Tagaytay', '0000-00-00', '9335556740', 'tghfdf@yahoo.com', 'yuukoaioi', 'College', '', 'Japanese', '482225477', 1, '78565241528', 'c0oonkxd34eo', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(419, 'Sid', 'Nicodemus', 'G', 'M', 'Quezon City', 'Baler', '0000-00-00', '2835556115', 'reagv@gmail.com', 'sidnicodemus', 'College', '', 'Filipino', '842409116', 1, '47281926012', 'ztndu1afp2ae', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(420, 'George', 'Miler', 'Y', 'M', 'Antipolo', 'Perth', '0000-00-00', '9295553400', 'asdg@yahoo.com', 'georgemiler', 'Vocational', '', 'Austrailian', '53027854', 1, '22092841652', 'y1ktmjxhyr0d', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(421, 'Bong', 'Budots', 'R', 'M', 'San Juan', 'Dagupan', '0000-00-00', '9195551998', 'gwrtef@gmail.com', 'bbudots', 'College', '', 'Filipino', '868199606', 1, '25658671320', 'mcu0i6led3jo', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(422, 'Mark', 'Maquia', 'W', 'M', 'Manila', 'Manila', '0000-00-00', '9215554981', 'yagpdb@gmail.com', 'mmquia', 'College', '', 'Filipino', '415507697', 1, '72179993686', 'mvd8aax6qlmv', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(423, 'Juan Carlos', 'Bourbon', 'Q', 'M', 'Manila', 'Madrid', '0000-00-00', '9335559032', 'yahoo@gmail.com', 'juanbourbon', 'College', '', 'Spanish', '585307701', 1, '44885408702', '4xlczuilywom', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(424, 'May', 'Martinez', 'U', 'M', 'Quezon City', 'Quezon City', '1975-05-05', '9285553232', 'ken123@gmail.com', 'kenmartinez', 'College', '', 'Filipino', '866932944', 1, '17541058632', 'pingas123', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(425, 'Juan', 'Rodriguez', 'S', 'M', 'Marikina', 'Marikina', '1975-05-05', '9295558379', 'jr134@yahoo.com', 'jrodriguez', 'Vocational', '', 'Filipino', '387868675', 1, '53425006236', 'password12345', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(426, 'Sarah', 'De Castro', 'G', 'M', 'Manila', 'Manila', '1975-05-05', '9285559561', 'sdc989@yahoo.com', 'sarahdc', 'Highschool', '', 'Filipino', '75709106', 1, '47928338771', 'dimes4crimes', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(427, 'Martin', 'Jackson', 'W', 'M', 'Taguig', 'New York', '1976-11-03', '2805558385', 'mj1235@gmail.com', 'martinjackson', 'College', '', 'American', '692775254', 1, '42963007161', '4twenty69', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(428, 'Max', 'De La Cruz', 'A', 'M', 'Manila', 'Cebu', '1976-11-04', '2805552245', 'max822@gmail.com', 'maxdlc', 'College', '', 'Filipino', '665032679', 1, '88507513624', 'boom0606', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(429, 'Yolanda', 'Lobantac', 'P', 'M', 'Pasay', 'Tacloban', '1976-11-05', '9195556506', 'yoyo00@gmail.com', 'yolobontac', 'Vocational', '', 'Filipino', '239459341', 1, '65498508408', 'q8telmv8xhgp', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(430, 'Nino', 'Santo', 'T', 'M', 'Pasig', 'Dumaguete', '1977-08-09', '9235551325', 'nino409@yahoo.com', 'nisanto', 'Highschool', '', 'Filipino', '70954192', 1, '72444590344', 'khye924cnqbq', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(431, 'Ronald', 'Ongsitco', 'D', 'M', 'Pasay', 'Shenzen', '1977-08-10', '9085559267', 'ronald049@hotmail.com', 'ronong', 'Vocational', '', 'Chinese', '784203400', 1, '23417589325', 'djf433regwri', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(432, 'Linda', 'Feria', 'R', 'M', 'Muntinlupa', 'Ilo-Ilo', '1977-08-11', '9295552963', 'aw45r@gmail.com', 'lindaferia', 'College', '', 'Filipino', '158771229', 1, '91283595099', 'g1gr88g7b9co', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(433, 'May', 'Junjulay', 'Q', 'M', 'Manila', 'Manila', '1977-08-12', '9225552022', 'hsdaui@gmail.com', 'mayjunjulay', 'College', '', 'Filipino', '678771358', 1, '43743692994', '6mryfegtw3pt', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(434, 'Winber', 'Uy', 'D', 'M', 'Manila', 'Shanghai', '1977-08-13', '2835555044', 'dhu@yahoo.com', 'winberuy', 'College', '', 'Chinese', '321679396', 1, '14187524395', 'xur8dx0q854f', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(435, 'Warren', 'De Guzman', 'I', 'M', 'Quezon City', 'Cebu', '1977-08-14', '2835556700', 'akdlsjfi@hotmail.com', 'warrende guzman', 'Vocational', '', 'Filipino', '731438340', 1, '91348434669', 'q31rok38pham', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(436, 'Gah', 'Mytim', 'S', 'M', 'Taguig', 'Cagayan De Oro', '1977-08-15', '9285550406', 'nhdt@gmail.com', 'gahmytim', 'Vocational', '', 'Norwegian', '160344698', 1, '43429643552', 'tj6fip9xlt3k', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(437, 'Karl', 'Martinez', 'U', 'M', 'Manila', 'Vigan', '1977-08-16', '9105551019', 'wrtsehg@gmail.com', 'karlmartinez', 'College', '', 'Filipino', '493805651', 1, '3815725969', '9bilhoohoip6', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(438, 'Felix', 'Gonzalez', 'W', 'M', 'Caloocan', 'Tuguegarao', '1977-08-17', '9335559657', 'arhtr@gmail.com', 'felixgonzalez', 'College', '', 'Filipino', '411804775', 1, '88504196920', 'tckmdfdphnnu', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(439, 'Mohammed', 'Abdul', 'Q', 'M', 'Quezon City', 'Nubia', '1977-08-18', '9325550466', 'ags@gmail.com', 'mohammedabdul', 'Vocational', '', 'Egyptian', '965060471', 1, '37548462497', 'lkvznhjflr5e', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(440, 'Clarence', 'De La Cruz', 'K', 'M', 'Pasig', 'Pasig', '1989-01-04', '9335559369', 'dsfdfrf@yahoo.com', 'clarencede la cruz', 'College', '', 'Filipino', '661675119', 1, '95833976419', '87kchyio6v7z', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(441, 'Bonifacio', 'Delgado', 'S', 'M', 'Pasay', 'Pasay', '1990-07-10', '9325551901', 'aryag@gmail.com', 'bonifaciodelgado', 'Vocational', '', 'Filipino', '780476625', 1, '92523467245', '7mcxms78ultg', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(442, 'Okbul', 'Ibanez', 'T', 'M', 'Calamba', 'Calamba', '1991-04-01', '9325554138', 'treghf@yahoo.com', 'okbulibanez', 'Vocational', '', 'Filipino', '822235480', 1, '53357434464', 'w1re2a11uuf6', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(443, 'Juan Miguel', 'De La Cruz', 'E', 'M', 'Quezon City', 'Ormoc', '1991-12-03', '9195552449', 'ruyjh@gmail.com', 'jmdelacruz', 'College', '', 'Filipino', '469515749', 1, '77811015462', 'fd17fzhbra81', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(444, 'Docar', 'Lisaydal', 'U', 'M', 'Taguig', 'Buguey', '1991-12-04', '9095557260', 'gtraef@gmail.com', 'docarlisaydal', 'College', '', 'Filipino', '773872508', 1, '32671165576', 'zuo3v7q3rrio', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(445, 'John', 'Medina', 'Q', 'M', 'San Juan', 'Baguio', '1991-12-05', '9285558513', 'ryuth@gmail.com', 'johnmedina', 'College', '', 'Filipino', '151003210', 1, '60069868364', 'hmare72kcr78', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(446, 'Gus', 'Abergus', 'S', 'M', 'San Juan', 'Dapitan', '1994-02-05', '9215551239', 'juytgbr@yahoo.com', 'gusabergus', 'Vocational', '', 'Filipino', '306607080', 1, '8821979190', '2io69knsojjw', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(447, 'George', 'Carillo', 'U', 'M', 'Caloocan', 'Caloocan', '1994-02-06', '9325556687', 'rtyhgf@hotmail.com', 'georgecarillo', '', '', 'Filipino', '715075741', 1, '1539087456', '546qkx6gf0b3', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(448, 'Gopal', 'Kumar', 'R', 'M', 'Manila', 'Mumbai', '1994-02-07', '9325553890', 'wrehgu@gmail.com', 'gokumar', 'College', '', 'Indian', '687429394', 1, '71250781912', 'f51bmq5id6bp', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(449, 'Maxima', 'Hipolito', 'M', 'M', 'Taguig', 'Digos', '1994-02-08', '9075551275', 'iujyfjcyfhtgf@gmail.com', 'maximahipolito', 'College', '', 'Filipino', '771178127', 1, '43869003505', '5898r22zkat3', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(450, 'Princess', 'Belmonte', 'O', 'M', 'Quezon City', 'Zamboanga', '1978-05-08', '9325554003', 'vyrtjhghb@gmail.com', 'princessbelmonte', 'Vocational', '', 'Filipino', '325727707', 1, '50657067963', 'twssmgw3omvs', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(451, 'Boi', 'Boboi', 'M', 'M', 'San Juan', 'Kuala Lumpur', '1978-05-09', '9285555594', 'asd@yahoo.com', 'boiboboi', 'Vocational', '', 'Malaysian', '210198354', 1, '58661756048', 'vjnz65sqm1jz', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(452, 'Yaya', 'Yaha', 'Y', 'M', 'Valenzuela', 'George Town', '1978-05-10', '9285555185', 'rtwfsdaf@yahoo.com', 'yayayaha', 'College', '', 'Malaysian', '311118647', 1, '49420955738', '8dlbmz7bepl1', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(453, 'Gabi', 'Makahiya', 'G', 'M', 'Quezon City', 'Quezon City', '1980-09-06', '9285557434', 'etyrhtdf@gmail.com', 'gabimakahiya', 'College', '', 'Filipino', '6105764', 1, '539303920', 'ftcyg31wxtat', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(454, 'Joy ', 'Lobo', 'A', 'M', 'Paranaque', 'Delhi', '1980-09-07', '9335552370', 'erfthjy@yahoo.com', 'joylobo', 'College', '', 'India', '313728307', 1, '79945361438', 'y47fklann11g', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(455, 'Sorwin', 'Chanong', 'Y', 'M', 'Taguig', 'Beijing', '1980-09-08', '9295550690', 'tujyhmt@yahoo.com', 'sorwinchanong', 'College', '', 'Chinese', '16811645', 1, '53572395967', 'q1rms7m10pgs', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(456, 'Maria', 'Huse', 'U', 'M', 'Paranaque', 'Puerto Princesa', '1982-06-02', '9295551254', 'sfdhf@yahoo.com', 'mariahuse', 'College', '', 'Filipino', '201412968', 1, '10011351936', '8xzy70bpq71t', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(457, 'Diego', 'Torillo', 'K', 'M', 'Paranaque', 'Cebu', '1983-08-03', '2805553820', 'oiuth@yahoo.com', 'diegotorillo', 'Vocational', '', 'Filipino', '443413994', 1, '82451936811', 'vjrw9vqqnon4', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(458, 'Cortez', 'Hermano', 'H', 'M', 'Valenzuela', 'Davao', '1983-08-04', '9325550049', 'fdszv@gmail.com', 'cortezhermano', 'College', '', 'Filipino', '896196776', 1, '75629034491', 'eup9qobtund4', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(459, 'Maria', 'Magallanes', 'W', 'M', 'Quezon City', 'Dumaguete', '1983-08-05', '2805552837', 'sadgf@yahoo.com', 'mariamagallanes', 'College', '', 'Filipino', '498628188', 1, '49457248395', '9v6fmxk3g844', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(460, 'Dio', 'Diogenes', 'R', 'M', 'Manila', 'Angeles', '1983-08-06', '9335559957', 'byrtdrtdb@gmail.com', 'diodiogenes', 'Vocational', '', 'Filipino', '229418803', 1, '10612263285', 'vel78k2j17ux', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(461, 'Mara', 'Makiling', 'C', 'M', 'Manila', 'Subic', '1983-08-07', '9325554755', 'stpjidksm@yahoo.com', 'maramakiling', 'Highschool', '', 'Filipino', '649826518', 1, '32068162544', 'u5a4l63tnp71', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(462, 'Rick', 'Astley', 'B', 'M', 'Muntinlupa', 'Chicago', '1986-06-11', '9285550604', 'wrged@gmail.com', 'rickastley', 'College', '', 'American', '591422880', 1, '20812454067', 'vmmy9j20qxab', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(463, 'Rodrigo', 'Gonzalez', 'M', 'M', 'Paranaque', 'Tarlac', '1986-06-12', '9335559242', 'ergs@hotmail.com', 'rodrigogonzalez', 'College', '', 'Filipino', '471087144', 1, '28544728858', 'ew6yse8or6nn', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(464, 'Sarah', 'Hermano', 'Z', 'M', 'Meycauayan', 'Meycauayan', '1987-11-06', '9325556569', 'adsgrw@yahoo.com', 'sarahhermano', 'College', '', 'Filipino', '382427475', 1, '70820293145', '37y7inlxd0ls', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(465, 'Bob', 'McBobbison', 'N', 'M', 'Pasay', 'Rejkjavik', '1987-11-07', '2835559124', 'sdfbv@gmail.com', 'bobmcbobbison', 'College', '', 'Icelandic', '436875318', 1, '33645946354', 'c759olg9kv64', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(466, 'Pia', 'Makasakay', 'D', 'M', 'Manila', 'Mexico', '1987-11-08', '9215557040', 'plmk@gmail.com', 'piamakasakay', 'Vocational', '', 'Filipino', '592085549', 1, '90405451039', '517i0w3qf9l1', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(467, 'Maya', 'De Castro', 'W', 'M', 'Paranaque', 'Bacoor', '1987-11-09', '2835556378', 'reasgf@hotmail.com', 'mayade castro', 'Vocational', '', 'Filipino', '658656911', 1, '10246323669', '5pdm189q6g9a', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(468, 'Yuuko', 'Aioi', 'A', 'M', 'Tagaytay', 'Tagaytay', '1987-11-10', '9335556740', 'tghfdf@yahoo.com', 'yuukoaioi', 'College', '', 'Japanese', '482225477', 1, '78565241528', 'c0oonkxd34eo', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(469, 'Sid', 'Nicodemus', 'G', 'M', 'Quezon City', 'Baler', '1987-11-11', '2835556115', 'reagv@gmail.com', 'sidnicodemus', 'College', '', 'Filipino', '842409116', 1, '47281926012', 'ztndu1afp2ae', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(470, 'George', 'Miler', 'Y', 'M', 'Antipolo', 'Perth', '1987-11-12', '9295553400', 'asdg@yahoo.com', 'georgemiler', 'Vocational', '', 'Austrailian', '53027854', 1, '22092841652', 'y1ktmjxhyr0d', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(471, 'Bong', 'Budots', 'R', 'M', 'San Juan', 'Dagupan', '1980-04-03', '9195551998', 'gwrtef@gmail.com', 'bbudots', 'College', '', 'Filipino', '868199606', 1, '25658671320', 'mcu0i6led3jo', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(472, 'Mark', 'Maquia', 'W', 'M', 'Manila', 'Manila', '1980-04-04', '9215554981', 'yagpdb@gmail.com', 'mmquia', 'College', '', 'Filipino', '415507697', 1, '72179993686', 'mvd8aax6qlmv', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0),
(473, 'Juan Carlos', 'Bourbon', 'Q', 'M', 'Manila', 'Madrid', '1980-04-05', '9335559032', 'yahoo@gmail.com', 'juanbourbon', 'College', '', 'Spanish', '585307701', 1, '44885408702', '4xlczuilywom', 'carpentry;programming;teaching', 'teacher,teacher at a public school;manager,restarurant manager;', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `middle_initial` varchar(2) COLLATE utf8mb4_bin DEFAULT NULL,
  `sex` enum('M','F') COLLATE utf8mb4_bin DEFAULT NULL,
  `current_address` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL,
  `place_of_birth` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `linkedin_profile` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `educational_attainment` enum('College','Vocational','Highschool','Elementary') COLLATE utf8mb4_bin DEFAULT NULL,
  `civil_status` enum('S','M') COLLATE utf8mb4_bin DEFAULT NULL,
  `nationality` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `SSN` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `job_position` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `birth_certificate_id` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `employment_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `health_package` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `last_name`, `middle_initial`, `sex`, `current_address`, `place_of_birth`, `birthdate`, `phone_number`, `email`, `linkedin_profile`, `educational_attainment`, `civil_status`, `nationality`, `SSN`, `job_position`, `birth_certificate_id`, `employment_date`, `health_package`) VALUES
(1, 'John', 'Solis', 'M', 'M', '16 Mariano street, KL Village, Quezon City, Manila', 'Quezon City', '2000-01-02', '53634454', 'msolis@company.com', '', 'Vocational', 'S', 'Filipino', '435354998', 'Janitor 1', '564565645', '2019-05-08 11:05:53', 1),
(2, 'Reno', 'Villar', 'R', 'M', 'B4 L23 AK housing village, Quezon City', 'Manila', '1997-05-01', '43453242', 'avil@company.com', 'linkedin.com/bestjanitor', 'Highschool', 'S', 'Filipino', '43252432', 'Janitor', '5436563', '2019-05-08 11:09:52', 2),
(19, 'Shiro', 'Nai', 'K', 'F', 'Block 5 Lot 11 B.F. Homes, Paranaque City, Metro Manila.', 'Quezon City', '2017-11-22', '090543216969', 'nai_kimochi@gmail.com', 'linkedin.com/nainanikusorayo', 'College', 'S', 'Filipino', '7646359856', 'Maid', '83294832474', '2019-05-16 05:29:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_deps`
--

CREATE TABLE `employee_deps` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `dep_name` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL,
  `dep_relation` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `employee_job_history`
--

CREATE TABLE `employee_job_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `job_name` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `job_desc` varchar(300) COLLATE utf8mb4_bin DEFAULT NULL,
  `year_started` int(11) DEFAULT NULL,
  `year_ended` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `employee_skills`
--

CREATE TABLE `employee_skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `skill` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `health_packages`
--

CREATE TABLE `health_packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `package_name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `package_desc` varchar(600) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `health_packages`
--

INSERT INTO `health_packages` (`id`, `package_name`, `package_desc`) VALUES
(1, 'Package A', 'Basic SSS contributions monthly.'),
(2, 'Package B', 'Basic SSS contributions and basic health insurance.'),
(3, 'Package C', 'Basic SSS contributions and premium health insurance.');

-- --------------------------------------------------------

--
-- Table structure for table `job_positions`
--

CREATE TABLE `job_positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_title` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `job_description` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL,
  `is_open` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `job_positions`
--

INSERT INTO `job_positions` (`id`, `job_title`, `job_description`, `is_open`) VALUES
(1, 'Janitor 1', 'Basic entry level janitor. Basic salary and starting pay. with health benefits.', 1),
(2, 'Secretary 1', 'Entry level secretary. Basic benefits.', 1),
(3, 'Receptionist 2', 'Receptionist with at least 1 year experience in the bob or any related job. Basic benefits.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `target_position` (`target_position`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `health_package` (`health_package`);

--
-- Indexes for table `employee_deps`
--
ALTER TABLE `employee_deps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `employee_job_history`
--
ALTER TABLE `employee_job_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `employee_skills`
--
ALTER TABLE `employee_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `health_packages`
--
ALTER TABLE `health_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_positions`
--
ALTER TABLE `job_positions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=474;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `employee_deps`
--
ALTER TABLE `employee_deps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_job_history`
--
ALTER TABLE `employee_job_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `employee_skills`
--
ALTER TABLE `employee_skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `health_packages`
--
ALTER TABLE `health_packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_positions`
--
ALTER TABLE `job_positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicants`
--
ALTER TABLE `applicants`
  ADD CONSTRAINT `applicants_ibfk_1` FOREIGN KEY (`target_position`) REFERENCES `job_positions` (`id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`health_package`) REFERENCES `health_packages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_deps`
--
ALTER TABLE `employee_deps`
  ADD CONSTRAINT `employee_deps_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_skills`
--
ALTER TABLE `employee_skills`
  ADD CONSTRAINT `employee_skills_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
