-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2020 at 04:17 AM
-- Server version: 10.3.22-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heretumc_bars`
--

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `id` int(11) NOT NULL,
  `code_credit` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `credit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `gen_by` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `gen_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `line` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `formula`
--

CREATE TABLE `formula` (
  `id` int(11) NOT NULL,
  `type` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `formula`
--

INSERT INTO `formula` (`id`, `type`, `data`, `created`) VALUES
(1, '9', 'bbbbbbbb', '2019-06-28 03:33:44'),
(3, '9', 'pppppppp', '2019-06-28 03:59:01'),
(4, '9', 'pbppbtpp', '2019-06-28 03:59:09'),
(5, '9', 'bbbbbptp', '2019-06-28 20:27:36'),
(8, '9', 'ptbbpbbp', '2019-06-28 20:39:36'),
(9, '9', 'bptpbpbp', '2019-06-28 20:39:52'),
(14, '9', 'pbpbtpbp', '2019-06-28 21:18:31'),
(15, '9', 'bbbbppbp', '2019-06-28 21:18:42'),
(18, '9', 'tpbbtppp', '2019-06-28 21:37:11'),
(28, '1', 'tppp', '2019-06-28 22:39:38'),
(30, '1', 'bpbp', '2019-06-28 22:46:27'),
(31, '1', 'tpbb', '2019-06-28 22:46:33'),
(48, '9', 'ppbttbbb', '2019-06-28 23:10:01'),
(49, '1', 'pbbp', '2019-06-28 23:57:08'),
(50, '1', 'bbpb', '2019-06-28 23:57:14'),
(63, '9', 'bptppbbp', '2019-06-28 23:58:56'),
(64, '1', 'bptp', '2019-06-28 23:59:20'),
(65, '1', 'pbpb', '2019-06-28 23:59:24'),
(66, '1', 'tbpb', '2019-06-28 23:59:30'),
(67, '1', 'pppb', '2019-06-28 23:59:35'),
(85, '1', 'bbtb', '2019-06-29 00:14:43'),
(88, '1', 'pbtp', '2019-06-29 00:24:25'),
(90, '1', 'bbbb', '2019-07-01 21:58:59'),
(102, '9', 'bbtpppbb', '2019-07-05 01:49:31'),
(103, '9', 'ppbptpbb', '2019-07-05 01:49:37'),
(104, '9', 'bppbbbpb', '2019-07-05 01:49:48'),
(136, '1', 'pptp', '2019-07-10 02:53:37'),
(139, '10', 'pppbbbpb', '2019-09-27 05:28:40'),
(140, '10', 'pppbbbtb', '2019-09-27 05:28:48'),
(141, '10', 'pppbbpbb', '2019-09-27 05:28:53'),
(142, '10', 'pppppppp', '2019-09-27 05:28:57'),
(143, '10', 'bbbbbbbb', '2019-09-27 05:29:00'),
(144, '10', 'pppbpbpp', '2019-09-27 05:29:07'),
(145, '10', 'bpbpbppb', '2019-09-27 05:29:13'),
(146, '10', 'pbbbpbpb', '2019-09-27 05:29:24'),
(147, '10', 'bbpbbppb', '2019-09-27 05:29:30'),
(148, '10', 'ppbbpppp', '2019-09-27 05:29:36'),
(149, '10', 'pbbbppbp', '2019-09-27 05:29:41'),
(150, '10', 'ppbbbppb', '2019-09-27 05:29:57'),
(151, '10', 'bbppbbpp', '2019-09-27 05:30:03'),
(152, '10', 'pbbpbpbp', '2019-09-27 05:30:09'),
(153, '10', 'ppbbppbp', '2019-09-27 05:30:18'),
(167, '6', 'bppbtp', '2019-09-27 05:31:50'),
(168, '6', 'bbpppb', '2019-09-27 05:31:54'),
(169, '6', 'ppbbbb', '2019-09-27 05:31:59'),
(170, '6', 'ppbbpp', '2019-09-27 05:32:03'),
(171, '6', 'bbbpbp', '2019-09-27 05:32:08'),
(172, '6', 'pbbbpb', '2019-09-27 05:32:14'),
(173, '2', 'pbpp', '2019-09-27 05:32:42'),
(174, '2', 'pppp', '2019-09-27 05:32:48'),
(175, '2', 'bbbb', '2019-09-27 05:32:52'),
(176, '2', 'bpbb', '2019-09-27 05:32:56'),
(177, '2', 'ppbp', '2019-09-27 05:33:11'),
(178, '2', 'bbpp', '2019-09-27 05:33:39'),
(179, '2', 'pbbb', '2019-09-27 05:33:56'),
(180, '2', 'ptpb', '2019-09-27 05:34:16'),
(181, '2', 'pbtb', '2019-09-27 05:34:29'),
(182, '2', 'bbtb', '2019-09-27 05:34:54'),
(183, '2', 'pptp', '2019-09-27 05:34:57'),
(184, '2', 'btpb', '2019-09-27 05:35:13'),
(198, '6', 'pbbppp', '2019-09-27 05:37:36'),
(199, '6', 'bbpbbb', '2019-09-27 05:37:43'),
(200, '6', 'pbppbp', '2019-09-27 05:38:01'),
(201, '6', 'bbpbpp', '2019-09-27 05:38:05'),
(202, '6', 'bbppbb', '2019-09-27 05:38:34'),
(203, '6', 'pppbbb', '2019-09-27 05:39:07'),
(204, '6', 'bbbppb', '2019-09-27 05:39:15'),
(206, '6', 'bbbbbb', '2019-10-02 11:13:25'),
(207, '5', 'bbbbbb', '2019-10-03 06:24:41'),
(208, '5', 'bbbbpb', '2019-10-03 06:24:59'),
(209, '5', 'bbbpbp', '2019-10-03 06:25:19'),
(210, '5', 'bbbppb', '2019-10-03 06:26:06'),
(211, '5', 'bbpbbp', '2019-10-03 06:27:38'),
(212, '5', 'bbpbpb', '2019-10-03 06:28:08'),
(236, '4', 'bbbbbb', '2019-10-03 10:32:08'),
(237, '4', 'bbbbpb', '2019-10-03 10:32:26'),
(238, '4', 'bbbpbp', '2019-10-03 10:32:37'),
(239, '4', 'bbbppb', '2019-10-03 10:32:47'),
(240, '4', 'bbpbbp', '2019-10-03 10:33:17'),
(241, '4', 'bbpbpb', '2019-10-03 10:34:54'),
(242, '4', 'bbppbb', '2019-10-03 10:35:03'),
(244, '4', 'bpbpbp', '2019-10-03 10:37:07'),
(245, '4', 'bpbppb', '2019-10-03 10:37:16'),
(246, '4', 'bppbbp', '2019-10-03 10:37:24'),
(247, '4', 'bppbpp', '2019-10-03 10:37:44'),
(248, '4', 'bppppp', '2019-10-03 10:38:35'),
(249, '4', 'pbbbbb', '2019-10-03 10:38:43'),
(251, '4', 'pbbppb', '2019-10-03 10:39:35'),
(252, '4', 'pbpbbp', '2019-10-03 10:40:01'),
(253, '4', 'pbpbpb', '2019-10-03 10:40:32'),
(255, '4', 'ppbbpp', '2019-10-03 10:41:04'),
(257, '4', 'ppbppb', '2019-10-03 10:42:17'),
(258, '4', 'pppbbp', '2019-10-03 10:42:28'),
(259, '4', 'pppbpb', '2019-10-03 10:42:48'),
(260, '4', 'ppppbp', '2019-10-03 10:43:16'),
(261, '4', 'pppppp', '2019-10-03 10:43:21'),
(262, '4', 'bbbbtb', '2019-10-03 10:44:02'),
(263, '4', 'bbbptb', '2019-10-03 10:44:12'),
(264, '4', 'bbbtpb', '2019-10-03 10:44:22'),
(265, '4', 'bbpbtp', '2019-10-03 10:45:23'),
(266, '4', 'bbpptb', '2019-10-03 10:45:34'),
(268, '4', 'bbptpb', '2019-10-03 10:45:57'),
(269, '4', 'bbpttp', '2019-10-03 10:46:04'),
(270, '4', 'bbtbbb', '2019-10-03 10:46:13'),
(271, '4', 'bbtbpb', '2019-10-03 10:46:21'),
(272, '4', 'bbtpbp', '2019-10-03 10:46:31'),
(273, '4', 'bbtppb', '2019-10-03 10:46:45'),
(274, '4', 'bbtptb', '2019-10-03 10:46:53'),
(275, '4', 'bbttpp', '2019-10-03 10:47:02'),
(276, '4', 'bpbbtp', '2019-10-03 10:47:12'),
(277, '4', 'bpbptb', '2019-10-03 10:47:22'),
(278, '4', 'bpbtbp', '2019-10-03 10:47:31'),
(279, '4', 'bpbtpb', '2019-10-03 10:47:49'),
(280, '4', 'bpbttp', '2019-10-03 10:47:59'),
(281, '4', 'bppbtp', '2019-10-03 10:49:23'),
(282, '4', 'bppptp', '2019-10-03 10:49:35'),
(283, '4', 'bpptbp', '2019-10-03 10:49:48'),
(284, '4', 'bpptpb', '2019-10-03 10:51:22'),
(285, '4', 'bppttb', '2019-10-03 10:51:38'),
(286, '4', 'bptbbp', '2019-10-03 10:51:47'),
(287, '4', 'bptbpb', '2019-10-03 10:51:58'),
(288, '4', 'bptbtp', '2019-10-03 10:52:07'),
(289, '4', 'bptpbp', '2019-10-03 10:52:17'),
(290, '4', 'bptppb', '2019-10-03 10:52:26'),
(291, '4', 'bptptb', '2019-10-03 10:52:37'),
(292, '4', 'bpttbp', '2019-10-03 10:52:59'),
(293, '4', 'bpttpb', '2019-10-03 10:53:14'),
(294, '4', 'btbbbb', '2019-10-03 10:53:24'),
(295, '4', 'btbbpb', '2019-10-03 10:53:32'),
(296, '4', 'btbbtp', '2019-10-03 10:53:43'),
(297, '4', 'btbpbp', '2019-10-03 10:53:56'),
(298, '4', 'btbppb', '2019-10-03 10:54:30'),
(299, '4', 'btbptb', '2019-10-03 10:54:44'),
(300, '4', 'btbtbp', '2019-10-03 10:55:02'),
(301, '4', 'btbtpb', '2019-10-03 10:55:14'),
(302, '4', 'btpbbp', '2019-10-03 10:55:23'),
(303, '4', 'btpbpb', '2019-10-03 10:55:41'),
(304, '4', 'btpbtp', '2019-10-03 10:57:36'),
(305, '4', 'btppbp', '2019-10-03 10:57:46'),
(306, '4', 'btpppb', '2019-10-03 10:57:55'),
(307, '4', 'btpptb', '2019-10-03 10:58:04'),
(308, '4', 'btttpb', '2019-10-03 10:58:23'),
(309, '4', 'pbbbtp', '2019-10-03 10:58:40'),
(310, '4', 'pbbptb', '2019-10-03 10:58:50'),
(311, '4', 'pbbtbp', '2019-10-03 10:59:01'),
(312, '4', 'pbbtpb', '2019-10-03 10:59:23'),
(313, '4', 'pbbttp', '2019-10-03 10:59:31'),
(314, '4', 'pbpbtp', '2019-10-03 11:03:49'),
(315, '4', 'pbpptb', '2019-10-03 11:04:19'),
(316, '4', 'pbptbp', '2019-10-03 11:06:06'),
(317, '4', 'pbptpb', '2019-10-03 11:06:20'),
(318, '4', 'pbpttb', '2019-10-03 11:06:39'),
(319, '4', 'pbtbbp', '2019-10-03 11:06:50'),
(320, '4', 'pbtbpb', '2019-10-03 11:07:08'),
(321, '4', 'pbtpbp', '2019-10-03 11:07:19'),
(322, '4', 'pbtppb', '2019-10-03 11:07:31'),
(323, '4', 'pbttbp', '2019-10-03 11:07:40'),
(324, '4', 'ppbbtp', '2019-10-03 11:09:16'),
(325, '4', 'ppbptb', '2019-10-03 11:09:26'),
(326, '4', 'ppbtbp', '2019-10-03 11:09:36'),
(327, '4', 'ppbtpb', '2019-10-03 11:09:47'),
(328, '4', 'ppbttp', '2019-10-03 11:09:56'),
(329, '4', 'pppbtp', '2019-10-03 11:10:03'),
(330, '4', 'pppptp', '2019-10-03 11:10:16'),
(331, '4', 'ppptbp', '2019-10-03 11:10:26'),
(332, '4', 'ppptpp', '2019-10-03 11:11:11'),
(333, '4', 'pptbbp', '2019-10-03 11:11:19'),
(334, '4', 'pptbpb', '2019-10-03 11:11:31'),
(335, '4', 'pptbtp', '2019-10-03 11:11:41'),
(336, '4', 'pptpbp', '2019-10-03 11:11:53'),
(337, '4', 'pptppp', '2019-10-03 11:12:03'),
(338, '4', 'pptptb', '2019-10-03 11:12:16'),
(339, '4', 'ppttbp', '2019-10-03 11:12:58'),
(340, '4', 'ppttpb', '2019-10-03 11:13:15'),
(341, '4', 'ptbbbp', '2019-10-03 11:13:23'),
(342, '4', 'ptbbpb', '2019-10-03 11:13:35'),
(343, '4', 'ptbbtp', '2019-10-03 11:13:43'),
(344, '4', 'ptbpbp', '2019-10-03 11:14:05'),
(345, '4', 'ptbppb', '2019-10-03 11:14:18'),
(346, '4', 'ptbptb', '2019-10-03 11:14:31'),
(347, '4', 'ptbtbp', '2019-10-03 11:15:13'),
(348, '4', 'ptbtpb', '2019-10-03 11:15:26'),
(349, '4', 'ptbttp', '2019-10-03 11:15:34'),
(350, '4', 'ptpbbp', '2019-10-03 11:15:44'),
(351, '4', 'ptpbpb', '2019-10-03 11:16:04'),
(352, '4', 'ptpbtp', '2019-10-03 11:16:18'),
(353, '4', 'tbbbtp', '2019-10-03 11:16:46'),
(354, '4', 'tbbpbp', '2019-10-03 11:16:57'),
(355, '4', 'tbbptb', '2019-10-03 11:17:06'),
(356, '4', 'tbbtbp', '2019-10-03 11:17:17'),
(357, '4', 'tbbtpb', '2019-10-03 11:17:26'),
(358, '4', 'tbbttp', '2019-10-03 11:17:32'),
(359, '4', 'tbpbtp', '2019-10-03 11:17:44'),
(360, '4', 'tbpptb', '2019-10-03 11:17:57'),
(361, '4', 'tbptpb', '2019-10-03 11:18:12'),
(362, '4', 'tbpttb', '2019-10-03 11:18:26'),
(363, '4', 'tbtbbp', '2019-10-03 11:19:03'),
(364, '4', 'tbtbpb', '2019-10-03 11:19:20'),
(365, '4', 'tpbbbp', '2019-10-03 11:19:45'),
(366, '4', 'tpbbpb', '2019-10-03 11:19:57'),
(367, '4', 'tpbbtp', '2019-10-03 11:20:06'),
(368, '4', 'tpbpbp', '2019-10-03 11:20:18'),
(369, '4', 'tpbppb', '2019-10-03 11:20:28'),
(370, '4', 'tpbptb', '2019-10-03 11:20:49'),
(371, '4', 'tpbtbp', '2019-10-03 11:21:08'),
(372, '4', 'tpbtpb', '2019-10-03 11:21:19'),
(373, '4', 'tpbttp', '2019-10-03 11:21:26'),
(374, '4', 'tppbtp', '2019-10-03 11:21:55'),
(375, '4', 'tppptb', '2019-10-03 11:22:13'),
(376, '4', 'tpptbp', '2019-10-03 11:22:24'),
(377, '4', 'tptbbp', '2019-10-03 11:22:38'),
(378, '8', 'bbbbbb', '2019-10-03 14:28:54'),
(379, '8', 'bbbbpb', '2019-10-03 14:29:07'),
(380, '8', 'bbbpbp', '2019-10-03 14:29:31'),
(381, '8', 'bbbppb', '2019-10-03 14:29:35'),
(382, '8', 'bbpbbp', '2019-10-03 14:29:52'),
(383, '8', 'bbpbpb', '2019-10-03 14:30:18'),
(384, '8', 'bbppbp', '2019-10-03 14:30:38'),
(385, '8', 'bpbbbb', '2019-10-03 14:30:49'),
(386, '8', 'bbpppp', '2019-10-03 14:30:58'),
(387, '8', 'bpbbpp', '2019-10-03 14:31:19'),
(388, '8', 'bpbpbp', '2019-10-03 14:31:29'),
(389, '8', 'bpbppp', '2019-10-03 14:31:52'),
(390, '8', 'bppbbp', '2019-10-03 14:32:12'),
(391, '8', 'bppbpp', '2019-10-03 14:32:51'),
(392, '8', 'bppppp', '2019-10-03 14:33:07'),
(393, '8', 'pbbbbb', '2019-10-03 14:33:12'),
(394, '8', 'pbbbpp', '2019-10-03 14:33:31'),
(395, '8', 'pbbpbp', '2019-10-03 14:33:46'),
(396, '8', 'pbbppb', '2019-10-03 14:34:10'),
(397, '8', 'pbpbbp', '2019-10-03 14:34:31'),
(398, '8', 'pbpbpb', '2019-10-03 14:34:43'),
(399, '8', 'pbppbb', '2019-10-03 14:35:25'),
(400, '8', 'pbpppp', '2019-10-03 14:35:35'),
(401, '8', 'ppbbbb', '2019-10-03 14:35:48'),
(402, '8', 'ppbpbp', '2019-10-03 14:37:17'),
(403, '8', 'ppbppb', '2019-10-03 14:37:27'),
(404, '8', 'pppbbb', '2019-10-03 14:37:37'),
(405, '8', 'pppbpb', '2019-10-03 14:37:53'),
(406, '8', 'ppppbp', '2019-10-03 14:37:57'),
(407, '8', 'pppppp', '2019-10-03 14:38:01'),
(408, '8', 'bbbtbb', '2019-10-03 14:38:15'),
(409, '8', 'ppptpp', '2019-10-03 14:38:19'),
(410, '8', 'bbbbtb', '2019-10-03 14:38:28'),
(411, '8', 'tbbbbb', '2019-10-03 14:38:33'),
(412, '8', 'pppptp', '2019-10-03 14:38:42'),
(413, '8', 'tppppp', '2019-10-03 14:38:45'),
(414, '8', 'ptpppp', '2019-10-03 14:38:59'),
(415, '8', 'btbbbb', '2019-10-03 14:39:03'),
(416, '8', 'bbtbbb', '2019-10-03 14:39:11'),
(417, '8', 'ttpppp', '2019-10-03 14:39:25'),
(418, '8', 'btptbt', '2019-10-03 14:40:08'),
(419, '8', 'ppbtpt', '2019-10-03 14:40:39'),
(420, '4', 'bpbbpb', '2019-10-04 09:07:05'),
(421, '4', 'pbppbp', '2019-10-04 09:07:22'),
(422, '4', 'pbbpbp', '2019-10-04 09:07:44'),
(423, '4', 'ppbpbp', '2019-10-04 09:08:55'),
(424, '4', 'bbptbp', '2019-10-04 09:09:30'),
(475, '3', 'bbbbbb', '2019-10-05 09:04:03'),
(477, '3', 'bbbpbp', '2019-10-05 09:05:54'),
(480, '3', 'bbpbpb', '2019-10-05 09:08:00'),
(483, '3', 'bpbbbb', '2019-10-05 09:10:50'),
(484, '3', 'bpbbpp', '2019-10-05 09:11:11'),
(486, '3', 'bpbpbp', '2019-10-05 09:11:47'),
(488, '3', 'bppbpb', '2019-10-05 09:12:41'),
(489, '3', 'bpppbp', '2019-10-05 09:13:08'),
(490, '3', 'bppppp', '2019-10-05 09:13:29'),
(491, '3', 'pbbbbb', '2019-10-05 09:14:07'),
(493, '3', 'pbbpbp', '2019-10-05 09:14:30'),
(495, '3', 'pbpbbp', '2019-10-05 09:15:46'),
(496, '3', 'pbpbpb', '2019-10-05 09:16:09'),
(497, '3', 'pbppbp', '2019-10-05 09:16:31'),
(501, '3', 'ppbpbp', '2019-10-05 09:19:33'),
(503, '3', 'pppbbp', '2019-10-05 09:19:51'),
(504, '3', 'pppbpb', '2019-10-05 09:20:06'),
(505, '3', 'ppppbp', '2019-10-05 09:20:14'),
(506, '3', 'pppppp', '2019-10-05 09:20:22'),
(508, '3', 'bbtpbp', '2019-10-05 09:22:41'),
(509, '3', 'bbpbtp', '2019-10-05 09:22:56'),
(511, '3', 'bppbtp', '2019-10-05 09:25:37'),
(513, '3', 'ptbbbp', '2019-10-05 09:26:24'),
(515, '3', 'pbpbtp', '2019-10-05 09:26:59'),
(518, '3', 'ppptbp', '2019-10-05 09:27:52'),
(519, '3', 'pptppp', '2019-10-05 09:28:15'),
(520, '10', 'bbbbpb', '2019-10-05 09:35:52'),
(521, '10', 'bbbpbp', '2019-10-05 09:36:11'),
(522, '10', 'bbbppb', '2019-10-05 09:36:26'),
(523, '10', 'bbpbpb', '2019-10-05 09:38:18'),
(524, '10', 'bpbbbb', '2019-10-05 09:38:47'),
(525, '10', 'bpbbpp', '2019-10-05 09:38:59'),
(526, '10', 'bpbppt', '2019-10-05 09:39:37'),
(527, '10', 'bppbbb', '2019-10-05 09:39:53'),
(528, '10', 'bppbpb', '2019-10-05 09:40:16'),
(529, '10', 'bpppbp', '2019-10-05 09:40:31'),
(530, '10', 'bppppp', '2019-10-05 09:40:41'),
(531, '10', 'pbbbbb', '2019-10-05 09:40:51'),
(532, '10', 'pbbppp', '2019-10-05 09:42:26'),
(533, '10', 'pbpbbp', '2019-10-05 09:42:48'),
(534, '10', 'pbpbpb', '2019-10-05 09:43:08'),
(535, '10', 'pbppbp', '2019-10-05 09:43:18'),
(536, '10', 'pbpppp', '2019-10-05 09:43:29'),
(537, '10', 'ppbpbp', '2019-10-05 09:44:34'),
(538, '10', 'ppbppb', '2019-10-05 09:45:05'),
(539, '10', 'ppppbp', '2019-10-05 09:45:44'),
(540, '10', 'bbtbbp', '2019-10-05 09:46:16'),
(541, '10', 'bbtpbp', '2019-10-05 09:46:29'),
(542, '10', 'bbpbtp', '2019-10-05 09:46:45'),
(543, '10', 'bbpptp', '2019-10-05 09:47:01'),
(544, '10', 'bppbtp', '2019-10-05 09:47:18'),
(545, '10', 'bpptpp', '2019-10-05 09:47:38'),
(546, '10', 'ptbbbp', '2019-10-05 09:48:47'),
(547, '10', 'tbbptp', '2019-10-05 09:49:08'),
(548, '10', 'pbpbtp', '2019-10-05 09:49:27'),
(549, '10', 'pbptpp', '2019-10-05 09:49:49'),
(550, '10', 'ppbptp', '2019-10-05 09:50:10'),
(551, '10', 'ppptbp', '2019-10-05 09:51:02'),
(552, '10', 'pptppp', '2019-10-05 09:51:22'),
(553, '6', 'bbbbpb', '2019-10-05 10:04:06'),
(554, '6', 'bpbbbb', '2019-10-05 10:05:53'),
(555, '6', 'bpbbpp', '2019-10-05 10:06:06'),
(556, '6', 'bpbpbp', '2019-10-05 10:06:23'),
(557, '6', 'bpbppt', '2019-10-05 10:06:38'),
(558, '6', 'bppbbb', '2019-10-05 10:06:58'),
(559, '6', 'bppbpb', '2019-10-05 10:07:42'),
(560, '6', 'bpppbp', '2019-10-05 10:08:01'),
(561, '6', 'bppppp', '2019-10-05 10:08:04'),
(562, '6', 'pbbbbb', '2019-10-05 10:10:19'),
(563, '6', 'pbbpbp', '2019-10-05 10:12:01'),
(564, '6', 'pbpbbp', '2019-10-05 10:13:14'),
(565, '6', 'pbpbpb', '2019-10-05 10:13:40'),
(566, '6', 'pbpppp', '2019-10-05 10:14:28'),
(567, '6', 'ppbpbp', '2019-10-05 10:15:32'),
(568, '6', 'ppbppb', '2019-10-05 10:15:45'),
(569, '6', 'pppbpb', '2019-10-05 10:16:22'),
(570, '6', 'ppppbp', '2019-10-05 10:16:37'),
(571, '6', 'pppppp', '2019-10-05 10:16:51'),
(572, '6', 'bbtbbp', '2019-10-05 10:17:11'),
(573, '6', 'bbtpbp', '2019-10-05 10:17:26'),
(574, '6', 'bbpbtp', '2019-10-05 10:17:52'),
(575, '6', 'bbpptp', '2019-10-05 10:18:11'),
(576, '6', 'bpptpp', '2019-10-05 10:18:58'),
(577, '6', 'ptbbbp', '2019-10-05 10:19:12'),
(578, '6', 'pbbptp', '2019-10-05 10:19:32'),
(579, '6', 'pbpbtp', '2019-10-05 10:19:49'),
(580, '6', 'pbptpp', '2019-10-05 10:20:52'),
(581, '6', 'ppptbp', '2019-10-05 10:21:21'),
(582, '6', 'pptppp', '2019-10-05 10:21:35'),
(610, '5', 'bbppbp', '2019-10-06 10:36:56'),
(611, '5', 'bpbbbb', '2019-10-06 10:37:42'),
(612, '5', 'bbpppp', '2019-10-06 10:38:05'),
(613, '5', 'bpbbpp', '2019-10-06 10:38:31'),
(614, '5', 'bpbpbp', '2019-10-06 10:39:02'),
(615, '5', 'bpbppp', '2019-10-06 10:39:30'),
(616, '5', 'bppbbp', '2019-10-06 10:39:56'),
(617, '5', 'bppbpp', '2019-10-06 10:40:22'),
(618, '5', 'bppppp', '2019-10-06 10:40:52'),
(619, '5', 'pbbbbb', '2019-10-06 10:41:18'),
(620, '5', 'pbbbpp', '2019-10-06 10:41:42'),
(621, '5', 'pbbpbp', '2019-10-06 10:42:14'),
(622, '5', 'pbbppb', '2019-10-06 10:42:32'),
(623, '5', 'pbpbbp', '2019-10-06 10:42:56'),
(624, '5', 'pbpbpb', '2019-10-06 10:43:16'),
(625, '5', 'pbppbb', '2019-10-06 10:43:34'),
(626, '5', 'pbpppp', '2019-10-06 10:43:56'),
(627, '5', 'ppbbbb', '2019-10-06 10:44:17'),
(628, '5', 'ppbpbp', '2019-10-06 10:44:43'),
(629, '5', 'ppbppb', '2019-10-06 10:45:03'),
(630, '5', 'pppbbb', '2019-10-06 10:45:24'),
(631, '5', 'pppbpb', '2019-10-06 10:45:45'),
(632, '5', 'ppppbp', '2019-10-06 10:46:05'),
(633, '5', 'pppppp', '2019-10-06 10:46:37'),
(634, '5', 'bbbtbb', '2019-10-06 10:47:11'),
(635, '5', 'ppptpp', '2019-10-06 10:47:31'),
(636, '5', 'bbbbtb', '2019-10-06 10:47:53'),
(637, '5', 'tbbbbb', '2019-10-06 10:48:10'),
(638, '5', 'pppptp', '2019-10-06 10:48:30'),
(639, '5', 'tppppp', '2019-10-06 10:48:49'),
(640, '5', 'ptpppp', '2019-10-06 10:49:12'),
(641, '5', 'btbbbb', '2019-10-06 10:49:28'),
(642, '5', 'bbtbbb', '2019-10-06 10:49:52'),
(643, '5', 'ttpppp', '2019-10-06 10:50:13'),
(644, '5', 'btptbt', '2019-10-06 10:50:39'),
(645, '5', 'ppbtpt', '2019-10-06 10:51:06'),
(647, '3', 'bbpptb', '2019-10-06 14:32:15'),
(648, '3', 'bpbppb', '2019-10-06 14:34:24'),
(649, '3', 'ppbptb', '2019-10-06 14:35:18'),
(650, '3', 'pbptpb', '2019-10-06 14:36:15'),
(651, '3', 'bpptpb', '2019-10-06 14:37:49'),
(655, '3', 'tppbbp', '2019-10-09 14:23:09'),
(656, '3', 'ptpbbp', '2019-10-09 14:23:19'),
(657, '3', 'bptbpb', '2019-10-09 14:23:36'),
(658, '3', 'bbtbbb', '2019-10-09 14:23:50'),
(659, '3', 'pppptp', '2019-10-09 14:23:59'),
(660, '3', 'ppptpb', '2019-10-09 14:24:13'),
(661, '3', 'ppbtbp', '2019-10-09 14:24:44'),
(662, '3', 'pptbbp', '2019-10-09 14:25:06'),
(663, '3', 'ptpbpb', '2019-10-09 14:25:44'),
(664, '3', 'pbptbp', '2019-10-09 14:25:54'),
(665, '3', 'ptbtpp', '2019-10-09 14:26:20'),
(666, '3', 'pbpptb', '2019-10-09 14:26:34'),
(667, '4', 'bbpppb', '2019-10-09 18:51:15'),
(668, '4', 'bpbbbb', '2019-10-09 18:51:26'),
(669, '4', 'bpppbp', '2019-10-09 18:52:18'),
(670, '4', 'pbbbpp', '2019-10-09 18:52:39'),
(671, '4', 'pbpppb', '2019-10-09 18:52:53'),
(672, '4', 'ppbbbb', '2019-10-09 18:53:06'),
(673, '4', 'bbbtbb', '2019-10-09 19:02:10'),
(674, '4', 'bbbttb', '2019-10-09 19:02:17'),
(675, '4', 'bbtbtb', '2019-10-09 19:02:37'),
(676, '4', 'bbttbb', '2019-10-09 19:02:58'),
(677, '4', 'bbtttb', '2019-10-09 19:03:10'),
(678, '4', 'bptttb', '2019-10-09 19:03:24'),
(679, '4', 'btbttb', '2019-10-09 19:03:34'),
(680, '4', 'btptbp', '2019-10-09 19:03:58'),
(681, '4', 'btptpb', '2019-10-09 19:04:15'),
(682, '4', 'btpttb', '2019-10-09 19:04:26'),
(683, '4', 'bttbbb', '2019-10-09 19:04:35'),
(684, '4', 'bttbpp', '2019-10-09 19:04:45'),
(685, '4', 'bttbtp', '2019-10-09 19:05:03'),
(686, '4', 'bttpbp', '2019-10-09 19:05:25'),
(687, '4', 'bttppb', '2019-10-09 19:05:33'),
(688, '4', 'bttptb', '2019-10-09 19:05:56'),
(689, '4', 'btttbp', '2019-10-09 19:06:05'),
(690, '4', 'bttttb', '2019-10-09 19:06:20'),
(691, '4', 'pbtbtp', '2019-10-09 19:07:00'),
(692, '4', 'pbttpb', '2019-10-09 19:07:17'),
(693, '4', 'pbtttp', '2019-10-09 19:07:26'),
(694, '4', 'pppttb', '2019-10-09 19:07:41'),
(695, '4', 'pptttp', '2019-10-09 19:07:52'),
(696, '4', 'ptppbb', '2019-10-09 19:08:18'),
(697, '4', 'ptpppp', '2019-10-09 19:08:29'),
(698, '4', 'ptpptb', '2019-10-09 19:08:46'),
(699, '4', 'ptptbb', '2019-10-09 19:09:02'),
(700, '4', 'ptptpb', '2019-10-09 19:09:18'),
(701, '4', 'ptpttp', '2019-10-09 19:09:31'),
(702, '4', 'pttbbp', '2019-10-09 19:09:46'),
(703, '4', 'pttbpb', '2019-10-09 19:09:59'),
(704, '4', 'pttbtp', '2019-10-09 19:10:15'),
(705, '4', 'pttpbp', '2019-10-09 19:10:43'),
(706, '4', 'pttppb', '2019-10-09 19:10:51'),
(707, '4', 'pttptp', '2019-10-09 19:11:02'),
(708, '4', 'ptttbp', '2019-10-09 19:11:17'),
(709, '4', 'ptttpp', '2019-10-09 19:11:23'),
(710, '4', 'pttttp', '2019-10-09 19:11:31'),
(711, '4', 'tbtbtb', '2019-10-09 19:12:03'),
(712, '4', 'tbtpbp', '2019-10-09 19:12:20'),
(713, '4', 'tbtppb', '2019-10-09 19:12:36'),
(714, '4', 'tbtptb', '2019-10-09 19:12:51'),
(715, '4', 'tbttbb', '2019-10-09 19:13:05'),
(716, '4', 'tbttpb', '2019-10-09 19:13:16'),
(717, '4', 'tbtttb', '2019-10-09 19:13:31'),
(718, '4', 'tppbbp', '2019-10-09 19:13:42'),
(719, '4', 'tppbpb', '2019-10-09 19:13:54'),
(720, '4', 'tpppbb', '2019-10-09 19:14:06'),
(721, '4', 'tppppb', '2019-10-09 19:14:20'),
(722, '4', 'tpptpb', '2019-10-09 19:14:30'),
(723, '4', 'tppttb', '2019-10-09 19:14:43'),
(724, '4', 'tptbpb', '2019-10-09 19:14:56'),
(725, '4', 'tptbtp', '2019-10-09 19:15:07'),
(726, '4', 'tptpbp', '2019-10-09 19:15:19'),
(727, '4', 'tptppb', '2019-10-09 19:15:26'),
(728, '4', 'tptptb', '2019-10-09 19:15:40'),
(729, '4', 'tpttbp', '2019-10-09 19:15:50'),
(730, '4', 'tpttpb', '2019-10-09 19:16:22'),
(731, '4', 'tptttp', '2019-10-09 19:16:31'),
(732, '4', 'ttbbbb', '2019-10-09 19:16:39'),
(733, '4', 'ttbbpp', '2019-10-09 19:16:48'),
(734, '4', 'ttbbtb', '2019-10-09 19:17:00'),
(735, '4', 'ttbpbp', '2019-10-09 19:17:10'),
(736, '4', 'ttbppb', '2019-10-09 19:17:19'),
(737, '4', 'ttbptb', '2019-10-09 19:17:29'),
(738, '4', 'ttbtbb', '2019-10-09 19:17:38'),
(739, '4', 'ttbtpb', '2019-10-09 19:17:49'),
(740, '4', 'ttbttb', '2019-10-09 19:17:56'),
(741, '4', 'ttpbbp', '2019-10-09 19:18:03'),
(742, '4', 'ttpbpb', '2019-10-09 19:18:15'),
(743, '4', 'ttpbtp', '2019-10-09 19:18:26'),
(744, '4', 'ttppbb', '2019-10-09 19:18:34'),
(745, '4', 'ttpppb', '2019-10-09 19:18:43'),
(746, '4', 'ttpptb', '2019-10-09 19:18:56'),
(747, '4', 'ttptbp', '2019-10-09 19:19:10'),
(748, '4', 'ttptpb', '2019-10-09 19:19:21'),
(749, '4', 'ttpttb', '2019-10-09 19:19:30'),
(750, '4', 'tttbbb', '2019-10-09 19:19:36'),
(751, '4', 'tttbpb', '2019-10-09 19:19:42'),
(752, '4', 'tttbtb', '2019-10-09 19:19:49'),
(753, '4', 'tttpbp', '2019-10-09 19:19:57'),
(754, '4', 'tttppb', '2019-10-09 19:20:04'),
(755, '4', 'tttptb', '2019-10-09 19:20:19'),
(756, '4', 'ttttbb', '2019-10-09 19:20:27'),
(757, '4', 'ttttpb', '2019-10-09 19:20:37'),
(758, '4', 'tttttb', '2019-10-09 19:20:44'),
(759, '3', 'ptbbpb', '2019-10-10 21:13:53'),
(760, '3', 'bbptpb', '2019-10-10 21:15:15'),
(761, '3', 'pppbtp', '2019-10-10 21:15:48'),
(762, '7', 'bbbbbb', '2019-10-23 09:30:17'),
(763, '7', 'bbbbpp', '2019-10-23 09:30:32'),
(764, '7', 'bbbpbb', '2019-10-23 09:30:53'),
(765, '7', 'bbbppb', '2019-10-23 09:31:02'),
(766, '7', 'bbpbbb', '2019-10-23 09:31:12'),
(767, '7', 'bbpbpb', '2019-10-23 09:31:20'),
(768, '7', 'bbppbb', '2019-10-23 09:31:28'),
(769, '7', 'bbpppb', '2019-10-23 09:31:34'),
(770, '7', 'bpbbbb', '2019-10-23 09:31:43'),
(771, '7', 'bpbbpp', '2019-10-23 09:31:52'),
(772, '7', 'bpbpbp', '2019-10-23 09:32:01'),
(773, '7', 'bpbppb', '2019-10-23 09:32:14'),
(774, '7', 'bppbbp', '2019-10-23 09:32:25'),
(775, '7', 'bppbpp', '2019-10-23 09:32:42'),
(776, '7', 'bpppbb', '2019-10-23 09:32:54'),
(777, '7', 'bppppp', '2019-10-23 09:33:00'),
(778, '7', 'pbbbbb', '2019-10-23 09:33:09'),
(779, '7', 'pbbbpp', '2019-10-23 09:33:18'),
(780, '7', 'pbbpbb', '2019-10-23 09:33:53'),
(781, '7', 'pbbppp', '2019-10-23 09:34:09'),
(782, '7', 'pbpbbp', '2019-10-23 09:34:23'),
(783, '7', 'pbpbpb', '2019-10-23 09:34:29'),
(784, '7', 'pbppbp', '2019-10-23 09:34:41'),
(785, '7', 'pbpppp', '2019-10-23 09:34:52'),
(786, '7', 'ppbbbb', '2019-10-23 09:34:58'),
(787, '7', 'ppbbpp', '2019-10-23 09:35:05'),
(788, '7', 'ppbpbp', '2019-10-23 09:35:28'),
(789, '7', 'ppbppp', '2019-10-23 09:35:37'),
(790, '7', 'pppbbp', '2019-10-23 09:35:44'),
(791, '7', 'pppbpp', '2019-10-23 09:35:57'),
(792, '7', 'ppppbp', '2019-10-23 09:36:04'),
(793, '7', 'pppppp', '2019-10-23 09:36:10'),
(794, '7', 'bbbbtb', '2019-10-23 09:37:10'),
(795, '7', 'bbbptp', '2019-10-23 09:37:20'),
(796, '7', 'bbbtbb', '2019-10-23 09:37:48'),
(797, '7', 'bbbtpb', '2019-10-23 09:37:59'),
(798, '7', 'bbbttp', '2019-10-23 09:38:24'),
(799, '7', 'bbpbtb', '2019-10-23 09:38:43'),
(800, '7', 'bbpptb', '2019-10-23 09:39:07'),
(801, '7', 'bbptbb', '2019-10-23 09:39:50'),
(802, '7', 'bbptpp', '2019-10-23 09:39:59'),
(803, '7', 'bbpttp', '2019-10-23 09:40:09'),
(804, '7', 'bbtbbb', '2019-10-23 09:40:24'),
(805, '7', 'bbtbpb', '2019-10-23 09:40:38'),
(806, '7', 'bbtbtp', '2019-10-23 09:40:47'),
(807, '7', 'bbtpbp', '2019-10-23 09:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bac_log`
--

