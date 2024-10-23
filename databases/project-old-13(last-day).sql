-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 12:03 AM
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
-- Table structure for table `admin_messages`
--

CREATE TABLE `admin_messages` (
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assingments`
--

CREATE TABLE `assingments` (
  `QA_id` int(11) NOT NULL,
  `assingment_title1` varchar(150) NOT NULL,
  `assingment_file1` varchar(50) NOT NULL,
  `assesment1` varchar(500) NOT NULL,
  `assingment_deadline_01` date NOT NULL,
  `assingment_section_name1` varchar(200) NOT NULL,
  `assingment_title2` varchar(150) NOT NULL,
  `assingment_file2` varchar(50) NOT NULL,
  `assesment2` varchar(500) NOT NULL,
  `assingment_deadline_02` date NOT NULL,
  `assingment_section_name2` varchar(200) NOT NULL,
  `assingment_title3` varchar(150) NOT NULL,
  `assingment_file3` varchar(50) NOT NULL,
  `assesment3` varchar(500) NOT NULL,
  `assingment_deadline_03` date NOT NULL,
  `assingment_section_name3` varchar(200) NOT NULL,
  `assingment_title4` varchar(150) NOT NULL,
  `assingment_file4` varchar(50) NOT NULL,
  `assesment4` varchar(500) NOT NULL,
  `assingment_deadline_04` date NOT NULL,
  `assingment_section_name4` varchar(200) NOT NULL,
  `assingment_title5` varchar(150) NOT NULL,
  `assingment_file5` varchar(50) NOT NULL,
  `assesment5` varchar(500) NOT NULL,
  `assingment_deadline_05` date NOT NULL,
  `assingment_section_name5` varchar(200) NOT NULL,
  `cources_id` int(11) NOT NULL,
  `requirments_id` int(225) NOT NULL,
  `section_id` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assingments`
--

INSERT INTO `assingments` (`QA_id`, `assingment_title1`, `assingment_file1`, `assesment1`, `assingment_deadline_01`, `assingment_section_name1`, `assingment_title2`, `assingment_file2`, `assesment2`, `assingment_deadline_02`, `assingment_section_name2`, `assingment_title3`, `assingment_file3`, `assesment3`, `assingment_deadline_03`, `assingment_section_name3`, `assingment_title4`, `assingment_file4`, `assesment4`, `assingment_deadline_04`, `assingment_section_name4`, `assingment_title5`, `assingment_file5`, `assesment5`, `assingment_deadline_05`, `assingment_section_name5`, `cources_id`, `requirments_id`, `section_id`) VALUES
(2, 'Assingment1 ', 'cources/assingment/ video 1.mp4', 'this is the small assessment to all the stueents ', '2024-06-18', 'introduction', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', 15, 22, 42),
(3, 'Responsive Portfolio Website', 'cources/assingment/', 'Description: Create a personal portfolio website that includes an about section, a projects section, and a contact form. The site should be fully responsive and visually appealing.\r\nRequirements:\r\nUse HTML for structure\r\nStyle with CSS and ensure responsiveness using media queries\r\nImplement interactive elements with JavaScript\r\nSubmission: Provide a GitHub repository link with your project files.', '2024-06-12', 'Frontend Development', 'RESTful API for a Bookstore', 'cources/assingment/', 'Description: Develop a RESTful API for a bookstore that allows users to perform CRUD operations on books.\r\nRequirements:\r\nUse Node.js with Express.js\r\nImplement endpoints for creating, reading, updating, and deleting books\r\nInclude user authentication using JWT\r\nSubmission: Provide a GitHub repository link with your project files and a README with API documentation.', '2024-06-30', 'Backend Development', '', 'cources/assingment/', '', '0000-00-00', '', '', 'cources/assingment/', '', '0000-00-00', '', '', 'cources/assingment/', '', '0000-00-00', '', 18, 25, 44);

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
(7, 9, 2),
(12, 3, 2),
(14, 3, 2),
(23, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comments_id` int(11) NOT NULL,
  `comment` varchar(4000) NOT NULL,
  `courses_id` int(11) NOT NULL,
  `registration_id` int(11) NOT NULL,
  `time_elapsed` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comments_id`, `comment`, `courses_id`, `registration_id`, `time_elapsed`) VALUES
(1, 'here there is the comment here only not the specific content that you are in search of so please choose your content specifially so that there is no any probem arise in the future ', 15, 2, '2024-05-01 16:07:01'),
(2, 'The course is very ellboarated with hands-on exercises. The content is up-to-date and quiz after each section makes learning more fun.', 9, 4, '2024-05-15 16:09:22'),
(8, 'there is a 2nd comment here only ', 15, 2, '2024-05-09 16:07:05'),
(9, 'there is a 3rd comment here only ', 15, 3, '2024-05-07 16:11:02'),
(10, 'there is a 4rth comment here only ', 15, 2, '2024-05-07 11:07:12'),
(11, 'there is a 5th comment here only ', 15, 3, '2024-05-10 16:09:08'),
(12, 'there is a 6th comment here only ', 15, 3, '2024-05-11 16:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupons_id` int(11) NOT NULL,
  `coupon` varchar(50) NOT NULL,
  `coupon_percent` varchar(50) NOT NULL,
  `coupons_quantity` varchar(30) NOT NULL,
  `coupon_expiry` date NOT NULL,
  `coupons_usage_limit` varchar(30) NOT NULL,
  `cou_percentage` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `instructor_id` int(11) NOT NULL,
  `courses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`coupons_id`, `coupon`, `coupon_percent`, `coupons_quantity`, `coupon_expiry`, `coupons_usage_limit`, `cou_percentage`, `user_id`, `instructor_id`, `courses_id`) VALUES
(1, 'AECPQ4', '10', '0', '2024-06-24', '1', '%', 1, 1, 15),
(2, 'Y8ZQ0S', '20', '3', '2024-06-26', '1', '%', 1, 1, 5);

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
  `course_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cource`
--

INSERT INTO `cource` (`courses_id`, `course_title`, `course_subtitle`, `select_language`, `selecting_level`, `select_category`, `primary_taught`, `course_img`, `course_video`, `instructor_name`, `course_description`, `instructor_id`, `course_type`) VALUES
(3, 'learn MS word and PPTS with adavance Excell', 'word excel and pptx,word excel and pptx,word excel and pptx,word excel and ppt and pptx,word excel and pptx,word excel and and pptx,word excel and pptx,word excel and and pptx,word excel and pptx,word excel and', 'English', 'Expert', 4, 'Microsoft Office ', 'uploads/2.jpg', 'uploads/20220829_073823.mp4', 'MUHAMMADUSMAN', 'iure ea illum? Eveniet quidem quisquam eligendi voluptatibus odit quae asperiores ex id recusandae vitae animi quo suscipit molestiae inventore ducimus placeat velit distinctio ad, totam sed dignissimos. Perferendis consequatur, libero unde saepe, repellat ad, sunt quam doloremque delectus numquam at soluta iusto ipsum ut voluptate minus? Culpa ipsam minus illum voluptatum dicta laudantium officia placeat. Numquam, eum odit? voluptatum harum eos dolorem delectus accusantium unde architecto ea iusto tempore ad esse eius est iste nam quo officia dolores. Repudiandae quisquam ullam pariatur ipsa autem accusamus nisi! Id quidem laudantium iure ea illum? Eveniet quidem quisquam eligendi voluptatibus odit quae asperiores ex id recusandae vitae animi quo suscipit molestiae inventore ducimus placeat velit distinctio ad, totam sed dignissimos. Perferendis consequatur, libero unde saepe, repellat ad, sunt quam doloremque delectus numquam at soluta iusto ipsum ut voluptate minus? Culpa ipsam minus illum voluptatum dicta laudantium officia placeat. Numquam, eum odit?', 1, ''),
(5, 'learn digital marketing with us and after also ', 'Lean Javascript Development, Javascript Development, JS Development, Javascript Development Adavnce,\n                Learn Each Module of JavaScript & More!', 'English', 'Intermediate', 2, 'node js development ', 'uploads/Best 5 Website Optimization Tips Optimizing Websites for Search Engines.jpg', 'uploads/ Video 2.mp4', 'MUHAMMADUSMAN', '        voluptatum harum eos dolorem\n        delectus accusantium unde architecto ea iusto tempore ad esse eius est iste nam quo officia dolores. Repudiandae\n        quisquam ullam pariatur ipsa autem accusamus nisi! Id quidem laudantium iure ea illum? Eveniet quidem quisquam\n        eligendi voluptatibus odit quae asperiores ex id recusandae vitae animi quo suscipit molestiae inventore ducimus\n        placeat velit distinctio ad, totam sed dignissimos. Perferendis consequatur, libero unde saepe, repellat ad,\n        sunt quam doloremque delectus numquam at soluta iusto ipsum ut voluptate minus? Culpa ipsam minus illum\n        voluptatum dicta laudantium officia placeat. Numquam, eum odit?        voluptatum harum eos dolorem\n        delectus accusantium unde architecto ea iusto tempore ad esse eius est iste nam quo officia dolores. Repudiandae\n        quisquam ullam pariatur ipsa autem accusamus nisi! Id quidem laudantium iure ea illum? Eveniet quidem quisquam\n        eligendi voluptatibus odit quae asperiores ex id recusandae vitae animi quo suscipit molestiae inventore ducimus\n        placeat velit distinctio ad, totam sed dignissimos. Perferendis consequatur, libero unde saepe, repellat ad,\n        sunt quam doloremque delectus numquam at soluta iusto ipsum ut voluptate minus? Culpa ipsam minus illum\n        voluptatum dicta laudantium officia placeat. Numquam, eum odit?', 1, ''),
(9, 'learn javascript development with us', 'javascript development, javascript Advance, Core Javascrit development, Javascript from Scratch and also much more ', 'English', 'Advance', 1, 'javascript development ', 'uploads/asdfgh.jpg', 'uploads/ Video 2.mp4', 'MUHAMMADUSMAN', '', 1, ''),
(10, 'learn Advanced web developemnt with node js', 'development with node js , node js development, node js with Javascript, Advance nodejs development and much more!', 'English', 'Beigner', 1, 'node js development ', 'uploads/ad p1.jpg', 'uploads/20220829_072647.mp4', 'MUHAMMADUSMAN', '<b>Lorem ipsum dolor sit amet consectetur, adipisicing elit. <div> Ex illo vitae ipsum, praesentium dolorem exercitationem iste,&nbsp;</b> incidunt, eos veritatis dolor delectus pariatur eaque sint numquam dicta at est temporibus culpa velit unde consequuntur officiis! Animi facilis minus possimus architecto quos. Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis, quia repudiandae! Ex repellat, quo tenetur veritatis ullam illum aliquam cumque animi ipsum ducimus, labore consequatur unde ipsam illo neque accusamus, sed error autem fuga omnis. Inventore. </div>', 1, ''),
(12, 'learn javascript development with us', 'development with node js, development with node js, development with node js, development with node js and much more ', 'English', 'Beigner', 1, 'node js development ', 'uploads/as.jpg', 'uploads/ video 1.mp4', 'MUHAMMADUSMAN', 'none here ti agagaga gdhsbshus iidjdijdijdidj ayaaavyavayvaa&nbsp;', 1, 'Free'),
(13, 'learn Advanced web developemnt with node js', 'development with node js, development with node js, development with node js, development with node js, and much more ', 'English', 'Intermediate', 4, 'node js development ', 'uploads/download (2).jpg', 'uploads/ video 1.mp4', 'MUHAMMADUSMAN', 'Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,&nbsp;Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,&nbsp;Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,', 1, 'Free'),
(14, 'learn digital marketing with us', 'learn digital marketing, learn digital marketing, learn digital marketing and much more!', 'English', 'Beigner', 2, 'digital marketing ', 'uploads/download (3).jpg', 'uploads/ video 1.mp4', 'MUHAMMADUSMAN', '<b>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</b><div><b>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></b></div><div><b>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></b></div><div><b>dus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</b><br></div>', 1, ''),
(15, 'learn Advanced web developemnt with node js', 'development with node js, development with node js, development with node js, development with node js, and much more!', 'English', 'Intermediate', 3, 'node js development ', 'uploads/asdfgh.jpg', 'uploads/ Video 2.mp4', 'MUHAMMADUSMAN', '<b>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</b><div><b>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></b></div><div><b>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></b></div><div><b>Repellat mollitia autem sed repellendus iste quae et ullam m</b>agnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></div><div>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></div><div>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></div><div>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,<br></div>', 6, ''),
(18, 'Full Stack Development With Scratch', 'development with node js , node js development, node js with Javascript, Advance nodejs development and much more!', 'English', 'Intermediate', 1, 'full stack development ', 'uploads/asdfgh.jpg', 'uploads/ video 1.mp4', 'MUHAMMADUSMAN', '<div>Dive into the world of web development with our comprehensive Full Stack Development course. This program is meticulously designed to equip you with the skills and knowledge required to build dynamic, interactive, and responsive web applications from scratch.</div><div><b>What You Will Learn:</b></div><div><ul><li><b>Frontend Development</b>: Master the art of crafting beautiful, user-friendly interfaces using HTML, CSS, and JavaScript. Gain proficiency in modern frontend frameworks like React, Angular, or Vue.js.</li><li><b>Backend Development:</b> Understand the core principles of server-side programming with languages like Node.js, Python, Ruby, or PHP. Learn to design robust, scalable backend systems and RESTful APIs.</li><li><b>Database Management:</b> Acquire the skills to work with both SQL and NoSQL databases such as MySQL, PostgreSQL, MongoDB, and Firebase. Learn how to design, query, and manage databases efficiently.</li><li>Version Control &amp; Collaboration: Get hands-on experience with Git and GitHub for version control and collaboration. Learn best practices for working in teams and managing codebases.</li><li><b>DevOps &amp; Deployment:</b> Discover the essentials of DevOps, including continuous integration, continuous deployment (CI/CD), and cloud services like AWS, Azure, or Google Cloud Platform. Learn to deploy and maintain your applications in real-world environments.</li><li><b>Soft Skills &amp; Career Guidance:</b> Enhance your problem-solving abilities, project management skills, and understanding of agile methodologies. Receive guidance on building a compelling portfolio and acing technical interviews.</li></ul></div>', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `cources_categories`
--

CREATE TABLE `cources_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `cateogry_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cources_categories`
--

INSERT INTO `cources_categories` (`category_id`, `category_name`, `cateogry_image`) VALUES
(1, 'Development ', 'categories/programming_6932017.png'),
(2, 'Marketing ', 'categories/digital-marketing.png'),
(3, 'IT & Software', 'categories/settings_4351766.png'),
(4, 'Office Productivity', 'categories/multitasking_6554367.png'),
(5, 'Ethical Hacking ', 'categories/office_6879724.png'),
(6, 'Machine Learning & AI', 'categories/artificial-intelligence_2658345.png');

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
(19, 'learn Advanced web developemnt with node js ', 1),
(20, 'leran modern php development with us', 1),
(21, 'Full Stack Development With Scratch', 1),
(22, 'learn javascript development with us ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `courses_lectures`
--

CREATE TABLE `courses_lectures` (
  `lecture_id` int(225) NOT NULL,
  `section01` varchar(50) NOT NULL,
  `title1A` varchar(50) NOT NULL,
  `lecture1A` varchar(400) NOT NULL,
  `A1` varchar(10) NOT NULL,
  `title1B` varchar(50) NOT NULL,
  `lecture1B` varchar(400) NOT NULL,
  `B1` varchar(10) NOT NULL,
  `title1C` varchar(50) NOT NULL,
  `lecture1C` varchar(400) NOT NULL,
  `C1` varchar(10) NOT NULL,
  `title1D` varchar(50) NOT NULL,
  `lecture1D` varchar(400) NOT NULL,
  `D1` varchar(10) NOT NULL,
  `section02` varchar(50) NOT NULL,
  `title2A` varchar(50) NOT NULL,
  `lecture2A` varchar(400) NOT NULL,
  `A2` varchar(10) NOT NULL,
  `title2B` varchar(50) NOT NULL,
  `lecture2B` varchar(400) NOT NULL,
  `B2` varchar(10) NOT NULL,
  `title2C` varchar(50) NOT NULL,
  `lecture2C` varchar(400) NOT NULL,
  `C2` varchar(10) NOT NULL,
  `title2D` varchar(50) NOT NULL,
  `lecture2D` varchar(400) NOT NULL,
  `D2` varchar(10) NOT NULL,
  `section03` varchar(50) NOT NULL,
  `title3A` varchar(50) NOT NULL,
  `lecture3A` varchar(400) NOT NULL,
  `A3` varchar(10) NOT NULL,
  `title3B` varchar(50) NOT NULL,
  `lecture3B` varchar(400) NOT NULL,
  `B3` varchar(10) NOT NULL,
  `title3C` varchar(50) NOT NULL,
  `lecture3C` varchar(400) NOT NULL,
  `C3` varchar(10) NOT NULL,
  `title3D` varchar(50) NOT NULL,
  `lecture3D` varchar(400) NOT NULL,
  `D3` varchar(10) NOT NULL,
  `section04` varchar(50) NOT NULL,
  `title4A` varchar(50) NOT NULL,
  `lecture4A` varchar(400) NOT NULL,
  `A4` varchar(10) NOT NULL,
  `title4B` varchar(50) NOT NULL,
  `lecture4B` varchar(400) NOT NULL,
  `B4` varchar(10) NOT NULL,
  `title4C` varchar(50) NOT NULL,
  `lecture4C` varchar(400) NOT NULL,
  `C4` varchar(10) NOT NULL,
  `title4D` varchar(100) NOT NULL,
  `lecture4D` varchar(400) NOT NULL,
  `D4` varchar(20) NOT NULL,
  `section05` varchar(250) NOT NULL,
  `title5A` varchar(150) NOT NULL,
  `lecture5A` varchar(200) NOT NULL,
  `A5` varchar(15) NOT NULL,
  `title5B` varchar(150) NOT NULL,
  `lecture5B` varchar(200) NOT NULL,
  `B5` varchar(15) NOT NULL,
  `title5C` varchar(150) NOT NULL,
  `lecture5C` varchar(200) NOT NULL,
  `C5` varchar(15) NOT NULL,
  `title5D` varchar(150) NOT NULL,
  `lecture5D` varchar(200) NOT NULL,
  `D5` varchar(15) NOT NULL,
  `section_id` int(225) NOT NULL,
  `courses_id` int(225) NOT NULL,
  `requirments_id` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses_lectures`
--

INSERT INTO `courses_lectures` (`lecture_id`, `section01`, `title1A`, `lecture1A`, `A1`, `title1B`, `lecture1B`, `B1`, `title1C`, `lecture1C`, `C1`, `title1D`, `lecture1D`, `D1`, `section02`, `title2A`, `lecture2A`, `A2`, `title2B`, `lecture2B`, `B2`, `title2C`, `lecture2C`, `C2`, `title2D`, `lecture2D`, `D2`, `section03`, `title3A`, `lecture3A`, `A3`, `title3B`, `lecture3B`, `B3`, `title3C`, `lecture3C`, `C3`, `title3D`, `lecture3D`, `D3`, `section04`, `title4A`, `lecture4A`, `A4`, `title4B`, `lecture4B`, `B4`, `title4C`, `lecture4C`, `C4`, `title4D`, `lecture4D`, `D4`, `section05`, `title5A`, `lecture5A`, `A5`, `title5B`, `lecture5B`, `B5`, `title5C`, `lecture5C`, `C5`, `title5D`, `lecture5D`, `D5`, `section_id`, `courses_id`, `requirments_id`) VALUES
(33, 'introduction', '', '<iframe src=\"https://www.youtube.com/embed/yQ3FTHdzvdY?si=SRIGlp9CftWHSWM0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'iframe1A', 'second ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.co', 'iframe1B', 'third ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.co', 'iframe1C', 'conclusion', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.co', 'iframe1D', 'This is the 4rth section', 'introduction 2', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.co', 'iframe2A', 'second 2', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.co', 'iframe2B', 'third 2', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.co', 'iframe2C', 'conclusion 2', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.co', 'iframe2D', '', '', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.co', 'iframe3A', '', '', 'iframe3B', '', '', 'iframe3C', '', '', 'iframe3D', '', '', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.co', 'iframe4A', '', '', 'iframe4B', '', '', 'iframe4C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 42, 15, 22),
(35, 'Frontend Development', 'HTML & CSS Basics', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6mbwJ2xhgzM?si=LIbw2ZsSD0lNFbiQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'iframe1A', 'Advanced CSS', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/TeZdo8mx0gc?si=N3OXy5kQJltKb-ki\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'iframe1B', 'JavaScript Fundamentals', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/EZCc_4abdcE?si=Pxd4GBHhpMIan_mA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'iframe1C', '', '', 'iframe1D', '', '', '', 'iframe2A', '', '', 'iframe2B', '', '', 'iframe2C', '', '', 'iframe2D', '', '', '', 'iframe3A', '', '', 'iframe3B', '', '', 'iframe3C', '', '', 'iframe3D', '', '', '', 'iframe4A', '', '', 'iframe4B', '', '', 'iframe4C', '', '', 'iframe4D', '', '', '', 'iframe5A', '', '', 'iframe5B', '', '', 'iframe5C', '', '', 'iframe5D', 44, 18, 25);

-- --------------------------------------------------------

--
-- Table structure for table `courses_status`
--

CREATE TABLE `courses_status` (
  `status_id` int(11) NOT NULL,
  `course_status` varchar(100) NOT NULL,
  `courses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses_status`
--

INSERT INTO `courses_status` (`status_id`, `course_status`, `courses_id`) VALUES
(1, 'Approved', 9),
(2, 'Approved', 10),
(5, 'Approved', 14),
(6, 'Approved', 15),
(7, 'Declined', 3),
(8, 'Approved', 13),
(9, 'Approved', 5),
(15, 'Approved', 18);

-- --------------------------------------------------------

--
-- Table structure for table `course_additional_info`
--

CREATE TABLE `course_additional_info` (
  `info_id` int(11) NOT NULL,
  `course_prerequsites` varchar(400) NOT NULL,
  `final_words` varchar(400) NOT NULL,
  `enterd_main` varchar(400) NOT NULL,
  `cover_planning` varchar(400) NOT NULL,
  `instructor_instructions` varchar(400) NOT NULL,
  `instructor_planings` varchar(400) NOT NULL,
  `courses_id` int(11) NOT NULL,
  `requirments_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_additional_info`
--

INSERT INTO `course_additional_info` (`info_id`, `course_prerequsites`, `final_words`, `enterd_main`, `cover_planning`, `instructor_instructions`, `instructor_planings`, `courses_id`, `requirments_id`, `section_id`) VALUES
(2, '<ul><li>thid si the fdhundfnfnufn sfshfs hbfsfhsf ertbi s fdsfnjfjnfskj</li><li>thid si the fdhundfnfnufn sfshfs hbfsfhsf ertbi s fdsfnjfjnfskj</li><li>thid si the fdhundfnfnufn sfshfs hbfsfhsf ertbi s fdsfnjfjnfskj</li><li>thid si the fdhundfnfnufn sfshfs hbfsfhsf ertbi s fdsfnjfjnfskj</li><li>thid si the fdhundfnfnufn sfshfs hbfsfhsf ertbi s fdsfnjfjnfskj</li><li>thid si the fdhundfnfnufn sfshfs', '<b>nthkthis is usman and i am the student of bsit and now i am studing the this is usman and i am the student of bsit and now i am studing the this is u</b>sman and i am the student of bsit and now i am studing the this is usman and i am the student of bsit and now i am studing the this is usman and i am the student of bsit and now i am studing the this is usman and i am the student of bsit and no', '<ul><li>thid si the fdhundfnfnufn sfshfs hbfsfhsf ertbi s fdsfnjfjnfskj</li><li>thid si the fdhundfnfnufn sfshfs hbfsfhsf ertbi s fdsfnjfjnfskj</li><li>thid si the fdhundfnfnufn sfshfs hbfsfhsf ertbi s fdsfnjfjnfskj</li><li>thid si the fdhundfnfnufn sfshfs hbfsfhsf ertbi s fdsfnjfjnfskj</li><li>thid si the fdhundfnfnufn sfshfs hbfsfhsf ertbi s fdsfnjfjnfskj</li><li>thid si the fdhundfnfnufn sfshfs', '</html>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos labore dolorem dolore ut a! Obcaecati dolores natus porro voluptatibus at totam accusantium laboriosam eveniet eos aperiam. At sed eaque iusto. Blanditiis iure neque ratione aliquam consequuntur beatae autem alias quaerat!thid si the fdhundfnfnufn sfshfs hbfsfhsf ertbi s fdsfnjfjnfskj', '</html>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos labore dolorem dolore ut a! Obcaecati dolores natus porro voluptatibus at totam accusantium laboriosam eveniet eos aperiam. At sed eaque iusto. Blanditiis iure neque ratione aliquam consequuntur beatae autem alias quaerat!', 'nthkthis is usman and i am the student of bsit and now i am studing the this is usman and i am the student of bsit and now i am studing the this is usman and i am the student of bsit and now i am studing the this is usman and i am the student of bsit and now i am studing the this is usman and i am the student of bsit and now i am studing the this is usman and i am the student of bsit and now i am ', 15, 22, 42),
(4, '<p>Sample Content</p><ul><li>Comfortable with basic computer operations and internet usage.</li><li>Familiarity with using modern web browsers like Chrome or Firefox.</li><li>Basic understanding of programming concepts and experience with any programming language.</li><li>Ability to use code editors such as Visual Studio Code or Sublime Text.</li><li>Logical approach to problem-solving.</li><li>St', 'Stay curious and always explore new technologies and trends in web development. Practice coding regularly, as consistent practice is crucial to enhancing your skills. Embrace challenges, viewing problems as opportunities to learn and grow. Collaborate actively with your peers, as engaging with others can lead to a deeper understanding and better learning experiences. Lastly, never give up; persist', '<p>Sample Content</p><ul><li>Covers frontend, backend, database management, and deployment.</li>\r\n<li>Build real-world applications for a robust portfolio.</li>\r\n<li>Learn from industry professionals.</li>\r\n<li>Access materials anytime, anywhere.</li>\r\n<li>Get personalized resume, portfolio, and interview guidance.</li>\r\n<li>Join a supportive network of learners and professionals.</li>\r\n<li>Regula', '', ' Remember to check the course announcements regularly for updates, announcements, and additional resources. Your success is our priority, and we are here to support you every step of the way on your learning journey. Additionally, make use of the peer-to-peer learning environment by engaging with your fellow students through group discussions and collaboration on projects.', 'We are committed to continuously evolving and enhancing the Full Stack Development course to keep pace with the rapidly changing tech landscape. Our future plans include incorporating advanced topics such as machine learning integration, serverless architectures, and microservices. We aim to expand our project-based learning approach by adding more real-world case studies and capstone projects. Ad', 18, 25, 44);

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
(11, 15, 22, 42, '12000', 'PKR'),
(12, 14, 21, 42, '50000', 'PKR'),
(13, 10, 9, 42, '46000', 'PKR'),
(14, 9, 8, 42, '41000', 'PKR'),
(17, 3, 2, 42, '4500', 'PKR'),
(18, 5, 4, 42, '66000', 'PKR'),
(19, 12, 19, 42, 'Free', 'PKR'),
(20, 13, 20, 42, 'Free', 'PKR'),
(22, 18, 25, 44, '30000', 'PKR');

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
(22, '<ul><li>Repellat mollitia autem sed repellendus</li></ul>', '<b>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</b><div><b>Repellat mollitia autem sed repellendus iste quae et ullam magnam fugit earum velit est ipsam tenetur dolorem, omnis aliquam sequi cum reiciendis voluptas culpa? Beatae voluptate excepturi mollitia incidunt nemo quae dolore corporis,</b><br></div>', '<li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed Repellat mollitia autem sed\nRepellat mollitia autem sed Repellat mollitia autem sed</li>', '<li>Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed</li> <li>Repellat mollitia autem sed</li>', 'noen ehere ', 15, '2024-02-20'),
(25, '<li>Use Git for version control, enabling efficient collaboration and code management.</li><li>Navigate and utilize GitHub for repository hosting and project collaboration.</li><li>Use Git for version control, enabling efficient collaboration and code management.</li><li>Navigate and utilize GitHub for repository hosting and project collaboration</li><li>Use Git for version control, enabling efficient collaboration and code management.</li><li>Navigate and utilize GitHub for repository hosting and project collaboration.<li>Use Git for version control, enabling efficient collaboration and code management.</li><li>Navigate and utilize GitHub for repository hosting and project collaboration.</li><li>Use Git for version control, enabling efficient collaboration and code management.</li><li>Navigate and utilize GitHub for repository hosting and project collaboration</li><li>Use Git for version control, enabling efficient collaboration and code management.</li><li>Navigate and utilize GitHub for repository hosting and project collaboration.</li></li>', 'Unlock your potential in web development with our Full Stack Development course. This comprehensive program covers everything from frontend to backend development, database management, and deployment. You will gain hands-on experience with technologies like HTML, CSS, JavaScript, React, Node.js, SQL, and more. With expert instructors, real-world projects, and flexible learning options,&nbsp;be equipped to build dynamic web applications and advance your career in tech. Join us to turn your passion for coding into a professional skill set!', '<div><ul><li>Create visually appealing and responsive web interfaces using HTML, CSS, and JavaScript.</li><li>Develop complex frontend applications with modern frameworks like React, Angular, or Vue.js.</li><li>Understand server-side programming concepts and create secure, scalable backend systems.</li><li>Build and deploy RESTful APIs using languages such as Node.js, Python, Ruby, or PHP.</li><li>Design and manage databases with SQL (MySQL, PostgreSQL) and NoSQL (MongoDB, Firebase) technologies.</li><li>Perform CRUD operations and optimize database performance.</li><li>Use Git for version control, enabling efficient collaboration and code management.</li><li>Navigate and utilize GitHub for repository hosting and project collaboration.</li></ul></div>', '<li>24/7 Free Access</li>\n<li>All Time Availability</li>\n<li>Certifications at course Ends&nbsp</li>\n<li>Enhanced Curriculum</li>\n<li>Better Quality Content</li>', '<div><ul><li>Create appealing and responsive web interfaces using HTML, CSS, and JavaScript.</li><li>Develop complex frontend applications with frameworks like React, Angular, or Vue.js.</li><li>Create appealing and responsive web interfaces using HTML, CSS, and JavaScript.</li><li>Develop complex frontend applications with frameworks like React, Angular, or Vue.js.</li><li>Create appealing and responsive web interfaces using HTML, CSS, and JavaScript.</li><li>Develop complex frontend applications with frameworks like React, Angular, or Vue.js.</li></ul></div>', 18, '2024-06-09');

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
(42, 'Introduction', 'welocm to this world ', 'thi si 3 section', 'This is the 4rth section', 'This is the 5th section', '', '', '', 15, 22),
(44, 'Frontend Development', 'Backend Development', 'Database Management', 'DevOps & Deployment', 'Project Management & Career Preparation', '', '', '', 18, 25);

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `enrollment_id` int(225) NOT NULL,
  `status` varchar(10) NOT NULL,
  `courses_id` int(11) NOT NULL,
  `registration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`enrollment_id`, `status`, `courses_id`, `registration_id`) VALUES
(10, 'Paid', 15, 1),
(11, 'Free', 5, 2),
(12, 'Paid', 14, 4),
(13, 'Paid', 13, 1),
(23, 'Paid', 15, 2),
(24, 'Free', 12, 2),
(25, 'Free', 12, 3),
(26, 'Paid', 15, 7),
(27, 'Free', 12, 1),
(28, 'Paid', 18, 1),
(29, 'Paid', 15, 1),
(30, 'Paid', 15, 1),
(31, 'Paid', 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `favourite_courses`
--

CREATE TABLE `favourite_courses` (
  `favourite_courses_id` int(11) NOT NULL,
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
  `MoreInfo` varchar(400) NOT NULL,
  `teachings` varchar(400) NOT NULL,
  `registration_id` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructor_id`, `fname`, `lname`, `headline`, `number`, `instructor_img`, `website`, `twitter`, `facebook`, `linkdin`, `youtube`, `biography`, `MoreInfo`, `teachings`, `registration_id`, `role`) VALUES
(1, 'MUHAMMAD', 'USMAN', 'Mr instructor ', '+923306', 'uploads/fotor_2023-3-24_13_36_26.jpg', 'http://localhost/PHP-OOP/PROJECT/instructor/dashboard/edit_profile.php', 'http://localhost/PHP-OOP/PROJECT/instructor/dashboard/edit_profile.php', 'http://localhost/PHP-OOP/PROJECT/instructor/dashboard/edit_profile.php', 'http://localhost/PHP-OOP/blog-practise-oop/admin/index.php', 'http://localhost/PHP-OOP/blog-practise-oop/admin/index.php', 'none here to describe ', 'nthkthis is usman and i am the student of bsit and now i am studing the this is usman and i am the student of bsit and now i am studing the this is usman and i am the student of bsit and now i am studing the this is usman and i am the student of bsit and now i am studing the this is usman and i am the student of bsit and now i am studing the this is usman and i am the student of bsit and now ', 'thid si the fdhundfnfnufn sfshfs hbfsfhsf ertbi s fdsfnjfjnfskj', 1, 1),
(6, 'Mark ', 'Wood ', 'Full stack Developer ', '22838297425', 'uploads/image2.jpg', 'http://localhost/PHP-OOP/PROJECT/instructor/dashboard/edit_profile.php', 'http://localhost/PHP-OOP/PROJECT/instructor/dashboard/edit_profile.php', 'http://localhost/PHP-OOP/PROJECT/instructor/dashboard/edit_profile.php', 'http://localhost/PHP-OOP/PROJECT/instructor/dashboard/edit_profile.php', 'http://localhost/PHP-OOP/blog-practise-oop/admin/index.php', 'Mark Wood is a dedicated and experienced educator with over 15 years in the teaching profession. With a Masters degree in Education from the University of California, Mark specializes in innovative teaching methodologies and curriculum development. His passion for lifelong learning and commitment to student success is evident in his engaging and interactive classroom environment. Marks expertise spans a wide range of subjects, with a particular focus on integrating technology into education to enhance learning outcomes.', 'Marks teaching approach is dynamic and student-centered. He emphasizes active learning, encouraging students to participate in discussions, collaborate on projects, and engage in hands-on activities. By incorporating technology, such as interactive simulations and online resources, Mark ensures that lessons are both relevant and stimulating. ', 'In addition to his classroom strategies, Mark places a strong emphasis on building a supportive and inclusive learning environment. He fosters strong relationships with his students, understanding their individual needs and adapting his teaching methods accordingly. ', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `instructor_announcements`
--

CREATE TABLE `instructor_announcements` (
  `announcements_id` int(11) NOT NULL,
  `announcement_title` varchar(300) NOT NULL,
  `announcement_content` mediumtext NOT NULL,
  `announcement_date` date NOT NULL,
  `courses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor_announcements`
--

INSERT INTO `instructor_announcements` (`announcements_id`, `announcement_title`, `announcement_content`, `announcement_date`, `courses_id`) VALUES
(15, 'Here is the Annoucnemnet Title ', 'JJJJJJJJJJJ', '2024-06-12', 18),
(16, 'Here is the Annoucnemnet Title ', 'JJJJJJJJJJJ', '2024-06-12', 18);

-- --------------------------------------------------------

--
-- Table structure for table `instructor_messages`
--

CREATE TABLE `instructor_messages` (
  `ins_message_id` int(11) NOT NULL,
  `message_title` varchar(400) NOT NULL,
  `message_body` varchar(4000) NOT NULL,
  `message_inquery` varchar(100) NOT NULL,
  `registration_id` int(11) NOT NULL,
  `instructor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor_messages`
--

INSERT INTO `instructor_messages` (`ins_message_id`, `message_title`, `message_body`, `message_inquery`, `registration_id`, `instructor_id`) VALUES
(1, 'this is just the title ', 'hello guys you are glad that i am adding the new module here so that we make more engagement in our course and make our learnig fast ', 'Course Announcements', 2, 1),
(2, 'this is just the title ', 'hello guys i am glad to say that i recently added a new module in my vcourse to make more interectivity in out learning and make the course more engagging i hope you will not diappoint me and make the learning with the same enthusiaisam as before you have ', 'Course Announcements', 3, 1),
(3, 'this is just the title ', 'there us nothing to say and told here ', 'Clarifications and Guidance', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications_for_admins`
--

CREATE TABLE `notifications_for_admins` (
  `notify_id` int(11) NOT NULL,
  `message` varchar(600) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications_for_admins`
--

INSERT INTO `notifications_for_admins` (`notify_id`, `message`, `created_at`) VALUES
(2, 'Thanks for making a profile. Your profile is under admin revision. After approval, you will be able to access the dashboard.', '2024-05-21 09:30:24'),
(3, 'Thanks for making a profile. Your profile is under admin revision. After approval, you will be able to access the dashboard.', '2024-05-21 09:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `courses_id` int(11) NOT NULL,
  `emaill` varchar(100) NOT NULL,
  `stripe_token` varchar(200) NOT NULL,
  `payment` varchar(200) NOT NULL,
  `registration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `name`, `courses_id`, `emaill`, `stripe_token`, `payment`, `registration_id`) VALUES
(9, 'Khubaib', 14, 'osman@gmail.com', 'tok_1OsUgrKE6ut2K9RwSgTfiH3Q', '', 1),
(41, 'MUHAMMAD USMAN', 15, 'osman@gmail.com', 'tok_1Osib5KE6ut2K9RwQKlXD5Fi', '', 1),
(42, 'MUHAMMAD USMAN', 14, 'osman@gmail.com', 'tok_1Ow5tLKE6ut2K9RwxHWLCjWo', '', 1),
(43, 'Anwar Shah ', 15, 'osman@gmail.com', 'tok_1PGkWiKE6ut2K9Rw7ivq2c7t', '', 7),
(44, 'Muhammad Usman', 18, 'osman@gmail.com', 'tok_1PQRJ5KE6ut2K9Rwd7RudeXq', '', 1),
(45, 'Muhammad Usman', 15, 'osman@gmail.com', 'tok_1PQxplKE6ut2K9Rw8C4vqB71', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `Q$A` int(11) NOT NULL,
  `quiz_section_name` varchar(150) NOT NULL,
  `quiz_title` varchar(150) NOT NULL,
  `question1` varchar(100) NOT NULL,
  `1A` varchar(10) NOT NULL,
  `1B` varchar(10) NOT NULL,
  `1C` varchar(10) NOT NULL,
  `1D` varchar(10) NOT NULL,
  `option1` varchar(200) NOT NULL,
  `question2` varchar(100) NOT NULL,
  `2A` varchar(20) NOT NULL,
  `2B` varchar(20) NOT NULL,
  `2C` varchar(20) NOT NULL,
  `2D` varchar(20) NOT NULL,
  `option2` varchar(200) NOT NULL,
  `question3` varchar(100) NOT NULL,
  `3A` varchar(20) NOT NULL,
  `3B` varchar(20) NOT NULL,
  `3C` varchar(20) NOT NULL,
  `3D` varchar(20) NOT NULL,
  `option3` varchar(200) NOT NULL,
  `question4` varchar(100) NOT NULL,
  `4A` varchar(20) NOT NULL,
  `4B` varchar(20) NOT NULL,
  `4C` varchar(20) NOT NULL,
  `4D` varchar(20) NOT NULL,
  `option4` varchar(200) NOT NULL,
  `question5` varchar(100) NOT NULL,
  `5A` varchar(20) NOT NULL,
  `5B` varchar(20) NOT NULL,
  `5C` varchar(20) NOT NULL,
  `5D` varchar(20) NOT NULL,
  `option5` varchar(200) NOT NULL,
  `question6` varchar(100) NOT NULL,
  `6A` varchar(20) NOT NULL,
  `6B` varchar(20) NOT NULL,
  `6C` varchar(20) NOT NULL,
  `6D` varchar(20) NOT NULL,
  `option6` varchar(200) NOT NULL,
  `question7` varchar(100) NOT NULL,
  `7A` varchar(20) NOT NULL,
  `7B` varchar(20) NOT NULL,
  `7C` varchar(20) NOT NULL,
  `7D` varchar(20) NOT NULL,
  `option7` varchar(200) NOT NULL,
  `question8` varchar(100) NOT NULL,
  `8A` varchar(20) NOT NULL,
  `8B` varchar(20) NOT NULL,
  `8C` varchar(20) NOT NULL,
  `8D` varchar(20) NOT NULL,
  `option8` varchar(200) NOT NULL,
  `question9` varchar(100) NOT NULL,
  `9A` varchar(20) NOT NULL,
  `9B` varchar(20) NOT NULL,
  `9C` varchar(20) NOT NULL,
  `9D` varchar(20) NOT NULL,
  `option9` varchar(200) NOT NULL,
  `question10` varchar(100) NOT NULL,
  `10A` varchar(20) NOT NULL,
  `10B` varchar(20) NOT NULL,
  `10C` varchar(20) NOT NULL,
  `10D` varchar(20) NOT NULL,
  `option10` varchar(200) NOT NULL,
  `cources_id` int(225) NOT NULL,
  `requirments_id` int(225) NOT NULL,
  `section_id` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`Q$A`, `quiz_section_name`, `quiz_title`, `question1`, `1A`, `1B`, `1C`, `1D`, `option1`, `question2`, `2A`, `2B`, `2C`, `2D`, `option2`, `question3`, `3A`, `3B`, `3C`, `3D`, `option3`, `question4`, `4A`, `4B`, `4C`, `4D`, `option4`, `question5`, `5A`, `5B`, `5C`, `5D`, `option5`, `question6`, `6A`, `6B`, `6C`, `6D`, `option6`, `question7`, `7A`, `7B`, `7C`, `7D`, `option7`, `question8`, `8A`, `8B`, `8C`, `8D`, `option8`, `question9`, `9A`, `9B`, `9C`, `9D`, `option9`, `question10`, `10A`, `10B`, `10C`, `10D`, `option10`, `cources_id`, `requirments_id`, `section_id`) VALUES
(5, 'Introduction', 'this is a testing quiz ', 'question1 ', 'A', 'B', 'C', 'D', '', 'question2', 'A', 'B', 'C', 'D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 15, 22, 42),
(6, 'Backend Development', 'Quiz on Backend Development', 'What is the primary role of a backend server in a web application?', 'Styling we', 'Handling c', 'Managing d', 'Creating a', 'Managing databases and serving client requests', 'Which Node.js framework is commonly used for building web applications and APIs?', 'Django', 'Flask', 'Express.js', 'Spring', 'Express.js', 'What does REST stand for in the context of web services?', 'Representational Sta', 'Remote Server Transa', 'Reliable Secure Tran', 'Randomized Event Sim', 'Representational State Transfer', 'In Node.js, which module is used to handle file operations such as reading and writing files?', 'fs', 'http', 'url', ' path', 'fs', 'What is the purpose of middleware in an Express.js application?', 'To manage database c', 'To process incoming ', 'To render HTML templ', 'To handle client-sid', 'To process incoming requests before they reach the route handlers', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 18, 25, 44);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `registration_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`registration_id`, `email`, `username`, `password`, `role`) VALUES
(1, 'osman@gmail.com', 'Osman', '$2y$10$0uyaCVQBHyUfu4l.QbjtBe9XJ4S8Ld82lcUeBA5GhT3uwqhIBUZUy', 1),
(2, 'usman@gmail.com', 'usman', '$2y$10$M7OnI63aFKhy2R4XcG4lpOHClBIJVG8/1GnTnLaiORl2BDUa13k0m', 2),
(3, 'user@gmail.com', 'User000', '$2y$10$apD514YuKQNsBSS4khgcJOHRSVb2wsUSVfG5PooE6vMbABgg87SzC', 1),
(4, 'user01@gmail.com', 'user01', '$2y$10$M.yMSLhHlFn9BhRuX5Ch/egkAydoQ2SaxQP614ZYTTgSCr.B.9ZzK', 0),
(5, 'hassan@gmail.com', 'Hassan001', '$2y$10$WLS0N1LSrdeQNY3mUiNHHuSO3zRHJEM0FNCA/MEvPZu41O4tXyX0S', 0),
(6, 'allyan@gmail.com', 'allyan', '$2y$10$B1lIkFjtiNL3LqSap0M/oeRLb6GXPl2cv0bKXrEBsQ9fuFBIW9EvW', 0),
(7, 'anwar@gmail.com', 'Anwar1122', '$2y$10$CZj2HteDt16Qhq2ifpAio.BqR0wBT4j0XAFriQ1w.Yg/8ktiWwhKG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `sfname` varchar(100) NOT NULL,
  `slname` varchar(100) NOT NULL,
  `phone` varchar(18) NOT NULL,
  `student_img` varchar(50) NOT NULL,
  `youtube` varchar(400) NOT NULL,
  `linkedin` varchar(400) NOT NULL,
  `registration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `sfname`, `slname`, `phone`, `student_img`, `youtube`, `linkedin`, `registration_id`) VALUES
(1, 'Hassan', 'Bin Tariq ', '02010101010', 'uploads/first-person.jpg', 'http://localhost/PHP-OOP/blog-practise-oop/admin/index.php', 'http://localhost/PHP-OOP/PROJECT/instructor/dashboard/edit_profile.php', 2),
(16, 'Muhammad ', 'Anwar ', '23245666666', '../uploads/testimonial03.png', 'http://localhost/PHP-OOP/blog-practise-oop/admin/index.php', 'http://localhost/PHP-OOP/blog-practise-oop/admin/index.php', 7),
(19, 'Mark ', 'Wood ', '22838297425', 'uploads/image2.jpg', 'http://localhost/PHP-OOP/blog-practise-oop/admin/index.php', 'http://localhost/PHP-OOP/PROJECT/instructor/dashboard/edit_profile.php', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_messages`
--

CREATE TABLE `student_messages` (
  `stu_message_id` int(11) NOT NULL,
  `message_title` varchar(250) NOT NULL,
  `coursess_id` int(11) NOT NULL,
  `message_body` varchar(1000) NOT NULL,
  `message_inquery` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `instructor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_messages`
--

INSERT INTO `student_messages` (`stu_message_id`, `message_title`, `coursess_id`, `message_body`, `message_inquery`, `student_id`, `instructor_id`) VALUES
(2, 'this is just the title ', 15, 'nothing to show here so be quite please ', 'courseCotent', 2, 1),
(3, 'this is just the title ', 15, 'there is the content goes here so dont be more worry about the thinking ', 'courseCotent', 7, 1),
(4, 'Just for overcomming ', 13, 'there is the content goes here so dont be more worry about the thinking ', 'courseCotent', 2, 1),
(5, 'this is just the title ', 15, 'there is no log messgae to show here so get out from here ', 'courseCotent', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_messages`
--
ALTER TABLE `admin_messages`
  ADD PRIMARY KEY (`admin_id`);

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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comments_id`),
  ADD KEY `foreign-key-00` (`courses_id`),
  ADD KEY `foreign-key-001` (`registration_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupons_id`),
  ADD KEY `fk-coupon-key-2` (`instructor_id`),
  ADD KEY `fk-coupon-key-3` (`user_id`),
  ADD KEY `fk-coupon-key-1` (`courses_id`);

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
-- Indexes for table `courses_status`
--
ALTER TABLE `courses_status`
  ADD PRIMARY KEY (`status_id`),
  ADD KEY `my_main_key` (`courses_id`);

--
-- Indexes for table `course_additional_info`
--
ALTER TABLE `course_additional_info`
  ADD PRIMARY KEY (`info_id`),
  ADD KEY `course-key` (`courses_id`),
  ADD KEY `section-key` (`section_id`),
  ADD KEY `requirements-key` (`requirments_id`);

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
-- Indexes for table `favourite_courses`
--
ALTER TABLE `favourite_courses`
  ADD PRIMARY KEY (`favourite_courses_id`),
  ADD KEY `fk-key-01` (`courses_id`),
  ADD KEY `fk-key-02` (`registration_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructor_id`),
  ADD KEY `key` (`registration_id`);

--
-- Indexes for table `instructor_announcements`
--
ALTER TABLE `instructor_announcements`
  ADD PRIMARY KEY (`announcements_id`),
  ADD KEY `foreign-key` (`courses_id`);

--
-- Indexes for table `instructor_messages`
--
ALTER TABLE `instructor_messages`
  ADD PRIMARY KEY (`ins_message_id`),
  ADD KEY `ins-fk-01` (`instructor_id`),
  ADD KEY `ins-fk-02` (`registration_id`);

--
-- Indexes for table `notifications_for_admins`
--
ALTER TABLE `notifications_for_admins`
  ADD PRIMARY KEY (`notify_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `fk-key` (`registration_id`),
  ADD KEY `key-fk` (`courses_id`);

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
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `student-key` (`registration_id`);

--
-- Indexes for table `student_messages`
--
ALTER TABLE `student_messages`
  ADD PRIMARY KEY (`stu_message_id`),
  ADD KEY `stu-key01` (`coursess_id`),
  ADD KEY `stu-key2` (`student_id`),
  ADD KEY `stu-key3` (`instructor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_messages`
--
ALTER TABLE `admin_messages`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assingments`
--
ALTER TABLE `assingments`
  MODIFY `QA_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comments_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupons_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cource`
--
ALTER TABLE `cource`
  MODIFY `courses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cources_categories`
--
ALTER TABLE `cources_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cource_details`
--
ALTER TABLE `cource_details`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `courses_lectures`
--
ALTER TABLE `courses_lectures`
  MODIFY `lecture_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `courses_status`
--
ALTER TABLE `courses_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `course_additional_info`
--
ALTER TABLE `course_additional_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_prices`
--
ALTER TABLE `course_prices`
  MODIFY `prices_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `course_requirments`
--
ALTER TABLE `course_requirments`
  MODIFY `requirments_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `course_sections`
--
ALTER TABLE `course_sections`
  MODIFY `section_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `enrollment_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `favourite_courses`
--
ALTER TABLE `favourite_courses`
  MODIFY `favourite_courses_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `instructor_announcements`
--
ALTER TABLE `instructor_announcements`
  MODIFY `announcements_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `instructor_messages`
--
ALTER TABLE `instructor_messages`
  MODIFY `ins_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notifications_for_admins`
--
ALTER TABLE `notifications_for_admins`
  MODIFY `notify_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `Q$A` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `registration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `student_messages`
--
ALTER TABLE `student_messages`
  MODIFY `stu_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `foreign-key-00` FOREIGN KEY (`courses_id`) REFERENCES `cource` (`courses_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreign-key-001` FOREIGN KEY (`registration_id`) REFERENCES `registration` (`registration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `coupons`
--
ALTER TABLE `coupons`
  ADD CONSTRAINT `fk-coupon-key-1` FOREIGN KEY (`courses_id`) REFERENCES `cource` (`courses_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk-coupon-key-2` FOREIGN KEY (`instructor_id`) REFERENCES `instructor` (`instructor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk-coupon-key-3` FOREIGN KEY (`user_id`) REFERENCES `registration` (`registration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `courses_status`
--
ALTER TABLE `courses_status`
  ADD CONSTRAINT `my_main_key` FOREIGN KEY (`courses_id`) REFERENCES `cource` (`courses_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_additional_info`
--
ALTER TABLE `course_additional_info`
  ADD CONSTRAINT `course-key` FOREIGN KEY (`courses_id`) REFERENCES `cource` (`courses_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requirements-key` FOREIGN KEY (`requirments_id`) REFERENCES `course_requirments` (`requirments_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `section-key` FOREIGN KEY (`section_id`) REFERENCES `course_sections` (`section_id`);

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
-- Constraints for table `favourite_courses`
--
ALTER TABLE `favourite_courses`
  ADD CONSTRAINT `fk-key-01` FOREIGN KEY (`courses_id`) REFERENCES `cource` (`courses_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk-key-02` FOREIGN KEY (`registration_id`) REFERENCES `registration` (`registration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `key` FOREIGN KEY (`registration_id`) REFERENCES `registration` (`registration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `instructor_announcements`
--
ALTER TABLE `instructor_announcements`
  ADD CONSTRAINT `foreign-key` FOREIGN KEY (`courses_id`) REFERENCES `cource` (`courses_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `instructor_messages`
--
ALTER TABLE `instructor_messages`
  ADD CONSTRAINT `ins-fk-01` FOREIGN KEY (`instructor_id`) REFERENCES `instructor` (`instructor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ins-fk-02` FOREIGN KEY (`registration_id`) REFERENCES `registration` (`registration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk-key` FOREIGN KEY (`registration_id`) REFERENCES `registration` (`registration_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `key-fk` FOREIGN KEY (`courses_id`) REFERENCES `cource` (`courses_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `key4` FOREIGN KEY (`requirments_id`) REFERENCES `course_requirments` (`requirments_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `key_main` FOREIGN KEY (`cources_id`) REFERENCES `cource` (`courses_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `key_secondary` FOREIGN KEY (`section_id`) REFERENCES `course_sections` (`section_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student-key` FOREIGN KEY (`registration_id`) REFERENCES `registration` (`registration_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_messages`
--
ALTER TABLE `student_messages`
  ADD CONSTRAINT `stu-key01` FOREIGN KEY (`coursess_id`) REFERENCES `cource` (`courses_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stu-key2` FOREIGN KEY (`student_id`) REFERENCES `registration` (`registration_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stu-key3` FOREIGN KEY (`instructor_id`) REFERENCES `instructor` (`instructor_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
