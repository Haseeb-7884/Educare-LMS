-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 05:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `assingments`
--

CREATE TABLE `assingments` (
  `QA_id` int(11) NOT NULL,
  `assingment_title1` varchar(150) NOT NULL,
  `assingment_file1` varchar(50) NOT NULL,
  `assesment1` varchar(500) NOT NULL,
  `assingment_section_name1` varchar(200) NOT NULL,
  `assingment_title2` varchar(150) NOT NULL,
  `assingment_file2` varchar(50) NOT NULL,
  `assesment2` varchar(500) NOT NULL,
  `assingment_section_name2` varchar(200) NOT NULL,
  `assingment_title3` varchar(150) NOT NULL,
  `assingment_file3` varchar(50) NOT NULL,
  `assesment3` varchar(500) NOT NULL,
  `assingment_section_name3` varchar(200) NOT NULL,
  `assingment_title4` varchar(150) NOT NULL,
  `assingment_file4` varchar(50) NOT NULL,
  `assesment4` varchar(500) NOT NULL,
  `assingment_section_name4` varchar(200) NOT NULL,
  `assingment_title5` varchar(150) NOT NULL,
  `assingment_file5` varchar(50) NOT NULL,
  `assesment5` varchar(500) NOT NULL,
  `assingment_section_name5` varchar(200) NOT NULL,
  `cources_id` int(11) NOT NULL,
  `requirments_id` int(225) NOT NULL,
  `section_id` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assingments`
--

INSERT INTO `assingments` (`QA_id`, `assingment_title1`, `assingment_file1`, `assesment1`, `assingment_section_name1`, `assingment_title2`, `assingment_file2`, `assesment2`, `assingment_section_name2`, `assingment_title3`, `assingment_file3`, `assesment3`, `assingment_section_name3`, `assingment_title4`, `assingment_file4`, `assesment4`, `assingment_section_name4`, `assingment_title5`, `assingment_file5`, `assesment5`, `assingment_section_name5`, `cources_id`, `requirments_id`, `section_id`) VALUES
(1, 'nthing ghere ren', 'cources/assingment/launch.bat', 'tht tnjnrj  dhbshbdhs hbsydgys dvywqbwq  ww', 'nthgigng g ghgg gh gh hgg ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15, 22, 40);

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `cart_id` int(11) NOT NULL,
  `courses_id` int(11) NOT NULL,
  `registration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`cart_id`, `courses_id`, `registration_id`) VALUES
