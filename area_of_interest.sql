-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 06:46 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `area_of_interest`
--

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `feature_id` int(11) NOT NULL,
  `feature_name` varchar(50) DEFAULT NULL,
  `feature_variable` varchar(10) DEFAULT NULL,
  `feature_form_input` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`feature_id`, `feature_name`, `feature_variable`, `feature_form_input`) VALUES
(1, 'IPK', 'F1', 'input'),
(2, 'Dosen Pembimbing 1', 'F2', 'select'),
(3, 'Konsep Pemrograman', 'F3', 'subject'),
(4, 'Pengantar Teknologi Web', 'F4', 'subject'),
(5, 'Basis Data', 'F5', 'subject'),
(6, 'Pemrograman Berorientasi Objek', 'F6', 'subject'),
(7, 'Struktur Data', 'F7', 'subject'),
(8, 'Jaringan Komputer dan Komunikasi Data', 'F8', 'subject'),
(9, 'Bahasa Kueri Terstruktur', 'F9', 'subject'),
(10, 'Sistem Informasi Geografis', 'F10', 'subject'),
(11, 'Metode Numerik', 'F11', 'subject'),
(12, 'Pemrograman Web', 'F12', 'subject'),
(13, 'Analisis dan Perancangan Sistem', 'F13', 'subject'),
(14, 'Interaksi Manusia dan Komputer', 'F14', 'subject'),
(15, 'Komputasi Awan', 'F15', 'subject'),
(16, 'Rekayasa Perangkat Lunak', 'F16', 'subject'),
(17, 'Kecerdasan Buatan', 'F17', 'subject'),
(18, 'Desain Web', 'F18', 'subject'),
(19, 'Sistem Penunjang Keputusan', 'F19', 'subject'),
(20, 'Jenis Kelamin', 'F20', 'select'),
(21, 'Dosen Pembimbing 2', 'F21', 'select'),
(22, 'Platform', 'F22', 'select');

-- --------------------------------------------------------

--
-- Table structure for table `features_options`
--

