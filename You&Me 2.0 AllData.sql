-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2024-11-07 21:14:31
-- 服务器版本： 5.7.44-log
-- PHP 版本： 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `LikeGirl v5.2.0`
--

-- --------------------------------------------------------

--
-- 表的结构 `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL COMMENT 'headline',
  `aboutimg` varchar(100) NOT NULL COMMENT 'Background image',
  `info1` varchar(50) NOT NULL COMMENT 'Dialogue 1',
  `info2` varchar(50) NOT NULL COMMENT 'Dialogue 2',
  `info3` varchar(50) NOT NULL COMMENT 'Dialogue 3',
  `btn1` varchar(30) NOT NULL COMMENT 'OK button',
  `btn2` varchar(30) NOT NULL COMMENT 'Cancel button',
  `infox1` varchar(30) NOT NULL COMMENT 'x2',
  `infox2` varchar(30) NOT NULL COMMENT 'x2',
  `infox3` varchar(30) NOT NULL COMMENT 'x2',
  `infox4` varchar(30) NOT NULL COMMENT 'x2',
  `infox5` varchar(30) NOT NULL COMMENT 'x2',
  `infox6` varchar(30) NOT NULL COMMENT 'x2',
  `btnx2` varchar(30) NOT NULL COMMENT 'btnx2',
  `infof1` varchar(30) NOT NULL COMMENT 'f3',
  `infof2` varchar(30) NOT NULL COMMENT 'f3',
  `infof3` varchar(30) NOT NULL COMMENT 'f3',
  `infof4` varchar(30) NOT NULL COMMENT 'f3',
  `btnf3` varchar(30) NOT NULL COMMENT 'btnf3',
  `infod1` varchar(30) NOT NULL COMMENT 'd4',
  `infod2` varchar(30) NOT NULL COMMENT 'd4',
  `infod3` varchar(30) NOT NULL COMMENT 'd4',
  `infod4` varchar(30) NOT NULL COMMENT 'd4',
  `infod5` varchar(30) NOT NULL COMMENT 'd4'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `about`
--

INSERT INTO `about` 
(`id`, `title`, `aboutimg`, `info1`, `info2`, `info3`, `btn1`, `btn2`, `infox1`, `infox2`, `infox3`, `infox4`, `infox5`, `infox6`, `btnx2`, `infof1`, `infof2`, `infof3`, `infof4`, `btnf3`, `infod1`, `infod2`, `infod3`, `infod4`, `infod5`) 
VALUES
(
    1, 
    'You & Me About', 
    'https://ibb.co/5sc1cKR', 
    'Hi, welcome to You & Me.', 
    'A place to celebrate love and cherish memories.', 
    'Sharing moments, creating bonds, and keeping them alive.', 
    'Explore More', 
    'End Tour', 
    'You & Me is a heartfelt project by Akash Hasendra.', 
    'Launched with its first version during an exciting journey of love and creativity.', 
    'The current version, v2.0, reflects improved features and continued passion.', 
    '“PHP is an incredible tool,” says the developer, Akash, who enjoys building engaging web experiences.', 
    'Every challenge faced during development was a learning experience.', 
    'Inspired by the beauty of love and the power of technology to bring people closer.', 
    'Why the name You & Me?', 
    'It symbolizes the connection and togetherness shared between loved ones.', 
    '“I wanted the website to resonate with those who value their relationships deeply.”', 
    'The website represents a blend of emotions and creativity.', 
    'This name perfectly captures its essence.', 
    'All front-end sections are designed to be interactive and user-friendly.', 
    'Homepage: index', 
    'Moments: little', 
    'Guestbook: leaving', 
    'About: about', 
    'Thank you for visiting You & Me. We hope you enjoy your time here~.'
);

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `articletext` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `articletime` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `articletitle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `articlename` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` 
(`id`, `articletext`, `articletime`, `articletitle`, `articlename`) 
VALUES
(
    1, 
    '<quote>Quoted Content Style</quote>\n\n<hr>\n\n\n<h1>H1 Font Size Demonstration</h1>\n\n<hr>\n\n\n<h2>H2 Font Size Demonstration</h2>\n\n<hr>\n\n\n<h3>H3 Font Size Demonstration</h3>\n\n<hr>\n\n\n<h4>H4 Font Size Demonstration</h4>\n\n<hr>\n\n\n<h5>H5 Font Size Demonstration</h5>\n\n<hr>\n\n\n<h6>H6 Font Size Demonstration</h6>\n\n<hr>\n\n\n<b>Bold Text</b>\n<s>Strikethrough Text</s>\n<i>Italic Text</i>\n<code>Highlighted Content</code>\n\n<center>Centered Text</center>\n\n\n<!-- Divider Line -->\n<hr>\n<quote>Insert Image</quote>\n<img alt=\"\" src=\"https://lovey.kikiw.cn/Style/img/Cover.webp\">\n<!-- Divider Line -->\n<hr>\n<quote>Insert Video</quote>\n\n<video src=\"https://classpic.kikiw.cn/video/fengjing.mp4\" controls></video>\n<!-- Divider Line -->\n<hr>', 
    '2024-11-08', 
    'You & Me v2.0 Article Syntax', 
    'Akash'
);

-- --------------------------------------------------------

--
-- 表的结构 `diySet`
--

CREATE TABLE `diySet` (
  `id` int(11) NOT NULL,
  `headCon` text NOT NULL,
  `footerCon` text NOT NULL,
  `cssCon` text NOT NULL,
  `Pjaxkg` varchar(1) NOT NULL COMMENT 'pjax switch',
  `Blurkg` varchar(1) NOT NULL COMMENT 'Gaussian fuzzy switch'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `diySet`
--

INSERT INTO `diySet` 
(`id`, `headCon`, `footerCon`, `cssCon`, `Pjaxkg`, `Blurkg`) 
VALUES
(
    1, 
    '<!-- Custom font CDN links can be embedded here -->', 
    '&lt;!--&lt;script src=&quot;https://img-love.kikiw.cn/jsxg/yh/yinghua.js&quot;&gt;&lt;/script&gt;--&gt;', 
    '/* Custom CSS styles can be written here without needing <style> tags */', 
    '1', 
    '1'
);

-- --------------------------------------------------------

--
-- 表的结构 `IPerror`
--

CREATE TABLE `IPerror` (
  `id` int(11) NOT NULL,
  `ipAdd` varchar(100) NOT NULL COMMENT 'ip address',
  `Time` varchar(200) NOT NULL COMMENT 'time',
  `State` text NOT NULL COMMENT 'blacklist ip',
  `text` varchar(100) NOT NULL COMMENT 'comment'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `leaving`
--

CREATE TABLE `leaving` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user ID',
  `QQ` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mobile number',
  `text` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Message',
  `time` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ip log',
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Province/city'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `leaving`
--

INSERT INTO `leaving` (`id`, `name`, `QQ`, `text`, `time`, `ip`, `city`) VALUES
(1, 'Akash', '+94767378901', 'You&Me v2.0', '1730984690', '112.97.203.248', 'Kurunegala');

-- --------------------------------------------------------

--
-- 表的结构 `leavSet`
--

CREATE TABLE `leavSet` (
  `id` int(11) NOT NULL,
  `jiequ` varchar(10) NOT NULL COMMENT 'Intercept length',
  `lanjie` varchar(500) NOT NULL COMMENT 'disallowed symbol',
  `lanjiezf` varchar(500) NOT NULL COMMENT 'forbidden word'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `leavSet`
--

INSERT INTO `leavSet` (`id`, `jiequ`, `lanjie`, `lanjiezf`) VALUES
(1, '100', '`~!@#$^&*()=|{}\':;\',\\\\[\\\\].<>/?~！@#￥……&*（）——|{}【】‘；：”“\'。，、？', 'Please enter a valid placeholder');