(7, 9, 1),
(9, 5, 2),
(11, 14, 1),
(12, 3, 2),
(14, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cource`
--

CREATE TABLE `cource` (
  `courses_id` int(11) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_subtitle` varchar(225) NOT NULL,
  `select_language` varchar(100) NOT NULL,
  `selecting_level` varchar(100) NOT NULL,
  `select_category` int(11) NOT NULL,
  `primary_taught` varchar(225) NOT NULL,
  `course_img` varchar(225) NOT NULL,
  `course_video` varchar(225) NOT NULL,
  `instructor_name` varchar(50) NOT NULL,
  `course_description` longtext NOT NULL,
  `instructor_id` int(11) NOT NULL,
  `course_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cource`
--

INSERT INTO `cource` (`courses_id`, `course_title`, `course_subtitle`, `select_language`, `selecting_level`, `select_category`, `primary_taught`, `course_img`, `course_video`, `instructor_name`, `course_description`, `instructor_id`, `course_type`) VALUES
(3, 'learn MS word and PPTS with adavance Excell', 'word excel and pptx,word excel and pptx,word excel and pptx,word excel and ppt and pptx,word excel and pptx,word excel and and pptx,word excel and pptx,word excel and and pptx,word excel and pptx,word excel and', 'English', 'Expert', 4, 'Microsoft Office ', 'uploads/2.jpg', 'uploads/20220829_073823.mp4', 'MUHAMMADUSMAN', 'iure ea illum? Eveniet quidem quisquam eligendi voluptatibus odit quae asperiores ex id recusandae vitae animi quo suscipit molestiae inventore ducimus placeat velit distinctio ad, totam sed dignissimos. Perferendis consequatur, libero unde saepe, repellat ad, sunt quam doloremque delectus numquam at soluta iusto ipsum ut voluptate minus? Culpa ipsam minus illum voluptatum dicta laudantium officia placeat. Numquam, eum odit? voluptatum harum eos dolorem delectus accusantium unde architecto ea iusto tempore ad esse eius est iste nam quo officia dolores. Repudiandae quisquam ullam pariatur ipsa autem accusamus nisi! Id quidem laudantium iure ea illum? Eveniet quidem quisquam eligendi voluptatibus odit quae asperiores ex id recusandae vitae animi quo suscipit molestiae inventore ducimus placeat velit distinctio ad, totam sed dignissimos. Perferendis consequatur, libero unde saepe, repellat ad, sunt quam doloremque delectus numquam at soluta iusto ipsum ut voluptate minus? Culpa ipsam minus illum voluptatum dicta laudantium officia placeat. Numquam, eum odit?', 1, ''),
(5, 'learn digital marketing with us and after also ', 'Lean Javascript Development, Javascript Development, JS Development, Javascript Development Adavnce,\n                Learn Each Module of JavaScript & More!', 'English', 'Intermediate', 2, 'node js development ', 'uploads/Best 5 Website Optimization Tips Optimizing Websites for Search Engines.jpg', 'uploads/ Video 2.mp4', 'MUHAMMADUSMAN', '        voluptatum harum eos dolorem\n        delectus accusantium unde architecto ea iusto tempore ad esse eius est iste nam quo officia dolores. Repudiandae\n        quisquam ullam pariatur ipsa autem accusamus nisi! Id quidem laudantium iure ea illum? Eveniet quidem quisquam\n        eligendi voluptatibus odit quae asperiores ex id recusandae vitae animi quo suscipit molestiae inventore ducimus\n        placeat velit distinctio ad, totam sed dignissimos. Perferendis consequatur, libero unde saepe, repellat ad,\n        sunt quam doloremque delectus numquam at soluta iusto ipsum ut voluptate minus? Culpa ipsam minus illum\n        voluptatum dicta laudantium officia placeat. Numquam, eum odit?        voluptatum harum eos dolorem\n        delectus accusantium unde architecto ea iusto tempore ad esse eius est iste nam quo officia dolores. Repudiandae\n        quisquam ullam pariatur ipsa autem accusamus nisi! Id quidem laudantium iure ea illum? Eveniet quidem quisquam\n        eligendi voluptatibus odit quae asperiores ex id recusandae vitae animi quo suscipit molestiae inventore ducimus\n        placeat velit distinctio ad, totam sed dignissimos. Perferendis consequatur, libero unde saepe, repellat ad,\n        sunt quam doloremque delectus numquam at soluta iusto ipsum ut voluptate minus? Culpa ipsam minus illum\n        voluptatum dicta laudantium officia placeat. Numquam, eum odit?', 1, 'Free'),
(9, 'learn javascript development with us', 'javascript development, javascript Advance, Core Javascrit development, Javascript from Scratch and also much more ', 'English', 'Advance', 1, 'javascript development ', 'uploads/asdfgh.jpg', 'uploads/ Video 2.mp4', 'MUHAMMADUSMAN', '', 1, ''),
(10, 'learn Advanced web developemnt with node js', 'development with node js , node js development, node js with Javascript, Advance nodejs development and much more!', 'English', 'Beigner', 1, 'node js development ', 'uploads/ad p1.jpg', 'uploads/20220829_072647.mp4', 'MUHAMMADUSMAN', '<b>Lorem ipsum dolor sit amet consectetur, adipisicing elit. <div> Ex illo vitae ipsum, praesentium dolorem exercitationem iste,&nbsp;</b> incidunt, eos veritatis dolor delectus pariatur eaque sint numquam dicta at est temporibus culpa velit unde consequuntur officiis! Animi facilis minus possimus architecto quos. Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis, quia repudiandae! Ex repellat, quo tenetur veritatis ullam illum aliquam cumque animi ipsum ducimus, labore consequatur unde ipsam illo neque accusamus, sed error autem fuga omnis. Inventore. </div>', 1, ''),
(12, 'learn javascript development with us', 'development with node js, development with node js, development with node js, development with node js and much more ', 'English', 'Beigner', 1, 'node js development ', 'uploads/as.jpg', 'uploads/ video 1.mp4', 'MUHAMMADUSMAN', 'none here ti agagaga gdhsbshus iidjdijdijdidj ayaaavyavayvaa&nbsp;', 1, 'Free'),
(13, 'learn Advanced web developemnt with node js', 'development with node js, development with node js, development with node js, development with node js, and much more ', 'English', 'Intermediate', 4, 'node js development ', 'uploads/download (2).jpg', 'uploads/ video 1.mp4', 'MUHAMMADUSMAN', 'Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,&nbsp;Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,&nbsp;Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,', 1, 'Free'),
(14, 'learn digital marketing with us', 'learn digital marketing, learn digital marketing, learn digital marketing and much more!', 'English', 'Beigner', 2, 'digital marketing ', 'uploads/download (3).jpg', 'uploads/ video 1.mp4', 'MUHAMMADUSMAN', '<b>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</b><div><b>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></b></div><div><b>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></b></div><div><b>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</b><br></div>', 1, ''),
(15, 'learn Advanced web developemnt with node js', 'development with node js, development with node js, development with node js, development with node js, and much more!', 'English', 'Intermediate', 3, 'node js development ', 'uploads/asdfgh.jpg', 'uploads/ Video 2.mp4', 'MUHAMMADUSMAN', '<b>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</b><div><b>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></b></div><div><b>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></b></div><div><b>Repellat mollitia autem sed repellendus iste quae et ullam m</b>agnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></div><div>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></div><div>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></div><div>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></div>', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `cources_categories`
--

CREATE TABLE `cources_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cources_categories`
--

INSERT INTO `cources_categories` (`category_id`, `category_name`) VALUES
(1, 'Development '),
(2, 'Marketing '),
(3, 'IT $ Software'),
(4, 'Office Productivity'),
(5, 'Busniess'),
(6, 'Machine Learning & AI');

-- --------------------------------------------------------

--
-- Table structure for table `cource_details`
--

CREATE TABLE `cource_details` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(225) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cource_details`
--

INSERT INTO `cource_details` (`course_id`, `course_name`, `category`) VALUES
(1, 'learn javascript development with us ', 2),
(2, 'learn javascript development with us ', 1),
(3, 'learn digital marketing with us ', 2),
(4, 'learn Fundamentals of Artificial Intelligence with us  ', 6),
(5, 'learn MS word and PPTS with adavance Excell ', 4),
(6, 'learn javascript development with us ', 1),
(7, 'learn digital marketing with us ', 2),
(8, 'learn web javascript ', 1),
(9, 'learn digital marketing with us ', 1),
(10, 'learn digital marketing with us ', 3),
(11, 'learn javascript development with us ', 1),
(12, 'learn javascript development with us ', 1),
(13, 'learn Advanced web developemnt with node js ', 1),
(14, 'learn javascript development with us ', 1),
(15, 'learn Advanced web developemnt with node js ', 1),
(16, 'learn Advanced web developemnt with node js ', 1),
(17, 'learn digital marketing with us ', 2),
(18, 'learn Advanced web developemnt with node js ', 1),
(19, 'learn Advanced web developemnt with node js ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses_lectures`
--

CREATE TABLE `courses_lectures` (
  `lecture_id` int(225) NOT NULL,
  `local1` varchar(100) NOT NULL,
  `youtube1` varchar(150) NOT NULL,
  `article1` varchar(100) NOT NULL,
  `local2` varchar(30) NOT NULL,
  `youtube2` varchar(150) NOT NULL,
  `article2` varchar(30) NOT NULL,
  `local3` varchar(30) NOT NULL,
  `youtube3` varchar(150) NOT NULL,
  `article3` varchar(30) NOT NULL,
  `local4` varchar(30) NOT NULL,
  `youtube4` varchar(150) NOT NULL,
  `article4` varchar(30) NOT NULL,
  `local5` varchar(30) NOT NULL,
  `youtube5` varchar(150) NOT NULL,
  `article5` varchar(30) NOT NULL,
  `local6` varchar(30) NOT NULL,
  `youtube6` varchar(150) NOT NULL,
  `article6` varchar(30) NOT NULL,
  `local7` varchar(30) NOT NULL,
  `youtube7` varchar(150) NOT NULL,
  `article7` varchar(30) NOT NULL,
  `local8` varchar(30) NOT NULL,
  `youtube8` varchar(150) NOT NULL,
  `article8` varchar(30) NOT NULL,
  `local9` varchar(30) NOT NULL,
  `youtube9` varchar(150) NOT NULL,
  `article9` varchar(30) NOT NULL,
  `local10` varchar(30) NOT NULL,
  `youtube10` varchar(150) NOT NULL,
  `article10` varchar(30) NOT NULL,
  `section_id` int(225) NOT NULL,
  `courses_id` int(225) NOT NULL,
  `requirments_id` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses_lectures`
--

INSERT INTO `courses_lectures` (`lecture_id`, `local1`, `youtube1`, `article1`, `local2`, `youtube2`, `article2`, `local3`, `youtube3`, `article3`, `local4`, `youtube4`, `article4`, `local5`, `youtube5`, `article5`, `local6`, `youtube6`, `article6`, `local7`, `youtube7`, `article7`, `local8`, `youtube8`, `article8`, `local9`, `youtube9`, `article9`, `local10`, `youtube10`, `article10`, `section_id`, `courses_id`, `requirments_id`) VALUES
(30, 'cources/20220829_072647.mp4', 'http://localhost/PHP-OOP/PROJECT/instructor/new/course_price.php', 'cources/20220904_082854.mp4', 'cources/ video 1.mp4', 'http://localhost/PHP-OOP/PROJECT/instructor/new/course_price.php', 'cources/ Video 2.mp4', 'cources/ video 3.mp4', 'http://localhost/PHP-OOP/PROJECT/instructor/new/course_price.php', 'cources/ video 4.mp4', 'cources/20220829_072647.mp4', 'http://localhost/PHP-OOP/PROJECT/instructor/new/course_price.php', 'cources/20220829_073823.mp4', 'cources/20220829_072647.mp4', 'http://localhost/PHP-OOP/PROJECT/instructor/new/course_price.php', 'cources/20220904_082854.mp4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 40, 15, 22);

-- --------------------------------------------------------

--
-- Table structure for table `course_prices`
--

CREATE TABLE `course_prices` (
  `prices_id` int(225) NOT NULL,
  `courses_id` int(11) NOT NULL,
  `requirments_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `course_price` varchar(100) NOT NULL,
  `currency` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_prices`
--

INSERT INTO `course_prices` (`prices_id`, `courses_id`, `requirments_id`, `section_id`, `course_price`, `currency`) VALUES
(1, 15, 22, 40, '2300', 'PKR'),
(2, 12, 19, 40, '5.00', '$'),
(3, 10, 9, 40, '5000', 'PKR'),
(4, 9, 8, 40, '10.00', '$'),
(5, 3, 2, 40, '3400', 'PKR'),
(6, 5, 4, 40, '5.00', '$'),
(9, 13, 20, 40, '10000', 'PKR'),
(10, 14, 21, 40, '5000', '$');

-- --------------------------------------------------------

--
-- Table structure for table `course_requirments`
--

CREATE TABLE `course_requirments` (
  `requirments_id` int(11) NOT NULL,
  `course_requirments` longtext NOT NULL,
  `short_description` longtext NOT NULL,
  `course_outcome` longtext NOT NULL,
  `course_includes` longtext NOT NULL,
  `course_specifications` longtext NOT NULL,
  `courses_id` int(11) NOT NULL,
  `last_updated` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_requirments`
--

INSERT INTO `course_requirments` (`requirments_id`, `course_requirments`, `short_description`, `course_outcome`, `course_includes`, `course_specifications`, `courses_id`, `last_updated`) VALUES
(2, '<li>\nLorem ipsum dolor sit amet consectetur adipisicing elit. At commodi magni omnis necessitatibus\n consectetur repudiandae. Iste blanditiis, eum excepturi quia quisquam dolorem\n quos ad, at similique tempore reprehenderit voluptatem provident repellat harum nobis pariatur vero sequi?\n</li>\n<li>\nLorem ipsum dolor sit amet consectetur adipisicing elit. At commodi magni omnis necessitatibus\n consectetur repudiandae. Iste blanditiis, eum excepturi quia quisquam dolorem\n quos ad, at similique tempore reprehenderit voluptatem provident repellat harum nobis pariatur vero sequi?\n</li>\n<li>\nLorem ipsum dolor sit amet consectetur adipisicing elit. At commodi magni omnis necessitatibus\n consectetur repudiandae. Iste blanditiis, eum excepturi quia quisquam dolorem\n quos ad, at similique tempore reprehenderit voluptatem provident repellat harum nobis pariatur vero sequi?\n</li>  <li>\nLorem ipsum dolor sit amet consectetur adipisicing elit. At commodi magni omnis necessitatibus\n consectetur repudiandae. Iste blanditiis, eum excepturi quia quisquam dolorem\n quos ad, at similique tempore reprehenderit voluptatem provident repellat harum nobis pariatur vero sequi?\n</li>\n<li>\nLorem ipsum dolor sit amet consectetur adipisicing elit. At commodi magni omnis necessitatibus\n consectetur repudiandae. Iste blanditiis, eum excepturi quia quisquam dolorem\n quos ad, at similique tempore reprehenderit voluptatem provident repellat harum nobis pariatur vero sequi?\n</li>\n\n', '', '<li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab odio qui ipsam asperiores,  alias nesciunt adipisci dolores ratione deleniti mollitia aspernatur quas, molestiae sit </li> <li> asperiores totam provident dicta reiciendis repudiandae?  Fugiat, earum praesentium? Dicta, quos. Dolore consectetur minus architecto voluptas accusantium incidunt </li>  <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. At commodi magni omnis necessitatibus  consectetur repudiandae. Iste blanditiis, eum excepturi quia quisquam dolorem </li> <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. At commodi magni omnis necessitatibus  consectetur repudiandae. Iste blanditiis, eum excepturi quia quisquam dolorem </li>     <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab odio qui ipsam asperiores,  alias nesciunt adipisci dolores ratione deleniti mollitia aspernatur quas, molestiae sit </li> <li> asperiores totam provident dicta reiciendis repudiandae?  Fugiat, earum praesentium? Dicta, quos. Dolore consectetur minus architecto voluptas accusantium incidunt </li>   <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. At commodi magni omnis necessitatibus  consectetur repudiandae. Iste blanditiis, eum excepturi quia quisquam dolorem </li> <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. At commodi magni omnis necessitatibus  consectetur repudiandae. Iste blanditiis, eum excepturi quia quisquam dolorem </li>     <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. At commodi magni omnis necessitatibus  consectetur repudiandae. Iste blanditiis, eum excepturi quia quisquam dolorem </li>    <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. At commodi magni omnis necessitatibus  consectetur repudiandae. Iste blanditiis, eum excepturi quia quisquam dolorem </li>    <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. At commodi magni omnis necessitatibus  consectetur repudiandae. Iste blanditiis, eum excepturi quia quisquam dolorem </li>    <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. At commodi magni omnis necessitatibus  consectetur repudiandae. Iste blanditiis, eum excepturi quia quisquam dolorem </li>   ', '<li>\n 10 hours on-demand video\n</li>\n<li>\n 1 article\n</li>\n<li>\n 14 downloadable resources\n</li>\n<li>\n Access on TV and Mobile\n</li>\n<li>\n Full lifetime access\n</li>\n<li>\n Certificate of compeletion\n</li>\n', '', 3, '2024-02-10'),
(4, 'none', '', 'none', 'none', 'none', 5, '2024-02-10'),
(8, '<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, tempore? \r\nsit amet consectetur adipisicing elit.\r\nSequi nesciunt repudiandae esse commodi dolorum doloribus quos</li>\r\n<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, tempore? \r\nsit amet consectetur adipisicing elit.\r\nSequi nesciunt repudiandae esse commodi dolorum doloribus quos</li>\r\n<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, tempore? \r\nsit amet consectetur adipisicing elit.\r\nSequi nesciunt repudiandae esse commodi dolorum doloribus quos</li>\r\n<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, tempore? \r\nsit amet consectetur adipisicing elit.\r\nSequi nesciunt repudiandae esse commodi dolorum doloribus quos</li>\r\n<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, tempore? \r\nsit amet consectetur adipisicing elit.\r\nSequi nesciunt repudiandae esse commodi dolorum doloribus quos</li>\r\n<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, tempore? \r\nsit amet consectetur adipisicing elit.\r\nSequi nesciunt repudiandae esse commodi dolorum doloribus quos</li>', '', '<li>\r\n    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, tempore? \r\nsit amet consectetur adipisicing elit.\r\nSequi nesciunt repudiandae esse commodi dolorum doloribus quos\r\nnemo sit eius mollitia numquam iure nihil, explicabo illo ipsum at eum libero labore impedit voluptates voluptatibus\r\nconsequuntur omnis fugiat consequatur! Quas consequatur\r\n</li> <li>\r\n    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, tempore? \r\nsit amet consectetur adipisicing elit.\r\nSequi nesciunt repudiandae esse commodi dolorum doloribus quos\r\nnemo sit eius mollitia numquam iure nihil, explicabo illo ipsum at eum libero labore impedit voluptates voluptatibus\r\nconsequuntur omnis fugiat consequatur! Quas consequatur\r\n</li> <li>\r\n    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, tempore? \r\nsit amet consectetur adipisicing elit.\r\nSequi nesciunt repudiandae esse commodi dolorum doloribus quos\r\nnemo sit eius mollitia numquam iure nihil, explicabo illo ipsum at eum libero labore impedit voluptates voluptatibus\r\nconsequuntur omnis fugiat consequatur! Quas consequatur\r\n</li> <li>\r\n    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, tempore? \r\nsit amet consectetur adipisicing elit.\r\nSequi nesciunt repudiandae esse commodi dolorum doloribus quos\r\nnemo sit eius mollitia numquam iure nihil, explicabo illo ipsum at eum libero labore impedit voluptates voluptatibus\r\nconsequuntur omnis fugiat consequatur! Quas consequatur\r\n</li> <li>\r\n    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, tempore? \r\nsit amet consectetur adipisicing elit.\r\nSequi nesciunt repudiandae esse commodi dolorum doloribus quos\r\nnemo sit eius mollitia numquam iure nihil, explicabo illo ipsum at eum libero labore impedit voluptates voluptatibus\r\nconsequuntur omnis fugiat consequatur! Quas consequatur\r\n</li>', '<li>there us no much course </li>\n<li>there us no much course </li>\n<li>there us no much course </li>\n<li>there us no much course </li>\n<li>there us no much course </li>\n<li>there us no much course </li>', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, tempore? \r\nsit amet consectetur adipisicing elit.\r\nSequi nesciunt repudiandae esse commodi dolorum doloribus quos', 9, '2024-02-14'),
(9, '<li>\r\n    quia repudiandae! Ex repellat, quo tenetur veritatis ullam illum\r\n    aliquam cumque animi ipsum ducimus, labore consequatur unde ipsam illo neque accusamus, sed error autem fuga omnis.\r\n</li>\r\n<li>\r\n    quia repudiandae! Ex repellat, quo tenetur veritatis ullam illum\r\n    aliquam cumque animi ipsum ducimus, labore consequatur unde ipsam illo neque accusamus, sed error autem fuga omnis.\r\n</li>\r\n<li>\r\n    quia repudiandae! Ex repellat, quo tenetur veritatis ullam illum\r\n    aliquam cumque animi ipsum ducimus, labore consequatur unde ipsam illo neque accusamus, sed error autem fuga omnis.\r\n</li>\r\n<li>\r\n    quia repudiandae! Ex repellat, quo tenetur veritatis ullam illum\r\n    aliquam cumque animi ipsum ducimus, labore consequatur unde ipsam illo neque accusamus, sed error autem fuga omnis.\r\n</li>\r\n<li>\r\n    quia repudiandae! Ex repellat, quo tenetur veritatis ullam illum\r\n    aliquam cumque animi ipsum ducimus, labore consequatur unde ipsam illo neque accusamus, sed error autem fuga omnis.\r\n</li>\r\n<li>\r\n    quia repudiandae! Ex repellat, quo tenetur veritatis ullam illum\r\n    aliquam cumque animi ipsum ducimus, labore consequatur unde ipsam illo neque accusamus, sed error autem fuga omnis.\r\n</li>', '', '<li>\r\n Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex illo vitae ipsum, praesentium dolorem exercitationem iste,\r\nincidunt, eos veritatis dolor delectus pariatur eaque sint numquam dicta at est temporibus culpa velit unde consequuntur\r\nofficiis! Animi facilis minus possimus architecto quos. \r\n</li>  <li>\r\n Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex illo vitae ipsum, praesentium dolorem exercitationem iste,\r\nincidunt, eos veritatis dolor delectus pariatur eaque sint numquam dicta at est temporibus culpa velit unde consequuntur\r\nofficiis! Animi facilis minus possimus architecto quos. \r\n</li> <li>\r\n Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex illo vitae ipsum, praesentium dolorem exercitationem iste,\r\nincidunt, eos veritatis dolor delectus pariatur eaque sint numquam dicta at est temporibus culpa velit unde consequuntur\r\nofficiis! Animi facilis minus possimus architecto quos. \r\n</li> <li>\r\n Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex illo vitae ipsum, praesentium dolorem exercitationem iste,\r\nincidunt, eos veritatis dolor delectus pariatur eaque sint numquam dicta at est temporibus culpa velit unde consequuntur\r\nofficiis! Animi facilis minus possimus architecto quos. \r\n</li> <li>\r\n Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex illo vitae ipsum, praesentium dolorem exercitationem iste,\r\nincidunt, eos veritatis dolor delectus pariatur eaque sint numquam dicta at est temporibus culpa velit unde consequuntur\r\nofficiis! Animi facilis minus possimus architecto quos. \r\n</li> <li>\r\n Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex illo vitae ipsum, praesentium dolorem exercitationem iste,\r\nincidunt, eos veritatis dolor delectus pariatur eaque sint numquam dicta at est temporibus culpa velit unde consequuntur\r\nofficiis! Animi facilis minus possimus architecto quos. \r\n</li>', '<li>quia repudiandae! Ex</li>\r\n<li>quia repudiandae! Ex</li>\r\n<li>quia repudiandae! Ex</li>\r\n<li>quia repudiandae! Ex</li>\r\n<li>quia repudiandae! Ex</li>\r\n<li>quia repudiandae! Ex</li>', 'nothing is this couse dr', 10, '2024-02-14'),
(19, '<li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li>', '<b>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</b><div><b>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</b><br></div>', '<li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li>', '<li>quia repudiandae! Ex</li><li>quia repudiandae! Ex<br></li><li>quia repudiandae! Ex<br></li><li>quia repudiandae! Ex<br></li><li>quia repudiandae! Ex<br></li>', 'noen here ot ', 12, '2024-02-19'),
(20, '<ul><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li></ul>', '<b>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</b><div><b>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</b><br></div>', '<ul><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li></ul>', '<ul><li>quia repudiandae! Ex</li><li>quia repudiandae! Ex<br></li><li>quia repudiandae! Ex<br></li><li>quia repudiandae! Ex<br></li><li>quia repudiandae! Ex<br></li></ul>', 'noen here to define and describe ', 13, '2024-02-19'),
(21, '<ul><li>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</li><li>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</li><li>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li></ul>', '<b>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</b><div><b>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</b><br></div>', '<ul><li>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</li><li>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li><li>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></li></ul>', '<ul><li>quia repudiandae! Ex</li><li>quia repudiandae! Ex<br></li><li>quia repudiandae! Ex<br></li><li>quia repudiandae! Ex<br></li><li>quia repudiandae! Ex<br></li></ul>', 'nothing here to define and describe ', 14, '2024-02-19'),
(22, '<ul><li>Repellat mollitia autem sed repellendus</li></ul>', '<b>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</b><div><b>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</b><br></div>', '<li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li>', '<li>Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed</li>', 'noen ehere ', 15, '2024-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `course_sections`
--

CREATE TABLE `course_sections` (
  `section_id` int(225) NOT NULL,
  `section1` varchar(100) NOT NULL,
  `section2` varchar(100) NOT NULL,
  `section3` varchar(100) NOT NULL,
  `section4` varchar(100) NOT NULL,
  `section5` varchar(100) NOT NULL,
  `section6` varchar(100) NOT NULL,
  `section7` varchar(100) NOT NULL,
  `section8` varchar(100) NOT NULL,
  `courses_id` int(225) NOT NULL,
  `requirments_id` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_sections`
--

INSERT INTO `course_sections` (`section_id`, `section1`, `section2`, `section3`, `section4`, `section5`, `section6`, `section7`, `section8`, `courses_id`, `requirments_id`) VALUES
(40, 'this is a 1st section', 'this is a 2ND section also ', 'this is a 3rd section', 'this is a 4rth section', 'this is a section', '', '', '', 15, 22);

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `enrollment_id` int(225) NOT NULL,
  `courses_id` int(11) NOT NULL,
  `registration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructor_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `headline` varchar(40) NOT NULL,
  `number` varchar(225) NOT NULL,
  `instructor_img` varchar(225) NOT NULL,
  `website` varchar(225) NOT NULL,
  `twitter` varchar(225) NOT NULL,
  `facebook` varchar(225) NOT NULL,
  `linkdin` varchar(225) NOT NULL,
  `youtube` varchar(225) NOT NULL,
  `biography` longtext NOT NULL,
  `registration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructor_id`, `fname`, `lname`, `headline`, `number`, `instructor_img`, `website`, `twitter`, `facebook`, `linkdin`, `youtube`, `biography`, `registration_id`) VALUES
(1, 'MUHAMMAD', 'USMAN', 'Mr instructor ', '+923306', 'uploads/fotor_2023-3-24_13_36_26.jpg', 'http://localhost/PHP-OOP/PROJECT/instructor/dashboard/edit_profile.php', 'http://localhost/PHP-OOP/PROJECT/instructor/dashboard/edit_profile.php', 'http://localhost/PHP-OOP/PROJECT/instructor/dashboard/edit_profile.php', 'http://localhost/PHP-OOP/blog-practise-oop/admin/index.php', 'http://localhost/PHP-OOP/blog-practise-oop/admin/index.php', 'none here to describe ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `Q$A` int(11) NOT NULL,
  `quiz_section_name` varchar(150) NOT NULL,
  `quiz_title` varchar(150) NOT NULL,
  `question1` varchar(100) NOT NULL,
  `1A` varchar(20) NOT NULL,
  `1B` varchar(20) NOT NULL,
  `1C` varchar(20) NOT NULL,
  `1D` varchar(20) NOT NULL,
  `question2` varchar(100) NOT NULL,
  `2A` varchar(20) NOT NULL,
  `2B` varchar(20) NOT NULL,
  `2C` varchar(20) NOT NULL,
  `2D` varchar(20) NOT NULL,
  `question3` varchar(100) NOT NULL,
  `3A` varchar(20) NOT NULL,
  `3B` varchar(20) NOT NULL,
  `3C` varchar(20) NOT NULL,
  `3D` varchar(20) NOT NULL,
  `question4` varchar(100) NOT NULL,
  `4A` varchar(20) NOT NULL,
  `4B` varchar(20) NOT NULL,
  `4C` varchar(20) NOT NULL,
  `4D` varchar(20) NOT NULL,
  `question5` varchar(100) NOT NULL,
  `5A` varchar(20) NOT NULL,
  `5B` varchar(20) NOT NULL,
  `5C` varchar(20) NOT NULL,
  `5D` varchar(20) NOT NULL,
  `question6` varchar(100) NOT NULL,
  `6A` varchar(20) NOT NULL,
  `6B` varchar(20) NOT NULL,
  `6C` varchar(20) NOT NULL,
  `6D` varchar(20) NOT NULL,
  `question7` varchar(100) NOT NULL,
  `7A` varchar(20) NOT NULL,
  `7B` varchar(20) NOT NULL,
  `7C` varchar(20) NOT NULL,
  `7D` varchar(20) NOT NULL,
  `question8` varchar(100) NOT NULL,
  `8A` varchar(20) NOT NULL,
  `8B` varchar(20) NOT NULL,
  `8C` varchar(20) NOT NULL,
  `8D` varchar(20) NOT NULL,
  `question9` varchar(100) NOT NULL,
  `9A` varchar(20) NOT NULL,
  `9B` varchar(20) NOT NULL,
  `9C` varchar(20) NOT NULL,
  `9D` varchar(20) NOT NULL,
  `question10` varchar(100) NOT NULL,
  `10A` varchar(20) NOT NULL,
  `10B` varchar(20) NOT NULL,
  `10C` varchar(20) NOT NULL,
  `10D` varchar(20) NOT NULL,
  `cources_id` int(225) NOT NULL,
  `requirments_id` int(225) NOT NULL,
  `section_id` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`Q$A`, `quiz_section_name`, `quiz_title`, `question1`, `1A`, `1B`, `1C`, `1D`, `question2`, `2A`, `2B`, `2C`, `2D`, `question3`, `3A`, `3B`, `3C`, `3D`, `question4`, `4A`, `4B`, `4C`, `4D`, `question5`, `5A`, `5B`, `5C`, `5D`, `question6`, `6A`, `6B`, `6C`, `6D`, `question7`, `7A`, `7B`, `7C`, `7D`, `question8`, `8A`, `8B`, `8C`, `8D`, `question9`, `9A`, `9B`, `9C`, `9D`, `question10`, `10A`, `10B`, `10C`, `10D`, `cources_id`, `requirments_id`, `section_id`) VALUES
(3, 'this is also a section', 'A quick quiz ', 'question1', 'a', 'b', 'c', 'd', 'this si 2nd question ', 'a', 'b', 'c', 'd', 'this is a 3rd question ', 'A', 'B', 'C', 'D', 'this is a 4rth question ', 'A', 'B', 'C', 'D', 'this is a 4rth question ', 'A', 'B', 'C', 'D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15, 22, 40);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `registration_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`registration_id`, `email`, `username`, `password`) VALUES
(1, 'osman@gmail.com', 'Osman', '$2y$10$0uyaCVQBHyUfu4l.QbjtBe9XJ4S8Ld82lcUeBA5GhT3uwqhIBUZUy'),
(2, 'usman@gmail.com', 'usman', '$2y$10$M7OnI63aFKhy2R4XcG4lpOHClBIJVG8/1GnTnLaiORl2BDUa13k0m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assingments`
--
ALTER TABLE `assingments`
  ADD PRIMARY KEY (`QA_id`),
  ADD KEY `fk-key01` (`cources_id`),
  ADD KEY `fk-key02` (`requirments_id`),
  ADD KEY `fk-key03` (`section_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `fk-constraint` (`courses_id`),
  ADD KEY `fk-constraint-2` (`registration_id`);

--
-- Indexes for table `cource`
--
ALTER TABLE `cource`
  ADD PRIMARY KEY (`courses_id`),
  ADD KEY `main_key_1` (`select_category`),
  ADD KEY `main_key_2` (`instructor_id`);

--
-- Indexes for table `cources_categories`
--
ALTER TABLE `cources_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `cource_details`
--
ALTER TABLE `cource_details`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `key_1` (`category`);

--
-- Indexes for table `courses_lectures`
--
ALTER TABLE `courses_lectures`
  ADD PRIMARY KEY (`lecture_id`),
  ADD KEY `key2` (`section_id`),
  ADD KEY `key1` (`courses_id`),
  ADD KEY `key3` (`requirments_id`);

--
-- Indexes for table `course_prices`
--
ALTER TABLE `course_prices`
  ADD PRIMARY KEY (`prices_id`),
  ADD KEY `fk-key-1` (`courses_id`),
  ADD KEY `fk-key-2` (`requirments_id`),
  ADD KEY `fk-key-3` (`section_id`);

--
-- Indexes for table `course_requirments`
--
ALTER TABLE `course_requirments`
  ADD PRIMARY KEY (`requirments_id`),
  ADD KEY `main_key` (`courses_id`);

--
-- Indexes for table `course_sections`
--
ALTER TABLE `course_sections`
  ADD PRIMARY KEY (`section_id`),
  ADD KEY `main_key1` (`courses_id`),
  ADD KEY `main_key2` (`requirments_id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`enrollment_id`),
  ADD KEY `fk-foreign-key-1` (`courses_id`),
  ADD KEY `fk-foreign-key-2` (`registration_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructor_id`),
  ADD KEY `key` (`registration_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`Q$A`),
  ADD KEY `key4` (`requirments_id`),
  ADD KEY `key_main` (`cources_id`),
  ADD KEY `key_secondary` (`section_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`registration_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assingments`
--
ALTER TABLE `assingments`
  MODIFY `QA_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cource`
--
ALTER TABLE `cource`
  MODIFY `courses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cources_categories`
--
ALTER TABLE `cources_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cource_details`
--
ALTER TABLE `cource_details`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `courses_lectures`
--
ALTER TABLE `courses_lectures`
  MODIFY `lecture_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `course_prices`
--
ALTER TABLE `course_prices`
  MODIFY `prices_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course_requirments`
--
ALTER TABLE `course_requirments`
  MODIFY `requirments_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `course_sections`
--
ALTER TABLE `course_sections`
  MODIFY `section_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `enrollment_id` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `Q$A` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `registration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assingments`
--
ALTER TABLE `assingments`
  ADD CONSTRAINT `fk-key01` FOREIGN KEY (`cources_id`) REFERENCES `cource` (`courses_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk-key02` FOREIGN KEY (`requirments_id`) REFERENCES `course_requirments` (`requirments_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk-key03` FOREIGN KEY (`section_id`) REFERENCES `course_sections` (`section_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `fk-constraint` FOREIGN KEY (`courses_id`) REFERENCES `cource` (`courses_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk-constraint-2` FOREIGN KEY (`registration_id`) REFERENCES `registration` (`registration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cource`
--
ALTER TABLE `cource`
  ADD CONSTRAINT `main_key_1` FOREIGN KEY (`select_category`) REFERENCES `cources_categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `main_key_2` FOREIGN KEY (`instructor_id`) REFERENCES `instructor` (`instructor_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cource_details`
--
ALTER TABLE `cource_details`
  ADD CONSTRAINT `key_1` FOREIGN KEY (`category`) REFERENCES `cources_categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses_lectures`
--
ALTER TABLE `courses_lectures`
  ADD CONSTRAINT `key1` FOREIGN KEY (`courses_id`) REFERENCES `cource` (`courses_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `key2` FOREIGN KEY (`section_id`) REFERENCES `course_sections` (`section_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `key3` FOREIGN KEY (`requirments_id`) REFERENCES `course_requirments` (`requirments_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_prices`
--
ALTER TABLE `course_prices`
  ADD CONSTRAINT `fk-key-1` FOREIGN KEY (`courses_id`) REFERENCES `cource` (`courses_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk-key-2` FOREIGN KEY (`requirments_id`) REFERENCES `course_requirments` (`requirments_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk-key-3` FOREIGN KEY (`section_id`) REFERENCES `course_sections` (`section_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_requirments`
--
ALTER TABLE `course_requirments`
  ADD CONSTRAINT `main_key` FOREIGN KEY (`courses_id`) REFERENCES `cource` (`courses_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_sections`
--
ALTER TABLE `course_sections`
  ADD CONSTRAINT `main_key1` FOREIGN KEY (`courses_id`) REFERENCES `cource` (`courses_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `main_key2` FOREIGN KEY (`requirments_id`) REFERENCES `course_requirments` (`requirments_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `fk-foreign-key-1` FOREIGN KEY (`courses_id`) REFERENCES `cource` (`courses_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk-foreign-key-2` FOREIGN KEY (`registration_id`) REFERENCES `registration` (`registration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `key` FOREIGN KEY (`registration_id`) REFERENCES `registration` (`registration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `key4` FOREIGN KEY (`requirments_id`) REFERENCES `course_requirments` (`requirments_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `key_main` FOREIGN KEY (`cources_id`) REFERENCES `cource` (`courses_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `key_secondary` FOREIGN KEY (`section_id`) REFERENCES `course_sections` (`section_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
