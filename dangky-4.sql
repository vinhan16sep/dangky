-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2018 at 03:59 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dangky`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('18980689a559373ecc330cedebf018e671370956', '222.254.2.253', 1544514704, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343531343632363b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a383a22737570706f727432223b757365726e616d657c733a383a22737570706f727432223b656d61696c7c733a32323a22737570706f7274324076696e6173612e6f72672e766e223b757365725f69647c733a333a22313036223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353434343237373036223b),
('192c388954160b2c0afbf0e9d5b83efc555efa35', '222.252.34.21', 1544435051, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343433353035303b),
('1c00732b1df11912ec118d3029f2a895b2446d7c', '222.252.34.21', 1544428779, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343432383438323b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a353a224769616e67223b757365726e616d657c733a353a224769616e67223b656d61696c7c733a32323a226e74746769616e674076696e6173612e6f72672e766e223b757365725f69647c733a333a22313037223b6f6c645f6c6173745f6c6f67696e7c4e3b),
('23551bca5405ee6f1a9296ae2bf0e2a55cdc594f', '222.252.34.21', 1544428316, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343432383131353b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a353a224769616e67223b757365726e616d657c733a353a224769616e67223b656d61696c7c733a32323a226e74746769616e674076696e6173612e6f72672e766e223b757365725f69647c733a333a22313037223b6f6c645f6c6173745f6c6f67696e7c4e3b),
('2426ecca36a59d35da9805f314c6dd8432e5c7c0', '222.252.34.21', 1544428862, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343432383738343b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a353a224769616e67223b757365726e616d657c733a353a224769616e67223b656d61696c7c733a32323a226e74746769616e674076696e6173612e6f72672e766e223b757365725f69647c733a333a22313037223b6f6c645f6c6173745f6c6f67696e7c4e3b),
('422cbfa8313e77790af143a8cd011632251bd91a', '222.252.34.21', 1544428480, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343432383438303b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a383a22737570706f727432223b757365726e616d657c733a383a22737570706f727432223b656d61696c7c733a32323a22737570706f7274324076696e6173612e6f72672e766e223b757365725f69647c733a333a22313036223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353434343237323439223b),
('49781795ad4b488929ed937a725944528ee55a6d', '222.252.34.21', 1544427709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343432373431353b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a383a22737570706f727432223b757365726e616d657c733a383a22737570706f727432223b656d61696c7c733a32323a22737570706f7274324076696e6173612e6f72672e766e223b757365725f69647c733a333a22313036223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353434343237323439223b),
('51afc3497408047bad3678339ce5f055d14b56d0', '222.254.2.253', 1544514626, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343531343632353b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a383a22737570706f727432223b757365726e616d657c733a383a22737570706f727432223b656d61696c7c733a32323a22737570706f7274324076696e6173612e6f72672e766e223b757365725f69647c733a333a22313036223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353434343237373036223b),
('5cd6a8171a1ca76f411431999a9bdb0832561007', '205.201.132.14', 1544435775, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343433353737343b6c616e67416262726576696174696f6e7c733a323a227669223b),
('63c1a53224339e49ddb5f502d0a43aae82b4423c', '222.252.34.21', 1544427765, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343432373734303b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a383a22737570706f727432223b757365726e616d657c733a383a22737570706f727432223b656d61696c7c733a32323a22737570706f7274324076696e6173612e6f72672e766e223b757365725f69647c733a333a22313036223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353434343237323439223b),
('7843859cba61dc6470d5ab294079f739c5209fd7', '222.252.34.21', 1544426890, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343432363730313b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a383a22737570706f727432223b757365726e616d657c733a383a22737570706f727432223b656d61696c7c733a32323a22737570706f7274324076696e6173612e6f72672e766e223b757365725f69647c733a333a22313036223b6f6c645f6c6173745f6c6f67696e7c4e3b6d6573736167657c733a32353a224974656d2075706461746564207375636365737366756c6c79223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('921e341280bca51d1814264866db217293546e76', '52.114.6.38', 1544429115, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343432393131353b),
('943318cc6de65a78c01805d5ba110cab9db7deb2', '205.201.132.14', 1544436094, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343433363039333b6c616e67416262726576696174696f6e7c733a323a227669223b),
('95c5b6016e0323689e2bc141590c8807ee70a3de', '222.254.2.253', 1544515991, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343531353939313b6c616e67416262726576696174696f6e7c733a323a227669223b),
('da2a39de98d9505c23de187d5c8aac2a87c43958', '222.252.34.21', 1544428982, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343432383938323b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a383a22737570706f727432223b757365726e616d657c733a383a22737570706f727432223b656d61696c7c733a32323a22737570706f7274324076696e6173612e6f72672e766e223b757365725f69647c733a333a22313036223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353434343237323439223b),
('df7bfd7be970be6a9e864399d24c156d951c86a5', '222.254.2.253', 1544514325, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343531343330353b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a383a22737570706f727432223b757365726e616d657c733a383a22737570706f727432223b656d61696c7c733a32323a22737570706f7274324076696e6173612e6f72672e766e223b757365725f69647c733a333a22313036223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353434343237373036223b),
('e072d5cacd1c5f7ab8624174c1a1dc7417a4fcf6', '1.55.227.143', 1544543522, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343534333532313b6c616e67416262726576696174696f6e7c733a323a227669223b),
('e4e76e3c24d734cfb49b0a04ee652e1cee3074fb', '222.252.34.21', 1544426075, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343432353831343b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a383a22737570706f727432223b757365726e616d657c733a383a22737570706f727432223b656d61696c7c733a32323a22737570706f7274324076696e6173612e6f72672e766e223b757365725f69647c733a333a22313036223b6f6c645f6c6173745f6c6f67696e7c4e3b),
('f39b9633cbd63ac8cb07f7befc69ab95d61cde0e', '222.252.34.21', 1544426298, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343432363133363b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a383a22737570706f727432223b757365726e616d657c733a383a22737570706f727432223b656d61696c7c733a32323a22737570706f7274324076696e6173612e6f72672e766e223b757365725f69647c733a333a22313036223b6f6c645f6c6173745f6c6f67696e7c4e3b),
('faf5f2f976c60b8541e5bfdd8260b1f94566e6b8', '222.254.2.253', 1544520292, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343532303239313b6c616e67416262726576696174696f6e7c733a323a227669223b);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `member_id` varchar(255) DEFAULT NULL,
  `equity_2015` varchar(50) DEFAULT NULL,
  `equity_2016` varchar(50) DEFAULT NULL,
  `equity_2017` varchar(50) DEFAULT NULL,
  `owner_equity_2015` varchar(50) DEFAULT NULL,
  `owner_equity_2016` varchar(50) DEFAULT NULL,
  `owner_equity_2017` varchar(50) DEFAULT NULL,
  `total_income_2015` varchar(50) DEFAULT NULL,
  `total_income_2016` varchar(50) DEFAULT NULL,
  `total_income_2017` varchar(50) DEFAULT NULL,
  `software_income_2015` varchar(50) DEFAULT NULL,
  `software_income_2016` varchar(50) DEFAULT NULL,
  `software_income_2017` varchar(50) DEFAULT NULL,
  `it_income_2015` varchar(50) DEFAULT NULL,
  `it_income_2016` varchar(50) DEFAULT NULL,
  `it_income_2017` varchar(50) DEFAULT NULL,
  `export_income_2015` varchar(50) DEFAULT NULL,
  `export_income_2016` varchar(50) DEFAULT NULL,
  `export_income_2017` varchar(50) DEFAULT NULL,
  `total_labor_2015` varchar(50) DEFAULT NULL,
  `total_labor_2016` varchar(50) DEFAULT NULL,
  `total_labor_2017` varchar(50) DEFAULT NULL,
  `total_ltv_2015` varchar(50) DEFAULT NULL,
  `total_ltv_2016` varchar(50) DEFAULT NULL,
  `total_ltv_2017` varchar(50) DEFAULT NULL,
  `description` text,
  `main_service` text,
  `main_market` text,
  `is_submit` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `client_id`, `member_id`, `equity_2015`, `equity_2016`, `equity_2017`, `owner_equity_2015`, `owner_equity_2016`, `owner_equity_2017`, `total_income_2015`, `total_income_2016`, `total_income_2017`, `software_income_2015`, `software_income_2016`, `software_income_2017`, `it_income_2015`, `it_income_2016`, `it_income_2017`, `export_income_2015`, `export_income_2016`, `export_income_2017`, `total_labor_2015`, `total_labor_2016`, `total_labor_2017`, `total_ltv_2015`, `total_ltv_2016`, `total_ltv_2017`, `description`, `main_service`, `main_market`, `is_submit`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES
(1, 52, '[\"3\",\"49\"]', '123', '123', '132', '123', NULL, NULL, '123', NULL, NULL, '123', NULL, NULL, '123', NULL, NULL, '123', NULL, NULL, '123', NULL, NULL, '123', NULL, NULL, 'Đầu phiên giao dịch ngày 8/2 (giờ Việt Nam), trên thị trường thế giới, chỉ số US Dollar Index (DXY), đo lường biến động đồng bạc xanh với 6 đồng tiền chủ chốt (EUR, JPY, GBP, CAD, SEK, CHF) đứng ở mức 89,90 điểm.\n\nUSD đứng ở mức: 1 euro đổi 1,2336 USD; 109,29 yen đổi 1 USD  và 1,3913 USD đổi 1 bảng Anh. \n\nĐêm qua, đồng USD trên thị trường quốc tế tăng phiên thứ 3 liên tiếp do giới đầu tư vẫn e dè với chứng khoán Mỹ và đang dõi theo khả năng chính phủ Mỹ đóng cửa vào thứ 6 tới. Dòng tiền vẫn tìm tới kênh đầu tư an toàn là đồng USD.', 'Ngành giáo dục', 'Xuất khẩu mục tiêu - Châu Âu', 1, '2018-02-08 12:50:30', 'tranminh', '2018-02-08 12:50:30', 'tranminh'),
(2, 51, '[\"3\",\"75\",\"86\"]', '123', '123', '132', '123', NULL, NULL, '123', NULL, NULL, '123', NULL, NULL, '123', NULL, NULL, '123', NULL, NULL, '123', NULL, NULL, '123', NULL, NULL, 'asd', 'Nội dung số và giải trí điện tử', 'Xuất khẩu mục tiêu - Các nước trong khu vực', 1, '2018-02-09 11:32:39', 'tranha', '2018-02-09 11:32:39', 'tranha'),
(7, 82, '[\"3\"]', '11', '2', '3', '4', '5', '6', '7', '8', '9', '1', '2', '3', '4', '5', '6', '7', '8', '9', '1', '2', '3', '4', '5', '6', 'asd', '[\"Ng\\u00e0nh gi\\u00e1o d\\u1ee5c\",\"X\\u00e2y d\\u1ef1ng\",\"B\\u1ea3o m\\u1eadt an to\\u00e0n th\\u00f4ng tin\"]', '[\"Th\\u1ecb tr\\u01b0\\u1eddng Ch\\u00ednh ph\\u1ee7\",\"Th\\u1ecb tr\\u01b0\\u1eddng ng\\u01b0\\u1eddi ti\\u00eau d\\u00f9ng (TT mass)\",\"Xu\\u1ea5t kh\\u1ea9u SP\\/Gi\\u1ea3i ph\\u00e1p\",\"M\\u1ef9 v\\u00e0 c\\u00e1c n\\u01b0\\u1edbc B\\u1eafc M\\u1ef9\",\"C\\u00e1c n\\u01b0\\u1edbc trong khu v\\u1ef1c\",\"\"]', 1, '2018-02-26 05:37:55', 'le1', '2018-02-26 05:42:12', 'le1'),
(8, 83, '[\"3\",\"49\"]', '676676', '6666', '6666', '6666', '6666', '6666', '6666', '6666', '66666', '66666', '666666', '6666', '6666', '666', '66666666', '666666', '66666', '666666', '66666', '6666', '66', '6666', '6666', '66666', '66666666666', '[\"Ch\\u00ednh ph\\u1ee7 \\u0111i\\u1ec7n t\\u1eed\",\"Ng\\u00e0nh y t\\u1ebf\",\"Ng\\u00e0nh gi\\u00e1o d\\u1ee5c\",\"X\\u00e2y d\\u1ef1ng\",\"C\\u00e1c l\\u0129nh v\\u1ef1c s\\u1ea3n xu\\u1ea5t\\/d\\u1ecbch v\\u1ee5 cho DN\",\"N\\u1ed9i dung s\\u1ed1 v\\u00e0 gi\\u1ea3i tr\\u00ed \\u0111i\\u1ec7n t\\u1eed\"]', '[\"Th\\u1ecb tr\\u01b0\\u1eddng Ch\\u00ednh ph\\u1ee7\",\"Th\\u1ecb tr\\u01b0\\u1eddng doanh nghi\\u1ec7p\",\"Gia c\\u00f4ng xu\\u1ea5t kh\\u1ea9u\",\"Ch\\u00e2u \\u00c2u\",\"Nh\\u1eadt B\\u1ea3n\"]', 0, '2018-02-27 10:04:34', 'CAOANHHANG', '2018-02-27 10:04:34', 'CAOANHHANG'),
(9, 84, '[\"86\",\"75\"]', '1111111', '111111111', '11111111', '1111111', '111111', '1111111', '111111', '11', '111111', '111', '11111111', '1111111111', '111111', '111111', '111111111', '111111', '1111111', '1111111', '11111', '11111', '11111111', '11', '11', '11', 'sssssssssssssssssssss', '[\"Ch\\u00ednh ph\\u1ee7 \\u0111i\\u1ec7n t\\u1eed\",\"X\\u00e2y d\\u1ef1ng\",\"N\\u1ed9i dung s\\u1ed1 v\\u00e0 gi\\u1ea3i tr\\u00ed \\u0111i\\u1ec7n t\\u1eed\"]', '[\"Th\\u1ecb tr\\u01b0\\u1eddng Ch\\u00ednh ph\\u1ee7\",\"Gia c\\u00f4ng xu\\u1ea5t kh\\u1ea9u\",\"M\\u1ef9 v\\u00e0 c\\u00e1c n\\u01b0\\u1edbc B\\u1eafc M\\u1ef9\",\"Ch\\u00e2u \\u00c2u\",\"Nh\\u1eadt B\\u1ea3n\"]', 0, '2018-02-27 10:12:10', 'mcminh', '2018-11-21 15:25:46', 'mcminh'),
(10, 90, '[\"3\",\"75\"]', '11', '1111', '1111', '11', '1111', '111', '1', '1111', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'ddddddddddddđ', '[\"Ch\\u00ednh ph\\u1ee7 \\u0111i\\u1ec7n t\\u1eed\"]', '[\"Th\\u1ecb tr\\u01b0\\u1eddng Ch\\u00ednh ph\\u1ee7\",\"Gia c\\u00f4ng xu\\u1ea5t kh\\u1ea9u\",\"Xu\\u1ea5t kh\\u1ea9u SP\\/Gi\\u1ea3i ph\\u00e1p\",\"M\\u1ef9 v\\u00e0 c\\u00e1c n\\u01b0\\u1edbc B\\u1eafc M\\u1ef9\"]', 0, '2018-05-14 14:48:42', 'support', '2018-05-14 14:48:42', 'support'),
(11, 99, NULL, '3587398', '80928', '8560938', '568384', '598096', '40968409', '958649', '85698', '868965', '94868986', '596849', '898098', '86509860', '9839863', '9856', '88648609', '586', '646', '46346', '634646', '6346', '63465', '6436', '63456', '6346', '[\"X\\u00e2y d\\u1ef1ng\"]', '[\"Th\\u1ecb tr\\u01b0\\u1eddng Ch\\u00ednh ph\\u1ee7\",\"Gia c\\u00f4ng xu\\u1ea5t kh\\u1ea9u\"]', 0, '2018-12-04 15:41:39', 'huonglinhk51', '2018-12-04 15:41:39', 'huonglinhk51'),
(12, 101, NULL, '243556', '3257654', '4654765', '466778', '768989', '234567', '23456', '234567', '234563456', '34567', '234567', '234567', '23456', '45678', '34567', '234567', '23456', '234567', '23456', '34567', '234567', '23456', '234567', '3456567', 'gnddfghnmj,zzxcvbnm,asdfghjsdfghjk,', '[\"N\\u1ed9i dung s\\u1ed1 v\\u00e0 gi\\u1ea3i tr\\u00ed \\u0111i\\u1ec7n t\\u1eed\"]', '[\"Th\\u1ecb tr\\u01b0\\u1eddng ng\\u01b0\\u1eddi ti\\u00eau d\\u00f9ng (TT mass)\"]', 0, '2018-12-05 09:50:30', 'liinhcanbetough', '2018-12-05 10:02:51', 'liinhcanbetough'),
(13, 100, NULL, '2200000', '2200000', '2200000', '5000000', '500000', '50000000', '555555', '55555', '6666666', '77777777', '8888888', '8888888', '55555555', '55555555', '66666666', '555', '5555', '77777', '45', '46', '47', '12', '13', '18', 'hhh', '[\"Ch\\u00ednh ph\\u1ee7 \\u0111i\\u1ec7n t\\u1eed\",\"X\\u00e2y d\\u1ef1ng\"]', '[\"Th\\u1ecb tr\\u01b0\\u1eddng Ch\\u00ednh ph\\u1ee7\",\"Th\\u1ecb tr\\u01b0\\u1eddng doanh nghi\\u1ec7p\",\"C\\u00e1c n\\u01b0\\u1edbc trong khu v\\u1ef1c\"]', 0, '2018-12-05 09:58:09', 'Giang Biên', '2018-12-05 09:58:45', 'Giang Biên'),
(14, 105, '[\"75\"]', 'aaaaaaaaaaab', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '22222222222222222222', '2', '2', '2', '2', '1', '1', '1', '1', '1', '[\"Ch\\u00ednh ph\\u1ee7 \\u0111i\\u1ec7n t\\u1eed\"]', '[\"Th\\u1ecb tr\\u01b0\\u1eddng Ch\\u00ednh ph\\u1ee7\"]', 0, '2018-12-10 10:42:03', 'support1', '2018-12-10 11:03:15', 'support1'),
(15, 106, NULL, 'a', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'null', 'null', 0, '2018-12-10 14:15:36', 'support2', '2018-12-10 14:15:36', 'support2');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'clients', 'Guest User');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `website` varchar(100) DEFAULT NULL,
  `legal_representative` varchar(100) DEFAULT NULL,
  `lp_position` varchar(100) DEFAULT NULL,
  `lp_email` varchar(100) DEFAULT NULL,
  `lp_phone` varchar(20) DEFAULT NULL,
  `connector` varchar(100) DEFAULT NULL,
  `c_position` varchar(100) DEFAULT NULL,
  `c_email` varchar(100) DEFAULT NULL,
  `c_phone` varchar(20) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `is_submit` tinyint(1) DEFAULT '0' COMMENT '0: haven''t save; 1: saved',
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `client_id`, `website`, `legal_representative`, `lp_position`, `lp_email`, `lp_phone`, `connector`, `c_position`, `c_email`, `c_phone`, `link`, `is_submit`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES
(6, 52, 'abccompany.com.vn', 'Nguyễn Văn A', 'Giám đốc', 'a@abccompany.com.vn', '01234567890', 'Nguyễn Văn B', 'Nhân viên', 'b@abccompany.com.vn', '09876543210', 'www.google.com', 1, '2018-02-08 04:40:10', 'tranminh', '2018-02-08 04:40:10', 'tranminh'),
(7, 51, 'abccompany.com.vn', 'Nguyễn Văn A', 'Giám đốc', 'a@abccompany.com.vn', '01234567890', 'Nguyễn Văn B', 'Nhân viên', 'b@abccompany.com.vn', '09876543210', 'www.google.com', 1, '2018-02-09 11:32:11', 'tranha', '2018-02-09 11:32:11', 'tranha'),
(8, 82, 'asd1', 'asd2', 'asd3', 'asd@asd.com4', '1235', 'asd6', 'asd7', 'b@abccompany.com.vn8', '1239', 'asd0', 0, '2018-02-26 01:05:44', 'le1', '2018-02-26 01:24:52', 'le1'),
(9, 83, 'DDDDĐ', 'DDDDĐ', 'DDDD', 'caoanhhang@gmail.com', '0974298786', 'Cao Ánh Hằng', 'ccccc', 'caoanhhang@gmail.com', '09742998786', 'https://mail.google.com/mail/u/0/#search/minhmc%40vinasa.org.vn', 0, '2018-02-27 10:03:09', 'CAOANHHANG', '2018-02-27 10:11:13', 'CAOANHHANG'),
(10, 84, 'VIN', 'Minh', 'IT', 'mc.minh@gmail.com', '0936136696', 'Minh', 'IT', 'mc.minh@gmail.com', '936136696', 'https://tenten.vn/cloud-vps/kusanagi-wordpress-cloud', 0, '2018-02-27 10:10:37', 'mcminh', '2018-10-18 10:47:46', 'mcminh'),
(11, 87, 'hiệp hội phần mềm', 'Thế Anh', 'Điều phối viên', 'anhnt@vinasa.org.vn', '0913196699', 'Thế Anh', 'Điều phối viên', 'anhnt@vinasa.org.vn', '0913196699', 'https://drive.google.com/drive/u/1/', 0, '2018-03-24 10:30:44', 'anhnt', '2018-03-24 10:30:44', 'anhnt'),
(12, 90, 'VNS', 'MCM', 'Tester', 'support@vinasa.org.vn', '098888888888', 'MCM', 'test', 'mc.minh@gmail.com', '936136696', 'Bổ sung sau', 0, '2018-05-14 14:47:37', 'support', '2018-05-14 14:47:37', 'support'),
(13, 85, 'ass', 'Nguyễn Văn AAA', 'Giám đốc', 'a@abccompany.com.vn', '01234567890', 'Nguyễn Văn B', 'Nhân viên', 'b@abccompany.com.vn', '098765432102', 'www.google.com', 0, '2018-10-22 01:25:13', 'annguyenblah', '2018-10-22 01:25:26', 'annguyenblah'),
(14, 96, 'vinasa', 'Nguyễn Thị Thu Giang', 'TTK', 'hangca@vinasa.org.vn', '0974298786', 'Cao Ánh Hằng', 'cb', 'hangca@vinasa.org.vn', '0974298786', 'https://drive.google.com/drive/u/0/my-drive?ogsrc=32', 0, '2018-12-04 09:56:41', 'HANGCA', '2018-12-04 10:33:01', 'HANGCA'),
(15, 99, 'Công ty TNHH Hương Linh', 'Trần Diệu Linh', 'Giám đốc', 'huonglinhk51@gmail.com', '0339341505', 'Diệu Hương', 'Thư kí', 'trandieuhuong1998@gmail.com', '0365663898', 'abc', 0, '2018-12-04 15:33:51', 'huonglinhk51', '2018-12-04 15:33:51', 'huonglinhk51'),
(16, 101, 'Công ty TNHH Trứng Xào Cà Chua', 'Nguyễn Văn A', 'Chủ tịch HĐQT', 'hoanghokhanhlinh@gmail.com', '0963094981', 'Hoàng Linh', 'CEO', 'lynnn.ftu@gmail.com', '0963094981', 'https://docs.google.com/document/d/1AKDzrur4JaYJ1_sinWfXC3tsk2Yl2azM480wlHKD2Pw/edit', 0, '2018-12-05 09:16:25', 'liinhcanbetough', '2018-12-05 09:16:25', 'liinhcanbetough'),
(17, 100, 'Công ty CP Xăng dầu Giang Biên', 'Trương Tuấn Kiên', 'Giám đốc', 'ngmha84@gmail.com', '0981533632', 'Lê Thị Ánh Tuyết', 'kế toán', 'tuyetlta@vinasa.org.vn', '0928017588', 'abc', 0, '2018-12-05 09:37:11', 'Giang Biên', '2018-12-05 09:37:11', 'Giang Biên'),
(18, 104, 'VINASA', 'BÌNH', 'CHỦ TỊCH', 'BINHBEO@VINASA.ORG.VN', '0913196699', 'TA', 'ĐIỀU PHỐI', 'anhnt@vinasa.org.vn', '0913196699', 'https://drive.google.com/drive/u/0/my-drive?ogsrc=32', 0, '2018-12-05 15:00:21', 'anhnt', '2018-12-05 15:00:21', 'anhnt'),
(19, 105, 'ABC', 'fsfjksdjklf', 'jfdksjlfj', 'aeo@abe.xyz', '34234242423', 'sjfjsdfklsj', 'jskldjfkl', 'jroiwjeiorjo@gijfsdkdkd.com', '32424243', 'chèn sau', 0, '2018-12-10 10:38:38', 'support1', '2018-12-10 10:46:30', 'support1'),
(20, 106, '1', '1', '1', '1@1.com', '1', '1', '1', '1@1.com', '1', '1', 0, '2018-12-10 14:13:43', 'support2', '2018-12-10 14:13:43', 'support2'),
(21, 107, 'VINASA', 'Bình', 'sdfghjkl', 'abc@vinasa.org.vn', '0987654312', 'ádfghjkl', 'ádfgh', 'abc@vinasa.org.vn', '0987654312', 'https://docs.google.com/spreadsheets/d/1YrpeiVcKP_7YCy7B-385GPuE_ufXNUQAt00O9FzwxUc/edit', 0, '2018-12-10 14:54:42', 'Giang', '2018-12-10 14:54:42', 'Giang');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `service` text,
  `sub_service` text,
  `functional` text,
  `process` text,
  `security` text,
  `positive` text,
  `compare` text,
  `income_2016` varchar(50) DEFAULT NULL,
  `income_2017` varchar(50) DEFAULT NULL,
  `area` text,
  `open_date` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `customer` text,
  `after_sale` text,
  `team` text,
  `award` text,
  `certificate` varchar(100) DEFAULT NULL,
  `is_submit` tinyint(1) DEFAULT '0',
  `rating` tinyint(1) DEFAULT '0' COMMENT '0: chua rating; 1: dong y; 2: xem xet; 3: khong dong y',
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `client_id`, `name`, `service`, `sub_service`, `functional`, `process`, `security`, `positive`, `compare`, `income_2016`, `income_2017`, `area`, `open_date`, `price`, `customer`, `after_sale`, `team`, `award`, `certificate`, `is_submit`, `rating`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES
(1, 52, 'asd', '[\"Thanh to\\u00e1n \\u0111i\\u1ec7n t\\u1eed \",\"C\\u00e1c s\\u1ea3n ph\\u1ea9m, gi\\u1ea3i ph\\u00e1p \\u1ee9ng d\\u1ee5ng c\\u00f4ng ngh\\u1ec7 4.0\",\"Data Center\"]', NULL, 'Tổng hợp và trích xuất  được các biểu mẫu Tổng hợp và trích xuất  được các biểu mẫu Tổng hợp và trích xuất  được các biểu mẫu Tổng hợp và trích xuất  được các biểu mẫu Tổng hợp và trích xuất  được các biểu mẫu', 'Tổng hợp và trích xuất  được các biểu mẫu Tổng hợp và trích xuất  được các biểu mẫu Tổng hợp và trích xuất  được các biểu mẫu Tổng hợp và trích xuất  được các biểu mẫu Tổng hợp và trích xuất  được các biểu mẫu', 'Tổng hợp và trích xuất  được các biểu mẫu Tổng hợp và trích xuất  được các biểu mẫu Tổng hợp và trích xuất  được các biểu mẫu Tổng hợp và trích xuất  được các biểu mẫu Tổng hợp và trích xuất  được các biểu mẫu', 'asd', 'asd', '123', NULL, 'asd', 'asd', '123', 'asd', 'asd', 'asd', 'asd', NULL, 1, 3, '2018-02-08 14:24:59', 'tranminh', '2018-02-08 14:24:59', 'tranminh'),
(2, 52, 'qwe', '[\"Thanh to\\u00e1n \\u0111i\\u1ec7n t\\u1eed \",\"C\\u00e1c s\\u1ea3n ph\\u1ea9m, gi\\u1ea3i ph\\u00e1p \\u1ee9ng d\\u1ee5ng c\\u00f4ng ngh\\u1ec7 4.0\",\"Data Center\"]', NULL, 'zxc', 'qwe', 'qwe', 'qwe', 'qwe', '123', NULL, 'qwe', 'qwe', '123', 'qwe', 'qwe', 'qwe', 'qwe', 'logo-mato.png', 1, 2, '2018-02-08 15:06:10', 'tranminh', '2018-02-08 15:06:10', 'tranminh'),
(3, 82, 'asd', '[\"Thanh to\\u00e1n \\u0111i\\u1ec7n t\\u1eed \",\"C\\u00e1c s\\u1ea3n ph\\u1ea9m, gi\\u1ea3i ph\\u00e1p \\u1ee9ng d\\u1ee5ng c\\u00f4ng ngh\\u1ec7 4.0\",\"Data Center\"]', NULL, 'asd', 'asd', ',k', 'knk', 'nm,', '123', '123', 'njk', 'nkl', '123', 'nkl', 'nkl', 'nlk', 'nl', 'asd', 1, 0, '2018-02-26 07:53:13', 'le1', '2018-02-27 12:15:40', 'le1'),
(4, 83, '6666666666', '[\"Qu\\u1ea3n l\\u00fd doanh nghi\\u1ec7p\",\"C\\u00e1c s\\u1ea3n ph\\u1ea9m, gi\\u1ea3i ph\\u00e1p ph\\u1ea7n m\\u1ec1m m\\u1edbi\"]', NULL, 'hhhhhhhhhhhhh', 'hhhhhhhhhhh', 'hhhhhhhhhhh', 'hhhhhhhhhhhh', 'hhhh', 'hhhhhhhhhhh', NULL, 'ffffffffffffff', 'fffffffffff', 'fffffffffffffff', 'fffffffff', 'fffffffffffff', 'fffffffffffff', 'ffffffffffffff', 'fffffffffff', 0, 0, '2018-02-27 10:07:11', 'CAOANHHANG', '2018-02-27 10:07:11', 'CAOANHHANG'),
(5, 84, '34234234234', '[\"Qu\\u1ea3n l\\u00fd b\\u00e1n h\\u00e0ng v\\u00e0 chu\\u1ed7i cung \\u1ee9ng\",\"C\\u00e1c s\\u1ea3n ph\\u1ea9m, gi\\u1ea3i ph\\u00e1p \\u1ee9ng d\\u1ee5ng c\\u00f4ng ngh\\u1ec7 4.0\",\"Gia c\\u00f4ng xu\\u1ea5t kh\\u1ea9u ph\\u1ea7n m\\u1ec1m\"]', NULL, '333333333333', '3333333', '333333', '3333', '33333333', '2222', '3333', '33333333', '333', '333333', '33333', '3333333333', '333', '22222', '2222222222', 1, 0, '2018-02-27 10:29:58', 'mcminh', '2018-10-18 11:00:25', 'mcminh'),
(6, 90, 'SP1', '[\"Qu\\u1ea3n l\\u00fd doanh nghi\\u1ec7p\"]', NULL, 'asssssssssssss', 'ssss', 'sssssssss', 'sssss', 'sss', '111111', '1', '1', '1', '111', '1', '1', '1', '1', 'bổ sung sau', 1, 0, '2018-05-14 14:51:01', 'support', '2018-05-14 14:51:42', 'support'),
(7, 84, 'SP2', '[\"BPO\"]', NULL, '1111111111', '11111', '111111', '11111111', '11111', '1111', '111111', '1111', '1111111', '1111', '111111', '11111111', '111111', '11111111', 'Không có', 0, 0, '2018-10-18 11:01:25', 'mcminh', '2018-10-18 11:01:25', 'mcminh'),
(8, 85, 'asd', 'null', NULL, 'sd', 'asd', 'asd', 'asd', 'xc', '123', '123', 'sda', 'asd', 'asd', 'asd', 'asd', 'ASD', 'ASD', 'Sẽ bổ sung sau', 0, 0, '2018-10-22 01:30:10', 'annguyenblah', '2018-10-22 01:30:10', 'annguyenblah'),
(9, 85, 'ASD', '[\"Ch\\u00ednh ph\\u1ee7 \\u0111i\\u1ec7n t\\u1eed\"]', NULL, 'ASD', 'ASD', 'asd', 'asd', 'asd', '123', '123', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'Sẽ bổ sung sau', 0, 0, '2018-10-22 01:32:57', 'annguyenblah', '2018-10-22 01:32:57', 'annguyenblah'),
(10, 98, 'HOANG MINH THU', '[\"C\\u00e1c s\\u1ea3n ph\\u1ea9m, gi\\u1ea3i ph\\u00e1p \\u1ee9ng d\\u1ee5ng c\\u00f4ng ngh\\u1ec7 4.0\"]', NULL, 'SP dịch vụ', 'AI ROBOTICS', '11 Fl., CUNG TRI THUC THANH PHO, NO., 1 TON THAT THUYET, CAU GIAY, HANOI, VIETNAM', 'Nhanh, tiết kiệm chi phí', 'hiệu quả tốt, có lợi thế cạnh tranh', '0', '0', '0', '2017', '500', 'PVB, ABB', 'Chăm sóc Khách hàng', '10 người', 'Sao Khuê 2017, Nhân tài đất việt 2018', 'Cam kết bản quyền', 1, 0, '2018-12-04 15:17:16', 'HMT', '2018-12-04 15:17:24', 'HMT'),
(11, 99, 'Phần mềm học tiếng anh', '[\"C\\u00e1c s\\u1ea3n ph\\u1ea9m, gi\\u1ea3i ph\\u00e1p \\u1ee9ng d\\u1ee5ng c\\u00f4ng ngh\\u1ec7 4.0\"]', NULL, 'Học tiếng anh trực tuyến', 'IoT, Blockchain', 'BKAV Security', 'Phù hợp với mọi trình độ', 'Ưu việt', '12332324', '8342849289', '30%', '09.8.2017', '840928', '384', '84094839', 'tốt', 'SAo Khuê', 'Sẽ bổ sung sau', 0, 0, '2018-12-04 15:38:43', 'huonglinhk51', '2018-12-04 15:38:43', 'huonglinhk51'),
(12, 101, 'ABC', '[\"C\\u00e1c s\\u1ea3n ph\\u1ea9m, gi\\u1ea3i ph\\u00e1p \\u1ee9ng d\\u1ee5ng c\\u00f4ng ngh\\u1ec7 4.0\"]', NULL, 'hát', 'AI', 'dfkhuksjdf', 'ưdjwhgdkjw', 'ègfdgđfssd', '2134325', '35436546', 'gjcffsdfdsgf', '3546', '356465', 'dhfdfd', 'fhfgghghj', 'dfhgjhjm', 'dgtfgjhgjm', 'Sẽ bổ sung sau', 0, 0, '2018-12-05 09:35:32', 'liinhcanbetough', '2018-12-05 09:35:32', 'liinhcanbetough'),
(13, 100, 'trà sữa', '[\"Gi\\u00e1o d\\u1ee5c, \\u0111\\u00e0o t\\u1ea1o\",\"B\\u1ea3o m\\u1eadt v\\u00e0 an to\\u00e0n th\\u00f4ng tin\",\"C\\u00e1c s\\u1ea3n ph\\u1ea9m, gi\\u1ea3i ph\\u00e1p \\u1ee9ng d\\u1ee5ng c\\u00f4ng ngh\\u1ec7 4.0\",\"C\\u00e1c s\\u1ea3n ph\\u1ea9m, gi\\u1ea3i ph\\u00e1p ph\\u1ea7n m\\u1ec1m m\\u1edbi\",\"\\u0110\\u00e0o t\\u1ea1o CNTT\"]', NULL, 'ggg', 'gg', 'gg', 'gg', 'gg', '50000', '20000', 'gg', '15/12/2018', '999999', 'hhh', 'hh', 'hh', 'hh', 'Sẽ bổ sung sauaaâ', 1, 0, '2018-12-05 10:06:00', 'Giang Biên', '2018-12-05 10:06:36', 'Giang Biên'),
(14, 105, 's', '[\"C\\u00e1c s\\u1ea3n ph\\u1ea9m, gi\\u1ea3i ph\\u00e1p \\u1ee9ng d\\u1ee5ng c\\u00f4ng ngh\\u1ec7 4.0\"]', NULL, 's', 's', 's', 's', 's', '2', '2', 's', 's', '2', 's', 's', 's', 's', 'Sẽ bổ sung sau', 1, 0, '2018-12-10 11:28:01', 'support1', '2018-12-10 11:31:48', 'support1'),
(15, 106, '1111111', '[\"Gia c\\u00f4ng xu\\u1ea5t kh\\u1ea9u ph\\u1ea7n m\\u1ec1m\"]', NULL, '1', '1', '111', '1', '1', '1111', '1', '11111111111111', '11111111', '11', '1', '1', '1', '1', 'Sẽ bổ sung sau', 1, 0, '2018-12-10 14:26:13', 'support2', '2018-12-10 14:28:10', 'support2');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `client_id` text,
  `precision` text,
  `strong` text,
  `weak` text,
  `rating` text,
  `result` varchar(50) DEFAULT NULL COMMENT '1: dong y; 2: xem xet; 3: khong dong y',
  `is_submit` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `member_id`, `product_id`, `client_id`, `precision`, `strong`, `weak`, `rating`, `result`, `is_submit`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES
(6, 49, '2', '52', 'ok', 'many', 'rare', 'good', '2', 1, '2018-02-11 16:53:25', 'trandung', '2018-02-11 16:53:25', 'trandung'),
(7, 49, '1', '52', 'ok', 'ok', 'ok', 'ok', '3', 1, '2018-02-11 17:05:14', 'trandung', '2018-02-11 17:05:14', 'trandung'),
(8, 75, '7', '84', '111', '111', '111', '111', '2', 1, '2018-10-18 11:35:11', 'membertest', '2018-10-18 11:35:11', 'membertest'),
(9, 75, '6', '90', '111', '111', '11', '111', '2', 1, '2018-10-18 11:35:33', 'membertest', '2018-10-18 11:35:33', 'membertest'),
(14, 75, '5', '84', '1111111', '11111111111', '213', '123', '2', 1, '2018-10-23 10:42:21', 'membertest', '2018-10-23 10:42:21', 'membertest'),
(15, 86, '6', '90', 'a', 'a', 'a', 'a', '3', 1, '2018-10-24 02:57:24', 'memberannguyen', '2018-10-24 02:57:24', 'memberannguyen'),
(16, 75, '14', '105', 'sfsfd', 'sdfsf', 'sdfsfd', 'sdfsf', '2', 1, '2018-12-10 11:49:11', 'membertest', '2018-12-10 11:49:11', 'membertest');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `is_information` tinyint(1) DEFAULT '0',
  `is_company` tinyint(1) DEFAULT '0',
  `is_product` tinyint(1) DEFAULT '0',
  `is_final` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `client_id`, `is_information`, `is_company`, `is_product`, `is_final`) VALUES
(1, 80, 0, 0, 0, 0),
(2, 81, 0, 0, 0, 0),
(3, 82, 0, 0, 0, 0),
(4, 83, 1, 1, 1, 1),
(5, 84, 1, 1, 1, 1),
(6, 85, 1, 0, 1, 0),
(7, 87, 1, 0, 0, 0),
(8, 88, 0, 0, 0, 0),
(9, 89, 0, 0, 0, 0),
(10, 90, 1, 1, 1, 1),
(11, 91, 0, 0, 0, 0),
(12, 92, 0, 0, 0, 0),
(13, 93, 0, 0, 0, 0),
(14, 94, 0, 0, 0, 0),
(15, 95, 0, 0, 0, 0),
(16, 96, 1, 0, 0, 1),
(17, 97, 0, 0, 0, 0),
(18, 98, 0, 0, 1, 0),
(19, 99, 1, 1, 1, 1),
(20, 100, 1, 1, 1, 1),
(21, 101, 1, 1, 1, 0),
(22, 102, 0, 0, 0, 0),
(23, 103, 0, 0, 0, 1),
(24, 104, 1, 0, 0, 1),
(25, 105, 1, 1, 1, 1),
(26, 106, 1, 1, 1, 0),
(27, 107, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `company_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `position`, `company`, `phone`, `address`, `company_id`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1544427256, 1, 'Admin', 'istrator', NULL, 'ADMIN', '0', NULL, ''),
(2, '127.0.0.1', 'nak_admin', '$2y$08$Dwaj3aGpcBANtZujnHylVelm6xlId28UJAEvWO/WYq0QX/3p72BT6', NULL, 'nak_admin@hoamyphamnamanhkhuong.com', NULL, NULL, NULL, NULL, 0, 1510902781, 1, 'NAK', 'Admin', NULL, 'NAK', '0', NULL, ''),
(3, '::1', 'vinhan16sep98', '$2y$08$pfarUD9XzFuWS2U5KKtbWeNjx8nlUu66unn43srccgmFLLhO2dNyi', NULL, 'vinhan16sep1@gmail.com', NULL, NULL, NULL, NULL, 1517560619, 1517564024, 1, 'An', 'Nguyen', NULL, 'Mato', '123', NULL, '[\"10\"]'),
(6, '::1', 'vinhan16sep31', '$2y$08$VPIQLqWx9DZUZTfb3iHdY./BuXDfGTUh3PfAxT3JxhAYRbN3mtQCu', NULL, 'client@admin.com', NULL, NULL, NULL, 'tBTASyyzVlnEH4wMtrUIR.', 1517568085, 1517760113, 1, 'Client', 'AAA', NULL, 'Mato1', '12345677771', NULL, ''),
(49, '::1', 'trandung', '$2y$08$fp9/3oz92YLPpTLqZbWFaOAmzBMY/UfodC7QFPyPPPgNYT71Nrh9e', NULL, 'trandung@client.com', NULL, NULL, NULL, NULL, 1517765038, 1518446751, 1, 'Dung', 'Tran', NULL, 'ABC', '222', NULL, ''),
(50, '::1', 'phamhung', '$2y$08$rRu/VJeYX4XxmeVuWKarSeyGLV6S3oCwxe./cAcvB9GXabGor7ene', NULL, 'phamhung@client.com', NULL, NULL, NULL, NULL, 1517765430, 1517771886, 1, 'Hung', 'Pham', NULL, 'AAA', '222', NULL, ''),
(51, '::1', 'tranha', '$2y$08$qhBOHScVebM8H8JqYG3WmeT7qF4kcH7f24KbFJYis4ZbgaphQyMbe', NULL, 'tranha@client.com', NULL, NULL, NULL, NULL, 1517772108, 1518335233, 1, 'Ha', 'Tran', 'Giam doc', 'BBB', '222', NULL, ''),
(52, '::1', 'tranminh', '$2y$08$4CAAQ1HAQULMtgGdMLEpION16/21xIqKLAy0JlTRd7Z46TT2yU.hy', NULL, 'tranminh@client.com', NULL, NULL, NULL, NULL, 1517772213, 1519323500, 1, 'Minh', 'Tran', 'Giam doc', 'Công ty trách nhiệm hữu hạn một thành viên CCCCCCCCC', '222', NULL, ''),
(53, '::1', 'nguyentung', '$2y$08$Mh2IbKRjAWV8AgUIGHYkrOoR0CHIeGrDEWE8N9zgHaBkxCCHP3V9G', NULL, 'nguyentung@client.com', NULL, NULL, NULL, NULL, 1518093925, 1518093925, 1, 'Tung', 'Nguyen', 'Giam doc', 'BBB', '1234567777', NULL, ''),
(54, '::1', 'nguyenhanh', '$2y$08$XGPvAxFV6JQUGNJDt4ncC.jMhJV4Zc21HHZZbXcC9snQikd.a5QIO', NULL, 'vinhan16sep2@gmail.com', NULL, NULL, NULL, NULL, 1518094160, NULL, 1, 'Hanh', 'Nguyen', 'Giam doc', 'CCC', '1288888888', NULL, ''),
(55, '::1', 'leminh', '$2y$08$GifTN002taetRBzuC5Tvk.BtPzUXjh9qAj4OrJh/TBLOIn1UFqTJS', NULL, 'vinhan16sep3@gmail.com', NULL, NULL, NULL, NULL, 1518096852, NULL, 1, 'Minh', 'Le', 'Giam doc', 'CCC', '1288888888', NULL, ''),
(56, '::1', 'lenam', '$2y$08$JnjRsdfVlvEnAHgGPKd57eaoFkB8YrBsI.GR2B2gLG/wvIfjTd8Kq', NULL, 'vinhan16sep5@gmail.com', NULL, NULL, NULL, NULL, 1518097224, NULL, 1, 'Nam', 'Le', 'Giam doc', 'CCC', '1288888888', NULL, ''),
(57, '::1', 'vinhan16sep99', '$2y$08$lQZqb5CKjIPBxeAMIR.KduTyCByFcW0/UY3i4G1lqqHPpXKcECrRu', NULL, 'vinhan16sep4@admin.com', NULL, NULL, NULL, NULL, 1518097304, NULL, 0, 'An', 'Nguyen', 'Giam doc', 'CCC', '1277777777', NULL, ''),
(70, '::1', 'tainguyen', '$2y$08$QY1SF4j3sMSAs5M77OYE3OZ/ecIEecI8kMQ7/5cgVKIbaQ871HYne', NULL, 'vinhan16sep@gmail.com', NULL, NULL, NULL, NULL, 1518426643, NULL, 1, 'An', 'Nguyen', 'Giam doc', 'CCC', '123', NULL, ''),
(71, '::1', 'leha', '$2y$08$GgeO23soCnZlbGmSzTtwWeNS829W.p/IPmcP9LfE.9GdqAEkWE5iC', NULL, 'leha@gmail.com', NULL, NULL, NULL, NULL, 1518439283, NULL, 1, 'Ha', 'Le', 'Giam doc', 'CCC', '123', NULL, ''),
(72, '::1', 'superadmin', '$2y$08$q8fhQCtxxmsCXvi7bAbBuO.5nJ85uAU3zd6maVUwbb61A536lik9C', NULL, 'superadmin@superadmin.com', NULL, NULL, NULL, NULL, 1518443395, 1518443427, 1, 'Super', 'Admin', NULL, 'Admin group', '1234567890', NULL, ''),
(73, '::1', 'lethai', '$2y$08$GVLazoIK2MfWauCY5n2Wx.xj3q3LQFwUHS.IiuU7xGd47bIR5hBLG', NULL, 'lethai@lethai.com', NULL, NULL, NULL, NULL, 1518444971, 1518454676, 1, 'thai', 'le', 'Giam doc', 'CCC', '123', NULL, ''),
(75, '::1', 'membertest', '$2y$08$gkcRIUYXsGVv4HLJ72Dg1O.DO5di1XsTMzp0DlsIvk6VdMqFIzeOO', NULL, 'membertest@membertest.com', NULL, NULL, NULL, NULL, 1518457889, 1544417295, 1, 'member', 'test', '', 'Mato', '1234567777', NULL, '[\"10\",\"9\",\"14\"]'),
(76, '::1', 'clienttest', '$2y$08$LssfjKjFcHaZaCd9ciaw..T8mGvczd8PcfD9WJeWfkiG4uO.krmi6', NULL, 'clienttest@clienttest.com', NULL, NULL, NULL, NULL, 1518457942, NULL, 1, 'client', 'test', NULL, 'Mato1', '1234567777', NULL, ''),
(77, '::1', 'as1', '$2y$08$84XkexWYLbu/QtjZzQ4PIumXS6v5tk4OcIob/5GdGIXZ/VKTfjbB6', NULL, 'clien@asd.com', NULL, NULL, NULL, NULL, 1518458005, NULL, 1, 'client', 'test 2', NULL, 'Mato', '1234567777', NULL, ''),
(78, '::1', 'as12', '$2y$08$Y3/FPQGmjZ1OQfQnAy.gY.TLswC5kYwsPnx0Ttomi7Ageay2ptfNa', NULL, 'clien1@asd.com', NULL, NULL, NULL, NULL, 1518458024, NULL, 1, 'client', 'test 2', NULL, 'Mato', '1234567777', NULL, ''),
(79, '::1', 'lean', '$2y$08$YbmXBSiHdfZ8O36Bfgu1N.bg0CUv4LKDL./HaK/0AvC6y6EHALn/G', NULL, 'lean@lean.com', NULL, NULL, NULL, NULL, 1518458087, NULL, 1, 'le', 'an', NULL, 'Mato', '1234567777', NULL, ''),
(80, '::1', 'lean2', '$2y$08$DTaWQolS5pBGm0wWg5FmSe9EOfzTFutiZDu2leDOMYC49HeH5PSo.', NULL, 'lean1@lean.com', NULL, NULL, NULL, NULL, 1518458119, NULL, 1, 'le', 'an', NULL, 'Mato', '1234567777', NULL, ''),
(81, '::1', 'lebe', '$2y$08$w3XEnONiKi36AKaBFzVjc.mjzhKT5H008rrjYNmF76.eepIxKbwYu', NULL, 'lebe@lebe.com', NULL, NULL, NULL, NULL, 1518458267, NULL, 1, 'be', 'le', 'Giam doc', 'CCC', '123', NULL, ''),
(82, '::1', 'le1', '$2y$08$OlYy05HLRKbVhDmSJs.1SeEArTnQvkRjdmdGoeLvNZU.ntF2y7CDy', NULL, 'le1@client.com', NULL, NULL, NULL, NULL, 1519323551, 1521658184, 1, '1', 'le', 'Giam doc', 'CCC', '1234567777', NULL, ''),
(84, '14.162.130.145', 'mcminh', '$2y$08$ievOqwuRkp9/wZ.royAEkuRgF0MAOcJxidUmXNYidfpL7Rf.AmICS', NULL, 'mc.minh@gmail.com', NULL, NULL, NULL, NULL, 1519700953, 1543835650, 1, 'Minh', 'MC', 'IT', 'VINASA', '936136696', NULL, ''),
(85, '42.113.29.21', 'annguyenblah', '$2y$08$Oua63PSA1/YdMWfTs9uRk.9tOmPzo1IxUnYp47bzdqtpHWasZVZ9S', NULL, 'annguyenblah@test.com', NULL, NULL, NULL, NULL, 1521648397, 1540146295, 1, 'an', 'nguyen', 'nv', 'Blah', '123', NULL, ''),
(86, '42.113.29.21', 'memberannguyen', '$2y$08$q51q6oj2w5uBrIslpa30o.v3qvt5koIFDPZT.FskDnC10Ttq858fe', NULL, 'memberannguyen@test.com', NULL, NULL, NULL, NULL, 1521648470, 1543152245, 1, 'member', 'annguyen', 'nv', 'blah', '123', NULL, '[\"10\",\"10\"]'),
(88, '118.71.6.102', 'linhtd', '$2y$08$e7gVu6Fbm1RRsYy1rRgSje150rTkSoM1J3SoFkcjyTvDbwJJReZh2', NULL, 'linhtd@vinasa.org.vn', NULL, NULL, NULL, NULL, 1525493960, 1525494011, 1, 'Linh', 'Tran', 'Tro ly', 'Sun', '01639341505', NULL, ''),
(90, '222.252.62.64', 'support', '$2y$08$qXO2Z9ajqXDCDq9Q3E2xLeE2XUrvFrOWWbyiluH.Dd1FMrEIjJ0Pa', NULL, 'support@vinasa.org.vn', NULL, NULL, NULL, NULL, 1526282860, 1544412817, 1, '1', 'Support', 'tester', 'VNS', '2222222222', NULL, ''),
(92, '14.162.162.202', 'thaovp', '$2y$08$dMSYGlIlodo4tvDM4Yu.D.frAmyYCIP8NrMT9i8tiGI9279UKHfjS', NULL, 'thaovp@vinasa.org.vn', NULL, NULL, NULL, NULL, 1540359422, 1544084056, 1, 'Thao', 'Vu Phuong', 'Vice Director', 'VINASA', '0902272783', NULL, ''),
(93, '14.162.162.202', 'thaoan', '$2y$08$pXGkkSHGKtrV0hiot3gboOxvyRsfUtnBTQEO9.JeL2.xEcbE2TvWG', NULL, 'thaoan@vinasa.org.vn', NULL, NULL, NULL, NULL, 1540359570, 1540359626, 1, 'Ngoc', 'An', 'D', 'VINASA', '09377300484', NULL, ''),
(96, '14.231.160.19', 'HANGCA', '$2y$08$jg68kqCa/5c0sFhxEdbIoeQ3un7tQXEqQax.h.rlekHHyIfSZpknS', NULL, 'hangca@vinasa.org.vn', NULL, NULL, NULL, NULL, 1543891122, 1543891215, 1, 'hang', 'Hang', 'aaaa', 'VINASA', 'dd', NULL, ''),
(97, '59.153.243.103', 'Hungdt1981', '$2y$08$BSRYyNefw8bRefi7mxVaL.eU/tOKGbmEGsWhN0pT5l71xDhCqN1LW', NULL, 'Hungdt1981@gmail.com', NULL, NULL, NULL, NULL, 1543908907, 1543908939, 1, 'Trọng Hưnh', 'Đỗ', 'Nhân viên', 'Nsss', '0988888112', NULL, ''),
(98, '14.231.160.19', 'HMT', '$2y$08$Q3kVos3VUmNexzpLwfGk/OXSPOhbbkxL/3US8blHu2ARIu2jQ83YC', NULL, 'thuhm@vinasa.org.vn', NULL, NULL, NULL, NULL, 1543909655, 1543909723, 1, 'Thư', 'Hoang Minh', 'AAA', 'Công ty Hoàng Minh Thu', '11111111111', NULL, ''),
(99, '14.231.160.19', 'huonglinhk51', '$2y$08$6DCzvGiNFQb93ZllzUf95u6/qIe.gdF6NZrk.98AHs5mwOdbGOdhK', NULL, 'huonglinhk51@gmail.com', NULL, NULL, NULL, NULL, 1543911167, 1543976521, 1, 'Linh', 'Trần', 'Giám đốc', 'CP TNHH Hương Linh', '0339341505', NULL, ''),
(100, '14.231.160.19', 'Giang Biên', '$2y$08$XedO9QU3KHwZ2lwHXCDPFOer3aETwNrLPRwNRDUudLP2ik5T8mBZW', NULL, 'lethianhtuyet170588@gmail.com', NULL, NULL, NULL, NULL, 1543974896, 1543976441, 1, 'Tuyết', 'Lê', 'kế toán', 'Công ty CP Xăng dầu Giang Biên', '0981533632', NULL, ''),
(101, '14.231.160.19', 'liinhcanbetough', '$2y$08$JJm83HzTWExty840FypcWeWnZksZqQTlKuTs2EIwKzs86ycNpj65S', NULL, 'lynnn.ftu@gmail.com', NULL, NULL, NULL, NULL, 1543975816, 1543975873, 1, 'Linh', 'Hoàng', 'CE)', 'Trứng xào cà chua', '0963094981', NULL, ''),
(102, '14.231.160.19', 'hopptb', '$2y$08$XOuvbYL7K3Bf5l2euDJGwONl9Y9GbxWae4e7TJCNpL29jGTHFPxJC', NULL, 'hopptb@gmail.com', NULL, NULL, NULL, NULL, 1543978869, 1543978895, 1, 'Thi Bich Hop', 'Pham', 'Giam doc', 'Virgo LLC', '+84989990169', NULL, ''),
(103, '14.231.160.19', 'huyennn123', '$2y$08$Vbr5xJHBXAHzLqY8tdy4meYX1fkO85KDQPUXvh6CRGI6xMkm/RlFO', NULL, 'nguyenngochuyen133@gmail.com', NULL, NULL, NULL, NULL, 1543994177, 1543995316, 1, 'Ngọc Huyền', 'Nguyễn', 'CEO', 'ABC', '0339702570', NULL, ''),
(104, '14.231.160.19', 'anhnt', '$2y$08$mz/jO7q.ZFJbXmoJBUC9oO2o8ivfz3qVFjL5ECzdki5dTVLDdCjtS', NULL, 'anhnt@vinasa.org.vn', NULL, NULL, NULL, NULL, 1543994576, 1543994594, 1, 'Thế Anh', 'Nguyễn', 'điều phối', 'Hiệp hội', '0913196699', NULL, ''),
(105, '222.252.34.21', 'support1', '$2y$08$7S2aKuteFPxqR1.55VVF1O/4wp8hbi5TxwWq/Wmd0qusUDvOroaxq', NULL, 'xyz@abc.com', NULL, NULL, NULL, NULL, 1544409944, 1544416034, 1, 'BB', 'AA', 'IT', 'KKAK', 'a453 34535', NULL, ''),
(106, '222.252.34.21', 'support2', '$2y$08$FB3JlSRCrDubr8p4NGnZPOkkJpXQh9b4/bEzaYP3KMvSNcqywlROm', NULL, 'support2@vinasa.org.vn', NULL, NULL, NULL, NULL, 1544425893, 1544514313, 1, '2', 'Support', 'sss', 'sss', '2222222', NULL, ''),
(107, '222.252.34.21', 'Giang', '$2y$08$5QublX1OUAsRUAVJ1nRXpOuBK66mALNjOHv/nr3wqal7EJiIbAzca', NULL, 'nttgiang@vinasa.org.vn', NULL, NULL, NULL, NULL, 1544428280, 1544428305, 1, 'Giang', 'Nguyễn', 'àguejdg', 'VINASA', '0987654312', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(53, 1, 1),
(3, 2, 1),
(4, 3, 2),
(21, 6, 3),
(33, 49, 2),
(30, 50, 3),
(31, 51, 3),
(32, 52, 3),
(34, 53, 3),
(35, 54, 3),
(36, 55, 3),
(37, 56, 3),
(38, 57, 3),
(51, 70, 3),
(52, 71, 3),
(54, 72, 1),
(55, 73, 3),
(57, 75, 2),
(58, 76, 3),
(59, 77, 3),
(60, 78, 3),
(61, 79, 3),
(62, 80, 3),
(63, 81, 3),
(64, 82, 3),
(66, 84, 3),
(67, 85, 3),
(68, 86, 2),
(70, 88, 3),
(72, 90, 3),
(74, 92, 3),
(75, 93, 3),
(78, 96, 3),
(79, 97, 3),
(80, 98, 3),
(81, 99, 3),
(82, 100, 3),
(83, 101, 3),
(84, 102, 3),
(85, 103, 3),
(86, 104, 3),
(87, 105, 3),
(88, 106, 3),
(89, 107, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