CREATE TABLE `tbl_bac_log` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_data` text NOT NULL,
  `num_people` varchar(5) NOT NULL,
  `b_updatetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tw_log`
--

CREATE TABLE `tw_log` (
  `ID` int(11) NOT NULL,
  `transaction` varchar(15) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `sender_phone` varchar(100) NOT NULL,
  `sender_message` varchar(100) NOT NULL,
  `sender_date` varchar(100) NOT NULL,
  `sender_amount` varchar(1000) NOT NULL,
  `u_rate` varchar(10) NOT NULL,
  `u_credit` varchar(10) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tw_settings`
--

CREATE TABLE `tw_settings` (
  `id` int(100) NOT NULL,
  `name` text CHARACTER SET utf8mb4 NOT NULL,
  `value` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tw_settings`
--

INSERT INTO `tw_settings` (`id`, `name`, `value`) VALUES
(1, 'enable', 'true'),
(2, 'min', '50'),
(3, 'rate', '1'),
(4, 'token_access', ''),
(5, 'reference_token', '099b9c369a5fc1105bd9403ee9bfcecd'),
(6, 'mobilephone', '0853892399'),
(7, 'username', 'botnick.xx@gmail.com'),
(8, 'password', 'nickza955');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `uname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(6) NOT NULL DEFAULT 1 COMMENT '1 = User | 90 = Admin | 99 = Super Admin',
  `status` int(6) NOT NULL DEFAULT 0 COMMENT '0 = Normal | 1 = Lock',
  `credit` int(12) NOT NULL DEFAULT 0,
  `fortype` int(2) NOT NULL DEFAULT 1,
  `fname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `line` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_log` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `refill_log` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `formula`
--
ALTER TABLE `formula`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tbl_bac_log`
--
ALTER TABLE `tbl_bac_log`
  ADD PRIMARY KEY (`b_id`) USING BTREE;

--
-- Indexes for table `tw_log`
--
ALTER TABLE `tw_log`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tw_settings`
--
ALTER TABLE `tw_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `uname` (`uname`) USING BTREE,
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formula`
--
ALTER TABLE `formula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=810;

--
-- AUTO_INCREMENT for table `tbl_bac_log`
--
ALTER TABLE `tbl_bac_log`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tw_log`
--
ALTER TABLE `tw_log`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tw_settings`
--
ALTER TABLE `tw_settings`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