-- --------------------------------------------------------

--
-- 表的结构 `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL COMMENT 'Login Username',
  `pw` char(32) NOT NULL COMMENT 'login password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `login`
--

INSERT INTO `login` (`id`, `user`, `pw`) VALUES
(1, 'admin', '6f87ada9b67a092b27bcaf094c31aa41');

-- --------------------------------------------------------

--
-- 表的结构 `loveImg`
--

CREATE TABLE `loveImg` (
  `id` int(11) NOT NULL,
  `imgDatd` varchar(100) NOT NULL COMMENT 'date',
  `imgText` varchar(200) NOT NULL COMMENT 'description',
  `imgUrl` varchar(200) NOT NULL COMMENT 'external link'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `loveImg`
--

INSERT INTO `loveImg` (`id`, `imgDatd`, `imgText`, `imgUrl`) VALUES
(1, '2024-11-08', 'Summer solstice is ending. My favorite song to listen to is "Chasing Light"~', 'https://i.mij.rip/2024/11/06/4ccd1ebf620d99ead9b881270eef09fe.webp'),
(2, '2024-11-08', 'So cute! I think its name is "Tuan Tuan"~', 'https://i.mij.rip/2024/11/06/5f26be4a4f3f40ac7e754e9cbcf05005.webp'),
(3, '2024-11-08', 'A recent good Hong Kong movie, really worth watching', 'https://i.mij.rip/2024/11/06/8e5ddbc590fa7a1c32ef05faf58617e4.webp'),
(4, '2024-11-08', 'Got a new road bike, rode 30 kilometers, now my butt hurts...', 'https://i.mij.rip/2024/11/06/eaf38a4ff44c4b01d3d4162d6df8adca.webp'),
(5, '2024-11-08', 'Gulu, such a clear and foolish look', 'https://i.mij.rip/2024/11/06/e4fb1f801ac5a9ea3972f0fcc2a8dd2f.webp'),
(6, '2024-11-08', 'Gulu actually looks pretty decent', 'https://i.mij.rip/2024/11/06/8414967b9df32aa18daa1ee4f7aa279b.webp'),
(7, '2024-11-08', 'I don’t want to ride my new road bike anymore, now I’m in Dongguan, Chang’an area', 'https://i.mij.rip/2024/11/07/db5b6fb76f036086a7c3604eea43ed4f.webp'),
(8, '2024-11-08', 'LikeGirl v5.2.0 Couple Station', 'https://blog.kikiw.cn/img/likegirlCover.png'),
(9, '2024-11-08', 'On the way home from work, Xiao Li and I saw the sunset', 'https://i.mij.rip/2024/11/07/0ee5d10be62700895febedbe7e69969e.jpeg');

-- --------------------------------------------------------

--
-- 表的结构 `lovelist`
--

CREATE TABLE `lovelist` (
  `id` int(11) NOT NULL,
  `icon` int(1) NOT NULL COMMENT 'Completion',
  `eventname` varchar(200) CHARACTER SET utf8mb4 NOT NULL COMMENT 'Content of the event',
  `imgurl` varchar(300) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Image address'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `lovelist`
--

INSERT INTO `lovelist` (`id`, `icon`, `eventname`, `imgurl`) VALUES
(1, 1, 'Go to the cinema together and watch a movie🎬', 'https://i.mij.rip/2024/11/06/8e5ddbc590fa7a1c32ef05faf58617e4.webp'),
(2, 0, 'Go shopping in matching couple outfits🧡', '0'),
(3, 0, 'Take a trip to Disneyland together🍉', '0'),
(4, 0, 'Go swimming together🍇', '0'),
(5, 0, 'Sing a song together and record it🍓', '0'),
(6, 0, 'Cook a meal together in the kitchen🍈', '0'),
(7, 0, 'Have a candlelight dinner together🍒', '0'),
(8, 0, 'Celebrate a birthday together🍑', '0'),
(9, 0, 'Clean the house together🥭', '0'),
(10, 0, 'Write letters to each other and read them aloud🍍', '0'),
(11, 0, 'Go to a haunted house together🥥', '0'),
(12, 0, 'Go bungee jumping together🥝', '0'),
(13, 0, 'Adopt a pet together🍅', '0'),
(14, 0, 'Research lipstick shades together🌽', '0'),
(15, 0, 'Do each other’s makeup👄', '0'),
(16, 0, 'Paint each other’s nails💅', '0'),
(17, 0, 'Make pottery together🎨', '0'),
(18, 0, 'Eat a family meal together🍔', '0'),
(19, 0, 'Stay up all night together to ring in the New Year🕛', '0'),
(20, 0, 'Go on a trip together🛣️', '0'),
(21, 0, 'Go hiking together⛰️🥇', '0'),
(22, 0, 'Ride the Ferris wheel together🎡', '0'),
(23, 0, 'Make a video and document your life together🎥', '0'),
(24, 0, 'Brush each other’s teeth, then kiss🦷', '0'),
(25, 0, 'Watch the sunset and sunrise together🌅🌄', '0'),
(26, 0, 'Wear each other’s clothes and take pictures📸', '0'),
(27, 0, 'Go to the supermarket together and buy some treats🍦', '0'),
(28, 0, 'Ride a hot air balloon together🎈', '0'),
(29, 0, 'Read books together and share your favorite ones📚', '0'),
(30, 0, 'Watch your favorite shows on a rainy day☔', '0'),
(31, 0, 'Bake a cake or dessert together🍰', '0'),
(32, 0, 'Look at the stars together🌌', '0'),
(33, 0, 'Commute together, take the subway🚇', '0'),
(34, 0, 'Take a flight together✈️', '0'),
(35, 0, 'Plant flowers and plants together🌷', '0'),
(36, 0, 'Use couple phone cases together📱', '0'),
(37, 0, 'Visit an aquarium together🐠', '0'),
(38, 0, 'Get drunk together🍻', '0'),
(39, 0, 'Play poker together🃏', '0'),
(40, 0, 'Fix things around the house together🔧', '0'),
(41, 0, 'Watch fireworks together🎆', '0'),
(42, 0, 'Enjoy hotpot together🍲', '0'),
(43, 0, 'Celebrate your anniversary together🎉', '0'),
(44, 0, 'Build a snowman together⛄️', '0'),
(45, 0, 'Go out to eat with friends together🍽️', '0'),
(46, 0, 'Dance together💃🕺', '0'),
(47, 0, 'Listen to music together, sing the same song🎶', '0'),
(48, 0, 'Take a boat ride together🚤', '0'),
(49, 0, 'Go camping together, sleep in a tent⛺️', '0'),
(50, 0, 'Do some DIY crafts together🧶', '0'),
(51, 0, 'Surprise each other with gifts🎁', '0'),
(52, 0, 'Visit places from your past: elementary, high school, or university🏫', '0'),
(53, 0, 'Relax together on the sofa🛋️', '0'),
(54, 0, 'Sleep in and stay in bed together🛏️', '0'),
(55, 0, 'Buy something for each other secretly that you both love but would hesitate to buy🎀', '0'),
(56, 0, 'Take a bus to a new place together, get off wherever you like🚌', '0'),
(57, 0, 'Decorate your home together🏡', '0'),
(58, 0, 'Watch a horror movie together at midnight🎃', '0'),
(59, 0, 'Pick a bouquet of flowers together💐', '0'),
(60, 0, 'Dance in the living room to your favorite song🎧', '0'),
(61, 0, 'Give each other a relaxing massage💆', '0'),
(62, 0, 'Fly a kite together🪁', '0'),
(63, 0, 'Compliment each other and share your love❤️', '0'),
(64, 0, 'Pick each other up from work or school🚶‍♀️🚶‍♂️', '0'),
(65, 0, 'Act like strangers for a day and don’t talk🤫', '0'),
(66, 0, 'Make bento boxes for each other🍱', '0'),
(67, 0, 'Save money together for a shared goal💵', '0'),
(68, 0, 'Go cherry blossom viewing together🌸', '0'),
(69, 0, 'Do face masks together💆‍♀️💆‍♂️', '0'),
(70, 1, 'Visit a zoo together🐯', 'https://i.mij.rip/2024/11/06/c450fe2bd01d5fa03abb1f991a51a839.webp'),
(71, 1, 'Go on a bike ride together🚴‍♂️', 'https://i.mij.rip/2024/11/06/eaf38a4ff44c4b01d3d4162d6df8adca.webp'),
(72, 0, 'Print and hang photos from your travels together📸', '0'),
(73, 0, 'Attend a concert together🎤', '0'),
(74, 0, 'Go to a bar together🍹', '0'),
(75, 0, 'Watch a comedy show together🎭', '0'),
(76, 0, 'Play a game of Truth or Dare together🎲', '0'),
(77, 0, 'Make a wish together at a wishing well💫', '0'),
(78, 0, 'Stay at a 5-star hotel and watch the city skyline at night🌃', '0'),
(79, 0, 'Meet each other’s parents👨‍👩‍👧‍👦', '0'),
(80, 0, 'Pick out rings together💍', '0'),
(81, 0, 'Pick out wedding dresses together👰', '0'),
(82, 0, 'Buy things to decorate your future home together🏠', '0'),
(83, 0, 'Look forward to a sweet future together🍭', '0'),
(84, 0, 'Go stargazing and make a wish upon a star🌠', '0'),
(85, 0, 'Have a picnic in the park together🍇', '0'),
(86, 0, 'Write love letters to each other every year📜', '0'),
(87, 0, 'Go to a spa for a couple’s massage💆‍♀️💆‍♂️', '0'),
(88, 0, 'Surprise each other with breakfast in bed🍳', '0'),
(89, 0, 'Make a scrapbook of your memories together📖', '0'),
(90, 0, 'Have a movie marathon of your favorite films🍿', '0'),
(91, 0, 'Go to a theme park and try all the rides together🎢', '0'),
(92, 0, 'Create a couple’s bucket list and check off items together📋', '0'),
(93, 0, 'Go to a beach and watch the sunset together🏖️', '0'),
(94, 0, 'Cook together👨‍🍳👩‍🍳', '0'),
(95, 0, 'Go horseback riding together🐴', '0'),
(96, 0, 'Do a couple’s photo shoot together📸', '0'),
(97, 0, 'Make a time capsule to open in the future⏳', '0'),
(98, 0, 'Watch wedding video together🎥', '0'),
(99, 0, 'Go on a surprise date together🎁', '0'),
(100, 0, 'Celebrate first anniversary❤️', '0');
-- --------------------------------------------------------

--
-- 表的结构 `text`
--

CREATE TABLE `text` (
  `id` int(11) NOT NULL,
  `boy` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Boy name',
  `girl` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Girl name',
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Website title',
  `logo` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Website logo',
  `writing` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Website copywriting',
  `boyimg` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Boy Mobile',
  `girlimg` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Girl Mobile',
  `startTime` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Start time',
  `icp` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Website ICP number',
  `Copyright` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Website copyright',
  `card1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `card2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `card3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deci1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deci2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deci3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bgimg` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Home page background image URL',
  `userQQ` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Site owner Mobile',
  `userName` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'User name',
  `Animation` int(1) NOT NULL COMMENT 'Animation switch'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Data in dump tables `text`
--
INSERT INTO `text` (`id`, `boy`, `girl`, `title`, `logo`, `writing`, `boyimg`, `girlimg`, `startTime`, `icp`, `Copyright`, `card1`, `card2`, `card3`, `deci1`, `deci2`, `deci3`, `bgimg`, `userQQ`, `userName`, `Animation`) VALUES
(1, 'Akash', 'Piyumi', 'You And Me', 'You & Me v2.0', 'Life is beautiful and so are you.', '647159607', '917640289', '2022-06-05T00:07', 'ICP 200037776', 'Copyright © 2024 You&Me All Rights Reserved.', 'Every little moment', 'Message board', 'About Us', 'It’s romantic when someone is willing to listen to you ramble', 'Write down You\'re messages and blessings here', 'The experiences and memories we’ve had together', 'https://i.ibb.co/TWkDm0m/Web-Cover.png', '+94 767378901', 'Akash', 1);

-- --------------------------------------------------------

--
-- 表的结构 `warning`
--

CREATE TABLE `warning` (
  `id` int(11) NOT NULL,
`ip` varchar(50) NOT NULL COMMENT 'IP address',
`gsd` varchar(50) NOT NULL COMMENT 'Location',
`time` varchar(80) NOT NULL COMMENT 'Time',
`file` varchar(100) NOT NULL COMMENT 'File path'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转储表的索引
--

--
-- 表的索引 `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `diySet`
--
ALTER TABLE `diySet`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `IPerror`
--
ALTER TABLE `IPerror`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `leaving`
--
ALTER TABLE `leaving`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `leavSet`
--
ALTER TABLE `leavSet`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `loveImg`
--
ALTER TABLE `loveImg`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `lovelist`
--
ALTER TABLE `lovelist`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `warning`
--
ALTER TABLE `warning`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `diySet`
--
ALTER TABLE `diySet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `IPerror`
--
ALTER TABLE `IPerror`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `leaving`
--
ALTER TABLE `leaving`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `leavSet`
--
ALTER TABLE `leavSet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `loveImg`
--
ALTER TABLE `loveImg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `lovelist`
--
ALTER TABLE `lovelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- 使用表AUTO_INCREMENT `text`
--
ALTER TABLE `text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `warning`
--
ALTER TABLE `warning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
