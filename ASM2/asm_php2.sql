-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 08, 2021 lúc 11:20 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm_php2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `topic_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `content`, `topic_id`, `author_id`, `slug`) VALUES
(1, 'Đánh giá dự án Beta Finance (BETA coin) – Thông tin và update mới nhất về dự án launchpad tiếp theo trên Binance', 'uploads/615ec846dfc9e-du-an-beta-finance.jpg', '<h3>Dự án Beta Finance là gì?</h3> <br>Beta Finance là một protocol cung cấp giải cho thị trường tiền tệ cho phép cross-chain và không cần sự tin cậy như giao thức (cho vay) lending, borrowing (vay), và shorting crypto (Bán khống crypto).<br> Điểm nổi bật ở Beta Finance là tạo sự tích hợp công cụ short tool cho phép “1-Click” để đám bảo các DeFi gốc thực hiện mặt ngược lại của giao dịch và chống lại sự biến động, cũng như cho phép bất kỳ ai, ở bất kỳ đâu, bất kỳ lúc nào có thể tự động tạo thị trường tiền tệ cho token, mở khóa việc sử dụng tài sản mới. <br>Beta Finance giúp các cá nhân và tổ chức hướng đến việc bù đắp sự biến động và tạo điều kiện ổn định hơn đối với hoạt động đầu tư DeFi lâu dài, chính thống thông qua việc xây dựng cơ sở hạ tầng và công cụ DeFi quan trọng. Tập trung vào trải nghiệm người dùng, Beta Finance cho phép người dùng DeFi quản lý và đóng các vị thế bán khống chỉ với một cú nhấp chuột, đồng thời cung cấp các chỉ số và thông tin có liên quan trước khi thực hiện vị trí. Người cho vay có thể cho vay bất kỳ loại tiền tệ nào, tạo ra một thị trường không cần sự tin cậy nếu nó vẫn chưa tồn tại, bắt đầu kiến lợi nhuận dựa trên việc nắm giữ tài sản của họ. Các nhà giao dịch có thể thanh toán phí bảo hiểm để giao dịch ngắn hạn và phòng ngừa rủi ro để tiếp cận tất cả các token.<br><br>Điểm nổi bật của Beta Finance“1 Click” Short Tool: Beta Finance cung cấp một công cụ đơn giản, tích hợp để cho phép người dùng DeFi bán khống trong một giao dịch tự động. Người dùng có thể xem các chỉ số liên quan (tác động giá, trượt giá, v.v.) trực tiếp trên giao diện, đồng thời dễ dàng quản lý và cập nhật vị trí của họ trên trang tổng quan.<br>Thị trường tiền tệ Permissionless: Beta Finance cho phép người dùng tạo một thị trường tiền tệ cho bất kỳ token ERC-20 token một cách tự động, hỗ trợ đuôi long của tài sản. Bất kỳ thứ gì từ NFT được phân đoạn đến các token trưởng thành đều có thể được niêm yết trên Beta Finance.<br>Mô hình tài sản thế chấp Isolated: Để hỗ trợ tài sản biến động, Beta Finance giới thiệu một mô hình tài sản thế chấp biệt lập trong đó người dùng chỉ chịu trách nhiệm về tài sản thế chấp được liên kết rõ ràng với một vị trí.', 1, 1, 'danh-gia-du-an-beta-finance-beta-coin-thong-tin-va-update-moi-nhat-ve-du-an-launchpad-tiep-theo-tren-binance'),
(2, 'Tròn 1 tháng triển khai EIP-1559, Ethereum hiện giờ ra sao?', 'uploads/615d7be893aae-Sleep101.jpg', 'Tròn 1 tháng hard fork London và bản nâng cấp EIP-1559 được triển khai thành công, blockchain ....', 1, 1, 'tron-1-thang-trien-khai-eip-1559-ethereum-hien-gio-ra-sao'),
(9, 'Kyros Ventures: Tổng hợp những Infographic tuần qua (30/08 – 05/09)', 'uploads/615d7b67a054c-infographic-tuan-qua-360x180.png', 'AMM là dự án đầu tiên khi chúng ta nhìn vào một hệ sinh thái. Dòng tiền có dễ dàng luân', 1, 1, 'kyros-ventures-tong-hop-nhung-infographic-tuan-qua-3008-0509'),
(33, 'Hướng dẫn tham gia IGO (Initial Game Offering) trên GameFi dành cho người mới', '', '', 1, 1, 'huong-dan-tham-gia-igo-initial-game-offering-tren-gamefi-danh-cho-nguoi-moi'),
(36, 'Gamefi là gì?', '', '', 1, 1, 'gamefi-la-gi'),
(37, 'Đánh giá game HeroBattle (HRB coin) – Thông tin và update mới nhất về game HeroBattle', 'uploads/615ef3b776fe8-herobattle.jpg', 'HeroBattle(HRB) là gì?HeroBattle là một game P2E vừa ra mắt vào ngày 5/9 với cách chơi khá đơn giản như Crypto Zoon hay Crypto Cars. Tuy nhiên, gameplay có một chút khác biệt so với 2 tựa game kể trên.Website: https://herobattle.app/ Gameplay của HeroBattleYêu cầu:5 tướng5 vũ khí cho mỗi tướnggameplay HeroBattleCó 2 cách để mua tướng:Mở rương 150 HRB để nhận tướng ngẫu nhiên với độ hiếm ngẫu nhiên. Tỉ lệ ra tướng như sau:1 sao – 51%2 sao – 30%3 sao – 15%4 sao – 3%5 sao – 1%Mở rương mua tướng game HeroBattleMua tướng trên marketplaceMua tướng trên MarketplaceCó 2 cách để mua vũ khí:Mở rương 150 HRB để nhận vũ khí ngẫu nhiên với độ hiếm ngẫu nhiên1 sao – 45%2 sao – 30%3 sao – 15%4 sao – 10%5 sao – 5%Mua vũ khí trên marketplace', 1, 1, 'danh-gia-game-herobattle-hrb-coin-thong-tin-va-update-moi-nhat-ve-game-herobattle');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `owner_by` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `topics`
--

INSERT INTO `topics` (`id`, `name`, `owner_by`, `status`) VALUES
(1, 'Công nghệ', 1, 1),
(2, 'Kinh tế', 1, 1),
(3, 'Bóng đá', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`) VALUES
(1, 'admin', 'admin@gmail.com', '12345678', ''),
(2, 'Trần Tiến', 'trantien120498@gmail.com', '$2y$10$xQ7n5dUJas.8PnND0q.Bm.X/bOz4HBJePwIg5Cgzr90f.Vcodlf6y', 'https://i.ibb.co/SKPC0Hk/image.png'),
(3, 'anh', 'anhok@gmail.com', '$2y$10$B2Qr5okxaepRoWjTSnUMBucVlCPUofO.tSNHzjeuwd0pl0uPhZXDW', ''),
(4, 'tien@gmail.com', 'tien@gmail.com', '$2y$10$M6HM7jKl4KpECdOapAD.De8lkagpi4yldeC0yh3fZNCgiIfGxZEMi', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Chỉ mục cho bảng `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
