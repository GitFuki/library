-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 2016 年 9 朁E20 日 16:52
-- サーバのバージョン： 5.5.49-log
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(11) unsigned NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_time` datetime NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `authors`
--

INSERT INTO `authors` (`id`, `created_time`, `modified_time`, `name`) VALUES
(1, '2016-09-19 04:50:18', '2016-09-19 04:50:18', '又吉直樹'),
(2, '2016-09-20 11:37:00', '2016-09-20 11:37:00', '恩田陸'),
(3, '2016-09-20 11:47:00', '2016-09-20 11:47:00', '安田正'),
(4, '2016-09-20 14:02:00', '2016-09-20 14:02:00', 'Lynn Beighley'),
(5, '2016-09-20 14:10:00', '2016-09-20 14:10:00', 'さいとうゆうすけ'),
(6, '2016-09-20 14:18:00', '2016-09-20 14:18:00', 'シタラマサコ');

-- --------------------------------------------------------

--
-- テーブルの構造 `bookinglists`
--

CREATE TABLE IF NOT EXISTS `bookinglists` (
  `id` int(10) unsigned NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_start_time` datetime NOT NULL,
  `booking_expire_time` datetime NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `published` datetime NOT NULL,
  `field_id` int(11) NOT NULL,
  `bestseller` tinyint(1) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `page` int(11) NOT NULL,
  `isbn` int(11) NOT NULL,
  `summary` text NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `books`
--

INSERT INTO `books` (`id`, `name`, `author_id`, `publisher_id`, `published`, `field_id`, `bestseller`, `price`, `page`, `isbn`, `summary`, `created_time`, `modified_time`) VALUES
(2, '火花', 1, 1, '2015-03-01 01:00:00', 1, 1, 1200, 148, 2147483647, '奇想の天才である一方で人間味溢れる神谷、彼を師と慕う後輩徳永。芸人の２人が運命のように出会ってから劇は始まった－。笑いとは何か、人間が生きるとは何なのか。『文學界』掲載を書籍化。', '2016-09-19 05:04:00', '2016-09-19 05:04:00'),
(3, '夜のピクニック', 2, 2, '2004-07-20 11:38:00', 1, 1, 1600, 342, 2147483647, '高校最後のイベントに賭けた一つの願い。あの一夜の出来事は、紛れもない「奇跡」だった、とあたしは思う。ノスタルジーの魔術師が贈る、永遠普遍の青春小説。『小説新潮』隔月連載を単行本化。', '2016-09-20 11:38:00', '2016-09-20 11:38:00'),
(4, '超一流の雑談力', 3, 1, '2015-05-20 11:48:00', 2, 0, 1380, 223, 2147483647, '一流の雑談は、人もお金も引き寄せる！　「ソフトに見つめてテンポよくあいづち」「会話が終わったらすぐにメモを取る」など、雑談力を高めるための３８の実践的なテクニックと、日常の中でのトレーニング方法を紹介する。', '2016-09-20 11:48:00', '2016-09-20 11:48:00'),
(5, 'Head First PHP&MySQL', 4, 4, '2010-03-20 14:03:00', 3, 0, 4200, 35634, 2147483647, '認知科学、教育心理学に基づいた画期的なWebアプリケーション開発の入門書。セキュリティや正規表現など高度なトピックもカバー。', '2016-09-20 14:03:00', '2016-09-20 14:03:00'),
(6, '秋を見たかった雪だるま', 5, 5, '2004-01-20 14:11:00', 4, 0, 1500, 22, 2147483647, 'あああああ', '2016-09-20 14:11:00', '2016-09-20 14:11:00'),
(7, 'おそ松さん 1', 6, 1, '2016-09-20 14:19:00', 5, 0, 450, 144, 2147483647, 'aaaa', '2016-09-20 14:19:00', '2016-09-20 14:19:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `borrowinglists`
--

CREATE TABLE IF NOT EXISTS `borrowinglists` (
  `id` int(10) unsigned NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `borrowed_time` datetime NOT NULL,
  `return_time` datetime NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `fields`
--

CREATE TABLE IF NOT EXISTS `fields` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `fields`
--

INSERT INTO `fields` (`id`, `name`, `created_time`, `modified_time`) VALUES
(1, '小説', '2016-09-20 11:34:00', '2016-09-20 11:34:00'),
(2, 'ビジネス', '2016-09-20 11:47:00', '2016-09-20 11:47:00'),
(3, 'コンピュータ', '2016-09-20 13:40:00', '2016-09-20 13:40:00'),
(4, '絵本', '2016-09-20 14:07:00', '2016-09-20 14:07:00'),
(5, 'コミック', '2016-09-20 14:18:00', '2016-09-20 14:18:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `publishers`
--

CREATE TABLE IF NOT EXISTS `publishers` (
  `id` int(10) unsigned NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_time` datetime NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `publishers`
--

INSERT INTO `publishers` (`id`, `created_time`, `modified_time`, `name`) VALUES
(1, '2016-09-19 04:49:43', '2016-09-19 04:49:43', '文藝春秋'),
(2, '2016-09-20 11:37:00', '2016-09-20 11:37:00', '新潮文庫'),
(3, '2016-09-20 11:47:00', '2016-09-20 11:47:00', '文響社'),
(4, '2016-09-20 14:02:00', '2016-09-20 14:02:00', 'オライリー・ジャパン'),
(5, '2016-09-20 14:10:00', '2016-09-20 14:10:00', '新風舎'),
(6, '2016-09-20 14:17:00', '2016-09-20 14:17:00', 'マーガレットコミックス');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookinglists`
--
ALTER TABLE `bookinglists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrowinglists`
--
ALTER TABLE `borrowinglists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bookinglists`
--
ALTER TABLE `bookinglists`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `borrowinglists`
--
ALTER TABLE `borrowinglists`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
