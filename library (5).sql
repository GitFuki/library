-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 2016 年 9 朁E28 日 00:26
-- サーバのバージョン： 5.5.49-log
-- PHP Version: 7.0.9

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
-- テーブルの構造 `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 92),
(2, 1, NULL, NULL, 'Authors', 2, 15),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 2, NULL, NULL, 'isAuthorized', 13, 14),
(9, 1, NULL, NULL, 'Bookinglists', 16, 29),
(10, 9, NULL, NULL, 'index', 17, 18),
(11, 9, NULL, NULL, 'view', 19, 20),
(12, 9, NULL, NULL, 'add', 21, 22),
(13, 9, NULL, NULL, 'edit', 23, 24),
(14, 9, NULL, NULL, 'delete', 25, 26),
(15, 9, NULL, NULL, 'isAuthorized', 27, 28),
(16, 1, NULL, NULL, 'Books', 30, 45),
(17, 16, NULL, NULL, 'index', 31, 32),
(18, 16, NULL, NULL, 'view', 33, 34),
(19, 16, NULL, NULL, 'add', 35, 36),
(20, 16, NULL, NULL, 'edit', 37, 38),
(21, 16, NULL, NULL, 'delete', 39, 40),
(22, 16, NULL, NULL, 'search', 41, 42),
(23, 16, NULL, NULL, 'isAuthorized', 43, 44),
(24, 1, NULL, NULL, 'Borrowinglists', 46, 59),
(25, 24, NULL, NULL, 'index', 47, 48),
(26, 24, NULL, NULL, 'view', 49, 50),
(27, 24, NULL, NULL, 'add', 51, 52),
(28, 24, NULL, NULL, 'edit', 53, 54),
(29, 24, NULL, NULL, 'delete', 55, 56),
(30, 24, NULL, NULL, 'isAuthorized', 57, 58),
(31, 1, NULL, NULL, 'Fields', 60, 73),
(32, 31, NULL, NULL, 'index', 61, 62),
(33, 31, NULL, NULL, 'view', 63, 64),
(34, 31, NULL, NULL, 'add', 65, 66),
(35, 31, NULL, NULL, 'edit', 67, 68),
(36, 31, NULL, NULL, 'delete', 69, 70),
(37, 31, NULL, NULL, 'isAuthorized', 71, 72),
(38, 1, NULL, NULL, 'Groups', 74, 89),
(39, 38, NULL, NULL, 'fuki', 75, 76),
(40, 38, NULL, NULL, 'index', 77, 78),
(41, 38, NULL, NULL, 'view', 79, 80),
(42, 38, NULL, NULL, 'add', 81, 82),
(43, 38, NULL, NULL, 'edit', 83, 84),
(44, 38, NULL, NULL, 'delete', 85, 86),
(45, 38, NULL, NULL, 'isAuthorized', 87, 88),
(46, 1, NULL, NULL, 'My', 90, 91);

-- --------------------------------------------------------

--
-- テーブルの構造 `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 2),
(2, NULL, 'Group', 2, NULL, 3, 4),
(3, NULL, 'Group', 3, NULL, 5, 6);

-- --------------------------------------------------------