CREATE TABLE `features_options` (
  `feature_detail_id` int(11) NOT NULL,
  `feature_id` int(11) DEFAULT NULL,
  `option_name` varchar(50) DEFAULT NULL,
  `option_value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features_options`
--

INSERT INTO `features_options` (`feature_detail_id`, `feature_id`, `option_name`, `option_value`) VALUES
(1, 20, 'Laki-laki', 1),
(2, 20, 'Perempuan', 2),
(3, 2, 'Husnul Khatimi, S.T., M.T', 1),
(4, 2, 'Yuslena Sari, S.Kom., M.Kom', 2),
(5, 2, 'Muhammad Alkaff, S.Kom., M.Kom', 3),
(6, 2, 'Juhriyansyah Dalle, Ph.D', 4),
(7, 2, 'Eka Setya Wijaya, S.T., M.Kom', 5),
(8, 2, 'Lainnya', 0),
(9, 21, 'Husnul Khatimi, S.T., M.T', 1),
(10, 21, 'Yuslena Sari, S.Kom., M.Kom', 2),
(11, 21, 'Muhammad Alkaff, S.Kom., M.Kom', 3),
(12, 21, 'Juhriyansyah Dalle, Ph.D', 4),
(13, 21, 'Eka Setya Wijaya, S.T., M.Kom', 5),
(14, 21, 'Lainnya', 0),
(15, 22, 'Tanpa platform', 0),
(16, 22, 'Website', 1),
(17, 22, 'Mobile', 2),
(18, 22, 'Desktop', 3),
(19, 22, 'Mikrokontroller', 4);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `result_id` int(11) NOT NULL,
  `result_name` varchar(50) DEFAULT NULL,
  `result_description` varchar(500) DEFAULT NULL,
  `result_icon` varchar(20) DEFAULT 'it.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`result_id`, `result_name`, `result_description`, `result_icon`) VALUES
(1, 'Pengolah Citra Digital', 'Pengolahan Citra Digital (Digital Image Processing) merupakan bidang ilmu yang mempelajari tentang bagaimana suatu citra itu dibentuk, diolah, dan dianalisis sehingga menghasilkan informasi yang dapat dipahami oleh manusia.', 'pcd.png'),
(2, 'Sistem Informasi Geografis', 'Sistem Informasi Georafis (Georaphic Information Sistem) adalah merupakan suatu sistem informasi yang berbasis komputer, yang dirancang untuk bekerja dengan menggunakan data yang memiliki informasi spasial (bereferensi keruangan).', 'gis.png'),
(3, 'Mikrokontroler', 'Mikrokontroler adalah bidang ilmu keteknikan yang mempelajari tentang pengontrolan alat elektronika yang mengkombinasikan hardware (rangkaian elektronika) dengan software (pemrograman).', 'mikro.png'),
(4, 'Sistem Cerdas', 'Sistem cerdas adalah sistem yang dapat mengadopsi sebagaian kecil dari tingkat kecerdasan manusia untuk berinteraksi dengan keadaan eksternal suatu sistem. ', 'ai.png'),
(5, 'Sistem Pakar', 'Sistem Pakar adalah suatu perangkat lunak komputer yang dirancang untuk memberikan  pemecahan masalah suatu tenaga ahli didalam suatu bidang.', 'sp.png'),
(6, 'Sistem Penunjang Keputusan', 'Sistem penunjang keputusan adalah suatu sistem yang berbasis komputer yang ditujukan untuk membantu pengambil keputusan dengan memanfaatkan data dan model tertentu untuk memecahkan berbagai persoalan yang tidak terstruktur.', 'dss.png');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Mahasiswa'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `testing_datas`
--

CREATE TABLE `testing_datas` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `feature_id` int(11) DEFAULT NULL,
  `score` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testing_datas`
--

INSERT INTO `testing_datas` (`id`, `user_id`, `feature_id`, `score`) VALUES
(265, 20, 1, 3.82),
(266, 20, 2, 4),
(267, 20, 3, 4),
(268, 20, 4, 4),
(269, 20, 5, 4),
(270, 20, 6, 4),
(271, 20, 7, 4),
(272, 20, 8, 4),
(273, 20, 9, 4),
(274, 20, 10, 4),
(275, 20, 11, 4),
(276, 20, 12, 4),
(277, 20, 13, 4),
(278, 20, 14, 4),
(279, 20, 15, 4),
(280, 20, 16, 4),
(281, 20, 17, 4),
(282, 20, 18, 4),
(283, 20, 19, 4),
(284, 20, 20, 1),
(285, 20, 21, 3),
(286, 20, 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `testing_datas_evaluations`
--

CREATE TABLE `testing_datas_evaluations` (
  `id` int(11) NOT NULL,
  `neighbor_id` int(11) DEFAULT NULL,
  `euclidean_distance` double DEFAULT NULL,
  `result_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testing_datas_evaluations`
--

INSERT INTO `testing_datas_evaluations` (`id`, `neighbor_id`, `euclidean_distance`, `result_id`, `user_id`) VALUES
(65, 11, 3.711994171142578, 2, 20),
(66, 10, 3.8704521656036377, 5, 20),
(67, 6, 3.752119302749634, 4, 20),
(68, 3, 3.5752482414245605, 2, 20),
(69, 8, 5.452558994293213, 5, 20),
(70, 14, 5.503780364990234, 3, 20),
(71, 16, 3.4146742820739746, 1, 20),
(72, 15, 3.7029178142547607, 4, 20),
(73, 5, 5.824302673339844, 3, 20),
(74, 2, 4.223043918609619, 1, 20),
(75, 13, 3.712963819503784, 6, 20),
(76, 12, 4.565084934234619, 4, 20),
(77, 4, 5.707442283630371, 3, 20),
(78, 9, 5.549242973327637, 6, 20),
(79, 1, 4.449056148529053, 1, 20),
(80, 7, 4.077070236206055, 4, 20);

-- --------------------------------------------------------

--
-- Table structure for table `training_datas`
--

CREATE TABLE `training_datas` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `feature_id` int(11) DEFAULT NULL,
  `score` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_datas`
--

INSERT INTO `training_datas` (`id`, `user_id`, `feature_id`, `score`) VALUES
(1, 1, 1, 3.61),
(2, 2, 1, 3.53),
(3, 3, 1, 3.64),
(4, 4, 1, 3.25),
(5, 5, 1, 3.17),
(6, 6, 1, 3.54),
(7, 7, 1, 3.47),
(8, 8, 1, 3.34),
(9, 9, 1, 3.61),
(10, 10, 1, 3.34),
(11, 11, 1, 3.65),
(12, 12, 1, 3.52),
(13, 13, 1, 3.63),
(14, 14, 1, 3.28),
(15, 15, 1, 3.36),
(16, 16, 1, 3.42),
(17, 1, 20, 2),
(18, 2, 20, 2),
(19, 3, 20, 1),
(20, 4, 20, 1),
(21, 5, 20, 1),
(22, 6, 20, 2),
(23, 7, 20, 2),
(24, 8, 20, 1),
(25, 9, 20, 1),
(26, 10, 20, 1),
(27, 11, 20, 1),
(28, 12, 20, 1),
(29, 13, 20, 1),
(30, 14, 20, 1),
(31, 15, 2, 2),
(32, 16, 20, 1),
(33, 1, 2, 1),
(34, 2, 2, 1),
(35, 3, 2, 4),
(36, 4, 2, 4),
(37, 5, 2, 4),
(38, 6, 2, 3),
(39, 7, 2, 1),
(40, 8, 2, 1),
(41, 9, 2, 4),
(42, 10, 2, 1),
(43, 11, 2, 4),
(44, 12, 2, 1),
(45, 13, 2, 4),
(46, 14, 2, 4),
(47, 15, 3, 2.5),
(48, 16, 2, 2),
(49, 1, 21, 3),
(50, 2, 21, 2),
(51, 3, 21, 0),
(52, 4, 21, 0),
(53, 5, 21, 0),
(54, 6, 21, 1),
(55, 7, 21, 3),
(56, 8, 21, 0),
(57, 9, 21, 0),
(58, 10, 21, 3),
(59, 11, 21, 0),
(60, 12, 21, 2),
(61, 13, 21, 0),
(62, 14, 21, 0),
(63, 15, 4, 3.5),
(64, 16, 21, 3),
(65, 1, 22, 0),
(66, 2, 22, 1),
(67, 3, 22, 1),
(68, 4, 22, 4),
(69, 5, 22, 4),
(70, 6, 22, 1),
(71, 7, 22, 1),
(72, 8, 22, 1),
(73, 9, 22, 1),
(74, 10, 22, 2),
(75, 11, 22, 2),
(76, 12, 22, 1),
(77, 13, 22, 1),
(78, 14, 22, 4),
(79, 15, 5, 4),
(80, 16, 22, 1),
(81, 1, 3, 3.5),
(82, 2, 3, 4),
(83, 3, 3, 4),
(84, 4, 3, 2.5),
(85, 5, 3, 2.5),
(86, 6, 3, 4),
(87, 7, 3, 3),
(88, 8, 3, 3.5),
(89, 9, 3, 3.5),
(90, 10, 3, 3),
(91, 11, 3, 4),
(92, 12, 3, 2.5),
(93, 13, 3, 4),
(94, 14, 3, 3),
(95, 15, 6, 4),
(96, 16, 3, 4),
(97, 1, 4, 3.5),
(98, 2, 4, 4),
(99, 3, 4, 4),
(100, 4, 4, 3.5),
(101, 5, 4, 3.5),
(102, 6, 4, 4),
(103, 7, 4, 3.5),
(104, 8, 4, 4),
(105, 9, 4, 4),
(106, 10, 4, 3.5),
(107, 11, 4, 4),
(108, 12, 4, 3.5),
(109, 13, 4, 4),
(110, 14, 4, 3.5),
(111, 15, 7, 3),
(112, 16, 4, 3.5),
(113, 1, 5, 4),
(114, 2, 5, 4),
(115, 3, 5, 4),
(116, 4, 5, 4),
(117, 5, 5, 4),
(118, 6, 5, 4),
(119, 7, 5, 4),
(120, 8, 5, 4),
(121, 9, 5, 4),
(122, 10, 5, 4),
(123, 11, 5, 4),
(124, 12, 5, 4),
(125, 13, 5, 4),
(126, 14, 5, 4),
(127, 15, 8, 4),
(128, 16, 5, 4),
(129, 1, 6, 4),
(130, 2, 6, 4),
(131, 3, 6, 4),
(132, 4, 6, 4),
(133, 5, 6, 4),
(134, 6, 6, 4),
(135, 7, 6, 4),
(136, 8, 6, 4),
(137, 9, 6, 3.5),
(138, 10, 6, 3.5),
(139, 11, 6, 4),
(140, 12, 6, 4),
(141, 13, 6, 4),
(142, 14, 6, 3.5),
(143, 15, 9, 3),
(144, 16, 6, 3.5),
(145, 1, 7, 3),
(146, 2, 7, 3.5),
(147, 3, 7, 3),
(148, 4, 7, 3),
(149, 5, 7, 2.5),
(150, 6, 7, 3),
(151, 7, 7, 3),
(152, 8, 7, 3.5),
(153, 9, 7, 3.5),
(154, 10, 7, 3),
(155, 11, 7, 3.5),
(156, 12, 7, 3),
(157, 13, 7, 3),
(158, 14, 7, 3),
(159, 15, 10, 3.5),
(160, 16, 7, 2.5),
(161, 1, 8, 4),
(162, 2, 8, 4),
(163, 3, 8, 4),
(164, 4, 8, 3.5),
(165, 5, 8, 4),
(166, 6, 8, 4),
(167, 7, 8, 3.5),
(168, 8, 8, 4),
(169, 9, 8, 4),
(170, 10, 8, 4),
(171, 11, 8, 4),
(172, 12, 8, 4),
(173, 13, 8, 4),
(174, 14, 8, 3.5),
(175, 15, 11, 3),
(176, 16, 8, 4),
(177, 1, 9, 3.5),
(178, 2, 9, 3.5),
(179, 3, 9, 4),
(180, 4, 9, 2.5),
(181, 5, 9, 3),
(182, 6, 9, 3.5),
(183, 7, 9, 4),
(184, 8, 9, 3),
(185, 9, 9, 3.5),
(186, 10, 9, 3.5),
(187, 11, 9, 4),
(188, 12, 9, 4),
(189, 13, 9, 3.5),
(190, 14, 9, 2.5),
(191, 15, 12, 4),
(192, 16, 9, 3),
(193, 1, 10, 4),
(194, 2, 10, 3.5),
(195, 3, 10, 3.5),
(196, 4, 10, 4),
(197, 5, 10, 3.5),
(198, 6, 10, 4),
(199, 7, 10, 4),
(200, 8, 10, 3.5),
(201, 9, 10, 0),
(202, 10, 10, 4),
(203, 11, 10, 3.5),
(204, 12, 10, 3.5),
(205, 13, 10, 3.5),
(206, 14, 10, 3.5),
(207, 15, 13, 3.5),
(208, 16, 10, 3.5),
(209, 1, 11, 2.5),
(210, 2, 11, 3),
(211, 3, 11, 4),
(212, 4, 11, 3),
(213, 5, 11, 3),
(214, 6, 11, 2.5),
(215, 7, 11, 2.5),
(216, 8, 11, 3.5),
(217, 9, 11, 4),
(218, 10, 11, 3.5),
(219, 11, 11, 3),
(220, 12, 11, 2.5),
(221, 13, 11, 3.5),
(222, 14, 11, 3),
(223, 15, 14, 3.5),
(224, 16, 11, 4),
(225, 1, 12, 4),
(226, 2, 12, 3.5),
(227, 3, 12, 4),
(228, 4, 12, 3),
(229, 5, 12, 3),
(230, 6, 12, 4),
(231, 7, 12, 3),
(232, 8, 12, 3),
(233, 9, 12, 4),
(234, 10, 12, 3.5),
(235, 11, 12, 3.5),
(236, 12, 12, 4),
(237, 13, 12, 3.5),
(238, 14, 12, 3),
(239, 15, 15, 3.5),
(240, 16, 12, 3.5),
(241, 1, 13, 4),
(242, 2, 13, 4),
(243, 3, 13, 4),
(244, 4, 13, 4),
(245, 5, 13, 4),
(246, 6, 13, 4),
(247, 7, 13, 4),
(248, 8, 13, 4),
(249, 9, 13, 4),
(250, 10, 13, 3.5),
(251, 11, 13, 4),
(252, 12, 13, 4),
(253, 13, 13, 4),
(254, 14, 13, 4),
(255, 15, 16, 4),
(256, 16, 13, 4),
(257, 1, 14, 3.5),
(258, 2, 14, 3.5),
(259, 3, 14, 3.5),
(260, 4, 14, 3),
(261, 5, 14, 3.5),
(262, 6, 14, 3.5),
(263, 7, 14, 3.5),
(264, 8, 14, 3.5),
(265, 9, 14, 3.5),
(266, 10, 14, 3.5),
(267, 11, 14, 3),
(268, 12, 14, 3.5),
(269, 13, 14, 3.5),
(270, 14, 14, 3.5),
(271, 15, 17, 3),
(272, 16, 14, 3),
(273, 1, 15, 3.5),
(274, 2, 15, 3.5),
(275, 3, 15, 4),
(276, 4, 15, 3),
(277, 5, 15, 3),
(278, 6, 15, 4),
(279, 7, 15, 4),
(280, 8, 15, 3.5),
(281, 9, 15, 4),
(282, 10, 15, 3.5),
(283, 11, 15, 4),
(284, 12, 15, 3.5),
(285, 13, 15, 4),
(286, 14, 15, 4),
(287, 15, 18, 3),
(288, 16, 15, 3),
(289, 1, 16, 4),
(290, 2, 16, 4),
(291, 3, 16, 4),
(292, 4, 16, 4),
(293, 5, 16, 4),
(294, 6, 16, 4),
(295, 7, 16, 4),
(296, 8, 16, 4),
(297, 9, 16, 3),
(298, 10, 16, 4),
(299, 11, 16, 4),
(300, 12, 16, 4),
(301, 13, 16, 4),
(302, 14, 16, 4),
(303, 15, 19, 4),
(304, 16, 16, 4),
(305, 1, 17, 2),
(306, 2, 17, 2),
(307, 3, 17, 2.5),
(308, 4, 17, 2),
(309, 5, 17, 2),
(310, 6, 17, 2),
(311, 7, 17, 3.5),
(312, 8, 17, 2),
(313, 9, 17, 3),
(314, 10, 17, 3.5),
(315, 11, 17, 4),
(316, 12, 17, 2),
(317, 13, 17, 2.5),
(318, 14, 17, 2.5),
(319, 15, 20, 2),
(320, 16, 17, 3.5),
(321, 1, 18, 3.5),
(322, 2, 18, 3.5),
(323, 3, 18, 4),
(324, 4, 18, 3.5),
(325, 5, 18, 2.5),
(326, 6, 18, 3.5),
(327, 7, 18, 3.5),
(328, 8, 18, 2),
(329, 9, 18, 2.5),
(330, 10, 18, 3.5),
(331, 11, 18, 3),
(332, 12, 18, 3.5),
(333, 13, 18, 3.5),
(334, 14, 18, 2.5),
(335, 15, 21, 3),
(336, 16, 18, 3),
(337, 1, 19, 4),
(338, 2, 19, 4),
(339, 3, 19, 4),
(340, 4, 19, 4),
(341, 5, 19, 4),
(342, 6, 19, 4),
(343, 7, 19, 4),
(344, 8, 19, 4),
(345, 9, 19, 3.5),
(346, 10, 19, 3.5),
(347, 11, 19, 4),
(348, 12, 19, 4),
(349, 13, 19, 4),
(350, 14, 19, 4),
(351, 15, 22, 1),
(352, 16, 19, 4);

-- --------------------------------------------------------

--
-- Table structure for table `training_datas_results`
--

CREATE TABLE `training_datas_results` (
  `id` int(11) NOT NULL,
  `result_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_datas_results`
--

INSERT INTO `training_datas_results` (`id`, `result_id`, `user_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 3, 4),
(5, 3, 5),
(6, 4, 6),
(7, 4, 7),
(8, 5, 8),
(9, 6, 9),
(10, 5, 10),
(11, 2, 11),
(12, 4, 12),
(13, 6, 13),
(14, 3, 14),
(15, 4, 15),
(16, 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(191) NOT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `fullname`, `role_id`) VALUES
(1, 'coba1', 'coba1', 'NUR LATHIFAH', 1),
(2, 'coba2', 'coba2', 'NOVI RUSIANA', 1),
(3, 'coba3', 'coba3', 'FIRDAUS AKMAL', 1),
(4, 'coba4', 'coba4', 'MUHAMMAD TAMJIDI', 1),
(5, 'coba5', 'coba5', 'MUHAMMAD NUR RIZQAN', 1),
(6, 'coba6', 'coba6', 'DEWI RIZQIA NAJIPAH', 1),
(7, 'coba7', 'coba7', 'WENNY PUSPITA', 1),
(8, 'coba8', 'coba8', 'RYAN MAULANA', 1),
(9, 'coba9', 'coba9', 'AKBAR KURNIAWAN', 1),
(10, 'coba10', 'coba10', 'PUJA DARMAWAN', 1),
(11, 'coba11', 'coba11', 'M RIKO ANSHORI PRASETYA', 1),
(12, 'coba12', 'coba12', 'RIZKY AWLIA FAJRIN', 1),
(13, 'coba13', 'coba13', 'M. RASYID RIDHA', 1),
(14, 'coba14', 'coba14', 'MUHAMMAD SUFYAN', 1),
(15, 'coba15', 'coba15', 'SYARIFAH SORAYA AL BACHASIM', 1),
(16, 'sasukeuchiha', '$2y$10$TJCtoq7o9.dC4PrjdIBUcOQtnun4eeXUMj46QZAaZJuy/sDamvSSO', 'FUNGKY ARYA', 1),
(17, 'soebrotoc', '$2y$10$1Fy5ltZsPhXdJt29LebuL.7CokvjxPO19KoNNVFO34P2ahrxlUJbm', 'Sasuke', 1),
(18, 'addid10', '$2y$10$G2Uvo6K97mx0Cn3qxcfq.ePSjCbQH8g9.KktY9vfQSoZlDo5VgYNu', 'Sasuke', 1),
(19, 'daenarys', '$2y$10$3BoNXiDjkaThRI8szx7H4.bTpgFxSdB3BNewfIMYmlsu1JhtHJGi2', 'daenarys', 1),
(20, 'charly', '$2y$10$GWIFHGbxM56n/pBz.fAFv.GuZdSuA1B1ZM4BBRYPs5AW5Zj0Mlow6', 'charly', 1),
(21, 'rezkyaditya', '$2y$10$gOie8p9bb5eXn.YdQgp57ezGuZlAxs.xBiGEjgdfh7X4AuK37kOEi', 'Sasukeee', 2),
(25, 'mbeeeek', '$2y$10$pBS7q9u.JV/pLHn/QNnbR.zNhe5d5Ww/cQvmxweBCIkcYjgvCapGq', 'mbeeeek', 1),
(26, 'rajawali', '$2y$10$JQAUgCA76BhPQhx7cHR1Bu053FYidStP//Rr1TVwG3WVHunOR8aMm', 'rajawali', 1),
(27, 'ryvka ramadhantie', '$2y$10$SMT04eMwyQh7kdBPQB.n/O0uWH84iVgi1ffPPfThbNAULzYQ0IBNG', 'RYVKA RAMADHANTIE', 1),
(28, 'ryvka ramadhantie', '$2y$10$5AuQ40GFpzVHCRPZWPMAOeMk0PeNdr2eR91Eu.AoTn6ZwRv8q01rG', 'RYVKA RAMADHANTIE', 1),
(29, 'ryvka ramadhantie', '$2y$10$0WIugbx43obMyzlnWFTEqOq/vzYvhd6dvj9TBAFIXd71fJJYnP2Ee', 'RYVKA RAMADHANTIE', 1),
(30, 'syarifah soraya al bachasim', '$2y$10$Me5JZbkgvme3.jRiQM9fYO/R4HhcqCq7aZipo6g7/VGaG7UFtO.AW', 'SYARIFAH SORAYA AL BACHASIM', 1),
(31, 'syarifah soraya al bachasim', '$2y$10$3rtgbrUTE2pz7kcjKqOxAewng2F0ioa2YLgUQBWd4.FKlQWaLm/La', 'SYARIFAH SORAYA AL BACHASIM', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `features_options`
--
ALTER TABLE `features_options`
  ADD PRIMARY KEY (`feature_detail_id`),
  ADD KEY `feature_id` (`feature_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `testing_datas`
--
ALTER TABLE `testing_datas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `feature_id` (`feature_id`);

--
-- Indexes for table `testing_datas_evaluations`
--
ALTER TABLE `testing_datas_evaluations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `result_id` (`result_id`),
  ADD KEY `testing_datas_evaluations_ibfk_1` (`neighbor_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `training_datas`
--
ALTER TABLE `training_datas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `feature_id` (`feature_id`);

--
-- Indexes for table `training_datas_results`
--
ALTER TABLE `training_datas_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `result_id` (`result_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `features_options`
--
ALTER TABLE `features_options`
  MODIFY `feature_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testing_datas`
--
ALTER TABLE `testing_datas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT for table `testing_datas_evaluations`
--
ALTER TABLE `testing_datas_evaluations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `training_datas`
--
ALTER TABLE `training_datas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;

--
-- AUTO_INCREMENT for table `training_datas_results`
--
ALTER TABLE `training_datas_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `features_options`
--
ALTER TABLE `features_options`
  ADD CONSTRAINT `features_options_ibfk_1` FOREIGN KEY (`feature_id`) REFERENCES `features` (`feature_id`);

--
-- Constraints for table `testing_datas`
--
ALTER TABLE `testing_datas`
  ADD CONSTRAINT `testing_datas_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `testing_datas_ibfk_3` FOREIGN KEY (`feature_id`) REFERENCES `features` (`feature_id`);

--
-- Constraints for table `testing_datas_evaluations`
--
ALTER TABLE `testing_datas_evaluations`
  ADD CONSTRAINT `testing_datas_evaluations_ibfk_1` FOREIGN KEY (`neighbor_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `testing_datas_evaluations_ibfk_2` FOREIGN KEY (`result_id`) REFERENCES `results` (`result_id`),
  ADD CONSTRAINT `testing_datas_evaluations_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `training_datas`
--
ALTER TABLE `training_datas`
  ADD CONSTRAINT `training_datas_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `training_datas_ibfk_3` FOREIGN KEY (`feature_id`) REFERENCES `features` (`feature_id`);

--
-- Constraints for table `training_datas_results`
--
ALTER TABLE `training_datas_results`
  ADD CONSTRAINT `training_datas_results_ibfk_2` FOREIGN KEY (`result_id`) REFERENCES `results` (`result_id`),
  ADD CONSTRAINT `training_datas_results_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
