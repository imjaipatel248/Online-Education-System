-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 07:44 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_upload`
--

CREATE TABLE `admin_upload` (
  `id` int(200) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `filename` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_upload`
--

INSERT INTO `admin_upload` (`id`, `subject`, `filename`, `description`) VALUES
(34, 'jsp', 'Introduction to Servlet.pdf', '                introduction to servlet'),
(35, 'jsp', 'Web Technology in Java.pdf', '            web technology with java    '),
(36, 'jsp', 'LoginModule_GetPost_ServletConfig_ServletContext.pdf', '             GET POST methods   '),
(37, 'jsp', 'ODBC_Vs_JDBC.pdf', '                jdbc'),
(38, 'jsp', 'Servlet API and Life Cycle.pdf', '                life cycle of servlet'),
(39, 'csa', 'Computer Architecture.pdf', '                architecture'),
(40, 'csa', 'Multipliers.pdf', ' multipliers               '),
(41, 'csa', 'pipeline architecture.pdf', '              pipeline architecture  '),
(43, 'dbms', 'Practice Questions for Relational Algebra and ER Model.pdf', '        practice question        '),
(48, 'dbms', 'Trigger.pdf', '     trigger           '),
(49, 'dbms', 'Indexes-Views.pdf', '      Indexes-Views\r\n          '),
(50, 'dbms', 'Subqueries.pdf', '     subqueries           '),
(53, 'dsa', 'Applications of Minimum Spanning Tree Problem - GeeksforGeeks.pdf', '                minimum spanning tree\r\n'),
(54, 'dsa', 'Bipartite Graph -- from Wolfram MathWorld.pdf', '        Bipertite graph\r\n        '),
(57, 'dsa', 'Disjoint Set (Or Union-Find)  Set 1 (Detect Cycle in an Undirected Graph) - GeeksforGeeks.pdf', '      disjoint          '),
(61, 'daa', 'Branch_and_Bound.pdf', '              b &amp; b  '),
(62, 'daa', 'MatrixChainDp.pdf', '      matrix chain dp  '),
(63, 'dm', 'Solution_Manual_to_Chapter_01.pdf', '             sol of chep 1   '),
(65, 'dm', 'Solution_Manual_to_Chapter_02.pdf', '                  sol of chep 2      '),
(66, 'dm', 'Solution_Manual_to_Chapter_03.pdf', '                  sol of chep 3      ');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `catagory` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catagory`) VALUES
(1, 'dbms'),
(2, 'daa'),
(3, 'dm');

-- --------------------------------------------------------

--
-- Table structure for table `daa`
--

CREATE TABLE `daa` (
  `Question_Id` int(11) NOT NULL,
  `Question` varchar(150) NOT NULL,
  `A` varchar(50) NOT NULL,
  `B` varchar(50) NOT NULL,
  `C` varchar(50) NOT NULL,
  `D` varchar(50) NOT NULL,
  `Answer` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daa`
--

INSERT INTO `daa` (`Question_Id`, `Question`, `A`, `B`, `C`, `D`, `Answer`) VALUES
(1, '1', 'ds', 's', 's', 'dd', 'ds'),
(3, 'qsqwq', '1', '2', '3', '4', '3');

-- --------------------------------------------------------

--
-- Table structure for table `dbms`
--

CREATE TABLE `dbms` (
  `Question_Id` int(11) NOT NULL,
  `Question` varchar(150) NOT NULL,
  `A` varchar(50) NOT NULL,
  `B` varchar(50) NOT NULL,
  `C` varchar(50) NOT NULL,
  `D` varchar(50) NOT NULL,
  `Answer` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbms`
--

INSERT INTO `dbms` (`Question_Id`, `Question`, `A`, `B`, `C`, `D`, `Answer`) VALUES
(1, '54', '65', '2', '3', '5', '3');

-- --------------------------------------------------------

--
-- Table structure for table `dm`
--

CREATE TABLE `dm` (
  `Question_Id` int(11) NOT NULL,
  `Question` varchar(150) NOT NULL,
  `A` varchar(50) NOT NULL,
  `B` varchar(50) NOT NULL,
  `C` varchar(50) NOT NULL,
  `D` varchar(50) NOT NULL,
  `Answer` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dm`
--

INSERT INTO `dm` (`Question_Id`, `Question`, `A`, `B`, `C`, `D`, `Answer`) VALUES
(1, '.,mscm', '1', '2', '4', '6', '2'),
(2, '.,asclasnc', '1', '2', '3', '4', '2'),
(3, '.,asclasnc', '1', '2', '3', '4', '2');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(50) NOT NULL,
  `rating` int(100) NOT NULL,
  `feedback` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `rating`, `feedback`) VALUES
