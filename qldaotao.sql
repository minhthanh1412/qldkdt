-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 05, 2018 lúc 10:15 AM
-- Phiên bản máy phục vụ: 10.1.29-MariaDB
-- Phiên bản PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qldaotao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblbacdaotao`
--

CREATE TABLE `tblbacdaotao` (
  `maBac` int(11) NOT NULL,
  `tenBac` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblbacdaotao`
--

INSERT INTO `tblbacdaotao` (`maBac`, `tenBac`) VALUES
(1, 'Đại học'),
(2, 'Cao đẳng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblchitietctdt`
--

CREATE TABLE `tblchitietctdt` (
  `IDchitiet` int(11) NOT NULL,
  `maCT` int(11) NOT NULL,
  `maMH` int(11) NOT NULL,
  `soTTHK` int(11) NOT NULL COMMENT 'số thứ tự học kỳ',
  `batbuoc` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblchitietctdt`
--

INSERT INTO `tblchitietctdt` (`IDchitiet`, `maCT`, `maMH`, `soTTHK`, `batbuoc`) VALUES
(147, 3, 1352, 1, 1),
(148, 3, 1313, 1, 1),
(149, 3, 1279, 1, 1),
(150, 3, 1309, 1, 1),
(151, 3, 1312, 1, 1),
(152, 3, 1314, 1, 1),
(153, 3, 1351, 1, 1),
(154, 3, 1357, 1, 1),
(155, 3, 1386, 1, 1),
(156, 3, 1391, 1, 1),
(157, 3, 1302, 1, 1),
(158, 3, 1310, 2, 1),
(159, 3, 1280, 2, 1),
(160, 3, 1361, 2, 1),
(161, 3, 1385, 2, 1),
(162, 3, 1381, 2, 1),
(163, 3, 1334, 2, 0),
(164, 3, 1378, 2, 0),
(165, 3, 1399, 2, 1),
(166, 3, 1387, 2, 0),
(167, 3, 1364, 2, 0),
(168, 3, 1311, 3, 1),
(169, 3, 1308, 3, 1),
(170, 3, 1281, 3, 1),
(171, 3, 1330, 3, 1),
(172, 3, 1388, 3, 1),
(173, 3, 1298, 3, 1),
(174, 3, 1392, 3, 1),
(175, 3, 1343, 3, 1),
(176, 3, 1377, 4, 1),
(177, 3, 1282, 4, 1),
(178, 3, 1332, 4, 1),
(179, 3, 1393, 4, 1),
(180, 3, 1315, 4, 1),
(181, 3, 1380, 4, 0),
(182, 3, 1306, 4, 0),
(183, 3, 1347, 4, 0),
(184, 3, 1400, 4, 1),
(185, 3, 1383, 5, 1),
(186, 3, 1305, 5, 1),
(187, 3, 1370, 5, 1),
(188, 3, 1297, 5, 0),
(189, 3, 1344, 5, 0),
(190, 3, 1320, 5, 1),
(191, 3, 1372, 6, 1),
(192, 3, 1401, 5, 1),
(193, 3, 1367, 6, 1),
(194, 3, 1341, 6, 0),
(195, 3, 1337, 6, 1),
(196, 3, 1373, 6, 1),
(197, 3, 1325, 6, 0),
(198, 3, 1291, 6, 0),
(199, 3, 1296, 6, 0),
(200, 3, 1376, 6, 0),
(201, 3, 1382, 6, 0),
(202, 3, 1317, 6, 0),
(203, 3, 1289, 6, 0),
(204, 3, 1301, 6, 0),
(205, 3, 1355, 6, 0),
(206, 3, 1371, 7, 1),
(207, 3, 1402, 6, 1),
(208, 3, 1336, 6, 0),
(209, 3, 1335, 6, 0),
(210, 3, 1365, 7, 1),
(211, 3, 1304, 7, 1),
(212, 3, 1288, 7, 0),
(213, 3, 1295, 7, 0),
(214, 3, 1360, 7, 0),
(215, 3, 1290, 7, 0),
(216, 3, 1340, 7, 0),
(217, 3, 1358, 7, 0),
(218, 3, 1389, 7, 0),
(219, 3, 1307, 7, 0),
(220, 3, 1294, 7, 0),
(221, 3, 1293, 7, 0),
(222, 3, 1338, 7, 0),
(223, 3, 1287, 7, 0),
(224, 3, 1375, 8, 1),
(225, 3, 1403, 7, 1),
(226, 3, 1327, 8, 1),
(227, 2, 1314, 1, 1),
(228, 2, 1352, 1, 1),
(229, 2, 1312, 1, 1),
(230, 2, 1313, 1, 1),
(231, 2, 1309, 1, 1),
(232, 2, 1404, 1, 1),
(233, 2, 1302, 1, 1),
(234, 2, 1357, 1, 1),
(235, 2, 1349, 1, 1),
(236, 2, 1310, 2, 1),
(237, 2, 1391, 1, 1),
(238, 2, 1308, 2, 1),
(239, 2, 1413, 2, 1),
(240, 2, 1405, 2, 1),
(241, 2, 1392, 2, 1),
(242, 2, 1364, 2, 1),
(243, 2, 1406, 2, 1),
(244, 2, 1347, 2, 0),
(245, 2, 1378, 2, 0),
(246, 2, 1334, 2, 0),
(247, 2, 1331, 2, 0),
(248, 2, 1311, 3, 1),
(249, 2, 1385, 3, 1),
(250, 2, 1281, 3, 1),
(251, 2, 1374, 3, 1),
(252, 2, 1335, 3, 1),
(253, 2, 1298, 3, 1),
(254, 2, 1381, 3, 1),
(255, 2, 1407, 3, 1),
(256, 2, 1363, 3, 0),
(257, 2, 1282, 4, 1),
(258, 2, 1346, 3, 0),
(259, 2, 1361, 4, 1),
(260, 2, 1393, 4, 1),
(261, 2, 1355, 4, 1),
(262, 2, 1408, 4, 1),
(263, 2, 1305, 4, 1),
(264, 2, 1373, 4, 1),
(265, 2, 1362, 4, 0),
(266, 2, 1369, 4, 0),
(267, 2, 1277, 5, 1),
(268, 2, 1365, 5, 1),
(269, 2, 1339, 5, 1),
(270, 2, 1329, 5, 1),
(271, 2, 1409, 5, 1),
(272, 2, 1303, 5, 0),
(273, 2, 1354, 5, 0),
(274, 2, 1286, 5, 0),
(275, 2, 1323, 5, 0),
(276, 2, 1318, 5, 0),
(277, 2, 1278, 6, 1),
(278, 2, 1376, 6, 1),
(279, 2, 1317, 6, 1),
(280, 2, 1316, 6, 1),
(281, 2, 1322, 6, 1),
(282, 2, 1304, 6, 1),
(283, 2, 1410, 6, 1),
(284, 2, 1321, 6, 0),
(285, 2, 1328, 6, 0),
(286, 2, 1319, 7, 1),
(287, 2, 1338, 7, 1),
(288, 2, 1325, 7, 1),
(289, 2, 1411, 7, 1),
(290, 2, 1342, 7, 0),
(291, 2, 1276, 7, 0),
(292, 2, 1353, 7, 0),
(293, 2, 1300, 7, 0),
(294, 2, 1299, 7, 0),
(295, 2, 1375, 8, 1),
(296, 2, 1327, 8, 1),
(297, 2, 1414, 7, 0),
(495, 1, 1313, 1, 1),
(496, 1, 1312, 1, 1),
(497, 1, 1352, 1, 1),
(498, 1, 1314, 1, 1),
(499, 1, 1357, 1, 1),
(500, 1, 1309, 1, 1),
(501, 1, 1348, 1, 1),
(502, 1, 1386, 1, 1),
(503, 1, 1333, 1, 1),
(504, 1, 1302, 1, 1),
(505, 1, 1385, 2, 1),
(506, 1, 1310, 2, 1),
(507, 1, 1361, 2, 1),
(508, 1, 1381, 2, 1),
(509, 1, 1387, 2, 0),
(510, 1, 1334, 2, 0),
(511, 1, 1378, 2, 0),
(512, 1, 1394, 2, 1),
(513, 1, 1364, 2, 0),
(514, 1, 1298, 3, 1),
(515, 1, 1388, 3, 1),
(516, 1, 1308, 3, 1),
(517, 1, 1311, 3, 1),
(518, 1, 1330, 3, 1),
(519, 1, 1392, 3, 1),
(520, 1, 1380, 3, 0),
(521, 1, 1395, 3, 1),
(522, 1, 1306, 3, 0),
(523, 1, 1377, 4, 1),
(524, 1, 1393, 4, 1),
(525, 1, 1335, 4, 1),
(526, 1, 1315, 4, 1),
(527, 1, 1343, 4, 1),
(528, 1, 1336, 5, 1),
(529, 1, 1305, 4, 1),
(530, 1, 1301, 5, 1),
(531, 1, 1317, 5, 1),
(532, 1, 1355, 5, 1),
(533, 1, 1297, 5, 0),
(534, 1, 1347, 5, 0),
(535, 1, 1292, 5, 0),
(536, 1, 1376, 5, 0),
(537, 1, 1396, 5, 1),
(538, 1, 1390, 5, 0),
(539, 1, 1389, 6, 1),
(540, 1, 1382, 6, 1),
(541, 1, 1373, 6, 1),
(542, 1, 1304, 6, 1),
(543, 1, 1325, 6, 0),
(544, 1, 1291, 6, 0),
(545, 1, 1397, 6, 1),
(546, 1, 1341, 6, 0),
(547, 1, 1365, 7, 1),
(548, 1, 1289, 6, 0),
(549, 1, 1342, 7, 1),
(550, 1, 1276, 7, 1),
(551, 1, 1358, 7, 0),
(552, 1, 1290, 7, 0),
(553, 1, 1338, 7, 0),
(554, 1, 1288, 7, 0),
(555, 1, 1340, 7, 0),
(556, 1, 1295, 7, 0),
(557, 1, 1398, 7, 1),
(558, 1, 1375, 8, 1),
(559, 1, 1327, 8, 1),
(560, 1, 1360, 7, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblchuongtrinhdt`
--

CREATE TABLE `tblchuongtrinhdt` (
  `maCT` int(11) NOT NULL,
  `tenCT` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên chương trình Đào tạo',
  `maNganh` int(11) NOT NULL,
  `maHeDT` int(11) NOT NULL,
  `maBacDT` int(11) NOT NULL,
  `tongTC` int(11) NOT NULL,
  `tongsoHK` int(11) NOT NULL,
  `ghiChu` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblchuongtrinhdt`
--

INSERT INTO `tblchuongtrinhdt` (`maCT`, `tenCT`, `maNganh`, `maHeDT`, `maBacDT`, `tongTC`, `tongsoHK`, `ghiChu`) VALUES
(1, 'Chương trình Đào tạo ngành CNTT - Chính quy', 1, 1, 1, 123, 8, ''),
(2, 'Chương trình đào tạo Hệ thống Thông tin quản lý - Hệ chính quy', 3, 1, 1, 0, 7, ''),
(3, 'Chương trình Đào tạo MMT&TTDL', 2, 1, 1, 130, 8, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblgiaidoan`
--

CREATE TABLE `tblgiaidoan` (
  `maGD` int(11) NOT NULL COMMENT 'mã Giai đoạn',
  `tenGD` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblgiaidoan`
--

INSERT INTO `tblgiaidoan` (`maGD`, `tenGD`) VALUES
(1, 'Đại cương'),
(2, 'Cơ sở ngành'),
(3, 'Chuyên ngành');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblhedt`
--

CREATE TABLE `tblhedt` (
  `maHeDT` int(11) NOT NULL,
  `tenHeDT` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblhedt`
--

INSERT INTO `tblhedt` (`maHeDT`, `tenHeDT`) VALUES
(1, 'Chính quy'),
(2, 'Vừa học vừa làm'),
(3, 'Liên thông từ Trung cấp'),
(4, 'Liên thông từ Cao đẳng'),
(5, 'Từ xa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblmonhoc`
--

CREATE TABLE `tblmonhoc` (
  `id` int(11) NOT NULL,
  `maMH` varchar(20) DEFAULT NULL,
  `tenMon` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `moTa` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongSoTC` int(11) NOT NULL,
  `soTCLythuyet` int(11) NOT NULL,
  `soTCThuchanh` int(11) NOT NULL,
  `soTCTuhoc` int(11) DEFAULT NULL,
  `ghiChu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maGiaidoan` int(11) NOT NULL,
  `maNhom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblmonhoc`
--

INSERT INTO `tblmonhoc` (`id`, `maMH`, `tenMon`, `moTa`, `tongSoTC`, `soTCLythuyet`, `soTCThuchanh`, `soTCTuhoc`, `ghiChu`, `maGiaidoan`, `maNhom`) VALUES
(1276, 'MT002', 'An toàn và bảo mật thông tin', 'Môn học này cung cấp cho sinh viên kiến thức về cơ bản về bảo mật và an ninh số liệu; sự cần thiết phải bảo vệ dữ liệu và an toàn thông tin; các phương thức tấn công thâm nhập. Nghiên cứu các phương pháp mã hoá đối xứng và cơ sở hạ tầng khoá công khai, chứng thực điện tử và một số giải pháp bảo mật khác.', 3, 2, 1, NULL, 'null', 3, 7),
(1277, 'NN005', 'Anh văn chuyên ngành 1', 'Môn học giúp trang bị cho sinh viên các kiến thức chuyên sâu về tiếng Anh trong chuyên ngành Công nghệ thông tin. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng dịch và trình bày. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về vai trò của tiếng Anh trong chuyên ngành Công nghệ thông tin và kỹ năng làm việc nhóm, viết và trình bày báo cáo.', 3, 2, 1, NULL, 'null', 3, 3),
(1278, 'NN006', 'Anh văn chuyên ngành 2', 'Môn học giúp trang bị cho sinh viên các kiến thức chuyên sâu về tiếng Anh trong chuyên ngành Công nghệ thông tin. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng viết tóm tắt, báo cáo bài báo khoa học và lý lịch cá nhân. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về vai trò của tiếng Anh trong chuyên ngành Công nghệ thông tin và kỹ năng làm việc nhóm, viết và trình bày báo cáo.\n\n\n', 3, 2, 1, NULL, 'null', 3, 3),
(1279, 'NN001', 'Anh văn không chuyên 1', 'Học phần này, sinh viên bắt đầu làm quen với tiếng Anh theo đánh giá năng lực Khung tham chiếu Châu âu (CEFR) ở cấp độ A1 và tiền A2. Sinh viên có cơ hội làm quen với tất cả các kỹ năng của ngôn ngữ như Nghe, Nói, Đọc và Viết. Những kỹ năng này được phát triển qua các chủ điểm như: friends, shopping, food and drinks, leisure and hobbies, clothes, travel, sport, family, books and studying, language and communication…Đồng thời sinh viên cũng được làm quen với các dạng đề thi ở cấp độ A2', 4, 2, 2, NULL, 'null', 1, 3),
(1280, 'NN002', 'Anh văn không chuyên 2', 'Học phần này, sinh viên tiếp tục làm quen với dạng đề thi A2 và tiếp tục phát triển bốn kỹ năng ngôn ngữ ở học phần Anh Văn Không Chuyên 1 ở cấp độ A2 và tiền B1 theo Khung tham chiếu Châu âu (CEFR). Các kỹ năng này được phát triển qua những mẫu hội thoại giao tiếp và những tin nhắn, email ngắn hàng ngày qua các chủ điểm như sports, friendly people, jobs, outdoor activities, travel, past activities, facts and figures, celebration, studying,… ', 3, 2, 1, NULL, 'null', 1, 3),
(1281, 'NN003', 'Anh văn không chuyên 3', 'Học phần này, sinh viên tiếp tục làm quen với dạng đánh giá năng lực ngôn ngữ theo Khung tham chiếu Châu âu (CEFR) ở cấp độ Pre-B1, phát triển thêm ngôn ngữ và vốn từ vựng của mình. Sinh viên tiếp tục phát triển kỹ năng nghe Nói, Đọc, Viết qua các chủ điểm như fashion, risks, free time activities, entertainment episodes, films, happy families, aptitudes and discoveries.', 3, 2, 1, NULL, 'null', 1, 3),
(1282, 'NN004', 'Anh văn không chuyên 4', 'Học phần cuối này giúp sinh viên phát triển thêm kiến thức ngôn ngữ và những trải nghiệm sử dụng ngôn ngữ của mình ở bậc B1 theo Khung tham chiếu Châu âu (CEFR). Sinh viên thể hiện năng lực ngôn ngữ qua các chủ điểm như friends, self-discoveries, persuading people, travellers’ tales, celebrities, eating out and choices. Đồng thời sinh viên cũng sẽ làm quen dạng đề thi đánh giá năng lực theo Khung tham chiếu Âu (CEFR).', 3, 2, 1, NULL, 'null', 1, 3),
(1283, 'KT002', 'Các quy trình và công nghệ ngân hàng, bán lẻ', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản liên quan đến hoạt động của ngân hàng thương mại, dịch vụ ngân hàng bán lẻ và công nghệ ngân hàng. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên kỹ năng sử dụng phần mềm có liên quan đến lĩnh vực ngân hàng. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về tầm quan trọng của môn học trong chương trình đào tạo, kỹ năng suy luận và giải quyết vấn đề.', 2, 1, 1, NULL, 'null', 3, 6),
(1284, 'CS005', 'Cấu trúc dữ liệu và Giải thuật 1', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về giải thuật và đánh giá độ phức tạp của giải thuật; phân tích và vận dụng các giải thuật sắp xếp, tìm kiếm; các cấu trúc dữ liệu kiểu danh sách liên kết và cây nhị phân.', 3, 2, 1, NULL, 'null', 2, 11),
(1285, 'CS006', 'Cấu trúc dữ liệu và Giải thuật 2', 'null', 2, 1, 1, NULL, 'null', 2, 11),
(1286, 'KT003', 'Chiến lược kinh doanh thương mại điện tử', 'Môn học cung cấp các kiến thức cơ bản về quản trị chiến lược và quản trị chiến lược kinh doanh điện tử. Phân tích, đánh giá và hoạch định chiến lược kinh doanh trước sự tác động của công nghệ thông tin trong nhiều lĩnh vực: sản xuất, thương mại, tài chính, ngân hàng, y tế, giáo dục, phân phối, du lịch,… thông qua giải quyết các bài tập tình huống. Xây dựng chiến lược ứng dụng công nghệ thông tin vào các hoạt động kinh doanh hiện tại và ứng dụng công nghệ thông tin để xây dựng mô hình kinh doanh điện tử.', 2, 1, 1, NULL, 'null', 3, 6),
(1287, 'MT003', 'Chuyên đề An toàn và bảo mật thông tin', 'Môn học này cung cấp cho sinh viên kiến thức về cơ bản về bảo mật và an ninh số liệu; sự cần thiết phải bảo vệ dữ liệu và an toàn thông tin; các phương thức tấn công thâm nhập. Nghiên cứu các phương pháp mã hoá đối xứng và cơ sở hạ tầng khoá công khai, chứng thực điện tử và một số giải pháp bảo mật khác.', 3, 2, 1, NULL, 'null', 3, 7),
(1288, 'PM001', 'Chuyên đề ASP.NET', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về lập trình Web. Đồng thời, môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng lập trình Web bằng phần mềm C# như: Xây dựng trang Web với ASP.NET cho cơ quan, công ty nào đó. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về việc tự phát triển kiến thức nghề nghiệp và kỹ năng giao tiếp đa phương tiện.', 3, 2, 1, NULL, 'null', 3, 8),
(1289, 'PM003', 'Chuyên đề Công nghệ XML và Ứng dụng', 'Môn học giúp trang bị cho sinh viên các kiến thức chuyên sâu về ngôn ngữ XML. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng  lập trình . Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về tầm quan trọng của XML trong thời đại ngày nay và kỹ năng làm việc nhóm.', 3, 2, 1, NULL, 'null', 3, 8),
(1290, 'PM004', 'Chuyên đề DB2', 'Giúp sinh viên hiểu rõ lý thuyết của Hệ quản trị Cơ sở Dữ liệu (HQT CSDL), khai thác được cơ chế hoạt động của HQT và sử dụng thành thạo HQT CSDL BD2 nhằm xây dựng những ứng dụng đặc thù liên quan đến CSDL. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng tư duy logic, kỹ năng làm việc nhóm, viết và trình bày báo cáo. Giúp hình thành thái độ và nhận thức đúng đắn về Cơ sở dữ liệu, Hệ quản trị cơ sở dữ liệu.', 3, 2, 1, NULL, 'null', 3, 8),
(1291, 'MT004', 'Chuyên đề Điện toán đám mây', 'Học phần trang bị cho sinh viên các khái niệm cơ bản về Điện toán đám mây (ĐTĐM), các đặc trưng của nó, phân loại đám mây gồm đám mây công cộng (Public Cloud), đám mây riêng (Private Cloud) , đám mây lai (Hybrid Cloud) và đám mây cộng đồng (Community Cloud); giúp sinh viên hiểu rõ các khái niệm cơ bản về các dịch vụ của điện toán đám mây như Infrastructure as a Service (IaaS), Platform as a Service (PaaS), Software as a Service (SaaS), các công nghệ ứng dụng trong việc xây dựng, khai thác, quản lý điện toán đám mây, công nghệ ảo hóa trên đám mây. Đồng thời, giúp sinh viên nắm vững vai trò của ĐTĐM được triển khai và sử dụng trong thực tế, các cơ chế hoạt động, cách khai thác và sử dụng nhằm mang lại hiệu quả cao nhất, bảo mật an toàn dữ liệu trong quá trình sử dụng đối với cá nhân và doanh nghiệp.', 3, 2, 1, NULL, 'null', 3, 7),
(1292, 'MT005', 'Chuyên đề Linux', 'null', 3, 2, 1, NULL, 'null', 3, 7),
(1293, 'MT006', 'Chuyên đề mạng WAN', 'Học phần trang bị cho sinh viên công nghệ WAN và các dịch vụ mạng đòi hỏi bởi các ứng dụng hội tụ trong một hệ thống mạng. Đồng thời, cho phép sinh viên hiểu các tiêu chí lựa chọn của các thiết bị mạng và công nghệ WAN để đáp ứng các yêu cầu về mạng.', 3, 2, 1, NULL, 'null', 3, 7),
(1294, 'PM005', 'Chuyên đề nhận dạng và xử lý ảnh', 'Môn học cung cấp cho sinh viên những kiến thức cơ bản về ảnh số; các phương pháp và kỹ thuật xử lý ảnh như: biểu diễn, lọc và nâng cao chất lượng ảnh; các phương pháp phân vùng ảnh, xác định biên ảnh và một số kỹ thuật và công nghệ nén ảnh số.', 3, 2, 1, NULL, 'null', 3, 8),
(1295, 'PM006', 'Chuyên đề Oracle', 'null', 3, 2, 1, NULL, 'null', 3, 8),
(1296, 'MT007', 'Chuyên đề Thiết bị định tuyến và chuyển mạch nâng cao', 'Học phần trang bị cho sinh viên về kiến trúc, thành phần và hoạt động của bộ định tuyến (Router) và bộ chuyển mạch (Switch) trong hệ thống mạng lớn. Đồng thời, giúp sinh viên cấu hình Router và Switch cho các chức năng nâng cao như: cấu hình DHCP trên Router, cấu hình NAT, cấu hình và xử lý sự cố trên Router và Switch, giải quyết các vấn đề của các giao thức OSPF, EIGRP và STP trên mạng IPv4 và IPv6.', 3, 2, 1, NULL, 'null', 3, 7),
(1297, 'MT008', 'Chuyên đề truyền thông và mạng không dây', 'Môn học giúp trang bị cho\nsinh viên các kiến thức tổng quan về  truyền thông và mạng không dây (Wireless LAN-WLAN)\n, các kỹ thuật và cơ chế bảo mật WLAN. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên \ncác kỹ năng thiết lập, vận hành một hệ thống mạng không dây trong các mô hình mạng thực tế. \nMôn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về vai trò \nvà trách nhiệm của người kỹ sư CNTT và kỹ năng học tập chủ động; tự phát triển kiến thức nghề nghiệp;\n ham tìm hiểu và khả năng học tập suốt đời.\n', 2, 1, 1, NULL, 'null', 3, 7),
(1298, 'CS007', 'Cơ sở dữ liệu', 'Học phần này trang bị cho sinh viên các kiến thức cơ bản về cơ sở dữ liệu (CSDL); trình bày được ý nghĩa và vai trò của CSDL; áp dụng các kiến thức về CSDL quan hệ và các phép toán đại số quan hệ để giải quyết các bài toán có liên quan; kiểm tra ràng buộc toàn vẹn cho cơ sở dữ liệu quan hệ; chuẩn hóa cơ sở dữ liệu; tóm tắt các kiến thức về ngôn ngữ SQL; sử dụng hệ quản trị cơ sở dữ  liệu SQL Server làm công cụ để cài đặt, thao tác, truy vấn dữ liệu. Đồng thời môn học này cũng rèn luyện sinh viên kỹ năng làm việc độc lập, làm việc nhóm và tư duy hệ thống.', 3, 2, 1, NULL, 'null', 2, 11),
(1299, 'PM007', 'Cơ sở dữ liệu NoSQL', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về kiến trúc lưu trữ dữ liệu phi quan hệ (NoSQL), cách cách mô hình hóa dữ liệu và các kỹ thuật tương tác. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về tầm quan trọng của quá trình xây dựng một hệ thống thông tin và kỹ năng làm việc nhóm.', 2, 1, 1, NULL, 'null', 3, 8),
(1300, 'PM008', 'Cơ sở dữ liệu Oracle', 'Môn học này trang bị cho sinh viên các kiến thức cơ bản về quản trị một hệ thống cơ sở dữ liệu bao gồm việc quản trị người dùng, cơ chế phân quyền, quản trị cơ sở dữ liệu, ngôn ngữ lập trình thủ tục (PL/SQL), cơ chế hoạt động của Oracle DBMS, kiến trúc Oracle, các kiến thức về sao lưu, phục hồi dữ liệu. Khối kiến thức của môn học này đóng vai trò quan trọng giúp cho sinh viên sau khi ra trường có thể làm việc với vai trò của người quản trị hệ thống DBMS, người thiết kế, lập trình các ứng dụng cơ sở dữ liệu trong các công ty, xí nghiệp có sử dụng Oracle database server.', 2, 1, 1, NULL, 'null', 3, 8),
(1301, 'PM010', 'Công nghệ phần mềm', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về công nghệ phần mềm. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng tiếp cận và thực hiện dự án phần mềm. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về nghề nghiệp và kỹ năng làm việc nhóm và giao tiếp.', 3, 2, 1, NULL, 'null', 3, 8),
(1302, 'TN001', 'Đại số tuyến tính', 'null', 2, 1, 1, NULL, 'null', 1, 2),
(1303, 'PM011', 'Điện toán đám mây', 'Học phần trang bị cho sinh viên các khái niệm cơ bản về Điện toán đám mây (ĐTĐM), các đặc trưng của nó, phân loại đám mây gồm đám mây công cộng (Public Cloud), đám mây riêng (Private Cloud) , đám mây lai (Hybrid Cloud) và đám mây cộng đồng (Community Cloud); giúp sinh viên hiểu rõ các khái niệm cơ bản về các dịch vụ của điện toán đám mây như Infrastructure as a Service (IaaS), Platform as a Service (PaaS), Software as a Service (SaaS), các công nghệ ứng dụng trong việc xây dựng, khai thác, quản lý điện toán đám mây, công nghệ ảo hóa trên đám mây. Đồng thời, giúp sinh viên nắm vững vai trò của ĐTĐM được triển khai và sử dụng trong thực tế, các cơ chế hoạt động, cách khai thác và sử dụng nhằm mang lại hiệu quả cao nhất, bảo mật an toàn dữ liệu trong quá trình sử dụng đối với cá nhân và doanh nghiệp.', 2, 1, 1, NULL, 'null', 3, 8),
(1304, 'DA001', 'Đồ án chuyên ngành', 'Sinh viên thực hiện một đồ án ứng dụng các kiến thức chuyên ngành đã học để xây dựng một hệ thống, hoặc lập một kế hoạch triển khai và quản trị một hệ thống thông tin quản lý trong 03 tuần dưới sự hướng dẫn của giảng viên.', 2, 0, 2, NULL, 'null', 3, 9),
(1305, 'DA002', 'Đồ án cơ sở ngành', 'Sinh viên thực hiện một đồ án ứng dụng kiến thức các môn về lập trình và cơ sở ngành để viết một chương trình dưới sự hướng dẫn của giảng viên', 2, 0, 2, NULL, 'null', 3, 9),
(1306, 'PM012', 'Đồ họa ứng dụng', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về ảnh số và xử lý ảnh. Đồng thời, môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng xử lý ảnh số bằng phần mềm Photoshop như: chỉnh sửa, ghép ảnh, tối ưu hóa ảnh để đưa lên website... Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về việc tự phát triển kiến thức nghề nghiệp và kỹ năng giao tiếp đa phương tiện.', 2, 1, 1, NULL, 'null', 3, 8),
(1307, 'PM013', 'Dữ liệu lớn', 'Môn học cung cấp cho sinh viên các kiến thức cơ bản về dữ liệu lớn,  hệ thống lưu trữ và truy vấn dữ liệu lớn, cùng một số thao tác phân tích, khai thác dữ liệu lớn phổ biến. Nội dung thực hành tập trung trên  dữ liệu của hệ thống mạng cảm biến không dây (Wireless Sensor Network – WSN) để làm cơ sở phát triển các ứng dụng IoT có liên quan đến dữ liệu lớn. Môn học cũng đào tạo cho sinh viên có kỹ năng, thái độ, nhận thức phù hợp về vai trò của dữ liệu lớn trong bối cảnh đang diễn ra cuộc cách mạng công nghiệp 4.0.', 3, 2, 1, NULL, 'null', 3, 8),
(1308, 'LL001', 'Đường lối cách mạng của Đảng Cộng sản Việt Nam', 'Trình bày chủ nghĩa duy vật biện chứng; chủ nghĩa duy vật lịch sử; học thuyết giá trị; học thuyết giá trị thặng dư; học thuyết về chủ nghĩa tư bản độc quyền và chủ nghĩa tư bản độc quyền nhà nước; sứ mệnh lịch sử của giai cấp công nhân và cách mạng xã hội chủ nghĩa; những vấn đề chính trị- xã hội có tính quy luật trong tiến trình cách mạng xã hội chủ nghĩa; chủ nghĩa xã hội hiện thực và triển vọng', 3, 3, 0, NULL, 'null', 1, 1),
(1309, 'TC001', 'Giáo dục thể chất 1', 'null', 0, 0, 0, NULL, 'null', 1, 5),
(1310, 'TC002', 'Giáo dục thể chất 2', 'null', 0, 0, 0, NULL, 'null', 1, 5),
(1311, 'TC003', 'Giáo dục thể chất 3', 'null', 0, 0, 0, NULL, 'null', 1, 5),
(1312, 'QP001', 'Giáo dục quốc phòng 1', 'null', 0, 0, 0, NULL, 'null', 1, 4),
(1313, 'QP002', 'Giáo dục quốc phòng 2', 'null', 0, 0, 0, NULL, 'null', 1, 4),
(1314, 'QP003', 'Giáo dục quốc phòng 3', 'null', 0, 0, 0, NULL, 'null', 1, 4),
(1315, 'MT001', 'Hệ điều hành', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về hệ thống máy tính và nguyên lý hoạt động của một hệ điều hành. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng cài đặt các giải pháp quản lý các hệ thống tập tin, bộ nhớ, tiến trình…', 3, 2, 1, NULL, 'null', 2, 7),
(1316, 'PM014', 'Hệ hỗ trợ quyết định', 'Môn học trang bị cho sinh viên các kiến thức liên quan đôn hệ hỗ trợ ra quyết định như kiến trúc, môi trường và các thành phần của một hệ hỗ trợ ra quyết định. Ngoài ra môn học còn giúp sinh viên hiểu được các mô hình hệ hỗ trợ quyết định, các kỹ thuật đánh giá mô hình và vận dụng các mô hình hỗ trợ quyết định để giải quyết các vấn đề liên quan trong thực tiễn quản lý. Bên cạnh đó, sinh viên còn tiếp cận với các công nghệ phát triển hệ hỗ trợ quyết định và khai thác các phần mềm hỗ trợ quyết định (Excel, Expert Choice, Exsys, data mining…) để giải các bài toán liên quan.', 2, 1, 1, NULL, 'null', 3, 8),
(1317, 'PM015', 'Hệ quản trị Cơ sở dữ liệu', 'Môn học giúp trang bị cho sinh viên các kiến thức chuyên sâu về Hệ quản trị cơ sở dữ liệu như: mô tả các thành phần chính trong một hệ quản trị cơ sở dữ liệu; phân loại lịch giao tác; phân tích các kỹ thuật điều khiển đồng thời; trình bày các chiến lược khôi phục dữ liệu; sử dụng hệ quản trị cơ sở dữ liệu SQL Server làm công cụ để: truy vấn dữ liệu bằng ngôn ngữ SQL, viết các View, thủ tục lưu trữ, trigger, cài đặt chế độ phân quyền trong đăng nhập và khai thác dữ liệu; mô tả cấu trúc lưu trữ dữ liệu trên đĩa; ước lượng kích thước và tối ưu hóa câu truy vấn. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng thực nghiệm khám phá tri thức. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về vai trò và trách nhiệm của người quản trị dữ liệu và kỹ năng làm việc nhóm và giao tiếp.', 3, 2, 1, NULL, 'null', 3, 8),
(1318, 'PM016', 'Hệ quản trị nội dung', 'Học phần trang bị cho sinh viên các kiến thức về hệ quản trị nội dung (CMS). Qua đó, sinh viên có thể đánh giá được những thuận lợi và khó khăn khi sử dụng các CMS. Đồng thời, môn học này còn giới thiệu quy trình cài đặt, thiết kế và quản lý nội dung trên Website bằng Joomla – một trong những CMS thông dụng nhất hiện nay. Bên cạnh đó, với việc được thực hành trên một CMS mã nguồn mở thông dụng như Joomla, sinh viên sẽ biết cách chọn và sử dụng Template thích hợp cho Website theo yêu cầu thực tế; cũng như ứng dụng thành thạo Joomla trong việc xây dựng và quản lý nội dung của Website. Không những thế, môn học còn giúp sinh viên rèn luyện một số kỹ năng mềm và thái độ như: rèn luyện kỹ năng thuyết phục, trao đổi và lấy thông tin từ phía khách hàng trong quá trình khảo sát yêu cầu và chọn lựa hệ thống Website đáp ứng yêu cầu người dùng; yêu thích việc xây dựng Website; làm việc độc lập và làm việc nhóm.', 2, 1, 1, NULL, 'null', 3, 8),
(1319, 'PM017', 'Hệ thống hoạch định nguồn lực doanh nghiệp', 'Cung cấp cho sinh viên những kiến thức cơ bản về hệ thống hoạch định nguồn lực doanh nghiệp (Enterprise Resource Planning – ERP System). Sinh viên được tiếp cận với các quy trình quan trọng trong việc hoạch định nguồn lực doanh nghiệp thông qua một hệ thống ERP cụ thể.', 2, 1, 1, NULL, 'null', 3, 8),
(1320, 'MT009', 'Hệ thống nhúng', 'Môn học cung cấp cho sinh viên các kiến thức cơ bản về hệ thống nhúng, các thành phần phần cứng, phần mềm cũng như các ứng dụng thực tế trong hệ thống nhúng. Môn học cũng trang bị cho người học khả năng lập trình trên các thiết bị nhúng, xây dựng và triển khai các chương trình máy tính trên các thiết bị nhúng phục vụ các yêu cầu thực tế. Ngoài ra, môn học còn giúp người học có kỹ năng đọc hiểu tài liệu kỹ thuật bằng tiếng Anh, khả năng tự học hỏi, thích ứng nhanh với các công nghệ mới.', 3, 2, 1, NULL, 'null', 3, 7),
(1321, 'PM018', 'Hệ thống quản lý chuỗi cung ứng', 'Môn học trang bị cho sinh viên những kiến thức cơ bản liên quan tới quản trị chuỗi cung ứng. Từ đó sinh viên sẽ biết được cách cấu hình mạng lưới phân phối, quản trị tồn kho, phân chia rủi ro và biết cách tích hợp chuỗi cung ứng. Ngoài ra môn học còn giúp sinh viên biết cách đề xuất và thực thi chiến lược hậu cần, biết cách phân phối trong chuỗi cung ứng và nhận định các vấn đề quốc tế trong quản trị chuỗi cung ứng.', 2, 1, 1, NULL, 'null', 3, 8),
(1322, 'PM019', 'Hệ thống quản lý quan hệ khách hàng', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về quản trị quan hệ khách hàng gồm chiến lược, mô hình, những đo lường marketing. Sinh viên cũng được thực hiện các quy trình quản lý quan hệ khách hàng trên một hệ thống CRM cụ thể. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về nghề nghiệp và kỹ năng làm việc nhóm và giao tiếp.', 2, 1, 1, NULL, 'null', 3, 8),
(1323, 'PM020', 'Hệ thống quản trị quy trình nghiệp vụ', 'Môn học trang bị các kiến thức cơ bản, một số kỹ năng thực tế về quản lý quy trình nghiệp vụ nhằm áp dụng việc mô hình hoá và tổ chức quản lý các quy trình nghiệp vụ tại các doanh nghiệp. Môn học cũng giúp hình thành cho sinh viên thái độ, nhận thức đúng đắn về nghề nghiệp, kỹ năng làm việc nhóm và giao tiếp.', 2, 1, 1, NULL, 'null', 3, 8),
(1324, 'PM021', 'Hệ thống thông tin địa lý', 'Môn học giúp trang bị cho sinh viên các kiến thức tổng quan về hệ thống thông tin địa lý (Geographic Information System - GIS), cấu trúc dữ liệu, thu thập, thiết kế và xây dựng dữ liệu không gian nhằm giúp, sử dụng một phần mềm GIS và ngôn ngữ lập trình GIS cơ bản để xây dựng dự án công nghệ GIS. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về việc thường xuyên rèn luyện tính kiên trì, linh hoạt, khả năng tư duy sáng tạo và cập nhật thông tin trong lĩnh vực công nghệ thông tin cùng các kỹ năng làm việc nhóm, kỹ năng phân tích thiết kế, giao tiếp đa phương tiện, kỹ năng nghe, nói, đọc, viết tiếng Anh và sử dụng các thuật ngữ chuyên ngành', 2, 1, 1, NULL, 'null', 3, 8),
(1325, 'PM022', 'Khai khoáng dữ liệu', 'Môn học này nhằm giới thiệu quá trình khám phá tri thức, các khái niệm, công nghệ, và ứng dụng của khai thác dữ liệu. Ngoài ra, môn học này cũng trình bày các vấn đề tiền xử lý dữ liệu, các tác vụ khai thác dữ liệu, các giải thuật và công cụ khai thác dữ liệu được dùng hỗ trợ nhà phân tích dữ liệu và nhà phát triển ứng dụng khai thác dữ liệu. Nội dung của môn học bao gồm: tổng quan về khai phá dữ liệu, đặc trưng về dữ liệu, các vấn đề tiền xử lý dữ liệu, nhà kho và kỹ thuật OLAP, hồi qui dữ liệu, phân loại dữ liệu, gom cụm dữ liệu, khai phá luật kết hợp, phát triển ứng dụng khai thác dữ liệu, và các đề tài nghiên cứu nâng cao trong khai phá dữ liệu.', 3, 2, 1, NULL, 'null', 3, 8),
(1326, 'PM023', 'Kho dữ liệu và kinh doanh thông minh', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản Kho dữ liệu như kiến trúc kho dữ liệu, cách thiết kế kho dữ liệu, các mô hình và công cụ kỹ thuật áp dụng cho kho dữ liệu. Môn học cũng cung cấp các kiến thức về kinh doanh thông minh, các kỹ thuật khai thác dữ liệu từ kho nhằm mục đích tạo cơ sở cho người học giải quyết các  bài toán về quản lí cũng như ra quyết định trong kinh doanh thông minh (Business Intelligence). Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về tầm quan trọng của quá trình xây dựng một hệ thống thông tin và kỹ năng làm việc nhóm.', 3, 2, 1, NULL, 'null', 3, 8),
(1327, 'DA003', 'Khóa luận tốt nghiệp', 'Khóa luận tốt nghiệp được làm vào cuối khóa học để trình bày những kết quả nghiên cứu về chủ đề đã chọn.', 7, 0, 7, NULL, 'null', 3, 9),
(1328, 'KT004', 'Khởi sự doanh nghiệp', 'Môn học cung cấp cho sinh viên kiến thức cơ bản về kinh doanh và khởi nghiệp kinh doanh; nhận biết được các cơ hội để tìm ý tưởng kinh doanh, xác định được các phương pháp tìm ý tưởng kinh doanh, phân tích đánh giá  tính khả thi của ý tưởng kinh doanh; Nhận biết được các đặc tính và kỹ năng cần có của người chủ doanh nghiệp, biết về các loại hình doanh nghiệp đang hoạt động tại Việt Nam; Có kiến thức và khả năng lập kế hoạch kinh doanh (bao gồm phân tích thị trường, lập kế hoạch marketing, kế hoạch nhân sự, kế hoạch tài chính,..). Môn học tạo động lực, thúc đẩy người học khởi nghiệp kinh doanh.', 2, 1, 1, NULL, 'null', 3, 6),
(1329, 'PM024', 'Kiến trúc hạ tầng hệ thống thông tin', 'Môn học cung cấp cho sinh viên kiến thức về hạ tầng công nghệ thông tin (phần cứng, phần mềm), các vấn đề xử lý an toàn và truyền thông dữ liệu trong môi trường mạng doanh nghiệp. Môn học cũng trang bị cho sinh viên khả năng cài đặt và vận hành các dịch vụ mạng an toàn, ứng dụng công nghệ thông tin nhằm nâng cao hiệu quả kinh doanh của doanh nghiệp', 2, 1, 1, NULL, 'null', 3, 8),
(1330, 'CS008', 'Kiến trúc máy tính', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về kiến trúc hệ máy tính, biết sử dụng phương pháp để tối giản mạch số cơ bản, biết vận dụng các phép toán số học để biểu diễn dữ liệu trong máy tính. Hiểu biết các nguyên lý hoạt động phần cứng PC (máy tính cá  nhân). Cài đặt phần mềm hệ thống (hệ điều hành) và các phần mềm ứng dụng văn phòng trên máy tính cá  nhân', 3, 2, 1, NULL, 'null', 2, 11),
(1331, 'KT005', 'Kinh tế vĩ mô', 'Học phần này giúp cho người học trình bày tổng quan về kinh tế học và kinh tế học vĩ mô; tính được tổng sản phẩm và thu nhập quốc dân; Đo lường tổng cầu và chính sách tài khóa, chính sách ngoại thương; Phân tích tổng cung và các chu kỳ kinh doanh; Trình bày về tiền tệ và chính sách tiền tệ; Trình bày về kinh tế vĩ mô của nền kinh tế mở; Thực hiện một phân tích theo một chủ đề kinh tế vĩ mô.', 2, 2, 0, NULL, 'null', 3, 6),
(1332, 'MT010', 'Kỹ thuật điện tử cơ bản', 'Học phần trang bị cho sinh viên các kiến thức cơ bản về linh kiện điện tử và lập trình điều khiển cơ bản với vi điều khiển Arduino. Đồng thời, giúp sinh viên có kỹ năng cơ bản về thiết kế mạch điện tử, làm cơ sở cho việc nghiên về các ứng dụng có liên quan đến lĩnh vực điện tử, điều khiển tự động, IoT, ...', 3, 2, 1, NULL, 'null', 3, 7),
(1333, 'CS009', 'Kỹ thuật lập trình', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về kỹ thuật lập trình giải quyết bài toán trên máy tính. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng phân tích bài toán, lập trình giải các bài toán trên máy tính bằng ngôn ngữ lập trình C với giải thuật hiệu quả. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về tầm quan trọng của môn học và phương pháp lập trình trên máy tính.', 3, 2, 1, NULL, 'null', 2, 11),
(1334, 'XH001', 'Kỹ thuật xây dựng và ban hành văn bản', 'null', 2, 1, 1, NULL, 'null', 1, 10),
(1335, 'CS010', 'Lập trình hướng đối tượng', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về lập trình theo phương pháp hướng đối tượng. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng viết chương trình trên ngôn ngữ cấp cao. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về việc các định được các giả thiết, tiêu chuẩn, minh chứng để đưa ra quyết định phù hợp và kỹ năng tư duy tổng thể vấn đề.', 3, 2, 1, NULL, 'null', 2, 11),
(1336, 'PM025', 'Lập trình Java', 'Môn học giúp trang bị cho sinh viên các kiến thức về ngôn ngữ lập trình Java, kiến thức về các cấu trúc lệnh cơ bản, kiến thức thiết kế hướng đối tượng với ngôn ngữ Java cũng như việc kết nối cơ sở dữ liệu, lập trình đa luồng với Java. Môn học giúp cho sinh viên có khả năng thiết kế các ứng dụng Java cơ bản cho đến các ứng dụng giao diện có kết nối cơ sở dữ liệu, lập trình đa luồng, đồng thời cũng giúp sinh viên hình thành thái độ và nhận thức đúng đắn về việc tự phát triển kiến thức nghề nghiệp.', 3, 2, 1, NULL, 'null', 3, 8),
(1337, 'PM026', 'Lập trình mạng', 'Học phần trang bị cho sinh viên những kiến thức về lập trình java, lập trình mạng phân tán cũng như các mô hình lập trình mạng phổ biến. Qua đó, sinh viên có thể áp dụng những kiến thức này để phát triển những ứng dụng xử lý giao tiếp từ xa, ứng dụng xử lý phân tán trong trong môi trường mạng cục bộ, mạng internet...Đồng thời sinh viên được tiếp cận một số mô hình lập trình mạng tiên tiến.', 3, 2, 1, NULL, 'null', 3, 8),
(1338, 'PM027', 'Lập trình thiết bị di động', 'Học phần trang bị cho sinh viên các kiến thức cơ bản về lập trình cho thiết bị di động. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng phân tích và thiết kế. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về vai trò của việc lập trình cho thiết bị di động trên các môi trường hệ điều hành khác nhau và kỹ năng làm việc nhóm, viết và trình bày báo cáo.', 3, 2, 1, NULL, 'null', 3, 8),
(1339, 'PM028', 'Lập trình ứng dụng ', 'Môn học giúp trang bị cho sinh viên các kiến thức chuyên sâu về quản lý một dự án công nghệ thông tin. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng quản lý các lĩnh vực trong quản lý  dự án công nghệ thông tin. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về làm việc nhóm, quản lý nhóm và kỹ năng đàm phán.', 3, 2, 1, NULL, 'null', 3, 8),
(1340, 'PM029', 'Lập trình ứng dụng phân tán đối tượng', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về lập trình phân tán hướng đối tượng, kiến trúc client/server và SaaS. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng tiếp cận và thực hiện dự án phần mềm. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về nghề nghiệp và kỹ năng làm việc nhóm và giao tiếp.', 3, 2, 1, NULL, 'null', 3, 8),
(1341, 'PM030', 'Lập trình ứng dụng trên Windows', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về lập trình ứng dụng. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng tiếp cận và thực hiện dự án phần mềm. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về nghề nghiệp và kỹ năng làm việc nhóm và giao tiếp.', 3, 2, 1, NULL, 'null', 3, 8),
(1342, 'PM031', 'Lập trình web nâng cao', 'Môn học giúp trang bị cho sinh viên các kiến thức chuyên sâu về xây dựng website bằng ngôn ngữ C# kết hợp sử dụng Web Service. Đồng thời thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng về sử dụng các phương thức web services, WCF Service, PayPal Services, từ đó học viên có thể xây dựng các ứng dụng Web trong nhiều lĩnh vực khác nhau với C#.', 3, 2, 1, NULL, 'null', 3, 8),
(1343, 'CS011', 'Lý thuyết đồ thị', 'Học phần này giúp sinh viên nắm được cấu trúc dữ liệu và các khái niệm cơ bản của đồ thị, từ đó vận dụng để giải quyết các bài toán trong tin học liên quan đến đồ thị.', 3, 2, 1, NULL, 'null', 2, 11),
(1344, 'MT011', 'Mạng cảm biến không dây', 'Môn học cung cấp cho sinh viên khái niệm về hệ thống mạng cảm biến, các kỹ thuật cảm biến và truyền dẫn không dây. Cài đặt các ứng dụng mạng cảm biến không dây cho các thiết bị đang có trong thực tế.', 2, 1, 1, NULL, 'null', 3, 7),
(1345, 'MT012', 'Mạng máy tính', 'Môn học giúp trang bị cho sinh viên các kiến thức về đặc tính và thành phần cơ bản của LAN, WAN và Internet; chức năng, cấu trúc của các tầng trong mô hình OSI, các giao thức và thuật toán được sử dụng trong từng tầng; các yêu cầu của liên kết mạng. Đồng thời, môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng cấu hình, vận hành các thiết bị kết nối mạng như cable, NIC, Repeater, Bridge, Router, Switch, Modem... trong việc thiết kế một hệ thống mạng LAN.Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về việc thường xuyên rèn luyện tính kiên trì, linh hoạt, khả năng tư duy sáng tạo và cập nhật thông tin cùng các kỹ năng làm việc nhóm, kỹ năng phân tích thiết kế, kỹ năng tìm kiếm, sử dụng các thuật ngữ chuyên ngành.', 3, 2, 1, NULL, 'null', 3, 7),
(1346, 'KT006', 'Marketing căn bản', 'Học phần Marketing căn bản trình bày các vấn đề căn bản nhất của Marketing: \nKhái niệm, vai trò và các nguyên tắc, các quan điểm Marketing; \nPhân tích về hành vi của khách hàng và mối quan hệ với chiến lược Marketing;\n Hoạch định chiến lược Marketing-mix: chiến lược sản phẩm, chiến lược giá cả, \nchiến lược phân phối, chiến lược chiêu thị cho các doanh nghiệp', 3, 2, 1, NULL, 'null', 3, 6),
(1347, 'XH002', 'Nguyên lý kế toán', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về kế toán, các hoạt động, tài liệu, chứng từ, tài khoản, báo cáo được dùng trong nghiệp vụ kế toán. Môn học cũng cung cấp kiến thức cơ bản về yếu tố tài chính trong hoạt động doanh nghiệp. Các kỹ năng cần thiết cho nghiệp vụ kế toán và thái độ đúng đắn, tính cẩn thận, kiên trì của kế toán viên cũng được rèn luyện thông qua môn học.', 2, 1, 1, NULL, 'null', 1, 10),
(1348, 'CS001', 'Nhập môn Công nghệ Thông tin', 'null', 2, 1, 1, NULL, 'null', 1, 11),
(1349, 'CS002', 'Nhập môn hệ thống thông tin quản lý', 'Học phần trang bị cho sinh viên các khái niệm cơ bản về hệ thống thông tin quản lý. Đồng thời, \ngiúp sinh viên nắm vững quy trình xây dựng và phát triển các hệ thống thông tin quản lý cũng như\n việc vận hành chúng. Ngoài ra, sinh viên cũng hiểu rõ một số quy định về chính sách \nan toàn thông tin, những chế tài khi vi phạm.', 2, 1, 1, NULL, 'null', 1, 11),
(1350, 'CS003', 'Nhập môn lập trình ', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về ngôn ngữ lập trình C. \nĐồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng lập trình giải quyết \nbài toán trên máy tính. Môn học cũng giúp hình thành cho sinh viên thái độ và \nnhận thức đúng đắn về tầm quan trọng của môn học trong chương trình đào tạo,\n kỹ năng suy luận và giải quyết vấn đề.', 3, 2, 1, NULL, 'null', 1, 11),
(1351, 'CS004', 'Nhập môn ngành', 'Mục tiêu của môn học nhằm trang bị cho sinh viên những kiến thức tổng quan về ngành CNTT, những lĩnh vực ứng dụng cơ bản của CNTT trong cuộc sống, những phẩm chất, kỹ năng, kiến thức mà những người làm trong lĩnh vực CNTT cần có.\nNội dung chính của môn Nhập môn Công nghệ Thông tin (CNTT) là: Giới thiệu những kiến thức tổng quan về ngành CNTT; những khái niệm cơ bản của CNTT như đầu vào, đầu ra, thiết bị lưu trữ, mạng máy tính, lưu đồ, mã giả; kỹ năng lập trình cơ bản thông qua ngôn ngữ lập trình trực quan Alice.\n\n', 2, 1, 1, NULL, 'null', 1, 11),
(1352, 'LL002', 'Những nguyên lý cơ bản của Chủ nghĩa Mác - Lênin', 'Trình bày chủ nghĩa duy vật biện chứng; chủ nghĩa duy vật lịch sử; học thuyết giá trị; học thuyết giá trị thặng dư; học thuyết về chủ nghĩa tư bản độc quyền và chủ nghĩa tư bản độc quyền nhà nước; sứ mệnh lịch sử của giai cấp công nhân và cách mạng xã hội chủ nghĩa; những vấn đề chính trị- xã hội có tính quy luật trong tiến trình cách mạng xã hội chủ nghĩa; chủ nghĩa xã hội hiện thực và triển vọng', 5, 5, 0, NULL, 'null', 1, 1),
(1353, 'KT007', 'Phân tích dữ liệu cho marketing điện tử', 'Học phần trang bị cho sinh viên các khái niệm và ứng dụng của phân tích dữ liệu trong marketing điện tử. Đồng thời giúp sinh viên nắm vững các kỹ thuật phân tích dữ liệu nhằm hỗ trợ cho nghiệp vụ marketing trong thương mại điện tử như tổng hợp dữ liệu kinh doanh, dự đoán doanh số, xác định phân khúc thị trường, phân tích giỏ hàng, phân tích hồ sơ và hành vi khách hàng... để làm cơ sở lựa chọn cách thức, chiến lược quảng cáo hoặc tiếp thị. Sau khi học xong môn học này, sinh viên cũng có nhận thức và thái độ đúng đắn về vai trò của phân tích dữ liệu trong hoạt động thương mại điện tử.', 2, 1, 1, NULL, 'null', 3, 6),
(1354, 'KT008', 'Phân tích hoạt động kinh doanh', 'Học phần trang bị cho sinh viên các phương pháp phân tích tình hình hoạt động trong kinh doanh, cách phân tích kết quả sản xuất; chi phí, giá thành, lợi nhuận, hiệu quả tài chính của doanh nghiệp, cách xác định đối tượng phân tích, mức độ ảnh hưởng của các nhân tố đến đối tượng phân tích, qua đó giúp người học đọc được ý nghĩa số liệu trên các báo cáo tài chính; quản lý có hiệu quả các yếu tố đầu vào sản xuất; đồng thời xây dựng các kế hoạch, giải pháp đẩy mạnh tiêu thụ sản phẩm; tối đa hóa lợi nhuận. Đồng thời môn học cũng rèn luyện các kỹ năng chuyên sâu: Đánh giá đúng hiệu quả hoạt động kinh doanh của doanh nghiệp; xác định các nguyên nhân dẫn đến kết quả, những nhân tố ảnh hưởng (khách quan + chủ quan); sử dụng như một công cụ quan trọng để phát hiện và khai thác khả năng tiềm tàng; đề ra các biện pháp khắc phục và phòng ngừa rủi ro trong kinh doanh cho doanh nghiệp; đề ra các quyết định kinh doanh, hoạch định chiến lược phát triển cho doanh nghiệp và các kỹ năng mềm sau: kỹ năng tư duy, làm việc độc lập; kỹ năng tiếp cận và giải quyết vấn đề; tiếp cận, phân tích các vấn đề sản xuất, kinh doanh theo một trình tự logic, có hệ thống; có ý thức tự giác, kỷ luật, cẩn thận.', 2, 1, 1, NULL, 'null', 3, 6),
(1355, 'PM032', 'Phân tích thiết kế Hệ thống thông tin', 'Môn học trang bị cho sinh viên các kiến thức cơ bản về hệ thống thông tin. Đồng thời môn học \ncũng nhằm rèn luyện cho sinh viên các kỹ năng phân tích và thiết kế một hệ thống thông tin, \ncũng như mô hình hóa hệ thống thông tin trên máy tính. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về tầm quan trọng của môn học trong chương trình đào tạo.', 3, 2, 1, NULL, 'null', 3, 8),
(1356, 'PM033', 'Phân tích và thiết kế UML', 'Môn học giúp trang bị cho sinh viên các kiến thức chuyên sâu về xây dựng phần mềm theo hướng đối tượng (quy trình, phương pháp, công cụ và môi trường triển khai phần mềm). Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng sử dụng ngôn ngữ UML và một công cụ CASE để mô hình hóa ứng dụng. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về hình thành ý tưởng, cách tiếp cận các phương pháp khác nhau trong phát triển phần mềm, cũng như thấy được ưu điểm của phương pháp hướng đối tượng, và kỹ năng làm việc nhóm, kỹ năng thuyết trình trước đám đông. ', 3, 2, 1, NULL, 'null', 3, 8),
(1357, 'XH003', 'Pháp luật đại cương', 'Môn học cung cấp những kiến thức chung về nhà nước và pháp luật, các nét cơ bản \ncủa hệ thống pháp luật Việt Nam. Môn học cũng cung cấp cho sinh viên ý thức tuân thủ \npháp luật và cách ứng xử trước các tình huống có liên quan đến pháp luật.', 2, 1, 1, NULL, 'null', 1, 10),
(1358, 'PM034', 'Phát triển hệ thống thông tin', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về quá trình phát triển một hệ thống thông tin, Kho dữ liệu, Cơ sở dữ liệu đa chiều, Web ngữ nghĩa và Ontology. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng về xây dựng một Cơ sở dữ liệu đa chiều, cách xây dựng và chia sẻ tài liệu RDF/XML, Ontology về một lĩnh vực cụ thể. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về tầm quan trọng của quá trình xây dựng một hệ thống thông tin và kỹ năng làm việc nhóm.', 3, 2, 1, NULL, 'null', 3, 8),
(1359, 'PM035', 'Phát triển ứng dụng quản lý doanh nghiệp', 'Môn học này cung cấp sinh viên hiểu và vận dụng được các khái niệm căn bản trong việc xây dựng các ứng dụng quản lý trên web sử dụng nền tảng Microsoft.NET với các công nghệ như Entity framework, ASP.NET MVC, WCF, RESTful. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng tiếp cận và thực hiện dự án phần mềm. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về nghề nghiệp và kỹ năng làm việc nhóm và giao tiếp.', 4, 2, 2, NULL, 'null', 3, 8),
(1360, 'PM036', 'Phát triển ứng dụng Web với Servlet & Java Server Page', 'Học phần trang bị cho sinh viên những kiến thức về phát triển Web sử dụng Servlet và JSP, kiến thức cơ bản về mô hình phát triển Web MVC. Vận dụng những kiến thức này, sinh viên có thể thiết kế và hiện thực website sử dụng Servlet và JSP có kết nối cơ sở dữ liệu, triển khai Web Server, có khả năng ứng dụng mô hình MVC vào phát triển Web cũng như khả năng tiếp cận và sử dụng những kỹ thuật phát triển Web tiên tiến vào công việc thực tế,...', 3, 2, 1, NULL, 'null', 3, 8),
(1361, 'TN002', 'Phương pháp nghiên cứu khoa học', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về phương pháp nghiên cứu\n, quy trình của quá trình nghiên cứu. Thực hiện viết đề cương nghiên cứu khoa học,\n cách thực hiện và trình bày một công trình khoa học', 2, 1, 1, NULL, 'null', 1, 2),
(1362, 'KT009', 'Quản trị bán hàng', 'Học phần bao gồm các nội dung chủ yếu như: Khái niệm và vai trò của Quản trị bán hàng\n trong doanh nghiệp; Xây dựng kế hoạch bán hàng của doanh nghiệp; \nTổ chức mạng lưới bán hàng của doanh nghiệp; Tổ chức lực lượng bán hàng của doanh nghiệp;\nKiểm soát bán hàng của doanh nghiệp; Các hoạt động hỗ trợ bán hàng \ncủa doanh nghiệp và Đánh giá hiệu quả bán hàng.', 2, 1, 1, NULL, 'null', 3, 6),
(1363, 'KT010', 'Quản trị chiến lược', 'Học phần bao gồm các nội dung chủ yếu như: Phân tích môi trường kinh doanh; Xác định tầm nhìn, sứ mạng và mục tiêu cho doanh nghiệp; Xây dựng và tổ chức thực hiện chiến lược kinh doanh; Kiểm tra, đánh giá và điều chỉnh chiến lược..', 3, 2, 1, NULL, 'null', 3, 6),
(1364, 'KT001', 'Quản trị doanh nghiệp', 'Môn học giới thiệu kiến thức cơ bản về quản trị doanh nghiệp, quá trình thành lập, hoạt động \nvà phá sản doanh nghiệp, các kiến thưc cơ bản về quản trị, chiến lược kinh doanh, \ncách thức lãnh đạo doanh nghiệp… Đồng thời sinh viên cũng rèn luyện được những kỹ năng mềm\n phù hợp với vị trí lãnh đạo doanh nghiệp.', 2, 1, 1, NULL, 'null', 1, 6),
(1365, 'KT011', 'Quản trị dự án công nghệ thông tin', 'Môn học giúp trang bị cho sinh viên các kiến thức chuyên sâu về quản lý một dự án Công nghệ thông tin. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng quản lý các lĩnh vực trong quản lý  dự án Công nghệ thông tin. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về làm việc nhóm, quản lý nhóm và kỹ năng đàm phán.', 3, 2, 1, NULL, 'null', 3, 6),
(1366, 'MT013', 'Quản trị mạng', 'Môn học giúp trang bị cho sinh viên các kiến thức chuyên sâu về các dịch vụ cơ bản của mạng máy tính. Đồng thời, môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng xây dựng và vận hành một hệ thống mạng.', 3, 2, 1, NULL, 'null', 3, 7),
(1367, 'MT014', 'Quản trị mạng Linux', 'Môn học giúp trang bị cho sinh viên các kiến thức về việc xây dựng một hệ thống mạng theo hướng mã nguồn mở, nguyên lý làm việc và cách cài đặt, cấu hình các dịch vụ mạng cơ bản trên một máy chủ Linux như Web service, Mail service, SSH, DNS, DHCP, FTP, NFS… thiết lập cơ chế an ninh bằng các tiện ích như IPTables & Shorewall.\nMôn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về việc thường xuyên rèn luyện tính kiên trì, linh hoạt, khả năng tư duy sáng tạo và cập nhật thông tin cùng các kỹ năng làm việc nhóm, kỹ năng phân tích thiết kế, kỹ năng tìm kiếm, sử dụng các thuật ngữ chuyên ngành.', 3, 2, 1, NULL, 'null', 3, 7),
(1368, 'MT015', 'Quản trị mạng Windows', 'Môn học giúp trang bị cho sinh viên các kiến thức chuyên sâu về các dịch vụ cơ bản của mạng máy tính. Đồng thời, môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng xây dựng và vận hành một hệ thống mạng.', 3, 2, 1, NULL, 'null', 3, 7),
(1369, 'KT012', 'Thị trường tài chính', 'Cung cấp cho sinh viên những kiến thức cơ bản về thị trường tài chính, thị trường chứng khoán, thị trường ngoại hối… Môn học trang bị cho sinh viên những kiến thức căn bản nhất về những thuật ngữ cũng như nắm bắt được vị trí, vai trò và nguyên tắc hoạt động của một thị trường được đánh giá là có vai trò quan trọng trong việc cung ứng nguồn vốn trung và dài hạn cho nền kinh tế. Đồng thời đây cũng là một trong những kênh đầu tư để các nhà đầu tư trong và ngoài nước có thể chọn lựa để sinh lời vốn.', 2, 1, 1, NULL, 'null', 3, 6),
(1370, 'MT016', 'Thiết bị định tuyến và chuyển mạch', 'Học phần trang bị cho sinh viên về kiến trúc, thành phần và hoạt động của bộ định tuyến (Router) và chuyển mạch (Switch) trong hệ thống mạng. Đồng thời, giúp sinh viên cấu hình Router và Switch cho các chức năng cơ bản như: định cấu hình cài đặt ban đầu cho thiết bị mạng, thực hiện chia VLAN, thực hiện định tuyến tĩnh và thực hiện chính sách kiểm soát truy cập (ACL) để lọc luồng dữ liệu.', 3, 2, 1, NULL, 'null', 3, 7),
(1371, 'MT017', 'Thiết kế và bảo mật hệ thống mạng', 'Môn học trang bị cho sinh viên kiến thức về các chuẩn mạng cục bộ, chức năng các thiết bị kết nối mạng cũng như quy trình thiết kế hệ thống mạng máy tính. Đồng thời, cung cấp cho sinh viên khả năng thiết kế, cài đặt và cấu hình các hệ thống an ninh, bảo mật thông tin cho các thiết bị, dịch vụ được triển khải trong hệ thống mạng. Môn học còn trang bị khả năng đọc hiểu tài liệu kỹ thuật giúp người học dễ dàng thích ứng kịp thời các công nghệ mạng mới.', 3, 2, 1, NULL, 'null', 3, 7),
(1372, 'MT018', 'Thiết kế và lập trình ứng dụng IoT', 'Học phần thiết kế và lập trình ứng dụng IoT cung cấp cho sinh viên hiểu biết toàn diện về Internet of Things (IoT). Đồng thời, giúp sinh viên phát triển các kỹ năng thực hành cơ bản để kích thích sinh viên giải quyết vấn đề sáng tạo và tạo mô hình nhanh chóng trong lĩnh vực liên ngành điện tử, mạng, an ninh, phân tích dữ liệu và kinh doanh. Phương pháp tiếp cận lấy học sinh làm trung tâm thúc đẩy sinh viên có khả năng suy nghĩ, thiết kế, làm mô hình và trình bày các giải pháp IoT cho nhu cầu kinh doanh hoặc xã hội.', 3, 2, 1, NULL, 'null', 3, 7),
(1373, 'PM038', 'Thiết kế và lập trình web cơ bản', 'Học phần trang bị cho sinh viên các kiến thức về HTML, CSS, JavaScript, jQuery, JSON trong việc thiết kế và lập trình website. Thông qua môn học này, sinh viên có thể tự thiết kế giao diện trang web theo đơn đặt hàng cũng như hoàn chỉnh giao diện Website theo yêu cầu thực tế. Bên cạnh đó, sinh viên có thể đánh giá được những thuận lợi và khó khăn khi sử dụng CSS để từ đó vận dụng hợp lý vào việc thiết kế giao diện website. Đồng thời, sinh viên còn có thể sử dụng JavaScript để kiểm tra tính hợp lệ của dữ liệu nhập trên form; vận dụng thư viện jQuery trong thiết kế và xử lý sự kiện trên Website; vận dụng JSON trong lưu trữ và trao đổi dữ liệu trên web. Sinh viên sẽ được rèn luyện về thái độ và các kỹ năng mềm như yêu thích việc thiết kế website; làm việc độc lập và làm việc nhóm; kỹ năng thuyết phục, trao đổi và lấy thông tin từ phía khách hàng trong quá trình khảo sát yêu cầu và chọn lựa hệ thống website đáp ứng yêu cầu người dùng.', 3, 2, 1, NULL, 'null', 3, 8),
(1374, 'TN003', 'Thống kê ứng dụng', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về xác suất và thống kê\n. Sinh viên sẽ được học cách biên tập dữ liệu, cách mô tả dữ liệu bằng biểu đồ \nvà bằng các đặc trưng thống kê, cách thu thập dữ liệu, thiết kế nghiên cứu \nvà kiểm định các giả thiết thống kê trên ngôn ngữ R. Nhờ đó sinh viên có thể\n ứng dụng các kiến thức của môn học để thực hiện các nghiên cứu khoa học và \nhọc các môn học có ứng dụng kiến thức thống kê như Trí tuệ nhân tạo,\n Khai khoáng dữ liệu, Công nghệ tri thức… Đồng thời, kỹ năng sử dụng ngôn ngữ R\n giúp sinh viên có thể dễ dàng tham gia các cộng đồng phân tích số liệu\n để có thể tự học và nghiên cứu sâu hơn.', 3, 2, 1, NULL, 'null', 1, 2),
(1375, 'DA004', 'Thực tập cuối khóa', 'Hoạt động thực tập tốt nghiệp giúp sinh viên được tiếp cận với công việc thực tế và nhận biết được điểm mạnh, điểm yếu của mình và cần trang bị thêm những kiến thức, kỹ năng gì để đáp ứng nhu cầu công việc. ', 3, 0, 3, NULL, 'null', 3, 9),
(1376, 'PM039', 'Thương mại điện tử', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về thương mại điện tử. Đồng thời môn học còn rèn luyện cho sinh viên các kỹ năng giao dịch, thanh toán và marketing qua mạng, đặc biệt là khả năng xây dựng và triển khai một website bán hàng trên mạng. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về tầm quan trọng của môn học trong chương trình đào tạo.', 3, 2, 1, NULL, 'null', 3, 8),
(1377, 'NN007', 'Tiếng Anh chuyên ngành ', 'Môn học giúp trang bị cho sinh viên các kiến thức chuyên sâu về tiếng Anh trong chuyên ngành Công nghệ thông tin. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng dịch và trình bày. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về vai trò của tiếng Anh trong chuyên ngành Công nghệ thông tin và kỹ năng làm việc nhóm, viết và trình bày báo cáo.', 3, 2, 1, NULL, 'null', 3, 3),
(1378, 'XH004', 'Tiếng Việt thực hành', 'Môn học cung cấp các lý thuyết cơ bản về ngôn ngữ tiếng Việt như ngữ âm, chính tả, từ, câu… Môn học cũng rèn luyện kỹ năng nói, viết tiếng Việt đúng chính tả, dùng đúng từ và các phương tiện liên kết câu để sinh viên có thể sử dụng đúng và hiệu quả tiếng Việt trong học tập và đời sống.', 2, 1, 1, NULL, 'null', 1, 10),
(1379, 'DA005', 'Tiểu luận tốt nghiệp', 'null', 4, 0, 4, NULL, 'null', 3, 9),
(1380, 'KT013', 'Tin học ứng dụng trong kinh doanh', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về quản trị cơ sở dữ liệu trong Excel, các hàm tài chính và cách giải quyết bài toán trong kinh doanh. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về nghề nghiệp.', 2, 1, 1, NULL, 'null', 3, 6),
(1381, 'CS012', 'Toán rời rạc', 'Môn học này cung cấp cho sinh viên kiến thức cơ bản của hệ thống toán học rời rạc và ứng dụng chúng trong lĩnh vực Khoa học kỹ thuật máy tính. Sinh viên sẽ học những chủ đề như cơ sở logic, các phương pháp suy luận, quy nạp toán học, lý thuyết tập hợp và quan hệ, các nguyên lý đếm và giải tích tổ hợp, đại số Boole. Những nội dung này rất quan trọng nhằm giúp sinh viên hiểu sâu về các khía cạnh trừu tượng trong cấu tạo và hoạt động của các hệ thống tính toán.\n\n', 2, 1, 1, NULL, 'null', 2, 11),
(1382, 'PM040', 'Trí tuệ nhân tạo', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về tư duy, suy luận lập trình lôgíc toán. Đồng thời, môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng lập trình lôgíc toán bằng phần mềm SWI-Prolog như: Xây dựng các ứng dụng hỏi đáp tự động, máy học. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về việc tự phát triển kiến thức nghề nghiệp và kỹ năng giao tiếp đa phương tiện.', 3, 2, 1, NULL, 'null', 3, 8),
(1383, 'MT019', 'Truyền số liệu', 'Môn học cung cấp cho sinh viên khái niệm về phương pháp truyền dữ liệu giữa các thiết bị lưu trữ và xử lý thông tin. Những nội dung chủ yếu bao gồm môi trường truyền dẫn, các dạng tín hiệu, cách biểu diễn và mã hoá dữ liệu, phương pháp sử dụng hiệu quả kênh truyền.', 2, 2, 0, NULL, 'null', 3, 7),
(1384, 'MT020', 'Truyền thông và mạng không dây', 'Môn học giúp trang bị cho sinh viên các kiến thức tổng quan về  truyền thông và mạng không dây (Wireless LAN-WLAN), các kỹ thuật và cơ chế bảo mật WLAN. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng thiết lập, vận hành một hệ thống mạng không dây trong các mô hình mạng thực tế. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về vai trò và trách nhiệm của người kỹ sư CNTT và kỹ năng học tập chủ động; tự phát triển kiến thức nghề nghiệp; ham tìm hiểu và khả năng học tập suốt đời.', 3, 2, 1, NULL, 'null', 3, 7);
INSERT INTO `tblmonhoc` (`id`, `maMH`, `tenMon`, `moTa`, `tongSoTC`, `soTCLythuyet`, `soTCThuchanh`, `soTCTuhoc`, `ghiChu`, `maGiaidoan`, `maNhom`) VALUES
(1385, 'LL003', 'Tư tưởng Hồ Chí Minh', 'Trình bày chủ nghĩa duy vật biện chứng; chủ nghĩa duy vật lịch sử; học thuyết giá trị; học thuyết giá trị thặng dư; học thuyết về chủ nghĩa tư bản độc quyền và chủ nghĩa tư bản độc quyền nhà nước; sứ mệnh lịch sử của giai cấp công nhân và cách mạng xã hội chủ nghĩa; những vấn đề chính trị- xã hội có tính quy luật trong tiến trình cách mạng xã hội chủ nghĩa; chủ nghĩa xã hội hiện thực và triển vọng', 2, 2, 0, NULL, 'null', 1, 1),
(1386, 'TN004', 'Vi tích phân A1', 'null', 3, 2, 1, NULL, 'null', 1, 2),
(1387, 'TN005', 'Vi tích phân A2', 'null', 2, 1, 1, NULL, 'null', 1, 2),
(1388, 'TN006', 'Xác suất thống kê', 'null', 2, 1, 1, NULL, 'null', 1, 2),
(1389, 'PM041', 'Xây dựng phần mềm hướng đối tượng', 'null', 3, 2, 1, NULL, 'null', 3, 8),
(1390, 'PM042', 'Xử lý ảnh', 'null', 3, 2, 1, NULL, 'null', 3, 8),
(1391, 'CS013', 'Kỹ thuật lập trình', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về kỹ thuật lập trình giải quyết bài toán trên máy tính. Đồng thời môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng phân tích bài toán, lập trình giải các bài toán trên máy tính bằng ngôn ngữ lập trình C với giải thuật hiệu quả. Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về tầm quan trọng của môn học và phương pháp lập trình trên máy tính.', 4, 2, 2, 0, '', 2, 11),
(1392, 'CS014', 'Cấu trúc dữ liệu', 'Môn học giúp trang bị cho sinh viên các kiến thức cơ bản về giải thuật và đánh giá độ phức tạp của giải thuật; phân tích và vận dụng các giải thuật sắp xếp, tìm kiếm; các cấu trúc dữ liệu kiểu danh sách liên kết và cây nhị phân.', 4, 3, 1, 0, '', 2, 11),
(1393, 'MT021', 'Hệ thống mạng', 'Môn học giúp trang bị cho sinh viên các kiến thức về đặc tính và thành phần cơ bản của LAN, WAN và Internet; chức năng, cấu trúc của các tầng trong mô hình OSI, các giao thức và thuật toán được sử dụng trong từng tầng; các yêu cầu của liên kết mạng. Đồng thời, môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng cấu hình, vận hành các thiết bị kết nối mạng như cable, NIC, Repeater, Bridge, Router, Switch, Modem... trong việc thiết kế một hệ thống mạng LAN.Môn học cũng giúp hình thành cho sinh viên thái độ và nhận thức đúng đắn về việc thường xuyên rèn luyện tính kiên trì, linh hoạt, khả năng tư duy sáng tạo và cập nhật thông tin cùng các kỹ năng làm việc nhóm, kỹ năng phân tích thiết kế, kỹ năng tìm kiếm, sử dụng các thuật ngữ chuyên ngành.\r\n	Môn học giúp trang bị cho sinh viên các kiến thức chuyên sâu về các dịch vụ cơ bản của mạng máy tính. Đồng thời, môn học cũng nhằm rèn luyện cho sinh viên các kỹ năng xây dựng và vận hành một hệ thống mạng.', 4, 2, 2, 0, '', 3, 7),
(1394, 'ITTC2', 'Tự chọn học kì 2', 'Để tính số tín chỉ các môn tự chọn Học kì 2', 6, 3, 3, 0, '', 1, 12),
(1395, 'ITTC3', 'Tự chọn học kì 3', 'Để tính số tín chỉ các môn tự chọn Học kì 3', 2, 1, 1, 0, '', 1, 12),
(1396, 'ITTC5', 'Tự chọn học kì 5', 'Để tính số tín chỉ các môn tự chọn Học kì 5', 5, 3, 2, 0, '', 2, 12),
(1397, 'ITTC6', 'Tự chọn học kì 6', 'Để tín số tín chỉ các môn tự chọn Học kì 6', 6, 4, 2, 0, '', 1, 12),
(1398, 'ITTC7', 'Tự chọn học kì 7', 'Để tín số tín chỉ các môn tự chọn Học kì 7', 6, 4, 2, 0, '', 1, 12),
(1399, 'MTTC2', 'Tự chọn học kì 2 Mạng máy tính', 'Tự chọn học kì 2 Chương trình MMT & TTDL', 6, 3, 3, 0, '', 1, 12),
(1400, 'MTTC4', 'Tự chọn học kì 4 Mạng máy tính', 'Tự chọn học kì 4 Chương trình MMT & TTDL', 2, 1, 1, 0, '', 1, 12),
(1401, 'MTTC5', 'Tự chọn học kì 5 Mạng máy tính', 'Tự chọn học kì 5 Chương trình MMT & TTDL', 2, 1, 1, 0, '', 1, 12),
(1402, 'MTTC6', 'Tự chọn học kì 6 Mạng máy tính', 'Tự chọn học kì 6 Chương trình MMT & TTDL', 6, 4, 2, 0, '', 1, 12),
(1403, 'MTTC7', 'Tự chọn học kì 7 Mạng máy tính', 'Tự chọn học kì 7 Chương trình MMT & TTDL', 6, 4, 2, 0, '', 1, 12),
(1404, 'NN008', 'Anh văn không chuyên 1', 'Chương trình hệ thống TT quản lý', 3, 2, 1, 0, '', 1, 3),
(1405, 'NN009', 'Anh văn không chuyên 2', 'Chương trình Hệ thống TT quản lý', 4, 2, 2, 0, '', 1, 3),
(1406, 'QLTC2', 'Tự chọn học kì 2 Hệ thống TTQL', '', 4, 3, 1, 0, '', 1, 12),
(1407, 'QLTC3', 'Tự chọn học kì 3 Hệ thống TTQL', '', 3, 2, 1, 0, '', 1, 12),
(1408, 'QLTC4', 'Tự chọn học kì 4 Hệ thống TTQL', '', 2, 1, 1, 0, '', 1, 12),
(1409, 'QLTC5', 'Tự chọn học kì 5 Hệ thống TTQL', '', 4, 2, 2, 0, '', 1, 12),
(1410, 'QLTC6', 'Tự chọn học kì 6 Hệ thống TTQL', '', 2, 1, 1, 0, '', 1, 12),
(1411, 'QLTC7', 'Tự chọn học kì 7 Hệ thống TTQL', '', 7, 4, 3, 0, '', 1, 12),
(1412, 'TN007', 'Đại số tuyến tính (HTQL)', 'Chương trình hệ thống TT quản lý', 2, 2, 0, 0, '', 1, 2),
(1413, 'TN008', 'Vi tích phân A1 (HTTTQL)', '', 2, 2, 0, 0, '', 1, 2),
(1414, 'Mt022', 'Thanh toán điện tử', '', 2, 1, 1, 0, '', 3, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblmonhoc_nganh`
--

CREATE TABLE `tblmonhoc_nganh` (
  `maMH` int(11) NOT NULL,
  `maNganh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblmonhoc_nganh`
--

INSERT INTO `tblmonhoc_nganh` (`maMH`, `maNganh`) VALUES
(1276, 1),
(1277, 1),
(1278, 1),
(1279, 1),
(1280, 1),
(1281, 1),
(1282, 1),
(1283, 1),
(1284, 1),
(1285, 1),
(1286, 1),
(1287, 1),
(1288, 1),
(1289, 1),
(1290, 1),
(1291, 1),
(1292, 1),
(1293, 1),
(1294, 1),
(1295, 1),
(1296, 1),
(1297, 1),
(1298, 1),
(1299, 1),
(1300, 1),
(1301, 1),
(1302, 1),
(1303, 1),
(1304, 1),
(1305, 1),
(1306, 1),
(1307, 1),
(1308, 1),
(1309, 1),
(1310, 1),
(1311, 1),
(1312, 1),
(1313, 1),
(1314, 1),
(1315, 1),
(1316, 1),
(1317, 1),
(1318, 1),
(1319, 1),
(1320, 1),
(1321, 1),
(1322, 1),
(1323, 1),
(1324, 1),
(1325, 1),
(1326, 1),
(1327, 1),
(1328, 1),
(1329, 1),
(1330, 1),
(1331, 1),
(1332, 1),
(1333, 1),
(1334, 1),
(1335, 1),
(1336, 1),
(1337, 1),
(1338, 1),
(1339, 1),
(1340, 1),
(1341, 1),
(1342, 1),
(1343, 1),
(1344, 1),
(1345, 1),
(1346, 1),
(1347, 1),
(1348, 1),
(1349, 1),
(1350, 1),
(1351, 1),
(1352, 1),
(1353, 1),
(1354, 1),
(1355, 1),
(1356, 1),
(1357, 1),
(1358, 1),
(1359, 1),
(1360, 1),
(1361, 1),
(1362, 1),
(1363, 1),
(1364, 1),
(1365, 1),
(1366, 1),
(1367, 1),
(1368, 1),
(1369, 1),
(1370, 1),
(1371, 1),
(1372, 1),
(1373, 1),
(1374, 1),
(1375, 1),
(1376, 1),
(1377, 1),
(1378, 1),
(1379, 1),
(1380, 1),
(1381, 1),
(1382, 1),
(1383, 1),
(1384, 1),
(1385, 1),
(1386, 1),
(1387, 1),
(1388, 1),
(1389, 1),
(1390, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblmontienquyet`
--

CREATE TABLE `tblmontienquyet` (
  `maMH_TQ` int(11) NOT NULL,
  `maMH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblnganh`
--

CREATE TABLE `tblnganh` (
  `maNganh` int(11) NOT NULL,
  `tenNganh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblnganh`
--

INSERT INTO `tblnganh` (`maNganh`, `tenNganh`) VALUES
(1, 'Công nghệ Thông tin'),
(2, 'Quản trị mạng'),
(3, 'Hệ thống thông tin quản lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblnhom`
--

CREATE TABLE `tblnhom` (
  `maNhom` int(11) NOT NULL,
  `tenNhom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vietTat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblnhom`
--

INSERT INTO `tblnhom` (`maNhom`, `tenNhom`, `vietTat`) VALUES
(1, 'Lý luận chính trị', 'LL'),
(2, 'Toán - Tin học - khoa học tự nhiên', 'TN'),
(3, 'Ngoại ngữ', 'NN'),
(4, 'Giáo dục Quốc phòng', 'QP'),
(5, 'Giáo dục thể chất', 'TC'),
(6, 'Quản trị, chiến lược, kinh tế', 'KT'),
(7, 'Hệ điều hành, Mạng và Phần cứng', 'MT'),
(8, 'Hệ thống thông tin, Phần mềm và Web\r\n', 'PM'),
(9, 'Đồ án và thực tập', 'DA'),
(10, 'Khoa học xã hội và nhân văn', 'XH'),
(11, 'Cơ sở ngành CNTT', 'CS'),
(12, 'Môn tự chọn', 'TC');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tblbacdaotao`
--
ALTER TABLE `tblbacdaotao`
  ADD PRIMARY KEY (`maBac`);

--
-- Chỉ mục cho bảng `tblchitietctdt`
--
ALTER TABLE `tblchitietctdt`
  ADD PRIMARY KEY (`IDchitiet`),
  ADD KEY `maCT` (`maCT`),
  ADD KEY `maMH` (`maMH`);

--
-- Chỉ mục cho bảng `tblchuongtrinhdt`
--
ALTER TABLE `tblchuongtrinhdt`
  ADD PRIMARY KEY (`maCT`),
  ADD KEY `maBacDT` (`maBacDT`),
  ADD KEY `maNganh` (`maNganh`),
  ADD KEY `maHeDT` (`maHeDT`);

--
-- Chỉ mục cho bảng `tblgiaidoan`
--
ALTER TABLE `tblgiaidoan`
  ADD PRIMARY KEY (`maGD`);

--
-- Chỉ mục cho bảng `tblhedt`
--
ALTER TABLE `tblhedt`
  ADD PRIMARY KEY (`maHeDT`);

--
-- Chỉ mục cho bảng `tblmonhoc`
--
ALTER TABLE `tblmonhoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maGiaidoan` (`maGiaidoan`),
  ADD KEY `maNhom` (`maNhom`);

--
-- Chỉ mục cho bảng `tblmonhoc_nganh`
--
ALTER TABLE `tblmonhoc_nganh`
  ADD PRIMARY KEY (`maMH`,`maNganh`),
  ADD KEY `maNganh` (`maNganh`);

--
-- Chỉ mục cho bảng `tblmontienquyet`
--
ALTER TABLE `tblmontienquyet`
  ADD PRIMARY KEY (`maMH_TQ`),
  ADD KEY `maMH` (`maMH`);

--
-- Chỉ mục cho bảng `tblnganh`
--
ALTER TABLE `tblnganh`
  ADD PRIMARY KEY (`maNganh`);

--
-- Chỉ mục cho bảng `tblnhom`
--
ALTER TABLE `tblnhom`
  ADD PRIMARY KEY (`maNhom`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tblbacdaotao`
--
ALTER TABLE `tblbacdaotao`
  MODIFY `maBac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tblchitietctdt`
--
ALTER TABLE `tblchitietctdt`
  MODIFY `IDchitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=561;

--
-- AUTO_INCREMENT cho bảng `tblchuongtrinhdt`
--
ALTER TABLE `tblchuongtrinhdt`
  MODIFY `maCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tblgiaidoan`
--
ALTER TABLE `tblgiaidoan`
  MODIFY `maGD` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã Giai đoạn', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tblhedt`
--
ALTER TABLE `tblhedt`
  MODIFY `maHeDT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tblmonhoc`
--
ALTER TABLE `tblmonhoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1415;

--
-- AUTO_INCREMENT cho bảng `tblmontienquyet`
--
ALTER TABLE `tblmontienquyet`
  MODIFY `maMH_TQ` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tblnganh`
--
ALTER TABLE `tblnganh`
  MODIFY `maNganh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tblnhom`
--
ALTER TABLE `tblnhom`
  MODIFY `maNhom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tblchitietctdt`
--
ALTER TABLE `tblchitietctdt`
  ADD CONSTRAINT `tblchitietctdt_ibfk_1` FOREIGN KEY (`maCT`) REFERENCES `tblchuongtrinhdt` (`maCT`),
  ADD CONSTRAINT `tblchitietctdt_ibfk_2` FOREIGN KEY (`maMH`) REFERENCES `tblmonhoc` (`id`);

--
-- Các ràng buộc cho bảng `tblchuongtrinhdt`
--
ALTER TABLE `tblchuongtrinhdt`
  ADD CONSTRAINT `tblchuongtrinhdt_ibfk_1` FOREIGN KEY (`maBacDT`) REFERENCES `tblbacdaotao` (`maBac`),
  ADD CONSTRAINT `tblchuongtrinhdt_ibfk_2` FOREIGN KEY (`maNganh`) REFERENCES `tblnganh` (`maNganh`),
  ADD CONSTRAINT `tblchuongtrinhdt_ibfk_3` FOREIGN KEY (`maHeDT`) REFERENCES `tblhedt` (`maHeDT`);

--
-- Các ràng buộc cho bảng `tblmonhoc`
--
ALTER TABLE `tblmonhoc`
  ADD CONSTRAINT `tblmonhoc_ibfk_1` FOREIGN KEY (`maGiaidoan`) REFERENCES `tblgiaidoan` (`maGD`),
  ADD CONSTRAINT `tblmonhoc_ibfk_2` FOREIGN KEY (`maNhom`) REFERENCES `tblnhom` (`maNhom`);

--
-- Các ràng buộc cho bảng `tblmonhoc_nganh`
--
ALTER TABLE `tblmonhoc_nganh`
  ADD CONSTRAINT `tblmonhoc_nganh_ibfk_1` FOREIGN KEY (`maMH`) REFERENCES `tblmonhoc` (`id`),
  ADD CONSTRAINT `tblmonhoc_nganh_ibfk_2` FOREIGN KEY (`maNganh`) REFERENCES `tblnganh` (`maNganh`);

--
-- Các ràng buộc cho bảng `tblmontienquyet`
--
ALTER TABLE `tblmontienquyet`
  ADD CONSTRAINT `tblmontienquyet_ibfk_3` FOREIGN KEY (`maMH`) REFERENCES `tblmonhoc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
