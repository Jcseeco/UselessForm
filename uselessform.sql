-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2019 年 09 月 09 日 09:43
-- 伺服器版本: 10.1.32-MariaDB
-- PHP 版本： 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `uselessform`
--

-- --------------------------------------------------------

--
-- 資料表結構 `form5d063cbfe2345`
--

CREATE TABLE `form5d063cbfe2345` (
  `submitID` int(6) UNSIGNED NOT NULL,
  `q0` text,
  `q1` text,
  `q2` text,
  `q3` text,
  `q4` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `form5d063cbfe2345`
--

INSERT INTO `form5d063cbfe2345` (`submitID`, `q0`, `q1`, `q2`, `q3`, `q4`) VALUES
(1, '胡廷義', 'aBC@mail.com', '非常滿意', 'jin u is my waifu', '50000004'),
(2, '鼠叔', 'hamster@gmail.com', '滿意', 'cccccc', '49999956'),
(3, '想不起來', 'a@gmail.com', '普通', 'ccvwevw', '50000088'),
(4, 'rorbot1', '123412120@gmail.com', '不滿意', 'asc', '49999930'),
(5, 'xian', 'nknu410577009@gmail.com', '滿意', '隨便說～', '49999487'),
(6, 'robot2', 'cccccc@gmail.com', '非常不滿意', 'ff1', '50000171'),
(7, 'robot3', 'ccvwevw@gmail.com', '非常不滿意', 'cccccc', '50000185'),
(8, 'xian', 's210181@shsh.tw', '普通', 'xian', '49999945'),
(9, '', '', '非常不滿意', '', '49999999');

-- --------------------------------------------------------

--
-- 資料表結構 `form5d0655942adbe`
--

CREATE TABLE `form5d0655942adbe` (
  `submitID` int(6) UNSIGNED NOT NULL,
  `q0` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `form5d0655942adbe`
--

INSERT INTO `form5d0655942adbe` (`submitID`, `q0`) VALUES
(1, '普通'),
(2, '普通');

-- --------------------------------------------------------

--
-- 資料表結構 `form5d07dabdb8736`
--

CREATE TABLE `form5d07dabdb8736` (
  `submitID` int(6) UNSIGNED NOT NULL,
  `q0` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `form5d07dabdb8736`
--

INSERT INTO `form5d07dabdb8736` (`submitID`, `q0`) VALUES
(1, '非常不滿意'),
(2, '非常不滿意'),
(3, '非常不滿意'),
(4, '非常不滿意');

-- --------------------------------------------------------

--
-- 資料表結構 `form5d5cd57c276a3`
--

CREATE TABLE `form5d5cd57c276a3` (
  `submitID` int(6) UNSIGNED NOT NULL,
  `q0` text,
  `q1` text,
  `q2` text,
  `q3` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `form5d5cd57c276a3`
--

INSERT INTO `form5d5cd57c276a3` (`submitID`, `q0`, `q1`, `q2`, `q3`) VALUES
(1, 'dqwdqwd', '49999954', 'ff1', 'ccccccm@w');

-- --------------------------------------------------------

--
-- 資料表結構 `forms`
--

CREATE TABLE `forms` (
  `formId` varchar(13) NOT NULL,
  `password` text NOT NULL,
  `title` text NOT NULL,
  `orders` text NOT NULL,
  `questions` text NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `forms`
--

INSERT INTO `forms` (`formId`, `password`, `title`, `orders`, `questions`, `color`) VALUES
('5d063cbfe2345', '$2y$10$TXKVYq4bjOiNqNCqXdf4jOYCUrH0I6dNxYFMChoxsEDvK5zYdyf76', '你好嗎?', 'name email rating simple phone ', '你叫啥?`信箱喔`這個問卷你給幾分?`隨便說`手機號碼填一下`', '#150b00'),
('5d0655942adbe', '$2y$10$XQYtPVK9jHVpjlAVv9rMeOR0We2ihCfLG7o5fB.st5R.Y9Lf2q2km', 'hehe', 'rating ', '777`', '#332700'),
('5d07dabdb8736', '$2y$10$eFPNeQ3bcBlemxStaFUzce7sYxOwjBK5T8SXGhY8JHmytCGhKgBmq', 'zzz', 'rating ', 'zzz`', '#331a00'),
('5d5cd57c276a3', '$2y$10$PRRW6uB2kFbal5ucTBRO/eQOf2tg5HclwT/GRIIJRiT49gU/R71KW', '表單1', 'name phone simple email ', 'hello1`hello2`hello3`hello4`', '#1f5857');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `form5d063cbfe2345`
--
ALTER TABLE `form5d063cbfe2345`
  ADD PRIMARY KEY (`submitID`);

--
-- 資料表索引 `form5d0655942adbe`
--
ALTER TABLE `form5d0655942adbe`
  ADD PRIMARY KEY (`submitID`);

--
-- 資料表索引 `form5d07dabdb8736`
--
ALTER TABLE `form5d07dabdb8736`
  ADD PRIMARY KEY (`submitID`);

--
-- 資料表索引 `form5d5cd57c276a3`
--
ALTER TABLE `form5d5cd57c276a3`
  ADD PRIMARY KEY (`submitID`);

--
-- 資料表索引 `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`formId`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `form5d063cbfe2345`
--
ALTER TABLE `form5d063cbfe2345`
  MODIFY `submitID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表 AUTO_INCREMENT `form5d0655942adbe`
--
ALTER TABLE `form5d0655942adbe`
  MODIFY `submitID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表 AUTO_INCREMENT `form5d07dabdb8736`
--
ALTER TABLE `form5d07dabdb8736`
  MODIFY `submitID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表 AUTO_INCREMENT `form5d5cd57c276a3`
--
ALTER TABLE `form5d5cd57c276a3`
  MODIFY `submitID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