('milan', 4, 'good'),
('akshay', 1, 'worst'),
('Jay', 5, 'good\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` int(200) NOT NULL,
  `link` varchar(500) NOT NULL,
  `branch` varchar(500) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id`, `link`, `branch`, `about`) VALUES
(1, 'https://www.geeksforgeeks.org/c-language-set-1-introduction/', 'c', 'introduction to C'),
(2, 'https://www.tutorialspoint.com/cprogramming/c_data_types.htm', 'c', 'Data types in C'),
(3, 'https://www.tutorialspoint.com/cprogramming/c_functions.htm', 'c', 'functions in c'),
(4, 'https://www.tutorialspoint.com/cprogramming/c_file_io.htm', 'c', 'file handling in c'),
(5, 'https://www.tutorialspoint.com/php/', 'php', 'Introduction'),
(6, 'https://www.tutorialspoint.com/php/php_and_mysql.htm', 'php', 'Php and mysql'),
(7, 'https://www.tutorialspoint.com/php/php_pdf_version.htm', 'php', 'PHP Tutorial in PDF'),
(8, 'https://www.tutorialspoint.com/php/php_functions.htm', 'php', 'PHP - Functions'),
(9, 'https://www.tutorialspoint.com/php/php_get_post.htm', 'php', 'PHP - GET & POST Methods'),
(10, 'https://www.tutorialspoint.com/php/php_decision_making.htm', 'php', 'PHP - Decision Making'),
(11, 'https://www.tutorialspoint.com/java/java_overview.htm', 'java', 'java overview'),
(12, 'https://www.tutorialspoint.com/java/java_environment_setup.htm', 'java', 'java_environment_setup'),
(13, 'https://www.tutorialspoint.com/java/java_basic_syntax.htm', 'java', 'java_basic_syntax'),
(14, 'https://www.tutorialspoint.com/java/java_object_classes.htm', 'java', 'java_object_classes'),
(15, 'https://www.tutorialspoint.com/java/java_constructors.htm', 'java', 'java_constructors'),
(16, 'https://www.tutorialspoint.com/java/java_basic_datatypes.htm', 'java', 'java_basic_datatypes'),
(20, 'https://www.tutorialspoint.com/cplusplus/cpp_overview.htm', 'c++', 'c++ overview'),
(21, 'https://www.tutorialspoint.com/cplusplus/cpp_environment_setup.htm', 'c++', 'c++ environment_setup'),
(22, 'https://www.tutorialspoint.com/cplusplus/cpp_basic_syntax.htm', 'c++', 'c++_basic_syntax'),
(23, 'https://www.tutorialspoint.com/cplusplus/cpp_comments.htm', 'c++', 'c++ comments'),
(24, 'https://www.tutorialspoint.com/cplusplus/cpp_data_types.htm', 'c++', 'c++ data types'),
(25, 'https://www.tutorialspoint.com/cplusplus/cpp_variable_types.htm', 'c++', 'c++ variable types'),
(26, 'https://www.tutorialspoint.com/cplusplus/cpp_variable_scope.htm', 'c++', 'c++ variable scope'),
(27, 'https://www.tutorialspoint.com/cplusplus/cpp_variable_scope.htm', 'c++', 'c++ variable scope');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(767) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `firstname`, `surname`, `gender`, `dob`, `email`) VALUES
('jay248', '38271e80059cd4fe59bcbca52cfe6533', 'Jay', 'patel', 'male', '1999-08-24', 'imjp248@gmail.com'),
('krinish291', '8f455a5854cde1e68b3b452b73c13e96', 'krinish', 'radadiya', 'male', '1999-08-24', 'krinishradadiya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `phpadmin`
--

CREATE TABLE `phpadmin` (
  `adminusername` varchar(50) NOT NULL,
  `adminpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phpadmin`
--

INSERT INTO `phpadmin` (`adminusername`, `adminpassword`) VALUES
('user1', 'user10702');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `catid` int(11) NOT NULL,
  `catagory` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`catid`, `catagory`) VALUES
(1, 'daa'),
(2, 'dbms');

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE `youtube` (
  `id` int(11) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `about` varchar(100) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`id`, `link`, `branch`, `about`) VALUES
(56, 'https://www.youtube.com/embed/oEJMJuFD204', 'dbms', 'what is database'),
(57, 'https://www.youtube.com/embed/wjfeGxqAQOY', 'dbms', 'dbms begineer'),
(58, 'https://www.youtube.com/embed/kMJR5gexfs8', 'dbms', 'ER model in database'),
(59, 'https://www.youtube.com/embed/0DV8EoKZq1Q', 'dbms', 'mapping relation in dbms'),
(60, 'https://www.youtube.com/embed/X3c1phdyjbU', 'dbms', 'functional dependancy'),
(61, 'https://www.youtube.com/embed/k5WZ9MJTA_Y', 'dbms', 'sql introduction'),
(62, 'https://www.youtube.com/embed/StLSP-v3LdE', 'dsa', 'what is data-stucture'),
(63, 'https://www.youtube.com/embed/0IAPZzGSbME', 'dsa', 'introduction to algorithm'),
(64, 'https://www.youtube.com/embed/9TlHvipP5yA', 'dsa', 'time-complexity of algorithm'),
(65, 'https://www.youtube.com/embed/2Rr2tW9zvRg', 'daa', 'divide and conquer'),
(67, 'https://www.youtube.com/embed/A03oI0znAoc', 'daa', 'asymptotic notations'),
(68, 'https://www.youtube.com/embed/mB5HXBb_HY8', 'dsa', 'merge sort'),
(69, 'https://www.youtube.com/embed/oTTzNMHM05I', 'daa', 'knapsack using greedy'),
(70, 'https://www.youtube.com/embed/XB4MIexjvY0', 'dsa', 'dijkstra algorithm'),
(71, 'https://www.youtube.com/embed/prx1psByp7U', 'daa', 'matrix multiplication'),
(72, 'https://www.youtube.com/embed/jDM6_TnYIqE', 'dsa', 'AVL'),
(73, 'https://www.youtube.com/embed/1FEP_sNb62k', 'daa', 'tsp problem'),
(74, 'https://www.youtube.com/embed/e2cF8a5aAhE', 'daa', 'NP-H problems'),
(75, 'https://www.youtube.com/embed/f7mNuQkPvc4', 'dm', 'relation in DM'),
(76, 'https://www.youtube.com/embed/WzHvDntKta4', 'dm', 'poset'),
(77, 'https://www.youtube.com/embed/pWXYI_DBuUY', 'dm', 'bollean algebra'),
(78, 'https://www.youtube.com/embed/U9UEwLY4ELw', 'dm', 'group '),
(79, 'https://www.youtube.com/embed/xlWdfTRY5vs', 'dm', 'euler graph'),
(81, 'https://www.youtube.com/embed/th2wcy0zJ-o', 'csa', 'pipeline'),
(82, 'https://www.youtube.com/embed/1A_NcXxdoCc', 'csa', 'hamming code'),
(83, 'https://www.youtube.com/embed/MxvZQLR6zqM', 'csa', 'control design '),
(84, 'https://www.youtube.com/embed/MeD8iWb8wlo', 'csa', 'booths'),
(85, 'https://www.youtube.com/embed/ltvpkuQRZao', 'csa', 'DMA'),
(86, 'https://www.youtube.com/embed/Ub4VVDGLJx0', 'csa', 'page replacement'),
(87, 'https://www.youtube.com/embed/40KM8IdneLg', 'jsp', 'intro'),
(89, 'https://www.youtube.com/embed/UH6NTD7995s', 'jsp', 'scriptlets'),
(90, 'https://www.youtube.com/embed/DmakgNe_dKg', 'jsp', 'jsp1'),
(91, 'https://www.youtube.com/embed/DmakgNe_dKg', 'jsp', 'jsp2'),
(92, 'https://www.youtube.com/embed/hyd7cooCv9s', 'jsp', 'jsp3'),
(93, 'https://www.youtube.com/embed/ou2ZYkol4NI', 'c', 'control statement'),
(94, 'https://www.youtube.com/embed/kipU4sdlpnU', 'c', 'armstrong number'),
(95, 'https://www.youtube.com/embed/Ranc3VvjI88', 'c', 'structure in c'),
(96, 'https://www.youtube.com/embed/pv1C0_6k78A', 'java', 'Left shift and right shift'),
(97, 'https://www.youtube.com/embed/zFORKqC4lKA', 'java', 'switch case in java'),
(98, 'https://www.youtube.com/embed/tt_astMjep0', 'java', 'encapsalusion in java'),
(99, 'https://www.youtube.com/embed/TMh91DIR-A0', 'java', 'interface in java'),
(100, 'https://www.youtube.com/embed/z600MQdQ9lg', 'c++', 'cvariables and data types in java'),
(101, 'https://www.youtube.com/embed/kzDqaBgyVEE', 'c++', 'pointers in c++'),
(102, 'https://www.youtube.com/embed/BsYvWqDihGU', 'c++', 'object oriented'),
(103, 'https://www.youtube.com/embed/zsqhrxlp-Fo', 'c++', 'inheritance and polymorphism'),
(104, 'https://www.youtube.com/embed/-nQHIE0LIDE', 'php', 'operators in php'),
(105, 'https://www.youtube.com/embed/jort8_4U-88', 'php', 'session and cookie'),
(106, 'https://www.youtube.com/embed/ILyf16MEvHM', 'php', 'database in php'),
(107, 'https://www.youtube.com/embed/JaRq73y5MJk', 'php', 'upload'),
(108, 'https://www.youtube.com/embed/In5NBIRfMrQ', 'php', 'regex in php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_upload`
--
ALTER TABLE `admin_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `daa`
--
ALTER TABLE `daa`
  ADD PRIMARY KEY (`Question_Id`);

--
-- Indexes for table `dbms`
--
ALTER TABLE `dbms`
  ADD PRIMARY KEY (`Question_Id`);

--
-- Indexes for table `dm`
--
ALTER TABLE `dm`
  ADD PRIMARY KEY (`Question_Id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_upload`
--
ALTER TABLE `admin_upload`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `daa`
--
ALTER TABLE `daa`
  MODIFY `Question_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dbms`
--
ALTER TABLE `dbms`
  MODIFY `Question_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dm`
--
ALTER TABLE `dm`
  MODIFY `Question_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