--
-- テーブルの構造 `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '-1', '-1', '-1', '-1'),
(3, 2, 16, '1', '1', '1', '1'),
(4, 2, 24, '1', '1', '1', '1'),
(5, 2, 9, '1', '1', '1', '1'),
(6, 3, 1, '-1', '-1', '-1', '-1');

-- --------------------------------------------------------

--
-- テーブルの構造 `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(11) unsigned NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_time` datetime NOT NULL,
  `name` varchar(30) NOT NULL,
  `detail` text NOT NULL,
  `photo` varchar(225) DEFAULT NULL,
  `photo_dir` varchar(225) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `authors`
--

INSERT INTO `authors` (`id`, `created_time`, `modified_time`, `name`, `detail`, `photo`, `photo_dir`) VALUES
(1, '2016-09-19 04:50:00', '2016-09-19 04:50:00', '又吉直樹', '１９８０年大阪府生まれ。お笑い芸人。よしもとクリエイティブ・エージェンシー所属。コンビ「ピース」として活動中。著書に「第２図書係補佐」「東京百景」など。', 'matayoshi.jpg', '1'),
(2, '2016-09-20 11:37:00', '2016-09-20 11:37:00', '恩田陸', '１９６４年生まれ。小説家。「ユージニア」で日本推理作家協会賞、「中庭の出来事」で山本周五郎賞受賞。　〈北川悦吏子〉シナリオライター。代表作に「ビューティフルライフ」「ロングバケーション」など。', 'profile_default.png', '2'),
(3, '2016-09-20 11:47:00', '2016-09-20 11:47:00', '安田正', 'ここに筆者の紹介文が入ります。', 'profile_default.png', '3'),
(4, '2016-09-20 14:02:00', '2016-09-20 14:02:00', 'Lynn Beighley', 'ここに筆者の紹介文が入ります。', 'profile_default.png', '4'),
(5, '2016-09-20 14:10:00', '2016-09-20 14:10:00', 'さいとうゆうすけ', 'ここに筆者の紹介文が入ります。', 'profile_default.png', '5'),
(6, '2016-09-20 14:18:00', '2016-09-20 14:18:00', 'シタラマサコ', 'ここに筆者の紹介文が入ります。', 'profile_default.png', '6');

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
  `modified_time` datetime NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo_dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `books`
--

INSERT INTO `books` (`id`, `name`, `author_id`, `publisher_id`, `published`, `field_id`, `bestseller`, `price`, `page`, `isbn`, `summary`, `created_time`, `modified_time`, `photo`, `photo_dir`) VALUES
(2, '火花', 1, 1, '2015-03-01 01:00:00', 1, 1, 1200, 148, 2222222, '奇想の天才である一方で人間味溢れる神谷、彼を師と慕う後輩徳永。芸人の２人が運命のように出会ってから劇は始まった－。笑いとは何か、人間が生きるとは何なのか。『文學界』掲載を書籍化。', '2016-09-19 05:04:00', '2016-09-19 05:04:00', 'hibana_180.jpg', '2'),
(3, '夜のピクニック', 2, 2, '2004-07-20 11:38:00', 1, 1, 1600, 342, 1111111111, '高校最後のイベントに賭けた一つの願い。あの一夜の出来事は、紛れもない「奇跡」だった、とあたしは思う。ノスタルジーの魔術師が贈る、永遠普遍の青春小説。『小説新潮』隔月連載を単行本化。', '2016-09-20 11:38:00', '2016-09-20 11:38:00', 'yorunopicnic.jpg', '3'),
(4, '超一流の雑談力', 3, 1, '2015-05-20 11:48:00', 2, 0, 1380, 223, 2147483647, '一流の雑談は、人もお金も引き寄せる！　「ソフトに見つめてテンポよくあいづち」「会話が終わったらすぐにメモを取る」など、雑談力を高めるための３８の実践的なテクニックと、日常の中でのトレーニング方法を紹介する。', '2016-09-20 11:48:00', '2016-09-20 11:48:00', 'zatsudan.jpg', '4'),
(5, 'Head First PHP&MySQL', 4, 4, '2010-03-20 14:03:00', 3, 0, 4200, 35634, 2147483647, '認知科学、教育心理学に基づいた画期的なWebアプリケーション開発の入門書。セキュリティや正規表現など高度なトピックもカバー。', '2016-09-20 14:03:00', '2016-09-20 14:03:00', 'headfirst_php_mysql.jpg', '5'),
(6, '秋を見たかった雪だるま', 5, 5, '2004-01-20 14:11:00', 4, 0, 1500, 22, 2147483647, 'あああああ', '2016-09-20 14:11:00', '2016-09-20 14:11:00', 'aki_yukidaruma.jpg', '6'),
(7, 'おそ松さん 1', 6, 1, '2016-09-20 14:19:00', 5, 0, 450, 144, 2147483647, '唯一無二の破壊的6つ子ニートギャグ!!\r\n古き良き昭和の時代を席巻した伝説のギャグ「おそ松くん」あの6つ子がひそかに成長を遂げて帰ってきた!\r\n', '2016-09-20 14:19:00', '2016-09-20 14:19:00', 'osomatsu.jpg', '7'),
(13, '夜を乗り越える', 1, 7, '2016-06-01 16:29:00', 6, 0, 885, 270, 2147483647, '芸人で、芥川賞作家の又吉直樹が、\r\n少年期からこれまで読んできた数々の小説を通して、\r\n「なぜ本を読むのか」「文学の何がおもしろいのか」\r\n「人間とは何か」を考える。', '2016-09-27 16:29:00', '2016-09-27 16:29:00', 'yoruwonorikoeru.jpg', '13');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `borrowinglists`
--

INSERT INTO `borrowinglists` (`id`, `book_id`, `user_id`, `borrowed_time`, `return_time`, `created_time`, `modified_time`) VALUES
(3, 2, 1, '2016-09-27 11:52:00', '2016-10-03 11:52:00', '2016-09-27 11:52:00', '2016-09-27 11:52:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `fields`
--

CREATE TABLE IF NOT EXISTS `fields` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `fields`
--

INSERT INTO `fields` (`id`, `name`, `created_time`, `modified_time`) VALUES
(1, '小説', '2016-09-20 11:34:00', '2016-09-20 11:34:00'),
(2, 'ビジネス', '2016-09-20 11:47:00', '2016-09-20 11:47:00'),
(3, 'コンピュータ', '2016-09-20 13:40:00', '2016-09-20 13:40:00'),
(4, '絵本', '2016-09-20 14:07:00', '2016-09-20 14:07:00'),
(5, 'コミック', '2016-09-20 14:18:00', '2016-09-20 14:18:00'),
(6, '新書', '2016-09-27 16:29:00', '2016-09-27 16:29:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'administrators', '2016-09-26 11:24:01', '2016-09-26 11:24:01'),
(2, 'managers', '2016-09-26 11:24:11', '2016-09-26 11:24:11'),
(3, 'users', '2016-09-26 11:24:21', '2016-09-26 11:24:21');

-- --------------------------------------------------------

--
-- テーブルの構造 `publishers`
--

CREATE TABLE IF NOT EXISTS `publishers` (
  `id` int(10) unsigned NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_time` datetime NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `publishers`
--

INSERT INTO `publishers` (`id`, `created_time`, `modified_time`, `name`) VALUES
(1, '2016-09-19 04:49:43', '2016-09-19 04:49:43', '文藝春秋'),
(2, '2016-09-20 11:37:00', '2016-09-20 11:37:00', '新潮文庫'),
(3, '2016-09-20 11:47:00', '2016-09-20 11:47:00', '文響社'),
(4, '2016-09-20 14:02:00', '2016-09-20 14:02:00', 'オライリー・ジャパン'),
(5, '2016-09-20 14:10:00', '2016-09-20 14:10:00', '新風舎'),
(6, '2016-09-20 14:17:00', '2016-09-20 14:17:00', 'マーガレットコミックス'),
(7, '2016-09-27 16:29:00', '2016-09-27 16:29:00', '小学館よしもと新書');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(123) NOT NULL,
  `group_id` varchar(11) NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `tel`, `birthday`, `email`, `username`, `password`, `group_id`, `created_time`, `modified_time`) VALUES
(1, 'Hanako', 'Yamada', '03-1234-5678', '2002-09-26', 'sdafa@gmail.com', 'admin', '$2a$10$CVti5rb11r3gIdFN.YgCfuLlDYFQYx1frRZfI6ie0c74.NXlz/Kma', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Taro', 'Yamada', '03-1234-5678', '1998-09-26', 'sdafa@gmail.com', 'manager', '$2a$10$EP3TxqgqclM4FVjf/WoV.eJis/19CJNwVUMidl3G6CdO0WxgIFOrq', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Sachi', 'Yamada', '03-1234-5678', '2000-09-26', 'asdfa@gmail.com', 'user', '$2a$10$4sfukxQDDdJd4MPfbzoacOiDUKHslDwF0mPLViIs4H1cmo6pD5eCq', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_acos_lft_rght` (`lft`,`rght`),
  ADD KEY `idx_acos_alias` (`alias`);

--
-- Indexes for table `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aros_lft_rght` (`lft`,`rght`),
  ADD KEY `idx_aros_alias` (`alias`);

--
-- Indexes for table `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`),
  ADD KEY `idx_aco_id` (`aco_id`);

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
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
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
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `borrowinglists`
--
ALTER TABLE `borrowinglists`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
